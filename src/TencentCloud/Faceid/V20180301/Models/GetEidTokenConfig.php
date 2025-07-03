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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取token时的配置
 *
 * @method string getInputType() 获取姓名身份证输入方式。
- 取值范围：
1：传身份证正反面OCR。
2：传身份证正面OCR。
3：用户手动输入。
4：客户后台传入。
- 默认值：1。
- 注意：使用OCR时仅支持用户修改结果中的姓名。
 * @method void setInputType(string $InputType) 设置姓名身份证输入方式。
- 取值范围：
1：传身份证正反面OCR。
2：传身份证正面OCR。
3：用户手动输入。
4：客户后台传入。
- 默认值：1。
- 注意：使用OCR时仅支持用户修改结果中的姓名。
 * @method boolean getUseIntentionVerify() 获取是否使用意愿核身。

- 默认不使用。
- 注意：如开启使用，则计费标签按【意愿核身】计费标签计价；如不开启，则计费标签按【E证通】计费标签计价，价格详见：[价格说明](https://cloud.tencent.com/document/product/1007/56804)。
 * @method void setUseIntentionVerify(boolean $UseIntentionVerify) 设置是否使用意愿核身。

- 默认不使用。
- 注意：如开启使用，则计费标签按【意愿核身】计费标签计价；如不开启，则计费标签按【E证通】计费标签计价，价格详见：[价格说明](https://cloud.tencent.com/document/product/1007/56804)。
 * @method string getIntentionMode() 获取意愿核身模式。
- 取值范围：
1：语音朗读模式。
2：语音问答模式。
3：点头确认模式。
- 默认值为1。
 * @method void setIntentionMode(string $IntentionMode) 设置意愿核身模式。
- 取值范围：
1：语音朗读模式。
2：语音问答模式。
3：点头确认模式。
- 默认值为1。
 * @method string getIntentionVerifyText() 获取意愿核身朗读模式使用的文案。
- 若未使用意愿核身朗读功能，该字段无需传入。
- 默认为空，最长可接受120的字符串长度。
 * @method void setIntentionVerifyText(string $IntentionVerifyText) 设置意愿核身朗读模式使用的文案。
- 若未使用意愿核身朗读功能，该字段无需传入。
- 默认为空，最长可接受120的字符串长度。
 * @method array getIntentionQuestions() 获取意愿核身问答模式的配置列表。
- 问答模式支持1-10轮（不超过10轮）的意愿确认。
 * @method void setIntentionQuestions(array $IntentionQuestions) 设置意愿核身问答模式的配置列表。
- 问答模式支持1-10轮（不超过10轮）的意愿确认。
 * @method array getIntentionActions() 获取意愿核身（点头确认模式）使用的文案。
- 若未使用意愿核身（点头确认模式），则该字段无需传入。
- 默认为空，最长可接受150的字符串长度。
- 点头确认模式支持1-10轮（不超过10轮）的意愿确认。
 * @method void setIntentionActions(array $IntentionActions) 设置意愿核身（点头确认模式）使用的文案。
- 若未使用意愿核身（点头确认模式），则该字段无需传入。
- 默认为空，最长可接受150的字符串长度。
- 点头确认模式支持1-10轮（不超过10轮）的意愿确认。
 * @method boolean getIntentionRecognition() 获取意愿核身过程中识别用户的回答意图。
- 开启后除了IntentionQuestions的Answers列表中的标准回答会通过，近似意图的回答也会通过。
- 默认开启。
 * @method void setIntentionRecognition(boolean $IntentionRecognition) 设置意愿核身过程中识别用户的回答意图。
- 开启后除了IntentionQuestions的Answers列表中的标准回答会通过，近似意图的回答也会通过。
- 默认开启。
 * @method boolean getIsSupportHMTResidentPermitOCR() 获取是否支持港澳台居住证识别。
 * @method void setIsSupportHMTResidentPermitOCR(boolean $IsSupportHMTResidentPermitOCR) 设置是否支持港澳台居住证识别。
 * @method boolean getMouthOpenRecognition() 获取用户语音回答过程中是否开启张嘴识别检测。
- 默认不开启。
- 仅在意愿核身问答模式中使用。
 * @method void setMouthOpenRecognition(boolean $MouthOpenRecognition) 设置用户语音回答过程中是否开启张嘴识别检测。
- 默认不开启。
- 仅在意愿核身问答模式中使用。
 * @method integer getSpeed() 获取意愿核身语音播报速度。
- 配置后问答模式和点头模式的语音播报环节都会生效。
- 默认值为0。
- 取值范围： 
0：智能语速（根据播报文案的长度自动调整语音播报速度）。
1：固定1倍速。
2：固定1.2倍速。
3：固定1.5倍速。
 * @method void setSpeed(integer $Speed) 设置意愿核身语音播报速度。
- 配置后问答模式和点头模式的语音播报环节都会生效。
- 默认值为0。
- 取值范围： 
0：智能语速（根据播报文案的长度自动调整语音播报速度）。
1：固定1倍速。
2：固定1.2倍速。
3：固定1.5倍速。
 */
class GetEidTokenConfig extends AbstractModel
{
    /**
     * @var string 姓名身份证输入方式。
- 取值范围：
1：传身份证正反面OCR。
2：传身份证正面OCR。
3：用户手动输入。
4：客户后台传入。
- 默认值：1。
- 注意：使用OCR时仅支持用户修改结果中的姓名。
     */
    public $InputType;

    /**
     * @var boolean 是否使用意愿核身。

- 默认不使用。
- 注意：如开启使用，则计费标签按【意愿核身】计费标签计价；如不开启，则计费标签按【E证通】计费标签计价，价格详见：[价格说明](https://cloud.tencent.com/document/product/1007/56804)。
     */
    public $UseIntentionVerify;

    /**
     * @var string 意愿核身模式。
- 取值范围：
1：语音朗读模式。
2：语音问答模式。
3：点头确认模式。
- 默认值为1。
     */
    public $IntentionMode;

    /**
     * @var string 意愿核身朗读模式使用的文案。
- 若未使用意愿核身朗读功能，该字段无需传入。
- 默认为空，最长可接受120的字符串长度。
     */
    public $IntentionVerifyText;

    /**
     * @var array 意愿核身问答模式的配置列表。
- 问答模式支持1-10轮（不超过10轮）的意愿确认。
     */
    public $IntentionQuestions;

    /**
     * @var array 意愿核身（点头确认模式）使用的文案。
- 若未使用意愿核身（点头确认模式），则该字段无需传入。
- 默认为空，最长可接受150的字符串长度。
- 点头确认模式支持1-10轮（不超过10轮）的意愿确认。
     */
    public $IntentionActions;

    /**
     * @var boolean 意愿核身过程中识别用户的回答意图。
- 开启后除了IntentionQuestions的Answers列表中的标准回答会通过，近似意图的回答也会通过。
- 默认开启。
     */
    public $IntentionRecognition;

    /**
     * @var boolean 是否支持港澳台居住证识别。
     */
    public $IsSupportHMTResidentPermitOCR;

    /**
     * @var boolean 用户语音回答过程中是否开启张嘴识别检测。
- 默认不开启。
- 仅在意愿核身问答模式中使用。
     */
    public $MouthOpenRecognition;

    /**
     * @var integer 意愿核身语音播报速度。
- 配置后问答模式和点头模式的语音播报环节都会生效。
- 默认值为0。
- 取值范围： 
0：智能语速（根据播报文案的长度自动调整语音播报速度）。
1：固定1倍速。
2：固定1.2倍速。
3：固定1.5倍速。
     */
    public $Speed;

    /**
     * @param string $InputType 姓名身份证输入方式。
- 取值范围：
1：传身份证正反面OCR。
2：传身份证正面OCR。
3：用户手动输入。
4：客户后台传入。
- 默认值：1。
- 注意：使用OCR时仅支持用户修改结果中的姓名。
     * @param boolean $UseIntentionVerify 是否使用意愿核身。

- 默认不使用。
- 注意：如开启使用，则计费标签按【意愿核身】计费标签计价；如不开启，则计费标签按【E证通】计费标签计价，价格详见：[价格说明](https://cloud.tencent.com/document/product/1007/56804)。
     * @param string $IntentionMode 意愿核身模式。
- 取值范围：
1：语音朗读模式。
2：语音问答模式。
3：点头确认模式。
- 默认值为1。
     * @param string $IntentionVerifyText 意愿核身朗读模式使用的文案。
- 若未使用意愿核身朗读功能，该字段无需传入。
- 默认为空，最长可接受120的字符串长度。
     * @param array $IntentionQuestions 意愿核身问答模式的配置列表。
- 问答模式支持1-10轮（不超过10轮）的意愿确认。
     * @param array $IntentionActions 意愿核身（点头确认模式）使用的文案。
- 若未使用意愿核身（点头确认模式），则该字段无需传入。
- 默认为空，最长可接受150的字符串长度。
- 点头确认模式支持1-10轮（不超过10轮）的意愿确认。
     * @param boolean $IntentionRecognition 意愿核身过程中识别用户的回答意图。
- 开启后除了IntentionQuestions的Answers列表中的标准回答会通过，近似意图的回答也会通过。
- 默认开启。
     * @param boolean $IsSupportHMTResidentPermitOCR 是否支持港澳台居住证识别。
     * @param boolean $MouthOpenRecognition 用户语音回答过程中是否开启张嘴识别检测。
- 默认不开启。
- 仅在意愿核身问答模式中使用。
     * @param integer $Speed 意愿核身语音播报速度。
- 配置后问答模式和点头模式的语音播报环节都会生效。
- 默认值为0。
- 取值范围： 
0：智能语速（根据播报文案的长度自动调整语音播报速度）。
1：固定1倍速。
2：固定1.2倍速。
3：固定1.5倍速。
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
        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("UseIntentionVerify",$param) and $param["UseIntentionVerify"] !== null) {
            $this->UseIntentionVerify = $param["UseIntentionVerify"];
        }

        if (array_key_exists("IntentionMode",$param) and $param["IntentionMode"] !== null) {
            $this->IntentionMode = $param["IntentionMode"];
        }

        if (array_key_exists("IntentionVerifyText",$param) and $param["IntentionVerifyText"] !== null) {
            $this->IntentionVerifyText = $param["IntentionVerifyText"];
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
                $obj = new IntentionActionConfig();
                $obj->deserialize($value);
                array_push($this->IntentionActions, $obj);
            }
        }

        if (array_key_exists("IntentionRecognition",$param) and $param["IntentionRecognition"] !== null) {
            $this->IntentionRecognition = $param["IntentionRecognition"];
        }

        if (array_key_exists("IsSupportHMTResidentPermitOCR",$param) and $param["IsSupportHMTResidentPermitOCR"] !== null) {
            $this->IsSupportHMTResidentPermitOCR = $param["IsSupportHMTResidentPermitOCR"];
        }

        if (array_key_exists("MouthOpenRecognition",$param) and $param["MouthOpenRecognition"] !== null) {
            $this->MouthOpenRecognition = $param["MouthOpenRecognition"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }
    }
}
