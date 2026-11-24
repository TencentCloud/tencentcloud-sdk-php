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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频核身意图配置，可指定问答模式或者点头模式的语音文本。

注: `视频认证为白名单功能，使用前请联系对接的客户经理沟通。`
 *
 * @method integer getIntentionType() 获取<p>视频认证类型，支持以下类型</p><ul><li>1 : 问答模式</li><li>2 : 点头模式</li></ul><p>注: <code>视频认证为白名单功能，使用前请联系对接的客户经理沟通。</code></p>
 * @method void setIntentionType(integer $IntentionType) 设置<p>视频认证类型，支持以下类型</p><ul><li>1 : 问答模式</li><li>2 : 点头模式</li></ul><p>注: <code>视频认证为白名单功能，使用前请联系对接的客户经理沟通。</code></p>
 * @method array getIntentionQuestions() 获取<p>意愿核身语音问答模式（即语音播报+语音回答）使用的文案，包括：系统语音播报的文本、需要核验的标准文本。支持传入1～9轮问答，最多为9轮。注：<code>选择问答模式时，此字段可不传，不传则使用默认语音文本：请问，您是否同意签署本协议？可语音回复“同意”或“不同意”。</code></p>
 * @method void setIntentionQuestions(array $IntentionQuestions) 设置<p>意愿核身语音问答模式（即语音播报+语音回答）使用的文案，包括：系统语音播报的文本、需要核验的标准文本。支持传入1～9轮问答，最多为9轮。注：<code>选择问答模式时，此字段可不传，不传则使用默认语音文本：请问，您是否同意签署本协议？可语音回复“同意”或“不同意”。</code></p>
 * @method array getIntentionActions() 获取<p>意愿核身（点头确认模式）使用的文案，若未使用意愿核身（点头确认模式），则该字段无需传入。支持传入1～9轮点头确认文本，最多支持9轮。注：<code>选择点头模式时，此字段可不传，不传则使用默认语音文本：请问，您是否同意签署本协议？可点头同意。</code></p>
 * @method void setIntentionActions(array $IntentionActions) 设置<p>意愿核身（点头确认模式）使用的文案，若未使用意愿核身（点头确认模式），则该字段无需传入。支持传入1～9轮点头确认文本，最多支持9轮。注：<code>选择点头模式时，此字段可不传，不传则使用默认语音文本：请问，您是否同意签署本协议？可点头同意。</code></p>
 * @method RuleIdConfig getRuleIdConfig() 获取<p>视频核身相关配置</p>
 * @method void setRuleIdConfig(RuleIdConfig $RuleIdConfig) 设置<p>视频核身相关配置</p>
 */
class Intention extends AbstractModel
{
    /**
     * @var integer <p>视频认证类型，支持以下类型</p><ul><li>1 : 问答模式</li><li>2 : 点头模式</li></ul><p>注: <code>视频认证为白名单功能，使用前请联系对接的客户经理沟通。</code></p>
     */
    public $IntentionType;

    /**
     * @var array <p>意愿核身语音问答模式（即语音播报+语音回答）使用的文案，包括：系统语音播报的文本、需要核验的标准文本。支持传入1～9轮问答，最多为9轮。注：<code>选择问答模式时，此字段可不传，不传则使用默认语音文本：请问，您是否同意签署本协议？可语音回复“同意”或“不同意”。</code></p>
     */
    public $IntentionQuestions;

    /**
     * @var array <p>意愿核身（点头确认模式）使用的文案，若未使用意愿核身（点头确认模式），则该字段无需传入。支持传入1～9轮点头确认文本，最多支持9轮。注：<code>选择点头模式时，此字段可不传，不传则使用默认语音文本：请问，您是否同意签署本协议？可点头同意。</code></p>
     */
    public $IntentionActions;

    /**
     * @var RuleIdConfig <p>视频核身相关配置</p>
     */
    public $RuleIdConfig;

    /**
     * @param integer $IntentionType <p>视频认证类型，支持以下类型</p><ul><li>1 : 问答模式</li><li>2 : 点头模式</li></ul><p>注: <code>视频认证为白名单功能，使用前请联系对接的客户经理沟通。</code></p>
     * @param array $IntentionQuestions <p>意愿核身语音问答模式（即语音播报+语音回答）使用的文案，包括：系统语音播报的文本、需要核验的标准文本。支持传入1～9轮问答，最多为9轮。注：<code>选择问答模式时，此字段可不传，不传则使用默认语音文本：请问，您是否同意签署本协议？可语音回复“同意”或“不同意”。</code></p>
     * @param array $IntentionActions <p>意愿核身（点头确认模式）使用的文案，若未使用意愿核身（点头确认模式），则该字段无需传入。支持传入1～9轮点头确认文本，最多支持9轮。注：<code>选择点头模式时，此字段可不传，不传则使用默认语音文本：请问，您是否同意签署本协议？可点头同意。</code></p>
     * @param RuleIdConfig $RuleIdConfig <p>视频核身相关配置</p>
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
        if (array_key_exists("IntentionType",$param) and $param["IntentionType"] !== null) {
            $this->IntentionType = $param["IntentionType"];
        }

        if (array_key_exists("IntentionQuestions",$param) and $param["IntentionQuestions"] !== null) {
            $this->IntentionQuestions = [];
            foreach ($param["IntentionQuestions"] as $key => $value){
                $obj = new IntentionQuestion();
                $obj->deserialize($value);
                array_push($this->IntentionQuestions, $obj);
            }
        }

        if (array_key_exists("IntentionActions",$param) and $param["IntentionActions"] !== null) {
            $this->IntentionActions = [];
            foreach ($param["IntentionActions"] as $key => $value){
                $obj = new IntentionAction();
                $obj->deserialize($value);
                array_push($this->IntentionActions, $obj);
            }
        }

        if (array_key_exists("RuleIdConfig",$param) and $param["RuleIdConfig"] !== null) {
            $this->RuleIdConfig = new RuleIdConfig();
            $this->RuleIdConfig->deserialize($param["RuleIdConfig"]);
        }
    }
}
