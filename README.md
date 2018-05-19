
## Setup
- [ ] Setup a localhost server
- [ ] ``` git clone git@github.com:ISURobotics/website.git ```
- [ ] ``` Install npm ``` 
- [ ] ``` npm install 'dependencies in package.json'```

## Using Gulp

``` gulp watch ```: Gulp task to track all ```scss``` and ```js``` files

## Directory Structure
``` 
website
|   package.json    -- Defines all the dependencies used in this project 
|   gulpfile.js     -- Contains gulp tasks that help speed up development
|   *.php           -- main HTML pages
|___src
    |___img         -- contains all image assets 
    |___data        -- json files
    |___js          -- Holds all Javascript files
    |___css         -- dir with minimized css file (do not edit)
    |___scss        -- dir with sass files 
    |___template    -- global components (footer
        |___content -- unique page components
     
```


