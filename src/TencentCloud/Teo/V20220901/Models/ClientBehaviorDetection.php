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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端行为校验
 *
 * @method string getCryptoChallengeIntensity() 获取工作量证明校验强度。取值有：<li>low：低；</li><li>medium：中；</li><li>high：高。</li>
 * @method void setCryptoChallengeIntensity(string $CryptoChallengeIntensity) 设置工作量证明校验强度。取值有：<li>low：低；</li><li>medium：中；</li><li>high：高。</li>
 * @method string getCryptoChallengeDelayBefore() 获取客户端行为校验的执行方式。取值有：<li>0ms：立即执行；</li><li>100ms：延迟 100ms 执行；</li><li>200ms：延迟 200ms 执行；</li><li>300ms：延迟 300ms 执行；</li><li>400ms：延迟 400ms 执行；</li><li>500ms：延迟 500ms 执行；</li><li>600ms：延迟 600ms 执行；</li><li>700ms：延迟 700ms 执行；</li><li>800ms：延迟 800ms 执行；</li><li>900ms：延迟 900ms 执行；</li><li>1000ms：延迟 1000ms 执行。</li> 
 * @method void setCryptoChallengeDelayBefore(string $CryptoChallengeDelayBefore) 设置客户端行为校验的执行方式。取值有：<li>0ms：立即执行；</li><li>100ms：延迟 100ms 执行；</li><li>200ms：延迟 200ms 执行；</li><li>300ms：延迟 300ms 执行；</li><li>400ms：延迟 400ms 执行；</li><li>500ms：延迟 500ms 执行；</li><li>600ms：延迟 600ms 执行；</li><li>700ms：延迟 700ms 执行；</li><li>800ms：延迟 800ms 执行；</li><li>900ms：延迟 900ms 执行；</li><li>1000ms：延迟 1000ms 执行。</li> 
 * @method string getMaxChallengeCountInterval() 获取触发阈值统计的时间窗口，取值有：<li>5s：5 秒内；</li><li>10s：10 秒内；</li><li>15s：15 秒内；</li><li>30s：30 秒内；</li><li>60s：60 秒内；</li><li>5m：5 分钟内；</li><li>10m：10 分钟内；</li><li>30m：30 分钟内；</li><li>60m：60 分钟内。</li> 
 * @method void setMaxChallengeCountInterval(string $MaxChallengeCountInterval) 设置触发阈值统计的时间窗口，取值有：<li>5s：5 秒内；</li><li>10s：10 秒内；</li><li>15s：15 秒内；</li><li>30s：30 秒内；</li><li>60s：60 秒内；</li><li>5m：5 分钟内；</li><li>10m：10 分钟内；</li><li>30m：30 分钟内；</li><li>60m：60 分钟内。</li> 
 * @method integer getMaxChallengeCountThreshold() 获取触发阈值统计的累计次数，取值范围 1 ~ 100000000。
 * @method void setMaxChallengeCountThreshold(integer $MaxChallengeCountThreshold) 设置触发阈值统计的累计次数，取值范围 1 ~ 100000000。
 * @method SecurityAction getChallengeNotFinishedAction() 获取客户端未启用 JS（未完成检测）时的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method void setChallengeNotFinishedAction(SecurityAction $ChallengeNotFinishedAction) 设置客户端未启用 JS（未完成检测）时的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method SecurityAction getChallengeTimeoutAction() 获取客户端检测超时的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method void setChallengeTimeoutAction(SecurityAction $ChallengeTimeoutAction) 设置客户端检测超时的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method SecurityAction getBotClientAction() 获取Bot 客户端的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method void setBotClientAction(SecurityAction $BotClientAction) 设置Bot 客户端的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 */
class ClientBehaviorDetection extends AbstractModel
{
    /**
     * @var string 工作量证明校验强度。取值有：<li>low：低；</li><li>medium：中；</li><li>high：高。</li>
     */
    public $CryptoChallengeIntensity;

    /**
     * @var string 客户端行为校验的执行方式。取值有：<li>0ms：立即执行；</li><li>100ms：延迟 100ms 执行；</li><li>200ms：延迟 200ms 执行；</li><li>300ms：延迟 300ms 执行；</li><li>400ms：延迟 400ms 执行；</li><li>500ms：延迟 500ms 执行；</li><li>600ms：延迟 600ms 执行；</li><li>700ms：延迟 700ms 执行；</li><li>800ms：延迟 800ms 执行；</li><li>900ms：延迟 900ms 执行；</li><li>1000ms：延迟 1000ms 执行。</li> 
     */
    public $CryptoChallengeDelayBefore;

    /**
     * @var string 触发阈值统计的时间窗口，取值有：<li>5s：5 秒内；</li><li>10s：10 秒内；</li><li>15s：15 秒内；</li><li>30s：30 秒内；</li><li>60s：60 秒内；</li><li>5m：5 分钟内；</li><li>10m：10 分钟内；</li><li>30m：30 分钟内；</li><li>60m：60 分钟内。</li> 
     */
    public $MaxChallengeCountInterval;

    /**
     * @var integer 触发阈值统计的累计次数，取值范围 1 ~ 100000000。
     */
    public $MaxChallengeCountThreshold;

    /**
     * @var SecurityAction 客户端未启用 JS（未完成检测）时的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     */
    public $ChallengeNotFinishedAction;

    /**
     * @var SecurityAction 客户端检测超时的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     */
    public $ChallengeTimeoutAction;

    /**
     * @var SecurityAction Bot 客户端的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     */
    public $BotClientAction;

    /**
     * @param string $CryptoChallengeIntensity 工作量证明校验强度。取值有：<li>low：低；</li><li>medium：中；</li><li>high：高。</li>
     * @param string $CryptoChallengeDelayBefore 客户端行为校验的执行方式。取值有：<li>0ms：立即执行；</li><li>100ms：延迟 100ms 执行；</li><li>200ms：延迟 200ms 执行；</li><li>300ms：延迟 300ms 执行；</li><li>400ms：延迟 400ms 执行；</li><li>500ms：延迟 500ms 执行；</li><li>600ms：延迟 600ms 执行；</li><li>700ms：延迟 700ms 执行；</li><li>800ms：延迟 800ms 执行；</li><li>900ms：延迟 900ms 执行；</li><li>1000ms：延迟 1000ms 执行。</li> 
     * @param string $MaxChallengeCountInterval 触发阈值统计的时间窗口，取值有：<li>5s：5 秒内；</li><li>10s：10 秒内；</li><li>15s：15 秒内；</li><li>30s：30 秒内；</li><li>60s：60 秒内；</li><li>5m：5 分钟内；</li><li>10m：10 分钟内；</li><li>30m：30 分钟内；</li><li>60m：60 分钟内。</li> 
     * @param integer $MaxChallengeCountThreshold 触发阈值统计的累计次数，取值范围 1 ~ 100000000。
     * @param SecurityAction $ChallengeNotFinishedAction 客户端未启用 JS（未完成检测）时的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     * @param SecurityAction $ChallengeTimeoutAction 客户端检测超时的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     * @param SecurityAction $BotClientAction Bot 客户端的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
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
        if (array_key_exists("CryptoChallengeIntensity",$param) and $param["CryptoChallengeIntensity"] !== null) {
            $this->CryptoChallengeIntensity = $param["CryptoChallengeIntensity"];
        }

        if (array_key_exists("CryptoChallengeDelayBefore",$param) and $param["CryptoChallengeDelayBefore"] !== null) {
            $this->CryptoChallengeDelayBefore = $param["CryptoChallengeDelayBefore"];
        }

        if (array_key_exists("MaxChallengeCountInterval",$param) and $param["MaxChallengeCountInterval"] !== null) {
            $this->MaxChallengeCountInterval = $param["MaxChallengeCountInterval"];
        }

        if (array_key_exists("MaxChallengeCountThreshold",$param) and $param["MaxChallengeCountThreshold"] !== null) {
            $this->MaxChallengeCountThreshold = $param["MaxChallengeCountThreshold"];
        }

        if (array_key_exists("ChallengeNotFinishedAction",$param) and $param["ChallengeNotFinishedAction"] !== null) {
            $this->ChallengeNotFinishedAction = new SecurityAction();
            $this->ChallengeNotFinishedAction->deserialize($param["ChallengeNotFinishedAction"]);
        }

        if (array_key_exists("ChallengeTimeoutAction",$param) and $param["ChallengeTimeoutAction"] !== null) {
            $this->ChallengeTimeoutAction = new SecurityAction();
            $this->ChallengeTimeoutAction->deserialize($param["ChallengeTimeoutAction"]);
        }

        if (array_key_exists("BotClientAction",$param) and $param["BotClientAction"] !== null) {
            $this->BotClientAction = new SecurityAction();
            $this->BotClientAction->deserialize($param["BotClientAction"]);
        }
    }
}
