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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动作对象
 *
 * @method integer getId() 获取动作id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置动作id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取动作名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置动作名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取动作类型。（app/推送消息至应用-携带空间设备：无,appWithNearbyDevices/推送至应用-携带空间设备：携带,device/推送消息至设备-指定设备,nearbyDevices/推送消息至设备-事件所在范围内的设备,toAlarm/转换为告警,toNotification/转换为通知）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置动作类型。（app/推送消息至应用-携带空间设备：无,appWithNearbyDevices/推送至应用-携带空间设备：携带,device/推送消息至设备-指定设备,nearbyDevices/推送消息至设备-事件所在范围内的设备,toAlarm/转换为告警,toNotification/转换为通知）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取动作说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置动作说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgType() 获取消息类型，orgin/custom/model
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgType(string $MsgType) 设置消息类型，orgin/custom/model
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgContent() 获取消息内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgContent(string $MsgContent) 设置消息内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSinkConfig() 获取动作下沉配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSinkConfig(string $SinkConfig) 设置动作下沉配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplyDevice() 获取 具体应用（appid）/具体设备（DIN/subID）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplyDevice(string $ApplyDevice) 设置 具体应用（appid）/具体设备（DIN/subID）
注意：此字段可能返回 null，表示取不到有效值。
 */
class ActionObj extends AbstractModel
{
    /**
     * @var integer 动作id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 动作名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 动作类型。（app/推送消息至应用-携带空间设备：无,appWithNearbyDevices/推送至应用-携带空间设备：携带,device/推送消息至设备-指定设备,nearbyDevices/推送消息至设备-事件所在范围内的设备,toAlarm/转换为告警,toNotification/转换为通知）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 动作说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var string 消息类型，orgin/custom/model
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgType;

    /**
     * @var string 消息内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgContent;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 动作下沉配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SinkConfig;

    /**
     * @var string  具体应用（appid）/具体设备（DIN/subID）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplyDevice;

    /**
     * @param integer $Id 动作id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 动作名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 动作类型。（app/推送消息至应用-携带空间设备：无,appWithNearbyDevices/推送至应用-携带空间设备：携带,device/推送消息至设备-指定设备,nearbyDevices/推送消息至设备-事件所在范围内的设备,toAlarm/转换为告警,toNotification/转换为通知）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 动作说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgType 消息类型，orgin/custom/model
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgContent 消息内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SinkConfig 动作下沉配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplyDevice  具体应用（appid）/具体设备（DIN/subID）
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("MsgType",$param) and $param["MsgType"] !== null) {
            $this->MsgType = $param["MsgType"];
        }

        if (array_key_exists("MsgContent",$param) and $param["MsgContent"] !== null) {
            $this->MsgContent = $param["MsgContent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SinkConfig",$param) and $param["SinkConfig"] !== null) {
            $this->SinkConfig = $param["SinkConfig"];
        }

        if (array_key_exists("ApplyDevice",$param) and $param["ApplyDevice"] !== null) {
            $this->ApplyDevice = $param["ApplyDevice"];
        }
    }
}
