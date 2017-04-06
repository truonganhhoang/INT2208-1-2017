Feature: add a book
	As a admin
	I want add a book
	So that I can see this book in book list
Scenario: add a book
	Given I sees book list
	When I click add button
	Then I see add book form
	Then I fill in form
	Then I see this book in book list