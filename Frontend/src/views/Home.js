import React, { Component } from 'react';
import Footer from '../components/footer'
import WOW from 'wowjs';

class Home extends Component {

    componentDidMount() {
        new WOW.WOW({
            live: false
        }).init();
    }

    render() {
        return (
            <div className="App">
                <section className="split-home">
                    <section className="left-section app wow fadeIn" data-wow-delay="0.1s" >
                    </section>
                    <section className="right-section">
                        <div className="main-logo">
                            <a href="#"><img className="wow fadeInDown App-logo" src={process.env.PUBLIC_URL + '/assets/img/app_icon.png'} className="" width="50" height="50" alt="Logo"/></a>
                        </div>
                        <div className="intro intro-app">
                            <div className="intro-text">
                                <h4 className="wow fadeInDown">Messenger for Anonymous</h4>
                                <h1 className="wow fadeInDown" data-wow-delay=".1s">Send voice and text message
                                    anonymously</h1>
                                <p className="wow fadeInDown">
                                    Aria is a messenger for people who prefer anonymity. Chat, call and hangout with
                                    friends
                                    anonymously.
                                    Aria is a tor for private conversations. None can catch thou.
                                </p>
                                <h3 className="wow fadeInDown">Download Aria for free on </h3>
                                <a href="#" className="wow fadeInDown" data-wow-delay=".2s">
                                    <img className="img-responsive"
                                         src={process.env.PUBLIC_URL + '/assets/img/appstore.png'} alt="Icon"/>
                                </a>
                                <a href="#" className="wow fadeInDown" data-wow-delay=".2s">
                                    <img className="img-responsive"
                                         src={process.env.PUBLIC_URL + '/assets/img/playstore.png'} alt="Icon"/>
                                </a>
                            </div>
                        </div>
                        <Footer></Footer>
                    </section>
                </section>
            </div>
        );
    }
    
}

export default Home;