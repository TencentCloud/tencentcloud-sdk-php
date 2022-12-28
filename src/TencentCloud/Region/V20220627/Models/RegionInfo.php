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
namespace TencentCloud\Region\V20220627\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域信息
 *
 * @method string getRegion() 获取地域名称，例如，ap-guangzhou
 * @method void setRegion(string $Region) 设置地域名称，例如，ap-guangzhou
 * @method string getRegionName() 获取地域描述，例如，华南地区(广州)
 * @method void setRegionName(string $RegionName) 设置地域描述，例如，华南地区(广州)
 * @method string getRegionState() 获取地域是否可用状态
 * @method void setRegionState(string $RegionState) 设置地域是否可用状态
 * @method integer getRegionTypeMC() 获取控制台类型，api调用时默认null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionTypeMC(integer $RegionTypeMC) 设置控制台类型，api调用时默认null
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocationMC() 获取不同语言的地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocationMC(string $LocationMC) 设置不同语言的地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionNameMC() 获取控制台展示的地域描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionNameMC(string $RegionNameMC) 设置控制台展示的地域描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionIdMC() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionIdMC(string $RegionIdMC) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string 地域名称，例如，ap-guangzhou
     */
    public $Region;

    /**
     * @var string 地域描述，例如，华南地区(广州)
     */
    public $RegionName;

    /**
     * @var string 地域是否可用状态
     */
    public $RegionState;

    /**
     * @var integer 控制台类型，api调用时默认null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionTypeMC;

    /**
     * @var string 不同语言的地区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocationMC;

    /**
     * @var string 控制台展示的地域描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionNameMC;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionIdMC;

    /**
     * @param string $Region 地域名称，例如，ap-guangzhou
     * @param string $RegionName 地域描述，例如，华南地区(广州)
     * @param string $RegionState 地域是否可用状态
     * @param integer $RegionTypeMC 控制台类型，api调用时默认null
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocationMC 不同语言的地区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionNameMC 控制台展示的地域描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionIdMC 1
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("RegionTypeMC",$param) and $param["RegionTypeMC"] !== null) {
            $this->RegionTypeMC = $param["RegionTypeMC"];
        }

        if (array_key_exists("LocationMC",$param) and $param["LocationMC"] !== null) {
            $this->LocationMC = $param["LocationMC"];
        }

        if (array_key_exists("RegionNameMC",$param) and $param["RegionNameMC"] !== null) {
            $this->RegionNameMC = $param["RegionNameMC"];
        }

        if (array_key_exists("RegionIdMC",$param) and $param["RegionIdMC"] !== null) {
            $this->RegionIdMC = $param["RegionIdMC"];
        }
    }
}
