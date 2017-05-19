import React from "react";
import { shallow } from 'enzyme';
import Group from './Group';

describe('Ran is being in group page in beta version',() =>{

    var group = shallow(<Group/>);

    it("Ran see 3 button to change router", () => {
        expect(group.find('li').findWhere(n => n.matchesElement(<a>Home</a>)).length).toBe(1);
        expect(group.find('li').findWhere(n => n.matchesElement(<a>Timer</a>)).length).toBe(1);
        expect(group.find('li').findWhere(n => n.matchesElement(<a>Group</a>)).length).toBe(1);
    });

    it("Ran see 7 button timer include 6 button have group was set, 1 button use to create group and 1 button to clear all noise", () => {
        expect(group.find('a').findWhere(n => n.hasClass('btn btn-block btn-lg btn-primary')).length).toBe(6);
        expect(group.find('a').findWhere(n => n.matchesElement(<a>Create your own</a>)).length).toBe(1);
        expect(group.find('a').findWhere(n => n.hasClass('btn btn-block btn-default btn-lg')).length).toBe(1);
    });

    // it("Ran click on button sea",() => {

    // });

    // it("Ran click on button Clear Noise",() => {

    // });

    // it("Ran click on button Create your own",() =>{

    // });

    // it("Ran choose Rain, Cafe, Wind, Sea; Ran type creative in text field name Sound name; Ran press button summit",() =>{

    // });

    // it("Ran click on button creative",() =>{

    // });

});