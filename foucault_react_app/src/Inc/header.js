import React from 'react';
import { redirect } from 'react-router-dom';


class Header extends React.Component {
  render() {
    const topbarStyle = {
      background: '#000',
    };
    const apiUrl = process.env.REACT_APP_API_URL;
    return (

<div>
<div className='topbar' style={topbarStyle}></div>
<nav className="navbar navbar-expand-lg bg-body-tertiary">
  <div className="container-fluid nav-contents">
    <a className="navbar-brand" href="/">
      <img src="/app/assets/favicons/apple-touch-icon-60x60.png" alt="Bootstrap" width="24" height="24" />
      <div className="site-name">Site name</div>
    </a> 
    <div class="auth-area-sp">
      <ul>
        <li class="login">
          <a href="/login" class="btn btn-outline-secondary btn-sm login-link" role="button" aria-disabled="true">Login</a>
        </li>
        <li class="register">
          <a href="/register" class="btn btn-secondary btn-sm ml10 register-link" role="button" aria-disabled="true">Signin</a>
        </li>
      </ul>
    </div>

  </div>
</nav>

</div>
    );
  }
}

export default Header;

/*

/Users/yamakami_osamu/Documents/Roughlang/repos/foucault-web
<img src={`${process.env.REACT_APP_BASE_URL}/path/to/image.png`} alt="description" />

*/
