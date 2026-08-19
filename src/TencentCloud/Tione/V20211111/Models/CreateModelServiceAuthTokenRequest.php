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
 * CreateModelServiceAuthToken请求参数结构体
 *
 * @method string getServiceGroupId() 获取<p>服务组 id</p>
 * @method void setServiceGroupId(string $ServiceGroupId) 设置<p>服务组 id</p>
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method string getName() 获取<p>token 名称</p>
 * @method void setName(string $Name) 设置<p>token 名称</p>
 * @method string getDescription() 获取<p>Description 描述</p>
 * @method void setDescription(string $Description) 设置<p>Description 描述</p>
 */
class CreateModelServiceAuthTokenRequest extends AbstractModel
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
     * @var string <p>token 名称</p>
     */
    public $Name;

    /**
     * @var string <p>Description 描述</p>
     */
    public $Description;

    /**
     * @param string $ServiceGroupId <p>服务组 id</p>
     * @param string $TiProjectId <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     * @param string $Name <p>token 名称</p>
     * @param string $Description <p>Description 描述</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
