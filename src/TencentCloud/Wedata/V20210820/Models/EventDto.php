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
 * 智能运维事件详情
 *
 * @method integer getId() 获取事件id
 * @method void setId(integer $Id) 设置事件id
 * @method string getInstanceId() 获取基线、任务实例id
 * @method void setInstanceId(string $InstanceId) 设置基线、任务实例id
 * @method string getEventTime() 获取产生事件时间
 * @method void setEventTime(string $EventTime) 设置产生事件时间
 * @method string getEventName() 获取事件名称
 * @method void setEventName(string $EventName) 设置事件名称
 * @method string getEventStatus() 获取事件状态.取值范围:

- new:表示新建
 
- processing:表示处理中
 * @method void setEventStatus(string $EventStatus) 设置事件状态.取值范围:

- new:表示新建
 
- processing:表示处理中
 * @method string getEventType() 获取事件类别/(基线or任务).取值范围:

- baseline: 表示基线

- task: 表示任务
 * @method void setEventType(string $EventType) 设置事件类别/(基线or任务).取值范围:

- baseline: 表示基线

- task: 表示任务
 * @method string getIsAlarm() 获取是否告警
 * @method void setIsAlarm(string $IsAlarm) 设置是否告警
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getBelongTo() 获取所属任务/基线的名称
 * @method void setBelongTo(string $BelongTo) 设置所属任务/基线的名称
 * @method integer getBaselineId() 获取基线、任务id
 * @method void setBaselineId(integer $BaselineId) 设置基线、任务id
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUin() 获取当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUin(string $UserUin) 设置当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取主账号uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置主账号uin
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventDto extends AbstractModel
{
    /**
     * @var integer 事件id
     */
    public $Id;

    /**
     * @var string 基线、任务实例id
     */
    public $InstanceId;

    /**
     * @var string 产生事件时间
     */
    public $EventTime;

    /**
     * @var string 事件名称
     */
    public $EventName;

    /**
     * @var string 事件状态.取值范围:

- new:表示新建
 
- processing:表示处理中
     */
    public $EventStatus;

    /**
     * @var string 事件类别/(基线or任务).取值范围:

- baseline: 表示基线

- task: 表示任务
     */
    public $EventType;

    /**
     * @var string 是否告警
     */
    public $IsAlarm;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 所属任务/基线的名称
     */
    public $BelongTo;

    /**
     * @var integer 基线、任务id
     */
    public $BaselineId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUin;

    /**
     * @var string 主账号uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @param integer $Id 事件id
     * @param string $InstanceId 基线、任务实例id
     * @param string $EventTime 产生事件时间
     * @param string $EventName 事件名称
     * @param string $EventStatus 事件状态.取值范围:

- new:表示新建
 
- processing:表示处理中
     * @param string $EventType 事件类别/(基线or任务).取值范围:

- baseline: 表示基线

- task: 表示任务
     * @param string $IsAlarm 是否告警
     * @param string $ProjectId 项目id
     * @param string $BelongTo 所属任务/基线的名称
     * @param integer $BaselineId 基线、任务id
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUin 当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 主账号uin
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("IsAlarm",$param) and $param["IsAlarm"] !== null) {
            $this->IsAlarm = $param["IsAlarm"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("BelongTo",$param) and $param["BelongTo"] !== null) {
            $this->BelongTo = $param["BelongTo"];
        }

        if (array_key_exists("BaselineId",$param) and $param["BaselineId"] !== null) {
            $this->BaselineId = $param["BaselineId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
