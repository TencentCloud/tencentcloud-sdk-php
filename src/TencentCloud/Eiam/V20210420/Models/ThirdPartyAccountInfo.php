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
 * 三方账号信息。
 *
 * @method string getAccountCode() 获取第三方账号代码。"2"代表企业微信。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountCode(string $AccountCode) 设置第三方账号代码。"2"代表企业微信。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountName() 获取账号对应的用户名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountName(string $AccountName) 设置账号对应的用户名。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ThirdPartyAccountInfo extends AbstractModel
{
    /**
     * @var string 第三方账号代码。"2"代表企业微信。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountCode;

    /**
     * @var string 账号对应的用户名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountName;

    /**
     * @param string $AccountCode 第三方账号代码。"2"代表企业微信。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountName 账号对应的用户名。
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
        if (array_key_exists("AccountCode",$param) and $param["AccountCode"] !== null) {
            $this->AccountCode = $param["AccountCode"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }
    }
}
