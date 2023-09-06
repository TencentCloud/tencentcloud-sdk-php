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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusRegions 响应结构体
 *
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 * @method integer getRegionId() 获取区域 ID
 * @method void setRegionId(integer $RegionId) 设置区域 ID
 * @method integer getRegionState() 获取区域状态( 0: 不可用；1: 可用)
 * @method void setRegionState(integer $RegionState) 设置区域状态( 0: 不可用；1: 可用)
 * @method string getRegionName() 获取区域名(中文)
 * @method void setRegionName(string $RegionName) 设置区域名(中文)
 * @method string getRegionShortName() 获取区域名(英文缩写)
 * @method void setRegionShortName(string $RegionShortName) 设置区域名(英文缩写)
 * @method string getArea() 获取区域所在大区名
 * @method void setArea(string $Area) 设置区域所在大区名
 * @method integer getRegionPayMode() 获取1-仅支持预付费，2-仅支持后付费，3-支持两种计费模式实例
 * @method void setRegionPayMode(integer $RegionPayMode) 设置1-仅支持预付费，2-仅支持后付费，3-支持两种计费模式实例
 */
class PrometheusRegionItem extends AbstractModel
{
    /**
     * @var string 区域
     */
    public $Region;

    /**
     * @var integer 区域 ID
     */
    public $RegionId;

    /**
     * @var integer 区域状态( 0: 不可用；1: 可用)
     */
    public $RegionState;

    /**
     * @var string 区域名(中文)
     */
    public $RegionName;

    /**
     * @var string 区域名(英文缩写)
     */
    public $RegionShortName;

    /**
     * @var string 区域所在大区名
     */
    public $Area;

    /**
     * @var integer 1-仅支持预付费，2-仅支持后付费，3-支持两种计费模式实例
     */
    public $RegionPayMode;

    /**
     * @param string $Region 区域
     * @param integer $RegionId 区域 ID
     * @param integer $RegionState 区域状态( 0: 不可用；1: 可用)
     * @param string $RegionName 区域名(中文)
     * @param string $RegionShortName 区域名(英文缩写)
     * @param string $Area 区域所在大区名
     * @param integer $RegionPayMode 1-仅支持预付费，2-仅支持后付费，3-支持两种计费模式实例
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

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionState",$param) and $param["RegionState"] !== null) {
            $this->RegionState = $param["RegionState"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionShortName",$param) and $param["RegionShortName"] !== null) {
            $this->RegionShortName = $param["RegionShortName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("RegionPayMode",$param) and $param["RegionPayMode"] !== null) {
            $this->RegionPayMode = $param["RegionPayMode"];
        }
    }
}
