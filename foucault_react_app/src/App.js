import React, { useEffect, useState } from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import axios from 'axios';
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
    
    const me = process.env.REACT_APP_URL+'/api/auth/me';
    console.log(me);

    const token = localStorage.getItem('app_token');
    // console.log(typeof(token));
    if (token === null) {
      console.log('nullnull');
    }
    if (typeof(token) === "object") {
      console.log('objectobject');
    }
    if (token) {
      console.log("have token");
      console.log(token.access_token);
      /* get information of user with access token */
      const config = {
        headers: { 'Authorization': `Bearer ${token}` }
      };
      axios.post('http://localhost:8555/api/auth/me', {}, config)
        .then(response => {
          console.log(response.data);
        })
        .catch(error => {
          console.error('Error:', error);
        })
        .finally(() => {
          // 最後に実行する処理があればここに書きます
        });
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

