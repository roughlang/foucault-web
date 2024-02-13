import React from 'react';


class Footer extends React.Component {
  render() {
    return (
      <div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <ul>
          <li><a href="/sitemap">サイトマップ</a></li>
          <li><a href="/contact">お問い合わせ</a></li>
          <li><a href="https://example.com/">会社情報</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul>
          <li><a href="https://example.com/">YouTube</a></li>
          <li><a href="https://example.com/">Line</a></li>s
          <li><a href="https://example.com/">利用規約</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul>
          <li><a href="https://example.com/">Facebook</a></li>
          <li><a href="https://example.com/">Twitter</a></li>
          <li><a href="https://example.com/">Instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
  {/* <div class="sns-list">
    <ul>
      <li><a href="https://example.com/">Facebook</a></li>
      <li><a href="https://example.com/">Twitter</a></li>
      <li><a href="https://example.com/">Instagram</a></li>
      <li><a href="https://example.com/">YouTube</a></li>
      <li><a href="https://example.com/">Line</a></li>
    </ul>
  </div> */}
  <div class="copy-right">© 2024 DUMMY, INC. All Rights Reserved</div>
</div>
    );
  }
}

export default Footer;
