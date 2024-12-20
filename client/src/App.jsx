import { Car, Loader } from './components';
import { useEffect, useState } from 'react';
import './App.css';
import { Header } from './components/Header';
import { API_URL } from './config';

const App = () => {
  const [loading, setLoading] = useState(true);
  const [cars, setCars] = useState([]);

  const fetchCars = async () => {
    try {
      const res = await fetch(API_URL);
      const data = await res.json();
      setCars(data);
    } catch (e) {
      console.error(e.message);
    } finally {
      setLoading(false);
    }
  }

  useEffect(() => {
    setLoading(true);
    setTimeout(fetchCars, 1500);
  }, [])


  return <div className="container">
    <Header />

    {loading && <Loader />}

    <div className="grid">
      {cars.map((car) => (
        <Car key={car.id} {...car} />
      ))}
    </div>
  </div>

}

export default App;
