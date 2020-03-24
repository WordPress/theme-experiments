/**================================
 * Setting up the basics
 **===============================*/

// Requirements
var util  = require('util'),
  path    = require('path'),
  fs      = require('fs'),
  yeoman  = require('yeoman-generator'),
  chalk   = require('chalk'),
  mkdirp  = require('mkdirp'),
  yosay   = require('yosay');

// Export the module
module.exports = class extends yeoman {

  prompting() {
    // Have Yeoman greet the user.
    this.log(yosay(
      'Welcome to the ' + chalk.bold( 'Block-based Theme' ) + ' generator!'
    ));

    var prompts = [

      // Basic theme scaffolding
      {
        name: 'themeName',
        message: 'Theme Name',
        required: true,
        default: 'Gutenberg Starter Theme'
      },
      {
        name: 'themeURL',
        message: 'Theme URL',
        required: true,
        default: 'https://github.com/WordPress/gutenberg-starter-theme'
      },
      {
        name: 'themeSlug',
        message: 'Theme Slug',
        required: true,
        default: 'gutenberg_starter_theme'
      },
      {
        name: 'themeTextDomain',
        message: 'Theme Text Domain',
        required: true,
        default: 'gutenberg-starter-theme'
      },
      {
        name: 'themeDescription',
        message: 'Theme Description',
        default: 'A simple theme for testing Gutenberg.'
      },
      {
        name: 'themeSubjectTags',
        type: 'checkbox',
        message: 'Theme Subject Tags (max. 3)',
        choices: [
          { title: 'Blog', value: 'blog' },
          { title: 'E-commerce', value: 'e-commerce' },
          { title: 'Education', value: 'education' },
          { title: 'Entertainment', value: 'entertainment' },
          { title: 'Food & Drink', value: 'food-and-drink' },
          { title: 'Holiday', value: 'holiday' },
          { title: 'News', value: 'news' },
          { title: 'Photography', value: 'photography' },
          { title: 'Portfolio', value: 'portfolio' }
        ],
      },
      {
        name: 'themeVersion',
        message: 'Theme Version',
        default: '1.0.0'
      },
      {
        name: 'themeAuthor',
        message: 'Author Name',
        default: 'Jane Doe',
        required: true,
        store: true
        
      },
      {
        name: 'themeAuthorURL',
        message: 'Author URL',
        default: 'https://janedoe.com',
        required: true,
        store: true
      }
    ];

    return this.prompt(prompts).then(function (props) {
      
      this.props = props;

      // Basic Theme Scaffold
      this.themeName = props.themeName;
      this.themeURL = props.themeURL;
      this.themeSlug = props.themeSlug;
      this.themeDescription = props.themeDescription;
      this.themeSubjectTags = props.themeSubjectTags;
      this.themeTextDomain = props.themeTextDomain;
      this.themeVersion = props.themeVersion;
      this.themeAuthor = props.themeAuthor;
      this.themeAuthorURL = props.themeAuthorURL;

    }.bind(this));

  }

  writing() {

    // Basic theme
    var themeInfo = { 
        themeName: this.props.themeName,
        themeURL: this.props.themeURL,
        themeSlug: this.props.themeSlug,
        themeDescription: this.props.themeDescription,
        themeSubjectTags: this.props.themeSubjectTags,
        themeTextDomain: this.props.themeTextDomain,
        themeVersion: this.props.themeVersion,
        themeAuthor: this.props.themeAuthor,
        themeAuthorURL: this.props.themeAuthorURL
    };

    // ----------------------------------------------------
    //  Theme Setup
    // ----------------------------------------------------

    // Lisence
    this.fs.copyTpl(
      this.templatePath( '_LICENSE' ), 
      this.destinationPath( this.themeSlug + '/LICENSE' ),
      { themeInfo }
    );

    // ----------------------------------------------------
    //  Theme files
    // ----------------------------------------------------

    // Style.css
    this.fs.copyTpl(
      this.templatePath( '_style.css' ), 
      this.destinationPath( this.themeSlug + '/style.css' ), 
      { themeInfo }
    );

    // Functions
    this.fs.copyTpl(
      this.templatePath( '_functions.php' ), 
      this.destinationPath( this.themeSlug + '/functions.php' ), 
      { themeInfo }
    );

    // Index
    this.fs.copyTpl(
      this.templatePath( '_index.php' ), 
      this.destinationPath( this.themeSlug + '/index.php' ), 
      { themeInfo }
    );

    // ----------------------------------------------------
    //  Block template parts
    // ----------------------------------------------------

    // Footer
    this.fs.copyTpl(
      this.templatePath( 'block-template-parts/_footer.html' ), 
      this.destinationPath( this.themeSlug + '/block-template-parts/_footer.html' ), 
      { themeInfo }
    );

    // Header
    this.fs.copyTpl(
      this.templatePath( 'block-template-parts/_header.html' ), 
      this.destinationPath( this.themeSlug + '/block-template-parts/_header.html' ), 
      { themeInfo }
    );

    // ----------------------------------------------------
    //  Block templates
    // ----------------------------------------------------

    // Index
    this.fs.copyTpl(
      this.templatePath( 'block-templates/_index.html' ), 
      this.destinationPath( this.themeSlug + '/block-templates/index.html' ), 
      { themeInfo }
    );

    // Page blog
    this.fs.copyTpl(
      this.templatePath( 'block-templates/_page-blog.html' ), 
      this.destinationPath( this.themeSlug + '/block-templates/page-blog.html' ), 
      { themeInfo }
    );
  }
}
