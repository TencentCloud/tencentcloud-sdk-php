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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOIDCConfig请求参数结构体
 *
 * @method string getIdentityUrl() 获取<p>身份提供商URL</p>
 * @method void setIdentityUrl(string $IdentityUrl) 设置<p>身份提供商URL</p>
 * @method array getClientId() 获取<p>客户端ID</p>
 * @method void setClientId(array $ClientId) 设置<p>客户端ID</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getIdentityKey() 获取<p>签名公钥，需要base64</p>
 * @method void setIdentityKey(string $IdentityKey) 设置<p>签名公钥，需要base64</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method integer getAutoRotateKey() 获取<p>OIDC公钥自动轮转开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul><p>默认值：0</p>
 * @method void setAutoRotateKey(integer $AutoRotateKey) 设置<p>OIDC公钥自动轮转开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul><p>默认值：0</p>
 */
class CreateOIDCConfigRequest extends AbstractModel
{
    /**
     * @var string <p>身份提供商URL</p>
     */
    public $IdentityUrl;

    /**
     * @var array <p>客户端ID</p>
     */
    public $ClientId;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>签名公钥，需要base64</p>
     */
    public $IdentityKey;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var integer <p>OIDC公钥自动轮转开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul><p>默认值：0</p>
     */
    public $AutoRotateKey;

    /**
     * @param string $IdentityUrl <p>身份提供商URL</p>
     * @param array $ClientId <p>客户端ID</p>
     * @param string $Name <p>名称</p>
     * @param string $IdentityKey <p>签名公钥，需要base64</p>
     * @param string $Description <p>描述</p>
     * @param integer $AutoRotateKey <p>OIDC公钥自动轮转开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul><p>默认值：0</p>
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

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdentityKey",$param) and $param["IdentityKey"] !== null) {
            $this->IdentityKey = $param["IdentityKey"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AutoRotateKey",$param) and $param["AutoRotateKey"] !== null) {
            $this->AutoRotateKey = $param["AutoRotateKey"];
        }
    }
}
