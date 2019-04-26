import React, { Component } from 'react';

export default class TodoInput extends Component {
    render() {
        const { item, items, handleChange, handleSubmit, editItem } = this.props
        let customStyles = items.length !== 0 ? { borderRadius: '0', borderBottomWidth: '0', borderColor: '#e9ecef' } : { borderRadius: '0px 0px 8px 8px', borderColor: '#e9ecef' }
        return (
            <div className='card card-body' style={customStyles}>
                <form onSubmit={handleSubmit}>
                    <div className='input-group'>
                        <div className='input-group-prepend'>
                            <div className='input-group-text bg-primary text-white'>
                                <i className='fas fa-book'></i>
                            </div>
                        </div>
                        <input
                            type='text'
                            className='form-control text-capitalize'
                            placeholder='입력해 주세요.'
                            value={item}
                            onChange={handleChange} />
                    </div>
                    <button
                        type='submit'
                        className={editItem ? 'btn btn-block btn-success mt-3' : 'btn btn-block btn-primary mt-3'}>
                        {editItem ? '수정' : '추가'}
                    </button>
                </form>
            </div>
        );
    }
}