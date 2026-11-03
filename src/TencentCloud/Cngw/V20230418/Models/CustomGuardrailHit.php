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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义安全护栏审核记录
 *
 * @method string getRequestId() 获取<p>业务网关请求 ID；不是本次云 API 响应的 RequestId。流式同一业务请求可产生多条审核记录。</p>
 * @method void setRequestId(string $RequestId) 设置<p>业务网关请求 ID；不是本次云 API 响应的 RequestId。流式同一业务请求可产生多条审核记录。</p>
 * @method integer getTimestamp() 获取<p>审核记录 Unix 毫秒级时间戳；注意查询入参 StartTime/EndTime 为秒级。</p>
 * @method void setTimestamp(integer $Timestamp) 设置<p>审核记录 Unix 毫秒级时间戳；注意查询入参 StartTime/EndTime 为秒级。</p>
 * @method string getGatewayId() 获取<p>网关实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例 ID</p>
 * @method string getPolicyId() 获取<p>策略 ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>策略 ID</p>
 * @method string getPolicyName() 获取<p>策略名称</p>
 * @method void setPolicyName(string $PolicyName) 设置<p>策略名称</p>
 * @method string getResourceType() 获取<p>业务资源类型</p>
 * @method void setResourceType(string $ResourceType) 设置<p>业务资源类型</p>
 * @method string getResourceId() 获取<p>业务资源 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>业务资源 ID</p>
 * @method string getRouteId() 获取<p>Kong Route ID</p>
 * @method void setRouteId(string $RouteId) 设置<p>Kong Route ID</p>
 * @method string getProtocol() 获取<p>业务协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>业务协议</p>
 * @method string getDirection() 获取<p>审核方向：request 或 response</p>
 * @method void setDirection(string $Direction) 设置<p>审核方向：request 或 response</p>
 * @method boolean getStreaming() 获取<p>是否为流式审核</p>
 * @method void setStreaming(boolean $Streaming) 设置<p>是否为流式审核</p>
 * @method boolean getFinal() 获取<p>该审核单元是否标记为最终单元；不是是否命中/是否连接正常结束的判断依据。</p>
 * @method void setFinal(boolean $Final) 设置<p>该审核单元是否标记为最终单元；不是是否命中/是否连接正常结束的判断依据。</p>
 * @method string getDecision() 获取<p>归一化后的审核判定，可能为 allow、block、replace、error；不是原始自定义字段的任意值。观察模式仍可记录命中判定。</p>
 * @method void setDecision(string $Decision) 设置<p>归一化后的审核判定，可能为 allow、block、replace、error；不是原始自定义字段的任意值。观察模式仍可记录命中判定。</p>
 * @method string getConfiguredAction() 获取<p>策略配置动作</p>
 * @method void setConfiguredAction(string $ConfiguredAction) 设置<p>策略配置动作</p>
 * @method string getEffectiveAction() 获取<p>该审核记录的策略处理结果，如 allow、block、replace、error。需与 Decision、ConfiguredAction、ErrorCode 联合分析；记录不等于客户端已成功收到全部响应。</p>
 * @method void setEffectiveAction(string $EffectiveAction) 设置<p>该审核记录的策略处理结果，如 allow、block、replace、error。需与 Decision、ConfiguredAction、ErrorCode 联合分析；记录不等于客户端已成功收到全部响应。</p>
 * @method boolean getRewritten() 获取<p>内容是否被改写</p>
 * @method void setRewritten(boolean $Rewritten) 设置<p>内容是否被改写</p>
 * @method boolean getBlocked() 获取<p>请求或响应是否被拦截</p>
 * @method void setBlocked(boolean $Blocked) 设置<p>请求或响应是否被拦截</p>
 * @method boolean getDowngraded() 获取<p>本审核记录是否因失败放行发生降级；为 true 时不能认为内容已经审核通过。</p>
 * @method void setDowngraded(boolean $Downgraded) 设置<p>本审核记录是否因失败放行发生降级；为 true 时不能认为内容已经审核通过。</p>
 * @method integer getProviderStatusCode() 获取<p>审核服务 HTTP 状态码</p>
 * @method void setProviderStatusCode(integer $ProviderStatusCode) 设置<p>审核服务 HTTP 状态码</p>
 * @method float getLatencyMs() 获取<p>该审核调用耗时，单位毫秒，可含小数；不是完整模型请求时长或客户端首字延迟。</p>
 * @method void setLatencyMs(float $LatencyMs) 设置<p>该审核调用耗时，单位毫秒，可含小数；不是完整模型请求时长或客户端首字延迟。</p>
 * @method string getErrorCode() 获取<p>稳定错误码</p>
 * @method void setErrorCode(string $ErrorCode) 设置<p>稳定错误码</p>
 * @method string getReason() 获取<p>审核原因或错误摘要</p>
 * @method void setReason(string $Reason) 设置<p>审核原因或错误摘要</p>
 */
class CustomGuardrailHit extends AbstractModel
{
    /**
     * @var string <p>业务网关请求 ID；不是本次云 API 响应的 RequestId。流式同一业务请求可产生多条审核记录。</p>
     */
    public $RequestId;

    /**
     * @var integer <p>审核记录 Unix 毫秒级时间戳；注意查询入参 StartTime/EndTime 为秒级。</p>
     */
    public $Timestamp;

    /**
     * @var string <p>网关实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>策略 ID</p>
     */
    public $PolicyId;

    /**
     * @var string <p>策略名称</p>
     */
    public $PolicyName;

    /**
     * @var string <p>业务资源类型</p>
     */
    public $ResourceType;

    /**
     * @var string <p>业务资源 ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>Kong Route ID</p>
     */
    public $RouteId;

    /**
     * @var string <p>业务协议</p>
     */
    public $Protocol;

    /**
     * @var string <p>审核方向：request 或 response</p>
     */
    public $Direction;

    /**
     * @var boolean <p>是否为流式审核</p>
     */
    public $Streaming;

    /**
     * @var boolean <p>该审核单元是否标记为最终单元；不是是否命中/是否连接正常结束的判断依据。</p>
     */
    public $Final;

    /**
     * @var string <p>归一化后的审核判定，可能为 allow、block、replace、error；不是原始自定义字段的任意值。观察模式仍可记录命中判定。</p>
     */
    public $Decision;

    /**
     * @var string <p>策略配置动作</p>
     */
    public $ConfiguredAction;

    /**
     * @var string <p>该审核记录的策略处理结果，如 allow、block、replace、error。需与 Decision、ConfiguredAction、ErrorCode 联合分析；记录不等于客户端已成功收到全部响应。</p>
     */
    public $EffectiveAction;

    /**
     * @var boolean <p>内容是否被改写</p>
     */
    public $Rewritten;

    /**
     * @var boolean <p>请求或响应是否被拦截</p>
     */
    public $Blocked;

    /**
     * @var boolean <p>本审核记录是否因失败放行发生降级；为 true 时不能认为内容已经审核通过。</p>
     */
    public $Downgraded;

    /**
     * @var integer <p>审核服务 HTTP 状态码</p>
     */
    public $ProviderStatusCode;

    /**
     * @var float <p>该审核调用耗时，单位毫秒，可含小数；不是完整模型请求时长或客户端首字延迟。</p>
     */
    public $LatencyMs;

    /**
     * @var string <p>稳定错误码</p>
     */
    public $ErrorCode;

    /**
     * @var string <p>审核原因或错误摘要</p>
     */
    public $Reason;

    /**
     * @param string $RequestId <p>业务网关请求 ID；不是本次云 API 响应的 RequestId。流式同一业务请求可产生多条审核记录。</p>
     * @param integer $Timestamp <p>审核记录 Unix 毫秒级时间戳；注意查询入参 StartTime/EndTime 为秒级。</p>
     * @param string $GatewayId <p>网关实例 ID</p>
     * @param string $PolicyId <p>策略 ID</p>
     * @param string $PolicyName <p>策略名称</p>
     * @param string $ResourceType <p>业务资源类型</p>
     * @param string $ResourceId <p>业务资源 ID</p>
     * @param string $RouteId <p>Kong Route ID</p>
     * @param string $Protocol <p>业务协议</p>
     * @param string $Direction <p>审核方向：request 或 response</p>
     * @param boolean $Streaming <p>是否为流式审核</p>
     * @param boolean $Final <p>该审核单元是否标记为最终单元；不是是否命中/是否连接正常结束的判断依据。</p>
     * @param string $Decision <p>归一化后的审核判定，可能为 allow、block、replace、error；不是原始自定义字段的任意值。观察模式仍可记录命中判定。</p>
     * @param string $ConfiguredAction <p>策略配置动作</p>
     * @param string $EffectiveAction <p>该审核记录的策略处理结果，如 allow、block、replace、error。需与 Decision、ConfiguredAction、ErrorCode 联合分析；记录不等于客户端已成功收到全部响应。</p>
     * @param boolean $Rewritten <p>内容是否被改写</p>
     * @param boolean $Blocked <p>请求或响应是否被拦截</p>
     * @param boolean $Downgraded <p>本审核记录是否因失败放行发生降级；为 true 时不能认为内容已经审核通过。</p>
     * @param integer $ProviderStatusCode <p>审核服务 HTTP 状态码</p>
     * @param float $LatencyMs <p>该审核调用耗时，单位毫秒，可含小数；不是完整模型请求时长或客户端首字延迟。</p>
     * @param string $ErrorCode <p>稳定错误码</p>
     * @param string $Reason <p>审核原因或错误摘要</p>
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
        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Streaming",$param) and $param["Streaming"] !== null) {
            $this->Streaming = $param["Streaming"];
        }

        if (array_key_exists("Final",$param) and $param["Final"] !== null) {
            $this->Final = $param["Final"];
        }

        if (array_key_exists("Decision",$param) and $param["Decision"] !== null) {
            $this->Decision = $param["Decision"];
        }

        if (array_key_exists("ConfiguredAction",$param) and $param["ConfiguredAction"] !== null) {
            $this->ConfiguredAction = $param["ConfiguredAction"];
        }

        if (array_key_exists("EffectiveAction",$param) and $param["EffectiveAction"] !== null) {
            $this->EffectiveAction = $param["EffectiveAction"];
        }

        if (array_key_exists("Rewritten",$param) and $param["Rewritten"] !== null) {
            $this->Rewritten = $param["Rewritten"];
        }

        if (array_key_exists("Blocked",$param) and $param["Blocked"] !== null) {
            $this->Blocked = $param["Blocked"];
        }

        if (array_key_exists("Downgraded",$param) and $param["Downgraded"] !== null) {
            $this->Downgraded = $param["Downgraded"];
        }

        if (array_key_exists("ProviderStatusCode",$param) and $param["ProviderStatusCode"] !== null) {
            $this->ProviderStatusCode = $param["ProviderStatusCode"];
        }

        if (array_key_exists("LatencyMs",$param) and $param["LatencyMs"] !== null) {
            $this->LatencyMs = $param["LatencyMs"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
