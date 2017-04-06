Feature: login admin
	As a anonymous user
	I want to login admin page
	So that I can see admin page
Scenario: user sees admin page
	Given I sees login form
	When I fill in login form
	When I click login button
	Then I see admin page