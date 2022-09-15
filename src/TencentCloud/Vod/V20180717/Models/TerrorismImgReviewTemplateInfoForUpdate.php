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
 * 画面鉴别涉及令人不安全的信息的任务控制参数。
 *
 * @method string getSwitch() 获取画面鉴别涉及令人不安全的信息的任务开关，可选值：
<li>ON：开启画面鉴别涉及令人不安全的信息的任务；</li>
<li>OFF：关闭画面鉴别涉及令人不安全的信息的任务。</li>
 * @method void setSwitch(string $Switch) 设置画面鉴别涉及令人不安全的信息的任务开关，可选值：
<li>ON：开启画面鉴别涉及令人不安全的信息的任务；</li>
<li>OFF：关闭画面鉴别涉及令人不安全的信息的任务。</li>
 * @method array getLabelSet() 获取画面鉴别涉及令人不安全的信息的过滤标签，审核结果包含选择的标签则返回结果，如果过滤标签为空，则审核结果全部返回，可选值为：
<li>guns：武器枪支；</li>
<li>crowd：人群聚集；</li>
<li>bloody：血腥画面；</li>
<li>police：警察部队；</li>
<li>banners：暴恐旗帜；</li>
<li>militant：武装分子；</li>
<li>explosion：爆炸火灾；</li>
<li>terrorists：暴恐人物；</li>
<li>scenario：暴恐画面。</li>
 * @method void setLabelSet(array $LabelSet) 设置画面鉴别涉及令人不安全的信息的过滤标签，审核结果包含选择的标签则返回结果，如果过滤标签为空，则审核结果全部返回，可选值为：
<li>guns：武器枪支；</li>
<li>crowd：人群聚集；</li>
<li>bloody：血腥画面；</li>
<li>police：警察部队；</li>
<li>banners：暴恐旗帜；</li>
<li>militant：武装分子；</li>
<li>explosion：爆炸火灾；</li>
<li>terrorists：暴恐人物；</li>
<li>scenario：暴恐画面。</li>
 * @method integer getBlockConfidence() 获取判定涉嫌违规的分数阈值，当审核达到该分数以上，认为涉嫌违规。取值范围：0~100。
 * @method void setBlockConfidence(integer $BlockConfidence) 设置判定涉嫌违规的分数阈值，当审核达到该分数以上，认为涉嫌违规。取值范围：0~100。
 * @method integer getReviewConfidence() 获取判定需人工复核是否违规的分数阈值，当审核达到该分数以上，认为需人工复核。取值范围：0~100。
 * @method void setReviewConfidence(integer $ReviewConfidence) 设置判定需人工复核是否违规的分数阈值，当审核达到该分数以上，认为需人工复核。取值范围：0~100。
 */
class TerrorismImgReviewTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string 画面鉴别涉及令人不安全的信息的任务开关，可选值：
<li>ON：开启画面鉴别涉及令人不安全的信息的任务；</li>
<li>OFF：关闭画面鉴别涉及令人不安全的信息的任务。</li>
     */
    public $Switch;

    /**
     * @var array 画面鉴别涉及令人不安全的信息的过滤标签，审核结果包含选择的标签则返回结果，如果过滤标签为空，则审核结果全部返回，可选值为：
<li>guns：武器枪支；</li>
<li>crowd：人群聚集；</li>
<li>bloody：血腥画面；</li>
<li>police：警察部队；</li>
<li>banners：暴恐旗帜；</li>
<li>militant：武装分子；</li>
<li>explosion：爆炸火灾；</li>
<li>terrorists：暴恐人物；</li>
<li>scenario：暴恐画面。</li>
     */
    public $LabelSet;

    /**
     * @var integer 判定涉嫌违规的分数阈值，当审核达到该分数以上，认为涉嫌违规。取值范围：0~100。
     */
    public $BlockConfidence;

    /**
     * @var integer 判定需人工复核是否违规的分数阈值，当审核达到该分数以上，认为需人工复核。取值范围：0~100。
     */
    public $ReviewConfidence;

    /**
     * @param string $Switch 画面鉴别涉及令人不安全的信息的任务开关，可选值：
<li>ON：开启画面鉴别涉及令人不安全的信息的任务；</li>
<li>OFF：关闭画面鉴别涉及令人不安全的信息的任务。</li>
     * @param array $LabelSet 画面鉴别涉及令人不安全的信息的过滤标签，审核结果包含选择的标签则返回结果，如果过滤标签为空，则审核结果全部返回，可选值为：
<li>guns：武器枪支；</li>
<li>crowd：人群聚集；</li>
<li>bloody：血腥画面；</li>
<li>police：警察部队；</li>
<li>banners：暴恐旗帜；</li>
<li>militant：武装分子；</li>
<li>explosion：爆炸火灾；</li>
<li>terrorists：暴恐人物；</li>
<li>scenario：暴恐画面。</li>
     * @param integer $BlockConfidence 判定涉嫌违规的分数阈值，当审核达到该分数以上，认为涉嫌违规。取值范围：0~100。
     * @param integer $ReviewConfidence 判定需人工复核是否违规的分数阈值，当审核达到该分数以上，认为需人工复核。取值范围：0~100。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("LabelSet",$param) and $param["LabelSet"] !== null) {
            $this->LabelSet = $param["LabelSet"];
        }

        if (array_key_exists("BlockConfidence",$param) and $param["BlockConfidence"] !== null) {
            $this->BlockConfidence = $param["BlockConfidence"];
        }

        if (array_key_exists("ReviewConfidence",$param) and $param["ReviewConfidence"] !== null) {
            $this->ReviewConfidence = $param["ReviewConfidence"];
        }
    }
}
