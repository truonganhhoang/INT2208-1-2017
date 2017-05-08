Feature: add a member
	As a admin
	I want add a member
	So that I can see this member in member list
Scenario: add a member
	Given I sees member list
	When I click add button
	Then I see add member form
	I fill in form
	Then I see this member in member list