<div>
    <form action="{{route('insert-question')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="question">Câu hỏi</label>
    <input type="text" id="question" name="question"><br>
    <label for="option_a">Phương án 1</label>
    <input type="text" id="option_a" name="option_a"><br>
    <label for="option_b">Phương án 2</label>
    <input type="text" id="option_b" name="option_b"><br>
    <label for="option_c">Phương án 3</label>
    <input type="text" id="option_c" name="option_c"><br>
    <label for="option_d">Phương án 4</label>
    <input type="text" id="option_d" name="option_d"><br>
    <label for="answer">Đáp án</label>
    <input type="text" id="answer" name="answer"><br>
    <input type="submit" value="Submit">
    </form>
</div>