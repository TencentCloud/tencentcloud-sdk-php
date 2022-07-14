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
 * 获取token时的的配置
 *
 * @method string getInputType() 获取姓名身份证输入方式。
1：传身份证正反面OCR   
2：传身份证正面OCR  
3：用户手动输入  
4：客户后台传入  
默认1
注：使用OCR时仅支持用户修改结果中的姓名
 * @method void setInputType(string $InputType) 设置姓名身份证输入方式。
1：传身份证正反面OCR   
2：传身份证正面OCR  
3：用户手动输入  
4：客户后台传入  
默认1
注：使用OCR时仅支持用户修改结果中的姓名
 * @method boolean getUseIntentionVerify() 获取是否使用意愿核身，默认不使用。注意：如开启使用，则计费标签按【意愿核身】计费标签计价；如不开启，则计费标签按【E证通】计费标签计价，价格详见：[价格说明](https://cloud.tencent.com/document/product/1007/56804)。
 * @method void setUseIntentionVerify(boolean $UseIntentionVerify) 设置是否使用意愿核身，默认不使用。注意：如开启使用，则计费标签按【意愿核身】计费标签计价；如不开启，则计费标签按【E证通】计费标签计价，价格详见：[价格说明](https://cloud.tencent.com/document/product/1007/56804)。
 * @method string getIntentionVerifyText() 获取意愿核身使用的文案，若未使用意愿核身功能，该字段无需传入。默认为空，最长可接受120的字符串长度。
 * @method void setIntentionVerifyText(string $IntentionVerifyText) 设置意愿核身使用的文案，若未使用意愿核身功能，该字段无需传入。默认为空，最长可接受120的字符串长度。
 */
class GetEidTokenConfig extends AbstractModel
{
    /**
     * @var string 姓名身份证输入方式。
1：传身份证正反面OCR   
2：传身份证正面OCR  
3：用户手动输入  
4：客户后台传入  
默认1
注：使用OCR时仅支持用户修改结果中的姓名
     */
    public $InputType;

    /**
     * @var boolean 是否使用意愿核身，默认不使用。注意：如开启使用，则计费标签按【意愿核身】计费标签计价；如不开启，则计费标签按【E证通】计费标签计价，价格详见：[价格说明](https://cloud.tencent.com/document/product/1007/56804)。
     */
    public $UseIntentionVerify;

    /**
     * @var string 意愿核身使用的文案，若未使用意愿核身功能，该字段无需传入。默认为空，最长可接受120的字符串长度。
     */
    public $IntentionVerifyText;

    /**
     * @param string $InputType 姓名身份证输入方式。
1：传身份证正反面OCR   
2：传身份证正面OCR  
3：用户手动输入  
4：客户后台传入  
默认1
注：使用OCR时仅支持用户修改结果中的姓名
     * @param boolean $UseIntentionVerify 是否使用意愿核身，默认不使用。注意：如开启使用，则计费标签按【意愿核身】计费标签计价；如不开启，则计费标签按【E证通】计费标签计价，价格详见：[价格说明](https://cloud.tencent.com/document/product/1007/56804)。
     * @param string $IntentionVerifyText 意愿核身使用的文案，若未使用意愿核身功能，该字段无需传入。默认为空，最长可接受120的字符串长度。
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

        if (array_key_exists("IntentionVerifyText",$param) and $param["IntentionVerifyText"] !== null) {
            $this->IntentionVerifyText = $param["IntentionVerifyText"];
        }
    }
}
