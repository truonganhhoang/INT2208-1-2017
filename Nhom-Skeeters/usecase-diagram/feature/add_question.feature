Feature: add a question
	As a admin
	I want add a question
	So that I can see this question in question list
Scenario: add a question
	Given I sees add question form 
	When I fill in form
	Then I see this question in question list