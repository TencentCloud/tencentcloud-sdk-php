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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * serverless账号描述
 *
 * @method string getDBUser() 获取用户名
 * @method void setDBUser(string $DBUser) 设置用户名
 * @method string getDBPassword() 获取密码
 * @method void setDBPassword(string $DBPassword) 设置密码
 * @method integer getDBConnLimit() 获取连接数限制
 * @method void setDBConnLimit(integer $DBConnLimit) 设置连接数限制
 */
class ServerlessDBAccount extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $DBUser;

    /**
     * @var string 密码
     */
    public $DBPassword;

    /**
     * @var integer 连接数限制
     */
    public $DBConnLimit;

    /**
     * @param string $DBUser 用户名
     * @param string $DBPassword 密码
     * @param integer $DBConnLimit 连接数限制
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
        if (array_key_exists("DBUser",$param) and $param["DBUser"] !== null) {
            $this->DBUser = $param["DBUser"];
        }

        if (array_key_exists("DBPassword",$param) and $param["DBPassword"] !== null) {
            $this->DBPassword = $param["DBPassword"];
        }

        if (array_key_exists("DBConnLimit",$param) and $param["DBConnLimit"] !== null) {
            $this->DBConnLimit = $param["DBConnLimit"];
        }
    }
}
