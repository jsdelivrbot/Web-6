import _ from 'lodash'
import React, {Component} from 'react';
import ReactDOM from 'react-dom'
import YTSearch from 'youtube-api-search'

import SearchBar from './components/search_bar'
import VideoList from './components/video_list'
import VideoDetail from './components/video_detail'
// YouTube API Key
// To use it for search: npm install --save youtube-api-search
// --save saves dependencies in package.json
const API_KEY = "getourownkey.git"


// Component produces HTML
// Always 1 component per file
// First Declare component
class App extends Component {
    constructor(props) {
        super(props);

        this.state = {
            videos: [],
            selectedVideo: null
        };

        this.videoSearch("ReactJS", true)
    }


    videoSearch(term, first) {
        YTSearch({key: API_KEY, term: term}, (videos) => {
                // videos instead of videos : videos (same name)
                if (first) {
                    this.setState({
                        videos: videos,
                        selectedVideo: videos[0]
                    })
                }
                else {
                    this.setState({videos})
                }
            }
        )
    }

    render() {
        const videoSearch = _.debounce((term) => {
            this.videoSearch(term)
        }, 300);
        return (
            <div>
                <SearchBar onSearchTermChange={videoSearch}/>
                <VideoDetail video={this.state.selectedVideo}/>
                <VideoList
                    onVideoSelect={selectedVideo => this.setState({selectedVideo})}
                    videos={this.state.videos}/>
            </div>
        );
    }
}

// Then put in on page (via DOM)
ReactDOM.render(<App/>, document.querySelector('.container'));
