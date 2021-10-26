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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数修改事件信息
 *
 * @method string getParamName() 获取参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamName(string $ParamName) 设置参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldValue() 获取原参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldValue(string $OldValue) 设置原参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewValue() 获取本次修改期望参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewValue(string $NewValue) 设置本次修改期望参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取后台参数修改开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置后台参数修改开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEffectiveTime() 获取后台参数生效开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEffectiveTime(string $EffectiveTime) 设置后台参数生效开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取修改状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置修改状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取操作者（一般为用户sub UIN）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置操作者（一般为用户sub UIN）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventLog() 获取时间日志。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventLog(string $EventLog) 设置时间日志。
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventInfo extends AbstractModel
{
    /**
     * @var string 参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamName;

    /**
     * @var string 原参数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldValue;

    /**
     * @var string 本次修改期望参数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewValue;

    /**
     * @var string 后台参数修改开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 后台参数生效开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EffectiveTime;

    /**
     * @var string 修改状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 操作者（一般为用户sub UIN）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string 时间日志。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventLog;

    /**
     * @param string $ParamName 参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldValue 原参数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewValue 本次修改期望参数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 后台参数修改开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EffectiveTime 后台参数生效开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 修改状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator 操作者（一般为用户sub UIN）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventLog 时间日志。
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("EventLog",$param) and $param["EventLog"] !== null) {
            $this->EventLog = $param["EventLog"];
        }
    }
}
