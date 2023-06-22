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
 * 音画质检测任务的输出。
 *
 * @method integer getNoAudio() 获取媒体文件是否无音频轨，取值范围：
<li>0：否，即有音频轨；</li>
<li>1：是，即无音频轨。</li>
 * @method void setNoAudio(integer $NoAudio) 设置媒体文件是否无音频轨，取值范围：
<li>0：否，即有音频轨；</li>
<li>1：是，即无音频轨。</li>
 * @method integer getNoVideo() 获取媒体文件是否无视频轨，取值范围：
<li>0：否，即有视频轨；</li>
<li>1：是，即无视频轨。</li>
 * @method void setNoVideo(integer $NoVideo) 设置媒体文件是否无视频轨，取值范围：
<li>0：否，即有视频轨；</li>
<li>1：是，即无视频轨。</li>
 * @method integer getQualityEvaluationScore() 获取视频画面质量评分，取值范围：[0, 100]。
 * @method void setQualityEvaluationScore(integer $QualityEvaluationScore) 设置视频画面质量评分，取值范围：[0, 100]。
 * @method array getQualityInspectResultSet() 获取音画质检测出的异常项列表。
 * @method void setQualityInspectResultSet(array $QualityInspectResultSet) 设置音画质检测出的异常项列表。
 */
class QualityInspectTaskOutput extends AbstractModel
{
    /**
     * @var integer 媒体文件是否无音频轨，取值范围：
<li>0：否，即有音频轨；</li>
<li>1：是，即无音频轨。</li>
     */
    public $NoAudio;

    /**
     * @var integer 媒体文件是否无视频轨，取值范围：
<li>0：否，即有视频轨；</li>
<li>1：是，即无视频轨。</li>
     */
    public $NoVideo;

    /**
     * @var integer 视频画面质量评分，取值范围：[0, 100]。
     */
    public $QualityEvaluationScore;

    /**
     * @var array 音画质检测出的异常项列表。
     */
    public $QualityInspectResultSet;

    /**
     * @param integer $NoAudio 媒体文件是否无音频轨，取值范围：
<li>0：否，即有音频轨；</li>
<li>1：是，即无音频轨。</li>
     * @param integer $NoVideo 媒体文件是否无视频轨，取值范围：
<li>0：否，即有视频轨；</li>
<li>1：是，即无视频轨。</li>
     * @param integer $QualityEvaluationScore 视频画面质量评分，取值范围：[0, 100]。
     * @param array $QualityInspectResultSet 音画质检测出的异常项列表。
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
    }
}
