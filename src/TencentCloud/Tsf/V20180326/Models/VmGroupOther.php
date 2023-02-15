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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 虚拟机部署组其他字段
 *
 * @method string getGroupId() 获取部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageId() 获取程序包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageId(string $PackageId) 设置程序包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取程序包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置程序包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageVersion() 获取程序包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageVersion(string $PackageVersion) 设置程序包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCount() 获取部署组实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCount(integer $InstanceCount) 设置部署组实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunInstanceCount() 获取部署组运行中实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunInstanceCount(integer $RunInstanceCount) 设置部署组运行中实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffInstanceCount() 获取部署组中停止实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffInstanceCount(integer $OffInstanceCount) 设置部署组中停止实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupStatus() 获取部署组状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupStatus(string $GroupStatus) 设置部署组状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsNotEqualServiceConfig() 获取服务配置信息是否匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNotEqualServiceConfig(boolean $IsNotEqualServiceConfig) 设置服务配置信息是否匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheckSettings getHealthCheckSettings() 获取HealthCheckSettings
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置HealthCheckSettings
注意：此字段可能返回 null，表示取不到有效值。
 */
class VmGroupOther extends AbstractModel
{
    /**
     * @var string 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 程序包ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageId;

    /**
     * @var string 程序包名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string 程序包版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageVersion;

    /**
     * @var integer 部署组实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCount;

    /**
     * @var integer 部署组运行中实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunInstanceCount;

    /**
     * @var integer 部署组中停止实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffInstanceCount;

    /**
     * @var string 部署组状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupStatus;

    /**
     * @var boolean 服务配置信息是否匹配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNotEqualServiceConfig;

    /**
     * @var HealthCheckSettings HealthCheckSettings
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckSettings;

    /**
     * @param string $GroupId 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageId 程序包ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName 程序包名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageVersion 程序包版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCount 部署组实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunInstanceCount 部署组运行中实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OffInstanceCount 部署组中停止实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupStatus 部署组状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsNotEqualServiceConfig 服务配置信息是否匹配
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheckSettings $HealthCheckSettings HealthCheckSettings
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("RunInstanceCount",$param) and $param["RunInstanceCount"] !== null) {
            $this->RunInstanceCount = $param["RunInstanceCount"];
        }

        if (array_key_exists("OffInstanceCount",$param) and $param["OffInstanceCount"] !== null) {
            $this->OffInstanceCount = $param["OffInstanceCount"];
        }

        if (array_key_exists("GroupStatus",$param) and $param["GroupStatus"] !== null) {
            $this->GroupStatus = $param["GroupStatus"];
        }

        if (array_key_exists("IsNotEqualServiceConfig",$param) and $param["IsNotEqualServiceConfig"] !== null) {
            $this->IsNotEqualServiceConfig = $param["IsNotEqualServiceConfig"];
        }

        if (array_key_exists("HealthCheckSettings",$param) and $param["HealthCheckSettings"] !== null) {
            $this->HealthCheckSettings = new HealthCheckSettings();
            $this->HealthCheckSettings->deserialize($param["HealthCheckSettings"]);
        }
    }
}
