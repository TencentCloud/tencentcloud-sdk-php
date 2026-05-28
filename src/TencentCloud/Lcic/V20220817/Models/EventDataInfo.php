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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 房间事件对应的信息。
 *
 * @method integer getRoomId() 获取<p>事件发生的房间号。</p>
 * @method void setRoomId(integer $RoomId) 设置<p>事件发生的房间号。</p>
 * @method string getUserId() 获取<p>事件发生的用户。</p>
 * @method void setUserId(string $UserId) 设置<p>事件发生的用户。</p>
 * @method integer getDevice() 获取<p>用户设备类型。0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Weixin Mini Program.</p>
 * @method void setDevice(integer $Device) 设置<p>用户设备类型。0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Weixin Mini Program.</p>
 * @method integer getDuration() 获取<p>录制时长。单位：秒</p>
 * @method void setDuration(integer $Duration) 设置<p>录制时长。单位：秒</p>
 * @method integer getRecordSize() 获取<p>录制文件大小</p>
 * @method void setRecordSize(integer $RecordSize) 设置<p>录制文件大小</p>
 * @method string getRecordUrl() 获取<p>录制url</p>
 * @method void setRecordUrl(string $RecordUrl) 设置<p>录制url</p>
 * @method integer getReason() 获取<p>MemberQuit事件，对应Reason（0:主动退出 1:被踢 2:永久被踢 4:失去心跳下线 5:房间结束，成员自动退出）</p>
 * @method void setReason(integer $Reason) 设置<p>MemberQuit事件，对应Reason（0:主动退出 1:被踢 2:永久被踢 4:失去心跳下线 5:房间结束，成员自动退出）</p>
 * @method integer getRole() 获取<p>角色</p><p>枚举值：</p><ul><li>0： 学生</li><li>1： 老师</li><li>2： 助教</li><li>3： 巡课/督导</li></ul>
 * @method void setRole(integer $Role) 设置<p>角色</p><p>枚举值：</p><ul><li>0： 学生</li><li>1： 老师</li><li>2： 助教</li><li>3： 巡课/督导</li></ul>
 */
class EventDataInfo extends AbstractModel
{
    /**
     * @var integer <p>事件发生的房间号。</p>
     */
    public $RoomId;

    /**
     * @var string <p>事件发生的用户。</p>
     */
    public $UserId;

    /**
     * @var integer <p>用户设备类型。0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Weixin Mini Program.</p>
     */
    public $Device;

    /**
     * @var integer <p>录制时长。单位：秒</p>
     */
    public $Duration;

    /**
     * @var integer <p>录制文件大小</p>
     */
    public $RecordSize;

    /**
     * @var string <p>录制url</p>
     */
    public $RecordUrl;

    /**
     * @var integer <p>MemberQuit事件，对应Reason（0:主动退出 1:被踢 2:永久被踢 4:失去心跳下线 5:房间结束，成员自动退出）</p>
     */
    public $Reason;

    /**
     * @var integer <p>角色</p><p>枚举值：</p><ul><li>0： 学生</li><li>1： 老师</li><li>2： 助教</li><li>3： 巡课/督导</li></ul>
     */
    public $Role;

    /**
     * @param integer $RoomId <p>事件发生的房间号。</p>
     * @param string $UserId <p>事件发生的用户。</p>
     * @param integer $Device <p>用户设备类型。0: Unknown; 1: Windows; 2: macOS; 3: Android; 4: iOS; 5: Web; 6: Mobile webpage; 7: Weixin Mini Program.</p>
     * @param integer $Duration <p>录制时长。单位：秒</p>
     * @param integer $RecordSize <p>录制文件大小</p>
     * @param string $RecordUrl <p>录制url</p>
     * @param integer $Reason <p>MemberQuit事件，对应Reason（0:主动退出 1:被踢 2:永久被踢 4:失去心跳下线 5:房间结束，成员自动退出）</p>
     * @param integer $Role <p>角色</p><p>枚举值：</p><ul><li>0： 学生</li><li>1： 老师</li><li>2： 助教</li><li>3： 巡课/督导</li></ul>
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

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }
    }
}
