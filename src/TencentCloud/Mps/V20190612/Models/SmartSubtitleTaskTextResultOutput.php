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
 * 智能字幕识别结果。
 *
 * @method array getRecognizeSubtitleResult() 获取识别字幕结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecognizeSubtitleResult(array $RecognizeSubtitleResult) 设置识别字幕结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTransSubtitleResult() 获取翻译字幕结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransSubtitleResult(array $TransSubtitleResult) 设置翻译字幕结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskOutputStorage getOutputStorage() 获取字幕文件存储位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置字幕文件存储位置
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmartSubtitleTaskTextResultOutput extends AbstractModel
{
    /**
     * @var array 识别字幕结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecognizeSubtitleResult;

    /**
     * @var array 翻译字幕结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransSubtitleResult;

    /**
     * @var TaskOutputStorage 字幕文件存储位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @param array $RecognizeSubtitleResult 识别字幕结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TransSubtitleResult 翻译字幕结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskOutputStorage $OutputStorage 字幕文件存储位置
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
        if (array_key_exists("RecognizeSubtitleResult",$param) and $param["RecognizeSubtitleResult"] !== null) {
            $this->RecognizeSubtitleResult = [];
            foreach ($param["RecognizeSubtitleResult"] as $key => $value){
                $obj = new SubtitleResult();
                $obj->deserialize($value);
                array_push($this->RecognizeSubtitleResult, $obj);
            }
        }

        if (array_key_exists("TransSubtitleResult",$param) and $param["TransSubtitleResult"] !== null) {
            $this->TransSubtitleResult = [];
            foreach ($param["TransSubtitleResult"] as $key => $value){
                $obj = new SubtitleResult();
                $obj->deserialize($value);
                array_push($this->TransSubtitleResult, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
