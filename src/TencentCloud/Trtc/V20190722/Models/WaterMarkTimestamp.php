<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时间戳水印数据结构
 *
 * @method integer getPos() 获取时间戳的位置，取值范围0-6，分别代表上左，上右，下左，下右，上居中，下居中，居中
 * @method void setPos(integer $Pos) 设置时间戳的位置，取值范围0-6，分别代表上左，上右，下左，下右，上居中，下居中，居中
 * @method integer getTimeZone() 获取显示时间戳的时区，默认东八区
 * @method void setTimeZone(integer $TimeZone) 设置显示时间戳的时区，默认东八区
 */
class WaterMarkTimestamp extends AbstractModel
{
    /**
     * @var integer 时间戳的位置，取值范围0-6，分别代表上左，上右，下左，下右，上居中，下居中，居中
     */
    public $Pos;

    /**
     * @var integer 显示时间戳的时区，默认东八区
     */
    public $TimeZone;

    /**
     * @param integer $Pos 时间戳的位置，取值范围0-6，分别代表上左，上右，下左，下右，上居中，下居中，居中
     * @param integer $TimeZone 显示时间戳的时区，默认东八区
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
        if (array_key_exists("Pos",$param) and $param["Pos"] !== null) {
            $this->Pos = $param["Pos"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
