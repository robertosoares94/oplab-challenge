import React from "react";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";

import Home from './views/Home'

const Routes = () => (
    <Router>
        <Switch>
            <Route exact path="/" component={Home} />
        </Switch>
    </Router>
);

export default Routes;