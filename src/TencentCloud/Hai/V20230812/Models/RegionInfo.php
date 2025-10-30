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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域列表
 *
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getRegionName() 获取地域名称
 * @method void setRegionName(string $RegionName) 设置地域名称
 * @method string getRegionState() 获取地域是否可用状态
AVAILABLE：可用

 * @method void setRegionState(string $RegionState) 设置地域是否可用状态
AVAILABLE：可用

 * @method string getScholarRocketSupportState() 获取学术加速是否支持：
NO_NEED_SUPPORT表示不需支持；NOT_SUPPORT_YET表示暂未支持；ALREADY_SUPPORT表示已经支持。
 * @method void setScholarRocketSupportState(string $ScholarRocketSupportState) 设置学术加速是否支持：
NO_NEED_SUPPORT表示不需支持；NOT_SUPPORT_YET表示暂未支持；ALREADY_SUPPORT表示已经支持。
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 地域名称
     */
    public $RegionName;

    /**
     * @var string 地域是否可用状态
AVAILABLE：可用

     */
    public $RegionState;

    /**
     * @var string 学术加速是否支持：
NO_NEED_SUPPORT表示不需支持；NOT_SUPPORT_YET表示暂未支持；ALREADY_SUPPORT表示已经支持。
     */
    public $ScholarRocketSupportState;

    /**
     * @param string $Region 地域
     * @param string $RegionName 地域名称
     * @param string $RegionState 地域是否可用状态
AVAILABLE：可用

     * @param string $ScholarRocketSupportState 学术加速是否支持：
NO_NEED_SUPPORT表示不需支持；NOT_SUPPORT_YET表示暂未支持；ALREADY_SUPPORT表示已经支持。
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

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionState",$param) and $param["RegionState"] !== null) {
            $this->RegionState = $param["RegionState"];
        }

        if (array_key_exists("ScholarRocketSupportState",$param) and $param["ScholarRocketSupportState"] !== null) {
            $this->ScholarRocketSupportState = $param["ScholarRocketSupportState"];
        }
    }
}
