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
 * 直播编排子任务输出
 *
 * @method LiveScheduleLiveRecordTaskResult getLiveRecordTask() 获取直播录制任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveRecordTask(LiveScheduleLiveRecordTaskResult $LiveRecordTask) 设置直播录制任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScheduleQualityControlTaskResult getLiveQualityControlTask() 获取媒体质检任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveQualityControlTask(ScheduleQualityControlTaskResult $LiveQualityControlTask) 设置媒体质检任务输出
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveActivityResItem extends AbstractModel
{
    /**
     * @var LiveScheduleLiveRecordTaskResult 直播录制任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveRecordTask;

    /**
     * @var ScheduleQualityControlTaskResult 媒体质检任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveQualityControlTask;

    /**
     * @param LiveScheduleLiveRecordTaskResult $LiveRecordTask 直播录制任务输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScheduleQualityControlTaskResult $LiveQualityControlTask 媒体质检任务输出
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
        if (array_key_exists("LiveRecordTask",$param) and $param["LiveRecordTask"] !== null) {
            $this->LiveRecordTask = new LiveScheduleLiveRecordTaskResult();
            $this->LiveRecordTask->deserialize($param["LiveRecordTask"]);
        }

        if (array_key_exists("LiveQualityControlTask",$param) and $param["LiveQualityControlTask"] !== null) {
            $this->LiveQualityControlTask = new ScheduleQualityControlTaskResult();
            $this->LiveQualityControlTask->deserialize($param["LiveQualityControlTask"]);
        }
    }
}
