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
 * ModifyAppAccount请求参数结构体
 *
 * @method string getAccountId() 获取账号ID。
 * @method void setAccountId(string $AccountId) 设置账号ID。
 * @method string getAccountName() 获取账号名称。未传入该参数时，表示不进行修改。
 * @method void setAccountName(string $AccountName) 设置账号名称。未传入该参数时，表示不进行修改。
 * @method string getPassword() 获取账号密码。未传入该参数时，表示不进行修改。
 * @method void setPassword(string $Password) 设置账号密码。未传入该参数时，表示不进行修改。
 * @method string getDescription() 获取描述，未传入该参数时，表示不进行修改。
 * @method void setDescription(string $Description) 设置描述，未传入该参数时，表示不进行修改。
 */
class ModifyAppAccountRequest extends AbstractModel
{
    /**
     * @var string 账号ID。
     */
    public $AccountId;

    /**
     * @var string 账号名称。未传入该参数时，表示不进行修改。
     */
    public $AccountName;

    /**
     * @var string 账号密码。未传入该参数时，表示不进行修改。
     */
    public $Password;

    /**
     * @var string 描述，未传入该参数时，表示不进行修改。
     */
    public $Description;

    /**
     * @param string $AccountId 账号ID。
     * @param string $AccountName 账号名称。未传入该参数时，表示不进行修改。
     * @param string $Password 账号密码。未传入该参数时，表示不进行修改。
     * @param string $Description 描述，未传入该参数时，表示不进行修改。
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
