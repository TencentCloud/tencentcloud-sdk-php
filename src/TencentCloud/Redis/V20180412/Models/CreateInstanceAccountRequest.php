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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceAccount请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
 * @method string getAccountName() 获取自定义的访问数据库的账号名称。
- 仅由字母、数字、下划线、中划线组成。
- 长度不能大于32位。
 * @method void setAccountName(string $AccountName) 设置自定义的访问数据库的账号名称。
- 仅由字母、数字、下划线、中划线组成。
- 长度不能大于32位。
 * @method string getAccountPassword() 获取设置自定义账号的密码。密码复杂度要求如下：
- 字符个数为[8,64]。
- 至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&*-+=_|{}[]:;<>,.?/ 中的两种。
- 不能以"/"开头。

 * @method void setAccountPassword(string $AccountPassword) 设置设置自定义账号的密码。密码复杂度要求如下：
- 字符个数为[8,64]。
- 至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&*-+=_|{}[]:;<>,.?/ 中的两种。
- 不能以"/"开头。

 * @method array getReadonlyPolicy() 获取指定账号的读请求路由分发至主节点或副本节点。未开启副本只读，不支持选择副本节点。
- master：主节点
- replication：副本节点
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) 设置指定账号的读请求路由分发至主节点或副本节点。未开启副本只读，不支持选择副本节点。
- master：主节点
- replication：副本节点
 * @method string getPrivilege() 获取账户读写权限，支持选择只读与读写权限。
- r：只读。
- rw: 读写。
 * @method void setPrivilege(string $Privilege) 设置账户读写权限，支持选择只读与读写权限。
- r：只读。
- rw: 读写。
 * @method string getRemark() 获取账号备注描述信息，长度为[0,64] 字节，支持中文。
 * @method void setRemark(string $Remark) 设置账号备注描述信息，长度为[0,64] 字节，支持中文。
 * @method boolean getEncryptPassword() 获取是否加密密码
 * @method void setEncryptPassword(boolean $EncryptPassword) 设置是否加密密码
 */
class CreateInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 自定义的访问数据库的账号名称。
- 仅由字母、数字、下划线、中划线组成。
- 长度不能大于32位。
     */
    public $AccountName;

    /**
     * @var string 设置自定义账号的密码。密码复杂度要求如下：
- 字符个数为[8,64]。
- 至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&*-+=_|{}[]:;<>,.?/ 中的两种。
- 不能以"/"开头。

     */
    public $AccountPassword;

    /**
     * @var array 指定账号的读请求路由分发至主节点或副本节点。未开启副本只读，不支持选择副本节点。
- master：主节点
- replication：副本节点
     */
    public $ReadonlyPolicy;

    /**
     * @var string 账户读写权限，支持选择只读与读写权限。
- r：只读。
- rw: 读写。
     */
    public $Privilege;

    /**
     * @var string 账号备注描述信息，长度为[0,64] 字节，支持中文。
     */
    public $Remark;

    /**
     * @var boolean 是否加密密码
     */
    public $EncryptPassword;

    /**
     * @param string $InstanceId 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
     * @param string $AccountName 自定义的访问数据库的账号名称。
- 仅由字母、数字、下划线、中划线组成。
- 长度不能大于32位。
     * @param string $AccountPassword 设置自定义账号的密码。密码复杂度要求如下：
- 字符个数为[8,64]。
- 至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&*-+=_|{}[]:;<>,.?/ 中的两种。
- 不能以"/"开头。

     * @param array $ReadonlyPolicy 指定账号的读请求路由分发至主节点或副本节点。未开启副本只读，不支持选择副本节点。
- master：主节点
- replication：副本节点
     * @param string $Privilege 账户读写权限，支持选择只读与读写权限。
- r：只读。
- rw: 读写。
     * @param string $Remark 账号备注描述信息，长度为[0,64] 字节，支持中文。
     * @param boolean $EncryptPassword 是否加密密码
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

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("EncryptPassword",$param) and $param["EncryptPassword"] !== null) {
            $this->EncryptPassword = $param["EncryptPassword"];
        }
    }
}
