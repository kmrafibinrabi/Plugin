# Top Button Plugin

## Description

The Top Button Plugin is a lightweight and customizable JavaScript plugin that adds a smooth scrolling "back to top" button to your website. It allows users to easily navigate back to the top of a long page with a single click, improving user experience and accessibility.

This plugin is designed to be easy to implement and highly customizable, allowing you to tailor the appearance and behavior of the top button to match your website's design and requirements.

## Features

- Smooth scrolling animation when the button is clicked
- Customizable button appearance, including color, size, and icon
- Option to show/hide the button based on scroll position
- Adjustable scroll speed
- Support for responsive websites

## Usage

1. Include the `top-button.js` file in your HTML document.

```html
<script src="top-button.js"></script>
```

2. Create a new instance of the `TopButton` class and customize its behavior.

```javascript
const topButton = new TopButton({
  element: '#top-button',
  scrollSpeed: 500,
  scrollOffset: 0,
  visibilityOffset: 300,
});
```

3. Add the button element to your HTML markup.

```html
<button id="top-button" class="top-button">Top</button>
```

4. Style the button to match your website's design using CSS.

```css
.top-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #000;
  color: #fff;
  border: none;
  border-radius: 50%;
  padding: 10px;
  font-size: 16px;
}
```

## Configuration Options

- `element` (string): The ID or class selector of the button element (default: `'#top-button'`).
- `scrollSpeed` (number): The duration of the scrolling animation in milliseconds (default: `500`).
- `scrollOffset` (number): The offset in pixels from the top of the page to scroll to (default: `0`).
- `visibilityOffset` (number): The scroll position in pixels at which the button becomes visible (default: `300`).

## Customization

You can customize the appearance and behavior of the top button by modifying the CSS and JavaScript code. Feel free to experiment with different styles, animations, and settings to match your website's design and requirements.

## Browser Compatibility

The Top Button Plugin is compatible with modern web browsers, including Chrome, Firefox, Safari, Edge, and Internet Explorer 11.

## License

This plugin is open-source and available under the [MIT License](https://opensource.org/licenses/MIT). You are free to use, modify, and distribute the plugin in both personal and commercial projects.

## Credits

The Top Button Plugin was created by [Your Name] and is maintained by [Your Organization]. Contributions and feedback are welcome!

## Support

If you encounter any issues or have any questions or suggestions, please feel free to [open an issue](https://github.com/your-organization/top-button-plugin/issues) on GitHub.

Happy scrolling!
