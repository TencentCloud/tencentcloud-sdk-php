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
 * 子账号信息
 *
 * @method string getInstanceId() 获取<p>实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。</p>
 * @method string getAccountName() 获取<p>账号名称。</p>
 * @method void setAccountName(string $AccountName) 设置<p>账号名称。</p>
 * @method string getRemark() 获取<p>账号描述信息。</p>
 * @method void setRemark(string $Remark) 设置<p>账号描述信息。</p>
 * @method string getPrivilege() 获取<p>读写权限策略。- r：只读。- w：只写。- rw：读写。</p>
 * @method void setPrivilege(string $Privilege) 设置<p>读写权限策略。- r：只读。- w：只写。- rw：读写。</p>
 * @method array getReadonlyPolicy() 获取<p>只读路由策略。- master：主节点。- replication：从节点。</p>
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) 设置<p>只读路由策略。- master：主节点。- replication：从节点。</p>
 * @method integer getStatus() 获取<p>子账号状态.- 1：账号变更中。- 2：账号有效。- 4：账号已删除。</p>
 * @method void setStatus(integer $Status) 设置<p>子账号状态.- 1：账号变更中。- 2：账号有效。- 4：账号已删除。</p>
 * @method string getCreateTime() 获取<p>账号创建时间。</p><p>若该参数为空字符串，说明该账号创建于早期版本，未支持创建时间记录功能。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>账号创建时间。</p><p>若该参数为空字符串，说明该账号创建于早期版本，未支持创建时间记录功能。</p>
 * @method string getPasswordLastModifiedTime() 获取<p>账号最后修改密码的时间。</p><p>若该参数为空字符串，说明该账号创建于早期版本，未支持密码修改时间记录功能。</p>
 * @method void setPasswordLastModifiedTime(string $PasswordLastModifiedTime) 设置<p>账号最后修改密码的时间。</p><p>若该参数为空字符串，说明该账号创建于早期版本，未支持密码修改时间记录功能。</p>
 */
class Account extends AbstractModel
{
    /**
     * @var string <p>实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>账号名称。</p>
     */
    public $AccountName;

    /**
     * @var string <p>账号描述信息。</p>
     */
    public $Remark;

    /**
     * @var string <p>读写权限策略。- r：只读。- w：只写。- rw：读写。</p>
     */
    public $Privilege;

    /**
     * @var array <p>只读路由策略。- master：主节点。- replication：从节点。</p>
     */
    public $ReadonlyPolicy;

    /**
     * @var integer <p>子账号状态.- 1：账号变更中。- 2：账号有效。- 4：账号已删除。</p>
     */
    public $Status;

    /**
     * @var string <p>账号创建时间。</p><p>若该参数为空字符串，说明该账号创建于早期版本，未支持创建时间记录功能。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>账号最后修改密码的时间。</p><p>若该参数为空字符串，说明该账号创建于早期版本，未支持密码修改时间记录功能。</p>
     */
    public $PasswordLastModifiedTime;

    /**
     * @param string $InstanceId <p>实例 ID。</p>
     * @param string $AccountName <p>账号名称。</p>
     * @param string $Remark <p>账号描述信息。</p>
     * @param string $Privilege <p>读写权限策略。- r：只读。- w：只写。- rw：读写。</p>
     * @param array $ReadonlyPolicy <p>只读路由策略。- master：主节点。- replication：从节点。</p>
     * @param integer $Status <p>子账号状态.- 1：账号变更中。- 2：账号有效。- 4：账号已删除。</p>
     * @param string $CreateTime <p>账号创建时间。</p><p>若该参数为空字符串，说明该账号创建于早期版本，未支持创建时间记录功能。</p>
     * @param string $PasswordLastModifiedTime <p>账号最后修改密码的时间。</p><p>若该参数为空字符串，说明该账号创建于早期版本，未支持密码修改时间记录功能。</p>
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PasswordLastModifiedTime",$param) and $param["PasswordLastModifiedTime"] !== null) {
            $this->PasswordLastModifiedTime = $param["PasswordLastModifiedTime"];
        }
    }
}
