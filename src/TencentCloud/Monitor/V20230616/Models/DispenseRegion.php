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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转发地域信息
 *
 * @method string getRegion() 获取地域缩写
 * @method void setRegion(string $Region) 设置地域缩写
 * @method string getRegionCnName() 获取地域中文名
 * @method void setRegionCnName(string $RegionCnName) 设置地域中文名
 * @method string getRegionEnName() 获取地域英文名
 * @method void setRegionEnName(string $RegionEnName) 设置地域英文名
 * @method integer getRuleNumber() 获取规则数量
 * @method void setRuleNumber(integer $RuleNumber) 设置规则数量
 */
class DispenseRegion extends AbstractModel
{
    /**
     * @var string 地域缩写
     */
    public $Region;

    /**
     * @var string 地域中文名
     */
    public $RegionCnName;

    /**
     * @var string 地域英文名
     */
    public $RegionEnName;

    /**
     * @var integer 规则数量
     */
    public $RuleNumber;

    /**
     * @param string $Region 地域缩写
     * @param string $RegionCnName 地域中文名
     * @param string $RegionEnName 地域英文名
     * @param integer $RuleNumber 规则数量
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

        if (array_key_exists("RegionCnName",$param) and $param["RegionCnName"] !== null) {
            $this->RegionCnName = $param["RegionCnName"];
        }

        if (array_key_exists("RegionEnName",$param) and $param["RegionEnName"] !== null) {
            $this->RegionEnName = $param["RegionEnName"];
        }

        if (array_key_exists("RuleNumber",$param) and $param["RuleNumber"] !== null) {
            $this->RuleNumber = $param["RuleNumber"];
        }
    }
}
