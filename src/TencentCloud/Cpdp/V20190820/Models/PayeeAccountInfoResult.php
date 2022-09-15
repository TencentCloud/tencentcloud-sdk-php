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
 * 账户信息结果
 *
 * @method string getAccountId() 获取账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountId(string $AccountId) 设置账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountName() 获取账户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountName(string $AccountName) 设置账户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method PayeeAccountUserInfo getUserInfo() 获取用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserInfo(PayeeAccountUserInfo $UserInfo) 设置用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method PayeeAccountPropertyInfo getPropertyInfo() 获取属性信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropertyInfo(PayeeAccountPropertyInfo $PropertyInfo) 设置属性信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class PayeeAccountInfoResult extends AbstractModel
{
    /**
     * @var string 账户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountId;

    /**
     * @var string 账户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountName;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var PayeeAccountUserInfo 用户信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserInfo;

    /**
     * @var PayeeAccountPropertyInfo 属性信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropertyInfo;

    /**
     * @param string $AccountId 账户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountName 账户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param PayeeAccountUserInfo $UserInfo 用户信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param PayeeAccountPropertyInfo $PropertyInfo 属性信息
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new PayeeAccountUserInfo();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("PropertyInfo",$param) and $param["PropertyInfo"] !== null) {
            $this->PropertyInfo = new PayeeAccountPropertyInfo();
            $this->PropertyInfo->deserialize($param["PropertyInfo"]);
        }
    }
}
