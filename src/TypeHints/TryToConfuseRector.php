<?php declare (strict_types=1);

namespace Rector\RectorTraining\TypeHints;

final class TryToConfuseRector
{
	/**
	 * @return int
	 */
	public function returnString(): float
	{
		return 5.4;
	}
}
