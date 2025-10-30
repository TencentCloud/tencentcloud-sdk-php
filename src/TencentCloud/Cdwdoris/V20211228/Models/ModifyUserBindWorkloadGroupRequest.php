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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserBindWorkloadGroup请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method array getBindUsers() 获取需要绑定资源组的用户信息，如果一个账户拥有多个主机信息，需要将这些信息都传入
 * @method void setBindUsers(array $BindUsers) 设置需要绑定资源组的用户信息，如果一个账户拥有多个主机信息，需要将这些信息都传入
 * @method string getOldWorkloadGroupName() 获取修改前绑定的资源组名称
 * @method void setOldWorkloadGroupName(string $OldWorkloadGroupName) 设置修改前绑定的资源组名称
 * @method string getNewWorkloadGroupName() 获取修改后绑定的资源组名称
 * @method void setNewWorkloadGroupName(string $NewWorkloadGroupName) 设置修改后绑定的资源组名称
 */
class ModifyUserBindWorkloadGroupRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var array 需要绑定资源组的用户信息，如果一个账户拥有多个主机信息，需要将这些信息都传入
     */
    public $BindUsers;

    /**
     * @var string 修改前绑定的资源组名称
     */
    public $OldWorkloadGroupName;

    /**
     * @var string 修改后绑定的资源组名称
     */
    public $NewWorkloadGroupName;

    /**
     * @param string $InstanceId 集群id
     * @param array $BindUsers 需要绑定资源组的用户信息，如果一个账户拥有多个主机信息，需要将这些信息都传入
     * @param string $OldWorkloadGroupName 修改前绑定的资源组名称
     * @param string $NewWorkloadGroupName 修改后绑定的资源组名称
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

        if (array_key_exists("BindUsers",$param) and $param["BindUsers"] !== null) {
            $this->BindUsers = [];
            foreach ($param["BindUsers"] as $key => $value){
                $obj = new BindUser();
                $obj->deserialize($value);
                array_push($this->BindUsers, $obj);
            }
        }

        if (array_key_exists("OldWorkloadGroupName",$param) and $param["OldWorkloadGroupName"] !== null) {
            $this->OldWorkloadGroupName = $param["OldWorkloadGroupName"];
        }

        if (array_key_exists("NewWorkloadGroupName",$param) and $param["NewWorkloadGroupName"] !== null) {
            $this->NewWorkloadGroupName = $param["NewWorkloadGroupName"];
        }
    }
}
