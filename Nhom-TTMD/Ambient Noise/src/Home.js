var React = require('react');
import YouTube from 'react-youtube';

class Home extends React.Component {
    constructor(props) {
      super(props);
      this.state = {
        open: false,
        youtube: false,
      }
    }

    Rain() {
            var myAudio = document.getElementById("rain");
            if (myAudio.paused) {
                myAudio.play();
            } else {
                myAudio.pause();
            }
    }
    Cafe() {
            var myAudio = document.getElementById("cafe");
            if (myAudio.paused) {
                myAudio.play();
            } else {
                myAudio.pause();
            }
    }
    Bird() {
            var myAudio = document.getElementById("bird");
            if (myAudio.paused) {
                myAudio.play();
            } else {
                myAudio.pause();
            }
    }
    Wind() {
            var myAudio = document.getElementById("wind");
            if (myAudio.paused) {
                myAudio.play();
            } else {
                myAudio.pause();
            }
    }
    Frog() {
            var myAudio = document.getElementById("frog");
            if (myAudio.paused) {
                myAudio.play();
            } else {
                myAudio.pause();
            }
    }
    Ocean() {
            var myAudio = document.getElementById("ocean");
            if (myAudio.paused) {
                myAudio.play();
            } else {
                myAudio.pause();
            }
    }
    stopNoise() {
        var myAudio1 = document.getElementById("rain");
        var myAudio2 = document.getElementById("cafe");
        var myAudio3 = document.getElementById("wind");
        var myAudio4 = document.getElementById("bird");
        var myAudio5 = document.getElementById("ocean");
        var myAudio6 = document.getElementById("frog");
        if (myAudio1.play) {
            myAudio1.pause();
        }
        if (myAudio2.play) {
            myAudio2.pause();
        }
        if (myAudio3.play) {
            myAudio3.pause();
        }
        if (myAudio4.play) {
            myAudio4.pause();
        }
        if (myAudio5.play) {
            myAudio5.pause();
        }
        if (myAudio6.play) {
            myAudio6.pause();
        }
    }

    _handleDropdown() {
      this.setState({
        open: !this.state.open
      })
    }

    render () {
        var youtubeContainer = {
          position: "absolute"
        };
        var opts = {
          height: '390',
          width: '640',
          playerVars: {
            autoplay: 1
          }
        };
        var dropdownActions = this.state.open ? "dropdown open" : "dropdown";
        var Background = "./img/beautiful-rainy-weather-wallpapers-2.jpg";
        return(
            <div Class = "Home">
        <div className="navbar navbar-default navbar-static-top">
            <div className="container">
                <div className="navbar-header">
                    <button type="button" className="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span className="sr-only">Toggle navigation</span>
                        <span className="icon-bar"></span>
                        <span className="icon-bar"></span>
                        <span className="icon-bar"></span>
                    </button>
                    <a className="navbar-brand">Ambient Noise</a>
                </div>
                <div className="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul className="nav navbar-nav navbar-right">
                        <li className="active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="timer">Timer</a>
                        </li>
                        <li>
                            <a href="group">Group</a>
                        </li>
                        <li className={dropdownActions} onClick={this._handleDropdown.bind(this)}>
                            <a className="dropdown-toggle" type="button" href="#">
                              More <span className="caret"/>
                            </a>
                            <ul className="dropdown-menu">
                              <li onClick={()=> this.setState({youtube: !this.state.youtube})}>
                                <button className="btn" type="button">
                                 {this.state.youtube ? <img src={require('./img/checked.png')}/> : null} Show Youtube Window
                                </button>
                                <button className="btn disabled" type="button">Live chat with everyone</button>
                                <button className="btn disabled" type="button">News</button>
                              </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div className="section text-right">
          <div className="background-image" style={{backgroundImage: 'url(' + require('./img/beautiful-rainy-weather-wallpapers-2.jpg') + ')'}}></div>
            <div className="container">
                <div className="row">
                    <div className="col-md-4">
                        <img src={require('./img/rain-paper-boats.jpg')} className="img-circle img-responsive" />
                    </div>
                    <div className="col-md-6">
                        <h1 className="text-left text-warning">Journal Article Is Noise Always Bad? Exploring the Effects of Ambient
                            Noise on Creative Cognition</h1>
                        <h1 className="text-primary">Journal of Consumer Research</h1>
                        <p className="lead text-info text-justify">A moderate level of noise enhances creativity compared to both low and
                            high levels of noise. Moderate background noise induces distraction which
                            encourages individuals to think at a higher, abstract level, and consequently
                            exhibit higher creativity.</p>
                    </div>

                    {this.state.youtube ?
                      <div style={youtubeContainer}>
                        <YouTube
                          videoId="7kKg_GCbvk4"
                          opts={opts}
                        />
                      </div> : null}

                    <div className="col-md-2">
                        <div className="row">
                            <div className="col-md-12">
                            <audio id="rain"  loop = "loop">
                                <source src={require("./audio/rain.mp3")} />
                            </audio>
                                <a className="btn btn-block btn-lg btn-primary" onClick={this.Rain} >Rain</a>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-12">
                            <audio id="cafe"  loop = "loop">
                                <source src={require("./audio/cafe.mp3")} />
                            </audio>
                                <a className="btn btn-block btn-lg btn-primary" onClick={this.Cafe}>Cafe</a>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-12">
                            <audio id="bird"  loop = "loop">
                                <source src={require("./audio/bird.mp3")} />
                            </audio>
                                <a className="btn btn-block btn-lg btn-primary" onClick={this.Bird}>Bird</a>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-12">
                            <audio id="wind"  loop = "loop">
                                <source src={require("./audio/wind.mp3")} />
                            </audio>
                                <a className="btn btn-block btn-lg btn-primary" onClick={this.Wind}>Wind</a>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-12">
                            <audio id="frog"  loop = "loop">
                                <source src={require("./audio/frog.mp3")} />
                            </audio>
                                <a className="btn btn-block btn-lg btn-primary" onClick={this.Frog}>Frog</a>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-12">
                            <audio id="ocean"  loop = "loop">
                                <source src={require("./audio/ocean.mp3")} />
                            </audio>
                                <a className="btn btn-block btn-lg btn-primary" onClick={this.Ocean}>Ocean</a>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-12">
                                <a className="btn btn-block btn-default btn-lg" onClick={this.stopNoise}>Clear Noise</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer className="section section-primary">
            <div className="container">
                <div className="row">
                    <div className="col-sm-6">
                        <h2>Best experienced with Headphones</h2>
                        <p>We hope you enjoy with those noise</p>
                    </div>
                    <div className="col-sm-6">
                        <p className="text-info text-right">
                            <br/>
                            <br/>
                        </p>
                        <div className="row">
                            <div className="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                <a href="#"><i className="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i className="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i className="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i className="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-12 hidden-xs text-right">
                                <a href="#"><i className="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i className="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i className="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i className="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</div>
        );
    }
};
export default Home;
