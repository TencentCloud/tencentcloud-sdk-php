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
 * 告警信息
 *
 * @method string getAlarmId() 获取告警策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmId(string $AlarmId) 设置告警策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取告警是否生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置告警是否生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmType() 获取告警类别，目前支持失败告警，超时告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmType(string $AlarmType) 设置告警类别，目前支持失败告警，超时告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmWay() 获取告警方式 ，目前支持email提醒，短信提醒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmWay(string $AlarmWay) 设置告警方式 ，目前支持email提醒，短信提醒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取告警创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置告警创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmRecipient() 获取告警接收人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmRecipient(string $AlarmRecipient) 设置告警接收人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmRecipientId() 获取告警接收人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmRecipientId(string $AlarmRecipientId) 设置告警接收人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取告警修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置告警修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastFailTime() 获取最近失败告警实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastFailTime(string $LastFailTime) 设置最近失败告警实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastOverTime() 获取最近超时告警实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastOverTime(string $LastOverTime) 设置最近超时告警实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastAlarmTime() 获取最新告警时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastAlarmTime(string $LastAlarmTime) 设置最新告警时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlarmExt() 获取AlarmExt信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmExt(array $AlarmExt) 设置AlarmExt信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取告警创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置告警创建时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmDsVO extends AbstractModel
{
    /**
     * @var string 告警策略id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmId;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var integer 告警是否生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 告警类别，目前支持失败告警，超时告警
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmType;

    /**
     * @var string 告警方式 ，目前支持email提醒，短信提醒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmWay;

    /**
     * @var string 告警创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string 告警接收人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmRecipient;

    /**
     * @var string 告警接收人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmRecipientId;

    /**
     * @var string 告警修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 最近失败告警实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastFailTime;

    /**
     * @var string 最近超时告警实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastOverTime;

    /**
     * @var string 最新告警时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastAlarmTime;

    /**
     * @var array AlarmExt信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmExt;

    /**
     * @var string 告警创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param string $AlarmId 告警策略id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 告警是否生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmType 告警类别，目前支持失败告警，超时告警
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmWay 告警方式 ，目前支持email提醒，短信提醒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 告警创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmRecipient 告警接收人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmRecipientId 告警接收人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 告警修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastFailTime 最近失败告警实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastOverTime 最近超时告警实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastAlarmTime 最新告警时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlarmExt AlarmExt信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 告警创建时间
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
        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("AlarmWay",$param) and $param["AlarmWay"] !== null) {
            $this->AlarmWay = $param["AlarmWay"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("AlarmRecipient",$param) and $param["AlarmRecipient"] !== null) {
            $this->AlarmRecipient = $param["AlarmRecipient"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("LastFailTime",$param) and $param["LastFailTime"] !== null) {
            $this->LastFailTime = $param["LastFailTime"];
        }

        if (array_key_exists("LastOverTime",$param) and $param["LastOverTime"] !== null) {
            $this->LastOverTime = $param["LastOverTime"];
        }

        if (array_key_exists("LastAlarmTime",$param) and $param["LastAlarmTime"] !== null) {
            $this->LastAlarmTime = $param["LastAlarmTime"];
        }

        if (array_key_exists("AlarmExt",$param) and $param["AlarmExt"] !== null) {
            $this->AlarmExt = [];
            foreach ($param["AlarmExt"] as $key => $value){
                $obj = new AlarmExtDsVO();
                $obj->deserialize($value);
                array_push($this->AlarmExt, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
