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
 * 用户信息列表。
 *
 * @method string getUserId() 获取用户ID，是用户全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户ID，是用户全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取昵称，长度限制：64个字符。 默认与用户名相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置昵称，长度限制：64个字符。 默认与用户名相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhone() 获取用户手机号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhone(string $Phone) 设置用户手机号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取邮箱地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置邮箱地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取用户状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置用户状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSource() 获取数据来源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSource(string $DataSource) 设置数据来源。
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string 用户ID，是用户全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 昵称，长度限制：64个字符。 默认与用户名相同。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 用户名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 用户手机号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phone;

    /**
     * @var string 邮箱地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string 用户状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 数据来源。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSource;

    /**
     * @param string $UserId 用户ID，是用户全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 昵称，长度限制：64个字符。 默认与用户名相同。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phone 用户手机号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email 邮箱地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 用户状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSource 数据来源。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }
    }
}
