import axios from 'axios';

export default {
  methods: {
    async fetchData() {
      try {
        const response = await axios.get('https://127.0.0.1:8000/api');
        console.log(response.data);
      } catch (error) {
        console.error(error);
      }
    }
  }
}