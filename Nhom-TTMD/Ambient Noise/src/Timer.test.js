import React from "react";
import { shallow } from 'enzyme';
import Timer from './Timer';

describe('Ran is being in timer page in beta version',() => {

    var timer = shallow(<Timer/>);

    it("Ran see 3 button to change router", () => {
        expect(timer.find('li').findWhere(n => n.matchesElement(<a>Home</a>)).length).toBe(1);
        expect(timer.find('li').findWhere(n => n.matchesElement(<a>Timer</a>)).length).toBe(1);
        expect(timer.find('li').findWhere(n => n.matchesElement(<a>Group</a>)).length).toBe(1);
    });

    it("Ran see 8 button timer include 7 button time was set and 1 button custom time",() => {
        expect(timer.find('Button').length).toBe(7);
        expect(timer.find('button').findWhere(n => n.hasClass('btn btn-primary')).length).toBe(1);
    });

    it("1 button dialog choose noise", () => {
        expect(timer.find('DialogAudio').length).toBe(1);
    });

    it("Ran click on 1 minutes", () =>{
        var spy = spyOn(Timer,'TimeCountDown');
        timer.find('Button').findWhere(n => n.matchesElement(<Button time="60" />)).simulate('click');
        expect(spy).toBeCalled();
    });

});