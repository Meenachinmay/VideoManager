const axios = require('axios')

// youtube search api
const BASE_URL = 'https://www.googleapis.com/youtube/v3/search';

module.exports = function (options, callback) {
    if (!options.apiKey){
        throw new Error('Search would required a apiKey')
    }

    const params = {
        part: 'snippet',
        key: options.apiKey,
        q: options.term,
        maxResults: (options.items) ? options.items : 20,
        type: 'video',
    }

    axios.get(BASE_URL, { params })
        .then(response => {
            if (callback) { callback(response.data.items) }
        })
        .catch(error => console.error(error))

}