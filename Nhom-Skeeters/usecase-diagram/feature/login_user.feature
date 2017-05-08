Feature: login user
	As a anonymous user
	I want to login
	So that I can see member page
Scenario: Anonymous user sees member page
	Given I sees login form
	When I fill in login form
	When I click login button
	Then I see member page