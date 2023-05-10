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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组学平台环境详情。
 *
 * @method string getEnvironmentId() 获取环境ID。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID。
 * @method string getName() 获取环境名称。
 * @method void setName(string $Name) 设置环境名称。
 * @method string getDescription() 获取环境描述信息。
 * @method void setDescription(string $Description) 设置环境描述信息。
 * @method string getRegion() 获取环境地域。
 * @method void setRegion(string $Region) 设置环境地域。
 * @method string getType() 获取环境类型，取值范围：
- KUBERNETES：Kubernetes容器集群
- HPC：HPC高性能计算集群
 * @method void setType(string $Type) 设置环境类型，取值范围：
- KUBERNETES：Kubernetes容器集群
- HPC：HPC高性能计算集群
 * @method string getStatus() 获取环境状态，取值范围：
- INITIALIZING：创建中
- INITIALIZATION_ERROR：创建失败
- RUNNING：运行中
- ERROR：异常
- DELETING：正在删除
- DELETE_ERROR：删除失败
 * @method void setStatus(string $Status) 设置环境状态，取值范围：
- INITIALIZING：创建中
- INITIALIZATION_ERROR：创建失败
- RUNNING：运行中
- ERROR：异常
- DELETING：正在删除
- DELETE_ERROR：删除失败
 * @method boolean getAvailable() 获取环境是否可用。环境需要可用才能投递计算任务。
 * @method void setAvailable(boolean $Available) 设置环境是否可用。环境需要可用才能投递计算任务。
 * @method string getMessage() 获取环境信息。
 * @method void setMessage(string $Message) 设置环境信息。
 * @method ResourceIds getResourceIds() 获取云资源ID。
 * @method void setResourceIds(ResourceIds $ResourceIds) 设置云资源ID。
 * @method string getLastWorkflowUuid() 获取上个工作流UUID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastWorkflowUuid(string $LastWorkflowUuid) 设置上个工作流UUID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(string $CreationTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Environment extends AbstractModel
{
    /**
     * @var string 环境ID。
     */
    public $EnvironmentId;

    /**
     * @var string 环境名称。
     */
    public $Name;

    /**
     * @var string 环境描述信息。
     */
    public $Description;

    /**
     * @var string 环境地域。
     */
    public $Region;

    /**
     * @var string 环境类型，取值范围：
- KUBERNETES：Kubernetes容器集群
- HPC：HPC高性能计算集群
     */
    public $Type;

    /**
     * @var string 环境状态，取值范围：
- INITIALIZING：创建中
- INITIALIZATION_ERROR：创建失败
- RUNNING：运行中
- ERROR：异常
- DELETING：正在删除
- DELETE_ERROR：删除失败
     */
    public $Status;

    /**
     * @var boolean 环境是否可用。环境需要可用才能投递计算任务。
     */
    public $Available;

    /**
     * @var string 环境信息。
     */
    public $Message;

    /**
     * @var ResourceIds 云资源ID。
     */
    public $ResourceIds;

    /**
     * @var string 上个工作流UUID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastWorkflowUuid;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTime;

    /**
     * @param string $EnvironmentId 环境ID。
     * @param string $Name 环境名称。
     * @param string $Description 环境描述信息。
     * @param string $Region 环境地域。
     * @param string $Type 环境类型，取值范围：
- KUBERNETES：Kubernetes容器集群
- HPC：HPC高性能计算集群
     * @param string $Status 环境状态，取值范围：
- INITIALIZING：创建中
- INITIALIZATION_ERROR：创建失败
- RUNNING：运行中
- ERROR：异常
- DELETING：正在删除
- DELETE_ERROR：删除失败
     * @param boolean $Available 环境是否可用。环境需要可用才能投递计算任务。
     * @param string $Message 环境信息。
     * @param ResourceIds $ResourceIds 云资源ID。
     * @param string $LastWorkflowUuid 上个工作流UUID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTime 创建时间。
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = new ResourceIds();
            $this->ResourceIds->deserialize($param["ResourceIds"]);
        }

        if (array_key_exists("LastWorkflowUuid",$param) and $param["LastWorkflowUuid"] !== null) {
            $this->LastWorkflowUuid = $param["LastWorkflowUuid"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }
    }
}
