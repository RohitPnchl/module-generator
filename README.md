# Module Generator Package

This Laravel package allows you to generate modules with predefined fields and functionalities.

## Installation

1. Add the repository to your `composer.json`:
    ```json
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/developervkindia/module-generator.git"
        }
    ]
    ```

2. Run the following command to require the package:
    ```bash
    composer require developervkindia/module-generator:dev-main
    ```

3. Add the service provider to `bootstrap/app.php`:
    ```php
    Developervkindia\ModuleGenerator\Providers\ModuleGeneratorProvider::class,
    ```

4. Run the following command to dump the autoload files:
    ```bash
    composer dump-autoload
    ```

## Usage

Once the package is installed, you can access the module generator using the following URL:
