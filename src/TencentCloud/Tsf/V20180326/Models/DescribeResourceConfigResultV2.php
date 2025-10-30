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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceConfig
 *
 * @method DescribeResourceConfigSts getSts() 获取STS参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSts(DescribeResourceConfigSts $Sts) 设置STS参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeResourceConfigLicense getLicense() 获取许可信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicense(DescribeResourceConfigLicense $License) 设置许可信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method GroupResourceConfig getGroup() 获取部署组相关的参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroup(GroupResourceConfig $Group) 设置部署组相关的参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceResourceConfig getInstance() 获取实例相关的参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstance(InstanceResourceConfig $Instance) 设置实例相关的参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeResourceConfigCluster getCluster() 获取Cluster相关配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCluster(DescribeResourceConfigCluster $Cluster) 设置Cluster相关配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method PackageConfig getPackage() 获取程序包相关配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackage(PackageConfig $Package) 设置程序包相关配置信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeResourceConfigResultV2 extends AbstractModel
{
    /**
     * @var DescribeResourceConfigSts STS参数配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sts;

    /**
     * @var DescribeResourceConfigLicense 许可信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $License;

    /**
     * @var GroupResourceConfig 部署组相关的参数配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Group;

    /**
     * @var InstanceResourceConfig 实例相关的参数配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Instance;

    /**
     * @var DescribeResourceConfigCluster Cluster相关配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cluster;

    /**
     * @var PackageConfig 程序包相关配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Package;

    /**
     * @param DescribeResourceConfigSts $Sts STS参数配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeResourceConfigLicense $License 许可信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param GroupResourceConfig $Group 部署组相关的参数配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceResourceConfig $Instance 实例相关的参数配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeResourceConfigCluster $Cluster Cluster相关配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param PackageConfig $Package 程序包相关配置信息
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
        if (array_key_exists("Sts",$param) and $param["Sts"] !== null) {
            $this->Sts = new DescribeResourceConfigSts();
            $this->Sts->deserialize($param["Sts"]);
        }

        if (array_key_exists("License",$param) and $param["License"] !== null) {
            $this->License = new DescribeResourceConfigLicense();
            $this->License->deserialize($param["License"]);
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = new GroupResourceConfig();
            $this->Group->deserialize($param["Group"]);
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = new InstanceResourceConfig();
            $this->Instance->deserialize($param["Instance"]);
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = new DescribeResourceConfigCluster();
            $this->Cluster->deserialize($param["Cluster"]);
        }

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = new PackageConfig();
            $this->Package->deserialize($param["Package"]);
        }
    }
}
