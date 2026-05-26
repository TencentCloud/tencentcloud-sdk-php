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
 * 文本全文识别片段。
 *
 * @method float getConfidence() 获取<p>识别片段置信度。取值：0~100。</p>
 * @method void setConfidence(float $Confidence) 设置<p>识别片段置信度。取值：0~100。</p>
 * @method array getAreaCoordSet() 获取<p>识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。</p>
 * @method void setAreaCoordSet(array $AreaCoordSet) 设置<p>识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。</p>
 * @method string getText() 获取<p>识别文本。</p>
 * @method void setText(string $Text) 设置<p>识别文本。</p>
 */
class AiRecognitionTaskOcrFullTextSegmentTextItem extends AbstractModel
{
    /**
     * @var float <p>识别片段置信度。取值：0~100。</p>
     */
    public $Confidence;

    /**
     * @var array <p>识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。</p>
     */
    public $AreaCoordSet;

    /**
     * @var string <p>识别文本。</p>
     */
    public $Text;

    /**
     * @param float $Confidence <p>识别片段置信度。取值：0~100。</p>
     * @param array $AreaCoordSet <p>识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。</p>
     * @param string $Text <p>识别文本。</p>
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}
