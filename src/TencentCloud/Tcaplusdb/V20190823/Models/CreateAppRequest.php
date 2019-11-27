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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getIdlType() 获取应用数据描述语言类型，如：`PROTO`，`TDR`或`MIX`
 * @method void setIdlType(string $IdlType) 设置应用数据描述语言类型，如：`PROTO`，`TDR`或`MIX`
 * @method string getAppName() 获取应用名称，可使用中文或英文字符，长度在30个字符以内
 * @method void setAppName(string $AppName) 设置应用名称，可使用中文或英文字符，长度在30个字符以内
 * @method string getVpcId() 获取应用所绑定的私有网络实例ID，形如：vpc-f49l6u0z
 * @method void setVpcId(string $VpcId) 设置应用所绑定的私有网络实例ID，形如：vpc-f49l6u0z
 * @method string getSubnetId() 获取应用所绑定的子网实例ID，形如：subnet-pxir56ns
 * @method void setSubnetId(string $SubnetId) 设置应用所绑定的子网实例ID，形如：subnet-pxir56ns
 * @method string getPassword() 获取应用访问密码，可使用英文和数字字符，长度为12~16个字符
 * @method void setPassword(string $Password) 设置应用访问密码，可使用英文和数字字符，长度为12~16个字符
 */

/**
 *CreateApp请求参数结构体
 */
class CreateAppRequest extends AbstractModel
{
    /**
     * @var string 应用数据描述语言类型，如：`PROTO`，`TDR`或`MIX`
     */
    public $IdlType;

    /**
     * @var string 应用名称，可使用中文或英文字符，长度在30个字符以内
     */
    public $AppName;

    /**
     * @var string 应用所绑定的私有网络实例ID，形如：vpc-f49l6u0z
     */
    public $VpcId;

    /**
     * @var string 应用所绑定的子网实例ID，形如：subnet-pxir56ns
     */
    public $SubnetId;

    /**
     * @var string 应用访问密码，可使用英文和数字字符，长度为12~16个字符
     */
    public $Password;
    /**
     * @param string $IdlType 应用数据描述语言类型，如：`PROTO`，`TDR`或`MIX`
     * @param string $AppName 应用名称，可使用中文或英文字符，长度在30个字符以内
     * @param string $VpcId 应用所绑定的私有网络实例ID，形如：vpc-f49l6u0z
     * @param string $SubnetId 应用所绑定的子网实例ID，形如：subnet-pxir56ns
     * @param string $Password 应用访问密码，可使用英文和数字字符，长度为12~16个字符
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("IdlType",$param) and $param["IdlType"] !== null) {
            $this->IdlType = $param["IdlType"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
