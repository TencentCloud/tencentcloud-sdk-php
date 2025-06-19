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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModelServiceAuthToken请求参数结构体
 *
 * @method string getServiceGroupId() 获取服务组 id
 * @method void setServiceGroupId(string $ServiceGroupId) 设置服务组 id
 * @method boolean getNeedReset() 获取是否需要重置，如果为 true，重置 token 值
 * @method void setNeedReset(boolean $NeedReset) 设置是否需要重置，如果为 true，重置 token 值
 * @method AuthToken getAuthToken() 获取AuthToken 数据
 * @method void setAuthToken(AuthToken $AuthToken) 设置AuthToken 数据
 */
class ModifyModelServiceAuthTokenRequest extends AbstractModel
{
    /**
     * @var string 服务组 id
     */
    public $ServiceGroupId;

    /**
     * @var boolean 是否需要重置，如果为 true，重置 token 值
     */
    public $NeedReset;

    /**
     * @var AuthToken AuthToken 数据
     */
    public $AuthToken;

    /**
     * @param string $ServiceGroupId 服务组 id
     * @param boolean $NeedReset 是否需要重置，如果为 true，重置 token 值
     * @param AuthToken $AuthToken AuthToken 数据
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
        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }

        if (array_key_exists("NeedReset",$param) and $param["NeedReset"] !== null) {
            $this->NeedReset = $param["NeedReset"];
        }

        if (array_key_exists("AuthToken",$param) and $param["AuthToken"] !== null) {
            $this->AuthToken = new AuthToken();
            $this->AuthToken->deserialize($param["AuthToken"]);
        }
    }
}
