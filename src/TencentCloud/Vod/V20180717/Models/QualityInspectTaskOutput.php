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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音画质检测任务的输出。
 *
 * @method integer getNoAudio() 获取<p>媒体文件是否无音频轨，取值范围：</p><li>0：否，即有音频轨；</li><li>1：是，即无音频轨。</li>
 * @method void setNoAudio(integer $NoAudio) 设置<p>媒体文件是否无音频轨，取值范围：</p><li>0：否，即有音频轨；</li><li>1：是，即无音频轨。</li>
 * @method integer getNoVideo() 获取<p>媒体文件是否无视频轨，取值范围：</p><li>0：否，即有视频轨；</li><li>1：是，即无视频轨。</li>
 * @method void setNoVideo(integer $NoVideo) 设置<p>媒体文件是否无视频轨，取值范围：</p><li>0：否，即有视频轨；</li><li>1：是，即无视频轨。</li>
 * @method integer getQualityEvaluationScore() 获取<p>视频画面质量评分，取值范围：[0, 100]。</p>
 * @method void setQualityEvaluationScore(integer $QualityEvaluationScore) 设置<p>视频画面质量评分，取值范围：[0, 100]。</p>
 * @method array getQualityInspectResultSet() 获取<p>音画质检测出的异常项列表。</p>
 * @method void setQualityInspectResultSet(array $QualityInspectResultSet) 设置<p>音画质检测出的异常项列表。</p>
 * @method float getQualityEvaluationMeanOpinionScore() 获取<p>视频无参考质量评分，MOS分数。</p>
 * @method void setQualityEvaluationMeanOpinionScore(float $QualityEvaluationMeanOpinionScore) 设置<p>视频无参考质量评分，MOS分数。</p>
 * @method integer getAestheticEvaluationScore() 获取<p>视频美学评分，范围：[0,100]。</p>
 * @method void setAestheticEvaluationScore(integer $AestheticEvaluationScore) 设置<p>视频美学评分，范围：[0,100]。</p>
 * @method array getContainerDiagnoseResultSet() 获取<p>格式诊断检出异常项。</p>
 * @method void setContainerDiagnoseResultSet(array $ContainerDiagnoseResultSet) 设置<p>格式诊断检出异常项。</p>
 * @method QualityInspectLLMDetectionReport getLLMDetectionReport() 获取<p>LLM 大模型 AIGC 质量检测结果。</p>
 * @method void setLLMDetectionReport(QualityInspectLLMDetectionReport $LLMDetectionReport) 设置<p>LLM 大模型 AIGC 质量检测结果。</p>
 */
class QualityInspectTaskOutput extends AbstractModel
{
    /**
     * @var integer <p>媒体文件是否无音频轨，取值范围：</p><li>0：否，即有音频轨；</li><li>1：是，即无音频轨。</li>
     */
    public $NoAudio;

    /**
     * @var integer <p>媒体文件是否无视频轨，取值范围：</p><li>0：否，即有视频轨；</li><li>1：是，即无视频轨。</li>
     */
    public $NoVideo;

    /**
     * @var integer <p>视频画面质量评分，取值范围：[0, 100]。</p>
     */
    public $QualityEvaluationScore;

    /**
     * @var array <p>音画质检测出的异常项列表。</p>
     */
    public $QualityInspectResultSet;

    /**
     * @var float <p>视频无参考质量评分，MOS分数。</p>
     */
    public $QualityEvaluationMeanOpinionScore;

    /**
     * @var integer <p>视频美学评分，范围：[0,100]。</p>
     */
    public $AestheticEvaluationScore;

    /**
     * @var array <p>格式诊断检出异常项。</p>
     */
    public $ContainerDiagnoseResultSet;

    /**
     * @var QualityInspectLLMDetectionReport <p>LLM 大模型 AIGC 质量检测结果。</p>
     */
    public $LLMDetectionReport;

    /**
     * @param integer $NoAudio <p>媒体文件是否无音频轨，取值范围：</p><li>0：否，即有音频轨；</li><li>1：是，即无音频轨。</li>
     * @param integer $NoVideo <p>媒体文件是否无视频轨，取值范围：</p><li>0：否，即有视频轨；</li><li>1：是，即无视频轨。</li>
     * @param integer $QualityEvaluationScore <p>视频画面质量评分，取值范围：[0, 100]。</p>
     * @param array $QualityInspectResultSet <p>音画质检测出的异常项列表。</p>
     * @param float $QualityEvaluationMeanOpinionScore <p>视频无参考质量评分，MOS分数。</p>
     * @param integer $AestheticEvaluationScore <p>视频美学评分，范围：[0,100]。</p>
     * @param array $ContainerDiagnoseResultSet <p>格式诊断检出异常项。</p>
     * @param QualityInspectLLMDetectionReport $LLMDetectionReport <p>LLM 大模型 AIGC 质量检测结果。</p>
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

        if (array_key_exists("QualityInspectResultSet",$param) and $param["QualityInspectResultSet"] !== null) {
            $this->QualityInspectResultSet = [];
            foreach ($param["QualityInspectResultSet"] as $key => $value){
                $obj = new QualityInspectResultItem();
                $obj->deserialize($value);
                array_push($this->QualityInspectResultSet, $obj);
            }
        }

        if (array_key_exists("QualityEvaluationMeanOpinionScore",$param) and $param["QualityEvaluationMeanOpinionScore"] !== null) {
            $this->QualityEvaluationMeanOpinionScore = $param["QualityEvaluationMeanOpinionScore"];
        }

        if (array_key_exists("AestheticEvaluationScore",$param) and $param["AestheticEvaluationScore"] !== null) {
            $this->AestheticEvaluationScore = $param["AestheticEvaluationScore"];
        }

        if (array_key_exists("ContainerDiagnoseResultSet",$param) and $param["ContainerDiagnoseResultSet"] !== null) {
            $this->ContainerDiagnoseResultSet = [];
            foreach ($param["ContainerDiagnoseResultSet"] as $key => $value){
                $obj = new QualityInspectContainerDiagnoseResultItem();
                $obj->deserialize($value);
                array_push($this->ContainerDiagnoseResultSet, $obj);
            }
        }

        if (array_key_exists("LLMDetectionReport",$param) and $param["LLMDetectionReport"] !== null) {
            $this->LLMDetectionReport = new QualityInspectLLMDetectionReport();
            $this->LLMDetectionReport->deserialize($param["LLMDetectionReport"]);
        }
    }
}
