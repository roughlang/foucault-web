import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import './App.css';

// Pages
import TopPage from './Pages/TopPage';
import TestPage from './Pages/TestPage';
import NotFoundPage from './Pages/NotFoundPage';

// src/index.js または src/App.js



function App() {

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

