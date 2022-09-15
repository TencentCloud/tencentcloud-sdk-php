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
 * 图片画面审核涉及令人不适宜信息的任务结果类型
 *
 * @method float getConfidence() 获取鉴别涉及令人不适宜信息的评分，分值为0到100。
 * @method void setConfidence(float $Confidence) 设置鉴别涉及令人不适宜信息的评分，分值为0到100。
 * @method string getSuggestion() 获取鉴别涉及令人不适宜信息的结果建议，取值范围：
<li>pass；</li>
<li>review；</li>
<li>block。</li>
 * @method void setSuggestion(string $Suggestion) 设置鉴别涉及令人不适宜信息的结果建议，取值范围：
<li>pass；</li>
<li>review；</li>
<li>block。</li>
 * @method string getName() 获取涉及令人不适宜的信息、违规图标名字。
 * @method void setName(string $Name) 设置涉及令人不适宜的信息、违规图标名字。
 * @method array getAreaCoordSet() 获取涉及令人不适宜的信息、违规图标出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
 * @method void setAreaCoordSet(array $AreaCoordSet) 设置涉及令人不适宜的信息、违规图标出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
 */
class PoliticalImageResult extends AbstractModel
{
    /**
     * @var float 鉴别涉及令人不适宜信息的评分，分值为0到100。
     */
    public $Confidence;

    /**
     * @var string 鉴别涉及令人不适宜信息的结果建议，取值范围：
<li>pass；</li>
<li>review；</li>
<li>block。</li>
     */
    public $Suggestion;

    /**
     * @var string 涉及令人不适宜的信息、违规图标名字。
     */
    public $Name;

    /**
     * @var array 涉及令人不适宜的信息、违规图标出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
     */
    public $AreaCoordSet;

    /**
     * @param float $Confidence 鉴别涉及令人不适宜信息的评分，分值为0到100。
     * @param string $Suggestion 鉴别涉及令人不适宜信息的结果建议，取值范围：
<li>pass；</li>
<li>review；</li>
<li>block。</li>
     * @param string $Name 涉及令人不适宜的信息、违规图标名字。
     * @param array $AreaCoordSet 涉及令人不适宜的信息、违规图标出现的区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }
    }
}
