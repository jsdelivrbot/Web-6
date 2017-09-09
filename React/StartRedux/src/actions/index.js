export function selectBook(book) {
    // selectBook - action creator (so it should return object with type and payload)
    return {
        type: 'BOOK_SELECTED',
        payload: book
    }
}