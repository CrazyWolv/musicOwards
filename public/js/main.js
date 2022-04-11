const app = {
    init: function() {

        app.guidelinesElementsPage();

        app.events();
    },
    events: function() {
            console.log('ok');

        // add is-visible class on .flash-message elements at load with vanilla js
        const flashMessage = document.querySelectorAll('.flash-message');
        for (let i = 0; i < flashMessage.length; i++) {
            flashMessage[i].classList.add('is-visible');
        }

        // remove is-visible class on .flash-message elements when clicked on child .close-button
        const closeButton = document.querySelectorAll('.close-button');
        for (let i = 0; i < closeButton.length; i++) {
            closeButton[i].addEventListener('click', function() {
                this.parentElement.classList.remove('is-visible');
            });
        }

    },
    guidelinesElementsPage: function() {
         // Almost all this code has been generated by Github Copilot. 
        // Only comments have been written by me. 
        // and ... not so true because Copliot also finished the comments for me.
        
        // get all gl-components in a variable
        const glComponents = document.querySelectorAll('.gl-component');

        if(glComponents.length > 0) {
             // loop through all gl-components
            for (let componentsIndex = 0; componentsIndex < glComponents.length; componentsIndex++) {
                const glComponentInner = glComponents[componentsIndex].querySelector('.gl-component-inner');
                const glComponentInnerContent = glComponentInner.innerHTML;
                const glComponentInnerContentEscaped = glComponentInnerContent.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
                const glComponentCode = document.createElement('div');
                glComponentCode.classList.add('gl-component-code');
                glComponentCode.innerHTML = '<pre><code>' + glComponentInnerContentEscaped + '</code></pre>';
                glComponentInner.appendChild(glComponentCode);
                hljs.highlightAll();
            }

            // Create a navigation sidebar from to document's h2 elements
            const glNavigation = document.createElement('div');
            glNavigation.classList.add('gl-navigation');
            const glNavigationInner = document.createElement('div');
            glNavigationInner.classList.add('gl-navigation-inner');
            // add a title to glNavigationInner
            const glNavigationTitle = document.createElement('h2');
            glNavigationTitle.classList.add('gl-navigation-title');
            glNavigationTitle.innerText = 'Navigation';
            glNavigationInner.appendChild(glNavigationTitle);
            glNavigation.appendChild(glNavigationInner);
            const glNavigationList = document.createElement('ul');
            glNavigationList.classList.add('gl-navigation-list');
            glNavigationInner.appendChild(glNavigationList);
            const glNavigationListItems = document.querySelectorAll('.gl-title-nav');
            for (let listItemsIndex = 0; listItemsIndex < glNavigationListItems.length; listItemsIndex++) {
                const glNavigationListItem = document.createElement('li');
                glNavigationListItem.classList.add('gl-navigation-list-item');
                // add id from current h2 content
                glNavigationListItems[listItemsIndex].id = glNavigationListItems[listItemsIndex].innerText.replace(/ /g, '-').toLowerCase();
                
                glNavigationListItem.innerHTML = '<a href="#' + glNavigationListItems[listItemsIndex].id + '">' + glNavigationListItems[listItemsIndex].innerHTML + '</a>';
                glNavigationList.appendChild(glNavigationListItem);
            }
            
            // add glNavigation to document
            document.body.insertBefore(glNavigation, document.body.firstChild);
            
            const glNavigationListItemsLinks = document.querySelectorAll('.gl-navigation-list-item a');
            // add active class when clicking on a link
            for (let linksIndex = 0; linksIndex < glNavigationListItemsLinks.length; linksIndex++) {
                glNavigationListItemsLinks[linksIndex].addEventListener('click', function() {

                    for (let linksIndex = 0; linksIndex < glNavigationListItemsLinks.length; linksIndex++) {
                        glNavigationListItemsLinks[linksIndex].classList.remove('active');
                    }
                    this.classList.add('active');
                });
            }

            // add a "copy to clipboard" button on each gl-component-code
            // const glComponentCodeButtons = document.querySelectorAll('.gl-component-code pre code');
            // for (let buttonsIndex = 0; buttonsIndex < glComponentCodeButtons.length; buttonsIndex++) {
            //     const glComponentCodeButton = document.createElement('button');
            //     glComponentCodeButton.classList.add('gl-component-code-button');
            //     glComponentCodeButton.innerText = 'Copy to clipboard';

            //     // add event listener to each button to copy the code to clipboard
            //     glComponentCodeButton.addEventListener('click', function() {
            //         this.select();
            //         document.execCommand('copy');
            //     });

            //     glComponentCodeButtons[buttonsIndex].parentNode.appendChild(glComponentCodeButton);

                
            // }


        }
    }
}

app.init();