<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    @include('layouts.head')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.5/isotope.pkgd.js"></script>
</head>

<body class="default ">

    @include('layouts.main_navbar')
    @yield('contents')
    @include('layouts.main_footer')
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/7083262.js"></script>
    <!-- End of HubSpot Embed Code -->
    @include('layouts.script_blogs')
    <script>
        $(document).ready(function() {
            var $container = $(".gridz"); // the container with all the elements to filterz inside
            var filters = {}; // should be outside the scope of the filtering function

            /* --- read the documentation on isotope.metafizzy.co for more options --- */
            var $grid = $container.isotope({
                itemSelector: ".itemz", // the elements to filter
                percentPosition: true, // true if you use percentage widths
            });

            // save some classes for later usage
            /* ---
            activeClass: adds this class to filters that are selectedz (active)
            comboClass: the class that indicates that the filterz group is a chain filter, i.e. if you select two filters, only items with BOTH filters will be shown
            exclClass: the class that indicates that the filterz group is an exclusion filter, i.e. you can only select one filterz from that group at a time
            resetClass: the class for the overall reset button
            --- */
            var activeClass = "selectedz",
                comboClass = "combine",
                exclClass = "exclusive",
                resetClass = "reset";

            var $defaults = $("a." + activeClass + '[data-filter-value=""]');
            $(".option-setz a").click(function(e) {
                // insert your link selector where it says '.option-setz a'
                var $this = $(this); // cache the clicked link
                var comboFilter,
                    filterAttr = "data-filter-value";
                if (resetClass && !$this.hasClass(resetClass)) {
                    // defining variables
                    var filterValue = $this.attr(filterAttr); // cache the filter
                    var $optionSet = $this.parents(".option-setz"); // cache the parent element
                    var group = $optionSet.attr("data-filter-group"); // cache the parent filterz group
                    var filterGroup = filters[group]; // make new variable for the property being filtered
                    if (!filterGroup) {
                        // if the property doesn't exist
                        filterGroup = filters[group] = []; // make a new empty array
                    }
                    var $selectAll = $optionSet.find("a[" + filterAttr + '=""]'); // cache the 'select all' button in the current group
                    $("." + resetClass).removeClass(activeClass);
                    comboFiltering(
                        $this,
                        filters,
                        filterAttr,
                        filterValue,
                        $optionSet,
                        group,
                        $selectAll,
                        activeClass,
                        comboClass,
                        exclClass
                    );
                    comboFilter = getComboFilter(filters); // join all the filters
                    if (!comboFilter.length) $("a." + resetClass).addClass(activeClass);
                    $this.toggleClass(activeClass);
                } else {
                    filters = {};
                    comboFilter = "";
                    $(".option-setz a").removeClass(activeClass);
                    $(this).addClass(activeClass);
                    $defaults.addClass(activeClass);
                }
                $grid.isotope({
                    filter: comboFilter
                });
                e.preventDefault();
            });

            // Filter by default based on active button
            var $activeButton = $(".option-setz a.selectedz");
            if ($activeButton.length > 0) {
                var activeFilterValue = $activeButton.attr("data-filter-value");
                if (activeFilterValue) {
                    $grid.isotope({
                        filter: activeFilterValue
                    });
                }
            }
        });

        function comboFiltering(
            $this,
            filters,
            filterAttr,
            filterValue,
            $optionSet,
            group,
            $selectAll,
            activeClass,
            comboClass,
            exclClass
        ) {
            // for non-exclusive groups of filters
            if (!$optionSet.hasClass(exclClass)) {
                // replace 'exclusive' with the class of your exclusive filter groups
                // if link is a filter that isn't selectedz
                if (!$this.hasClass(activeClass) && filterValue.length) {
                    filters[group].push(filterValue); // add filter to array
                    $selectAll.removeClass(activeClass); // remove the selectedz class from the 'select all' button
                } else if (filterValue.length) {
                    // if link is a selectedz filter
                    // remove filter from array
                    // check if the filter group we're concerned with is a combination filter (.one.two instead of .one,.two)
                    if ($optionSet.hasClass(comboClass)) {
                        filters[group][0] = filters[group][0].replace(filterValue, ""); // delete the filter from the combined string
                        if (!filters[group][0].length)
                            // check if there is anything left in the string after deletion
                            filters[group].splice(0, 1); // if no, remove the empty string
                    } else {
                        // if filter group is not a combo filter
                        var curIndex = filters[group].indexOf(filterValue); // get index of filter string in array
                        if (curIndex > -1) filters[group].splice(curIndex, 1); // remove the filter
                    }
                    if (!$optionSet.find("a." + activeClass).not($this).length)
                        // if there are no remaining filters
                        $selectAll.addClass(activeClass); // add the active class to the 'select all' button
                } else {
                    // if link is the show all button for that group
                    $optionSet.find("a." + activeClass).removeClass(activeClass); // remove the active class from all other buttons
                    filters[group] = []; // clear the array of all filters
                }
                // join everything to a single string for the combined filtering groups
                if ($optionSet.hasClass(comboClass) && filters[group].length)
                    filters[group] = [filters[group].join("")];
            } else {
                // for exclusive groups
                // if link is a filter that isn't selectedz
                if (!$this.hasClass(activeClass) && filterValue.length) {
                    // run a loop for all active filters
                    $optionSet.find("a." + activeClass).each(function(k, filterLink) {
                        // remove all active filters in the same group from the array
                        var removeFilter = $(filterLink).attr(filterAttr);
                        var removeIndex = filters[group].indexOf(removeFilter);
                        filters[group].splice(removeIndex, 1);
                    });
                    filters[group].push(filterValue); // add selectedz filter to array
                    $optionSet.find("a." + activeClass).removeClass(activeClass); // remove the active class from all other links in the group
                } else if (filterValue.length) {
                    // if link is a selectedz filter
                    // remove filter from array
                    var curIndex = filters[group].indexOf(filterValue);
                    if (curIndex > -1) filters[group].splice(curIndex, 1);
                    if (!$optionSet.find("a." + activeClass).not($this).length)
                        // if there are no remaining filters
                        $selectAll.addClass(activeClass); // add active class to 'select all' button
                } else {
                    // if link is the show all button for that group
                    $optionSet.find("a." + activeClass).removeClass(activeClass); // remove active class from all other buttons
                    filters[group] = []; // reset all filters for this group
                }
            }
        }

        /* --- concat filters --- */
        function getComboFilter(filters) {
            // pass the entire array of filters to the function
            var i = 0; // set counter variable as zero
            var comboFilters = []; // make a new array to save the string of filters

            for (var prop in filters) {
                // loop through all the properties in the filter array passed to the function
                var filterGroup = filters[prop]; // define variable
                // skip to next filter group if it doesn't have any values
                if (!filterGroup.length) {
                    continue; // exit loop and move on with next iteration
                }
                if (i === 0) {
                    // copy to new array
                    comboFilters = filterGroup.slice(0);
                } else {
                    var filterSelectors = [];
                    // copy to fresh array
                    var groupCombo = comboFilters.slice(0);
                    // merge filter Groups
                    for (var k = 0, len3 = filterGroup.length; k < len3; k++) {
                        for (var j = 0, len2 = groupCombo.length; j < len2; j++) {
                            filterSelectors.push(groupCombo[j] + filterGroup[k]);
                        }
                    }
                    // apply filter selectors to combo filters for next group
                    comboFilters = filterSelectors;
                }
                i++; // increment
            }

            var comboFilter = comboFilters.join(", ");
            return comboFilter;
        }
    </script>
    <!-- Faq Tabs For Landing pages -->
    <script>
        const items = document.querySelectorAll(".accordionfaq button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute('aria-expanded');

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute('aria-expanded', 'false');
            }

            if (itemToggle == 'false') {
                this.setAttribute('aria-expanded', 'true');
            }
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>
    <!-- Faq Tabs For Landing pages End -->
    <script>
        $(".chkd-list-itm").click(function(e) {
            var cb = $(this).find(":checkbox")[0];
            if (e.target != cb) cb.checked = !cb.checked;
            $(this).toggleClass("selected", cb.checked);
        });
    </script>
    <!-- Load More -->

    <!-- Load More End -->
</body>

</html>