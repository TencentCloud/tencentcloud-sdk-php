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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAccount请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method string getAccountName() 获取<p>指定需修改的账号。</p><ul><li>root：指在创建 KeeWiDB 数据库实例时自动生成的账号。用户无法修改其读写权限，仅可修改其请求路由策略。</li><li>自定义的账号：用户在实例创建成功后手动创建的账号。用户可以随时修改其读写权限与请求路由策略。</li></ul>
 * @method void setAccountName(string $AccountName) 设置<p>指定需修改的账号。</p><ul><li>root：指在创建 KeeWiDB 数据库实例时自动生成的账号。用户无法修改其读写权限，仅可修改其请求路由策略。</li><li>自定义的账号：用户在实例创建成功后手动创建的账号。用户可以随时修改其读写权限与请求路由策略。</li></ul>
 * @method string getAccountPassword() 获取<p>指定所修改账号访问的密码。</p>
 * @method void setAccountPassword(string $AccountPassword) 设置<p>指定所修改账号访问的密码。</p>
 * @method string getRemark() 获取<p>账号描述信息</p>
 * @method void setRemark(string $Remark) 设置<p>账号描述信息</p>
 * @method array getReadonlyPolicy() 获取<p>指定所修改账号读写请求路由的策略。</p><p>枚举值：</p><ul><li>master： 表示读写请求路由至主节点。</li><li>replication： 表示读写请求路由至从节点。</li></ul>
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) 设置<p>指定所修改账号读写请求路由的策略。</p><p>枚举值：</p><ul><li>master： 表示读写请求路由至主节点。</li><li>replication： 表示读写请求路由至从节点。</li></ul>
 * @method string getPrivilege() 获取<p>指定所修改账号的读写权限。</p><p>枚举值：</p><ul><li>rw： 读写。</li><li>r： 只读。</li></ul>
 * @method void setPrivilege(string $Privilege) 设置<p>指定所修改账号的读写权限。</p><p>枚举值：</p><ul><li>rw： 读写。</li><li>r： 只读。</li></ul>
 */
class ModifyInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>指定需修改的账号。</p><ul><li>root：指在创建 KeeWiDB 数据库实例时自动生成的账号。用户无法修改其读写权限，仅可修改其请求路由策略。</li><li>自定义的账号：用户在实例创建成功后手动创建的账号。用户可以随时修改其读写权限与请求路由策略。</li></ul>
     */
    public $AccountName;

    /**
     * @var string <p>指定所修改账号访问的密码。</p>
     */
    public $AccountPassword;

    /**
     * @var string <p>账号描述信息</p>
     */
    public $Remark;

    /**
     * @var array <p>指定所修改账号读写请求路由的策略。</p><p>枚举值：</p><ul><li>master： 表示读写请求路由至主节点。</li><li>replication： 表示读写请求路由至从节点。</li></ul>
     */
    public $ReadonlyPolicy;

    /**
     * @var string <p>指定所修改账号的读写权限。</p><p>枚举值：</p><ul><li>rw： 读写。</li><li>r： 只读。</li></ul>
     */
    public $Privilege;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param string $AccountName <p>指定需修改的账号。</p><ul><li>root：指在创建 KeeWiDB 数据库实例时自动生成的账号。用户无法修改其读写权限，仅可修改其请求路由策略。</li><li>自定义的账号：用户在实例创建成功后手动创建的账号。用户可以随时修改其读写权限与请求路由策略。</li></ul>
     * @param string $AccountPassword <p>指定所修改账号访问的密码。</p>
     * @param string $Remark <p>账号描述信息</p>
     * @param array $ReadonlyPolicy <p>指定所修改账号读写请求路由的策略。</p><p>枚举值：</p><ul><li>master： 表示读写请求路由至主节点。</li><li>replication： 表示读写请求路由至从节点。</li></ul>
     * @param string $Privilege <p>指定所修改账号的读写权限。</p><p>枚举值：</p><ul><li>rw： 读写。</li><li>r： 只读。</li></ul>
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
    }
}
