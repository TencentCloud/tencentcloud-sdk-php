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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListPoliciesGrantingServiceAccess请求参数结构体
 *
 * @method integer getTargetUin() 获取子账号uin，与RoleId、GroupId三选一必传
 * @method void setTargetUin(integer $TargetUin) 设置子账号uin，与RoleId、GroupId三选一必传
 * @method integer getRoleId() 获取角色ID，与TargetUin、GroupId三选一必传
 * @method void setRoleId(integer $RoleId) 设置角色ID，与TargetUin、GroupId三选一必传
 * @method integer getGroupId() 获取用户组ID，与TargetUin、RoleId三选一必传
 * @method void setGroupId(integer $GroupId) 设置用户组ID，与TargetUin、RoleId三选一必传
 * @method string getServiceType() 获取服务名，查看服务授权接口详情时需传该字段
 * @method void setServiceType(string $ServiceType) 设置服务名，查看服务授权接口详情时需传该字段
 */
class ListPoliciesGrantingServiceAccessRequest extends AbstractModel
{
    /**
     * @var integer 子账号uin，与RoleId、GroupId三选一必传
     */
    public $TargetUin;

    /**
     * @var integer 角色ID，与TargetUin、GroupId三选一必传
     */
    public $RoleId;

    /**
     * @var integer 用户组ID，与TargetUin、RoleId三选一必传
     */
    public $GroupId;

    /**
     * @var string 服务名，查看服务授权接口详情时需传该字段
     */
    public $ServiceType;

    /**
     * @param integer $TargetUin 子账号uin，与RoleId、GroupId三选一必传
     * @param integer $RoleId 角色ID，与TargetUin、GroupId三选一必传
     * @param integer $GroupId 用户组ID，与TargetUin、RoleId三选一必传
     * @param string $ServiceType 服务名，查看服务授权接口详情时需传该字段
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
        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }
    }
}
