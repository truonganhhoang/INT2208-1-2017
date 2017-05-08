Feature: login collaborator
	As a anonymous user
	I want to login collaborator page
	So that I can see collaborator page
Scenario: user sees collaborator page
	Given I sees login form
	When I fill in login form
	When I click login button
	Then I see collaborator page