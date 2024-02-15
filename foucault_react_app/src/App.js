import React, { useEffect, useState } from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import './App.css';

// Pages
import TopPage from './Pages/TopPage';
import TestPage from './Pages/TestPage';
import NotFoundPage from './Pages/NotFoundPage';

function App() {
  const [isLoggedIn, setIsLoggedIn] = useState(false);
  const [accessToken, setAccessToken] = useState(''); // accessTokenを保持するための状態

  const token = localStorage.getItem('app_token');
  
  const accsessToken = JSON.parse(token);
  console.log(accsessToken.access_token);
  console.log(accsessToken.expires_in);
  console.log(accsessToken.token_type);

  // // ユーザー情報を取得する関数
  // const fetchUserData = async () => {
  //   try {
  //     const response = await fetch('http://localhost:8555/api/auth/me', {
  //       method: 'POST', // または 'GET', エンドポイントに依存する
  //       headers: {
  //         'Content-Type': 'application/json',
  //         'Authorization': `Bearer ${token}` // トークンをヘッダーに含める
  //       }
  //     });

  //     if (!response.ok) {
  //       throw new Error(`HTTP error! status: ${response.status}`);
  //     }

  //     const data = await response.json();
  //     setUserData(data);
  //   } catch (error) {
  //     console.error('Fetching user data failed:', error);
  //   }
  // };

  useEffect(() => {
    // トークンをlocalStorageから取得する
    const token = localStorage.getItem('app_token');
    
    // ユーザー情報を取得する関数
    const fetchUserData = async () => {
      try {
        const response = await fetch('http://localhost:8555/api/auth/me', {
          method: 'POST', // または 'GET', エンドポイントに依存する
          headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${accsessToken.access_token}` // トークンをヘッダーに含める
          }
        });

        console.log(response);
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }

        const data = await response.json();
        // setUserData(data);
      } catch (error) {
        console.error('Fetching user data failed:', error);
      }
    };

    fetchUserData();
  }, []);

  return (
    <Router basename="/app">
      <Routes>
        <Route path="/" element={<TopPage />} />  
        <Route path="/test" element={<TestPage />} />
        <Route path="*" element={<NotFoundPage />} />
        {/* 他のルートもここに追加可能 */}
      </Routes>
    </Router>
  );
}

export default App;

