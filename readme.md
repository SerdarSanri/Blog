# Simple Blog Bundle

Work in progress

## Installation

### Bundle Registration

Add the following to your **application/bundles.php** file:


    'blog' => array(
        'handles' => 'blog',
        'autoloads' => array(
            'directories' => array(
                '(:bundle)/models'
            )
        )
    ),