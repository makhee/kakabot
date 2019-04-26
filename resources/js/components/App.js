import React, { Component } from 'react';
import TodoInput from './TodoInput';
import TodoList from './TodoList';
import { Media, Jumbotron, Container, Image } from 'react-bootstrap';
// import logo from '../../images/IMG_0002.JPG';

import 'bootstrap/dist/css/bootstrap.min.css';
import uuid from 'uuid';

class App extends Component {
  state = {
    items: [],
    id: uuid(),
    item: '',
    editItem: false
  };

  handleChange = (e) => {
    this.setState({
      item: e.target.value
    });
  };

  handleSubmit = (e) => {
    e.preventDefault();

    if (this.state.item === '') {
      alert('추가할 내용을 입력해주세요.');
      return false;
    }

    const newItem = {
      id: this.state.id,
      title: this.state.item
    }

    const updateItems = [...this.state.items, newItem];

    this.setState({
      items: updateItems,
      item: '',
      id: uuid(),
      editItem: false
    });
  };

  clearList = () => {
    this.setState({
      items: []
    })
  };

  handleDelete = (id) => {
    const filteredItems = this.state.items.filter(item => item.id !== id)
    this.setState({
      items: filteredItems
    })
  };

  handleEdit = (id) => {
    const filteredItems = this.state.items.filter(item => item.id !== id)
    const selectItem = this.state.items.find(item => item.id === id)

    this.setState({
      items: filteredItems,
      item: selectItem.title,
      editItem: true,
      id: id
    })
  }

  render() {
    return (
      <div className='container'>
        <div className='row'>
          <div className='mx-auto col-md-5 mt-4'>
            <Jumbotron 
              fluid 
              className='mb-0'
              style={{borderWidth: '.2rem .2rem 0', borderRadius: '8px 8px 0 0'}}>
              <Container>
                <Media>
                  {/* <Image
                    src={logo}
                    width={100}
                    height={100}
                    className='mr-3'
                    alt='makhee_logo'
                    roundedCircle /> */}
                  <Media.Body>
                    <h1>TODO LIST</h1>
                    <p>
                      React를 이용한 TODO LIST 실습입니다. <br/>
                      MAKHEE
                    </p>
                  </Media.Body>
                </Media>
              </Container>
            </Jumbotron>
            <TodoInput
              item={this.state.item}
              items={this.state.items}
              handleChange={this.handleChange}
              handleSubmit={this.handleSubmit}
              editItem={this.state.editItem} />
            <TodoList
              items={this.state.items}
              clearList={this.clearList}
              handleDelete={this.handleDelete}
              handleEdit={this.handleEdit} />
          </div>
        </div>
      </div>
    );
  }
}

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}

// export default App;