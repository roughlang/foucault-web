import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';

function TestPage3() {
  const [token, setToken] = useState('');
  
  /* Ajax axios sample */
  useEffect(() => {
    const userData = {
      email: 'roughlangx@gmail.com', // 実際の値に置き換えてください
      password: '8ta8taDance' // 実際の値に置き換えてください
    };

    const accessToken = null;


    axios.post('http://localhost:8555/api/auth/login', userData)
      .then(response => {
        console.log(response.data);
        console.log(response.data.access_token);
        console.log(response.data.token_type);
        console.log(response.data.expires_in);

        setToken(response.data.access_token);
      })
      .catch(error => {
        console.error('Error:', error);
      })
      .finally(() => {
        // ここに共通のクリーンアップ処理を記述
      });
  }, []);

  return (
    <div>
      <h1>これはLoginのテストページです</h1>
      <Link to="/">トップページへ</Link>
      {token}<br />
      {process.env.REACT_APP_JWT_NAME}
      {/* ここに他のHTMLやコンポーネントを追加 */}
    </div>
  );
}

export default TestPage3;