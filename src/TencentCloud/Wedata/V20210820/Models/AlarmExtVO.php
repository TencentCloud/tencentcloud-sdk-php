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
 * AlarmExtVO信息
 *
 * @method string getAlarmId() 获取告警策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmId(string $AlarmId) 设置告警策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPropName() 获取扩展字段key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropName(string $PropName) 设置扩展字段key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPropValue() 获取扩展字段value
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropValue(string $PropValue) 设置扩展字段value
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取告警创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置告警创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmExtVO extends AbstractModel
{
    /**
     * @var string 告警策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmId;

    /**
     * @var string 扩展字段key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropName;

    /**
     * @var string 扩展字段value
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropValue;

    /**
     * @var string 告警创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @param string $AlarmId 告警策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PropName 扩展字段key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PropValue 扩展字段value
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 告警创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 修改时间
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

        if (array_key_exists("PropName",$param) and $param["PropName"] !== null) {
            $this->PropName = $param["PropName"];
        }

        if (array_key_exists("PropValue",$param) and $param["PropValue"] !== null) {
            $this->PropValue = $param["PropValue"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
