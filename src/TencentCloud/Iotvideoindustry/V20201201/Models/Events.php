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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备事件列表
 *
 * @method integer getEventTime() 获取开始时间，秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventTime(integer $EventTime) 设置开始时间，秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventType() 获取事件类型 1:注册 2:心跳 4:录制异常 5:播放异常 6:流中断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventType(integer $EventType) 设置事件类型 1:注册 2:心跳 4:录制异常 5:播放异常 6:流中断
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventDesc() 获取事件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventDesc(string $EventDesc) 设置事件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeviceType() 获取设备类型
 * @method void setDeviceType(integer $DeviceType) 设置设备类型
 * @method string getDeviceAddress() 获取设备地址
 * @method void setDeviceAddress(string $DeviceAddress) 设置设备地址
 * @method string getDeviceId() 获取设备Id
 * @method void setDeviceId(string $DeviceId) 设置设备Id
 * @method string getChannelId() 获取通道Id
 * @method void setChannelId(string $ChannelId) 设置通道Id
 * @method string getEventLog() 获取事件日志
 * @method void setEventLog(string $EventLog) 设置事件日志
 * @method string getDeviceName() 获取设备备注名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceName(string $DeviceName) 设置设备备注名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class Events extends AbstractModel
{
    /**
     * @var integer 开始时间，秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventTime;

    /**
     * @var integer 事件类型 1:注册 2:心跳 4:录制异常 5:播放异常 6:流中断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventType;

    /**
     * @var string 事件描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventDesc;

    /**
     * @var integer 设备类型
     */
    public $DeviceType;

    /**
     * @var string 设备地址
     */
    public $DeviceAddress;

    /**
     * @var string 设备Id
     */
    public $DeviceId;

    /**
     * @var string 通道Id
     */
    public $ChannelId;

    /**
     * @var string 事件日志
     */
    public $EventLog;

    /**
     * @var string 设备备注名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceName;

    /**
     * @param integer $EventTime 开始时间，秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventType 事件类型 1:注册 2:心跳 4:录制异常 5:播放异常 6:流中断
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventDesc 事件描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeviceType 设备类型
     * @param string $DeviceAddress 设备地址
     * @param string $DeviceId 设备Id
     * @param string $ChannelId 通道Id
     * @param string $EventLog 事件日志
     * @param string $DeviceName 设备备注名称
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
        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventDesc",$param) and $param["EventDesc"] !== null) {
            $this->EventDesc = $param["EventDesc"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("DeviceAddress",$param) and $param["DeviceAddress"] !== null) {
            $this->DeviceAddress = $param["DeviceAddress"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("EventLog",$param) and $param["EventLog"] !== null) {
            $this->EventLog = $param["EventLog"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }
    }
}
