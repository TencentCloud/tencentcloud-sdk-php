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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可使用的地域信息
 *
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method array getAvailableZones() 获取可用区信息
 * @method void setAvailableZones(array $AvailableZones) 设置可用区信息
 */
class AvailableRegion extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var array 可用区信息
     */
    public $AvailableZones;

    /**
     * @param string $Region 地域
     * @param array $AvailableZones 可用区信息
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AvailableZones",$param) and $param["AvailableZones"] !== null) {
            $this->AvailableZones = $param["AvailableZones"];
        }
    }
}
