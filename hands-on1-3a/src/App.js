import logo from './logo.svg';
import './App.css';
import User from './component/User/User';
import Name from './component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';

function App() {
  const userInformation = {
    firstName: 'John Oswald',
    lastName: 'Yap',
    section: 'BSIT 3A',
    description: 'ill do my best to learn and understand things'

  }
  return (
    <div className="App">
      
      <Name firstName={userInformation.firstName} lastName={userInformation.lastName} description={userInformation.description} />
      <Section />
      <Description />
    </div>
  );
}

export default App;
