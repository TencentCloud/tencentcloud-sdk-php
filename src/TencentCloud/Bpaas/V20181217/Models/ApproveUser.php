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
namespace TencentCloud\Bpaas\V20181217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审批人
 *
 * @method integer getUin() 获取用户uin
 * @method void setUin(integer $Uin) 设置用户uin
 * @method integer getType() 获取用户类型 (1:用户  2:用户组)
 * @method void setType(integer $Type) 设置用户类型 (1:用户  2:用户组)
 * @method string getDesc() 获取用户描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置用户描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNick() 获取用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNick(string $Nick) 设置用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method Scf getScf() 获取动态获取Scf
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScf(Scf $Scf) 设置动态获取Scf
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApproveUser extends AbstractModel
{
    /**
     * @var integer 用户uin
     */
    public $Uin;

    /**
     * @var integer 用户类型 (1:用户  2:用户组)
     */
    public $Type;

    /**
     * @var string 用户描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var string 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nick;

    /**
     * @var Scf 动态获取Scf
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scf;

    /**
     * @param integer $Uin 用户uin
     * @param integer $Type 用户类型 (1:用户  2:用户组)
     * @param string $Desc 用户描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nick 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param Scf $Scf 动态获取Scf
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Scf",$param) and $param["Scf"] !== null) {
            $this->Scf = new Scf();
            $this->Scf->deserialize($param["Scf"]);
        }
    }
}
