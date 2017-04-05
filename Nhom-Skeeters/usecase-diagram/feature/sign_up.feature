Feature: Sign up member
	As a anonymous user
	I want sign up member
	So that I is a member
Scenario: User sign up member
	Given I sees sign up form
	When I fill in sign up form
	When I click sign up button
	Then I see member page