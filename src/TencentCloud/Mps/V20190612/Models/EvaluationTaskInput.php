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
 * 评测任务输入参数类型
 *
 * @method string getTaskType() 获取评测任务类型，可选 NORMAL、BD_RATE
 * @method void setTaskType(string $TaskType) 设置评测任务类型，可选 NORMAL、BD_RATE
 * @method array getEvaluationTypeSet() 获取评测类型，可选 PSNR、SSIM、VMAF、VMAF_NEG
 * @method void setEvaluationTypeSet(array $EvaluationTypeSet) 设置评测类型，可选 PSNR、SSIM、VMAF、VMAF_NEG
 * @method string getEvaluationRangeType() 获取评测范围类型，可选 ALL（全部时长）、TIME（指定时长范围）、FRAME（指定帧数范围）
 * @method void setEvaluationRangeType(string $EvaluationRangeType) 设置评测范围类型，可选 ALL（全部时长）、TIME（指定时长范围）、FRAME（指定帧数范围）
 * @method array getContrastInfoSet() 获取对比视频信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContrastInfoSet(array $ContrastInfoSet) 设置对比视频信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContrastMediaSet() 获取对比视频信息。
 * @method void setContrastMediaSet(array $ContrastMediaSet) 设置对比视频信息。
 * @method array getContrastTemplateSet() 获取对比转码模板信息。
 * @method void setContrastTemplateSet(array $ContrastTemplateSet) 设置对比转码模板信息。
 * @method integer getStartTime() 获取开始评测时间，单位秒，当 EvaluationRangeType 为 TIME 时有效。
 * @method void setStartTime(integer $StartTime) 设置开始评测时间，单位秒，当 EvaluationRangeType 为 TIME 时有效。
 * @method integer getEndTime() 获取结束评测时间，单位秒，当 EvaluationRangeType 为 TIME 时有效。
 * @method void setEndTime(integer $EndTime) 设置结束评测时间，单位秒，当 EvaluationRangeType 为 TIME 时有效。
 * @method integer getStartFrameIndex() 获取评测开始帧，默认从0开始，当 EvaluationRangeType 为FRAME 时有效。
 * @method void setStartFrameIndex(integer $StartFrameIndex) 设置评测开始帧，默认从0开始，当 EvaluationRangeType 为FRAME 时有效。
 * @method integer getEndFrameIndex() 获取评测结束帧，默认为视频中可以参与评测的最后一帧，当 EvaluationRangeType 为 FRAME 时有效。
 * @method void setEndFrameIndex(integer $EndFrameIndex) 设置评测结束帧，默认为视频中可以参与评测的最后一帧，当 EvaluationRangeType 为 FRAME 时有效。
 * @method string getResolutionAlignmentMode() 获取分辨率对齐模式，默认对齐到低分辨率的视频，可选 ALIGN_HIGH_RESOLUTION、ALIGN_LOW_RESOLUTION
 * @method void setResolutionAlignmentMode(string $ResolutionAlignmentMode) 设置分辨率对齐模式，默认对齐到低分辨率的视频，可选 ALIGN_HIGH_RESOLUTION、ALIGN_LOW_RESOLUTION
 * @method array getBitrateSet() 获取指定码率评测，当评测任务类型为 BD_RATE 有效。
 * @method void setBitrateSet(array $BitrateSet) 设置指定码率评测，当评测任务类型为 BD_RATE 有效。
 * @method array getVCRFSet() 获取指定 vcrf 评测，当评测任务类型为 BD_RATE 有效。
 * @method void setVCRFSet(array $VCRFSet) 设置指定 vcrf 评测，当评测任务类型为 BD_RATE 有效。
 */
class EvaluationTaskInput extends AbstractModel
{
    /**
     * @var string 评测任务类型，可选 NORMAL、BD_RATE
     */
    public $TaskType;

    /**
     * @var array 评测类型，可选 PSNR、SSIM、VMAF、VMAF_NEG
     */
    public $EvaluationTypeSet;

    /**
     * @var string 评测范围类型，可选 ALL（全部时长）、TIME（指定时长范围）、FRAME（指定帧数范围）
     */
    public $EvaluationRangeType;

    /**
     * @var array 对比视频信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ContrastInfoSet;

    /**
     * @var array 对比视频信息。
     */
    public $ContrastMediaSet;

    /**
     * @var array 对比转码模板信息。
     */
    public $ContrastTemplateSet;

    /**
     * @var integer 开始评测时间，单位秒，当 EvaluationRangeType 为 TIME 时有效。
     */
    public $StartTime;

    /**
     * @var integer 结束评测时间，单位秒，当 EvaluationRangeType 为 TIME 时有效。
     */
    public $EndTime;

    /**
     * @var integer 评测开始帧，默认从0开始，当 EvaluationRangeType 为FRAME 时有效。
     */
    public $StartFrameIndex;

    /**
     * @var integer 评测结束帧，默认为视频中可以参与评测的最后一帧，当 EvaluationRangeType 为 FRAME 时有效。
     */
    public $EndFrameIndex;

    /**
     * @var string 分辨率对齐模式，默认对齐到低分辨率的视频，可选 ALIGN_HIGH_RESOLUTION、ALIGN_LOW_RESOLUTION
     */
    public $ResolutionAlignmentMode;

    /**
     * @var array 指定码率评测，当评测任务类型为 BD_RATE 有效。
     */
    public $BitrateSet;

    /**
     * @var array 指定 vcrf 评测，当评测任务类型为 BD_RATE 有效。
     */
    public $VCRFSet;

    /**
     * @param string $TaskType 评测任务类型，可选 NORMAL、BD_RATE
     * @param array $EvaluationTypeSet 评测类型，可选 PSNR、SSIM、VMAF、VMAF_NEG
     * @param string $EvaluationRangeType 评测范围类型，可选 ALL（全部时长）、TIME（指定时长范围）、FRAME（指定帧数范围）
     * @param array $ContrastInfoSet 对比视频信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ContrastMediaSet 对比视频信息。
     * @param array $ContrastTemplateSet 对比转码模板信息。
     * @param integer $StartTime 开始评测时间，单位秒，当 EvaluationRangeType 为 TIME 时有效。
     * @param integer $EndTime 结束评测时间，单位秒，当 EvaluationRangeType 为 TIME 时有效。
     * @param integer $StartFrameIndex 评测开始帧，默认从0开始，当 EvaluationRangeType 为FRAME 时有效。
     * @param integer $EndFrameIndex 评测结束帧，默认为视频中可以参与评测的最后一帧，当 EvaluationRangeType 为 FRAME 时有效。
     * @param string $ResolutionAlignmentMode 分辨率对齐模式，默认对齐到低分辨率的视频，可选 ALIGN_HIGH_RESOLUTION、ALIGN_LOW_RESOLUTION
     * @param array $BitrateSet 指定码率评测，当评测任务类型为 BD_RATE 有效。
     * @param array $VCRFSet 指定 vcrf 评测，当评测任务类型为 BD_RATE 有效。
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("EvaluationTypeSet",$param) and $param["EvaluationTypeSet"] !== null) {
            $this->EvaluationTypeSet = $param["EvaluationTypeSet"];
        }

        if (array_key_exists("EvaluationRangeType",$param) and $param["EvaluationRangeType"] !== null) {
            $this->EvaluationRangeType = $param["EvaluationRangeType"];
        }

        if (array_key_exists("ContrastInfoSet",$param) and $param["ContrastInfoSet"] !== null) {
            $this->ContrastInfoSet = [];
            foreach ($param["ContrastInfoSet"] as $key => $value){
                $obj = new MediaInputInfo();
                $obj->deserialize($value);
                array_push($this->ContrastInfoSet, $obj);
            }
        }

        if (array_key_exists("ContrastMediaSet",$param) and $param["ContrastMediaSet"] !== null) {
            $this->ContrastMediaSet = [];
            foreach ($param["ContrastMediaSet"] as $key => $value){
                $obj = new EvaluationMediaInputInfo();
                $obj->deserialize($value);
                array_push($this->ContrastMediaSet, $obj);
            }
        }

        if (array_key_exists("ContrastTemplateSet",$param) and $param["ContrastTemplateSet"] !== null) {
            $this->ContrastTemplateSet = [];
            foreach ($param["ContrastTemplateSet"] as $key => $value){
                $obj = new EvaluationTemplateInputInfo();
                $obj->deserialize($value);
                array_push($this->ContrastTemplateSet, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartFrameIndex",$param) and $param["StartFrameIndex"] !== null) {
            $this->StartFrameIndex = $param["StartFrameIndex"];
        }

        if (array_key_exists("EndFrameIndex",$param) and $param["EndFrameIndex"] !== null) {
            $this->EndFrameIndex = $param["EndFrameIndex"];
        }

        if (array_key_exists("ResolutionAlignmentMode",$param) and $param["ResolutionAlignmentMode"] !== null) {
            $this->ResolutionAlignmentMode = $param["ResolutionAlignmentMode"];
        }

        if (array_key_exists("BitrateSet",$param) and $param["BitrateSet"] !== null) {
            $this->BitrateSet = $param["BitrateSet"];
        }

        if (array_key_exists("VCRFSet",$param) and $param["VCRFSet"] !== null) {
            $this->VCRFSet = $param["VCRFSet"];
        }
    }
}
