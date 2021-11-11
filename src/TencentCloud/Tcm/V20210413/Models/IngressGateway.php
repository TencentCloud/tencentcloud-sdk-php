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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IngressGateway 实例信息
 *
 * @method string getName() 获取IngressGateway 实例名字
 * @method void setName(string $Name) 设置IngressGateway 实例名字
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method Service getService() 获取Service 配置
 * @method void setService(Service $Service) 设置Service 配置
 * @method WorkloadConfig getWorkload() 获取Workload 配置
 * @method void setWorkload(WorkloadConfig $Workload) 设置Workload 配置
 * @method LoadBalancer getLoadBalancer() 获取负载均衡配置，自动创建 CLB 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancer(LoadBalancer $LoadBalancer) 设置负载均衡配置，自动创建 CLB 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method IngressGatewayStatus getStatus() 获取IngressGateway 状态信息，只读
 * @method void setStatus(IngressGatewayStatus $Status) 设置IngressGateway 状态信息，只读
 * @method string getLoadBalancerId() 获取负载均衡实例ID，使用已有 CLB 时返回
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID，使用已有 CLB 时返回
 */
class IngressGateway extends AbstractModel
{
    /**
     * @var string IngressGateway 实例名字
     */
    public $Name;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var Service Service 配置
     */
    public $Service;

    /**
     * @var WorkloadConfig Workload 配置
     */
    public $Workload;

    /**
     * @var LoadBalancer 负载均衡配置，自动创建 CLB 时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancer;

    /**
     * @var IngressGatewayStatus IngressGateway 状态信息，只读
     */
    public $Status;

    /**
     * @var string 负载均衡实例ID，使用已有 CLB 时返回
     */
    public $LoadBalancerId;

    /**
     * @param string $Name IngressGateway 实例名字
     * @param string $Namespace 命名空间
     * @param string $ClusterId 集群 ID
     * @param Service $Service Service 配置
     * @param WorkloadConfig $Workload Workload 配置
     * @param LoadBalancer $LoadBalancer 负载均衡配置，自动创建 CLB 时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param IngressGatewayStatus $Status IngressGateway 状态信息，只读
     * @param string $LoadBalancerId 负载均衡实例ID，使用已有 CLB 时返回
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = new Service();
            $this->Service->deserialize($param["Service"]);
        }

        if (array_key_exists("Workload",$param) and $param["Workload"] !== null) {
            $this->Workload = new WorkloadConfig();
            $this->Workload->deserialize($param["Workload"]);
        }

        if (array_key_exists("LoadBalancer",$param) and $param["LoadBalancer"] !== null) {
            $this->LoadBalancer = new LoadBalancer();
            $this->LoadBalancer->deserialize($param["LoadBalancer"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new IngressGatewayStatus();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }
    }
}
