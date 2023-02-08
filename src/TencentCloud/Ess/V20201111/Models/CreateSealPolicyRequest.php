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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSealPolicy请求参数结构体
 *
 * @method UserInfo getOperator() 获取授权发起人在平台信息，具体参考UserInfo结构体
 * @method void setOperator(UserInfo $Operator) 设置授权发起人在平台信息，具体参考UserInfo结构体
 * @method array getUsers() 获取用户在电子文件签署平台标识信息，具体参考UserInfo结构体。可跟下面的UserIds可叠加起作用
 * @method void setUsers(array $Users) 设置用户在电子文件签署平台标识信息，具体参考UserInfo结构体。可跟下面的UserIds可叠加起作用
 * @method string getSealId() 获取印章ID
 * @method void setSealId(string $SealId) 设置印章ID
 * @method integer getExpired() 获取授权有效期。时间戳秒级
 * @method void setExpired(integer $Expired) 设置授权有效期。时间戳秒级
 * @method string getPolicy() 获取印章授权内容
 * @method void setPolicy(string $Policy) 设置印章授权内容
 * @method Agent getAgent() 获取应用相关
 * @method void setAgent(Agent $Agent) 设置应用相关
 * @method array getUserIds() 获取需要授权的用户UserId集合。跟上面的SealId参数配合使用。选填，跟上面的Users同时起作用
 * @method void setUserIds(array $UserIds) 设置需要授权的用户UserId集合。跟上面的SealId参数配合使用。选填，跟上面的Users同时起作用
 */
class CreateSealPolicyRequest extends AbstractModel
{
    /**
     * @var UserInfo 授权发起人在平台信息，具体参考UserInfo结构体
     */
    public $Operator;

    /**
     * @var array 用户在电子文件签署平台标识信息，具体参考UserInfo结构体。可跟下面的UserIds可叠加起作用
     */
    public $Users;

    /**
     * @var string 印章ID
     */
    public $SealId;

    /**
     * @var integer 授权有效期。时间戳秒级
     */
    public $Expired;

    /**
     * @var string 印章授权内容
     */
    public $Policy;

    /**
     * @var Agent 应用相关
     */
    public $Agent;

    /**
     * @var array 需要授权的用户UserId集合。跟上面的SealId参数配合使用。选填，跟上面的Users同时起作用
     */
    public $UserIds;

    /**
     * @param UserInfo $Operator 授权发起人在平台信息，具体参考UserInfo结构体
     * @param array $Users 用户在电子文件签署平台标识信息，具体参考UserInfo结构体。可跟下面的UserIds可叠加起作用
     * @param string $SealId 印章ID
     * @param integer $Expired 授权有效期。时间戳秒级
     * @param string $Policy 印章授权内容
     * @param Agent $Agent 应用相关
     * @param array $UserIds 需要授权的用户UserId集合。跟上面的SealId参数配合使用。选填，跟上面的Users同时起作用
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new UserInfo();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("Expired",$param) and $param["Expired"] !== null) {
            $this->Expired = $param["Expired"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }
    }
}
