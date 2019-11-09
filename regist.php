<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
        <style>
          .error { color:red; }
          span { color: red; }
        </style>

</head>
<body>

<?php session_start(); ?>
<?php
$errors = array();
var_dump($errors);
?>

<!-- ▽▽▽ページコンテンツ▽▽▽ -->
<div class="contents">
  <div class="contactBOX">

    <form action="sample.php" method="post">
       <dl>


        <div class='error'><?php if(!empty($_SESSION['errors']['jobCategory'])){ echo $_SESSION['errors']['jobCategory']; } ?></div>

        <dt>ご希望の職種<span>必須</span></dt>
        <dd class="form-select">
          <select name="jobCategory" >
            <option value="">選択してください</option>
            <option value="マネージャー、フルスタックエンジニア" <?php if(!empty($_SESSION['jobCategory']) && $_SESSION['jobCategory'] === 'マネージャー、フルスタックエンジニア' ) { echo 'selected';} ?>>マネージャー、フルスタックエンジニア</option>
            <option value="オープン系システムエンジニア、プログラマー" <?php if(!empty($_SESSION['jobCategory']) && $_SESSION['jobCategory'] === 'オープン系システムエンジニア、プログラマー' ) { echo 'selected';} ?>>オープン系システムエンジニア、プログラマー</option>
            <option value="WEB系エンジニア、プログラマー" <?php if(!empty($_SESSION['jobCategory']) && $_SESSION['jobCategory'] === 'WEB系エンジニア、プログラマー' ) { echo 'selected';} ?>>WEB系エンジニア、プログラマー</option>
            <option value="フロントエンドエンジニア、デザイナー" <?php if(!empty($_SESSION['jobCategory']) && $_SESSION['jobCategory'] === 'フロントエンドエンジニア、デザイナー' ) { echo 'selected';} ?>>フロントエンドエンジニア、デザイナー</option>
          </select>
        </dd>

        <div class='error'><?php if(!empty($_SESSION['errors']['CheckboxGroup2'])){ echo $_SESSION['errors']['CheckboxGroup2']; } ?></div>

        <dt>お問合せ内容<span>必須</span></dt>
        <dd id="form_select">
          <input type="checkbox" name="CheckboxGroup2" value="システム開発" id="Group1_1" class="checkbox01" 
            <?php if(!empty($_SESSION['CheckboxGroup2']) && $_SESSION['CheckboxGroup2'] === 'システム開発'){ echo 'checked'; }?>
          />
          <label for="Group1_1" class="check_label" >システム開発</label>
          <input type="checkbox" name="CheckboxGroup2" value="WEBサイト構築" id="Group1_2" class="checkbox01" 
            <?php if(!empty($_SESSION['CheckboxGroup2']) && $_SESSION['CheckboxGroup2'] === 'WEBサイト構築'){ echo 'checked'; }?>
          />
          <label for="Group1_2" class="check_label" >WEBサイト構築</label>
          <input type="checkbox" name="CheckboxGroup2" value="RPAサービス" id="Group1_3" class="checkbox01" 
            <?php if(!empty($_SESSION['CheckboxGroup2']) && $_SESSION['CheckboxGroup2'] === 'RPAサービス'){ echo 'checked'; } ?>
          />
          <label for="Group1_3" class="check_label" >RPAサービス</label>
          <input type="checkbox" name="CheckboxGroup2" value="サーバー構築" id="Group1_4" class="checkbox01" 
            <?php if(!empty($_SESSION['CheckboxGroup2']) && $_SESSION['CheckboxGroup2'] === 'サーバー構築'){ echo 'checked'; } ?>
          />
          <label for="Group1_4" class="check_label" >サーバー構築</label>
          <input type="checkbox" name="CheckboxGroup2" value="その他" id="Group1_5" class="checkbox01" 
            <?php if(!empty($_SESSION['CheckboxGroup2']) && $_SESSION['CheckboxGroup2'] === 'その他'){ echo 'checked'; } ?>
          />
          <label for="Group1_5" class="check_label" >その他</label>
        </dd>

        <div class='error'><?php if(!empty($_SESSION['errors']['name1'])){ echo $_SESSION['errors']['name1']; } ?></div>

        <dt>会社名<span>必須</span></dt>
        <dd><input type="text" name="name1" value="<?php if(!empty($_SESSION['name1'])) { echo $_SESSION['name1']; } ?>" placeholder="クラウドスミス" >
        </dd>

        <div class='error'><?php if(!empty($_SESSION['errors']['url'])){ echo $_SESSION['errors']['url']; } ?></div>

        <dt>URL</dt>
        <dd><input type="url" name="url" value="<?php if(!empty($_SESSION['url'])) { echo $_SESSION['url']; } ?>" placeholder="https://xxx.co.jp"></dd>
   
        <div class='error'><?php if(!empty($_SESSION['errors']['name2'])){ echo $_SESSION['errors']['name2']; } ?></div>

        <dt>お名前<span>必須</span></dt>
        <dd><input type="text" name="name2" value="<?php if(!empty($_SESSION['name2'])) { echo $_SESSION['name2']; } ?>" placeholder="蔵人　スミス" ></dd>

        <div class='error'><?php if(!empty($_SESSION['errors']['name3'])){ echo $_SESSION['errors']['name3']; } ?></div>

        <dt>お名前(フリガナ)<span>必須</span></dt>
        <dd><input type="text" name="name3" value="<?php if(!empty($_SESSION['name3'])) { echo $_SESSION['name3']; } ?>" placeholder="クラウド　スミス" ></dd>

        <div class='error'><?php if(!empty($_SESSION['errors']['mail'])){ echo $_SESSION['errors']['mail']; } ?></div>

        <dt>メールアドレス<span>必須</span></dt>
        <dd><input type="email" name="mail" value="<?php if(!empty($_SESSION['mail'])) { echo $_SESSION['mail']; } ?>" placeholder="cloud@smith.jp" ></dd>

        <div class='error'><?php if(!empty($_SESSION['errors']['mail_confirmation'])){ echo $_SESSION['errors']['mail_confirmation']; } ?></div>

        <dt>メールアドレス(確認)<span>必須</span></dt>
        <dd><input type="text" name="mail_confirmation" value="<?php if(!empty($_SESSION['mail_confirmation'])) { echo $_SESSION['mail_confirmation']; } ?>" placeholder="cloud@smith.jp" ></dd>

        <div class='error'><?php if(!empty($_SESSION['errors']['tel'])){ echo $_SESSION['errors']['tel']; } ?></div>

        <dt>電話番号<span>必須</span></dt>
        <dd><input type="tel" name="tel" value="<?php if(!empty($_SESSION['tel'])) { echo $_SESSION['tel']; } ?>" placeholder="0000-456-789" ></dd>

          <div class='error'><?php if(!empty($_SESSION['errors']['renraku'])){ echo $_SESSION['errors']['renraku']; } ?></div>

          <dt>弊社からのご連絡<span>必須</span></dt>
          <dd class="checkboxDD">
            <label>
              <input type="checkbox" name="renraku" value="お電話でのご連絡" 
                <?php if(!empty($_SESSION['renraku']) && $_SESSION['renraku'] === 'お電話でのご連絡'){ echo 'checked'; } ?> 
                >&nbsp;お電話でのご連絡
            </label><br>
            <label>
              <input type="checkbox" name="renraku" value="メールでのご連絡"
              <?php if(!empty($_SESSION['renraku']) && $_SESSION['renraku'] === 'メールでのご連絡'){ echo 'checked'; } ?>
              >&nbsp;メールでのご連絡
            </label>
          </dd>

          <dt>弊社を知ったきっかけ</dt>
          <dd class="checkboxDD">
            <label>
              <input type="checkbox" name="kikkake" value="WEB検索" 
                <?php if(!empty($_SESSION['kikkake']) && $_SESSION['kikkake'] === 'WEB検索'){ echo 'checked'; } ?>
                >&nbsp;WEB検索
            </label><br>
            <label>
              <input type="checkbox" name="kikkake" value="ブログ記事"
                <?php if(!empty($_SESSION['kikkake']) && $_SESSION['kikkake'] === 'ブログ記事'){ echo 'checked'; } ?>
                >&nbsp;ブログ記事
            </label><br>
            <label>
              <input type="checkbox" name="kikkake" value="ご紹介"
                <?php if(!empty($_SESSION['kikkake']) && $_SESSION['kikkake'] === 'ご紹介'){ echo 'checked'; } ?>
                >&nbsp;ご紹介</label><br>
            <label>
              <input type="checkbox" name="kikkake" value="その他"
                <?php if(!empty($_SESSION['kikkake']) && $_SESSION['kikkake'] === 'その他'){ echo 'checked'; } ?>
                >&nbsp;その他
            </label>
          </dd>

          <div class='error'><?php if(!empty($_SESSION['errors']['request'])){ echo $_SESSION['errors']['request']; } ?></div>

          <dt>お問合せ内容<span>必須</span></dt>
          <dd><textarea name="request" value="" placeholder="システム開発" ><?php if(!empty($_SESSION['request'])) { echo $_SESSION['request']; } ?></textarea></dd>

        </dl>

        <div class='error'><?php if(!empty($_SESSION['errors']['radio1'])){ echo $_SESSION['errors']['radio1']; } ?></div>

        <p>当社の「プライバシーポリシー」に同意の上ご利用ください。同意していただける場合は>下の[同意する]をクリックしてください。</p>
        <div class="position_radio">
          <input type="radio" name="radio1" value="同意しない" <?php if(!empty($_SESSION['radio1']) && $_SESSION['radio1'] === "同意しない" ){ echo 'checked'; } ?>  />
          <label for="formDisagree">&nbsp;同意しない</label>
          <input type="radio" name="radio1" value="同意する" <?php if(!empty($_SESSION['radio1']) && $_SESSION['radio1'] === "同意する" ){ echo 'checked'; } ?> />
          <label for="formAgree">&nbsp;同意する</label>
        </div>

            <input type="submit" name="" value="送信">
      </form>

    </div>



  </div>
  <!-- △△△ページコンテンツ△△△ -->



<footer class="section">
  <h1>CONTACT</h1>
</footer>


<?php $_SESSION = array(); ?>
</body>
</html>
