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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmRuleRequest
 *
 * @method string getAlarmId() 获取告警id
 * @method void setAlarmId(string $AlarmId) 设置告警id
 * @method string getRuleName() 获取规则名字
 * @method void setRuleName(string $RuleName) 设置规则名字
 * @method integer getMonitorType() 获取监控类型,1.task、2.workflow、3.project、4.baseline（默认为1.任务）
 * @method void setMonitorType(integer $MonitorType) 设置监控类型,1.task、2.workflow、3.project、4.baseline（默认为1.任务）
 * @method array getMonitorObjectIds() 获取监控对象
 * @method void setMonitorObjectIds(array $MonitorObjectIds) 设置监控对象
 * @method array getAlarmTypes() 获取告警类型，1.失败告警、2.超时告警、3.成功告警、4.基线破线、5.基线预警、6.基线任务失败（默认1.失败告警）
 * @method void setAlarmTypes(array $AlarmTypes) 设置告警类型，1.失败告警、2.超时告警、3.成功告警、4.基线破线、5.基线预警、6.基线任务失败（默认1.失败告警）
 * @method integer getAlarmLevel() 获取告警级别，1.普通、2.重要、3.紧急（默认1.普通）
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警级别，1.普通、2.重要、3.紧急（默认1.普通）
 * @method array getAlarmWays() 获取告警方式,1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群；告警方式code列表（默认1.邮件）
 * @method void setAlarmWays(array $AlarmWays) 设置告警方式,1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群；告警方式code列表（默认1.邮件）
 * @method integer getAlarmRecipientType() 获取告警接收人类型：1.指定人员，2.任务责任人，3.值班表（默认1.指定人员）
 * @method void setAlarmRecipientType(integer $AlarmRecipientType) 设置告警接收人类型：1.指定人员，2.任务责任人，3.值班表（默认1.指定人员）
 * @method array getAlarmRecipients() 获取告警接收人
 * @method void setAlarmRecipients(array $AlarmRecipients) 设置告警接收人
 * @method array getAlarmRecipientIds() 获取告警接收人ID
 * @method void setAlarmRecipientIds(array $AlarmRecipientIds) 设置告警接收人ID
 * @method string getExtInfo() 获取扩展信息, 1.预计运行耗时（默认），2.预计完成时间，3.预计调度时间，4.周期内未完成；取值类型：1.指定指，2.历史均值（默认1.指定指）
 * @method void setExtInfo(string $ExtInfo) 设置扩展信息, 1.预计运行耗时（默认），2.预计完成时间，3.预计调度时间，4.周期内未完成；取值类型：1.指定指，2.历史均值（默认1.指定指）
 */
class ModifyAlarmRuleRequest extends AbstractModel
{
    /**
     * @var string 告警id
     */
    public $AlarmId;

    /**
     * @var string 规则名字
     */
    public $RuleName;

    /**
     * @var integer 监控类型,1.task、2.workflow、3.project、4.baseline（默认为1.任务）
     */
    public $MonitorType;

    /**
     * @var array 监控对象
     */
    public $MonitorObjectIds;

    /**
     * @var array 告警类型，1.失败告警、2.超时告警、3.成功告警、4.基线破线、5.基线预警、6.基线任务失败（默认1.失败告警）
     */
    public $AlarmTypes;

    /**
     * @var integer 告警级别，1.普通、2.重要、3.紧急（默认1.普通）
     */
    public $AlarmLevel;

    /**
     * @var array 告警方式,1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群；告警方式code列表（默认1.邮件）
     */
    public $AlarmWays;

    /**
     * @var integer 告警接收人类型：1.指定人员，2.任务责任人，3.值班表（默认1.指定人员）
     */
    public $AlarmRecipientType;

    /**
     * @var array 告警接收人
     */
    public $AlarmRecipients;

    /**
     * @var array 告警接收人ID
     */
    public $AlarmRecipientIds;

    /**
     * @var string 扩展信息, 1.预计运行耗时（默认），2.预计完成时间，3.预计调度时间，4.周期内未完成；取值类型：1.指定指，2.历史均值（默认1.指定指）
     */
    public $ExtInfo;

    /**
     * @param string $AlarmId 告警id
     * @param string $RuleName 规则名字
     * @param integer $MonitorType 监控类型,1.task、2.workflow、3.project、4.baseline（默认为1.任务）
     * @param array $MonitorObjectIds 监控对象
     * @param array $AlarmTypes 告警类型，1.失败告警、2.超时告警、3.成功告警、4.基线破线、5.基线预警、6.基线任务失败（默认1.失败告警）
     * @param integer $AlarmLevel 告警级别，1.普通、2.重要、3.紧急（默认1.普通）
     * @param array $AlarmWays 告警方式,1.邮件，2.短信，3.微信，4.语音，5.企业微信，6.Http，7.企业微信群；告警方式code列表（默认1.邮件）
     * @param integer $AlarmRecipientType 告警接收人类型：1.指定人员，2.任务责任人，3.值班表（默认1.指定人员）
     * @param array $AlarmRecipients 告警接收人
     * @param array $AlarmRecipientIds 告警接收人ID
     * @param string $ExtInfo 扩展信息, 1.预计运行耗时（默认），2.预计完成时间，3.预计调度时间，4.周期内未完成；取值类型：1.指定指，2.历史均值（默认1.指定指）
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
        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("MonitorObjectIds",$param) and $param["MonitorObjectIds"] !== null) {
            $this->MonitorObjectIds = $param["MonitorObjectIds"];
        }

        if (array_key_exists("AlarmTypes",$param) and $param["AlarmTypes"] !== null) {
            $this->AlarmTypes = $param["AlarmTypes"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmWays",$param) and $param["AlarmWays"] !== null) {
            $this->AlarmWays = $param["AlarmWays"];
        }

        if (array_key_exists("AlarmRecipientType",$param) and $param["AlarmRecipientType"] !== null) {
            $this->AlarmRecipientType = $param["AlarmRecipientType"];
        }

        if (array_key_exists("AlarmRecipients",$param) and $param["AlarmRecipients"] !== null) {
            $this->AlarmRecipients = $param["AlarmRecipients"];
        }

        if (array_key_exists("AlarmRecipientIds",$param) and $param["AlarmRecipientIds"] !== null) {
            $this->AlarmRecipientIds = $param["AlarmRecipientIds"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
