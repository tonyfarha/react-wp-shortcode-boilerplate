# React WP Shortcode

React WP Shortcode is a WordPress plugin that allows you to easily render a React app on any post or page using a simple shortcode. It leverages `@wordpress/scripts` for an efficient development and build process.

## Installation

1. **Download the Plugin**: Download the ZIP file of this plugin and extract it to your WordPress plugin directory (`wp-content/plugins/react-wp-shortcode`).

2. **Activate the Plugin**: Navigate to the "Plugins" menu in your WordPress admin area. Find "React WP Shortcode" in the list and click "Activate".

## Usage

To use the plugin, simply add the following shortcode to the content of any post or page where you want your React app to appear:

```shortcode
[react_wp_shortcode_app]
```

## Development

### Prerequisites

Ensure you have `Node.js` and `npm` installed on your development machine.

### Getting Started

1. **Clone the Plugin**: Clone this repository into your WordPress plugin directory.

2. **Install Dependencies**: Navigate to the plugin's root directory in a terminal and run `npm install` to install the required dependencies.

3. **Start Development**: Run `npm start` to start the development server. This command watches for any changes in your `src` directory and automatically rebuilds your app.

4. **Build for Production**: Run `npm run build` to compile and optimize your React app for production use.

## Features

- Simple shortcode integration.
- React app rendering within WordPress content.
- Easy to customize and extend.

## Customization

You can customize the React app by editing the files in the `src` folder. After making changes, remember to run `npm run build` to compile your changes.
