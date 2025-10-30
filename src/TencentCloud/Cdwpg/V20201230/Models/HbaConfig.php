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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * user_config
 *
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getDatabase() 获取数据库
 * @method void setDatabase(string $Database) 设置数据库
 * @method string getUser() 获取用户
 * @method void setUser(string $User) 设置用户
 * @method string getAddress() 获取ip地址
 * @method void setAddress(string $Address) 设置ip地址
 * @method string getMethod() 获取方法
 * @method void setMethod(string $Method) 设置方法
 * @method string getMask() 获取是否遮盖
 * @method void setMask(string $Mask) 设置是否遮盖
 */
class HbaConfig extends AbstractModel
{
    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 数据库
     */
    public $Database;

    /**
     * @var string 用户
     */
    public $User;

    /**
     * @var string ip地址
     */
    public $Address;

    /**
     * @var string 方法
     */
    public $Method;

    /**
     * @var string 是否遮盖
     */
    public $Mask;

    /**
     * @param string $Type 类型
     * @param string $Database 数据库
     * @param string $User 用户
     * @param string $Address ip地址
     * @param string $Method 方法
     * @param string $Mask 是否遮盖
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }
    }
}
