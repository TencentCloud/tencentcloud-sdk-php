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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定失败明细
 *
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExceptionMessage() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionMessage(string $ExceptionMessage) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFixMessage() 获取修复建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixMessage(string $FixMessage) 设置修复建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method MachineExtraInfo getMachineExtraInfo() 获取机器额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置机器额外信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class LicenseBindFailedItem extends AbstractModel
{
    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionMessage;

    /**
     * @var string 修复建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixMessage;

    /**
     * @var MachineExtraInfo 机器额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExceptionMessage 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FixMessage 修复建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param MachineExtraInfo $MachineExtraInfo 机器额外信息
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ExceptionMessage",$param) and $param["ExceptionMessage"] !== null) {
            $this->ExceptionMessage = $param["ExceptionMessage"];
        }

        if (array_key_exists("FixMessage",$param) and $param["FixMessage"] !== null) {
            $this->FixMessage = $param["FixMessage"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
