# What I learn while coding this website
## HTML

## CSS 
There are 2 ways to code the 'Download App Store Button'
Originally, this is how the button writtent in 'LESS':
>.app {
  &-btn {
   width: 45%;
   max-width: 160px;
   color: #fff;
   margin: 20px 10px;
   text-align: left;
   border-radius: 5px;
   text-decoration: none;
   font-family: "Lucida Grande", sans-serif;
   font-size: 10px;
   text-transform: uppercase;
   &.blu {
    background-color: #101010;
    transition: background-color 0.25s linear;
    &:hover {
     background-color: #454545;
    }
   }

   i {
    width: 20%;
    text-align: center;
    font-size: 28px;
    margin-right: 7px;
   }

   .big-txt {
    font-size: 17px;
    text-transform: capitalize;
   }
  }
 }

 This is the cSS version of it: 
 >.app-btn {
	 width: 45%;
	 max-width: 160px;
	 color: #fff;
	 margin: 20px 10px;
	 text-align: left;
	 border-radius: 5px;
	 text-decoration: none;
	 font-family: "Lucida Grande", sans-serif;
	 font-size: 10px;
	 text-transform: uppercase;
}
 .app-btn.blu {
	 background-color: #101010;
	 transition: background-color 0.25s linear;
}
 .app-btn.blu:hover {
	 background-color: #454545;
}
 .app-btn i {
	 width: 20%;
	 text-align: center;
	 font-size: 28px;
	 margin-right: 7px;
}
 .app-btn .big-txt {
	 font-size: 17px;
	 text-transform: capitalize;
}
 
More info here [https://stackoverflow.com/questions/13608855/what-does-an-before-a-pseudo-element-in-css-mean]

Some good resources for buttons: 
1. [https://getcssscan.com/css-buttons-examples]
2. [https://cssbuttons.app/]
3. [https://css-tricks.com/a-complete-guide-to-links-and-buttons/]
4. [https://ui-buttons.web.app/]
5. [https://codepen.io/moughamir/pen/OoZOmm]

More about Markdown on Github here [https://docs.github.com/en/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax]
or here [https://document360.com/blog/introductory-guide-to-markdown-for-documentation-writers/]

Some web for reference [https://fensea.webflow.io/]

Custome Fonts [https://www.digitalocean.com/community/tutorials/how-to-load-and-use-custom-fonts-with-css}]

Customize Code [https://projects.animaapp.com/team/stephanie-nhis-team-tpflwpy/project/1khsxrP/screen/omni-reels-main-page-scrolling/omniview?mode=code]
or here [https://web.overlay-tech.com/project/44fc8189-6bf2-4b2a-84ac-47bd74df7941/component-sets/df951135-1ce9-4d46-942d-ba165352e0cb]

### CSS :root Pseudo-Class Selector
More info [https://www.digitalocean.com/community/tutorials/css-root-pseudo-class]
Here too [https://www.converticacommerce.com/ux-ui-frontend-design/css-variables-use-css-custom-properties/}]



 


