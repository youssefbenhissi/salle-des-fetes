<?php ?>
</section>
<!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->
<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        <p>
            &copy; Copyrights <strong>Monaliza</strong>. All Rights Reserved
        </p>
        <div class="credits">
            <!--
              You are NOT allowed to delete the credit link to TemplateMag with free version.
              You can delete the credit link only if you bought the pro version.
              Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
              Licensing information: https://templatemag.com/license/
            -->
            Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="blank.html#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->

<!-- js placed at the end of the document so the pages load faster -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
<script src="lib/jquery.ui.touch-punch.min.js"></script>
<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="lib/jquery.scrollTo.min.js"></script>
<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<!--script for this page-->
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.12.0/validate.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/v4.0.0/src/js/bootstrap-datetimepicker.js"></script>

<script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<!-- Data TAble-->
<script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>

<!--script for this page-->
<script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
        var aData = oTable.fnGetData(nTr);
        var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
        sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
        sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
        sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
        sOut += '</table>';

        return sOut;
    }

    $(document).ready(function() {
        /*
         * Insert a 'details' column to the table
         */
        var nCloneTh = document.createElement('th');
        var nCloneTd = document.createElement('td');

        $('#hidden-table-info thead tr').each(function() {
            this.insertBefore(nCloneTh, this.childNodes[0]);
        });

        $('#hidden-table-info tbody tr').each(function() {
            this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
        });

        /*
         * Initialse DataTables, with no sorting on the 'details' column
         */
        var oTable = $('#hidden-table-info').dataTable({
            "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [0]
            }],
            "aaSorting": [
                [1, 'asc']
            ]
        });

        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        $('#hidden-table-info tbody td img').on('click','', function() {
            var nTr = $(this).parents('tr')[0];
            if (oTable.fnIsOpen(nTr)) {
                /* This row is already open - close it */
                this.src = "/lib/advanced-datatable/media/images/details_open.png";
                oTable.fnClose(nTr);
            } else {
                /* Open this row */
                this.src = "/lib/advanced-datatable/images/details_close.png";
                oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
            }
        });
    });
</script>

<script>
    (function() {
        // Before using it we must add the parse and format functions
        // Here is a sample implementation using moment.js
        validate.extend(validate.validators.datetime, {
            // The value is guaranteed not to be null or undefined but otherwise it
            // could be anything.
            parse: function(value, options) {
                return +moment.utc(value);
            },
            // Input is a unix timestamp
            format: function(value, options) {
                var format = options.dateOnly ? "YYYY-MM-DD" : "YYYY-MM-DD hh:mm:ss";
                return moment.utc(value).format(format);
            }
        });
        // These are the constraints used to validate the form
        var constraints = {
            animation: {
                presence: true,
            },
            value: {
                // You also need to input where you live
                presence: true,
                numericality: {
                    greaterThan: 0,
                }
                // And we restrict the countries supported to Sweden
            },
            date_debut: {
                // The user needs to give a birthday
                presence: true,
                // and must be born at least 18 years ago
                date: {
                    earliest:moment(),
                    message: "^You must be at least today"
                }
            },
            date_fin: {
                // The user needs to give a birthday
                presence: true,
                // and must be born at least 18 years ago
                date: {
                    earliest: moment().add(1,"days"),
                    message: "Date Fin has to be > date debut"
                }
            },
        };
        var constraintsAddDecorPromotion = {
            decor: {
                presence: true,
            },
            value: {
                // You also need to input where you live
                presence: true,
                numericality: {
                    greaterThan: 0,
                }
                // And we restrict the countries supported to Sweden
            },
            date_debut: {
                // The user needs to give a birthday
                presence: true,
                // and must be born at least 18 years ago
                date: {
                    earliest:moment(),
                    message: "^You must be at least today"
                }
            },
            date_fin: {
                // The user needs to give a birthday
                presence: true,
                // and must be born at least 18 years ago
                date: {
                    earliest: moment().add(1,"days"),
                    message: "Date Fin has to be > date debut"
                }
            },
        };
        var editconstraints = {
            value: {
                // You also need to input where you live
                presence: true,
                numericality: {
                    greaterThan: 0,
                }
                // And we restrict the countries supported to Sweden
            },
            date_debut: {
                // The user needs to give a birthday
                presence: true,
                // and must be born at least 18 years ago
                date: {
                    earliest:moment(),
                    message: "^You must be at least today"
                }
            },
            date_fin: {
                // The user needs to give a birthday
                presence: true,
                // and must be born at least 18 years ago
                date: {
                    earliest: moment().add(1,"days"),
                    message: "Date Fin has to be >= date debut"
                }
            },
        };
        var inputs = document.querySelectorAll("input, textarea, select");
        if(document.querySelector("form#mainAddAnimationPromotion") != null){
            var form = document.querySelector("form#mainAddAnimationPromotion");
            form.addEventListener("submit", function(ev) {
                ev.preventDefault();
                handleFormSubmit(form);
            });
            // Hook up the inputs to validate on the fly
            for (var i = 0; i < inputs.length; ++i) {
                inputs.item(i).addEventListener("change", function(ev) {
                    var errors = validate(form, constraints) || {};
                    showErrorsForInput(this, errors[this.name])
                });
            }
        }else if(document.querySelector("form#mainEdit") != null){
            var editform = document.querySelector("form#mainEdit");
            editform.addEventListener("submit", function(ev) {
                ev.preventDefault();
                handleEfitFormSubmit(editform);
            });
            // Hook up the inputs to validate on the fly

            for (var i = 0; i < inputs.length; ++i) {
                inputs.item(i).addEventListener("change", function(ev) {
                    var errors = validate(editform, editconstraints) || {};
                    showErrorsForInput(this, errors[this.name])
                });
            }
        }
        else if(document.querySelector("form#mainAddDecorPromotion") != null){
            var AddformDecor = document.querySelector("form#mainAddDecorPromotion");
            AddformDecor.addEventListener("submit", function(ev) {
                ev.preventDefault();
                handlemainAddDecorPromotionSubmit(AddformDecor);
            });
            // Hook up the inputs to validate on the fly

            for (var i = 0; i < inputs.length; ++i) {
                inputs.item(i).addEventListener("change", function(ev) {
                    var errors = validate(AddformDecor, constraintsAddDecorPromotion) || {};
                    showErrorsForInput(this, errors[this.name])
                });
            }
        }


        function handlemainAddDecorPromotionSubmit(form, input) {
            // validate the form aainst the constraints
            var errors = validate(form, editconstraints);
            // then we update the form to reflect the results
            showErrors(form, errors || {});
            if (!errors) {
                document.querySelector("form#mainAddDecorPromotion").submit();
            }
        }

        function handleEfitFormSubmit(form, input) {
            // validate the form aainst the constraints
            var errors = validate(form, editconstraints);
            // then we update the form to reflect the results
            showErrors(form, errors || {});
            if (!errors) {
                document.querySelector("form#mainEdit").submit();
            }
        }

        function handleFormSubmit(form, input) {
            // validate the form aainst the constraints
            var errors = validate(form, constraints);
            // then we update the form to reflect the results
            showErrors(form, errors || {});
            if (!errors) {
                document.querySelector("form#main").submit();
            }
        }

        // Updates the inputs with the validation errors
        function showErrors(form, errors) {
            // We loop through all the inputs and show the errors for that input
            _.each(form.querySelectorAll("input[name], select[name]"), function(input) {
                // Since the errors can be null if no errors were found we need to handle
                // that
                showErrorsForInput(input, errors && errors[input.name]);
            });
        }

        // Shows the errors for a specific input
        function showErrorsForInput(input, errors) {
            // This is the root of the input
            var formGroup = closestParent(input.parentNode, "form-group")
                // Find where the error messages will be insert into
                , messages = formGroup.querySelector(".messages");
            // First we remove any old messages and resets the classes
            resetFormGroup(formGroup);
            // If we have errors
            if (errors) {
                // we first mark the group has having errors
                formGroup.classList.add("has-error");
                // then we append all the errors
                _.each(errors, function(error) {
                    addError(messages, error);
                });
            } else {
                // otherwise we simply mark it as success
                formGroup.classList.add("has-success");
            }
        }

        // Recusively finds the closest parent that has the specified class
        function closestParent(child, className) {
            if (!child || child == document) {
                return null;
            }
            if (child.classList.contains(className)) {
                return child;
            } else {
                return closestParent(child.parentNode, className);
            }
        }

        function resetFormGroup(formGroup) {
            // Remove the success and error classes
            formGroup.classList.remove("has-error");
            formGroup.classList.remove("has-success");
            // and remove any old messages
            _.each(formGroup.querySelectorAll(".help-block.error"), function(el) {
                el.parentNode.removeChild(el);
            });
        }

        // Adds the specified error with the following markup
        // <p class="help-block error">[message]</p>
        function addError(messages, error) {
            var block = document.createElement("p");
            block.classList.add("help-block");
            block.classList.add("error");
            block.innerText = error;
            messages.appendChild(block);
        }
        function showSuccess() {
            // We made it \:D/
           form.submitHandler();
        }
    })();
</script>
</body>

</html>

