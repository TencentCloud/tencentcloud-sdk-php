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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddAlarmPolicy请求参数结构体
 *
 * @method string getName() 获取<p>告警策略名</p>
 * @method void setName(string $Name) 设置<p>告警策略名</p>
 * @method integer getType() 获取<p>事件类型 1：资源不合规事件</p>
 * @method void setType(integer $Type) 设置<p>事件类型 1：资源不合规事件</p>
 * @method array getEventScope() 获取<p>事件范围  1：当前账号  2：多账号</p>
 * @method void setEventScope(array $EventScope) 设置<p>事件范围  1：当前账号  2：多账号</p>
 * @method array getRiskLevel() 获取<p>风险等级 1：高风险  2：中风险 3：低风险</p>
 * @method void setRiskLevel(array $RiskLevel) 设置<p>风险等级 1：高风险  2：中风险 3：低风险</p>
 * @method string getNoticeTime() 获取<p>通知时间段</p>
 * @method void setNoticeTime(string $NoticeTime) 设置<p>通知时间段</p>
 * @method string getNotificationMechanism() 获取<p>通知机制</p>
 * @method void setNotificationMechanism(string $NotificationMechanism) 设置<p>通知机制</p>
 * @method integer getStatus() 获取<p>状态 1：启用 2：停用</p>
 * @method void setStatus(integer $Status) 设置<p>状态 1：启用 2：停用</p>
 * @method array getNoticePeriod() 获取<p>通知周期</p>
 * @method void setNoticePeriod(array $NoticePeriod) 设置<p>通知周期</p>
 * @method string getDescription() 获取<p>策略描述</p>
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
 */
class AddAlarmPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>告警策略名</p>
     */
    public $Name;

    /**
     * @var integer <p>事件类型 1：资源不合规事件</p>
     */
    public $Type;

    /**
     * @var array <p>事件范围  1：当前账号  2：多账号</p>
     */
    public $EventScope;

    /**
     * @var array <p>风险等级 1：高风险  2：中风险 3：低风险</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>通知时间段</p>
     */
    public $NoticeTime;

    /**
     * @var string <p>通知机制</p>
     */
    public $NotificationMechanism;

    /**
     * @var integer <p>状态 1：启用 2：停用</p>
     */
    public $Status;

    /**
     * @var array <p>通知周期</p>
     */
    public $NoticePeriod;

    /**
     * @var string <p>策略描述</p>
     */
    public $Description;

    /**
     * @param string $Name <p>告警策略名</p>
     * @param integer $Type <p>事件类型 1：资源不合规事件</p>
     * @param array $EventScope <p>事件范围  1：当前账号  2：多账号</p>
     * @param array $RiskLevel <p>风险等级 1：高风险  2：中风险 3：低风险</p>
     * @param string $NoticeTime <p>通知时间段</p>
     * @param string $NotificationMechanism <p>通知机制</p>
     * @param integer $Status <p>状态 1：启用 2：停用</p>
     * @param array $NoticePeriod <p>通知周期</p>
     * @param string $Description <p>策略描述</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EventScope",$param) and $param["EventScope"] !== null) {
            $this->EventScope = $param["EventScope"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("NoticeTime",$param) and $param["NoticeTime"] !== null) {
            $this->NoticeTime = $param["NoticeTime"];
        }

        if (array_key_exists("NotificationMechanism",$param) and $param["NotificationMechanism"] !== null) {
            $this->NotificationMechanism = $param["NotificationMechanism"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NoticePeriod",$param) and $param["NoticePeriod"] !== null) {
            $this->NoticePeriod = $param["NoticePeriod"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
