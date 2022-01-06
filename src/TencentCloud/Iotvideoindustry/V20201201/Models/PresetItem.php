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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预置位结构出参
 *
 * @method integer getPresetId() 获取预置位ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetId(integer $PresetId) 设置预置位ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPresetName() 获取预置位名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetName(string $PresetName) 设置预置位名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取预置位状态 0:未设置预置位 1:已设置预置位 2:已设置预置位&看守位
 * @method void setStatus(integer $Status) 设置预置位状态 0:未设置预置位 1:已设置预置位 2:已设置预置位&看守位
 * @method integer getResetTime() 获取预置位启用时的自动归位时间
 * @method void setResetTime(integer $ResetTime) 设置预置位启用时的自动归位时间
 */
class PresetItem extends AbstractModel
{
    /**
     * @var integer 预置位ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetId;

    /**
     * @var string 预置位名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetName;

    /**
     * @var integer 预置位状态 0:未设置预置位 1:已设置预置位 2:已设置预置位&看守位
     */
    public $Status;

    /**
     * @var integer 预置位启用时的自动归位时间
     */
    public $ResetTime;

    /**
     * @param integer $PresetId 预置位ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PresetName 预置位名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 预置位状态 0:未设置预置位 1:已设置预置位 2:已设置预置位&看守位
     * @param integer $ResetTime 预置位启用时的自动归位时间
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
        if (array_key_exists("PresetId",$param) and $param["PresetId"] !== null) {
            $this->PresetId = $param["PresetId"];
        }

        if (array_key_exists("PresetName",$param) and $param["PresetName"] !== null) {
            $this->PresetName = $param["PresetName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResetTime",$param) and $param["ResetTime"] !== null) {
            $this->ResetTime = $param["ResetTime"];
        }
    }
}
