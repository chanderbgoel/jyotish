<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Yoga\Object;

use Jyotish\Tattva\Jiva\Dwipada\Deva;

/**
 * Class of yoga 13.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class Y13 extends YogaObject {
	/**
	 * Yoga key
	 * 
	 * @var int
	 */
	protected $yogaKey = 13;
	
	protected $yogaDeva = Deva::DEVA_VISHNU_HARI;

	public function __construct($options) {
		parent::__construct($options);
	}

}