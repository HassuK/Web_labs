<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Contentwarehouse;

class VideoFileMasteringDisplayMetadataCIE1931Coordinate extends \Google\Model
{
  /**
   * @var float
   */
  public $x;
  /**
   * @var float
   */
  public $y;

  /**
   * @param float
   */
  public function setX($x)
  {
    $this->x = $x;
  }
  /**
   * @return float
   */
  public function getX()
  {
    return $this->x;
  }
  /**
   * @param float
   */
  public function setY($y)
  {
    $this->y = $y;
  }
  /**
   * @return float
   */
  public function getY()
  {
    return $this->y;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VideoFileMasteringDisplayMetadataCIE1931Coordinate::class, 'Google_Service_Contentwarehouse_VideoFileMasteringDisplayMetadataCIE1931Coordinate');
