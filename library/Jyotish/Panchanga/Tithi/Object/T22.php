<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Tithi\Object;

use Jyotish\Tattva\Jiva\Deva;
use Jyotish\Panchanga\Karana\Karana;

/**
 * Class of tithi 22.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class T22 extends \Jyotish\Panchanga\Tithi\Tithi {
	/**
	 * Devanagari number 7 in transliteration.
	 * 
	 * @var array
	 * @see Jyotish\Alphabet\Devanagari
	 */
	protected $tithiTranslit = array(
		 'd7'
	);
	
	/**
	 * Deva of tithi.
	 * 
	 * @var string
	 */
	protected $tithiDeva = Deva::DEVA_SURYA;
	
	/**
	 * Paksha of tithi.
	 * 
	 * @var string
	 */
	protected $tithiPaksha = self::PAKSHA_KRISHNA;
	
	/**
	 * Type of tithi.
	 * 
	 * @var string
	 */
	protected $tithiType = self::TYPE_BHADRA;
	
	/**
	 * Karana of tithi.
	 * 
	 * @var string
	 */
	protected $tithiKarana = array(
		1 => Karana::NAME_VISHTI,
		2 => Karana::NAME_BAVA
	);

	public function __construct($options) {
		return $this;
	}

}