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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUser请求参数结构体
 *
 * @method string getUserId() 获取需要授权的子用户uin，可以通过腾讯云控制台右上角 → “账号信息” → “账号ID进行查看”。
 * @method void setUserId(string $UserId) 设置需要授权的子用户uin，可以通过腾讯云控制台右上角 → “账号信息” → “账号ID进行查看”。
 * @method string getUserDescription() 获取用户描述信息，方便区分不同用户
 * @method void setUserDescription(string $UserDescription) 设置用户描述信息，方便区分不同用户
 * @method array getPolicySet() 获取绑定到用户的权限集合
 * @method void setPolicySet(array $PolicySet) 设置绑定到用户的权限集合
 * @method string getUserType() 获取用户类型。ADMIN：管理员 COMMON：一般用户。当用户类型为管理员的时候，不能设置权限集合和绑定的工作组集合，管理员默认拥有所有权限。该参数不填默认为COMMON
 * @method void setUserType(string $UserType) 设置用户类型。ADMIN：管理员 COMMON：一般用户。当用户类型为管理员的时候，不能设置权限集合和绑定的工作组集合，管理员默认拥有所有权限。该参数不填默认为COMMON
 * @method array getWorkGroupIds() 获取绑定到用户的工作组ID集合。
 * @method void setWorkGroupIds(array $WorkGroupIds) 设置绑定到用户的工作组ID集合。
 * @method string getUserAlias() 获取用户别名，字符长度小50
 * @method void setUserAlias(string $UserAlias) 设置用户别名，字符长度小50
 */
class CreateUserRequest extends AbstractModel
{
    /**
     * @var string 需要授权的子用户uin，可以通过腾讯云控制台右上角 → “账号信息” → “账号ID进行查看”。
     */
    public $UserId;

    /**
     * @var string 用户描述信息，方便区分不同用户
     */
    public $UserDescription;

    /**
     * @var array 绑定到用户的权限集合
     */
    public $PolicySet;

    /**
     * @var string 用户类型。ADMIN：管理员 COMMON：一般用户。当用户类型为管理员的时候，不能设置权限集合和绑定的工作组集合，管理员默认拥有所有权限。该参数不填默认为COMMON
     */
    public $UserType;

    /**
     * @var array 绑定到用户的工作组ID集合。
     */
    public $WorkGroupIds;

    /**
     * @var string 用户别名，字符长度小50
     */
    public $UserAlias;

    /**
     * @param string $UserId 需要授权的子用户uin，可以通过腾讯云控制台右上角 → “账号信息” → “账号ID进行查看”。
     * @param string $UserDescription 用户描述信息，方便区分不同用户
     * @param array $PolicySet 绑定到用户的权限集合
     * @param string $UserType 用户类型。ADMIN：管理员 COMMON：一般用户。当用户类型为管理员的时候，不能设置权限集合和绑定的工作组集合，管理员默认拥有所有权限。该参数不填默认为COMMON
     * @param array $WorkGroupIds 绑定到用户的工作组ID集合。
     * @param string $UserAlias 用户别名，字符长度小50
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserDescription",$param) and $param["UserDescription"] !== null) {
            $this->UserDescription = $param["UserDescription"];
        }

        if (array_key_exists("PolicySet",$param) and $param["PolicySet"] !== null) {
            $this->PolicySet = [];
            foreach ($param["PolicySet"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->PolicySet, $obj);
            }
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("WorkGroupIds",$param) and $param["WorkGroupIds"] !== null) {
            $this->WorkGroupIds = $param["WorkGroupIds"];
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }
    }
}
