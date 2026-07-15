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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 支持的地域名
 *
 * @method string getRegion() 获取地域英文名
 * @method void setRegion(string $Region) 设置地域英文名
 * @method string getRegionName() 获取地域中文名
 * @method void setRegionName(string $RegionName) 设置地域中文名
 */
class RegionsData extends AbstractModel
{
    /**
     * @var string 地域英文名
     */
    public $Region;

    /**
     * @var string 地域中文名
     */
    public $RegionName;

    /**
     * @param string $Region 地域英文名
     * @param string $RegionName 地域中文名
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
    }
}
