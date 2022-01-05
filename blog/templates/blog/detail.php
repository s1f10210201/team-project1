{% load static %}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="INIAD">
    <link href="{% static 'blog/css/default1.css' %}" rel="stylesheet">

    <title>{{ article.title }} の詳細</title>
  </head>
  <body>
    <div id="header">
      <img src="{% static 'blog/img/小見出しを追加 (1).png' %}" alt="Logo">
    </div>
    <h1 class="unhome">コメント</h1>
    <h2>タイトル: {{ article.title }}</h2>
    <small>投稿日時:{{ article.posted_at }}</small>
    <div>
      {{ article.body | linebreaksbr }}
    </div>
    
    <h2>コメント</h2>
    <form action="{% url 'detail' article.id %}" method="post">
      {% csrf_token %}
      <div>
        <textarea id="textInput" name="text" rows="10" placeholder="コメントを入力してください"></textarea>
      </div>
      <div>
        <button type="submit">送信</button>
      </div>
    </form>

    {% if comments %}
    {% for comment in comments %}
    <div class="text">
      <small>[{{ comment.posted_at }}]</small>
      <div>
        {{ comment.text | linebreaksbr }}
      </div>
    </div>
    {% endfor %}
    {% else %}
    <p>コメントはありません</p>
    {% endif %}

    <hr>
    <p>
  	  <a href="{% url 'index' %}">ホーム</a> | 
      <a href="{% url 'update' article.id %}">編集</a> | 
      <a href="{% url 'delete' article.id %}">削除</a>  
	  </p>
  </body>
</html>
