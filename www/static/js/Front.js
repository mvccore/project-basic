Class.Define('Front',{
	Extend: Module,
	Constructor: function () {
		this.parent();
		// run any modules if exist here:
		
	}
});

// run all declared javascripts after <body>, after all elements are declared
window.front = new Front();