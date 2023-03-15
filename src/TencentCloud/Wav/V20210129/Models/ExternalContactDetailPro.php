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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 具备更多信息的外部联系人详细信息
 *
 * @method ExternalContact getCustomer() 获取客户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomer(ExternalContact $Customer) 设置客户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFollowUser() 获取添加了此外部联系人的企业成员信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowUser(array $FollowUser) 设置添加了此外部联系人的企业成员信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExternalContactDetailPro extends AbstractModel
{
    /**
     * @var ExternalContact 客户信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Customer;

    /**
     * @var array 添加了此外部联系人的企业成员信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowUser;

    /**
     * @param ExternalContact $Customer 客户信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FollowUser 添加了此外部联系人的企业成员信息
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
        if (array_key_exists("Customer",$param) and $param["Customer"] !== null) {
            $this->Customer = new ExternalContact();
            $this->Customer->deserialize($param["Customer"]);
        }

        if (array_key_exists("FollowUser",$param) and $param["FollowUser"] !== null) {
            $this->FollowUser = [];
            foreach ($param["FollowUser"] as $key => $value){
                $obj = new FollowUserPro();
                $obj->deserialize($value);
                array_push($this->FollowUser, $obj);
            }
        }
    }
}
