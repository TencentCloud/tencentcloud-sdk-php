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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 质检结果输出。
 *
 * @method boolean getNoAudio() 获取为true时表示视频无音频轨。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoAudio(boolean $NoAudio) 设置为true时表示视频无音频轨。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNoVideo() 获取为true时表示视频无视频轨。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoVideo(boolean $NoVideo) 设置为true时表示视频无视频轨。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQualityEvaluationScore() 获取视频无参考质量打分，百分制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityEvaluationScore(integer $QualityEvaluationScore) 设置视频无参考质量打分，百分制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQualityControlResultSet() 获取质检检出异常项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityControlResultSet(array $QualityControlResultSet) 设置质检检出异常项。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityControlData extends AbstractModel
{
    /**
     * @var boolean 为true时表示视频无音频轨。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoAudio;

    /**
     * @var boolean 为true时表示视频无视频轨。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoVideo;

    /**
     * @var integer 视频无参考质量打分，百分制。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityEvaluationScore;

    /**
     * @var array 质检检出异常项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityControlResultSet;

    /**
     * @param boolean $NoAudio 为true时表示视频无音频轨。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $NoVideo 为true时表示视频无视频轨。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QualityEvaluationScore 视频无参考质量打分，百分制。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QualityControlResultSet 质检检出异常项。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("QualityControlResultSet",$param) and $param["QualityControlResultSet"] !== null) {
            $this->QualityControlResultSet = [];
            foreach ($param["QualityControlResultSet"] as $key => $value){
                $obj = new QualityControlResult();
                $obj->deserialize($value);
                array_push($this->QualityControlResultSet, $obj);
            }
        }
    }
}
