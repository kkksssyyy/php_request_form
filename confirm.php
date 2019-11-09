<html>
<head>
        <meta charset="utf-8">
        <title>Confirm</title>
</head>
<body>
<?php session_start(); ?>
    <!-- ▽▽▽ページコンテンツ▽▽▽ -->
    <div class="contents">
      <div class="contactBOX">
      <p class="infoBOX">入力内容をご確認ください。以下の内容で送信します。</p>

	<table>

	<tr>
        <td>ご希望の職種</td>
        <td><?php echo $_SESSION['jobCategory']; ?></td>
        </tr>

        <tr>
	<tr>
	<td>お問い合わせ内容</td>
	<td><?php echo $_SESSION['CheckboxGroup2']; ?></td>
	</tr>

	<tr>
        <td>会社名</td>
        <td><?php echo $_SESSION['name1']; ?></td>
        </tr>

	<tr>
        <td>URL</td>
        <td><?php echo $_SESSION['url']; ?></td>
        </tr>

	<tr>
        <td>お名前</td>
        <td><?php echo $_SESSION['name2']; ?></td>
        </tr>

	<tr>
        <td>お名前（フリガナ）</td>
        <td><?php echo $_SESSION['name3']; ?></td>
        </tr>

	<tr>
        <td>メールアドレス</td>
        <td><?php echo $_SESSION['mail']; ?></td>
        </tr>

	<tr>
        <td>メールアドレス（確認）</td>
        <td><?php echo $_SESSION['mail_confirmation']; ?></td>
        </tr>

	<tr>
        <td>電話番号</td>
        <td><?php echo $_SESSION['tel']; ?></td>
        </tr>

	<tr>
        <td>弊社からのご連絡</td>
        <td><?php echo $_SESSION['renraku']; ?></td>
        </tr>

	<tr>
        <td>弊社を知ったきっかけ</td>
	<td><?php echo $_SESSION['kikkake']; ?></td>
        </tr>

	<tr>
        <td>お問い合わせ内容</td>
        <td><?php echo nl2br($_SESSION['request']); ?></td>
        </tr>

        <tr>
        <td>個人情報の取り扱い</td>
        <td><?php echo $_SESSION['radio1']; ?></td>
        </tr>

	</table>

	<form action="index.php" method="post">
	<input type="hidden" name="jobCategory" value="<?php echo $_SESSION['jobCategory']; ?>"></input>
	<input type="hidden" name="CheckboxGroup2" value="<?php echo $_SESSION['CheckboxGroup2']; ?>"></input>
	<input type="hidden" name="name1" value="<?php echo $_SESSION['name1']; ?>"></input>
	<input type="hidden" name="url" value="<?php echo $_SESSION['url']; ?>"></input>
        <input type="hidden" name="name2" value="<?php echo $_SESSION['name2']; ?>"></input>
        <input type="hidden" name="name3" value="<?php echo $_SESSION['name3']; ?>"></input>
        <input type="hidden" name="mail" value="<?php echo $_SESSION['mail']; ?>"></input>
        <input type="hidden" name="mail_confirmation" value="<?php echo $_SESSION['mail_confirmation']; ?>"></input>
        <input type="hidden" name="tel" value="<?php echo $_SESSION['tel']; ?>"></input>
        <input type="hidden" name="renraku" value="<?php echo $_SESSION['renraku']; ?>"></input>
        <input type="hidden" name="kikkake" value="<?php echo $_SESSION['kikkake']; ?>"></input>
        <input type="hidden" name="request" value="<?php echo $_SESSION['request']; ?>"></input>
        <input type="hidden" name="radio1" value="<?php echo $_SESSION['radio1']; ?>"></input>
	<button type="submit" name="action" value="back" formaction="regist.php">戻る</button>
	<button type="submit" name="action" value="sent">送信</button>
	</form>

      </div>
    </div>
    <!-- △△△ページコンテンツ△△△ -->

    <footer class="section">
      <h1>CONFIRM</h1>
    </footer>



    </body>
    </html>
