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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询账号信息列表。
 *
 * @method string getAccountId() 获取账号ID。
 * @method void setAccountId(string $AccountId) 设置账号ID。
 * @method string getAccountName() 获取账号名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountName(string $AccountName) 设置账号名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserList() 获取用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserList(array $UserList) 设置用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedDate() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedDate(string $CreatedDate) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppAccountInfo extends AbstractModel
{
    /**
     * @var string 账号ID。
     */
    public $AccountId;

    /**
     * @var string 账号名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountName;

    /**
     * @var array 用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserList;

    /**
     * @var string 描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedDate;

    /**
     * @param string $AccountId 账号ID。
     * @param string $AccountName 账号名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserList 用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedDate 创建时间。
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("UserList",$param) and $param["UserList"] !== null) {
            $this->UserList = [];
            foreach ($param["UserList"] as $key => $value){
                $obj = new LinkUserInfo();
                $obj->deserialize($value);
                array_push($this->UserList, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }
    }
}
