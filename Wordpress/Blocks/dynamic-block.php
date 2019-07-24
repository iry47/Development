/**
 *  BLOCK: Book Details
 *  ---
 *  Add details for a book to a post or page.
 */

//  Import CSS.
import './editor.css'

const { __ } = wp.i18n
const { registerBlockType } = wp.blocks

registerBlockType('davidyeiser-detailer/book-details', {
  title: __( 'Book Details' ),
  icon: 'format-aside',
  category: 'common',
  keywords: [
    __( 'book' ),
    __( 'details' ),
  ],

  // Enable or disable support for low-level features
  supports: {

  },

  // Set up data model for custom block
  attributes: {

  },

  // The UI for the WordPress editor
  edit: props => {
    return null
  },

  // The output on the live site
  save: props => {
    return null
  }
})
