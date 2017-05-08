Feature: examation
	As a member
	I want to exam
	So that I can see question list of exam
Scenario: examation
	Given I sees exam list
	When I click a examation
	Then I see question list of this examation
	And I do this examation
	And I click submit button
	Then I see submit successfully