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
 * 读写权限状态
 *
 * @method boolean getCanWrite() 获取写权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanWrite(boolean $CanWrite) 设置写权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanDelete() 获取写权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanDelete(boolean $CanDelete) 设置写权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanRead() 获取写权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanRead(boolean $CanRead) 设置写权限
注意：此字段可能返回 null，表示取不到有效值。
 */
class PermissionStatus extends AbstractModel
{
    /**
     * @var boolean 写权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanWrite;

    /**
     * @var boolean 写权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanDelete;

    /**
     * @var boolean 写权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanRead;

    /**
     * @param boolean $CanWrite 写权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanDelete 写权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanRead 写权限
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
        if (array_key_exists("CanWrite",$param) and $param["CanWrite"] !== null) {
            $this->CanWrite = $param["CanWrite"];
        }

        if (array_key_exists("CanDelete",$param) and $param["CanDelete"] !== null) {
            $this->CanDelete = $param["CanDelete"];
        }

        if (array_key_exists("CanRead",$param) and $param["CanRead"] !== null) {
            $this->CanRead = $param["CanRead"];
        }
    }
}
