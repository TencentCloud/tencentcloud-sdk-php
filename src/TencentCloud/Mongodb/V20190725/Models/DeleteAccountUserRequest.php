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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAccountUser请求参数结构体
 *
 * @method string getInstanceId() 获取指定待删除账号的实例 ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

 * @method void setInstanceId(string $InstanceId) 设置指定待删除账号的实例 ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

 * @method string getUserName() 获取配置待删除的账号名。
 * @method void setUserName(string $UserName) 设置配置待删除的账号名。
 * @method string getMongoUserPassword() 获取配置 mongouser 对应的密码。mongouser为系统默认账号，输入其对应的密码。
 * @method void setMongoUserPassword(string $MongoUserPassword) 设置配置 mongouser 对应的密码。mongouser为系统默认账号，输入其对应的密码。
 */
class DeleteAccountUserRequest extends AbstractModel
{
    /**
     * @var string 指定待删除账号的实例 ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

     */
    public $InstanceId;

    /**
     * @var string 配置待删除的账号名。
     */
    public $UserName;

    /**
     * @var string 配置 mongouser 对应的密码。mongouser为系统默认账号，输入其对应的密码。
     */
    public $MongoUserPassword;

    /**
     * @param string $InstanceId 指定待删除账号的实例 ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

     * @param string $UserName 配置待删除的账号名。
     * @param string $MongoUserPassword 配置 mongouser 对应的密码。mongouser为系统默认账号，输入其对应的密码。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("MongoUserPassword",$param) and $param["MongoUserPassword"] !== null) {
            $this->MongoUserPassword = $param["MongoUserPassword"];
        }
    }
}
