<footer class="footer mt60">
  <div class="container footer-menu">
    <div class="row mt50">
      <div class="col-md-4">
        <ul>
          <li><a href="/contact">お問い合わせ</a></li>
          <li><a href="/terms_of_service">利用規約</a></li>
          <li><a href="/privacy_policy">プライバシーポリシー</a></li>
          <li><a href="/specified_commercial_transaction_act">特定商取引法に基づく表記</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul>
          <li><a href="/about_this_site">当サイトについて</a></li>
          <li><a href="/how_to_use">ご利用方法</a></li>
          <li><a href="https://twitter.com/GGM06605451" target="_blank">Twitter</a></li>
          <li><a href="https://www.instagram.com/roughlangx/" target="_blank">Instagram</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul>
          <li><a href="/products">商品一覧</a></li>
          <li><a href="/blog">ブログ</a></li>
          <li><a href="/blog/archives">Archives</a></li>
        </ul>
      </div>
    </div>
  </div>
  
  <script>
    // 現在のページのURLを取得
    var currentUrl = window.location.pathname;

    // ナビゲーションの各リンク要素を取得
    var navLinks = document.querySelectorAll('.nav-link');

    // 各リンクをループして、現在のページとhref属性を比較し、一致する場合にactiveクラスを追加
    navLinks.forEach(function(link) {
      if (link.getAttribute('href') === currentUrl) {
        link.classList.add('active');
      }
    });
  </script>
  <div class="copy-right text-align-center mt20 mb20">
    <p class="text-center">© <span id="copy_year">2023</span> Roughlang, INC. All Rights Reserved</p>
  </div>
</footer>

</main>
<?php wp_footer(); ?>

<p id="page-top" class="page-top">
  <a href="#">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#333" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
      <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/>
    </svg>
  </a>
</p>
</body>

<script>
// スクロールイベントリスナーを追加
window.addEventListener('scroll', function() {
  var pageTop = document.getElementById('page-top');
  // 特定のスクロール位置を超えたらボタンを表示
  if (window.scrollY > 100) { // 100px以上スクロールしたら表示
    pageTop.classList.add('show');
  } else {
    pageTop.classList.remove('show');
  }
});

// ボタンのクリックイベントリスナーを追加
document.getElementById('page-top').addEventListener('click', function(event) {
  event.preventDefault(); // リンクのデフォルトの動作をキャンセル
  // スムーズにトップにスクロールする
  window.scrollTo({top: 0, behavior: 'smooth'});
});

/* Get year for copy right */
document.addEventListener('DOMContentLoaded', function(){
  const date6 = new Date();
  let year = date6.getFullYear();
  document.getElementById('copy_year').textContent = year;
});

// 現在のページのURLを取得
var currentUrl = window.location.pathname;

// ナビゲーションの各リンク要素を取得
var navLinks = document.querySelectorAll('.nav-link');

// 各リンクをループして、現在のページとhref属性を比較し、一致する場合にactiveクラスを追加
navLinks.forEach(function(link) {
  if (link.getAttribute('href') === currentUrl) {
    link.classList.add('active');
  }
});
</script>

<script>
const app = Vue.createApp({
  data() {
    return {
      sample: null,
      message: 'Hello vue!',
      localStorageKey: 'rghlAccessToken',
      accsessToken: null,
      login: false,
      user: {},
    };
  },
  methods: {
    loginAuthentication() {
      /* get the rghlAccessToken on local storage */
      this.accsessToken = localStorage.getItem(this.localStorageKey);
      console.log(this.accsessToken);
      if (this.accsessToken === null) {
        this.login = false;
      } else if (this.accsessToken) {
        this.login = true;
        /* get user */
        let form = new FormData();
        form.append('email', this.email);
        form.append('password', this.password);
        let config = {
          headers: {
            'Authorization': 'Bearer ' + this.accsessToken
          }
        };
        axios.post('/api/auth/me', form, config)
        .then(response => {
          // console.log(response.data);
          this.user = response.data;
          console.log(this.user.id);
          console.log(this.user.user_id);
          console.log(this.user.name);
          console.log(this.user.email);
          console.log(this.user.created_at);
        })
        .catch(error => {
          console.log(error.response.data.errors);
          this.login = false;
        })
        .finally(() => {
          console.log("finally");
        })
      }
      // axios.get('http;//example.com/')
      // .then((response) => {
      //   this.sample = response.data;
      //   console.log(this.sample);
      // })
      // .catch((error) => {
      //   console.error('APIエラー:', error);
      // });
    }
  },
  mounted() {
    this.loginAuthentication();
  }
});
app.mount('#nav');
</script>

</html>
