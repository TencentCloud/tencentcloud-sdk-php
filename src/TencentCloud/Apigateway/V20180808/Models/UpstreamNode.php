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
 * 后端通道后端节点元数据
 *
 * @method string getHost() 获取IP或域名
 * @method void setHost(string $Host) 设置IP或域名
 * @method integer getPort() 获取端口[0, 65535]
 * @method void setPort(integer $Port) 设置端口[0, 65535]
 * @method integer getWeight() 获取权重[0, 100], 0为禁用
 * @method void setWeight(integer $Weight) 设置权重[0, 100], 0为禁用
 * @method string getVmInstanceId() 获取CVM实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVmInstanceId(string $VmInstanceId) 设置CVM实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取染色标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置染色标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHealthy() 获取节点健康状态，创建、编辑时不需要传该参数。OFF：关闭，HEALTHY：健康，UNHEALTHY：异常，NO_DATA：数据未上报。目前只支持VPC通道。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthy(string $Healthy) 设置节点健康状态，创建、编辑时不需要传该参数。OFF：关闭，HEALTHY：健康，UNHEALTHY：异常，NO_DATA：数据未上报。目前只支持VPC通道。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取K8S容器服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置K8S容器服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameSpace() 获取K8S命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameSpace(string $NameSpace) 设置K8S命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取TKE集群的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置TKE集群的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取Node的来源，取值范围：K8S
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置Node的来源，取值范围：K8S
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqueServiceName() 获取API网关内部记录唯一的服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqueServiceName(string $UniqueServiceName) 设置API网关内部记录唯一的服务名字
注意：此字段可能返回 null，表示取不到有效值。
 */
class UpstreamNode extends AbstractModel
{
    /**
     * @var string IP或域名
     */
    public $Host;

    /**
     * @var integer 端口[0, 65535]
     */
    public $Port;

    /**
     * @var integer 权重[0, 100], 0为禁用
     */
    public $Weight;

    /**
     * @var string CVM实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VmInstanceId;

    /**
     * @var array 染色标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 节点健康状态，创建、编辑时不需要传该参数。OFF：关闭，HEALTHY：健康，UNHEALTHY：异常，NO_DATA：数据未上报。目前只支持VPC通道。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Healthy;

    /**
     * @var string K8S容器服务名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string K8S命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameSpace;

    /**
     * @var string TKE集群的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string Node的来源，取值范围：K8S
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string API网关内部记录唯一的服务名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqueServiceName;

    /**
     * @param string $Host IP或域名
     * @param integer $Port 端口[0, 65535]
     * @param integer $Weight 权重[0, 100], 0为禁用
     * @param string $VmInstanceId CVM实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 染色标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Healthy 节点健康状态，创建、编辑时不需要传该参数。OFF：关闭，HEALTHY：健康，UNHEALTHY：异常，NO_DATA：数据未上报。目前只支持VPC通道。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName K8S容器服务名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameSpace K8S命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId TKE集群的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source Node的来源，取值范围：K8S
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqueServiceName API网关内部记录唯一的服务名字
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("VmInstanceId",$param) and $param["VmInstanceId"] !== null) {
            $this->VmInstanceId = $param["VmInstanceId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("UniqueServiceName",$param) and $param["UniqueServiceName"] !== null) {
            $this->UniqueServiceName = $param["UniqueServiceName"];
        }
    }
}
