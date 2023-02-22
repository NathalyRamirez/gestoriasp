// assets/controllers/say-hello-controller.js
import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['name', 'output']

    greet() {
      this.outputTarget.textContent = `Hello, ${this.nameTarget.value}!`

      const name = this.nameTarget.value;
      console.log("prueba")

    // Send an AJAX request to the server
    fetch("/greet", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({ name })
    })
      .then(response => response.json())
      .then(data => {
        // Update the page with the response from the server
        this.outputTarget.innerHTML = data.message;
      });
    }
}