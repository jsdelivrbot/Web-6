import React, {Component} from 'react'

class GoogleMap extends Component {
    componentDidMount() {
        // this refs is reference to div bellow (target for google maps)
        new google.maps.Map(this.refs.map, {
            zoom: 12,
            center: {
                lat: this.props.lat,
                lng: this.props.lon
            }
        });
    }

    render() {
        return <div ref="map"/>;
    }
}

export default GoogleMap