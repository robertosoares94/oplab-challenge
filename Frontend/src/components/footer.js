import React, { Component } from 'react';

class Footer extends Component {
    render(){
        return(
            <div className="footer">
                <span className="footer-credits">© Aria Messenger 2016</span>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        );
    }
}


export default Footer;