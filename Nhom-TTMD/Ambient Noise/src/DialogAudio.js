import React from 'react';
import Dialog from 'material-ui/Dialog';
import FlatButton from 'material-ui/FlatButton';
import RaisedButton from 'material-ui/RaisedButton';
import MuiThemeProvider from 'material-ui/styles/MuiThemeProvider';
import injectTapEventPlugin from 'react-tap-event-plugin';
injectTapEventPlugin();


/**
 * Dialog with action buttons. The actions are passed in as an array of React objects,
 * in this example [FlatButtons](/#/components/flat-button).
 *
 * You can also close this dialog by clicking outside the dialog, or with the 'Esc' key.
 */
export default class DialogAudio extends React.Component {
    Rain() {
            var myAudio = document.getElementById("rain");
            if (myAudio.paused) {
                myAudio.play();
            } else {
                myAudio.pause();
            }
    };
    Cafe() {
            var myAudio = document.getElementById("cafe");
            if (myAudio.paused) {
                myAudio.play();
            } else {
                myAudio.pause();
            }
    };
    Bird() {
            var myAudio = document.getElementById("bird");
            if (myAudio.paused) {
                myAudio.play();
            } else {
                myAudio.pause();
            }
    };
    Wind() {
            var myAudio = document.getElementById("wind");
            if (myAudio.paused) {
                myAudio.play();
            } else {
                myAudio.pause();
            }
    };
    Frog() {
            var myAudio = document.getElementById("frog");
            if (myAudio.paused) {
                myAudio.play();
            } else {
                myAudio.pause();
            }
    };
    Ocean() {
            var myAudio = document.getElementById("ocean");
            if (myAudio.paused) {
                myAudio.play();
            } else {
                myAudio.pause();
            }
    };
  state = {
    open: false,
  };

  handleOpen = () => {
    this.setState({open: true});
  };

  handleClose = () => {
    this.setState({open: false});
  };
  stopNoise = () => {
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

  };
  render() {
    const actions = [
      <FlatButton
        label="Cancel"
        primary={true}
        onTouchTap={this.handleClose}
        onClick={this.stopNoise}
      />,
      <FlatButton
        label="Submit"
        primary={true}
        keyboardFocused={true}
        onTouchTap={this.handleClose}
        
      />,
    ];

    return (
      <MuiThemeProvider>
      <div>
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
        <RaisedButton label="Choose Noise Here" onTouchTap={this.handleOpen} secondary = {true}/>
        <Dialog
          title="Choose music you want to use:"
          actions={actions}
          modal={false}
          open={this.state.open}
          onRequestClose={this.handleClose}
        >
    <div className="section">
      <div className="container">
        <div className="row">
          <div className="col-md-3">
            <a className="btn btn-block btn-lg btn-primary" onClick = {this.Rain}>Rain</a>
          </div>
          <div className="col-md-3">
            <a className="btn btn-block btn-lg btn-primary" onClick = {this.Cafe}>Cafe</a>
          </div>
        </div>
        <div className="row">
          <div className="col-md-3">
            <a className="btn btn-block btn-lg btn-primary" onClick = {this.Bird}>Bird</a>
          </div>
          <div className="col-md-3">
            <a className="btn btn-block btn-lg btn-primary" onClick = {this.Wind}>Wind</a>
          </div>
        </div>
        <div className="row">
          <div className="col-md-3">
            <a className="btn btn-block btn-lg btn-primary" onClick = {this.Frog}>Frog</a>
          </div>
          <div className="col-md-3">
            <a className="btn btn-block btn-lg btn-primary" onClick = {this.Ocean}>Ocean</a>
          </div>
        </div>
      </div>
    </div>
        </Dialog>
      </div>
      </MuiThemeProvider>
    );
  }
}
// export default DialogAudio;