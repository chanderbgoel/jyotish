<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Tithi\Object;

use Jyotish\Panchanga\Tithi\Tithi;
use Jyotish\Tattva\Jiva\Dwipada\Deva;
use Jyotish\Panchanga\Karana\Karana;

/**
 * Class of tithi 21.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class T21 extends TithiObject {
	/**
	 * Tithi key
	 * 
	 * @var int
	 */
	protected $tithiKey = 21;
	
	/**
	 * Devanagari number 6 in transliteration.
	 * 
	 * @var array
	 * @see Jyotish\Alphabet\Devanagari
	 */
	protected $tithiTranslit = array(
		 'd6'
	);
	
	/**
	 * Deva of tithi.
	 * 
	 * @var string
	 */
	protected $tithiDeva = Deva::DEVA_KARTTIKEYA_SKANDA;
	
	/**
	 * Paksha of tithi.
	 * 
	 * @var string
	 */
	protected $tithiPaksha = Tithi::PAKSHA_KRISHNA;
	
	/**
	 * Type of tithi.
	 * 
	 * @var string
	 */
	protected $tithiType = Tithi::TYPE_NANDA;
	
	/**
	 * Karana of tithi.
	 * 
	 * @var string
	 */
	protected $tithiKarana = array(
		1 => Karana::NAME_GARA,
		2 => Karana::NAME_VANIJA
	);

	public function __construct($options) {
		parent::__construct($options);
	}

}