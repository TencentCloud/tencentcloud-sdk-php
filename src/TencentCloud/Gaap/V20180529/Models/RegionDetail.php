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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 区域信息详情
 *
 * @method string getRegionId() 获取区域ID
 * @method void setRegionId(string $RegionId) 设置区域ID
 * @method string getRegionName() 获取区域英文名或中文名
 * @method void setRegionName(string $RegionName) 设置区域英文名或中文名
 * @method string getRegionArea() 获取机房所属大区
 * @method void setRegionArea(string $RegionArea) 设置机房所属大区
 * @method string getRegionAreaName() 获取机房所属大区名
 * @method void setRegionAreaName(string $RegionAreaName) 设置机房所属大区名
 * @method string getIDCType() 获取机房类型, dc表示DataCenter数据中心, ec表示EdgeComputing边缘节点
 * @method void setIDCType(string $IDCType) 设置机房类型, dc表示DataCenter数据中心, ec表示EdgeComputing边缘节点
 */
class RegionDetail extends AbstractModel
{
    /**
     * @var string 区域ID
     */
    public $RegionId;

    /**
     * @var string 区域英文名或中文名
     */
    public $RegionName;

    /**
     * @var string 机房所属大区
     */
    public $RegionArea;

    /**
     * @var string 机房所属大区名
     */
    public $RegionAreaName;

    /**
     * @var string 机房类型, dc表示DataCenter数据中心, ec表示EdgeComputing边缘节点
     */
    public $IDCType;

    /**
     * @param string $RegionId 区域ID
     * @param string $RegionName 区域英文名或中文名
     * @param string $RegionArea 机房所属大区
     * @param string $RegionAreaName 机房所属大区名
     * @param string $IDCType 机房类型, dc表示DataCenter数据中心, ec表示EdgeComputing边缘节点
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionArea",$param) and $param["RegionArea"] !== null) {
            $this->RegionArea = $param["RegionArea"];
        }

        if (array_key_exists("RegionAreaName",$param) and $param["RegionAreaName"] !== null) {
            $this->RegionAreaName = $param["RegionAreaName"];
        }

        if (array_key_exists("IDCType",$param) and $param["IDCType"] !== null) {
            $this->IDCType = $param["IDCType"];
        }
    }
}
