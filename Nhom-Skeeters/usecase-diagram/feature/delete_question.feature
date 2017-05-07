Feature: Delete question
	As a admin
	I want delete a question
	So that this question deleted
Scenario: Delete a question
	Given I sees question list
	When I tick a checkbox of question
	And I click delete button
	Then I don't see this question in list question