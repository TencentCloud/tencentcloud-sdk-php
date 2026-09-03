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
 * 部署的资源规格
 *
 * @method string getDeploymentId() 获取<p>部署业务唯一标识（deploymentUid）</p>
 * @method void setDeploymentId(string $DeploymentId) 设置<p>部署业务唯一标识（deploymentUid）</p>
 * @method string getDeploymentName() 获取<p>部署名称</p>
 * @method void setDeploymentName(string $DeploymentName) 设置<p>部署名称</p>
 * @method string getStatus() 获取<p>部署状态</p>
 * @method void setStatus(string $Status) 设置<p>部署状态</p>
 * @method string getWorkerBillingItem() 获取<p>Worker 节点 BillingItem</p>
 * @method void setWorkerBillingItem(string $WorkerBillingItem) 设置<p>Worker 节点 BillingItem</p>
 * @method integer getWorkerSpec() 获取<p>Worker 节点规格倍数</p>
 * @method void setWorkerSpec(integer $WorkerSpec) 设置<p>Worker 节点规格倍数</p>
 * @method string getWorkerResourceType() 获取<p>Worker 节点资源类型，枚举： • GU — GPU 计费单位 • CU — CPU 计费单位</p>
 * @method void setWorkerResourceType(string $WorkerResourceType) 设置<p>Worker 节点资源类型，枚举： • GU — GPU 计费单位 • CU — CPU 计费单位</p>
 * @method string getHeadBillingItem() 获取<p>Head 节点 BillingItem</p>
 * @method void setHeadBillingItem(string $HeadBillingItem) 设置<p>Head 节点 BillingItem</p>
 * @method integer getHeadSpec() 获取<p>Head 节点规格倍数</p>
 * @method void setHeadSpec(integer $HeadSpec) 设置<p>Head 节点规格倍数</p>
 * @method string getHeadResourceType() 获取<p>Head 节点资源类型。当前实现恒为 CU</p>
 * @method void setHeadResourceType(string $HeadResourceType) 设置<p>Head 节点资源类型。当前实现恒为 CU</p>
 * @method string getGpuType() 获取<p>GPU 型号。CPU 部署或型号未知时为空串 &quot;&quot;</p>
 * @method void setGpuType(string $GpuType) 设置<p>GPU 型号。CPU 部署或型号未知时为空串 &quot;&quot;</p>
 * @method integer getReplicas() 获取<p>期望副本数</p>
 * @method void setReplicas(integer $Replicas) 设置<p>期望副本数</p>
 */
class DeploymentResourceInfo extends AbstractModel
{
    /**
     * @var string <p>部署业务唯一标识（deploymentUid）</p>
     */
    public $DeploymentId;

    /**
     * @var string <p>部署名称</p>
     */
    public $DeploymentName;

    /**
     * @var string <p>部署状态</p>
     */
    public $Status;

    /**
     * @var string <p>Worker 节点 BillingItem</p>
     */
    public $WorkerBillingItem;

    /**
     * @var integer <p>Worker 节点规格倍数</p>
     */
    public $WorkerSpec;

    /**
     * @var string <p>Worker 节点资源类型，枚举： • GU — GPU 计费单位 • CU — CPU 计费单位</p>
     */
    public $WorkerResourceType;

    /**
     * @var string <p>Head 节点 BillingItem</p>
     */
    public $HeadBillingItem;

    /**
     * @var integer <p>Head 节点规格倍数</p>
     */
    public $HeadSpec;

    /**
     * @var string <p>Head 节点资源类型。当前实现恒为 CU</p>
     */
    public $HeadResourceType;

    /**
     * @var string <p>GPU 型号。CPU 部署或型号未知时为空串 &quot;&quot;</p>
     */
    public $GpuType;

    /**
     * @var integer <p>期望副本数</p>
     */
    public $Replicas;

    /**
     * @param string $DeploymentId <p>部署业务唯一标识（deploymentUid）</p>
     * @param string $DeploymentName <p>部署名称</p>
     * @param string $Status <p>部署状态</p>
     * @param string $WorkerBillingItem <p>Worker 节点 BillingItem</p>
     * @param integer $WorkerSpec <p>Worker 节点规格倍数</p>
     * @param string $WorkerResourceType <p>Worker 节点资源类型，枚举： • GU — GPU 计费单位 • CU — CPU 计费单位</p>
     * @param string $HeadBillingItem <p>Head 节点 BillingItem</p>
     * @param integer $HeadSpec <p>Head 节点规格倍数</p>
     * @param string $HeadResourceType <p>Head 节点资源类型。当前实现恒为 CU</p>
     * @param string $GpuType <p>GPU 型号。CPU 部署或型号未知时为空串 &quot;&quot;</p>
     * @param integer $Replicas <p>期望副本数</p>
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

        if (array_key_exists("DeploymentName",$param) and $param["DeploymentName"] !== null) {
            $this->DeploymentName = $param["DeploymentName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("WorkerBillingItem",$param) and $param["WorkerBillingItem"] !== null) {
            $this->WorkerBillingItem = $param["WorkerBillingItem"];
        }

        if (array_key_exists("WorkerSpec",$param) and $param["WorkerSpec"] !== null) {
            $this->WorkerSpec = $param["WorkerSpec"];
        }

        if (array_key_exists("WorkerResourceType",$param) and $param["WorkerResourceType"] !== null) {
            $this->WorkerResourceType = $param["WorkerResourceType"];
        }

        if (array_key_exists("HeadBillingItem",$param) and $param["HeadBillingItem"] !== null) {
            $this->HeadBillingItem = $param["HeadBillingItem"];
        }

        if (array_key_exists("HeadSpec",$param) and $param["HeadSpec"] !== null) {
            $this->HeadSpec = $param["HeadSpec"];
        }

        if (array_key_exists("HeadResourceType",$param) and $param["HeadResourceType"] !== null) {
            $this->HeadResourceType = $param["HeadResourceType"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }
    }
}
