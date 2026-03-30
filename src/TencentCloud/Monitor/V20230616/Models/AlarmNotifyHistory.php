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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个告警通知历史
 *
 * @method string getNotifyId() 获取通知的唯一ID
 * @method void setNotifyId(string $NotifyId) 设置通知的唯一ID
 * @method string getPolicyId() 获取告警策略ID
 * @method void setPolicyId(string $PolicyId) 设置告警策略ID
 * @method string getSessionId() 获取告警周期iD
 * @method void setSessionId(string $SessionId) 设置告警周期iD
 * @method integer getNotifyTime() 获取通知时间 unix秒级时间戳
 * @method void setNotifyTime(integer $NotifyTime) 设置通知时间 unix秒级时间戳
 * @method integer getTriggerTime() 获取触发时间 unix秒级时间戳
 * @method void setTriggerTime(integer $TriggerTime) 设置触发时间 unix秒级时间戳
 * @method string getTriggerLevel() 获取告警级别 None 非分级告警级别; Note 提示级别; Warn 严重级别; Serious 紧急级别
 * @method void setTriggerLevel(string $TriggerLevel) 设置告警级别 None 非分级告警级别; Note 提示级别; Warn 严重级别; Serious 紧急级别
 * @method string getAlarmContent() 获取告警内容
 * @method void setAlarmContent(string $AlarmContent) 设置告警内容
 * @method string getAlarmObject() 获取告警对象
 * @method void setAlarmObject(string $AlarmObject) 设置告警对象
 * @method array getChannelSet() 获取本次告警通知涉及到的渠道合集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelSet(array $ChannelSet) 设置本次告警通知涉及到的渠道合集
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChannelsReceivers() 获取渠道的接收人信息
 * @method void setChannelsReceivers(array $ChannelsReceivers) 设置渠道的接收人信息
 * @method string getPolicyName() 获取告警策略名称
 * @method void setPolicyName(string $PolicyName) 设置告警策略名称
 * @method string getPromeInstanceID() 获取Prometheus实例ID, 仅当 MT_PROME 时有效
 * @method void setPromeInstanceID(string $PromeInstanceID) 设置Prometheus实例ID, 仅当 MT_PROME 时有效
 * @method string getPromeInstanceRegion() 获取Prometheus实例所在的地域, 仅当 MT_PROME 时有效
 * @method void setPromeInstanceRegion(string $PromeInstanceRegion) 设置Prometheus实例所在的地域, 仅当 MT_PROME 时有效
 * @method array getNotices() 获取通知模板相关的配置信息
 * @method void setNotices(array $Notices) 设置通知模板相关的配置信息
 * @method string getTriggerStatus() 获取告警触发状态  Trigger 告警状态触发; Recovery 告警状态恢复
 * @method void setTriggerStatus(string $TriggerStatus) 设置告警触发状态  Trigger 告警状态触发; Recovery 告警状态恢复
 * @method string getPromeConsoleURL() 获取与当前Prometheus通知历史相关控制台页面地址，仅当 MR_PROME 时有效
 * @method void setPromeConsoleURL(string $PromeConsoleURL) 设置与当前Prometheus通知历史相关控制台页面地址，仅当 MR_PROME 时有效
 * @method array getLabels() 获取告警的lable
 * @method void setLabels(array $Labels) 设置告警的lable
 */
class AlarmNotifyHistory extends AbstractModel
{
    /**
     * @var string 通知的唯一ID
     */
    public $NotifyId;

    /**
     * @var string 告警策略ID
     */
    public $PolicyId;

    /**
     * @var string 告警周期iD
     */
    public $SessionId;

    /**
     * @var integer 通知时间 unix秒级时间戳
     */
    public $NotifyTime;

    /**
     * @var integer 触发时间 unix秒级时间戳
     */
    public $TriggerTime;

    /**
     * @var string 告警级别 None 非分级告警级别; Note 提示级别; Warn 严重级别; Serious 紧急级别
     */
    public $TriggerLevel;

    /**
     * @var string 告警内容
     */
    public $AlarmContent;

    /**
     * @var string 告警对象
     */
    public $AlarmObject;

    /**
     * @var array 本次告警通知涉及到的渠道合集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelSet;

    /**
     * @var array 渠道的接收人信息
     */
    public $ChannelsReceivers;

    /**
     * @var string 告警策略名称
     */
    public $PolicyName;

    /**
     * @var string Prometheus实例ID, 仅当 MT_PROME 时有效
     */
    public $PromeInstanceID;

    /**
     * @var string Prometheus实例所在的地域, 仅当 MT_PROME 时有效
     */
    public $PromeInstanceRegion;

    /**
     * @var array 通知模板相关的配置信息
     */
    public $Notices;

    /**
     * @var string 告警触发状态  Trigger 告警状态触发; Recovery 告警状态恢复
     */
    public $TriggerStatus;

    /**
     * @var string 与当前Prometheus通知历史相关控制台页面地址，仅当 MR_PROME 时有效
     */
    public $PromeConsoleURL;

    /**
     * @var array 告警的lable
     */
    public $Labels;

    /**
     * @param string $NotifyId 通知的唯一ID
     * @param string $PolicyId 告警策略ID
     * @param string $SessionId 告警周期iD
     * @param integer $NotifyTime 通知时间 unix秒级时间戳
     * @param integer $TriggerTime 触发时间 unix秒级时间戳
     * @param string $TriggerLevel 告警级别 None 非分级告警级别; Note 提示级别; Warn 严重级别; Serious 紧急级别
     * @param string $AlarmContent 告警内容
     * @param string $AlarmObject 告警对象
     * @param array $ChannelSet 本次告警通知涉及到的渠道合集
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChannelsReceivers 渠道的接收人信息
     * @param string $PolicyName 告警策略名称
     * @param string $PromeInstanceID Prometheus实例ID, 仅当 MT_PROME 时有效
     * @param string $PromeInstanceRegion Prometheus实例所在的地域, 仅当 MT_PROME 时有效
     * @param array $Notices 通知模板相关的配置信息
     * @param string $TriggerStatus 告警触发状态  Trigger 告警状态触发; Recovery 告警状态恢复
     * @param string $PromeConsoleURL 与当前Prometheus通知历史相关控制台页面地址，仅当 MR_PROME 时有效
     * @param array $Labels 告警的lable
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
        if (array_key_exists("NotifyId",$param) and $param["NotifyId"] !== null) {
            $this->NotifyId = $param["NotifyId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("NotifyTime",$param) and $param["NotifyTime"] !== null) {
            $this->NotifyTime = $param["NotifyTime"];
        }

        if (array_key_exists("TriggerTime",$param) and $param["TriggerTime"] !== null) {
            $this->TriggerTime = $param["TriggerTime"];
        }

        if (array_key_exists("TriggerLevel",$param) and $param["TriggerLevel"] !== null) {
            $this->TriggerLevel = $param["TriggerLevel"];
        }

        if (array_key_exists("AlarmContent",$param) and $param["AlarmContent"] !== null) {
            $this->AlarmContent = $param["AlarmContent"];
        }

        if (array_key_exists("AlarmObject",$param) and $param["AlarmObject"] !== null) {
            $this->AlarmObject = $param["AlarmObject"];
        }

        if (array_key_exists("ChannelSet",$param) and $param["ChannelSet"] !== null) {
            $this->ChannelSet = $param["ChannelSet"];
        }

        if (array_key_exists("ChannelsReceivers",$param) and $param["ChannelsReceivers"] !== null) {
            $this->ChannelsReceivers = [];
            foreach ($param["ChannelsReceivers"] as $key => $value){
                $obj = new ChannelsReceivers();
                $obj->deserialize($value);
                array_push($this->ChannelsReceivers, $obj);
            }
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PromeInstanceID",$param) and $param["PromeInstanceID"] !== null) {
            $this->PromeInstanceID = $param["PromeInstanceID"];
        }

        if (array_key_exists("PromeInstanceRegion",$param) and $param["PromeInstanceRegion"] !== null) {
            $this->PromeInstanceRegion = $param["PromeInstanceRegion"];
        }

        if (array_key_exists("Notices",$param) and $param["Notices"] !== null) {
            $this->Notices = [];
            foreach ($param["Notices"] as $key => $value){
                $obj = new NotifyRelatedNotice();
                $obj->deserialize($value);
                array_push($this->Notices, $obj);
            }
        }

        if (array_key_exists("TriggerStatus",$param) and $param["TriggerStatus"] !== null) {
            $this->TriggerStatus = $param["TriggerStatus"];
        }

        if (array_key_exists("PromeConsoleURL",$param) and $param["PromeConsoleURL"] !== null) {
            $this->PromeConsoleURL = $param["PromeConsoleURL"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new AlarmLable();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
