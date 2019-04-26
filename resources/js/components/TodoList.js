import React, { Component } from 'react';
import TodoItem from './TodoItem';

export default class TodoList extends Component {
    render() {
        const { items, clearList, handleDelete, handleEdit } = this.props

        if (items.length === 0) {
            return false;
        }

        return (
            <ul className='card card-body mt-0'
                style={{borderColor: '#e9ecef', borderTopWidth: '0px', borderRadius: '0px 0px 8px 8px' }}
            >
                        <h3 className='text-capitalize text-center'>TODO</h3>
                {items.map(item => {
                            return (
                                <TodoItem
                                    key={item.id}
                                    title={item.title}
                                    handleDelete={() => handleDelete(item.id)}
                                    handleEdit={() => handleEdit(item.id)}
                                />
                            )
                        })}
                <button
                type='button'
                className='btn btn-danger btn-block text-capitalize mt-5'
                onClick={clearList}
            >
                전체 삭제
                </button>
            </ul >
        );
    }
}