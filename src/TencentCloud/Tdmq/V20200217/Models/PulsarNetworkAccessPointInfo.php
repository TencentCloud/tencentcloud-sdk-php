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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pulsar 网络接入点信息
 *
 * @method string getVpcId() 获取vpc的id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc的id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpoint() 获取接入地址
 * @method void setEndpoint(string $Endpoint) 设置接入地址
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method integer getRouteType() 获取接入点类型：
0：支撑网接入点 
1：VPC接入点 
2：公网接入点
 * @method void setRouteType(integer $RouteType) 设置接入点类型：
0：支撑网接入点 
1：VPC接入点 
2：公网接入点
 */
class PulsarNetworkAccessPointInfo extends AbstractModel
{
    /**
     * @var string vpc的id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 接入地址
     */
    public $Endpoint;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var integer 接入点类型：
0：支撑网接入点 
1：VPC接入点 
2：公网接入点
     */
    public $RouteType;

    /**
     * @param string $VpcId vpc的id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网id，支撑网和公网接入点，该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Endpoint 接入地址
     * @param string $InstanceId 实例id
     * @param integer $RouteType 接入点类型：
0：支撑网接入点 
1：VPC接入点 
2：公网接入点
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }
    }
}
