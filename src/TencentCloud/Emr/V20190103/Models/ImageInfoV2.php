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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EMR on TKE集群组件镜像信息
 *
 * @method string getImageMode() 获取<p>镜像类型</p><p>枚举值：</p><ul><li>official： 官方镜像</li><li>custom： 自定义镜像</li><li>imageUrl： 镜像地址</li></ul>
 * @method void setImageMode(string $ImageMode) 设置<p>镜像类型</p><p>枚举值：</p><ul><li>official： 官方镜像</li><li>custom： 自定义镜像</li><li>imageUrl： 镜像地址</li></ul>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method boolean getLegacyCCR() 获取<p>是否是存量镜像</p>
 * @method void setLegacyCCR(boolean $LegacyCCR) 设置<p>是否是存量镜像</p>
 * @method string getFullImageUrl() 获取<p>镜像地址</p>
 * @method void setFullImageUrl(string $FullImageUrl) 设置<p>镜像地址</p>
 * @method string getMainVersion() 获取<p>版本</p>
 * @method void setMainVersion(string $MainVersion) 设置<p>版本</p>
 * @method string getRegistryUrl() 获取<p>镜像地址域名</p>
 * @method void setRegistryUrl(string $RegistryUrl) 设置<p>镜像地址域名</p>
 * @method string getNamespaceName() 获取<p>镜像命名空间</p>
 * @method void setNamespaceName(string $NamespaceName) 设置<p>镜像命名空间</p>
 * @method string getRepoName() 获取<p>镜像仓库名</p>
 * @method void setRepoName(string $RepoName) 设置<p>镜像仓库名</p>
 * @method string getTag() 获取<p>镜像版本标签</p>
 * @method void setTag(string $Tag) 设置<p>镜像版本标签</p>
 * @method string getUsername() 获取<p>用户名</p>
 * @method void setUsername(string $Username) 设置<p>用户名</p>
 * @method string getPassword() 获取<p>密码</p>
 * @method void setPassword(string $Password) 设置<p>密码</p>
 * @method ImagePullSecret getImagePullSecret() 获取<p>镜像拉取密钥</p>
 * @method void setImagePullSecret(ImagePullSecret $ImagePullSecret) 设置<p>镜像拉取密钥</p>
 * @method string getImagePullPolicy() 获取<p>镜像拉取策略</p>
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置<p>镜像拉取策略</p>
 */
class ImageInfoV2 extends AbstractModel
{
    /**
     * @var string <p>镜像类型</p><p>枚举值：</p><ul><li>official： 官方镜像</li><li>custom： 自定义镜像</li><li>imageUrl： 镜像地址</li></ul>
     */
    public $ImageMode;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var boolean <p>是否是存量镜像</p>
     */
    public $LegacyCCR;

    /**
     * @var string <p>镜像地址</p>
     */
    public $FullImageUrl;

    /**
     * @var string <p>版本</p>
     */
    public $MainVersion;

    /**
     * @var string <p>镜像地址域名</p>
     */
    public $RegistryUrl;

    /**
     * @var string <p>镜像命名空间</p>
     */
    public $NamespaceName;

    /**
     * @var string <p>镜像仓库名</p>
     */
    public $RepoName;

    /**
     * @var string <p>镜像版本标签</p>
     */
    public $Tag;

    /**
     * @var string <p>用户名</p>
     */
    public $Username;

    /**
     * @var string <p>密码</p>
     */
    public $Password;

    /**
     * @var ImagePullSecret <p>镜像拉取密钥</p>
     */
    public $ImagePullSecret;

    /**
     * @var string <p>镜像拉取策略</p>
     */
    public $ImagePullPolicy;

    /**
     * @param string $ImageMode <p>镜像类型</p><p>枚举值：</p><ul><li>official： 官方镜像</li><li>custom： 自定义镜像</li><li>imageUrl： 镜像地址</li></ul>
     * @param string $Region <p>地域</p>
     * @param boolean $LegacyCCR <p>是否是存量镜像</p>
     * @param string $FullImageUrl <p>镜像地址</p>
     * @param string $MainVersion <p>版本</p>
     * @param string $RegistryUrl <p>镜像地址域名</p>
     * @param string $NamespaceName <p>镜像命名空间</p>
     * @param string $RepoName <p>镜像仓库名</p>
     * @param string $Tag <p>镜像版本标签</p>
     * @param string $Username <p>用户名</p>
     * @param string $Password <p>密码</p>
     * @param ImagePullSecret $ImagePullSecret <p>镜像拉取密钥</p>
     * @param string $ImagePullPolicy <p>镜像拉取策略</p>
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
        if (array_key_exists("ImageMode",$param) and $param["ImageMode"] !== null) {
            $this->ImageMode = $param["ImageMode"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("LegacyCCR",$param) and $param["LegacyCCR"] !== null) {
            $this->LegacyCCR = $param["LegacyCCR"];
        }

        if (array_key_exists("FullImageUrl",$param) and $param["FullImageUrl"] !== null) {
            $this->FullImageUrl = $param["FullImageUrl"];
        }

        if (array_key_exists("MainVersion",$param) and $param["MainVersion"] !== null) {
            $this->MainVersion = $param["MainVersion"];
        }

        if (array_key_exists("RegistryUrl",$param) and $param["RegistryUrl"] !== null) {
            $this->RegistryUrl = $param["RegistryUrl"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ImagePullSecret",$param) and $param["ImagePullSecret"] !== null) {
            $this->ImagePullSecret = new ImagePullSecret();
            $this->ImagePullSecret->deserialize($param["ImagePullSecret"]);
        }

        if (array_key_exists("ImagePullPolicy",$param) and $param["ImagePullPolicy"] !== null) {
            $this->ImagePullPolicy = $param["ImagePullPolicy"];
        }
    }
}
