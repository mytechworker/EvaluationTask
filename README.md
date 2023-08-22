# WordPress Shortcode Evaluation Task

Welcome to the WordPress Shortcode Evaluation Task! This task aims to evaluate your understanding of WordPress core concepts, PHP code style, and basic JavaScript functionality. Please follow the instructions below to complete the task.

## Task Overview

Your task is to create a simple WordPress plugin that adds a custom shortcode to display a styled call-to-action (CTA) box with a title, a short message, and a button with a customizable label and URL. The CTA box should include a click counter that increments each time the button is clicked and stores the count per user using the browser's localStorage.

**Note:** We do not evaluate the actual layout of the CTA box, or its display across different devices. The main focus is on the functionality and code quality.

## Getting Started

1. Clone or fork this repository.
2. Follow the instructions provided in the "Task Requirements" section below.
3. When you have completed the task, push your changes to your GitHub repository.
4. Provide a link to your GitHub repository as the deliverable.

## Task Requirements

1. Create a new WordPress plugin with a unique name and a basic plugin header.
2. Implement a custom shortcode that meets the following specifications:
   - The shortcode should be named `[cta_box]`.
   - The shortcode should accept the following attributes: `title`, `message`, `button_label`, and `button_url`.
   - The output of the shortcode should be a styled CTA box containing a title, a short message, a button with the specified label and URL (open in new tab), and a click counter.
3. Add JavaScript functionality to the shortcode output:
   - The click counter should increment each time the button is clicked and store the count per user using the browser's localStorage.
   - Use vanilla JavaScript or jQuery to implement the click counter functionality.
   - Properly enqueue the JavaScript file in the plugin.
4. Ensure the plugin follows WordPress code style guidelines and best practices for plugin and shortcode development.
5. The code should run on the latest WordPress version using its [recommended requirements](https://wordpress.org/about/requirements/).
6. Update this README.md file with clear documentation on how to install, set up, and use the plugin, including shortcode usage examples.

## Deliverables

- A link to your GitHub repository containing the complete WordPress plugin, including all source code, JavaScript files, and updated README.md documentation.

## Sample Shortcode

We will use the following shortcode to test your plugin:
```
[cta_box title="Start Using Divi" message="Discover the power and flexibility of Divi, the ultimate WordPress theme and visual page builder. Create stunning websites with ease and elevate your web design game. Click the button below to get started with Divi today!" button_label="Try it for free" button_url="https://elegantthemes.com"]
```

## Evaluation Criteria

- Code quality, readability, and adherence to [WordPress coding standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/).
- Proper use of WordPress best practices for plugin, shortcode development, and JavaScript file handling.
- Proper documentation and commenting within the code, clearly explaining the purpose and functionality of different parts of the plugin.

Good luck, and we look forward to reviewing your submission!
