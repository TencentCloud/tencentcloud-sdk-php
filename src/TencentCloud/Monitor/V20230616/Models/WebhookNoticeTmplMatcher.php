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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警通知自定义Webhook的通知内容模板匹配器
 *
 * @method array getMatchingStatus() 获取匹配状态 Invalid; Trigger 告警触发; Recovery 告警恢复
 * @method void setMatchingStatus(array $MatchingStatus) 设置匹配状态 Invalid; Trigger 告警触发; Recovery 告警恢复
 * @method WebhookNoticeTmpl getTemplate() 获取自定义Webhook内容模板
 * @method void setTemplate(WebhookNoticeTmpl $Template) 设置自定义Webhook内容模板
 */
class WebhookNoticeTmplMatcher extends AbstractModel
{
    /**
     * @var array 匹配状态 Invalid; Trigger 告警触发; Recovery 告警恢复
     */
    public $MatchingStatus;

    /**
     * @var WebhookNoticeTmpl 自定义Webhook内容模板
     */
    public $Template;

    /**
     * @param array $MatchingStatus 匹配状态 Invalid; Trigger 告警触发; Recovery 告警恢复
     * @param WebhookNoticeTmpl $Template 自定义Webhook内容模板
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
        if (array_key_exists("MatchingStatus",$param) and $param["MatchingStatus"] !== null) {
            $this->MatchingStatus = $param["MatchingStatus"];
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new WebhookNoticeTmpl();
            $this->Template->deserialize($param["Template"]);
        }
    }
}
