import React from 'react';
import { Route, Switch } from 'react-router-dom';
import Home from './components/Home';
import TestPage from './components/TestPage';
// 他のページもインポート

const Routes = () => {
  return (
    <Switch>
      <Route path="/" exact component={Home} />
      <Route path="/test" component={TestPage} />
      {/* 他のルートもここに追加 */}
    </Switch>
  );
};
console.log(Routes);
export default Routes;
