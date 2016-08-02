# Gated Content

## Objective

Restrict unauthenticated user access to select nodes, prompting them to register.  Exclude email subscribers from this display.

## Requirements

* Content authors select nodes for restriction
* Authenticated (logged in) users and email subscribers see full article
* Unauthenticated (logged out) users see custom teaser with prompt to register

## Implementation

* Admin form
  * Set nodes for Gated display
  * Allow for cookie exclusion for subscribers of the Silverpop email platform
  * Custom call to action
* Gated Content field
  * Added to node types per admin form selection
* Gated Content View Mode
  * Triggered by field selection
