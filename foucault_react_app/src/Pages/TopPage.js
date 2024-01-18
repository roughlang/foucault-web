import React from 'react';
import { Link } from 'react-router-dom';

function TopPage() {
  return (
    <div>
      <h1>これはトップページです</h1>
			<Link to="/test">テストページへ</Link>
      {/* ここに他のHTMLやコンポーネントを追加 */}
    </div>
  );
}

export default TopPage;