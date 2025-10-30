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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能字幕结果。
 *
 * @method string getType() 获取任务的类型，取值范围： 
<li>AsrFullTextRecognition：语音全文识别，</li> 
<li>TransTextRecognition：语音翻译。</li>
 * @method void setType(string $Type) 设置任务的类型，取值范围： 
<li>AsrFullTextRecognition：语音全文识别，</li> 
<li>TransTextRecognition：语音翻译。</li>
 * @method SmartSubtitleTaskAsrFullTextResult getAsrFullTextTask() 获取语音全文识别结果，当 Type 为
 AsrFullTextRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrFullTextTask(SmartSubtitleTaskAsrFullTextResult $AsrFullTextTask) 设置语音全文识别结果，当 Type 为
 AsrFullTextRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartSubtitleTaskTransTextResult getTransTextTask() 获取翻译结果，当 Type 为

TransTextRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransTextTask(SmartSubtitleTaskTransTextResult $TransTextTask) 设置翻译结果，当 Type 为

TransTextRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmartSubtitlesResult extends AbstractModel
{
    /**
     * @var string 任务的类型，取值范围： 
<li>AsrFullTextRecognition：语音全文识别，</li> 
<li>TransTextRecognition：语音翻译。</li>
     */
    public $Type;

    /**
     * @var SmartSubtitleTaskAsrFullTextResult 语音全文识别结果，当 Type 为
 AsrFullTextRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrFullTextTask;

    /**
     * @var SmartSubtitleTaskTransTextResult 翻译结果，当 Type 为

TransTextRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransTextTask;

    /**
     * @param string $Type 任务的类型，取值范围： 
<li>AsrFullTextRecognition：语音全文识别，</li> 
<li>TransTextRecognition：语音翻译。</li>
     * @param SmartSubtitleTaskAsrFullTextResult $AsrFullTextTask 语音全文识别结果，当 Type 为
 AsrFullTextRecognition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartSubtitleTaskTransTextResult $TransTextTask 翻译结果，当 Type 为

TransTextRecognition 时有效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AsrFullTextTask",$param) and $param["AsrFullTextTask"] !== null) {
            $this->AsrFullTextTask = new SmartSubtitleTaskAsrFullTextResult();
            $this->AsrFullTextTask->deserialize($param["AsrFullTextTask"]);
        }

        if (array_key_exists("TransTextTask",$param) and $param["TransTextTask"] !== null) {
            $this->TransTextTask = new SmartSubtitleTaskTransTextResult();
            $this->TransTextTask->deserialize($param["TransTextTask"]);
        }
    }
}
