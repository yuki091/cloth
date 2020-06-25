<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <div class="header flex">
      <p>新規登録</p>
    </div>
    <div class="card">
      <p>新規登録</p>
      <div class="form">
        <input placeholder="ユーザーネーム" type="text" />
        <input placeholder="プロフィール" type="text" />
        <input placeholder="メールアドレス" type="email" />
        <input placeholder="パスワード" type="password" />
        <button>ログイン</button>
      </div>
    </div>
  </div>
</body>
</html>
<style>
button {
width: 100px;
text-align: center;
padding: 8px 0 10px;
color: #fff;
background-color: #5419da;
border-radius: 25px;
cursor: pointer;
}
.card {
margin: 100px auto;
width: 350px;
background: #fff;
border-radius: 5px;
padding: 20px;
}
.card p {
color: black;
font-weight: bold;
text-align: center;
}
input {
margin-top: 15px;
width: 80%;
border-radius: 10px;
padding: 10px;
border: 1px solid black;
color: black;
}
.form {
text-align: center;
}
.form button {
margin-top: 15px;
}
</style>
