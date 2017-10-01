
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:OVAC" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="OVAC.html">OVAC</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:OVAC_LaravelHubtelPayment" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="OVAC/LaravelHubtelPayment.html">LaravelHubtelPayment</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:OVAC_LaravelHubtelPayment_Facades" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="OVAC/LaravelHubtelPayment/Facades.html">Facades</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:OVAC_LaravelHubtelPayment_Facades_HubtelPayment" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="OVAC/LaravelHubtelPayment/Facades/HubtelPayment.html">HubtelPayment</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:OVAC_LaravelHubtelPayment_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="OVAC/LaravelHubtelPayment/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                            <li data-name="class:OVAC_LaravelHubtelPayment_laravelHubtelPayment" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="OVAC/LaravelHubtelPayment/laravelHubtelPayment.html">laravelHubtelPayment</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "OVAC.html", "name": "OVAC", "doc": "Namespace OVAC"},{"type": "Namespace", "link": "OVAC/LaravelHubtelPayment.html", "name": "OVAC\\LaravelHubtelPayment", "doc": "Namespace OVAC\\LaravelHubtelPayment"},{"type": "Namespace", "link": "OVAC/LaravelHubtelPayment/Facades.html", "name": "OVAC\\LaravelHubtelPayment\\Facades", "doc": "Namespace OVAC\\LaravelHubtelPayment\\Facades"},
            
            {"type": "Class", "fromName": "OVAC\\LaravelHubtelPayment\\Facades", "fromLink": "OVAC/LaravelHubtelPayment/Facades.html", "link": "OVAC/LaravelHubtelPayment/Facades/HubtelPayment.html", "name": "OVAC\\LaravelHubtelPayment\\Facades\\HubtelPayment", "doc": "&quot;class HubtelPayment.&quot;"},
                                                        {"type": "Method", "fromName": "OVAC\\LaravelHubtelPayment\\Facades\\HubtelPayment", "fromLink": "OVAC/LaravelHubtelPayment/Facades/HubtelPayment.html", "link": "OVAC/LaravelHubtelPayment/Facades/HubtelPayment.html#method_getFacadeAccessor", "name": "OVAC\\LaravelHubtelPayment\\Facades\\HubtelPayment::getFacadeAccessor", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "OVAC\\LaravelHubtelPayment", "fromLink": "OVAC/LaravelHubtelPayment.html", "link": "OVAC/LaravelHubtelPayment/ServiceProvider.html", "name": "OVAC\\LaravelHubtelPayment\\ServiceProvider", "doc": "&quot;class ServiceProvider.&quot;"},
                                                        {"type": "Method", "fromName": "OVAC\\LaravelHubtelPayment\\ServiceProvider", "fromLink": "OVAC/LaravelHubtelPayment/ServiceProvider.html", "link": "OVAC/LaravelHubtelPayment/ServiceProvider.html#method_boot", "name": "OVAC\\LaravelHubtelPayment\\ServiceProvider::boot", "doc": "&quot;Inject the configurration for this package from the\napplication enviroment during boot.&quot;"},
                    {"type": "Method", "fromName": "OVAC\\LaravelHubtelPayment\\ServiceProvider", "fromLink": "OVAC/LaravelHubtelPayment/ServiceProvider.html", "link": "OVAC/LaravelHubtelPayment/ServiceProvider.html#method_register", "name": "OVAC\\LaravelHubtelPayment\\ServiceProvider::register", "doc": "&quot;Binds this package with the Laravel Application.&quot;"},
            
            {"type": "Class", "fromName": "OVAC\\LaravelHubtelPayment", "fromLink": "OVAC/LaravelHubtelPayment.html", "link": "OVAC/LaravelHubtelPayment/laravelHubtelPayment.html", "name": "OVAC\\LaravelHubtelPayment\\laravelHubtelPayment", "doc": "&quot;class LaravelHubtelPayment.&quot;"},
                                                        {"type": "Method", "fromName": "OVAC\\LaravelHubtelPayment\\laravelHubtelPayment", "fromLink": "OVAC/LaravelHubtelPayment/laravelHubtelPayment.html", "link": "OVAC/LaravelHubtelPayment/laravelHubtelPayment.html#method_getConfig", "name": "OVAC\\LaravelHubtelPayment\\laravelHubtelPayment::getConfig", "doc": "&quot;This method returns an instance of the \\OVAC\\HubtelPayment\\Config created with\nthe hubtel client account expected in the Laravel Hubtel Payment congiguration.&quot;"},
                    {"type": "Method", "fromName": "OVAC\\LaravelHubtelPayment\\laravelHubtelPayment", "fromLink": "OVAC/LaravelHubtelPayment/laravelHubtelPayment.html", "link": "OVAC/LaravelHubtelPayment/laravelHubtelPayment.html#method___call", "name": "OVAC\\LaravelHubtelPayment\\laravelHubtelPayment::__call", "doc": "&quot;This class dynamically places a call to the OVAC\\HubtelPayment\\Pay::class\nand calls the a dynamic static method which in turn returns the class\nrequired by the fascade which this package exposes.&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


