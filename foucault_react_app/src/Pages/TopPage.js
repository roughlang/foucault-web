import React from 'react';
import { Link } from 'react-router-dom';
import { useAuth } from '../AuthContext';
// Include



function TopPage() {
  // const { currentUser, isLoggedIn } = useAuth();
  return (
    <div>
      <h1>これはトップページです??</h1>
      <ul>
        <li><Link to="/test">テストページへ</Link></li>
        <li><Link to="/test2">テストページ2へ</Link></li>
        <li><Link to="/test3">テストページ3へ</Link></li>
      </ul>
      {/* ここに他のHTMLやコンポーネントを追加 */}
      <div class="height-adjust-300"></div>
{/*       
        {isLoggedIn ? (
          <p>こんにちは、{currentUser.name}さん</p>
        ) : (
          <p>ログインしてください。</p>
        )} */}
      
    </div>
  );
}

export default TopPage;