var React = require('react');

var Group = React.createClass({
    Storm() {
            var myAudio = document.getElementById("rain");
            var myAudio2 = document.getElementById("wind");
            if (myAudio.paused) {
                myAudio.play();
                myAudio2.play();
            } else {
                myAudio.pause();
                myAudio2.pause();
            }
    },
    CafeInRainy() {
            var myAudio = document.getElementById("cafe");
            var myAudio2 = document.getElementById("rain");
            if (myAudio.paused) {
                myAudio.play();
                myAudio2.play();
            } else {
                myAudio.pause();
                myAudio2.pause();
            }
    },
    Night() {
            var myAudio = document.getElementById("frog");
            var myAudio2 = document.getElementById("wind");
            if (myAudio.paused) {
                myAudio.play();
                myAudio2.play();
            } else {
                myAudio.pause();
                myAudio2.pause();
            }
    },
    Nature() {
            var myAudio = document.getElementById("wind");
            var myAudio2 = document.getElementById("frog");
            var myAudio3 = document.getElementById("bird");
            if (myAudio.paused) {
                myAudio.play();
                myAudio2.play();
                myAudio3.play();
            } else {
                myAudio.pause();
                myAudio2.pause();
                myAudio3.pause();
            }
    },
    Sea() {
            var myAudio = document.getElementById("ocean");
            var myAudio2 = document.getElementById("bird");
            if (myAudio.paused) {
                myAudio.play();
                myAudio2.play();
            } else {
                myAudio.pause();
                myAudio2.pause();
            }
    },
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
    },
    render() {
        return(
        <div className = "Group">
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
            <li>
              <a href="home">Home</a>
            </li>
            <li>
              <a href="timer" >Timer</a>
            </li>
            <li className="active">
              <a href="#">Group</a>
            </li>
            <li className="disabled">
              <a href="#">More</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div className="section text-right">
          <div className="background-image" style={{backgroundImage: 'url(' + require('./img/colored_raindrops_by_devilkkw-d4be8lo.jpg') + ')'}}></div>
      <div className="container">
        <div className="row">

          <div className="col-md-6">
            <h1 className="text-danger">Journal of Consumer Research</h1>
            <p className="lead text-justify text-success">“A moderate level of noise enhances creativity compared to both low and
              high levels of noise. Moderate background noise induces distraction which
              encourages individuals to think at a higher, abstract level, and consequently
              exhibit higher creativity.”</p>
          </div>
          <div className="col-md-2">
            <div className="row">
              <div className="col-md-12">

               <audio id="rain"  loop = "loop">
                    <source src={require("./audio/rain.mp3")} />
               </audio>
               <audio id="cafe"  loop = "loop">
                    <source src={require("./audio/cafe.mp3")} />
               </audio>
               <audio id="bird"  loop = "loop">
                    <source src={require("./audio/bird.mp3")} />
               </audio>               
               <audio id="wind"  loop = "loop">
                    <source src={require("./audio/wind.mp3")} />
               </audio>
               <audio id="wind"  loop = "loop">
                    <source src={require("./audio/wind.mp3")} />
               </audio>
               <audio id="frog"  loop = "loop">
                    <source src={require("./audio/frog.mp3")} />
               </audio>
               <audio id="ocean"  loop = "loop">
                    <source src={require("./audio/ocean.mp3")} />
               </audio>               

                <a className="btn btn-block btn-lg btn-primary" onClick={this.Storm}>Storm</a>
              </div>
            </div>
            <div className="row">
              <div className="col-md-12">
                <a className="btn btn-block btn-lg btn-primary" onClick={this.CafeInRainy}>Cafe in rainy</a>
              </div>
            </div>
            <div className="row">
              <div className="col-md-12">
                <a className="btn btn-block btn-lg btn-primary" onClick={this.Night}>Night</a>
              </div>
            </div>
            <div className="row">
              <div className="col-md-12">
                <a className="btn btn-block btn-lg btn-primary" onClick={this.Nature}>Nature</a>
                <div className="row">
                  <div className="col-md-12">
                    <a className="btn btn-block btn-lg btn-primary" onClick={this.Sea}>Sea</a>
                  </div>
                </div>
                <div className="row">
                  <div className="col-md-12">
                    <a className="btn btn-block btn-lg btn-primary disabled">Create your own</a>
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
          <div className="col-md-4">
            <h1 className="text-info text-left">Journal Article Is Noise Always Bad? Exploring the Effects of Ambient
              Noise on Creative Cognition</h1>
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
              <br />
              <br />
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
    },
});
export default Group;