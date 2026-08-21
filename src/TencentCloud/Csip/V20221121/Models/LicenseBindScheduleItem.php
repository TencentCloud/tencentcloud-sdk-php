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
 * 单台机器的绑定状态明细
 *
 * @method string getQuuid() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuuid(string $Quuid) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取绑定状态：0-初始化 1-成功 2-失败 3-跳过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置绑定状态：0-初始化 1-成功 2-失败 3-跳过
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMsg() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFixMessage() 获取修复建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixMessage(string $FixMessage) 设置修复建议
注意：此字段可能返回 null，表示取不到有效值。
 */
class LicenseBindScheduleItem extends AbstractModel
{
    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quuid;

    /**
     * @var integer 绑定状态：0-初始化 1-成功 2-失败 3-跳过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var string 修复建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixMessage;

    /**
     * @param string $Quuid 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 绑定状态：0-初始化 1-成功 2-失败 3-跳过
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMsg 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FixMessage 修复建议
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("FixMessage",$param) and $param["FixMessage"] !== null) {
            $this->FixMessage = $param["FixMessage"];
        }
    }
}
