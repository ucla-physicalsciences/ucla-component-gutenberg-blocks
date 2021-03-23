/*Register block*/
(function(blocks, editor, element) {
	var el = element.createElement;

blocks.registerBlockType('gutemberg-custom-block/ribbon',
{
    
  //built-in attributes
    
    title : 'Ribbon',
    description: 'Block to generate a Ribbon',
    icon: 'format-image',
    category: 'layout',
       
  //custom attributes
        
    attributes: {
	    content: {
		    type: 'string',
		    default : 'ucla ribbon'}
    },
    // preview
	example: {},
  //custom functions
        
  //built-in functions
        
    edit: function(props) {
	    return (
		    el( 'div', { className: props.className },
			el(
				editor.RichText,
				{
					tagName: 'div',
					className: 'ribbon-content',
					value: props.attributes.content,
					onChange: function( content ) {
						props.setAttributes( { content: content } );
					}
				}
			),
		    )
	    );
    },
	save: function(props) {
	return (
		el( 'div', { className: props.className },
			el( editor.RichText.Content, {
				tagName: 'p',
				className: 'ribbon-content',
				value: props.attributes.content,
			} ),
		)
	);
	},});
        
})(window.wp.blocks, window.wp.editor, window.wp.element);
