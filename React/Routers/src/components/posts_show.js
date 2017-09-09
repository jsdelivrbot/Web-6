import React, {Component} from 'react'
import {connect} from 'react-redux'
import {fetchPost, deletePost} from "../actions/index";
import {Link} from "react-router-dom";

class PostsShow extends Component {
    componentDidMount() {
        // if post wasn't fetched yet (user entered url manually)
        if (!this.props.post) {
            const {id} = this.props.match.params;
            this.props.fetchPost(id)
        }
    }

    onDeleteClick(){
        const {id} = this.props.match.params;
        this.props.deletePost(id, () => {
            this.props.history.push('/')
        });
    }

    render() {
        const {post} = this.props;
        // if post hasn't fetched yet
        if (!post) {
            return <div>Loading...</div>
        }
        return (
            <div>
                <Link className="btn btn-primary" to="/">Return</Link>
                <h3>{post.title}</h3>
                <h6>Categories: {post.categories}</h6>
                <p>{post.content}</p>
                <button
                    className="btn btn-danger"
                    onClick={this.onDeleteClick.bind(this)}
                >
                    Delete Post
                </button>
            </div>
        )
    }
}

// 1st argument is app props (redux), 2nd is component argument
function mapStateToProps({posts}, ownProps) {
    // post with given id instead of whole list
    return {post: posts[ownProps.match.params.id]}
}

export default connect(mapStateToProps, {fetchPost, deletePost})(PostsShow)