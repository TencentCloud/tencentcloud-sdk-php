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
 * Egress配置
 *
 * @method string getName() 获取Egress名称
 * @method void setName(string $Name) 设置Egress名称
 * @method string getNamespace() 获取所在的Namespace
 * @method void setNamespace(string $Namespace) 设置所在的Namespace
 * @method WorkloadConfig getWorkload() 获取工作负载配置
 * @method void setWorkload(WorkloadConfig $Workload) 设置工作负载配置
 * @method EgressGatewayStatus getStatus() 获取工作负载的状态
 * @method void setStatus(EgressGatewayStatus $Status) 设置工作负载的状态
 */
class EgressGateway extends AbstractModel
{
    /**
     * @var string Egress名称
     */
    public $Name;

    /**
     * @var string 所在的Namespace
     */
    public $Namespace;

    /**
     * @var WorkloadConfig 工作负载配置
     */
    public $Workload;

    /**
     * @var EgressGatewayStatus 工作负载的状态
     */
    public $Status;

    /**
     * @param string $Name Egress名称
     * @param string $Namespace 所在的Namespace
     * @param WorkloadConfig $Workload 工作负载配置
     * @param EgressGatewayStatus $Status 工作负载的状态
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

        if (array_key_exists("Workload",$param) and $param["Workload"] !== null) {
            $this->Workload = new WorkloadConfig();
            $this->Workload->deserialize($param["Workload"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new EgressGatewayStatus();
            $this->Status->deserialize($param["Status"]);
        }
    }
}
