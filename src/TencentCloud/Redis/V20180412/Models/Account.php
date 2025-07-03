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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子账号信息
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method string getAccountName() 获取账号名称。
 * @method void setAccountName(string $AccountName) 设置账号名称。
 * @method string getRemark() 获取账号描述信息。
 * @method void setRemark(string $Remark) 设置账号描述信息。
 * @method string getPrivilege() 获取读写权限策略。
- r：只读。
- w：只写。
- rw：读写。
 * @method void setPrivilege(string $Privilege) 设置读写权限策略。
- r：只读。
- w：只写。
- rw：读写。
 * @method array getReadonlyPolicy() 获取只读路由策略。
- master：主节点。
- replication：从节点。
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) 设置只读路由策略。
- master：主节点。
- replication：从节点。
 * @method integer getStatus() 获取子账号状态.
- 1：账号变更中。
- 2：账号有效。
- 4：账号已删除。
 * @method void setStatus(integer $Status) 设置子账号状态.
- 1：账号变更中。
- 2：账号有效。
- 4：账号已删除。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class Account extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 账号名称。
     */
    public $AccountName;

    /**
     * @var string 账号描述信息。
     */
    public $Remark;

    /**
     * @var string 读写权限策略。
- r：只读。
- w：只写。
- rw：读写。
     */
    public $Privilege;

    /**
     * @var array 只读路由策略。
- master：主节点。
- replication：从节点。
     */
    public $ReadonlyPolicy;

    /**
     * @var integer 子账号状态.
- 1：账号变更中。
- 2：账号有效。
- 4：账号已删除。
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $InstanceId 实例 ID。
     * @param string $AccountName 账号名称。
     * @param string $Remark 账号描述信息。
     * @param string $Privilege 读写权限策略。
- r：只读。
- w：只写。
- rw：读写。
     * @param array $ReadonlyPolicy 只读路由策略。
- master：主节点。
- replication：从节点。
     * @param integer $Status 子账号状态.
- 1：账号变更中。
- 2：账号有效。
- 4：账号已删除。
     * @param string $CreateTime 创建时间
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
    }
}
