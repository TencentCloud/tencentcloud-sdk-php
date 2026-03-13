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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 变更日志
 *
 * @method string getChangeType() 获取变更类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChangeType(string $ChangeType) 设置变更类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldValue() 获取修改前的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldValue(string $OldValue) 设置修改前的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewValue() 获取修改后的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewValue(string $NewValue) 设置修改后的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedAccount() 获取修改人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedAccount(string $ModifiedAccount) 设置修改人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChangeReason() 获取修改原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChangeReason(string $ChangeReason) 设置修改原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedAccountName() 获取修改人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedAccountName(string $ModifiedAccountName) 设置修改人名字
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChangeLog extends AbstractModel
{
    /**
     * @var string 变更类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChangeType;

    /**
     * @var string 修改前的值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldValue;

    /**
     * @var string 修改后的值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewValue;

    /**
     * @var string 修改人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedAccount;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var string 修改原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChangeReason;

    /**
     * @var string 修改人名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedAccountName;

    /**
     * @param string $ChangeType 变更类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldValue 修改前的值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewValue 修改后的值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedAccount 修改人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChangeReason 修改原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedAccountName 修改人名字
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
        if (array_key_exists("ChangeType",$param) and $param["ChangeType"] !== null) {
            $this->ChangeType = $param["ChangeType"];
        }

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }

        if (array_key_exists("ModifiedAccount",$param) and $param["ModifiedAccount"] !== null) {
            $this->ModifiedAccount = $param["ModifiedAccount"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ChangeReason",$param) and $param["ChangeReason"] !== null) {
            $this->ChangeReason = $param["ChangeReason"];
        }

        if (array_key_exists("ModifiedAccountName",$param) and $param["ModifiedAccountName"] !== null) {
            $this->ModifiedAccountName = $param["ModifiedAccountName"];
        }
    }
}
