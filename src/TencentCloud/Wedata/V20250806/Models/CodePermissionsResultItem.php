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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据探索文件授权结果
 *
 * @method string getItem() 获取资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItem(string $Item) 设置资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getResult() 获取该资源权限操作是否成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(boolean $Result) 设置该资源权限操作是否成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取若是创建失败, 提供失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置若是创建失败, 提供失败原因
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodePermissionsResultItem extends AbstractModel
{
    /**
     * @var string 资源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Item;

    /**
     * @var boolean 该资源权限操作是否成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 若是创建失败, 提供失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @param string $Item 资源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Result 该资源权限操作是否成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 若是创建失败, 提供失败原因
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
