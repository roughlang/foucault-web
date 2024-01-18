import React from 'react';
import { Link } from 'react-router-dom';

function TestPage() {
  return (
    <div>
      <h1>これはテストページです</h1>
      <Link to="/">トップページへ</Link>
      {/* ここに他のHTMLやコンポーネントを追加 */}
    </div>
  );
}

export default TestPage;

