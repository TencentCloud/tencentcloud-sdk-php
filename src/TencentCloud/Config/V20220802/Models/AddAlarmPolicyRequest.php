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
 * @method string getName() 获取告警策略名
 * @method void setName(string $Name) 设置告警策略名
 * @method array getEventScope() 获取事件范围  1：当前账号  2：多账号
 * @method void setEventScope(array $EventScope) 设置事件范围  1：当前账号  2：多账号
 * @method array getRiskLevel() 获取风险等级 1：高风险  2：中风险 3：低风险
 * @method void setRiskLevel(array $RiskLevel) 设置风险等级 1：高风险  2：中风险 3：低风险
 * @method string getNoticeTime() 获取通知时间段
 * @method void setNoticeTime(string $NoticeTime) 设置通知时间段
 * @method string getNotificationMechanism() 获取通知机制
 * @method void setNotificationMechanism(string $NotificationMechanism) 设置通知机制
 * @method integer getStatus() 获取状态 1：启用 2：停用
 * @method void setStatus(integer $Status) 设置状态 1：启用 2：停用
 * @method array getNoticePeriod() 获取通知周期
 * @method void setNoticePeriod(array $NoticePeriod) 设置通知周期
 * @method string getDescription() 获取策略描述
 * @method void setDescription(string $Description) 设置策略描述
 */
class AddAlarmPolicyRequest extends AbstractModel
{
    /**
     * @var string 告警策略名
     */
    public $Name;

    /**
     * @var array 事件范围  1：当前账号  2：多账号
     */
    public $EventScope;

    /**
     * @var array 风险等级 1：高风险  2：中风险 3：低风险
     */
    public $RiskLevel;

    /**
     * @var string 通知时间段
     */
    public $NoticeTime;

    /**
     * @var string 通知机制
     */
    public $NotificationMechanism;

    /**
     * @var integer 状态 1：启用 2：停用
     */
    public $Status;

    /**
     * @var array 通知周期
     */
    public $NoticePeriod;

    /**
     * @var string 策略描述
     */
    public $Description;

    /**
     * @param string $Name 告警策略名
     * @param array $EventScope 事件范围  1：当前账号  2：多账号
     * @param array $RiskLevel 风险等级 1：高风险  2：中风险 3：低风险
     * @param string $NoticeTime 通知时间段
     * @param string $NotificationMechanism 通知机制
     * @param integer $Status 状态 1：启用 2：停用
     * @param array $NoticePeriod 通知周期
     * @param string $Description 策略描述
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
