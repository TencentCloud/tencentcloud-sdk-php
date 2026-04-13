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
 * 告警策略列表单个记录结构体
 *
 * @method integer getAlarmPolicyId() 获取告警策略唯一标识id
 * @method void setAlarmPolicyId(integer $AlarmPolicyId) 设置告警策略唯一标识id
 * @method string getName() 获取策略名称
 * @method void setName(string $Name) 设置策略名称
 * @method integer getType() 获取事件类型
 * @method void setType(integer $Type) 设置事件类型
 * @method array getEventScope() 获取1：当前账号  2：多账号
 * @method void setEventScope(array $EventScope) 设置1：当前账号  2：多账号
 * @method array getRiskLevel() 获取1：高风险  2：中风险 3：低风险
 * @method void setRiskLevel(array $RiskLevel) 设置1：高风险  2：中风险 3：低风险
 * @method array getNoticePeriod() 获取通知周期，1-7数字分别代表周一至周日
 * @method void setNoticePeriod(array $NoticePeriod) 设置通知周期，1-7数字分别代表周一至周日
 * @method string getNoticeTime() 获取通知时间段
 * @method void setNoticeTime(string $NoticeTime) 设置通知时间段
 * @method string getNotificationMechanism() 获取通知机制
 * @method void setNotificationMechanism(string $NotificationMechanism) 设置通知机制
 * @method integer getStatus() 获取策略状态 1：启动  2：停止
 * @method void setStatus(integer $Status) 设置策略状态 1：启动  2：停止
 * @method string getDescription() 获取策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置策略描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmPolicyRsp extends AbstractModel
{
    /**
     * @var integer 告警策略唯一标识id
     */
    public $AlarmPolicyId;

    /**
     * @var string 策略名称
     */
    public $Name;

    /**
     * @var integer 事件类型
     */
    public $Type;

    /**
     * @var array 1：当前账号  2：多账号
     */
    public $EventScope;

    /**
     * @var array 1：高风险  2：中风险 3：低风险
     */
    public $RiskLevel;

    /**
     * @var array 通知周期，1-7数字分别代表周一至周日
     */
    public $NoticePeriod;

    /**
     * @var string 通知时间段
     */
    public $NoticeTime;

    /**
     * @var string 通知机制
     */
    public $NotificationMechanism;

    /**
     * @var integer 策略状态 1：启动  2：停止
     */
    public $Status;

    /**
     * @var string 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param integer $AlarmPolicyId 告警策略唯一标识id
     * @param string $Name 策略名称
     * @param integer $Type 事件类型
     * @param array $EventScope 1：当前账号  2：多账号
     * @param array $RiskLevel 1：高风险  2：中风险 3：低风险
     * @param array $NoticePeriod 通知周期，1-7数字分别代表周一至周日
     * @param string $NoticeTime 通知时间段
     * @param string $NotificationMechanism 通知机制
     * @param integer $Status 策略状态 1：启动  2：停止
     * @param string $Description 策略描述
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
        if (array_key_exists("AlarmPolicyId",$param) and $param["AlarmPolicyId"] !== null) {
            $this->AlarmPolicyId = $param["AlarmPolicyId"];
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

        if (array_key_exists("NoticePeriod",$param) and $param["NoticePeriod"] !== null) {
            $this->NoticePeriod = $param["NoticePeriod"];
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
