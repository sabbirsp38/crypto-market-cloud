$(function() {  
    var filePath = "CMC_ONEPAGER.pdf";

    function Num(num) {
        var num = num;

        return function () {
            return num;
        }
    };

    function renderPDF(url, canvasContainer, options) {
        var options = options || {
                scale: 1.5
            },          
            func,
            pdfDoc,
            def = $.Deferred(),
            promise = $.Deferred().resolve().promise(),         
            width, 
            height,
            makeRunner = function(func, args) {
                return function() {
                    return func.call(null, args);
                };
            };

        function renderPage(num) {          
            var def = $.Deferred(),
                currPageNum = new Num(num);
            pdfDoc.getPage(currPageNum()).then(function(page) {
                var viewport = page.getViewport(options.scale);
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
                var renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };

                if(currPageNum() === 1) {                   
                    height = viewport.height;
                    width = viewport.width;
                }

                canvas.height = height;
                canvas.width = width;

                canvasContainer.appendChild(canvas);

                page.render(renderContext).then(function() {                                        
                    def.resolve();
                });
            })

            return def.promise();
        }

        function renderPages(data) {
            pdfDoc = data;

            var pagesCount = pdfDoc.numPages;
            for (var i = 1; i <= pagesCount; i++) { 
                func = renderPage;
                promise = promise.then(makeRunner(func, i));
            }
        }

        PDFJS.disableWorker = true;
        PDFJS.getDocument(url).then(renderPages);       
    };

    var body = document.getElementById("body");
    renderPDF(filePath, body);
	});