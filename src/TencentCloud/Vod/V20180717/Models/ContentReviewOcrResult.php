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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片Ocr 文字鉴别信息的任务结果类型
 *
 * @method float getConfidence() 获取Ocr 文字鉴别结果的评分，分值为0到100。
 * @method void setConfidence(float $Confidence) 设置Ocr 文字鉴别结果的评分，分值为0到100。
 * @method string getSuggestion() 获取Ocr 文字鉴别的结果建议，取值范围：
<li>pass；</li>
<li>review；</li>
<li>block。</li>
 * @method void setSuggestion(string $Suggestion) 设置Ocr 文字鉴别的结果建议，取值范围：
<li>pass；</li>
<li>review；</li>
<li>block。</li>
 * @method array getKeywordSet() 获取Ocr 文字鉴别的嫌疑关键词列表。
 * @method void setKeywordSet(array $KeywordSet) 设置Ocr 文字鉴别的嫌疑关键词列表。
 * @method array getAreaCoordSet() 获取Ocr 文字鉴别的嫌疑文字出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
 * @method void setAreaCoordSet(array $AreaCoordSet) 设置Ocr 文字鉴别的嫌疑文字出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
 */
class ContentReviewOcrResult extends AbstractModel
{
    /**
     * @var float Ocr 文字鉴别结果的评分，分值为0到100。
     */
    public $Confidence;

    /**
     * @var string Ocr 文字鉴别的结果建议，取值范围：
<li>pass；</li>
<li>review；</li>
<li>block。</li>
     */
    public $Suggestion;

    /**
     * @var array Ocr 文字鉴别的嫌疑关键词列表。
     */
    public $KeywordSet;

    /**
     * @var array Ocr 文字鉴别的嫌疑文字出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
     */
    public $AreaCoordSet;

    /**
     * @param float $Confidence Ocr 文字鉴别结果的评分，分值为0到100。
     * @param string $Suggestion Ocr 文字鉴别的结果建议，取值范围：
<li>pass；</li>
<li>review；</li>
<li>block。</li>
     * @param array $KeywordSet Ocr 文字鉴别的嫌疑关键词列表。
     * @param array $AreaCoordSet Ocr 文字鉴别的嫌疑文字出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
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

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("KeywordSet",$param) and $param["KeywordSet"] !== null) {
            $this->KeywordSet = $param["KeywordSet"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }
    }
}
