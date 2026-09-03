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
 * CreateBenchmarkTask返回参数结构体
 *
 * @method string getTaskId() 获取<p>benchmark任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>benchmark任务id</p>
 * @method string getTaskName() 获取<p>benchmark任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>benchmark任务名称</p>
 * @method string getServiceId() 获取<p>推理服务id</p>
 * @method void setServiceId(string $ServiceId) 设置<p>推理服务id</p>
 * @method string getServiceName() 获取<p>推理服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>推理服务名称</p>
 * @method string getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>Completed： 完成</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>Completed： 完成</li></ul>
 * @method integer getInputTokens() 获取<p>输入token量</p>
 * @method void setInputTokens(integer $InputTokens) 设置<p>输入token量</p>
 * @method integer getOutputTokens() 获取<p>输出token量</p>
 * @method void setOutputTokens(integer $OutputTokens) 设置<p>输出token量</p>
 * @method float getRequestsPerSecond() 获取<p>每秒请求量</p>
 * @method void setRequestsPerSecond(float $RequestsPerSecond) 设置<p>每秒请求量</p>
 * @method integer getMaxConcurrency() 获取<p>最大并发量</p>
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置<p>最大并发量</p>
 * @method integer getTotalPrompts() 获取<p>prompts总量</p>
 * @method void setTotalPrompts(integer $TotalPrompts) 设置<p>prompts总量</p>
 * @method boolean getUseGateway() 获取<p>是否使用Gateway</p>
 * @method void setUseGateway(boolean $UseGateway) 设置<p>是否使用Gateway</p>
 * @method string getDeploymentName() 获取<p>部署集群名称</p>
 * @method void setDeploymentName(string $DeploymentName) 设置<p>部署集群名称</p>
 * @method string getApiKeyId() 获取<p>apikey的id</p>
 * @method void setApiKeyId(string $ApiKeyId) 设置<p>apikey的id</p>
 * @method string getApiKeyName() 获取<p>apikey名称</p>
 * @method void setApiKeyName(string $ApiKeyName) 设置<p>apikey名称</p>
 * @method string getUin() 获取<p>主账号uin</p>
 * @method void setUin(string $Uin) 设置<p>主账号uin</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
 * @method integer getAppId() 获取<p>appid</p>
 * @method void setAppId(integer $AppId) 设置<p>appid</p>
 * @method string getSubAccountUin() 获取<p>子账号uin</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>子账号uin</p>
 * @method array getDeploymentResources() 获取<p>与本次评测关联的部署及其资源规格。</p>
 * @method void setDeploymentResources(array $DeploymentResources) 设置<p>与本次评测关联的部署及其资源规格。</p>
 * @method BenchmarkResourceInfo getResources() 获取<p>评测容器自身使用的资源规格</p>
 * @method void setResources(BenchmarkResourceInfo $Resources) 设置<p>评测容器自身使用的资源规格</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateBenchmarkTaskResponse extends AbstractModel
{
    /**
     * @var string <p>benchmark任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>benchmark任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>推理服务id</p>
     */
    public $ServiceId;

    /**
     * @var string <p>推理服务名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>任务状态</p><p>枚举值：</p><ul><li>Completed： 完成</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>输入token量</p>
     */
    public $InputTokens;

    /**
     * @var integer <p>输出token量</p>
     */
    public $OutputTokens;

    /**
     * @var float <p>每秒请求量</p>
     */
    public $RequestsPerSecond;

    /**
     * @var integer <p>最大并发量</p>
     */
    public $MaxConcurrency;

    /**
     * @var integer <p>prompts总量</p>
     */
    public $TotalPrompts;

    /**
     * @var boolean <p>是否使用Gateway</p>
     */
    public $UseGateway;

    /**
     * @var string <p>部署集群名称</p>
     */
    public $DeploymentName;

    /**
     * @var string <p>apikey的id</p>
     */
    public $ApiKeyId;

    /**
     * @var string <p>apikey名称</p>
     */
    public $ApiKeyName;

    /**
     * @var string <p>主账号uin</p>
     */
    public $Uin;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>子账号uin</p>
     */
    public $SubAccountUin;

    /**
     * @var array <p>与本次评测关联的部署及其资源规格。</p>
     */
    public $DeploymentResources;

    /**
     * @var BenchmarkResourceInfo <p>评测容器自身使用的资源规格</p>
     */
    public $Resources;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId <p>benchmark任务id</p>
     * @param string $TaskName <p>benchmark任务名称</p>
     * @param string $ServiceId <p>推理服务id</p>
     * @param string $ServiceName <p>推理服务名称</p>
     * @param string $Status <p>任务状态</p><p>枚举值：</p><ul><li>Completed： 完成</li></ul>
     * @param integer $InputTokens <p>输入token量</p>
     * @param integer $OutputTokens <p>输出token量</p>
     * @param float $RequestsPerSecond <p>每秒请求量</p>
     * @param integer $MaxConcurrency <p>最大并发量</p>
     * @param integer $TotalPrompts <p>prompts总量</p>
     * @param boolean $UseGateway <p>是否使用Gateway</p>
     * @param string $DeploymentName <p>部署集群名称</p>
     * @param string $ApiKeyId <p>apikey的id</p>
     * @param string $ApiKeyName <p>apikey名称</p>
     * @param string $Uin <p>主账号uin</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $UpdateTime <p>更新时间</p>
     * @param integer $AppId <p>appid</p>
     * @param string $SubAccountUin <p>子账号uin</p>
     * @param array $DeploymentResources <p>与本次评测关联的部署及其资源规格。</p>
     * @param BenchmarkResourceInfo $Resources <p>评测容器自身使用的资源规格</p>
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

        if (array_key_exists("DeploymentResources",$param) and $param["DeploymentResources"] !== null) {
            $this->DeploymentResources = [];
            foreach ($param["DeploymentResources"] as $key => $value){
                $obj = new DeploymentResourceInfo();
                $obj->deserialize($value);
                array_push($this->DeploymentResources, $obj);
            }
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = new BenchmarkResourceInfo();
            $this->Resources->deserialize($param["Resources"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
