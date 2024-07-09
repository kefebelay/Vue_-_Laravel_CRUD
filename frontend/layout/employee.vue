<script>
import axios from 'axios';

export default {
  data() {
    return {
      employees: []
    };
  },
  mounted() {
    axios.get('http://localhost:8000/api/employee')
      .then(response => {
        this.employees = response.data;
        console.log(response.data);
      })
      .catch(error => {
        console.error(error);
      });
  }
}
</script>

<template>
  <div>
    <template>
      <div>
        <h1>Employee Table</h1>
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>phone</th>
              <th>address</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="employee in employees" :key="employee.id">
              <td>{{ employee.name }}</td>
              <td>{{ employee.phone }}</td>
              <td>{{ employee.address }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </template>
    
    <employee />
  </div>
</template>
