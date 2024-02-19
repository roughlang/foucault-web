// src/AuthContext.js
import React, { createContext, useContext, useState, useEffect } from 'react';
import axios from 'axios';

const AuthContext = createContext();

export const useAuth = () => useContext(AuthContext);

export const AuthProvider = ({ children }) => {
  const [currentUser, setCurrentUser] = useState(null);
  const [isLoggedIn, setIsLoggedIn] = useState(false);

  useEffect(() => {
    console.log('11111111111111111111');
    const tokenString = localStorage.getItem(process.env.REACT_APP_JWT_NAME);
    if (tokenString) {
      const access_token = JSON.parse(tokenString).access_token;
      const config = { headers: { 'Authorization': `Bearer ${access_token}` } };

      axios.post(`${process.env.REACT_APP_URL}/api/auth/me`, {}, config)
        .then(response => {
        console.log('xxxxxxxxxxxxxxxxxxxxxx');
        console.log(response.data);
          setCurrentUser('hoge');
          setIsLoggedIn(true);
        })
        .catch(error => {
          console.error('Error:', error);
          setIsLoggedIn(false);
        });
    }
  }, []);

  return (
    <AuthContext.Provider value={{ currentUser, isLoggedIn }}>
      {children}
    </AuthContext.Provider>
  );
};
