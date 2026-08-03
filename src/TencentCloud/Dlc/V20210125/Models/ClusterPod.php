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
 * 集群pod详情
 *
 * @method string getPodName() 获取<p>Pod名称</p>
 * @method void setPodName(string $PodName) 设置<p>Pod名称</p>
 * @method string getPodIp() 获取<p>Pod IP</p>
 * @method void setPodIp(string $PodIp) 设置<p>Pod IP</p>
 * @method string getStatus() 获取<p>Pod状态</p>
 * @method void setStatus(string $Status) 设置<p>Pod状态</p>
 * @method string getPhase() 获取<p>Pod阶段</p>
 * @method void setPhase(string $Phase) 设置<p>Pod阶段</p>
 * @method string getNodeName() 获取<p>所属节点</p>
 * @method void setNodeName(string $NodeName) 设置<p>所属节点</p>
 * @method string getNodeIp() 获取<p>节点IP</p>
 * @method void setNodeIp(string $NodeIp) 设置<p>节点IP</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method string getCpuRequest() 获取<p>CPU请求</p>
 * @method void setCpuRequest(string $CpuRequest) 设置<p>CPU请求</p>
 * @method string getCpuLimit() 获取<p>CPU限制</p>
 * @method void setCpuLimit(string $CpuLimit) 设置<p>CPU限制</p>
 * @method string getMemoryRequest() 获取<p>内存请求</p>
 * @method void setMemoryRequest(string $MemoryRequest) 设置<p>内存请求</p>
 * @method string getMemoryLimit() 获取<p>内存限制</p>
 * @method void setMemoryLimit(string $MemoryLimit) 设置<p>内存限制</p>
 * @method string getGpuCount() 获取<p>GPU数量</p>
 * @method void setGpuCount(string $GpuCount) 设置<p>GPU数量</p>
 * @method string getImage() 获取<p>容器镜像</p>
 * @method void setImage(string $Image) 设置<p>容器镜像</p>
 * @method string getRole() 获取<p>Pod角色(head/worker)</p>
 * @method void setRole(string $Role) 设置<p>Pod角色(head/worker)</p>
 * @method integer getCreateTime() 获取<p>创建时间（毫秒时间戳）</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（毫秒时间戳）</p>
 * @method integer getStartTime() 获取<p>启动时间（毫秒时间戳）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>启动时间（毫秒时间戳）</p>
 */
class ClusterPod extends AbstractModel
{
    /**
     * @var string <p>Pod名称</p>
     */
    public $PodName;

    /**
     * @var string <p>Pod IP</p>
     */
    public $PodIp;

    /**
     * @var string <p>Pod状态</p>
     */
    public $Status;

    /**
     * @var string <p>Pod阶段</p>
     */
    public $Phase;

    /**
     * @var string <p>所属节点</p>
     */
    public $NodeName;

    /**
     * @var string <p>节点IP</p>
     */
    public $NodeIp;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>CPU请求</p>
     */
    public $CpuRequest;

    /**
     * @var string <p>CPU限制</p>
     */
    public $CpuLimit;

    /**
     * @var string <p>内存请求</p>
     */
    public $MemoryRequest;

    /**
     * @var string <p>内存限制</p>
     */
    public $MemoryLimit;

    /**
     * @var string <p>GPU数量</p>
     */
    public $GpuCount;

    /**
     * @var string <p>容器镜像</p>
     */
    public $Image;

    /**
     * @var string <p>Pod角色(head/worker)</p>
     */
    public $Role;

    /**
     * @var integer <p>创建时间（毫秒时间戳）</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>启动时间（毫秒时间戳）</p>
     */
    public $StartTime;

    /**
     * @param string $PodName <p>Pod名称</p>
     * @param string $PodIp <p>Pod IP</p>
     * @param string $Status <p>Pod状态</p>
     * @param string $Phase <p>Pod阶段</p>
     * @param string $NodeName <p>所属节点</p>
     * @param string $NodeIp <p>节点IP</p>
     * @param string $Namespace <p>命名空间</p>
     * @param string $CpuRequest <p>CPU请求</p>
     * @param string $CpuLimit <p>CPU限制</p>
     * @param string $MemoryRequest <p>内存请求</p>
     * @param string $MemoryLimit <p>内存限制</p>
     * @param string $GpuCount <p>GPU数量</p>
     * @param string $Image <p>容器镜像</p>
     * @param string $Role <p>Pod角色(head/worker)</p>
     * @param integer $CreateTime <p>创建时间（毫秒时间戳）</p>
     * @param integer $StartTime <p>启动时间（毫秒时间戳）</p>
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
