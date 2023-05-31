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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源包明细说明
 *
 * @method string getPackageRegion() 获取资源包使用地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageRegion(string $PackageRegion) 设置资源包使用地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageType() 获取资源包类型
CCU-计算资源包
DISK-存储资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageType(string $PackageType) 设置资源包类型
CCU-计算资源包
DISK-存储资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageVersion() 获取资源包版本
base-基础版本，common-通用版本，enterprise-企业版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageVersion(string $PackageVersion) 设置资源包版本
base-基础版本，common-通用版本，enterprise-企业版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMinPackageSpec() 获取当前版本资源包最小资源数，计算资源单位：个；存储资源：GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinPackageSpec(float $MinPackageSpec) 设置当前版本资源包最小资源数，计算资源单位：个；存储资源：GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMaxPackageSpec() 获取当前版本资源包最大资源数，计算资源单位：个；存储资源：GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxPackageSpec(float $MaxPackageSpec) 设置当前版本资源包最大资源数，计算资源单位：个；存储资源：GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireDay() 获取资源包有效期，单位:天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireDay(integer $ExpireDay) 设置资源包有效期，单位:天
注意：此字段可能返回 null，表示取不到有效值。
 */
class SalePackageSpec extends AbstractModel
{
    /**
     * @var string 资源包使用地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageRegion;

    /**
     * @var string 资源包类型
CCU-计算资源包
DISK-存储资源包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageType;

    /**
     * @var string 资源包版本
base-基础版本，common-通用版本，enterprise-企业版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageVersion;

    /**
     * @var float 当前版本资源包最小资源数，计算资源单位：个；存储资源：GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinPackageSpec;

    /**
     * @var float 当前版本资源包最大资源数，计算资源单位：个；存储资源：GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxPackageSpec;

    /**
     * @var integer 资源包有效期，单位:天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireDay;

    /**
     * @param string $PackageRegion 资源包使用地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageType 资源包类型
CCU-计算资源包
DISK-存储资源包
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageVersion 资源包版本
base-基础版本，common-通用版本，enterprise-企业版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MinPackageSpec 当前版本资源包最小资源数，计算资源单位：个；存储资源：GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MaxPackageSpec 当前版本资源包最大资源数，计算资源单位：个；存储资源：GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireDay 资源包有效期，单位:天
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
        if (array_key_exists("PackageRegion",$param) and $param["PackageRegion"] !== null) {
            $this->PackageRegion = $param["PackageRegion"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("MinPackageSpec",$param) and $param["MinPackageSpec"] !== null) {
            $this->MinPackageSpec = $param["MinPackageSpec"];
        }

        if (array_key_exists("MaxPackageSpec",$param) and $param["MaxPackageSpec"] !== null) {
            $this->MaxPackageSpec = $param["MaxPackageSpec"];
        }

        if (array_key_exists("ExpireDay",$param) and $param["ExpireDay"] !== null) {
            $this->ExpireDay = $param["ExpireDay"];
        }
    }
}
