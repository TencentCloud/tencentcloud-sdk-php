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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyServiceAccountPassword请求参数结构体
 *
 * @method string getRegistryId() 获取实例Id
 * @method void setRegistryId(string $RegistryId) 设置实例Id
 * @method string getName() 获取服务级账号名
 * @method void setName(string $Name) 设置服务级账号名
 * @method boolean getRandom() 获取是否随机生成密码
 * @method void setRandom(boolean $Random) 设置是否随机生成密码
 * @method string getPassword() 获取服务级账号密码，长度在8到20之间且需包含至少一个大写字符，一个小写字符和一个数字
 * @method void setPassword(string $Password) 设置服务级账号密码，长度在8到20之间且需包含至少一个大写字符，一个小写字符和一个数字
 */
class ModifyServiceAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $RegistryId;

    /**
     * @var string 服务级账号名
     */
    public $Name;

    /**
     * @var boolean 是否随机生成密码
     */
    public $Random;

    /**
     * @var string 服务级账号密码，长度在8到20之间且需包含至少一个大写字符，一个小写字符和一个数字
     */
    public $Password;

    /**
     * @param string $RegistryId 实例Id
     * @param string $Name 服务级账号名
     * @param boolean $Random 是否随机生成密码
     * @param string $Password 服务级账号密码，长度在8到20之间且需包含至少一个大写字符，一个小写字符和一个数字
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Random",$param) and $param["Random"] !== null) {
            $this->Random = $param["Random"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
