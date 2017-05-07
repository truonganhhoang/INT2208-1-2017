Feature: contribute question
	As a member
	I want contribute a question
	So that I can see "contribute successfully"
Scenario: contribute question
	Given I sees member page
	When I click contribute button
	Then I see contribute form
	And I fill in form
	And I click submit button
	Then I see "contribute successfully"