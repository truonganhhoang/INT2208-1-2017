Feature: approve a question
	As a admin
	I want approve question
	So that I can see this question in question list
Scenario: approve a question
	Given I sees list contribute question 
	And I click approve button of a question
	Then I see this question in question list