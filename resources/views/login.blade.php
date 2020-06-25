<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <div class="header flex"></div>
    <div class="right flex">
      <p>新規登録</p>
      <p>ログイン</p>
    </div>
    <div class="card">
      <p>ログイン</p>
      <div class="form">
        <input placeholder="メールアドレス" type="email" />
        <input placeholder="パスワード" type="password" />
        <button>ログイン</button>
      </div>
    </div>
  </body>
</html>
<style>
.flex {
display: flex;

}
.right p {
  margin-right: 20px;
  cursor: pointer;
}
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
@media screen and (max-width:480px) {
  .logo {
  width: 100px;
  height: 25px;
  }
  .right p {
  margin-right: 10px;
  font-size: 10px;
  }
  .card {
  margin: 100px 20px;
  width: 80%;
  }
}
</style>