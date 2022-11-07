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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 采集器详细信息
 *
 * @method string getAgentId() 获取Agent ID
 * @method void setAgentId(string $AgentId) 设置Agent ID
 * @method string getAgentName() 获取Agent Name
 * @method void setAgentName(string $AgentName) 设置Agent Name
 * @method string getStatus() 获取Agent状态(running运行中，initializing 操作中，failed心跳异常)
 * @method void setStatus(string $Status) 设置Agent状态(running运行中，initializing 操作中，failed心跳异常)
 * @method string getStatusDesc() 获取Agent状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置Agent状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAgentType() 获取集群类型，1：TKE Agent，2：BOSS SDK，默认：1
 * @method void setAgentType(integer $AgentType) 设置集群类型，1：TKE Agent，2：BOSS SDK，默认：1
 * @method string getSource() 获取采集来源
 * @method void setSource(string $Source) 设置采集来源
 * @method string getVpcId() 获取VPC
 * @method void setVpcId(string $VpcId) 设置VPC
 * @method string getExecutorGroupId() 获取集成资源组Id
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置集成资源组Id
 * @method string getExecutorGroupName() 获取集成资源组名称
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置集成资源组名称
 * @method integer getTaskCount() 获取关联任务数
 * @method void setTaskCount(integer $TaskCount) 设置关联任务数
 */
class InLongAgentDetail extends AbstractModel
{
    /**
     * @var string Agent ID
     */
    public $AgentId;

    /**
     * @var string Agent Name
     */
    public $AgentName;

    /**
     * @var string Agent状态(running运行中，initializing 操作中，failed心跳异常)
     */
    public $Status;

    /**
     * @var string Agent状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var integer 集群类型，1：TKE Agent，2：BOSS SDK，默认：1
     */
    public $AgentType;

    /**
     * @var string 采集来源
     */
    public $Source;

    /**
     * @var string VPC
     */
    public $VpcId;

    /**
     * @var string 集成资源组Id
     */
    public $ExecutorGroupId;

    /**
     * @var string 集成资源组名称
     */
    public $ExecutorGroupName;

    /**
     * @var integer 关联任务数
     */
    public $TaskCount;

    /**
     * @param string $AgentId Agent ID
     * @param string $AgentName Agent Name
     * @param string $Status Agent状态(running运行中，initializing 操作中，failed心跳异常)
     * @param string $StatusDesc Agent状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AgentType 集群类型，1：TKE Agent，2：BOSS SDK，默认：1
     * @param string $Source 采集来源
     * @param string $VpcId VPC
     * @param string $ExecutorGroupId 集成资源组Id
     * @param string $ExecutorGroupName 集成资源组名称
     * @param integer $TaskCount 关联任务数
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            $this->AgentType = $param["AgentType"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }
    }
}
