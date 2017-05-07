Feature: Edit a question
	As a admin
	I want edit a question
	So that this question edited
Scenario: Edit a question
	Given I sees question list
	And I click edit button of a question
	Then I see edit form
	And I fill in form
	And I click Edit button
	Then I see this question edited