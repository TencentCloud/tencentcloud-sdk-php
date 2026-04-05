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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HPC节点
 *
 * @method string getNodeId() 获取<p>节点ID</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点ID</p>
 * @method string getQueueId() 获取<p>队列ID</p>
 * @method void setQueueId(string $QueueId) 设置<p>队列ID</p>
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getRole() 获取<p>角色</p>
 * @method void setRole(string $Role) 设置<p>角色</p>
 * @method string getType() 获取<p>类型</p>
 * @method void setType(string $Type) 设置<p>类型</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getImageId() 获取<p>镜像ID</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像ID</p>
 * @method HPCInstance getInstance() 获取<p>实例信息</p>
 * @method void setInstance(HPCInstance $Instance) 设置<p>实例信息</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method string getName() 获取<p>节点名称</p>
 * @method void setName(string $Name) 设置<p>节点名称</p>
 * @method string getQueueName() 获取<p>队列名称</p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称</p>
 * @method string getStatus() 获取<p>节点状态。取值范围：<br>IDLE 空闲<br>DOWN 节点下线<br>MIXED 节点部分使用<br>ALLOC  节点完全分配<br>DRAIN 排空，不接受新任务</p>
 * @method void setStatus(string $Status) 设置<p>节点状态。取值范围：<br>IDLE 空闲<br>DOWN 节点下线<br>MIXED 节点部分使用<br>ALLOC  节点完全分配<br>DRAIN 排空，不接受新任务</p>
 */
class HPCNode extends AbstractModel
{
    /**
     * @var string <p>节点ID</p>
     */
    public $NodeId;

    /**
     * @var string <p>队列ID</p>
     */
    public $QueueId;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>角色</p>
     */
    public $Role;

    /**
     * @var string <p>类型</p>
     */
    public $Type;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>镜像ID</p>
     */
    public $ImageId;

    /**
     * @var HPCInstance <p>实例信息</p>
     */
    public $Instance;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var string <p>节点名称</p>
     */
    public $Name;

    /**
     * @var string <p>队列名称</p>
     */
    public $QueueName;

    /**
     * @var string <p>节点状态。取值范围：<br>IDLE 空闲<br>DOWN 节点下线<br>MIXED 节点部分使用<br>ALLOC  节点完全分配<br>DRAIN 排空，不接受新任务</p>
     */
    public $Status;

    /**
     * @param string $NodeId <p>节点ID</p>
     * @param string $QueueId <p>队列ID</p>
     * @param string $ClusterId <p>集群ID</p>
     * @param string $Role <p>角色</p>
     * @param string $Type <p>类型</p>
     * @param string $Zone <p>可用区</p>
     * @param string $ImageId <p>镜像ID</p>
     * @param HPCInstance $Instance <p>实例信息</p>
     * @param array $Tags <p>标签</p>
     * @param string $Name <p>节点名称</p>
     * @param string $QueueName <p>队列名称</p>
     * @param string $Status <p>节点状态。取值范围：<br>IDLE 空闲<br>DOWN 节点下线<br>MIXED 节点部分使用<br>ALLOC  节点完全分配<br>DRAIN 排空，不接受新任务</p>
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            $this->QueueId = $param["QueueId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = new HPCInstance();
            $this->Instance->deserialize($param["Instance"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
