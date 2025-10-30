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
 * ModifyInstanceAccount请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method string getAccountName() 获取指定需修改的账号。
- root：指在创建 Redis 数据库实例时自动生成的账号。用户无法修改其读写权限，仅可修改其请求路由策略。
- 自定义的账号：用户在实例创建成功后手动创建的账号。用户可以随时修改其读写权限与请求路由策略。
 * @method void setAccountName(string $AccountName) 设置指定需修改的账号。
- root：指在创建 Redis 数据库实例时自动生成的账号。用户无法修改其读写权限，仅可修改其请求路由策略。
- 自定义的账号：用户在实例创建成功后手动创建的账号。用户可以随时修改其读写权限与请求路由策略。
 * @method string getAccountPassword() 获取指定所修改账号访问的密码。
 * @method void setAccountPassword(string $AccountPassword) 设置指定所修改账号访问的密码。
 * @method string getRemark() 获取账号描述信息
 * @method void setRemark(string $Remark) 设置账号描述信息
 * @method array getReadonlyPolicy() 获取指定所修改账号读写请求路由的策略。
- master：表示读写请求路由至主节点。
- replication：表示读写请求路由至从节点。
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) 设置指定所修改账号读写请求路由的策略。
- master：表示读写请求路由至主节点。
- replication：表示读写请求路由至从节点。
 * @method string getPrivilege() 获取指定所修改账号的读写权限。
- r：只读。
- w：只写。
- rw：读写。
 * @method void setPrivilege(string $Privilege) 设置指定所修改账号的读写权限。
- r：只读。
- w：只写。
- rw：读写。
 * @method boolean getNoAuth() 获取指定是否将默认账号（root）设置为免密账号。自定义账号不支持免密访问。
- true：默认账号（root）设置为免密账号。
- false：默认账号（root）不设置为免密账号。
 * @method void setNoAuth(boolean $NoAuth) 设置指定是否将默认账号（root）设置为免密账号。自定义账号不支持免密访问。
- true：默认账号（root）设置为免密账号。
- false：默认账号（root）不设置为免密账号。
 * @method boolean getEncryptPassword() 获取指定所修改的账号是否加密密码
 * @method void setEncryptPassword(boolean $EncryptPassword) 设置指定所修改的账号是否加密密码
 */
class ModifyInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 指定需修改的账号。
- root：指在创建 Redis 数据库实例时自动生成的账号。用户无法修改其读写权限，仅可修改其请求路由策略。
- 自定义的账号：用户在实例创建成功后手动创建的账号。用户可以随时修改其读写权限与请求路由策略。
     */
    public $AccountName;

    /**
     * @var string 指定所修改账号访问的密码。
     */
    public $AccountPassword;

    /**
     * @var string 账号描述信息
     */
    public $Remark;

    /**
     * @var array 指定所修改账号读写请求路由的策略。
- master：表示读写请求路由至主节点。
- replication：表示读写请求路由至从节点。
     */
    public $ReadonlyPolicy;

    /**
     * @var string 指定所修改账号的读写权限。
- r：只读。
- w：只写。
- rw：读写。
     */
    public $Privilege;

    /**
     * @var boolean 指定是否将默认账号（root）设置为免密账号。自定义账号不支持免密访问。
- true：默认账号（root）设置为免密账号。
- false：默认账号（root）不设置为免密账号。
     */
    public $NoAuth;

    /**
     * @var boolean 指定所修改的账号是否加密密码
     */
    public $EncryptPassword;

    /**
     * @param string $InstanceId 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     * @param string $AccountName 指定需修改的账号。
- root：指在创建 Redis 数据库实例时自动生成的账号。用户无法修改其读写权限，仅可修改其请求路由策略。
- 自定义的账号：用户在实例创建成功后手动创建的账号。用户可以随时修改其读写权限与请求路由策略。
     * @param string $AccountPassword 指定所修改账号访问的密码。
     * @param string $Remark 账号描述信息
     * @param array $ReadonlyPolicy 指定所修改账号读写请求路由的策略。
- master：表示读写请求路由至主节点。
- replication：表示读写请求路由至从节点。
     * @param string $Privilege 指定所修改账号的读写权限。
- r：只读。
- w：只写。
- rw：读写。
     * @param boolean $NoAuth 指定是否将默认账号（root）设置为免密账号。自定义账号不支持免密访问。
- true：默认账号（root）设置为免密账号。
- false：默认账号（root）不设置为免密账号。
     * @param boolean $EncryptPassword 指定所修改的账号是否加密密码
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }

        if (array_key_exists("EncryptPassword",$param) and $param["EncryptPassword"] !== null) {
            $this->EncryptPassword = $param["EncryptPassword"];
        }
    }
}
