{% load static %}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="INIAD">
    <link href="{% static 'blog/css/default1.css' %}" rel="stylesheet">

    <title>{{article.title }} の編集</title>
  </head>
  <body>
    <div id="header">
      <img src="{% static 'blog/img/小見出しを追加 (1).png' %}" alt="Logo">
    </div>
    <h1 class="unhome">編集</h1>
    <form action="{% url 'update' article.id %}" method="post">
      {% csrf_token %}
      <div>
        <label for="titleInput">メニュー名</label><br>
        <input id="titleInput" name="title" type="text"
          placeholder="メニュー名を入力してください" value="{{ article.title }}">
      </div>
      <div>
        <label for="textInput">感想</label><br>
        <textarea id="textInput" name="text" rows="10" placeholder="感想を入力してください">{{ article.body }}</textarea>
      </div>
      <div>
        <button type="submit">送信</button>
      </div>
    </form>
  </body>
</html>
