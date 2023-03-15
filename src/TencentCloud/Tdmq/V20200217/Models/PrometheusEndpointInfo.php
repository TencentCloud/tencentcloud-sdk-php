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
 * rabbitmq Prometheus信息
 *
 * @method string getPrometheusEndpointStatus() 获取Prometheus开关的状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrometheusEndpointStatus(string $PrometheusEndpointStatus) 设置Prometheus开关的状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpcPrometheusEndpoint() 获取prometheus信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcPrometheusEndpoint(array $VpcPrometheusEndpoint) 设置prometheus信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodePrometheusAddress() 获取节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodePrometheusAddress(array $NodePrometheusAddress) 设置节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method VpcEndpointInfo getVpcEndpointInfo() 获取vpc信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcEndpointInfo(VpcEndpointInfo $VpcEndpointInfo) 设置vpc信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusEndpointInfo extends AbstractModel
{
    /**
     * @var string Prometheus开关的状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrometheusEndpointStatus;

    /**
     * @var array prometheus信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcPrometheusEndpoint;

    /**
     * @var array 节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodePrometheusAddress;

    /**
     * @var VpcEndpointInfo vpc信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcEndpointInfo;

    /**
     * @param string $PrometheusEndpointStatus Prometheus开关的状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VpcPrometheusEndpoint prometheus信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodePrometheusAddress 节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param VpcEndpointInfo $VpcEndpointInfo vpc信息
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
        if (array_key_exists("PrometheusEndpointStatus",$param) and $param["PrometheusEndpointStatus"] !== null) {
            $this->PrometheusEndpointStatus = $param["PrometheusEndpointStatus"];
        }

        if (array_key_exists("VpcPrometheusEndpoint",$param) and $param["VpcPrometheusEndpoint"] !== null) {
            $this->VpcPrometheusEndpoint = $param["VpcPrometheusEndpoint"];
        }

        if (array_key_exists("NodePrometheusAddress",$param) and $param["NodePrometheusAddress"] !== null) {
            $this->NodePrometheusAddress = $param["NodePrometheusAddress"];
        }

        if (array_key_exists("VpcEndpointInfo",$param) and $param["VpcEndpointInfo"] !== null) {
            $this->VpcEndpointInfo = new VpcEndpointInfo();
            $this->VpcEndpointInfo->deserialize($param["VpcEndpointInfo"]);
        }
    }
}
