import React, { useEffect } from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import './App.css';

// Pages
import TopPage from './Pages/TopPage';
import TestPage from './Pages/TestPage';
import NotFoundPage from './Pages/NotFoundPage';

// src/index.js または src/App.js



function App() {

  // useEffect(() => {
  //   // 環境変数名を適切なものに修正してください
  //   const cssBaseUrl = process.env.REACT_APP_URL;
  //   // console.log(cssBaseUrl);
  //   if (cssBaseUrl) { // cssBaseUrlがundefinedまたは空文字列でないことを確認
  //     const link = document.createElement('link');
  //     link.rel = 'stylesheet';
  //     // URLを結合する際にスラッシュを正しく配置
  //     link.href = `${cssBaseUrl}assets/css/_main.css?mode=223`; // バージョンやクエリパラメータを適宜調整
  //     // console.log(link.href);
  //     link.media = 'screen';
  //     document.head.appendChild(link);
  //   }
  // }, []);

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

