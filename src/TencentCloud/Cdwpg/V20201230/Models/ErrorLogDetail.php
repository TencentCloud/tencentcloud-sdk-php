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
 * 错误日志详细信息
 *
 * @method string getUserName() 获取用户名称
 * @method void setUserName(string $UserName) 设置用户名称
 * @method string getDatabase() 获取数据库
 * @method void setDatabase(string $Database) 设置数据库
 * @method string getErrorTime() 获取报错时间
 * @method void setErrorTime(string $ErrorTime) 设置报错时间
 * @method string getErrorMessage() 获取报错信息
 * @method void setErrorMessage(string $ErrorMessage) 设置报错信息
 */
class ErrorLogDetail extends AbstractModel
{
    /**
     * @var string 用户名称
     */
    public $UserName;

    /**
     * @var string 数据库
     */
    public $Database;

    /**
     * @var string 报错时间
     */
    public $ErrorTime;

    /**
     * @var string 报错信息
     */
    public $ErrorMessage;

    /**
     * @param string $UserName 用户名称
     * @param string $Database 数据库
     * @param string $ErrorTime 报错时间
     * @param string $ErrorMessage 报错信息
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("ErrorTime",$param) and $param["ErrorTime"] !== null) {
            $this->ErrorTime = $param["ErrorTime"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
