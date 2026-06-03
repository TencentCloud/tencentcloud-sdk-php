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
 * LLM 大模型单个检测项的聚合结果
 *
 * @method string getCategory() 获取<p>检测分类。</p><p>枚举值：</p><ul><li>AIGCQualityCharacteristics： AIGC 质量特征</li></ul>
 * @method void setCategory(string $Category) 设置<p>检测分类。</p><p>枚举值：</p><ul><li>AIGCQualityCharacteristics： AIGC 质量特征</li></ul>
 * @method string getGroup() 获取<p>检测分组。</p><p>枚举值：</p><ul><li>AIGCAuthenticity： AIGC 真实性，包括人体合理性、物理合理性、跨帧一致性等</li><li>AIGCTechQuality： AIGC 技术质量，包括画幅、黑边、强行竖屏等</li></ul>
 * @method void setGroup(string $Group) 设置<p>检测分组。</p><p>枚举值：</p><ul><li>AIGCAuthenticity： AIGC 真实性，包括人体合理性、物理合理性、跨帧一致性等</li><li>AIGCTechQuality： AIGC 技术质量，包括画幅、黑边、强行竖屏等</li></ul>
 * @method string getType() 获取<p>检测类型名称。</p><p>枚举值：</p><ul><li>BodyPoseCheck： 人体姿态合理性，属于 AIGCAuthenticity</li><li>BodyDetailCheck： 人体细节合理性，包括手指数、五官对称等，属于 AIGCAuthenticity</li><li>PhysicRulesCheck： 物理规律合理性，包括透视、光影、重力等，属于 AIGCAuthenticity</li><li>ObjectConsistencyCheck： 跨帧物体一致性，属于 AIGCAuthenticity</li><li>FormatCheck： 画幅、黑边、强行竖屏等格式问题，属于 AIGCTechQuality</li></ul>
 * @method void setType(string $Type) 设置<p>检测类型名称。</p><p>枚举值：</p><ul><li>BodyPoseCheck： 人体姿态合理性，属于 AIGCAuthenticity</li><li>BodyDetailCheck： 人体细节合理性，包括手指数、五官对称等，属于 AIGCAuthenticity</li><li>PhysicRulesCheck： 物理规律合理性，包括透视、光影、重力等，属于 AIGCAuthenticity</li><li>ObjectConsistencyCheck： 跨帧物体一致性，属于 AIGCAuthenticity</li><li>FormatCheck： 画幅、黑边、强行竖屏等格式问题，属于 AIGCTechQuality</li></ul>
 * @method float getScore() 获取<p>整体质量得分，范围 [0, 100]，越高越好。</p>
 * @method void setScore(float $Score) 设置<p>整体质量得分，范围 [0, 100]，越高越好。</p>
 * @method float getConfidence() 获取<p>判断置信度，范围 [0, 100]，越高表示越确定。</p>
 * @method void setConfidence(float $Confidence) 设置<p>判断置信度，范围 [0, 100]，越高表示越确定。</p>
 * @method array getIssueSet() 获取<p>检测发现的问题列表，无问题时为空。</p>
 * @method void setIssueSet(array $IssueSet) 设置<p>检测发现的问题列表，无问题时为空。</p>
 */
class LLMDetectionResultItem extends AbstractModel
{
    /**
     * @var string <p>检测分类。</p><p>枚举值：</p><ul><li>AIGCQualityCharacteristics： AIGC 质量特征</li></ul>
     */
    public $Category;

    /**
     * @var string <p>检测分组。</p><p>枚举值：</p><ul><li>AIGCAuthenticity： AIGC 真实性，包括人体合理性、物理合理性、跨帧一致性等</li><li>AIGCTechQuality： AIGC 技术质量，包括画幅、黑边、强行竖屏等</li></ul>
     */
    public $Group;

    /**
     * @var string <p>检测类型名称。</p><p>枚举值：</p><ul><li>BodyPoseCheck： 人体姿态合理性，属于 AIGCAuthenticity</li><li>BodyDetailCheck： 人体细节合理性，包括手指数、五官对称等，属于 AIGCAuthenticity</li><li>PhysicRulesCheck： 物理规律合理性，包括透视、光影、重力等，属于 AIGCAuthenticity</li><li>ObjectConsistencyCheck： 跨帧物体一致性，属于 AIGCAuthenticity</li><li>FormatCheck： 画幅、黑边、强行竖屏等格式问题，属于 AIGCTechQuality</li></ul>
     */
    public $Type;

    /**
     * @var float <p>整体质量得分，范围 [0, 100]，越高越好。</p>
     */
    public $Score;

    /**
     * @var float <p>判断置信度，范围 [0, 100]，越高表示越确定。</p>
     */
    public $Confidence;

    /**
     * @var array <p>检测发现的问题列表，无问题时为空。</p>
     */
    public $IssueSet;

    /**
     * @param string $Category <p>检测分类。</p><p>枚举值：</p><ul><li>AIGCQualityCharacteristics： AIGC 质量特征</li></ul>
     * @param string $Group <p>检测分组。</p><p>枚举值：</p><ul><li>AIGCAuthenticity： AIGC 真实性，包括人体合理性、物理合理性、跨帧一致性等</li><li>AIGCTechQuality： AIGC 技术质量，包括画幅、黑边、强行竖屏等</li></ul>
     * @param string $Type <p>检测类型名称。</p><p>枚举值：</p><ul><li>BodyPoseCheck： 人体姿态合理性，属于 AIGCAuthenticity</li><li>BodyDetailCheck： 人体细节合理性，包括手指数、五官对称等，属于 AIGCAuthenticity</li><li>PhysicRulesCheck： 物理规律合理性，包括透视、光影、重力等，属于 AIGCAuthenticity</li><li>ObjectConsistencyCheck： 跨帧物体一致性，属于 AIGCAuthenticity</li><li>FormatCheck： 画幅、黑边、强行竖屏等格式问题，属于 AIGCTechQuality</li></ul>
     * @param float $Score <p>整体质量得分，范围 [0, 100]，越高越好。</p>
     * @param float $Confidence <p>判断置信度，范围 [0, 100]，越高表示越确定。</p>
     * @param array $IssueSet <p>检测发现的问题列表，无问题时为空。</p>
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("IssueSet",$param) and $param["IssueSet"] !== null) {
            $this->IssueSet = [];
            foreach ($param["IssueSet"] as $key => $value){
                $obj = new LLMDetectionIssue();
                $obj->deserialize($value);
                array_push($this->IssueSet, $obj);
            }
        }
    }
}
