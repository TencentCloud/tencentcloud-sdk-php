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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUser请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method string getUsername() 获取用户名，不能为空，只支持数字 大小写字母 分隔符("_","-")，不能超过 32 个字符
 * @method void setUsername(string $Username) 设置用户名，不能为空，只支持数字 大小写字母 分隔符("_","-")，不能超过 32 个字符
 * @method string getPassword() 获取密码，该字段为空时候则后端会默认生成。用户自定义密码时，不能为空，只支持数字 大小写字母 分隔符("_","-")，不能超过 64 个字符。
 * @method void setPassword(string $Password) 设置密码，该字段为空时候则后端会默认生成。用户自定义密码时，不能为空，只支持数字 大小写字母 分隔符("_","-")，不能超过 64 个字符。
 * @method string getRemark() 获取备注，长度不超过128个字符。
 * @method void setRemark(string $Remark) 设置备注，长度不超过128个字符。
 */
class CreateUserRequest extends AbstractModel
{
    /**
     * @var string 实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 用户名，不能为空，只支持数字 大小写字母 分隔符("_","-")，不能超过 32 个字符
     */
    public $Username;

    /**
     * @var string 密码，该字段为空时候则后端会默认生成。用户自定义密码时，不能为空，只支持数字 大小写字母 分隔符("_","-")，不能超过 64 个字符。
     */
    public $Password;

    /**
     * @var string 备注，长度不超过128个字符。
     */
    public $Remark;

    /**
     * @param string $InstanceId 实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param string $Username 用户名，不能为空，只支持数字 大小写字母 分隔符("_","-")，不能超过 32 个字符
     * @param string $Password 密码，该字段为空时候则后端会默认生成。用户自定义密码时，不能为空，只支持数字 大小写字母 分隔符("_","-")，不能超过 64 个字符。
     * @param string $Remark 备注，长度不超过128个字符。
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

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
