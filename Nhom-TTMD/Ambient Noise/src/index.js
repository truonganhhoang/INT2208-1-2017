import React from 'react';
import ReactDOM from 'react-dom';
import Home from './Home';
import Timer from './Timer';
import Group from './Group';
import {
  BrowserRouter as Router,
  Route
} from 'react-router-dom'
// import DialogAudio from './DialogAudio';


ReactDOM.render(
  <Router>
    <div>
        <Route exact path="/" component={Home} />
        <Route path="/home" component={Home} />
        <Route path="/timer" component={Timer} />
        <Route path="/group" component={Group} />
    </div>
  </Router>,
  // <Timer />,
  // <DialogAudio />,
  // <Test />,
  document.getElementById('root')
);
