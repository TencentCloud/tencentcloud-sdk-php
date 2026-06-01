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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户组成员VO出参
 *
 * @method string getUserName() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedBy() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedBy(string $CreatedBy) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedOn() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserGroupMemberVO extends AbstractModel
{
    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 用户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedBy;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedOn;

    /**
     * @param string $UserName 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedBy 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedOn 创建时间
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }
    }
}
