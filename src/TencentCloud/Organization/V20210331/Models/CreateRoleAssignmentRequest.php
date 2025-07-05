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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRoleAssignment请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID。
 * @method void setZoneId(string $ZoneId) 设置空间 ID。
 * @method array getRoleAssignmentInfo() 获取授权成员账号信息，最多授权50条。
 * @method void setRoleAssignmentInfo(array $RoleAssignmentInfo) 设置授权成员账号信息，最多授权50条。
 */
class CreateRoleAssignmentRequest extends AbstractModel
{
    /**
     * @var string 空间 ID。
     */
    public $ZoneId;

    /**
     * @var array 授权成员账号信息，最多授权50条。
     */
    public $RoleAssignmentInfo;

    /**
     * @param string $ZoneId 空间 ID。
     * @param array $RoleAssignmentInfo 授权成员账号信息，最多授权50条。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RoleAssignmentInfo",$param) and $param["RoleAssignmentInfo"] !== null) {
            $this->RoleAssignmentInfo = [];
            foreach ($param["RoleAssignmentInfo"] as $key => $value){
                $obj = new RoleAssignmentInfo();
                $obj->deserialize($value);
                array_push($this->RoleAssignmentInfo, $obj);
            }
        }
    }
}
