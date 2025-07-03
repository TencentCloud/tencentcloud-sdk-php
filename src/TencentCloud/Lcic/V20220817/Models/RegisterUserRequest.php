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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterUser请求参数结构体
 *
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。
 * @method string getName() 获取对应用户昵称。对应修改用户信息下“nickname“字段，在修改用户信息时，可以对该字段进行调整，从而更改用户的昵称。
 * @method void setName(string $Name) 设置对应用户昵称。对应修改用户信息下“nickname“字段，在修改用户信息时，可以对该字段进行调整，从而更改用户的昵称。
 * @method string getOriginId() 获取用户在客户系统的Id，需要在同一应用下唯一。入参为空时默认赋值为UserId。
 * @method void setOriginId(string $OriginId) 设置用户在客户系统的Id，需要在同一应用下唯一。入参为空时默认赋值为UserId。
 * @method string getAvatar() 获取用户头像。
 * @method void setAvatar(string $Avatar) 设置用户头像。
 */
class RegisterUserRequest extends AbstractModel
{
    /**
     * @var integer 低代码互动课堂的SdkAppId。
     */
    public $SdkAppId;

    /**
     * @var string 对应用户昵称。对应修改用户信息下“nickname“字段，在修改用户信息时，可以对该字段进行调整，从而更改用户的昵称。
     */
    public $Name;

    /**
     * @var string 用户在客户系统的Id，需要在同一应用下唯一。入参为空时默认赋值为UserId。
     */
    public $OriginId;

    /**
     * @var string 用户头像。
     */
    public $Avatar;

    /**
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。
     * @param string $Name 对应用户昵称。对应修改用户信息下“nickname“字段，在修改用户信息时，可以对该字段进行调整，从而更改用户的昵称。
     * @param string $OriginId 用户在客户系统的Id，需要在同一应用下唯一。入参为空时默认赋值为UserId。
     * @param string $Avatar 用户头像。
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }
    }
}
