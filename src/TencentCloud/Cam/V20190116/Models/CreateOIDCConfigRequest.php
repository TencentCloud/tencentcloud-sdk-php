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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOIDCConfig请求参数结构体
 *
 * @method string getIdentityUrl() 获取身份提供商URL
 * @method void setIdentityUrl(string $IdentityUrl) 设置身份提供商URL
 * @method string getIdentityKey() 获取签名公钥，需要base64
 * @method void setIdentityKey(string $IdentityKey) 设置签名公钥，需要base64
 * @method array getClientId() 获取客户端ID
 * @method void setClientId(array $ClientId) 设置客户端ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 */
class CreateOIDCConfigRequest extends AbstractModel
{
    /**
     * @var string 身份提供商URL
     */
    public $IdentityUrl;

    /**
     * @var string 签名公钥，需要base64
     */
    public $IdentityKey;

    /**
     * @var array 客户端ID
     */
    public $ClientId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @param string $IdentityUrl 身份提供商URL
     * @param string $IdentityKey 签名公钥，需要base64
     * @param array $ClientId 客户端ID
     * @param string $Name 名称
     * @param string $Description 描述
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
        if (array_key_exists("IdentityUrl",$param) and $param["IdentityUrl"] !== null) {
            $this->IdentityUrl = $param["IdentityUrl"];
        }

        if (array_key_exists("IdentityKey",$param) and $param["IdentityKey"] !== null) {
            $this->IdentityKey = $param["IdentityKey"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
