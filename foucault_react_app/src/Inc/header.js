import React from 'react';

class Header extends React.Component {
  render() {
    return (
<div>

<div className='topbar'></div>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid nav-contents">
  <a class="navbar-brand" href="/">
    <img src="../assets/favicons/apple-touch-icon-60x60.png" alt="Bootstrap" width="24" height="24" />
    <div class="site-name">Site name</div>
  </a>
  <div class="auth-area-sp">

      <ul>
        <li><a href="/dashboard"><span class="username">user name</span></a></li>

      </ul>


    </div>
  </div>
</nav>


<div className='header'>
  foobar
  {/* <img src="/app/assets/img/dmmy.jpg" /> */}

  header
  <div className='header-logo'>
    <img src='https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/character_logo.svg' />
  </div>
</div>

</div>
    );
  }
}

export default Header;
