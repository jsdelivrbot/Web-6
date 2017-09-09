import React, {Component} from 'react'
import {Field, reduxForm} from 'redux-form'
import {Link} from 'react-router-dom'
import {connect} from 'react-redux'
import {createPost} from "../actions/index";
// redux-forms for forms in redux
// reduxForm is similar to connect
class PostsNew extends Component {
    // field argument has event handler which needs to wire it up with corresponding field
    renderField(field) {
        const {meta: {touched, error}} = field;
        // turns red when error
        const className = `form-group ${touched && error ? 'has-danger' : ''}`;
        console.log(className);
        return (
            <div className={className}>
                <label>{field.label}</label>
                <input
                    // instead of:
                    // onchange={field.input.onChange} > ...
                    className="form-control"
                    type="text"
                    {...field.input}
                />
                <div className="text-help">
                    {touched ? error : ""}
                </div>
            </div>
        )
        // touched means user already clicked and tabbed away or clicked submit
    }

    onSubmit(values) {
        // Every routed page has many helper props which can be used to return
        this.props.createPost(values, () =>{
            this.props.history.push('/')
        })
    }

    render() {
        // It comes from reduxForm props (they are wired on the bottom)
        const {handleSubmit} = this.props;
        // Component tells field how it should be shown (returns JSX). Always have to declare it
        return (
            // On submit redux validates and then passes values to our function
            <form onSubmit={handleSubmit(this.onSubmit.bind(this))}>
                <Field label="Post Title" name="title" component={this.renderField}/>
                <Field label="Categories" name="categories" component={this.renderField}/>
                <Field label="Post Content" name="content" component={this.renderField}/>
                <button type="submit" className="btn btn-primary">Submit</button>
                <Link className="btn btn-danger" to="/">Cancel</Link>
            </form>
        )
    }
}

function validate(values) {
    // values -> {title:"sth", categories: "sth", content:"sth"}
    const errors = {};
    // Validate inputs
    if (!values.title) {
        // Must be the same as field name
        errors.title = "Enter a title"
    }
    if (!values.categories) {
        errors.categories = "Enter some categories"
    }
    if (!values.content) {
        errors.content = "Enter some content"
    }
    // If errors is empty, the form is valid
    return errors
}

export default reduxForm({
    // Form name, it should be unique
    validate,
    form: 'PostsNewForm'
})(
    connect(null, {createPost})(PostsNew)
);