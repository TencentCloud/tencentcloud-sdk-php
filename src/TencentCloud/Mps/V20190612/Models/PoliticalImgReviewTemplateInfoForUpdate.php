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
 * 画面涉敏任务控制参数。
 *
 * @method string getSwitch() 获取<p>画面涉敏任务开关，可选值：</p><li>ON：开启画面涉敏任务；</li><li>OFF：关闭画面涉敏任务。</li>
 * @method void setSwitch(string $Switch) 设置<p>画面涉敏任务开关，可选值：</p><li>ON：开启画面涉敏任务；</li><li>OFF：关闭画面涉敏任务。</li>
 * @method array getLabelSet() 获取<p>画面涉敏过滤标签，审核结果包含选择的标签则返回结果，如果过滤标签为空，则审核结果全部返回，可选值为：</p><li>violation_photo：违规图标；</li><li>politician：涉敏人物；</li><li>entertainment：娱乐人物；</li><li>sport：体育人物；</li><li>entrepreneur：商业人物；</li><li>scholar：教育学者；</li><li>celebrity：知名人物；</li><li>military：军事人物。</li>
 * @method void setLabelSet(array $LabelSet) 设置<p>画面涉敏过滤标签，审核结果包含选择的标签则返回结果，如果过滤标签为空，则审核结果全部返回，可选值为：</p><li>violation_photo：违规图标；</li><li>politician：涉敏人物；</li><li>entertainment：娱乐人物；</li><li>sport：体育人物；</li><li>entrepreneur：商业人物；</li><li>scholar：教育学者；</li><li>celebrity：知名人物；</li><li>military：军事人物。</li>
 * @method integer getBlockConfidence() 获取<p>判定涉嫌违规的分数阈值，当智能审核达到该分数以上，认为涉嫌违规。取值范围：0~100。</p>
 * @method void setBlockConfidence(integer $BlockConfidence) 设置<p>判定涉嫌违规的分数阈值，当智能审核达到该分数以上，认为涉嫌违规。取值范围：0~100。</p>
 * @method integer getReviewConfidence() 获取<p>判定需人工复核是否违规的分数阈值，当智能审核达到该分数以上，认为需人工复核。取值范围：0~100。</p>
 * @method void setReviewConfidence(integer $ReviewConfidence) 设置<p>判定需人工复核是否违规的分数阈值，当智能审核达到该分数以上，认为需人工复核。取值范围：0~100。</p>
 */
class PoliticalImgReviewTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string <p>画面涉敏任务开关，可选值：</p><li>ON：开启画面涉敏任务；</li><li>OFF：关闭画面涉敏任务。</li>
     */
    public $Switch;

    /**
     * @var array <p>画面涉敏过滤标签，审核结果包含选择的标签则返回结果，如果过滤标签为空，则审核结果全部返回，可选值为：</p><li>violation_photo：违规图标；</li><li>politician：涉敏人物；</li><li>entertainment：娱乐人物；</li><li>sport：体育人物；</li><li>entrepreneur：商业人物；</li><li>scholar：教育学者；</li><li>celebrity：知名人物；</li><li>military：军事人物。</li>
     */
    public $LabelSet;

    /**
     * @var integer <p>判定涉嫌违规的分数阈值，当智能审核达到该分数以上，认为涉嫌违规。取值范围：0~100。</p>
     */
    public $BlockConfidence;

    /**
     * @var integer <p>判定需人工复核是否违规的分数阈值，当智能审核达到该分数以上，认为需人工复核。取值范围：0~100。</p>
     */
    public $ReviewConfidence;

    /**
     * @param string $Switch <p>画面涉敏任务开关，可选值：</p><li>ON：开启画面涉敏任务；</li><li>OFF：关闭画面涉敏任务。</li>
     * @param array $LabelSet <p>画面涉敏过滤标签，审核结果包含选择的标签则返回结果，如果过滤标签为空，则审核结果全部返回，可选值为：</p><li>violation_photo：违规图标；</li><li>politician：涉敏人物；</li><li>entertainment：娱乐人物；</li><li>sport：体育人物；</li><li>entrepreneur：商业人物；</li><li>scholar：教育学者；</li><li>celebrity：知名人物；</li><li>military：军事人物。</li>
     * @param integer $BlockConfidence <p>判定涉嫌违规的分数阈值，当智能审核达到该分数以上，认为涉嫌违规。取值范围：0~100。</p>
     * @param integer $ReviewConfidence <p>判定需人工复核是否违规的分数阈值，当智能审核达到该分数以上，认为需人工复核。取值范围：0~100。</p>
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
