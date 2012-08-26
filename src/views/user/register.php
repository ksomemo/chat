<h1>ユーザ登録</h1>
<form action="" method="post">
    <div>
        <label for="name">名前</label>
        <input type="text" name="name" id="name" value="">
    </div>

    <div>
        <label for="mail">メールアドレス</label>
        <input type="text" name="mail" id="mail" value="">
    </div>

    <div>
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password" value="">
    </div>

    <div>
        <label>性別</label>
        <input type="radio" name="sex" id="sex_1" value="1">
        <label for="sex_1">男</label>
        <input type="radio" name="sex" id="sex_2" value="2">
        <label for="sex_2">女</label>
    </div>

    <div>
        <label>生年月日</label>
        <select name="year">
            <option value="1980">1980</option>
            <option value="1990">1990</option>
            <option value="2000">1990</option>
        </select>
        <select name="month">
            <option value="1">1</option>
            <option value="6">6</option>
            <option value="12">12</option>
        </select>
        <select name="day">
            <option value="1">1</option>
            <option value="15">15</option>
            <option value="30">30</option>
        </select>
    </div>

    <div>
        <input type="checkbox" name="agreement" id="agreement" value="1">
        <label for="agreement">規約に同意</label>
    </div>


    <div>
        <input type="submit" value="送信">
    </div>

</form>