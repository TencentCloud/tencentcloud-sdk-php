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
 * 任务Pod信息
 *
 * @method string getPodName() 获取Pod名称
 * @method void setPodName(string $PodName) 设置Pod名称
 * @method string getPodIp() 获取Pod IP
 * @method void setPodIp(string $PodIp) 设置Pod IP
 * @method string getStatus() 获取Pod状态
 * @method void setStatus(string $Status) 设置Pod状态
 * @method string getPhase() 获取Pod阶段
 * @method void setPhase(string $Phase) 设置Pod阶段
 * @method string getNodeName() 获取所属节点
 * @method void setNodeName(string $NodeName) 设置所属节点
 * @method string getNodeIp() 获取节点IP
 * @method void setNodeIp(string $NodeIp) 设置节点IP
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getCpuRequest() 获取CPU请求
 * @method void setCpuRequest(string $CpuRequest) 设置CPU请求
 * @method string getCpuLimit() 获取CPU限制
 * @method void setCpuLimit(string $CpuLimit) 设置CPU限制
 * @method string getMemoryRequest() 获取内存请求
 * @method void setMemoryRequest(string $MemoryRequest) 设置内存请求
 * @method string getMemoryLimit() 获取内存限制
 * @method void setMemoryLimit(string $MemoryLimit) 设置内存限制
 * @method string getGpuCount() 获取GPU数量
 * @method void setGpuCount(string $GpuCount) 设置GPU数量
 * @method string getImage() 获取容器镜像
 * @method void setImage(string $Image) 设置容器镜像
 * @method string getRole() 获取Pod角色(head/worker)
 * @method void setRole(string $Role) 设置Pod角色(head/worker)
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getStartTime() 获取启动时间
 * @method void setStartTime(integer $StartTime) 设置启动时间
 */
class JobPodEntity extends AbstractModel
{
    /**
     * @var string Pod名称
     */
    public $PodName;

    /**
     * @var string Pod IP
     */
    public $PodIp;

    /**
     * @var string Pod状态
     */
    public $Status;

    /**
     * @var string Pod阶段
     */
    public $Phase;

    /**
     * @var string 所属节点
     */
    public $NodeName;

    /**
     * @var string 节点IP
     */
    public $NodeIp;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string CPU请求
     */
    public $CpuRequest;

    /**
     * @var string CPU限制
     */
    public $CpuLimit;

    /**
     * @var string 内存请求
     */
    public $MemoryRequest;

    /**
     * @var string 内存限制
     */
    public $MemoryLimit;

    /**
     * @var string GPU数量
     */
    public $GpuCount;

    /**
     * @var string 容器镜像
     */
    public $Image;

    /**
     * @var string Pod角色(head/worker)
     */
    public $Role;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 启动时间
     */
    public $StartTime;

    /**
     * @param string $PodName Pod名称
     * @param string $PodIp Pod IP
     * @param string $Status Pod状态
     * @param string $Phase Pod阶段
     * @param string $NodeName 所属节点
     * @param string $NodeIp 节点IP
     * @param string $Namespace 命名空间
     * @param string $CpuRequest CPU请求
     * @param string $CpuLimit CPU限制
     * @param string $MemoryRequest 内存请求
     * @param string $MemoryLimit 内存限制
     * @param string $GpuCount GPU数量
     * @param string $Image 容器镜像
     * @param string $Role Pod角色(head/worker)
     * @param integer $CreateTime 创建时间
     * @param integer $StartTime 启动时间
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
        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
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

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
