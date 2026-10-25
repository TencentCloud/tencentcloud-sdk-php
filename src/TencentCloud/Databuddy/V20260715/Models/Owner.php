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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 责任人
 *
 * @method string getUserId() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取 0:USER, 1:GROUP
 * @method void setType(integer $Type) 设置 0:USER, 1:GROUP
 */
class Owner extends AbstractModel
{
    /**
     * @var string 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 用户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var integer  0:USER, 1:GROUP
     */
    public $Type;

    /**
     * @param string $UserId 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type  0:USER, 1:GROUP
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
