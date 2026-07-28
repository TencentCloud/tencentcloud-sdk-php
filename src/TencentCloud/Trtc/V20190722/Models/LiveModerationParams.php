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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播流ai内容理解参数
 *
 * @method integer getModerationType() 获取<p>AI 内容理解任务类型</p><p>枚举值：</p><ul><li>1： 音频切片理解</li><li>2： 视频截帧理解</li><li>3： 音视切片+视频截帧理解 </li></ul><p>默认值：3</p>
 * @method void setModerationType(integer $ModerationType) 设置<p>AI 内容理解任务类型</p><p>枚举值：</p><ul><li>1： 音频切片理解</li><li>2： 视频截帧理解</li><li>3： 音视切片+视频截帧理解 </li></ul><p>默认值：3</p>
 * @method integer getMaxIdleTime() 获取<p>持续没有上行推流的状态超过MaxIdleTime的时长，自动停止切片。</p><p>取值范围：[30, 1800]</p><p>单位：秒</p><p>默认值：30</p>
 * @method void setMaxIdleTime(integer $MaxIdleTime) 设置<p>持续没有上行推流的状态超过MaxIdleTime的时长，自动停止切片。</p><p>取值范围：[30, 1800]</p><p>单位：秒</p><p>默认值：30</p>
 * @method integer getSliceVideo() 获取<p>视频截帧间隔</p><p>取值范围：[1, 60]</p><p>单位：秒</p><p>默认值：5</p>
 * @method void setSliceVideo(integer $SliceVideo) 设置<p>视频截帧间隔</p><p>取值范围：[1, 60]</p><p>单位：秒</p><p>默认值：5</p>
 * @method integer getSliceAudio() 获取<p>音频切片时长</p><p>取值范围：[5, 60]</p><p>单位：秒</p><p>默认值：15</p>
 * @method void setSliceAudio(integer $SliceAudio) 设置<p>音频切片时长</p><p>取值范围：[5, 60]</p><p>单位：秒</p><p>默认值：15</p>
 * @method integer getSaveModerationFile() 获取<p>是否保存文件</p><p>枚举值：</p><ul><li>0： 0不保存</li><li>1： 1保存所有</li><li>2： 仅命中</li></ul><p>默认值：1</p>
 * @method void setSaveModerationFile(integer $SaveModerationFile) 设置<p>是否保存文件</p><p>枚举值：</p><ul><li>0： 0不保存</li><li>1： 1保存所有</li><li>2： 仅命中</li></ul><p>默认值：1</p>
 * @method integer getCallbackAllResults() 获取<p>是否回调所有内容理解结果</p><p>枚举值：</p><ul><li>0： 回调所有结果</li><li>1： 仅回调命中结果</li></ul><p>默认值：0</p>
 * @method void setCallbackAllResults(integer $CallbackAllResults) 设置<p>是否回调所有内容理解结果</p><p>枚举值：</p><ul><li>0： 回调所有结果</li><li>1： 仅回调命中结果</li></ul><p>默认值：0</p>
 */
class LiveModerationParams extends AbstractModel
{
    /**
     * @var integer <p>AI 内容理解任务类型</p><p>枚举值：</p><ul><li>1： 音频切片理解</li><li>2： 视频截帧理解</li><li>3： 音视切片+视频截帧理解 </li></ul><p>默认值：3</p>
     */
    public $ModerationType;

    /**
     * @var integer <p>持续没有上行推流的状态超过MaxIdleTime的时长，自动停止切片。</p><p>取值范围：[30, 1800]</p><p>单位：秒</p><p>默认值：30</p>
     */
    public $MaxIdleTime;

    /**
     * @var integer <p>视频截帧间隔</p><p>取值范围：[1, 60]</p><p>单位：秒</p><p>默认值：5</p>
     */
    public $SliceVideo;

    /**
     * @var integer <p>音频切片时长</p><p>取值范围：[5, 60]</p><p>单位：秒</p><p>默认值：15</p>
     */
    public $SliceAudio;

    /**
     * @var integer <p>是否保存文件</p><p>枚举值：</p><ul><li>0： 0不保存</li><li>1： 1保存所有</li><li>2： 仅命中</li></ul><p>默认值：1</p>
     */
    public $SaveModerationFile;

    /**
     * @var integer <p>是否回调所有内容理解结果</p><p>枚举值：</p><ul><li>0： 回调所有结果</li><li>1： 仅回调命中结果</li></ul><p>默认值：0</p>
     */
    public $CallbackAllResults;

    /**
     * @param integer $ModerationType <p>AI 内容理解任务类型</p><p>枚举值：</p><ul><li>1： 音频切片理解</li><li>2： 视频截帧理解</li><li>3： 音视切片+视频截帧理解 </li></ul><p>默认值：3</p>
     * @param integer $MaxIdleTime <p>持续没有上行推流的状态超过MaxIdleTime的时长，自动停止切片。</p><p>取值范围：[30, 1800]</p><p>单位：秒</p><p>默认值：30</p>
     * @param integer $SliceVideo <p>视频截帧间隔</p><p>取值范围：[1, 60]</p><p>单位：秒</p><p>默认值：5</p>
     * @param integer $SliceAudio <p>音频切片时长</p><p>取值范围：[5, 60]</p><p>单位：秒</p><p>默认值：15</p>
     * @param integer $SaveModerationFile <p>是否保存文件</p><p>枚举值：</p><ul><li>0： 0不保存</li><li>1： 1保存所有</li><li>2： 仅命中</li></ul><p>默认值：1</p>
     * @param integer $CallbackAllResults <p>是否回调所有内容理解结果</p><p>枚举值：</p><ul><li>0： 回调所有结果</li><li>1： 仅回调命中结果</li></ul><p>默认值：0</p>
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
        if (array_key_exists("ModerationType",$param) and $param["ModerationType"] !== null) {
            $this->ModerationType = $param["ModerationType"];
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("SliceVideo",$param) and $param["SliceVideo"] !== null) {
            $this->SliceVideo = $param["SliceVideo"];
        }

        if (array_key_exists("SliceAudio",$param) and $param["SliceAudio"] !== null) {
            $this->SliceAudio = $param["SliceAudio"];
        }

        if (array_key_exists("SaveModerationFile",$param) and $param["SaveModerationFile"] !== null) {
            $this->SaveModerationFile = $param["SaveModerationFile"];
        }

        if (array_key_exists("CallbackAllResults",$param) and $param["CallbackAllResults"] !== null) {
            $this->CallbackAllResults = $param["CallbackAllResults"];
        }
    }
}
