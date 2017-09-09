import React, {Component} from 'react'
import {connect} from 'react-redux'
import {selectBook} from "../actions/index";
import {bindActionCreators} from 'redux'

class BookList extends Component {
    renderList() {
        return this.props.books.map((book) => {
            return (
                <button key={book.title}
                    onClick={() => this.props.selectBook(book)}
                    className="list-group-item">
                    {book.title}
                </button>
            )
        })
    }

    render() {
        return (
            <ul className="list-group col-sm-4">
                {this.renderList()}
            </ul>
        )
    }
}

// State from redux to props in react
function mapStateToProps(state) {
    return {
        books: state.books
    }
}

// When selectBook is called, result will be passed to all reducers.
// Everything return will become props for container
function mapDispatchToProps(dispatch) {
    return bindActionCreators({selectBook: selectBook}, dispatch)
}

// Promote BookList from a component to a container
export default connect(mapStateToProps, mapDispatchToProps)(BookList)
