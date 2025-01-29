<form action="{{ route('quiz.submit') }}" method="POST">
    @csrf
    <div style="display: flex;">
        <!-- Kiri: Bahan Bacaan -->
        <div style="width: 50%; padding: 10px; border-right: 1px solid #ccc;">
            @foreach ($questions as $index => $question)
                <div id="reading-{{ $index }}" style="{{ $index === 0 ? '' : 'display: none;' }}">
                    <h3>Bahan Bacaan {{ $index + 1 }}</h3>
                    <p>{{ $question->reading_material }}</p>
                </div>
            @endforeach
        </div>

        <!-- Kanan: Soal -->
        <div style="width: 50%; padding: 10px;">
            @foreach ($questions as $index => $question)
                <div id="question-{{ $index }}" style="{{ $index === 0 ? '' : 'display: none;' }}">
                    <h3>Soal {{ $index + 1 }}</h3>
                    <p>{{ $question->question }}</p>
                    @foreach (json_decode($question->options) as $option)
                        <label>
                            <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option }}">
                            {{ $option }}
                        </label><br>
                    @endforeach
                </div>
            @endforeach

            <button type="button" id="prev" style="display: none;">Kembali</button>
            <button type="button" id="next">Selanjutnya</button>
            <button type="submit" id="submit" style="display: none;">Kirim</button>
        </div>
    </div>
</form>

<script>
    let current = 0;
    const total = {{ count($questions) }};
    document.getElementById('next').addEventListener('click', function() {
        document.getElementById(`reading-${current}`).style.display = 'none';
        document.getElementById(`question-${current}`).style.display = 'none';
        current++;
        document.getElementById(`reading-${current}`).style.display = '';
        document.getElementById(`question-${current}`).style.display = '';
        toggleButtons();
    });
    document.getElementById('prev').addEventListener('click', function() {
        document.getElementById(`reading-${current}`).style.display = 'none';
        document.getElementById(`question-${current}`).style.display = 'none';
        current--;
        document.getElementById(`reading-${current}`).style.display = '';
        document.getElementById(`question-${current}`).style.display = '';
        toggleButtons();
    });
    function toggleButtons() {
        document.getElementById('prev').style.display = current === 0 ? 'none' : '';
        document.getElementById('next').style.display = current === total - 1 ? 'none' : '';
        document.getElementById('submit').style.display = current === total - 1 ? '' : 'none';
    }
</script>
