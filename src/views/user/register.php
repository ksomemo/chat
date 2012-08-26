<h1>ユーザ登録</h1>
<form action="" method="post">
    <div>
        <label for="name">名前</label>
        <input type="text" name="name" id="name" value="<?php echo $input['name'] ?>">
    </div>

    <div>
        <label for="mail">メールアドレス</label>
        <input type="text" name="mail" id="mail" value="<?php echo $input['mail'] ?>">
    </div>

    <div>
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password" value="<?php echo $input['password'] ?>">
    </div>

    <div>
        <label>性別</label>
        <input type="radio" name="sex" id="sex_1" value="1" <?php if ($input['sex'] == 1) echo 'checked' ?>>
        <label for="sex_1">男</label>
        <input type="radio" name="sex" id="sex_2" value="2" <?php if ($input['sex'] == 2) echo 'checked' ?>>
        <label for="sex_2">女</label>
    </div>

    <div>
        <label>生年月日</label>
        <select name="year">
            <option value="1980" <?php if ($input['year'] == 1980) echo 'selected' ?>>1980</option>
            <option value="1990" <?php if ($input['year'] == 1990) echo 'selected' ?>>1990</option>
            <option value="2000" <?php if ($input['year'] == 2000) echo 'selected' ?>>2000</option>
        </select>
        <select name="month">
            <option value="1"  <?php if ($input['month'] == 1)  echo 'selected' ?>>1</option>
            <option value="6"  <?php if ($input['month'] == 6)  echo 'selected' ?>>6</option>
            <option value="12" <?php if ($input['month'] == 12) echo 'selected' ?>>12</option>
        </select>
        <select name="day">
            <option value="1"  <?php if ($input['day'] == 1)  echo 'selected' ?>>1</option>
            <option value="15" <?php if ($input['day'] == 15) echo 'selected' ?>>15</option>
            <option value="30" <?php if ($input['day'] == 30) echo 'selected' ?>>30</option>
        </select>
    </div>

    <div>
        <input type="checkbox" name="agreement" id="agreement" value="1"  <?php if ($input['agreement'] == 1) echo 'checked' ?>>
        <label for="agreement">規約に同意</label>
    </div>


    <div>
        <input type="submit" value="送信">
    </div>

</form>