import React, {Component} from 'react'
import {connect} from 'react-redux'
import Chart from '../components/chart'
import GoogleMap from '../components/google_map'
import ReactCSSTransitionGroup from 'react-addons-css-transition-group'

class WeatherList extends Component {
    renderWeather(cityData) {
        const cityName = cityData.city.name;
        // lat and long from city.coord
        const {lon, lat} = cityData.city.coord;
        const temps = cityData.list.map(weather => weather.main.temp - 273.15);
        const pressures = cityData.list.map(weather => weather.main.pressure);
        const humidities = cityData.list.map(weather => weather.main.humidity);
        return (
            <tr key={cityName}>
                <td><GoogleMap lon={lon} lat={lat}/></td>
                <td><Chart data={temps} color="orange" units="C"/></td>
                <td><Chart data={pressures} color="blue" units="hPa"/></td>
                <td><Chart data={humidities} color="green" units="%"/></td>
            </tr>
        )
    }

    render() {
        return (
            <table className="table table-hover">
                <thead>
                <tr>
                    <th>City</th>
                    <th>Temperature (C)</th>
                    <th>Pressure (hPa)</th>
                    <th>Humidity (%)</th>
                </tr>
                </thead>
                <ReactCSSTransitionGroup
                    transitionName="fade"
                    transitionEnterTimeout={500}
                    transitionLeaveTimeout={300}
                    transitionAppearTimeout={500}
                    transitionAppear={true}
                    component="tbody"
                >
                    {this.props.weather.map(this.renderWeather)}
                </ReactCSSTransitionGroup>
            </table>
        )
    }
}

// state.weather
function mapStateToProps({weather}) {
    return {weather}
}

export default connect(mapStateToProps)(WeatherList)