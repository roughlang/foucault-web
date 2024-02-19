import React, { useEffect, useState } from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import axios from 'axios';
import { AuthProvider } from './AuthContext'; // AuthProviderのインポート
import './App.css';

// Pages
import TopPage from './Pages/TopPage';
import TestPage from './Pages/TestPage';
import TestPage2 from './Pages/TestPage2';
import TestPage3 from './Pages/TestPage3';
import NotFoundPage from './Pages/NotFoundPage';

function App() {
  const [isLoggedIn, setIsLoggedIn] = useState(false);

  useEffect(() => {
    console.log(process.env.REACT_APP_JWT_NAME);
    const tokenString = localStorage.getItem(process.env.REACT_APP_JWT_NAME);
    // const tokenString = localStorage.getItem('hoge');
    // console.log(typeof(token));
    // if (tokenString === null) {
    //   console.log('トークン取得できませんでした。');
    // }
    // if (typeof(token) === "object") {
    //   console.log('objectobject');
    // }
    if (tokenString) {
      console.log("[App.js] got token!");
      // console.log(typeof(tokenString));
      // console.log(tokenString);

      const access_token = JSON.parse(tokenString);
      console.log(access_token.access_token);

      /* get information of user with access token */
      const config = {
        headers: { 'Authorization': `Bearer ${access_token.access_token}` }
      };
      console.log( process.env.REACT_APP_URL + '/api/auth/me' );
      axios.post( process.env.REACT_APP_URL + '/api/auth/me', {}, config)
        .then(response => {
          console.log(response.data);
          console.log(typeof(response.data));

          console.log(response.data.id);
          console.log(response.data.user_unique_id);
          console.log(response.data.name);
          console.log(response.data.email);
        })
        .catch(error => {
          console.error('Error:', error);
        })
        .finally(() => {
          // 最後に実行する処理があればここに書きます
        });
    } else {
      console.log('[App.js] can not get token.');
    }
  },[]);


  




  return (
    <Router basename="/app">
      <Routes>
        <Route path="/" element={<TopPage />} />  
        <Route path="/test" element={<TestPage />} />
        <Route path="/test2" element={<TestPage2 />} />
        <Route path="/test3" element={<TestPage3 />} />
        <Route path="*" element={<NotFoundPage />} />
        {/* 他のルートもここに追加可能 */}
      </Routes>
    </Router>
  );
}

export default App;

