import React from 'react';
// import { redirect } from 'react-router-dom';


class Header extends React.Component {
  render() {
    const navbarTogglerIconStyle = {
      background: 'none',
    };
    return (
<div>
<div className='topbar'></div>
  <nav className="navbar navbar-expand-lg bg-body-tertiary">
    <div className="container-fluid nav-contents">
      <a className="navbar-brand" href="/">
        <img src="/app/assets/favicons/apple-touch-icon-60x60.png" alt="Bootstrap" width="24" height="24" />
        <div className="site-name">Site name</div>
      </a> 
      <div className="auth-area-sp">
        <ul>
          <li className="login">
            <a href="/login" className="btn btn-outline-secondary btn-sm login-link" aria-disabled="true">Login</a>
          </li>
          <li className="register">
            <a href="/register" className="btn btn-secondary btn-sm ml10 register-link" aria-disabled="true">Signin</a>
          </li>
        </ul>
      </div>
      <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span className="navbar-toggler-icon" style={navbarTogglerIconStyle}>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        </span>
      </button>

      <div class="collapse navbar-collapse nav-menus" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sitemap">Site map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item dropdown">

          {/* <a class="nav-link dropdown-toggle" href="javascript:void(0);#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a> */}
          <button className="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  Dropdown
</button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      
      <div class="auth-area">
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
