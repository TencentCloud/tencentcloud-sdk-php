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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserPrivilegesV3请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method UpdateUserPrivileges getUserPrivileges() 获取用户权限
 * @method void setUserPrivileges(UpdateUserPrivileges $UserPrivileges) 设置用户权限
 * @method string getWhiteHost() 获取用户链接来自的 IP	
 * @method void setWhiteHost(string $WhiteHost) 设置用户链接来自的 IP	
 */
class ModifyUserPrivilegesV3Request extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var UpdateUserPrivileges 用户权限
     */
    public $UserPrivileges;

    /**
     * @var string 用户链接来自的 IP	
     */
    public $WhiteHost;

    /**
     * @param string $InstanceId 集群id
     * @param string $UserName 用户名
     * @param UpdateUserPrivileges $UserPrivileges 用户权限
     * @param string $WhiteHost 用户链接来自的 IP	
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserPrivileges",$param) and $param["UserPrivileges"] !== null) {
            $this->UserPrivileges = new UpdateUserPrivileges();
            $this->UserPrivileges->deserialize($param["UserPrivileges"]);
        }

        if (array_key_exists("WhiteHost",$param) and $param["WhiteHost"] !== null) {
            $this->WhiteHost = $param["WhiteHost"];
        }
    }
}
