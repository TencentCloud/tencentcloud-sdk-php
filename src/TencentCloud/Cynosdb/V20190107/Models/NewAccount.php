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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新创建的账号
 *
 * @method string getAccountName() 获取账户名
 * @method void setAccountName(string $AccountName) 设置账户名
 * @method string getAccountPassword() 获取密码
 * @method void setAccountPassword(string $AccountPassword) 设置密码
 * @method string getHost() 获取主机
 * @method void setHost(string $Host) 设置主机
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 */
class NewAccount extends AbstractModel
{
    /**
     * @var string 账户名
     */
    public $AccountName;

    /**
     * @var string 密码
     */
    public $AccountPassword;

    /**
     * @var string 主机
     */
    public $Host;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @param string $AccountName 账户名
     * @param string $AccountPassword 密码
     * @param string $Host 主机
     * @param string $Description 描述
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
        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
