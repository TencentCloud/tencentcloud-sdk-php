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
 * CreateBenchmarkTask请求参数结构体
 *
 * @method string getServiceId() 获取<p>推理服务Id</p>
 * @method void setServiceId(string $ServiceId) 设置<p>推理服务Id</p>
 * @method string getTaskName() 获取<p>任务名称（可选，不填则自动生成）</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称（可选，不填则自动生成）</p>
 * @method integer getInputTokens() 获取<p>每个 Prompt 的平均输入 Token 数</p>
 * @method void setInputTokens(integer $InputTokens) 设置<p>每个 Prompt 的平均输入 Token 数</p>
 * @method integer getOutputTokens() 获取<p>模型输出的最大 Token 数</p>
 * @method void setOutputTokens(integer $OutputTokens) 设置<p>模型输出的最大 Token 数</p>
 * @method float getRequestsPerSecond() 获取<p>每秒发送的请求数 (QPS)</p>
 * @method void setRequestsPerSecond(float $RequestsPerSecond) 设置<p>每秒发送的请求数 (QPS)</p>
 * @method integer getMaxConcurrency() 获取<p>最大同时并发请求数</p>
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置<p>最大同时并发请求数</p>
 * @method integer getTotalPrompts() 获取<p>评测使用的 Prompt 总数</p>
 * @method void setTotalPrompts(integer $TotalPrompts) 设置<p>评测使用的 Prompt 总数</p>
 * @method boolean getUseGateway() 获取<p>是否经 Ingress 网关访问推理服务（默认 true；false 则集群内直连 SVC）</p>
 * @method void setUseGateway(boolean $UseGateway) 设置<p>是否经 Ingress 网关访问推理服务（默认 true；false 则集群内直连 SVC）</p>
 * @method string getDeploymentId() 获取<p>ray部署集群Id</p>
 * @method void setDeploymentId(string $DeploymentId) 设置<p>ray部署集群Id</p>
 * @method string getApiKeyId() 获取<p>apiKey的Id</p>
 * @method void setApiKeyId(string $ApiKeyId) 设置<p>apiKey的Id</p>
 * @method string getResourcePartitionId() 获取<p>评测容器所在资源包 ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>评测容器所在资源包 ID</p>
 * @method string getQueue() 获取<p>评测容器所在资源包下的资源组名称</p>
 * @method void setQueue(string $Queue) 设置<p>评测容器所在资源包下的资源组名称</p>
 * @method string getBillingItem() 获取<p>评测容器计费项（规格）。仅允许 CPU 计费项。</p>
 * @method void setBillingItem(string $BillingItem) 设置<p>评测容器计费项（规格）。仅允许 CPU 计费项。</p>
 * @method integer getSpec() 获取<p>评测容器计费项规格倍数</p>
 * @method void setSpec(integer $Spec) 设置<p>评测容器计费项规格倍数</p>
 */
class CreateBenchmarkTaskRequest extends AbstractModel
{
    /**
     * @var string <p>推理服务Id</p>
     */
    public $ServiceId;

    /**
     * @var string <p>任务名称（可选，不填则自动生成）</p>
     */
    public $TaskName;

    /**
     * @var integer <p>每个 Prompt 的平均输入 Token 数</p>
     */
    public $InputTokens;

    /**
     * @var integer <p>模型输出的最大 Token 数</p>
     */
    public $OutputTokens;

    /**
     * @var float <p>每秒发送的请求数 (QPS)</p>
     */
    public $RequestsPerSecond;

    /**
     * @var integer <p>最大同时并发请求数</p>
     */
    public $MaxConcurrency;

    /**
     * @var integer <p>评测使用的 Prompt 总数</p>
     */
    public $TotalPrompts;

    /**
     * @var boolean <p>是否经 Ingress 网关访问推理服务（默认 true；false 则集群内直连 SVC）</p>
     */
    public $UseGateway;

    /**
     * @var string <p>ray部署集群Id</p>
     */
    public $DeploymentId;

    /**
     * @var string <p>apiKey的Id</p>
     */
    public $ApiKeyId;

    /**
     * @var string <p>评测容器所在资源包 ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>评测容器所在资源包下的资源组名称</p>
     */
    public $Queue;

    /**
     * @var string <p>评测容器计费项（规格）。仅允许 CPU 计费项。</p>
     */
    public $BillingItem;

    /**
     * @var integer <p>评测容器计费项规格倍数</p>
     */
    public $Spec;

    /**
     * @param string $ServiceId <p>推理服务Id</p>
     * @param string $TaskName <p>任务名称（可选，不填则自动生成）</p>
     * @param integer $InputTokens <p>每个 Prompt 的平均输入 Token 数</p>
     * @param integer $OutputTokens <p>模型输出的最大 Token 数</p>
     * @param float $RequestsPerSecond <p>每秒发送的请求数 (QPS)</p>
     * @param integer $MaxConcurrency <p>最大同时并发请求数</p>
     * @param integer $TotalPrompts <p>评测使用的 Prompt 总数</p>
     * @param boolean $UseGateway <p>是否经 Ingress 网关访问推理服务（默认 true；false 则集群内直连 SVC）</p>
     * @param string $DeploymentId <p>ray部署集群Id</p>
     * @param string $ApiKeyId <p>apiKey的Id</p>
     * @param string $ResourcePartitionId <p>评测容器所在资源包 ID</p>
     * @param string $Queue <p>评测容器所在资源包下的资源组名称</p>
     * @param string $BillingItem <p>评测容器计费项（规格）。仅允许 CPU 计费项。</p>
     * @param integer $Spec <p>评测容器计费项规格倍数</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("RequestsPerSecond",$param) and $param["RequestsPerSecond"] !== null) {
            $this->RequestsPerSecond = $param["RequestsPerSecond"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("TotalPrompts",$param) and $param["TotalPrompts"] !== null) {
            $this->TotalPrompts = $param["TotalPrompts"];
        }

        if (array_key_exists("UseGateway",$param) and $param["UseGateway"] !== null) {
            $this->UseGateway = $param["UseGateway"];
        }

        if (array_key_exists("DeploymentId",$param) and $param["DeploymentId"] !== null) {
            $this->DeploymentId = $param["DeploymentId"];
        }

        if (array_key_exists("ApiKeyId",$param) and $param["ApiKeyId"] !== null) {
            $this->ApiKeyId = $param["ApiKeyId"];
        }

        if (array_key_exists("ResourcePartitionId",$param) and $param["ResourcePartitionId"] !== null) {
            $this->ResourcePartitionId = $param["ResourcePartitionId"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }
    }
}
