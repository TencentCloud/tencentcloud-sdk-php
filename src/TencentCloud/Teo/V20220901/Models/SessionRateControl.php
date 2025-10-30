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
 * 会话速率和周期特征校验配置。
 *
 * @method string getEnabled() 获取会话速率和周期特征校验配置是否开启。取值有：<li>on：启用</li><li>off：关闭</li>
 * @method void setEnabled(string $Enabled) 设置会话速率和周期特征校验配置是否开启。取值有：<li>on：启用</li><li>off：关闭</li>
 * @method SecurityAction getHighRateSessionAction() 获取会话速率和周期特征校验高风险的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method void setHighRateSessionAction(SecurityAction $HighRateSessionAction) 设置会话速率和周期特征校验高风险的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method SecurityAction getMidRateSessionAction() 获取会话速率和周期特征校验中风险的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method void setMidRateSessionAction(SecurityAction $MidRateSessionAction) 设置会话速率和周期特征校验中风险的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method SecurityAction getLowRateSessionAction() 获取会话速率和周期特征校验低风险的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method void setLowRateSessionAction(SecurityAction $LowRateSessionAction) 设置会话速率和周期特征校验低风险的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 */
class SessionRateControl extends AbstractModel
{
    /**
     * @var string 会话速率和周期特征校验配置是否开启。取值有：<li>on：启用</li><li>off：关闭</li>
     */
    public $Enabled;

    /**
     * @var SecurityAction 会话速率和周期特征校验高风险的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     */
    public $HighRateSessionAction;

    /**
     * @var SecurityAction 会话速率和周期特征校验中风险的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     */
    public $MidRateSessionAction;

    /**
     * @var SecurityAction 会话速率和周期特征校验低风险的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     */
    public $LowRateSessionAction;

    /**
     * @param string $Enabled 会话速率和周期特征校验配置是否开启。取值有：<li>on：启用</li><li>off：关闭</li>
     * @param SecurityAction $HighRateSessionAction 会话速率和周期特征校验高风险的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     * @param SecurityAction $MidRateSessionAction 会话速率和周期特征校验中风险的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     * @param SecurityAction $LowRateSessionAction 会话速率和周期特征校验低风险的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("HighRateSessionAction",$param) and $param["HighRateSessionAction"] !== null) {
            $this->HighRateSessionAction = new SecurityAction();
            $this->HighRateSessionAction->deserialize($param["HighRateSessionAction"]);
        }

        if (array_key_exists("MidRateSessionAction",$param) and $param["MidRateSessionAction"] !== null) {
            $this->MidRateSessionAction = new SecurityAction();
            $this->MidRateSessionAction->deserialize($param["MidRateSessionAction"]);
        }

        if (array_key_exists("LowRateSessionAction",$param) and $param["LowRateSessionAction"] !== null) {
            $this->LowRateSessionAction = new SecurityAction();
            $this->LowRateSessionAction->deserialize($param["LowRateSessionAction"]);
        }
    }
}
