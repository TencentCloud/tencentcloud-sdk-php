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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRole请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getRole() 获取角色名称
 * @method void setRole(string $Role) 设置角色名称
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method boolean getPermWrite() 获取是否开启生产权限
 * @method void setPermWrite(boolean $PermWrite) 设置是否开启生产权限
 * @method boolean getPermRead() 获取是否开启消费权限
 * @method void setPermRead(boolean $PermRead) 设置是否开启消费权限
 */
class CreateRoleRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 角色名称
     */
    public $Role;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var boolean 是否开启生产权限
     */
    public $PermWrite;

    /**
     * @var boolean 是否开启消费权限
     */
    public $PermRead;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Role 角色名称
     * @param string $Remark 备注
     * @param boolean $PermWrite 是否开启生产权限
     * @param boolean $PermRead 是否开启消费权限
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

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PermWrite",$param) and $param["PermWrite"] !== null) {
            $this->PermWrite = $param["PermWrite"];
        }

        if (array_key_exists("PermRead",$param) and $param["PermRead"] !== null) {
            $this->PermRead = $param["PermRead"];
        }
    }
}
