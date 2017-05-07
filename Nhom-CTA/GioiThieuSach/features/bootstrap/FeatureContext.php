<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I sees book list
     */
    public function iSeesBookList()
    {
        throw new PendingException();
    }

    /**
     * @When I click add button
     */
    public function iClickAddButton()
    {
        throw new PendingException();
    }

    /**
     * @Then I see add book form
     */
    public function iSeeAddBookForm()
    {
        throw new PendingException();
    }

    /**
     * @Then I fill in form
     */
    public function iFillInForm()
    {
        throw new PendingException();
    }

    /**
     * @Then I see this book in book list
     */
    public function iSeeThisBookInBookList()
    {
        throw new PendingException();
    }

    /**
     * @Given I sees member list
     */
    public function iSeesMemberList()
    {
        throw new PendingException();
    }

    /**
     * @Then I see add member form
     */
    public function iSeeAddMemberForm()
    {
        throw new PendingException();
    }

    /**
     * @Then I see this member in member list
     */
    public function iSeeThisMemberInMemberList()
    {
        throw new PendingException();
    }

    /**
     * @Given I see edit text comment for book
     */
    public function iSeeEditTextCommentForBook()
    {
        throw new PendingException();
    }

    /**
     * @When I add comment and click comment button
     */
    public function iAddCommentAndClickCommentButton()
    {
        throw new PendingException();
    }

    /**
     * @Then I see this comment in comment list for book
     */
    public function iSeeThisCommentInCommentListForBook()
    {
        throw new PendingException();
    }

    /**
     * @Given I sees login form
     */
    public function iSeesLoginForm()
    {
        throw new PendingException();
    }

    /**
     * @When I fill in login form
     */
    public function iFillInLoginForm()
    {
        throw new PendingException();
    }

    /**
     * @When I click login button
     */
    public function iClickLoginButton()
    {
        throw new PendingException();
    }

    /**
     * @Then I see admin page
     */
    public function iSeeAdminPage()
    {
        throw new PendingException();
    }

    /**
     * @Then I see member page
     */
    public function iSeeMemberPage()
    {
        throw new PendingException();
    }

    /**
     * @Given I sees sign up form
     */
    public function iSeesSignUpForm()
    {
        throw new PendingException();
    }

    /**
     * @When I fill in sign up form
     */
    public function iFillInSignUpForm()
    {
        throw new PendingException();
    }

    /**
     * @When I click sign up button
     */
    public function iClickSignUpButton()
    {
        throw new PendingException();
    }
}
