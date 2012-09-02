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
        <?php foreach ($sex_list as $key => $name) : ?>
            <input type="radio" name="sex" id="sex_<?php echo $key ?>" value="<?php echo $key ?>" <?php if ($input['sex'] == $key) echo 'checked' ?>>
            <label for="sex_<?php echo $key ?>"><?php echo $name ?></label>
        <?php endforeach ?>
    </div>

    <div>
        <label>生年月日</label>
        <select name="year">
            <?php foreach ($year_list as $year) : ?>
                <option value="<?php echo $year ?>" <?php if ($input['year'] == $year) echo 'selected' ?>><?php echo $year ?></option>
            <?php endforeach ?>
        </select>
        <select name="month">
            <?php foreach ($month_list as $month) : ?>
                <option value="<?php echo $month ?>" <?php if ($input['month'] == $month) echo 'selected' ?>><?php echo $month ?></option>
            <?php endforeach ?>
        </select>
        <select name="day">
            <?php foreach ($day_list as $day) : ?>
                <option value="<?php echo $day ?>" <?php if ($input['day'] == $day) echo 'selected' ?>><?php echo $day ?></option>
            <?php endforeach ?>
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