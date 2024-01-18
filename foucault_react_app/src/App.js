import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import logo from './logo.svg';
import './App.css';
// Pages
import TopPage from './Pages/TopPage';
import TestPage from './Pages/TestPage';

function App() {
  return (
    <Router>
      <Routes>
      <Route path="/" element={<TopPage />} />
        {/* <Route path="/" element={
          <div className="App">
            <header className="App-header">
              <img src={logo} className="App-logo" alt="logo" />
              <p>
                Edit <code>src/App.js</code> and save to reload.
              </p>
              <a
                className="App-link"
                href="https://reactjs.org"
                target="_blank"
                rel="noopener noreferrer"
              >
                Learn React foobar2
              </a>
            </header>
          </div>
        } /> */}
        <Route path="/test" element={<TestPage />} />
        {/* 他のルートもここに追加可能 */}
      </Routes>
    </Router>
  );
}

export default App;
