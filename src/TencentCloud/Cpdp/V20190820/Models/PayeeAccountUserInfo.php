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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账户用户信息
 *
 * @method string getOutUserId() 获取外部用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutUserId(string $OutUserId) 设置外部用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserType() 获取用户类型
0:B端用户
1:C端用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserType(integer $UserType) 设置用户类型
0:B端用户
1:C端用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIdType() 获取证件类型
0:身份证
1:社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdType(integer $IdType) 设置证件类型
0:身份证
1:社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdNo() 获取证件号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdNo(string $IdNo) 设置证件号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置姓名
注意：此字段可能返回 null，表示取不到有效值。
 */
class PayeeAccountUserInfo extends AbstractModel
{
    /**
     * @var string 外部用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutUserId;

    /**
     * @var integer 用户类型
0:B端用户
1:C端用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserType;

    /**
     * @var integer 证件类型
0:身份证
1:社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdType;

    /**
     * @var string 证件号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdNo;

    /**
     * @var string 姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param string $OutUserId 外部用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserType 用户类型
0:B端用户
1:C端用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IdType 证件类型
0:身份证
1:社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdNo 证件号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 姓名
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
        if (array_key_exists("OutUserId",$param) and $param["OutUserId"] !== null) {
            $this->OutUserId = $param["OutUserId"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("IdNo",$param) and $param["IdNo"] !== null) {
            $this->IdNo = $param["IdNo"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
