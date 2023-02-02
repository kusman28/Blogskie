const BASE_URL = process.env.LOCAL_APP_URL
const api_posts = '/api/posts';

export function fetchPosts(params)
{
    return axios.get(api_posts,{ params })
    .then(res => res.data)
    .catch(err => {
        console.error(err); 
    })
}