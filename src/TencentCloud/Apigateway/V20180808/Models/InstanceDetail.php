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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独享实例详情
 *
 * @method string getInstanceId() 获取独享实例唯一id
 * @method void setInstanceId(string $InstanceId) 设置独享实例唯一id
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getInstanceName() 获取独享实例名字
 * @method void setInstanceName(string $InstanceName) 设置独享实例名字
 * @method string getInstanceDescription() 获取独享实例描述
 * @method void setInstanceDescription(string $InstanceDescription) 设置独享实例描述
 * @method string getInstanceChargeType() 获取独享实例计费类型
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置独享实例计费类型
 * @method string getInstanceState() 获取独享实例状态
 * @method void setInstanceState(string $InstanceState) 设置独享实例状态
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取独享实例预付费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置独享实例预付费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取独享实例类型
 * @method void setInstanceType(string $InstanceType) 设置独享实例类型
 * @method NetworkConfig getNetworkConfig() 获取独享实例网络类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkConfig(NetworkConfig $NetworkConfig) 设置独享实例网络类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method VpcConfig getVpcConfig() 获取独享实例vpc配置
 * @method void setVpcConfig(VpcConfig $VpcConfig) 设置独享实例vpc配置
 * @method array getParameters() 获取独享实例参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParameters(array $Parameters) 设置独享实例参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolationStartedTime() 获取独享实例隔离时间
 * @method void setIsolationStartedTime(string $IsolationStartedTime) 设置独享实例隔离时间
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getZones() 获取可用区列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZones(string $Zones) 设置可用区列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceDetail extends AbstractModel
{
    /**
     * @var string 独享实例唯一id
     */
    public $InstanceId;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 独享实例名字
     */
    public $InstanceName;

    /**
     * @var string 独享实例描述
     */
    public $InstanceDescription;

    /**
     * @var string 独享实例计费类型
     */
    public $InstanceChargeType;

    /**
     * @var string 独享实例状态
     */
    public $InstanceState;

    /**
     * @var InstanceChargePrepaid 独享实例预付费类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceChargePrepaid;

    /**
     * @var string 独享实例类型
     */
    public $InstanceType;

    /**
     * @var NetworkConfig 独享实例网络类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkConfig;

    /**
     * @var VpcConfig 独享实例vpc配置
     */
    public $VpcConfig;

    /**
     * @var array 独享实例参数配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Parameters;

    /**
     * @var string 独享实例隔离时间
     */
    public $IsolationStartedTime;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 可用区列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zones;

    /**
     * @param string $InstanceId 独享实例唯一id
     * @param string $Zone 可用区
     * @param string $InstanceName 独享实例名字
     * @param string $InstanceDescription 独享实例描述
     * @param string $InstanceChargeType 独享实例计费类型
     * @param string $InstanceState 独享实例状态
     * @param InstanceChargePrepaid $InstanceChargePrepaid 独享实例预付费类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 独享实例类型
     * @param NetworkConfig $NetworkConfig 独享实例网络类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param VpcConfig $VpcConfig 独享实例vpc配置
     * @param array $Parameters 独享实例参数配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolationStartedTime 独享实例隔离时间
     * @param string $CreatedTime 创建时间
     * @param string $Zones 可用区列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceDescription",$param) and $param["InstanceDescription"] !== null) {
            $this->InstanceDescription = $param["InstanceDescription"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("NetworkConfig",$param) and $param["NetworkConfig"] !== null) {
            $this->NetworkConfig = new NetworkConfig();
            $this->NetworkConfig->deserialize($param["NetworkConfig"]);
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new VpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new ParameterInfo();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }

        if (array_key_exists("IsolationStartedTime",$param) and $param["IsolationStartedTime"] !== null) {
            $this->IsolationStartedTime = $param["IsolationStartedTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }
    }
}
