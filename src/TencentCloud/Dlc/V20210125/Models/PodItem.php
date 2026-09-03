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
 * MlFlow Server Pod 信息
 *
 * @method string getPodName() 获取<p>Pod 名称</p>
 * @method void setPodName(string $PodName) 设置<p>Pod 名称</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method string getPhase() 获取<p>K8s Pod Phase</p>
 * @method void setPhase(string $Phase) 设置<p>K8s Pod Phase</p>
 * @method string getStatus() 获取<p>计算后的状态</p>
 * @method void setStatus(string $Status) 设置<p>计算后的状态</p>
 * @method string getPodIp() 获取<p>Pod IP</p>
 * @method void setPodIp(string $PodIp) 设置<p>Pod IP</p>
 * @method string getNodeName() 获取<p>调度节点名</p>
 * @method void setNodeName(string $NodeName) 设置<p>调度节点名</p>
 * @method string getImage() 获取<p>容器镜像</p>
 * @method void setImage(string $Image) 设置<p>容器镜像</p>
 * @method string getCpuRequest() 获取<p>CPU 请求</p>
 * @method void setCpuRequest(string $CpuRequest) 设置<p>CPU 请求</p>
 * @method string getCpuLimit() 获取<p>CPU 限制</p>
 * @method void setCpuLimit(string $CpuLimit) 设置<p>CPU 限制</p>
 * @method string getMemoryRequest() 获取<p>内存请求</p>
 * @method void setMemoryRequest(string $MemoryRequest) 设置<p>内存请求</p>
 * @method string getMemoryLimit() 获取<p>内存限制</p>
 * @method void setMemoryLimit(string $MemoryLimit) 设置<p>内存限制</p>
 * @method integer getCreateTime() 获取<p>创建时间（epoch millis）</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（epoch millis）</p>
 * @method integer getStartTime() 获取<p>启动时间（epoch millis）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>启动时间（epoch millis）</p>
 */
class PodItem extends AbstractModel
{
    /**
     * @var string <p>Pod 名称</p>
     */
    public $PodName;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>K8s Pod Phase</p>
     */
    public $Phase;

    /**
     * @var string <p>计算后的状态</p>
     */
    public $Status;

    /**
     * @var string <p>Pod IP</p>
     */
    public $PodIp;

    /**
     * @var string <p>调度节点名</p>
     */
    public $NodeName;

    /**
     * @var string <p>容器镜像</p>
     */
    public $Image;

    /**
     * @var string <p>CPU 请求</p>
     */
    public $CpuRequest;

    /**
     * @var string <p>CPU 限制</p>
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
     * @var integer <p>创建时间（epoch millis）</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>启动时间（epoch millis）</p>
     */
    public $StartTime;

    /**
     * @param string $PodName <p>Pod 名称</p>
     * @param string $Namespace <p>命名空间</p>
     * @param string $Phase <p>K8s Pod Phase</p>
     * @param string $Status <p>计算后的状态</p>
     * @param string $PodIp <p>Pod IP</p>
     * @param string $NodeName <p>调度节点名</p>
     * @param string $Image <p>容器镜像</p>
     * @param string $CpuRequest <p>CPU 请求</p>
     * @param string $CpuLimit <p>CPU 限制</p>
     * @param string $MemoryRequest <p>内存请求</p>
     * @param string $MemoryLimit <p>内存限制</p>
     * @param integer $CreateTime <p>创建时间（epoch millis）</p>
     * @param integer $StartTime <p>启动时间（epoch millis）</p>
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
