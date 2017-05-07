Feature: add a comment
	As a member
	I want add a comment for book
	So that I can see this comment in comment list
Scenario: add a comment
	Given I see edit text comment for book
	When I add comment and click comment button
	Then I see this comment in comment list for book