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
 * 单条规则操作结果
 *
 * @method integer getId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsg() 获取文案提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置文案提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSuccess() 获取操作是否成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccess(boolean $Success) 设置操作是否成功
注意：此字段可能返回 null，表示取不到有效值。
 */
class CommonQualityOperateResult extends AbstractModel
{
    /**
     * @var integer id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 文案提示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var boolean 操作是否成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Success;

    /**
     * @param integer $Id id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Msg 文案提示
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Success 操作是否成功
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }
    }
}
