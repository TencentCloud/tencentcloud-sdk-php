<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大屏可视化安全播报内容
 *
 * @method string getTitle() 获取播报文章标题
 * @method void setTitle(string $Title) 设置播报文章标题
 * @method integer getLevel() 获取播报文章危险程度  0：无， 1：严重， 2: 高危， 3:中危， 4: 低危
 * @method void setLevel(integer $Level) 设置播报文章危险程度  0：无， 1：严重， 2: 高危， 3:中危， 4: 低危
 * @method string getTime() 获取发布时间
 * @method void setTime(string $Time) 设置发布时间
 * @method integer getId() 获取文章ID
 * @method void setId(integer $Id) 设置文章ID
 */
class ScreenBroadcasts extends AbstractModel
{
    /**
     * @var string 播报文章标题
     */
    public $Title;

    /**
     * @var integer 播报文章危险程度  0：无， 1：严重， 2: 高危， 3:中危， 4: 低危
     */
    public $Level;

    /**
     * @var string 发布时间
     */
    public $Time;

    /**
     * @var integer 文章ID
     */
    public $Id;

    /**
     * @param string $Title 播报文章标题
     * @param integer $Level 播报文章危险程度  0：无， 1：严重， 2: 高危， 3:中危， 4: 低危
     * @param string $Time 发布时间
     * @param integer $Id 文章ID
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
