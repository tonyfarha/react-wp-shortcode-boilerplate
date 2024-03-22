import { render } from '@wordpress/element';
import { Counter } from './components';
import './style.scss';

const App = () => (
    <>
        <Counter />
    </>
);

render(<App />, document.getElementById('dbt-react-wp-shortcode-app'));
