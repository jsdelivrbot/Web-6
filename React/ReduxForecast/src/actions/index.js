import axios from 'axios'
// axios is requests library

const API_KEY = "getourownkey.git";
const ROOT_URL = `http://api.openweathermap.org/data/2.5/forecast?appid=${API_KEY}`;

export const FETCH_WEATHER = 'FETCH_WEATHER';

export function fetchWeather(city) {
    if (!city){
        return{type:"NO_CITY_NAME"}
    }
    const url = `${ROOT_URL}&q=${city},pl`;
    const request = axios.get(url);
    // Promise stops action on payload until it resolves and then sends it to reducer
    return {
        type: FETCH_WEATHER,
        payload: request
    }
}
