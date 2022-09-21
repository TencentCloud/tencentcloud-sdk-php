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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail返回参数结构体
 *
 * @method TaskInfo getTaskInfo() 获取任务信息，不包含任务结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInfo(TaskInfo $TaskInfo) 设置任务信息，不包含任务结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method Data getTaskData() 获取视频任务结果数据，只在视频任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskData(Data $TaskData) 设置视频任务结果数据，只在视频任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageData getImageTaskData() 获取图片任务结果数据，只在图片任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageTaskData(ImageData $ImageTaskData) 设置图片任务结果数据，只在图片任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioData getAudioTaskData() 获取音频任务结果数据，只在音频任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioTaskData(AudioData $AudioTaskData) 设置音频任务结果数据，只在音频任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method TextData getTextTaskData() 获取文本任务结果数据，只在文本任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextTaskData(TextData $TextTaskData) 设置文本任务结果数据，只在文本任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var TaskInfo 任务信息，不包含任务结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInfo;

    /**
     * @var Data 视频任务结果数据，只在视频任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskData;

    /**
     * @var ImageData 图片任务结果数据，只在图片任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageTaskData;

    /**
     * @var AudioData 音频任务结果数据，只在音频任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioTaskData;

    /**
     * @var TextData 文本任务结果数据，只在文本任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextTaskData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param TaskInfo $TaskInfo 任务信息，不包含任务结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param Data $TaskData 视频任务结果数据，只在视频任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageData $ImageTaskData 图片任务结果数据，只在图片任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioData $AudioTaskData 音频任务结果数据，只在音频任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param TextData $TextTaskData 文本任务结果数据，只在文本任务结束时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = new TaskInfo();
            $this->TaskInfo->deserialize($param["TaskInfo"]);
        }

        if (array_key_exists("TaskData",$param) and $param["TaskData"] !== null) {
            $this->TaskData = new Data();
            $this->TaskData->deserialize($param["TaskData"]);
        }

        if (array_key_exists("ImageTaskData",$param) and $param["ImageTaskData"] !== null) {
            $this->ImageTaskData = new ImageData();
            $this->ImageTaskData->deserialize($param["ImageTaskData"]);
        }

        if (array_key_exists("AudioTaskData",$param) and $param["AudioTaskData"] !== null) {
            $this->AudioTaskData = new AudioData();
            $this->AudioTaskData->deserialize($param["AudioTaskData"]);
        }

        if (array_key_exists("TextTaskData",$param) and $param["TextTaskData"] !== null) {
            $this->TextTaskData = new TextData();
            $this->TextTaskData->deserialize($param["TextTaskData"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
