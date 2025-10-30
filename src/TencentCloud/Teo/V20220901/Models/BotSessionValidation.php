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
 * Cookie 校验和会话跟踪行为具体配置。
 *
 * @method string getIssueNewBotSessionCookie() 获取是否更新 Cookie 并校验。取值有：<li>on：更新 Cookie 并校验；</li><li>off：仅校验。</li>
 * @method void setIssueNewBotSessionCookie(string $IssueNewBotSessionCookie) 设置是否更新 Cookie 并校验。取值有：<li>on：更新 Cookie 并校验；</li><li>off：仅校验。</li>
 * @method MaxNewSessionTriggerConfig getMaxNewSessionTriggerConfig() 获取更新 Cookie 并校验时的触发阈值，仅当 IssueNewBotSessionCookie 为 on 时有效。
 * @method void setMaxNewSessionTriggerConfig(MaxNewSessionTriggerConfig $MaxNewSessionTriggerConfig) 设置更新 Cookie 并校验时的触发阈值，仅当 IssueNewBotSessionCookie 为 on 时有效。
 * @method SecurityAction getSessionExpiredAction() 获取未携带 Cookie 或 Cookie 已过期的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method void setSessionExpiredAction(SecurityAction $SessionExpiredAction) 设置未携带 Cookie 或 Cookie 已过期的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method SecurityAction getSessionInvalidAction() 获取不合法 Cookie 的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method void setSessionInvalidAction(SecurityAction $SessionInvalidAction) 设置不合法 Cookie 的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
 * @method SessionRateControl getSessionRateControl() 获取会话速率和周期特征校验的具体配置。
 * @method void setSessionRateControl(SessionRateControl $SessionRateControl) 设置会话速率和周期特征校验的具体配置。
 */
class BotSessionValidation extends AbstractModel
{
    /**
     * @var string 是否更新 Cookie 并校验。取值有：<li>on：更新 Cookie 并校验；</li><li>off：仅校验。</li>
     */
    public $IssueNewBotSessionCookie;

    /**
     * @var MaxNewSessionTriggerConfig 更新 Cookie 并校验时的触发阈值，仅当 IssueNewBotSessionCookie 为 on 时有效。
     */
    public $MaxNewSessionTriggerConfig;

    /**
     * @var SecurityAction 未携带 Cookie 或 Cookie 已过期的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     */
    public $SessionExpiredAction;

    /**
     * @var SecurityAction 不合法 Cookie 的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     */
    public $SessionInvalidAction;

    /**
     * @var SessionRateControl 会话速率和周期特征校验的具体配置。
     */
    public $SessionRateControl;

    /**
     * @param string $IssueNewBotSessionCookie 是否更新 Cookie 并校验。取值有：<li>on：更新 Cookie 并校验；</li><li>off：仅校验。</li>
     * @param MaxNewSessionTriggerConfig $MaxNewSessionTriggerConfig 更新 Cookie 并校验时的触发阈值，仅当 IssueNewBotSessionCookie 为 on 时有效。
     * @param SecurityAction $SessionExpiredAction 未携带 Cookie 或 Cookie 已过期的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     * @param SecurityAction $SessionInvalidAction 不合法 Cookie 的执行动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，其中 DenyActionParameters 中支持 Stall 配置；</li><li>Monitor：观察；</li><li>Allow：等待后响应，其中 AllowActionParameters 需要 MinDelayTime 和 MaxDelayTime 配置。</li>
     * @param SessionRateControl $SessionRateControl 会话速率和周期特征校验的具体配置。
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
        if (array_key_exists("IssueNewBotSessionCookie",$param) and $param["IssueNewBotSessionCookie"] !== null) {
            $this->IssueNewBotSessionCookie = $param["IssueNewBotSessionCookie"];
        }

        if (array_key_exists("MaxNewSessionTriggerConfig",$param) and $param["MaxNewSessionTriggerConfig"] !== null) {
            $this->MaxNewSessionTriggerConfig = new MaxNewSessionTriggerConfig();
            $this->MaxNewSessionTriggerConfig->deserialize($param["MaxNewSessionTriggerConfig"]);
        }

        if (array_key_exists("SessionExpiredAction",$param) and $param["SessionExpiredAction"] !== null) {
            $this->SessionExpiredAction = new SecurityAction();
            $this->SessionExpiredAction->deserialize($param["SessionExpiredAction"]);
        }

        if (array_key_exists("SessionInvalidAction",$param) and $param["SessionInvalidAction"] !== null) {
            $this->SessionInvalidAction = new SecurityAction();
            $this->SessionInvalidAction->deserialize($param["SessionInvalidAction"]);
        }

        if (array_key_exists("SessionRateControl",$param) and $param["SessionRateControl"] !== null) {
            $this->SessionRateControl = new SessionRateControl();
            $this->SessionRateControl->deserialize($param["SessionRateControl"]);
        }
    }
}
