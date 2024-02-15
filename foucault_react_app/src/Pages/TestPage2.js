import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';

function TestPage2() {
  const [name, setName] = useState('');
  
  /* Ajax axios sample */
  useEffect(() => {
    axios.get('http://localhost:8555/api/sample_api/test1')
      .then(response => {
        console.log(response.data.personal_info.name);
        setName(response.data.personal_info.name);
      })
      .catch(error => {
        console.error('Error:', error);
      })
      .finally(() => {
        //
      });
  }, []);

  return (
    <div>
      <h1>これはテストページ2です</h1>
      <p>名前: {name}</p>
      <Link to="/">トップページへ</Link>
      {/* ここに他のHTMLやコンポーネントを追加 */}
    </div>
  );
}

export default TestPage2;