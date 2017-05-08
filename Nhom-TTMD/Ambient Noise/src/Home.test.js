import Home from './Home';

describe("Using sound in home page", () => {
  var Ran;

  //Ran is being in home page
  beforeEach(function() {
    Ran = new Home();
  });
  it("Ran click on Rain button",  () => {
    Ran.Rain();
    expect(Ran.currentlyPlayingSong).toEqual("./audio/rain.mp3");

  });
});
