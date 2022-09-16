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
 * 降码率任务结果
 *
 * @method string getType() 获取任务的类型，可以取的值有：
<li>Transcode：转码</li>
<li>AdaptiveDynamicStreaming：自适应码流</li>
 * @method void setType(string $Type) 设置任务的类型，可以取的值有：
<li>Transcode：转码</li>
<li>AdaptiveDynamicStreaming：自适应码流</li>
 * @method ReduceMediaBitrateTranscodeResult getTranscodeTask() 获取降码率任务中视频转码任务的查询结果，当任务类型为 Transcode 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranscodeTask(ReduceMediaBitrateTranscodeResult $TranscodeTask) 设置降码率任务中视频转码任务的查询结果，当任务类型为 Transcode 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ReduceMediaBitrateAdaptiveDynamicStreamingResult getAdaptiveDynamicStreamingTask() 获取降码率任务中对视频转自适应码流任务的查询结果，当任务类型为 AdaptiveDynamicStreaming 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdaptiveDynamicStreamingTask(ReduceMediaBitrateAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask) 设置降码率任务中对视频转自适应码流任务的查询结果，当任务类型为 AdaptiveDynamicStreaming 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReduceMediaBitrateMediaProcessTaskResult extends AbstractModel
{
    /**
     * @var string 任务的类型，可以取的值有：
<li>Transcode：转码</li>
<li>AdaptiveDynamicStreaming：自适应码流</li>
     */
    public $Type;

    /**
     * @var ReduceMediaBitrateTranscodeResult 降码率任务中视频转码任务的查询结果，当任务类型为 Transcode 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranscodeTask;

    /**
     * @var ReduceMediaBitrateAdaptiveDynamicStreamingResult 降码率任务中对视频转自适应码流任务的查询结果，当任务类型为 AdaptiveDynamicStreaming 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdaptiveDynamicStreamingTask;

    /**
     * @param string $Type 任务的类型，可以取的值有：
<li>Transcode：转码</li>
<li>AdaptiveDynamicStreaming：自适应码流</li>
     * @param ReduceMediaBitrateTranscodeResult $TranscodeTask 降码率任务中视频转码任务的查询结果，当任务类型为 Transcode 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ReduceMediaBitrateAdaptiveDynamicStreamingResult $AdaptiveDynamicStreamingTask 降码率任务中对视频转自适应码流任务的查询结果，当任务类型为 AdaptiveDynamicStreaming 时有效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TranscodeTask",$param) and $param["TranscodeTask"] !== null) {
            $this->TranscodeTask = new ReduceMediaBitrateTranscodeResult();
            $this->TranscodeTask->deserialize($param["TranscodeTask"]);
        }

        if (array_key_exists("AdaptiveDynamicStreamingTask",$param) and $param["AdaptiveDynamicStreamingTask"] !== null) {
            $this->AdaptiveDynamicStreamingTask = new ReduceMediaBitrateAdaptiveDynamicStreamingResult();
            $this->AdaptiveDynamicStreamingTask->deserialize($param["AdaptiveDynamicStreamingTask"]);
        }
    }
}
