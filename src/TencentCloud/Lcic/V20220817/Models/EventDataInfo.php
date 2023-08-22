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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 房间事件对应的信息。
 *
 * @method integer getRoomId() 获取事件发生的房间号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoomId(integer $RoomId) 设置事件发生的房间号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取事件发生的用户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置事件发生的用户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDevice() 获取用户设备类型。0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Weixin Mini Program.
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevice(integer $Device) 设置用户设备类型。0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Weixin Mini Program.
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取录制时长。单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置录制时长。单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordSize() 获取录制文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordSize(integer $RecordSize) 设置录制文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordUrl() 获取录制url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordUrl(string $RecordUrl) 设置录制url
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventDataInfo extends AbstractModel
{
    /**
     * @var integer 事件发生的房间号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoomId;

    /**
     * @var string 事件发生的用户。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var integer 用户设备类型。0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Weixin Mini Program.
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Device;

    /**
     * @var integer 录制时长。单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 录制文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordSize;

    /**
     * @var string 录制url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordUrl;

    /**
     * @param integer $RoomId 事件发生的房间号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 事件发生的用户。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Device 用户设备类型。0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Weixin Mini Program.
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 录制时长。单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordSize 录制文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordUrl 录制url
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = $param["Device"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RecordSize",$param) and $param["RecordSize"] !== null) {
            $this->RecordSize = $param["RecordSize"];
        }

        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }
    }
}
