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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetDBInstancePassword请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method string getUserName() 获取指定需修改密码的账号名称。可通过接口 [DescribeAccountUsers](https://cloud.tencent.com/document/product/240/80800) 获取账号列表，复制需修改密码的账号。
 * @method void setUserName(string $UserName) 设置指定需修改密码的账号名称。可通过接口 [DescribeAccountUsers](https://cloud.tencent.com/document/product/240/80800) 获取账号列表，复制需修改密码的账号。
 * @method string getPassword() 获取指定账户的新密码。密码复杂度要求：
- 8-32个字符长度。
- 至少包含字母、数字和字符（!@#%^\*()\_）中的两种。
 * @method void setPassword(string $Password) 设置指定账户的新密码。密码复杂度要求：
- 8-32个字符长度。
- 至少包含字母、数字和字符（!@#%^\*()\_）中的两种。
 */
class ResetDBInstancePasswordRequest extends AbstractModel
{
    /**
     * @var string 指定实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 指定需修改密码的账号名称。可通过接口 [DescribeAccountUsers](https://cloud.tencent.com/document/product/240/80800) 获取账号列表，复制需修改密码的账号。
     */
    public $UserName;

    /**
     * @var string 指定账户的新密码。密码复杂度要求：
- 8-32个字符长度。
- 至少包含字母、数字和字符（!@#%^\*()\_）中的两种。
     */
    public $Password;

    /**
     * @param string $InstanceId 指定实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param string $UserName 指定需修改密码的账号名称。可通过接口 [DescribeAccountUsers](https://cloud.tencent.com/document/product/240/80800) 获取账号列表，复制需修改密码的账号。
     * @param string $Password 指定账户的新密码。密码复杂度要求：
- 8-32个字符长度。
- 至少包含字母、数字和字符（!@#%^\*()\_）中的两种。
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
