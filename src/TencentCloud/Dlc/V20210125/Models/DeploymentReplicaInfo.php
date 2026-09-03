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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署副本信息
 *
 * @method integer getDeploymentId() 获取<p>关联的部署ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeploymentId(integer $DeploymentId) 设置<p>关联的部署ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>副本名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>副本名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>副本状态（Running/Pending/Failed/Terminated）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>副本状态（Running/Pending/Failed/Terminated）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestartCount() 获取<p>重启次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestartCount(integer $RestartCount) 设置<p>重启次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeType() 获取<p>节点类型（head/worker）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeType(string $NodeType) 设置<p>节点类型（head/worker）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取<p>启动时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置<p>启动时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodIp() 获取<p>Pod IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodIp(string $PodIp) 设置<p>Pod IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取<p>节点名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置<p>节点名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeIp() 获取<p>节点 IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeIp(string $NodeIp) 设置<p>节点 IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取<p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuRequest() 获取<p>CPU 请求</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuRequest(string $CpuRequest) 设置<p>CPU 请求</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuLimit() 获取<p>CPU 限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuLimit(string $CpuLimit) 设置<p>CPU 限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemoryRequest() 获取<p>内存请求</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemoryRequest(string $MemoryRequest) 设置<p>内存请求</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemoryLimit() 获取<p>内存限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemoryLimit(string $MemoryLimit) 设置<p>内存限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGpuCount() 获取<p>GPU 数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuCount(integer $GpuCount) 设置<p>GPU 数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImage() 获取<p>容器镜像</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(string $Image) 设置<p>容器镜像</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeploymentReplicaInfo extends AbstractModel
{
    /**
     * @var integer <p>关联的部署ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeploymentId;

    /**
     * @var string <p>副本名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>副本状态（Running/Pending/Failed/Terminated）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>重启次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestartCount;

    /**
     * @var string <p>节点类型（head/worker）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeType;

    /**
     * @var integer <p>启动时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>Pod IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodIp;

    /**
     * @var string <p>节点名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var string <p>节点 IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeIp;

    /**
     * @var string <p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string <p>CPU 请求</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuRequest;

    /**
     * @var string <p>CPU 限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuLimit;

    /**
     * @var string <p>内存请求</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemoryRequest;

    /**
     * @var string <p>内存限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemoryLimit;

    /**
     * @var integer <p>GPU 数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuCount;

    /**
     * @var string <p>容器镜像</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var integer <p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param integer $DeploymentId <p>关联的部署ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>副本名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>副本状态（Running/Pending/Failed/Terminated）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RestartCount <p>重启次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeType <p>节点类型（head/worker）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime <p>启动时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodIp <p>Pod IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName <p>节点名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeIp <p>节点 IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace <p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuRequest <p>CPU 请求</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuLimit <p>CPU 限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemoryRequest <p>内存请求</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemoryLimit <p>内存限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GpuCount <p>GPU 数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Image <p>容器镜像</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>创建时间（毫秒时间戳）</p>
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
        if (array_key_exists("DeploymentId",$param) and $param["DeploymentId"] !== null) {
            $this->DeploymentId = $param["DeploymentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CpuRequest",$param) and $param["CpuRequest"] !== null) {
            $this->CpuRequest = $param["CpuRequest"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("MemoryRequest",$param) and $param["MemoryRequest"] !== null) {
            $this->MemoryRequest = $param["MemoryRequest"];
        }

        if (array_key_exists("MemoryLimit",$param) and $param["MemoryLimit"] !== null) {
            $this->MemoryLimit = $param["MemoryLimit"];
        }

        if (array_key_exists("GpuCount",$param) and $param["GpuCount"] !== null) {
            $this->GpuCount = $param["GpuCount"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
