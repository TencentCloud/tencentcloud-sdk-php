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
 * RuleId相关配置
 *
 * @method boolean getIntentionRecognition() 获取意愿核身过程中识别用户的回答意图，开启后除了IntentionQuestions的Answers列表中的标准回答会通过，近似意图的回答也会通过，默认开启。
 * @method void setIntentionRecognition(boolean $IntentionRecognition) 设置意愿核身过程中识别用户的回答意图，开启后除了IntentionQuestions的Answers列表中的标准回答会通过，近似意图的回答也会通过，默认开启。
 * @method integer getIntentionType() 获取意愿核身类型，默认为0：
0：问答模式，DetectAuth接口需要传入IntentionQuestions字段；
1：点头模式，DetectAuth接口需要传入IntentionActions字段；
 * @method void setIntentionType(integer $IntentionType) 设置意愿核身类型，默认为0：
0：问答模式，DetectAuth接口需要传入IntentionQuestions字段；
1：点头模式，DetectAuth接口需要传入IntentionActions字段；
 * @method boolean getMouthOpenRecognition() 获取用户语音回答过程中是否开启张嘴识别检测，默认不开启，仅在意愿核身问答模式中使用。
 * @method void setMouthOpenRecognition(boolean $MouthOpenRecognition) 设置用户语音回答过程中是否开启张嘴识别检测，默认不开启，仅在意愿核身问答模式中使用。
 */
class RuleIdConfig extends AbstractModel
{
    /**
     * @var boolean 意愿核身过程中识别用户的回答意图，开启后除了IntentionQuestions的Answers列表中的标准回答会通过，近似意图的回答也会通过，默认开启。
     */
    public $IntentionRecognition;

    /**
     * @var integer 意愿核身类型，默认为0：
0：问答模式，DetectAuth接口需要传入IntentionQuestions字段；
1：点头模式，DetectAuth接口需要传入IntentionActions字段；
     */
    public $IntentionType;

    /**
     * @var boolean 用户语音回答过程中是否开启张嘴识别检测，默认不开启，仅在意愿核身问答模式中使用。
     */
    public $MouthOpenRecognition;

    /**
     * @param boolean $IntentionRecognition 意愿核身过程中识别用户的回答意图，开启后除了IntentionQuestions的Answers列表中的标准回答会通过，近似意图的回答也会通过，默认开启。
     * @param integer $IntentionType 意愿核身类型，默认为0：
0：问答模式，DetectAuth接口需要传入IntentionQuestions字段；
1：点头模式，DetectAuth接口需要传入IntentionActions字段；
     * @param boolean $MouthOpenRecognition 用户语音回答过程中是否开启张嘴识别检测，默认不开启，仅在意愿核身问答模式中使用。
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
        if (array_key_exists("IntentionRecognition",$param) and $param["IntentionRecognition"] !== null) {
            $this->IntentionRecognition = $param["IntentionRecognition"];
        }

        if (array_key_exists("IntentionType",$param) and $param["IntentionType"] !== null) {
            $this->IntentionType = $param["IntentionType"];
        }

        if (array_key_exists("MouthOpenRecognition",$param) and $param["MouthOpenRecognition"] !== null) {
            $this->MouthOpenRecognition = $param["MouthOpenRecognition"];
        }
    }
}
