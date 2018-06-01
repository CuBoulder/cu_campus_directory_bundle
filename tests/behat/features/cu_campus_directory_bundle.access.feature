@cu_campus_directory_bundle
Feature: Directory Node Type

        When I login to a Web Express website
    As an authenticated user with the right permission
    I should be able to create a section page

    Scenario Outline: An authenticated user should be able to access the form for adding a directory listing
        Given  I am logged in as a user with the <role> role
        When I go to "node/add/directory-listing"
        Then I should see <message>

        Examples:
            | role            | message                    |
            | edit_my_content | "Access Denied"            |
            | edit_only       | "Access Denied"            |
            | content_editor  | "Access Denied"            |
            | site_owner      | "Access Denied"            |
            | administrator   | "Create Directory Listing" |
            | developer       | "Create Directory Listing" |

    Scenario: An anonymous user should not be able to access the form for adding a directory listing
        When I am on "node/add/directory-listing"
        Then I should see "Access denied"