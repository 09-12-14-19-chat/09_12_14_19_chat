<script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
<script>
    $(document).ready(function() {
        var formInputs = $('input[type="text"],input[type="password"]');
        formInputs.focus(function() {
            $(this).parent().children('p.formLabel').addClass('formTop');
            $('div#formWrapper').addClass('darken-bg');
            $('div.logo').addClass('logo-active');
        });
        formInputs.focusout(function() {
            if ($.trim($(this).val()).length == 0) {
                $(this).parent().children('p.formLabel').removeClass('formTop');
            }
            $('div#formWrapper').removeClass('darken-bg');
            $('div.logo').removeClass('logo-active');
        });
        $('p.formLabel').click(function() {
            $(this).parent().children('.form-style').focus();
        });
    });
</script>

<!DOCTYPE html>
<html lang="jps">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/page1.css">

    <title></title>
</head>

<body>
    <div style="
    width: auto;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
">
        <form action="question_post.php" method="POST" style="
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    background: azure;
    opacity: 83%;
    width: 62%;
    height: 98%;
    margin: top;
    margin-top: 21%;
">
            <p style="text-align: center;">アンケートの回答から、気の合う仲間が集まるチャットルームにご案内。</p>

            <h1>QUESTION</h1>
            <h2>
                どっち派？？？？
            </h2>
            <div>
                <input type="radio" name="like" value="1">アウトドア
                <input type="radio" name="like" value="2">インドア
            </div>
            <h2>どっち派？？？？</h2>
            <div>
                <input type="radio" name="likefood" value="1">イタリアン
                <input type="radio" name="likefood" value="2">中華
            </div>
            <input type="submit">
        </form>
    </div>
</body>

</html>
