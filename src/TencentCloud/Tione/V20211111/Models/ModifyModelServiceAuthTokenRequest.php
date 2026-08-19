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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModelServiceAuthToken请求参数结构体
 *
 * @method string getServiceGroupId() 获取<p>服务组 id</p>
 * @method void setServiceGroupId(string $ServiceGroupId) 设置<p>服务组 id</p>
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method boolean getNeedReset() 获取<p>是否需要重置，如果为 true，重置 token 值</p>
 * @method void setNeedReset(boolean $NeedReset) 设置<p>是否需要重置，如果为 true，重置 token 值</p>
 * @method AuthToken getAuthToken() 获取<p>AuthToken 数据</p>
 * @method void setAuthToken(AuthToken $AuthToken) 设置<p>AuthToken 数据</p>
 */
class ModifyModelServiceAuthTokenRequest extends AbstractModel
{
    /**
     * @var string <p>服务组 id</p>
     */
    public $ServiceGroupId;

    /**
     * @var string <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     */
    public $TiProjectId;

    /**
     * @var boolean <p>是否需要重置，如果为 true，重置 token 值</p>
     */
    public $NeedReset;

    /**
     * @var AuthToken <p>AuthToken 数据</p>
     */
    public $AuthToken;

    /**
     * @param string $ServiceGroupId <p>服务组 id</p>
     * @param string $TiProjectId <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     * @param boolean $NeedReset <p>是否需要重置，如果为 true，重置 token 值</p>
     * @param AuthToken $AuthToken <p>AuthToken 数据</p>
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

        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
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
