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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServiceAccount返回参数结构体
 *
 * @method string getName() 获取服务级账号名（会自动加上前缀tcr$）
 * @method void setName(string $Name) 设置服务级账号名（会自动加上前缀tcr$）
 * @method string getPassword() 获取服务级账号密码，仅展示一次，请注意留存
 * @method void setPassword(string $Password) 设置服务级账号密码，仅展示一次，请注意留存
 * @method integer getExpiresAt() 获取服务级账号失效时间（时间戳）
 * @method void setExpiresAt(integer $ExpiresAt) 设置服务级账号失效时间（时间戳）
 * @method string getCreateTime() 获取服务级账号创建时间
 * @method void setCreateTime(string $CreateTime) 设置服务级账号创建时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateServiceAccountResponse extends AbstractModel
{
    /**
     * @var string 服务级账号名（会自动加上前缀tcr$）
     */
    public $Name;

    /**
     * @var string 服务级账号密码，仅展示一次，请注意留存
     */
    public $Password;

    /**
     * @var integer 服务级账号失效时间（时间戳）
     */
    public $ExpiresAt;

    /**
     * @var string 服务级账号创建时间
     */
    public $CreateTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 服务级账号名（会自动加上前缀tcr$）
     * @param string $Password 服务级账号密码，仅展示一次，请注意留存
     * @param integer $ExpiresAt 服务级账号失效时间（时间戳）
     * @param string $CreateTime 服务级账号创建时间
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ExpiresAt",$param) and $param["ExpiresAt"] !== null) {
            $this->ExpiresAt = $param["ExpiresAt"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
