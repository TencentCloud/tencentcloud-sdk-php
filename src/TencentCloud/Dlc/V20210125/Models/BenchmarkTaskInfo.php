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
 * 性能评测任务信息
 *
 * @method string getTaskId() 获取<p>benchmark任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>benchmark任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceId() 获取<p>关联的推理服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(string $ServiceId) 设置<p>关联的推理服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取<p>关联的推理服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置<p>关联的推理服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>任务状态（Running/Completed/Failed/Pending/Stopped）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>任务状态（Running/Completed/Failed/Pending/Stopped）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInputTokens() 获取<p>输入 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputTokens(integer $InputTokens) 设置<p>输入 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputTokens() 获取<p>输出 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputTokens(integer $OutputTokens) 设置<p>输出 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRequestsPerSecond() 获取<p>每秒请求数 (QPS)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestsPerSecond(float $RequestsPerSecond) 设置<p>每秒请求数 (QPS)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxConcurrency() 获取<p>最大并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置<p>最大并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPrompts() 获取<p>Prompts 总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPrompts(integer $TotalPrompts) 设置<p>Prompts 总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseGateway() 获取<p>是否经 Ingress 网关（true=网关, false=集群内直连 SVC）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseGateway(boolean $UseGateway) 设置<p>是否经 Ingress 网关（true=网关, false=集群内直连 SVC）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeploymentName() 获取<p>直连模式下使用的部署名称（仅 UseGateway=false 时有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeploymentName(string $DeploymentName) 设置<p>直连模式下使用的部署名称（仅 UseGateway=false 时有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiKeyId() 获取<p>API Key ID（走网关时使用的 API Key 标识）</p>
 * @method void setApiKeyId(string $ApiKeyId) 设置<p>API Key ID（走网关时使用的 API Key 标识）</p>
 * @method string getApiKeyName() 获取<p>API Key 名称</p>
 * @method void setApiKeyName(string $ApiKeyName) 设置<p>API Key 名称</p>
 * @method float getTimeToFirstTokenAvg() 获取<p>TTFT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeToFirstTokenAvg(float $TimeToFirstTokenAvg) 设置<p>TTFT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimeToFirstTokenMedian() 获取<p>TTFT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeToFirstTokenMedian(float $TimeToFirstTokenMedian) 设置<p>TTFT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimeToFirstTokenP99() 获取<p>TTFT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeToFirstTokenP99(float $TimeToFirstTokenP99) 设置<p>TTFT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimePerOutputTokenAvg() 获取<p>TPOT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimePerOutputTokenAvg(float $TimePerOutputTokenAvg) 设置<p>TPOT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimePerOutputTokenMedian() 获取<p>TPOT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimePerOutputTokenMedian(float $TimePerOutputTokenMedian) 设置<p>TPOT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimePerOutputTokenP99() 获取<p>TPOT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimePerOutputTokenP99(float $TimePerOutputTokenP99) 设置<p>TPOT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInterTokenLatencyAvg() 获取<p>ITL 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterTokenLatencyAvg(float $InterTokenLatencyAvg) 设置<p>ITL 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInterTokenLatencyMedian() 获取<p>ITL 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterTokenLatencyMedian(float $InterTokenLatencyMedian) 设置<p>ITL 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInterTokenLatencyP99() 获取<p>ITL P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterTokenLatencyP99(float $InterTokenLatencyP99) 设置<p>ITL P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getEndToEndAvg() 获取<p>E2E 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndToEndAvg(float $EndToEndAvg) 设置<p>E2E 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getEndToEndMedian() 获取<p>E2E 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndToEndMedian(float $EndToEndMedian) 设置<p>E2E 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getEndToEndP99() 获取<p>E2E P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndToEndP99(float $EndToEndP99) 设置<p>E2E P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTokenThroughput() 获取<p>Token 吞吐量 (output tokens/s)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenThroughput(float $TokenThroughput) 设置<p>Token 吞吐量 (output tokens/s)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRequestThroughput() 获取<p>请求吞吐量 (requests/s)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestThroughput(float $RequestThroughput) 设置<p>请求吞吐量 (requests/s)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取<p>错误信息（失败时）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>错误信息（失败时）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>appid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>appid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取<p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取<p>主账号uin</p>
 * @method void setUin(string $Uin) 设置<p>主账号uin</p>
 * @method string getSubAccountUin() 获取<p>子账号uin</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>子账号uin</p>
 */
class BenchmarkTaskInfo extends AbstractModel
{
    /**
     * @var string <p>benchmark任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string <p>关联的推理服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var string <p>关联的推理服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string <p>任务状态（Running/Completed/Failed/Pending/Stopped）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>输入 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputTokens;

    /**
     * @var integer <p>输出 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputTokens;

    /**
     * @var float <p>每秒请求数 (QPS)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestsPerSecond;

    /**
     * @var integer <p>最大并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxConcurrency;

    /**
     * @var integer <p>Prompts 总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPrompts;

    /**
     * @var boolean <p>是否经 Ingress 网关（true=网关, false=集群内直连 SVC）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseGateway;

    /**
     * @var string <p>直连模式下使用的部署名称（仅 UseGateway=false 时有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var float <p>TTFT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeToFirstTokenAvg;

    /**
     * @var float <p>TTFT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeToFirstTokenMedian;

    /**
     * @var float <p>TTFT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeToFirstTokenP99;

    /**
     * @var float <p>TPOT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimePerOutputTokenAvg;

    /**
     * @var float <p>TPOT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimePerOutputTokenMedian;

    /**
     * @var float <p>TPOT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimePerOutputTokenP99;

    /**
     * @var float <p>ITL 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterTokenLatencyAvg;

    /**
     * @var float <p>ITL 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterTokenLatencyMedian;

    /**
     * @var float <p>ITL P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterTokenLatencyP99;

    /**
     * @var float <p>E2E 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndToEndAvg;

    /**
     * @var float <p>E2E 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndToEndMedian;

    /**
     * @var float <p>E2E P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndToEndP99;

    /**
     * @var float <p>Token 吞吐量 (output tokens/s)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenThroughput;

    /**
     * @var float <p>请求吞吐量 (requests/s)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestThroughput;

    /**
     * @var string <p>错误信息（失败时）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var integer <p>appid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var integer <p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>主账号uin</p>
     */
    public $Uin;

    /**
     * @var string <p>子账号uin</p>
     */
    public $SubAccountUin;

    /**
     * @param string $TaskId <p>benchmark任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceId <p>关联的推理服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName <p>关联的推理服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>任务状态（Running/Completed/Failed/Pending/Stopped）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InputTokens <p>输入 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputTokens <p>输出 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RequestsPerSecond <p>每秒请求数 (QPS)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxConcurrency <p>最大并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPrompts <p>Prompts 总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UseGateway <p>是否经 Ingress 网关（true=网关, false=集群内直连 SVC）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeploymentName <p>直连模式下使用的部署名称（仅 UseGateway=false 时有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiKeyId <p>API Key ID（走网关时使用的 API Key 标识）</p>
     * @param string $ApiKeyName <p>API Key 名称</p>
     * @param float $TimeToFirstTokenAvg <p>TTFT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimeToFirstTokenMedian <p>TTFT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimeToFirstTokenP99 <p>TTFT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimePerOutputTokenAvg <p>TPOT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimePerOutputTokenMedian <p>TPOT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimePerOutputTokenP99 <p>TPOT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InterTokenLatencyAvg <p>ITL 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InterTokenLatencyMedian <p>ITL 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InterTokenLatencyP99 <p>ITL P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $EndToEndAvg <p>E2E 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $EndToEndMedian <p>E2E 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $EndToEndP99 <p>E2E P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TokenThroughput <p>Token 吞吐量 (output tokens/s)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RequestThroughput <p>请求吞吐量 (requests/s)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage <p>错误信息（失败时）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>appid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime <p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin <p>主账号uin</p>
     * @param string $SubAccountUin <p>子账号uin</p>
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

        if (array_key_exists("TimeToFirstTokenAvg",$param) and $param["TimeToFirstTokenAvg"] !== null) {
            $this->TimeToFirstTokenAvg = $param["TimeToFirstTokenAvg"];
        }

        if (array_key_exists("TimeToFirstTokenMedian",$param) and $param["TimeToFirstTokenMedian"] !== null) {
            $this->TimeToFirstTokenMedian = $param["TimeToFirstTokenMedian"];
        }

        if (array_key_exists("TimeToFirstTokenP99",$param) and $param["TimeToFirstTokenP99"] !== null) {
            $this->TimeToFirstTokenP99 = $param["TimeToFirstTokenP99"];
        }

        if (array_key_exists("TimePerOutputTokenAvg",$param) and $param["TimePerOutputTokenAvg"] !== null) {
            $this->TimePerOutputTokenAvg = $param["TimePerOutputTokenAvg"];
        }

        if (array_key_exists("TimePerOutputTokenMedian",$param) and $param["TimePerOutputTokenMedian"] !== null) {
            $this->TimePerOutputTokenMedian = $param["TimePerOutputTokenMedian"];
        }

        if (array_key_exists("TimePerOutputTokenP99",$param) and $param["TimePerOutputTokenP99"] !== null) {
            $this->TimePerOutputTokenP99 = $param["TimePerOutputTokenP99"];
        }

        if (array_key_exists("InterTokenLatencyAvg",$param) and $param["InterTokenLatencyAvg"] !== null) {
            $this->InterTokenLatencyAvg = $param["InterTokenLatencyAvg"];
        }

        if (array_key_exists("InterTokenLatencyMedian",$param) and $param["InterTokenLatencyMedian"] !== null) {
            $this->InterTokenLatencyMedian = $param["InterTokenLatencyMedian"];
        }

        if (array_key_exists("InterTokenLatencyP99",$param) and $param["InterTokenLatencyP99"] !== null) {
            $this->InterTokenLatencyP99 = $param["InterTokenLatencyP99"];
        }

        if (array_key_exists("EndToEndAvg",$param) and $param["EndToEndAvg"] !== null) {
            $this->EndToEndAvg = $param["EndToEndAvg"];
        }

        if (array_key_exists("EndToEndMedian",$param) and $param["EndToEndMedian"] !== null) {
            $this->EndToEndMedian = $param["EndToEndMedian"];
        }

        if (array_key_exists("EndToEndP99",$param) and $param["EndToEndP99"] !== null) {
            $this->EndToEndP99 = $param["EndToEndP99"];
        }

        if (array_key_exists("TokenThroughput",$param) and $param["TokenThroughput"] !== null) {
            $this->TokenThroughput = $param["TokenThroughput"];
        }

        if (array_key_exists("RequestThroughput",$param) and $param["RequestThroughput"] !== null) {
            $this->RequestThroughput = $param["RequestThroughput"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }
    }
}
