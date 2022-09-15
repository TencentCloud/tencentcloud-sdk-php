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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddUsersForUserManager请求参数结构体
 *
 * @method string getInstanceId() 获取集群字符串ID
 * @method void setInstanceId(string $InstanceId) 设置集群字符串ID
 * @method array getUserManagerUserList() 获取用户信息列表
 * @method void setUserManagerUserList(array $UserManagerUserList) 设置用户信息列表
 */
class AddUsersForUserManagerRequest extends AbstractModel
{
    /**
     * @var string 集群字符串ID
     */
    public $InstanceId;

    /**
     * @var array 用户信息列表
     */
    public $UserManagerUserList;

    /**
     * @param string $InstanceId 集群字符串ID
     * @param array $UserManagerUserList 用户信息列表
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

        if (array_key_exists("UserManagerUserList",$param) and $param["UserManagerUserList"] !== null) {
            $this->UserManagerUserList = [];
            foreach ($param["UserManagerUserList"] as $key => $value){
                $obj = new UserInfoForUserManager();
                $obj->deserialize($value);
                array_push($this->UserManagerUserList, $obj);
            }
        }
    }
}
