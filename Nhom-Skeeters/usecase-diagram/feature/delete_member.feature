Feature: Delete member
	As a admin
	I want delete 'Eric'
	So that 'Eric' deleted
Scenario: Delete a member
	Given I sees member list
	When I tick checkbox 'Eric'
	And I click delete button
	Then I don't see 'Eric' in member list