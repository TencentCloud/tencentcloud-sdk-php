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
 * 媒体质检结果输出。
 *
 * @method boolean getNoAudio() 获取<p>为true时表示视频无音频轨。</p>
 * @method void setNoAudio(boolean $NoAudio) 设置<p>为true时表示视频无音频轨。</p>
 * @method boolean getNoVideo() 获取<p>为true时表示视频无视频轨。</p>
 * @method void setNoVideo(boolean $NoVideo) 设置<p>为true时表示视频无视频轨。</p>
 * @method integer getQualityEvaluationScore() 获取<p>视频无参考质量评分，百分制。</p>
 * @method void setQualityEvaluationScore(integer $QualityEvaluationScore) 设置<p>视频无参考质量评分，百分制。</p>
 * @method float getQualityEvaluationMeanOpinionScore() 获取<p>视频无参考质量评分，MOS分数。</p>
 * @method void setQualityEvaluationMeanOpinionScore(float $QualityEvaluationMeanOpinionScore) 设置<p>视频无参考质量评分，MOS分数。</p>
 * @method integer getAestheticEvaluationScore() 获取<p>视频美学评分，范围：[0,100]。</p>
 * @method void setAestheticEvaluationScore(integer $AestheticEvaluationScore) 设置<p>视频美学评分，范围：[0,100]。</p>
 * @method array getQualityControlResultSet() 获取<p>内容质检检出异常项。</p>
 * @method void setQualityControlResultSet(array $QualityControlResultSet) 设置<p>内容质检检出异常项。</p>
 * @method array getContainerDiagnoseResultSet() 获取<p>格式诊断检出异常项。</p>
 * @method void setContainerDiagnoseResultSet(array $ContainerDiagnoseResultSet) 设置<p>格式诊断检出异常项。</p>
 */
class QualityControlData extends AbstractModel
{
    /**
     * @var boolean <p>为true时表示视频无音频轨。</p>
     */
    public $NoAudio;

    /**
     * @var boolean <p>为true时表示视频无视频轨。</p>
     */
    public $NoVideo;

    /**
     * @var integer <p>视频无参考质量评分，百分制。</p>
     */
    public $QualityEvaluationScore;

    /**
     * @var float <p>视频无参考质量评分，MOS分数。</p>
     */
    public $QualityEvaluationMeanOpinionScore;

    /**
     * @var integer <p>视频美学评分，范围：[0,100]。</p>
     */
    public $AestheticEvaluationScore;

    /**
     * @var array <p>内容质检检出异常项。</p>
     */
    public $QualityControlResultSet;

    /**
     * @var array <p>格式诊断检出异常项。</p>
     */
    public $ContainerDiagnoseResultSet;

    /**
     * @param boolean $NoAudio <p>为true时表示视频无音频轨。</p>
     * @param boolean $NoVideo <p>为true时表示视频无视频轨。</p>
     * @param integer $QualityEvaluationScore <p>视频无参考质量评分，百分制。</p>
     * @param float $QualityEvaluationMeanOpinionScore <p>视频无参考质量评分，MOS分数。</p>
     * @param integer $AestheticEvaluationScore <p>视频美学评分，范围：[0,100]。</p>
     * @param array $QualityControlResultSet <p>内容质检检出异常项。</p>
     * @param array $ContainerDiagnoseResultSet <p>格式诊断检出异常项。</p>
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
        if (array_key_exists("NoAudio",$param) and $param["NoAudio"] !== null) {
            $this->NoAudio = $param["NoAudio"];
        }

        if (array_key_exists("NoVideo",$param) and $param["NoVideo"] !== null) {
            $this->NoVideo = $param["NoVideo"];
        }

        if (array_key_exists("QualityEvaluationScore",$param) and $param["QualityEvaluationScore"] !== null) {
            $this->QualityEvaluationScore = $param["QualityEvaluationScore"];
        }

        if (array_key_exists("QualityEvaluationMeanOpinionScore",$param) and $param["QualityEvaluationMeanOpinionScore"] !== null) {
            $this->QualityEvaluationMeanOpinionScore = $param["QualityEvaluationMeanOpinionScore"];
        }

        if (array_key_exists("AestheticEvaluationScore",$param) and $param["AestheticEvaluationScore"] !== null) {
            $this->AestheticEvaluationScore = $param["AestheticEvaluationScore"];
        }

        if (array_key_exists("QualityControlResultSet",$param) and $param["QualityControlResultSet"] !== null) {
            $this->QualityControlResultSet = [];
            foreach ($param["QualityControlResultSet"] as $key => $value){
                $obj = new QualityControlResult();
                $obj->deserialize($value);
                array_push($this->QualityControlResultSet, $obj);
            }
        }

        if (array_key_exists("ContainerDiagnoseResultSet",$param) and $param["ContainerDiagnoseResultSet"] !== null) {
            $this->ContainerDiagnoseResultSet = [];
            foreach ($param["ContainerDiagnoseResultSet"] as $key => $value){
                $obj = new ContainerDiagnoseResultItem();
                $obj->deserialize($value);
                array_push($this->ContainerDiagnoseResultSet, $obj);
            }
        }
    }
}
