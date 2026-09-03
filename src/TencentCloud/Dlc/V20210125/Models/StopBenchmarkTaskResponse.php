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
 * StopBenchmarkTask返回参数结构体
 *
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getServiceId() 获取<p>关联的推理服务ID</p>
 * @method void setServiceId(string $ServiceId) 设置<p>关联的推理服务ID</p>
 * @method string getServiceName() 获取<p>关联的推理服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>关联的推理服务名称</p>
 * @method string getStatus() 获取<p>任务状态</p>
 * @method void setStatus(string $Status) 设置<p>任务状态</p>
 * @method integer getInputTokens() 获取<p>输入 Token 数</p>
 * @method void setInputTokens(integer $InputTokens) 设置<p>输入 Token 数</p>
 * @method integer getOutputTokens() 获取<p>输出 Token 数</p>
 * @method void setOutputTokens(integer $OutputTokens) 设置<p>输出 Token 数</p>
 * @method float getRequestsPerSecond() 获取<p>每秒请求数 (QPS)</p>
 * @method void setRequestsPerSecond(float $RequestsPerSecond) 设置<p>每秒请求数 (QPS)</p>
 * @method integer getMaxConcurrency() 获取<p>最大并发数</p>
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置<p>最大并发数</p>
 * @method integer getTotalPrompts() 获取<p>Prompts 总数</p>
 * @method void setTotalPrompts(integer $TotalPrompts) 设置<p>Prompts 总数</p>
 * @method boolean getUseGateway() 获取<p>是否经网关。true=通过网关访问；false=集群内直连 SVC</p>
 * @method void setUseGateway(boolean $UseGateway) 设置<p>是否经网关。true=通过网关访问；false=集群内直连 SVC</p>
 * @method string getDeploymentName() 获取<p>直连模式下使用的部署名称（仅 UseGateway=false 时有值）</p>
 * @method void setDeploymentName(string $DeploymentName) 设置<p>直连模式下使用的部署名称（仅 UseGateway=false 时有值）</p>
 * @method string getApiKeyId() 获取<p>API Key ID（走网关时使用的 API Key 标识）</p>
 * @method void setApiKeyId(string $ApiKeyId) 设置<p>API Key ID（走网关时使用的 API Key 标识）</p>
 * @method string getApiKeyName() 获取<p>API Key 名称</p>
 * @method void setApiKeyName(string $ApiKeyName) 设置<p>API Key 名称</p>
 * @method string getUin() 获取<p>主账号UIN</p>
 * @method void setUin(string $Uin) 设置<p>主账号UIN</p>
 * @method integer getCreateTime() 获取<p>创建时间（毫秒时间戳）</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（毫秒时间戳）</p>
 * @method integer getUpdateTime() 获取<p>更新时间（毫秒时间戳）</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间（毫秒时间戳）</p>
 * @method integer getAppId() 获取<p>应用ID</p>
 * @method void setAppId(integer $AppId) 设置<p>应用ID</p>
 * @method string getSubAccountUin() 获取<p>子账号UIN（实际操作者）</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>子账号UIN（实际操作者）</p>
 * @method BenchmarkResourceInfo getResources() 获取<p>评测容器自身使用的资源规格</p>
 * @method void setResources(BenchmarkResourceInfo $Resources) 设置<p>评测容器自身使用的资源规格</p>
 * @method array getDeploymentResources() 获取<p>与本次评测关联的部署及其资源规格。语义按模式区分： • 网关模式（UseGateway=true）：Service 下所有 Running 部署（长度可能 &gt; 1） • 直连模式（UseGateway=false）：仅绑定的那个部署（长度恒为 1）</p>
 * @method void setDeploymentResources(array $DeploymentResources) 设置<p>与本次评测关联的部署及其资源规格。语义按模式区分： • 网关模式（UseGateway=true）：Service 下所有 Running 部署（长度可能 &gt; 1） • 直连模式（UseGateway=false）：仅绑定的那个部署（长度恒为 1）</p>
 * @method string getErrorMessage() 获取<p>发生错误时的错误信息</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>发生错误时的错误信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class StopBenchmarkTaskResponse extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>关联的推理服务ID</p>
     */
    public $ServiceId;

    /**
     * @var string <p>关联的推理服务名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>任务状态</p>
     */
    public $Status;

    /**
     * @var integer <p>输入 Token 数</p>
     */
    public $InputTokens;

    /**
     * @var integer <p>输出 Token 数</p>
     */
    public $OutputTokens;

    /**
     * @var float <p>每秒请求数 (QPS)</p>
     */
    public $RequestsPerSecond;

    /**
     * @var integer <p>最大并发数</p>
     */
    public $MaxConcurrency;

    /**
     * @var integer <p>Prompts 总数</p>
     */
    public $TotalPrompts;

    /**
     * @var boolean <p>是否经网关。true=通过网关访问；false=集群内直连 SVC</p>
     */
    public $UseGateway;

    /**
     * @var string <p>直连模式下使用的部署名称（仅 UseGateway=false 时有值）</p>
     */
    public $DeploymentName;

    /**
     * @var string <p>API Key ID（走网关时使用的 API Key 标识）</p>
     */
    public $ApiKeyId;

    /**
     * @var string <p>API Key 名称</p>
     */
    public $ApiKeyName;

    /**
     * @var string <p>主账号UIN</p>
     */
    public $Uin;

    /**
     * @var integer <p>创建时间（毫秒时间戳）</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间（毫秒时间戳）</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var string <p>子账号UIN（实际操作者）</p>
     */
    public $SubAccountUin;

    /**
     * @var BenchmarkResourceInfo <p>评测容器自身使用的资源规格</p>
     */
    public $Resources;

    /**
     * @var array <p>与本次评测关联的部署及其资源规格。语义按模式区分： • 网关模式（UseGateway=true）：Service 下所有 Running 部署（长度可能 &gt; 1） • 直连模式（UseGateway=false）：仅绑定的那个部署（长度恒为 1）</p>
     */
    public $DeploymentResources;

    /**
     * @var string <p>发生错误时的错误信息</p>
     */
    public $ErrorMessage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId <p>任务ID</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $ServiceId <p>关联的推理服务ID</p>
     * @param string $ServiceName <p>关联的推理服务名称</p>
     * @param string $Status <p>任务状态</p>
     * @param integer $InputTokens <p>输入 Token 数</p>
     * @param integer $OutputTokens <p>输出 Token 数</p>
     * @param float $RequestsPerSecond <p>每秒请求数 (QPS)</p>
     * @param integer $MaxConcurrency <p>最大并发数</p>
     * @param integer $TotalPrompts <p>Prompts 总数</p>
     * @param boolean $UseGateway <p>是否经网关。true=通过网关访问；false=集群内直连 SVC</p>
     * @param string $DeploymentName <p>直连模式下使用的部署名称（仅 UseGateway=false 时有值）</p>
     * @param string $ApiKeyId <p>API Key ID（走网关时使用的 API Key 标识）</p>
     * @param string $ApiKeyName <p>API Key 名称</p>
     * @param string $Uin <p>主账号UIN</p>
     * @param integer $CreateTime <p>创建时间（毫秒时间戳）</p>
     * @param integer $UpdateTime <p>更新时间（毫秒时间戳）</p>
     * @param integer $AppId <p>应用ID</p>
     * @param string $SubAccountUin <p>子账号UIN（实际操作者）</p>
     * @param BenchmarkResourceInfo $Resources <p>评测容器自身使用的资源规格</p>
     * @param array $DeploymentResources <p>与本次评测关联的部署及其资源规格。语义按模式区分： • 网关模式（UseGateway=true）：Service 下所有 Running 部署（长度可能 &gt; 1） • 直连模式（UseGateway=false）：仅绑定的那个部署（长度恒为 1）</p>
     * @param string $ErrorMessage <p>发生错误时的错误信息</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("DeploymentName",$param) and $param["DeploymentName"] !== null) {
            $this->DeploymentName = $param["DeploymentName"];
        }

        if (array_key_exists("ApiKeyId",$param) and $param["ApiKeyId"] !== null) {
            $this->ApiKeyId = $param["ApiKeyId"];
        }

        if (array_key_exists("ApiKeyName",$param) and $param["ApiKeyName"] !== null) {
            $this->ApiKeyName = $param["ApiKeyName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = new BenchmarkResourceInfo();
            $this->Resources->deserialize($param["Resources"]);
        }

        if (array_key_exists("DeploymentResources",$param) and $param["DeploymentResources"] !== null) {
            $this->DeploymentResources = [];
            foreach ($param["DeploymentResources"] as $key => $value){
                $obj = new DeploymentResourceInfo();
                $obj->deserialize($value);
                array_push($this->DeploymentResources, $obj);
            }
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
