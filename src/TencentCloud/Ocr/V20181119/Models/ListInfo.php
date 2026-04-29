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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于展示结构化提取出的结果与输入给模型的提示词和模型的输出
 *
 * @method string getQueryInfo() 获取<p>推理任务的完整提示词。注：仅当QueryType=1/2/3时有效，否则返回为null。</p>
 * @method void setQueryInfo(string $QueryInfo) 设置<p>推理任务的完整提示词。注：仅当QueryType=1/2/3时有效，否则返回为null。</p>
 * @method string getAnswer() 获取<p>根据QueryType对应任务的返回内容。注：仅当QueryType=1/2/3时有效，其他情况为null。</p>
 * @method void setAnswer(string $Answer) 设置<p>根据QueryType对应任务的返回内容。注：仅当QueryType=1/2/3时有效，其他情况为null。</p>
 * @method array getExtractFields() 获取<p>结构化提取结果。注：仅当QueryType=4时有效，否则返回null。</p>
 * @method void setExtractFields(array $ExtractFields) 设置<p>结构化提取结果。注：仅当QueryType=4时有效，否则返回null。</p>
 * @method array getTextDetections() 获取<p>检测到的文本信息，包括内容、坐标以及旋转纠正后的坐标等，具体内容请参见 TextDetection。注：仅当QueryType=0时TextDetections不为空，否则返回null。</p>
 * @method void setTextDetections(array $TextDetections) 设置<p>检测到的文本信息，包括内容、坐标以及旋转纠正后的坐标等，具体内容请参见 TextDetection。注：仅当QueryType=0时TextDetections不为空，否则返回null。</p>
 */
class ListInfo extends AbstractModel
{
    /**
     * @var string <p>推理任务的完整提示词。注：仅当QueryType=1/2/3时有效，否则返回为null。</p>
     */
    public $QueryInfo;

    /**
     * @var string <p>根据QueryType对应任务的返回内容。注：仅当QueryType=1/2/3时有效，其他情况为null。</p>
     */
    public $Answer;

    /**
     * @var array <p>结构化提取结果。注：仅当QueryType=4时有效，否则返回null。</p>
     */
    public $ExtractFields;

    /**
     * @var array <p>检测到的文本信息，包括内容、坐标以及旋转纠正后的坐标等，具体内容请参见 TextDetection。注：仅当QueryType=0时TextDetections不为空，否则返回null。</p>
     */
    public $TextDetections;

    /**
     * @param string $QueryInfo <p>推理任务的完整提示词。注：仅当QueryType=1/2/3时有效，否则返回为null。</p>
     * @param string $Answer <p>根据QueryType对应任务的返回内容。注：仅当QueryType=1/2/3时有效，其他情况为null。</p>
     * @param array $ExtractFields <p>结构化提取结果。注：仅当QueryType=4时有效，否则返回null。</p>
     * @param array $TextDetections <p>检测到的文本信息，包括内容、坐标以及旋转纠正后的坐标等，具体内容请参见 TextDetection。注：仅当QueryType=0时TextDetections不为空，否则返回null。</p>
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
        if (array_key_exists("QueryInfo",$param) and $param["QueryInfo"] !== null) {
            $this->QueryInfo = $param["QueryInfo"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("ExtractFields",$param) and $param["ExtractFields"] !== null) {
            $this->ExtractFields = [];
            foreach ($param["ExtractFields"] as $key => $value){
                $obj = new FieldsInfo();
                $obj->deserialize($value);
                array_push($this->ExtractFields, $obj);
            }
        }

        if (array_key_exists("TextDetections",$param) and $param["TextDetections"] !== null) {
            $this->TextDetections = [];
            foreach ($param["TextDetections"] as $key => $value){
                $obj = new TextDetection();
                $obj->deserialize($value);
                array_push($this->TextDetections, $obj);
            }
        }
    }
}
