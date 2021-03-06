{% load static %}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="INIAD">
    <link href="{% static 'blog/css/default1.css' %}" rel="stylesheet">

    <title>ホーム</title>
    <script type="text/javascript" src="{% static 'blog/js/index.js' %}" ></script>
  </head>
  <body>
    <div id="header">
      <img src="{% static 'blog/img/小見出しを追加 (1).png' %}" alt="Logo">
    </div>



    <h1 class="home">--------東洋大学学食レビュー--------</h1>
    <h2>                        東洋大学学食リスト                        </h2>

 
    <form action="{% url 'index' %}" method="post">
    <div class="box-cla_foods">
      
      <ul class="column col7 sp2 clearfix">
        <li>
          <a href="/recipe/cla_foods/niku/01.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/yurinchi1.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">油淋鶏</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/02.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/cheeseteppan1.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">チーズ鉄板焼き</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/03.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/カツカレーと牛肉.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">カツカレーと牛肉</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/04.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/INIADハンバーグ定食.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">INIADハンバーグ定食</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/05.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/チキンカレーとカツ.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">チキンカレーとカツ</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/06.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/チキン南蛮.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">チキン南蛮</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/07.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/日替わりラーメン.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">日替わりラーメン</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/08.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/辛豚肉.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">辛豚肉</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/09.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/チーズ.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">チーズ</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/10.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/豚肉ドリア.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">豚肉ドリア</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/11.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/麻婆豆腐.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">麻婆豆腐</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/12.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/インドカレー.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">インドカレー</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/13.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/オムライス.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">オムライス</p>
          </a>
        </li>
        <li>
          <a href="/recipe/cla_foods/niku/14.html">
            <div class="img-mask">
              <figure>
                <img src="{% static 'blog/img/あっさりラーメン.jpg' %}">
              </figure>
            </div>
            <p class="column-text-ttl-center">あっさりラーメン</p>
          </a>
        </li>
      </ul>
    </div>
    <div class="ttl-line"></div>
      {% csrf_token %}
      <div>
        <label for="titleInput">メニュー名</label><br>
        <input id="titleInput" name="title" type="text" placeholder="メニュー名を入力してください">
      </div>
      <div>
        <label for="textInput">感想</label><br>
        <textarea id="textInput" name="text" rows="10" placeholder="感想を入力してください"></textarea>
      </div>
      <div>
        <button type="submit">送信</button>
      </div>
    </form>
    <br>

    
    
    {% if articles %}
    {% for article in articles %}
    <div class="text">
      <h2><a href="{% url 'detail' article.id %}">{{  article.title }}</a></h2>
      <small>[{{ article.posted_at }}]</small>
      <div>
        <a href="{% url 'like' article.id %" >
          Like: <span id="like{{article.id}}">{{ article.like }}</span>
        </a>
      </div>
      <div>
        {{ article.body |linebreaksbr }}
      </div>
    </div>
    {% endfor %}
    {% else %}
    <p>記事がありません</p>
    {% endif %}
  </body>
</html>
