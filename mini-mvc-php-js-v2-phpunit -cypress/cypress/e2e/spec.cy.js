describe("Test 1 : Le contenu demandé s'affiche bien sur la page d'accueil", () => {
  it('finds the content "seb"', () => {
    cy.visit(
      "http://localhost/MyBasics-Tests/mini-mvc-php-js-v2-phpunit -cypress/home"
    );

    cy.contains("seb");
  });
});

describe("Test 2 : les messages d'erreur s'affichent bien si l'entrée n'est pas correcte", () => {
  it("Gets, types and asserts", () => {
    cy.visit(
      "http://localhost/MyBasics-Tests/mini-mvc-php-js-v1-phpunit/createForm"
    );

    // Get an input, type into it
    cy.get("#pseudo").type("seb");
    cy.get("#email").type("seb@gmail.com");
    cy.get("#password").type("Aze");
    cy.get("#confirm_password").type("Azer");

    //  Verify that the value has been updated
    cy.get("#pseudo").should("have.value", "seb");

    //Reload the page
    cy.reload();
  });
});
