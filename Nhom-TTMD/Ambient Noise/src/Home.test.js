import React from "react";
import { shallow } from 'enzyme';
import Home from './Home';

    
describe('Ran is being in home page in beta version', () => {

    var home = shallow(<Home/>)
    
    it("Ran see 3 button to change router",  () => {
        expect(home.find('li').findWhere(n => n.matchesElement(<a>Home</a>)).length).toBe(1);
        expect(home.find('li').findWhere(n => n.matchesElement(<a>Timer</a>)).length).toBe(1);
        expect(home.find('li').findWhere(n => n.matchesElement(<a>Group</a>)).length).toBe(1);
    });

    it("7 button with 6 button audio and 1 button clear audio", () => {
      expect(home.find('a').findWhere(n => n.hasClass('btn btn-block btn-lg btn-primary')).length).toBe(6);
      expect(home.find('a').findWhere(n => n.hasClass('btn btn-block btn-default btn-lg')).length).toBe(1);
    });

    it("Ran click on Rain button",() => {
        var spy = spyOn(Home.prototype,'Rain');
        expect(home.find('a').findWhere(n => n.matchesElement(<a>Rain</a>)).length).toBe(1);
        home.find('a').findWhere(n => n.matchesElement(<a>Rain</a>)).simulate('click');
        expect(spy).toBeCalled();
    });

    it("Each button have right source",() =>{
      var audio1 = <source src={require("./audio/rain.mp3")} />
      var audio2 = <source src={require("./audio/cafe.mp3")} />
      var audio3 = <source src={require("./audio/bird.mp3")} />
      var audio4 = <source src={require("./audio/wind.mp3")} />
      var audio5 = <source src={require("./audio/frog.mp3")} />
      var audio6 = <source src={require("./audio/ocean.mp3")} />
    
      expect(home.find('audio').find('source').get(0)).toEqual(audio1);
      expect(home.find('audio').find('source').get(1)).toEqual(audio2);
      expect(home.find('audio').find('source').get(2)).toEqual(audio3);
      expect(home.find('audio').find('source').get(3)).toEqual(audio4);
      expect(home.find('audio').find('source').get(4)).toEqual(audio5);
      expect(home.find('audio').find('source').get(5)).toEqual(audio6);
    });

    it("Ran see 2 line use h1 html text", () =>{
      expect(home.find('h1').length).toBe(2);
    });

    it("Ran see a footer", () => {
      expect(home.find('footer').length).toBe(1);
    });

    it("Ran see background image", () => {
      expect(home.find('div').findWhere(n => n.hasClass('background-image')).hasClass('background-image')).toBe(true);
    });

    it("Ran see big bar name Ambient Noise", () => {
      expect(home.find('a').findWhere(n => n.matchesElement(<a>Ambient Noise</a>)).length).toBe(1);
    });

});
