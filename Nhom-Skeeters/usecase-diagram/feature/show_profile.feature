Feature: show profile of a member
	As a admin
	I want show profile of member
	So that I can see profile of this member
Scenario: show profile of member
	Given I sees member list
	When I click show button
	Then I see profile of this member