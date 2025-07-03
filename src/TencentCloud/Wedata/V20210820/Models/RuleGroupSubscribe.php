<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据质量规则组订阅信息
 *
 * @method integer getRuleGroupId() 获取规则组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceivers() 获取订阅接收人列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceivers(array $Receivers) 设置订阅接收人列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubscribeType() 获取订阅方式 1.邮件email  2.短信sms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscribeType(array $SubscribeType) 设置订阅方式 1.邮件email  2.短信sms
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWebHooks() 获取群机器人配置的webhook信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebHooks(array $WebHooks) 设置群机器人配置的webhook信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取规则Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmMessageRule() 获取发送对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmMessageRule(string $AlarmMessageRule) 设置发送对象
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleGroupSubscribe extends AbstractModel
{
    /**
     * @var integer 规则组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var array 订阅接收人列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Receivers;

    /**
     * @var array 订阅方式 1.邮件email  2.短信sms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubscribeType;

    /**
     * @var array 群机器人配置的webhook信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebHooks;

    /**
     * @var integer 规则Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var string 发送对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmMessageRule;

    /**
     * @param integer $RuleGroupId 规则组Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Receivers 订阅接收人列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubscribeType 订阅方式 1.邮件email  2.短信sms
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WebHooks 群机器人配置的webhook信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 规则Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmMessageRule 发送对象
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = [];
            foreach ($param["Receivers"] as $key => $value){
                $obj = new SubscribeReceiver();
                $obj->deserialize($value);
                array_push($this->Receivers, $obj);
            }
        }

        if (array_key_exists("SubscribeType",$param) and $param["SubscribeType"] !== null) {
            $this->SubscribeType = $param["SubscribeType"];
        }

        if (array_key_exists("WebHooks",$param) and $param["WebHooks"] !== null) {
            $this->WebHooks = [];
            foreach ($param["WebHooks"] as $key => $value){
                $obj = new SubscribeWebHook();
                $obj->deserialize($value);
                array_push($this->WebHooks, $obj);
            }
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("AlarmMessageRule",$param) and $param["AlarmMessageRule"] !== null) {
            $this->AlarmMessageRule = $param["AlarmMessageRule"];
        }
    }
}
