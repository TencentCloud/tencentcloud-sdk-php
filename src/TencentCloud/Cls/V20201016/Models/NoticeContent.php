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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知内容模板详细配置
 *
 * @method string getType() 获取渠道类型

Email:邮件;Sms:短信;WeChat:微信;Phone:电话;WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调;
 * @method void setType(string $Type) 设置渠道类型

Email:邮件;Sms:短信;WeChat:微信;Phone:电话;WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调;
 * @method NoticeContentInfo getTriggerContent() 获取告警触发通知内容模板。
 * @method void setTriggerContent(NoticeContentInfo $TriggerContent) 设置告警触发通知内容模板。
 * @method NoticeContentInfo getRecoveryContent() 获取告警恢复通知内容模板。
 * @method void setRecoveryContent(NoticeContentInfo $RecoveryContent) 设置告警恢复通知内容模板。
 */
class NoticeContent extends AbstractModel
{
    /**
     * @var string 渠道类型

Email:邮件;Sms:短信;WeChat:微信;Phone:电话;WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调;
     */
    public $Type;

    /**
     * @var NoticeContentInfo 告警触发通知内容模板。
     */
    public $TriggerContent;

    /**
     * @var NoticeContentInfo 告警恢复通知内容模板。
     */
    public $RecoveryContent;

    /**
     * @param string $Type 渠道类型

Email:邮件;Sms:短信;WeChat:微信;Phone:电话;WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调;
     * @param NoticeContentInfo $TriggerContent 告警触发通知内容模板。
     * @param NoticeContentInfo $RecoveryContent 告警恢复通知内容模板。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TriggerContent",$param) and $param["TriggerContent"] !== null) {
            $this->TriggerContent = new NoticeContentInfo();
            $this->TriggerContent->deserialize($param["TriggerContent"]);
        }

        if (array_key_exists("RecoveryContent",$param) and $param["RecoveryContent"] !== null) {
            $this->RecoveryContent = new NoticeContentInfo();
            $this->RecoveryContent->deserialize($param["RecoveryContent"]);
        }
    }
}
