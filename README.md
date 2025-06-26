# Symfony Profiler SPA Demo

This demo uses the [mgdsoft/symfony-profiler-spa](https://github.com/mgdsoft/symfony-profiler-spa) package to integrate the Symfony Profiler with SPAs.

This project demonstrates how to integrate the Symfony Profiler with a Single Page Application (SPA). 
It shows how to display the Symfony Profiler toolbar in a SPA context, allowing developers to debug AJAX requests made from JavaScript.

## Installation

1. Install dependencies:
   ```bash
   composer install
   ```

3. Start the Symfony development server:
   ```bash
   symfony server:start
   ```
   
   Or use your preferred web server.

## Usage

1. Open your browser and navigate to the SPA demo page:
   ```
   http://localhost:8000/simulate_spa/index_spa_external.html
   ```

2. The page contains two buttons:
   - "Fetch /one" - Makes an AJAX request to the `/one` endpoint
   - "Fetch /exception" - Makes an AJAX request to the `/exception` endpoint which throws an exception

3. After clicking either button, you should see:
   - The response data in the textarea
   - The Symfony Profiler toolbar at the bottom of the page

4. You can click on the toolbar icons to see more details about the request, including:
   - Request and response information
   - Exception details (for the `/exception` endpoint)
   - Performance metrics
   - And more!
