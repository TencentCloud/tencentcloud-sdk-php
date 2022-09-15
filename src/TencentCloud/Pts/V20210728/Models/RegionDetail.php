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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域
 *
 * @method string getRegion() 获取地域代码
 * @method void setRegion(string $Region) 设置地域代码
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method string getArea() 获取地域所在的地区
 * @method void setArea(string $Area) 设置地域所在的地区
 * @method string getRegionName() 获取地域名称
 * @method void setRegionName(string $RegionName) 设置地域名称
 * @method integer getRegionState() 获取地域状态
 * @method void setRegionState(integer $RegionState) 设置地域状态
 * @method string getRegionShortName() 获取地域简称
 * @method void setRegionShortName(string $RegionShortName) 设置地域简称
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 */
class RegionDetail extends AbstractModel
{
    /**
     * @var string 地域代码
     */
    public $Region;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var string 地域所在的地区
     */
    public $Area;

    /**
     * @var string 地域名称
     */
    public $RegionName;

    /**
     * @var integer 地域状态
     */
    public $RegionState;

    /**
     * @var string 地域简称
     */
    public $RegionShortName;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @param string $Region 地域代码
     * @param integer $RegionId 地域ID
     * @param string $Area 地域所在的地区
     * @param string $RegionName 地域名称
     * @param integer $RegionState 地域状态
     * @param string $RegionShortName 地域简称
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionState",$param) and $param["RegionState"] !== null) {
            $this->RegionState = $param["RegionState"];
        }

        if (array_key_exists("RegionShortName",$param) and $param["RegionShortName"] !== null) {
            $this->RegionShortName = $param["RegionShortName"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
