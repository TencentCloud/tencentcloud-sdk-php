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
 * @method string getNotifyId() 获取<p>通知的唯一ID</p>
 * @method void setNotifyId(string $NotifyId) 设置<p>通知的唯一ID</p>
 * @method string getPolicyId() 获取<p>告警策略ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>告警策略ID</p>
 * @method string getSessionId() 获取<p>告警周期iD</p>
 * @method void setSessionId(string $SessionId) 设置<p>告警周期iD</p>
 * @method integer getNotifyTime() 获取<p>通知时间 unix秒级时间戳</p>
 * @method void setNotifyTime(integer $NotifyTime) 设置<p>通知时间 unix秒级时间戳</p>
 * @method integer getTriggerTime() 获取<p>触发时间 unix秒级时间戳</p>
 * @method void setTriggerTime(integer $TriggerTime) 设置<p>触发时间 unix秒级时间戳</p>
 * @method string getTriggerLevel() 获取<p>告警级别 None 非分级告警级别; Note 提示级别; Warn 严重级别; Serious 紧急级别</p>
 * @method void setTriggerLevel(string $TriggerLevel) 设置<p>告警级别 None 非分级告警级别; Note 提示级别; Warn 严重级别; Serious 紧急级别</p>
 * @method string getAlarmContent() 获取<p>告警内容</p>
 * @method void setAlarmContent(string $AlarmContent) 设置<p>告警内容</p>
 * @method string getAlarmObject() 获取<p>告警对象</p>
 * @method void setAlarmObject(string $AlarmObject) 设置<p>告警对象</p>
 * @method array getChannelSet() 获取<p>本次告警通知涉及到的渠道合集</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelSet(array $ChannelSet) 设置<p>本次告警通知涉及到的渠道合集</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChannelsReceivers() 获取<p>渠道的接收人信息</p>
 * @method void setChannelsReceivers(array $ChannelsReceivers) 设置<p>渠道的接收人信息</p>
 * @method string getPolicyName() 获取<p>告警策略名称</p>
 * @method void setPolicyName(string $PolicyName) 设置<p>告警策略名称</p>
 * @method string getPromeInstanceID() 获取<p>Prometheus实例ID, 仅当 MT_PROME 时有效</p>
 * @method void setPromeInstanceID(string $PromeInstanceID) 设置<p>Prometheus实例ID, 仅当 MT_PROME 时有效</p>
 * @method string getPromeInstanceRegion() 获取<p>Prometheus实例所在的地域, 仅当 MT_PROME 时有效</p>
 * @method void setPromeInstanceRegion(string $PromeInstanceRegion) 设置<p>Prometheus实例所在的地域, 仅当 MT_PROME 时有效</p>
 * @method array getNotices() 获取<p>通知模板相关的配置信息</p>
 * @method void setNotices(array $Notices) 设置<p>通知模板相关的配置信息</p>
 * @method string getTriggerStatus() 获取<p>告警触发状态  Trigger 告警状态触发; Recovery 告警状态恢复</p>
 * @method void setTriggerStatus(string $TriggerStatus) 设置<p>告警触发状态  Trigger 告警状态触发; Recovery 告警状态恢复</p>
 * @method string getPromeConsoleURL() 获取<p>与当前Prometheus通知历史相关控制台页面地址，仅当 MR_PROME 时有效</p>
 * @method void setPromeConsoleURL(string $PromeConsoleURL) 设置<p>与当前Prometheus通知历史相关控制台页面地址，仅当 MR_PROME 时有效</p>
 * @method array getLabels() 获取<p>告警的lable</p>
 * @method void setLabels(array $Labels) 设置<p>告警的lable</p>
 * @method array getReceiverGroups() 获取<p>该条通知实际执行的接收人/组明细。一条元素对应通知模板里的一条渠道发送规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverGroups(array $ReceiverGroups) 设置<p>该条通知实际执行的接收人/组明细。一条元素对应通知模板里的一条渠道发送规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmNotifyHistory extends AbstractModel
{
    /**
     * @var string <p>通知的唯一ID</p>
     */
    public $NotifyId;

    /**
     * @var string <p>告警策略ID</p>
     */
    public $PolicyId;

    /**
     * @var string <p>告警周期iD</p>
     */
    public $SessionId;

    /**
     * @var integer <p>通知时间 unix秒级时间戳</p>
     */
    public $NotifyTime;

    /**
     * @var integer <p>触发时间 unix秒级时间戳</p>
     */
    public $TriggerTime;

    /**
     * @var string <p>告警级别 None 非分级告警级别; Note 提示级别; Warn 严重级别; Serious 紧急级别</p>
     */
    public $TriggerLevel;

    /**
     * @var string <p>告警内容</p>
     */
    public $AlarmContent;

    /**
     * @var string <p>告警对象</p>
     */
    public $AlarmObject;

    /**
     * @var array <p>本次告警通知涉及到的渠道合集</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelSet;

    /**
     * @var array <p>渠道的接收人信息</p>
     */
    public $ChannelsReceivers;

    /**
     * @var string <p>告警策略名称</p>
     */
    public $PolicyName;

    /**
     * @var string <p>Prometheus实例ID, 仅当 MT_PROME 时有效</p>
     */
    public $PromeInstanceID;

    /**
     * @var string <p>Prometheus实例所在的地域, 仅当 MT_PROME 时有效</p>
     */
    public $PromeInstanceRegion;

    /**
     * @var array <p>通知模板相关的配置信息</p>
     */
    public $Notices;

    /**
     * @var string <p>告警触发状态  Trigger 告警状态触发; Recovery 告警状态恢复</p>
     */
    public $TriggerStatus;

    /**
     * @var string <p>与当前Prometheus通知历史相关控制台页面地址，仅当 MR_PROME 时有效</p>
     */
    public $PromeConsoleURL;

    /**
     * @var array <p>告警的lable</p>
     */
    public $Labels;

    /**
     * @var array <p>该条通知实际执行的接收人/组明细。一条元素对应通知模板里的一条渠道发送规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverGroups;

    /**
     * @param string $NotifyId <p>通知的唯一ID</p>
     * @param string $PolicyId <p>告警策略ID</p>
     * @param string $SessionId <p>告警周期iD</p>
     * @param integer $NotifyTime <p>通知时间 unix秒级时间戳</p>
     * @param integer $TriggerTime <p>触发时间 unix秒级时间戳</p>
     * @param string $TriggerLevel <p>告警级别 None 非分级告警级别; Note 提示级别; Warn 严重级别; Serious 紧急级别</p>
     * @param string $AlarmContent <p>告警内容</p>
     * @param string $AlarmObject <p>告警对象</p>
     * @param array $ChannelSet <p>本次告警通知涉及到的渠道合集</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChannelsReceivers <p>渠道的接收人信息</p>
     * @param string $PolicyName <p>告警策略名称</p>
     * @param string $PromeInstanceID <p>Prometheus实例ID, 仅当 MT_PROME 时有效</p>
     * @param string $PromeInstanceRegion <p>Prometheus实例所在的地域, 仅当 MT_PROME 时有效</p>
     * @param array $Notices <p>通知模板相关的配置信息</p>
     * @param string $TriggerStatus <p>告警触发状态  Trigger 告警状态触发; Recovery 告警状态恢复</p>
     * @param string $PromeConsoleURL <p>与当前Prometheus通知历史相关控制台页面地址，仅当 MR_PROME 时有效</p>
     * @param array $Labels <p>告警的lable</p>
     * @param array $ReceiverGroups <p>该条通知实际执行的接收人/组明细。一条元素对应通知模板里的一条渠道发送规则</p>
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

        if (array_key_exists("ReceiverGroups",$param) and $param["ReceiverGroups"] !== null) {
            $this->ReceiverGroups = [];
            foreach ($param["ReceiverGroups"] as $key => $value){
                $obj = new ReceiverGroup();
                $obj->deserialize($value);
                array_push($this->ReceiverGroups, $obj);
            }
        }
    }
}
