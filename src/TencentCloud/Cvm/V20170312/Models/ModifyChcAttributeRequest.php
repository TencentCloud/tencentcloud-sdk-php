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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyChcAttribute请求参数结构体
 *
 * @method array getChcIds() 获取CHC物理服务器ID。
 * @method void setChcIds(array $ChcIds) 设置CHC物理服务器ID。
 * @method string getInstanceName() 获取CHC物理服务器名称
 * @method void setInstanceName(string $InstanceName) 设置CHC物理服务器名称
 * @method string getDeviceType() 获取服务器类型
 * @method void setDeviceType(string $DeviceType) 设置服务器类型
 * @method string getBmcUser() 获取合法字符为字母,数字, 横线和下划线
 * @method void setBmcUser(string $BmcUser) 设置合法字符为字母,数字, 横线和下划线
 * @method string getPassword() 获取密码8-16位字符, 允许数字，字母， 和特殊字符()`~!@#$%^&*-+=_|{}[]:;'<>,.?/
 * @method void setPassword(string $Password) 设置密码8-16位字符, 允许数字，字母， 和特殊字符()`~!@#$%^&*-+=_|{}[]:;'<>,.?/
 * @method array getBmcSecurityGroupIds() 获取bmc网络的安全组列表
 * @method void setBmcSecurityGroupIds(array $BmcSecurityGroupIds) 设置bmc网络的安全组列表
 */
class ModifyChcAttributeRequest extends AbstractModel
{
    /**
     * @var array CHC物理服务器ID。
     */
    public $ChcIds;

    /**
     * @var string CHC物理服务器名称
     */
    public $InstanceName;

    /**
     * @var string 服务器类型
     */
    public $DeviceType;

    /**
     * @var string 合法字符为字母,数字, 横线和下划线
     */
    public $BmcUser;

    /**
     * @var string 密码8-16位字符, 允许数字，字母， 和特殊字符()`~!@#$%^&*-+=_|{}[]:;'<>,.?/
     */
    public $Password;

    /**
     * @var array bmc网络的安全组列表
     */
    public $BmcSecurityGroupIds;

    /**
     * @param array $ChcIds CHC物理服务器ID。
     * @param string $InstanceName CHC物理服务器名称
     * @param string $DeviceType 服务器类型
     * @param string $BmcUser 合法字符为字母,数字, 横线和下划线
     * @param string $Password 密码8-16位字符, 允许数字，字母， 和特殊字符()`~!@#$%^&*-+=_|{}[]:;'<>,.?/
     * @param array $BmcSecurityGroupIds bmc网络的安全组列表
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
        if (array_key_exists("ChcIds",$param) and $param["ChcIds"] !== null) {
            $this->ChcIds = $param["ChcIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("BmcUser",$param) and $param["BmcUser"] !== null) {
            $this->BmcUser = $param["BmcUser"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("BmcSecurityGroupIds",$param) and $param["BmcSecurityGroupIds"] !== null) {
            $this->BmcSecurityGroupIds = $param["BmcSecurityGroupIds"];
        }
    }
}
