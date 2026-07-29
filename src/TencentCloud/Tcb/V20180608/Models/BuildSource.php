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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 构建触发的源码来源: git,cos,inline
 *
 * @method string getType() 获取<p>源码来源类型，取值：&quot;git&quot; &quot;zip&quot;</p>
 * @method void setType(string $Type) 设置<p>源码来源类型，取值：&quot;git&quot; &quot;zip&quot;</p>
 * @method string getRepo() 获取<p>Git 仓库 HTTPS URL；或 COS 下载完整 URL；与 CodeUrlWithAuth / CosTimestamp 之一非空（zip 二阶段上传时可留空）</p>
 * @method void setRepo(string $Repo) 设置<p>Git 仓库 HTTPS URL；或 COS 下载完整 URL；与 CodeUrlWithAuth / CosTimestamp 之一非空（zip 二阶段上传时可留空）</p>
 * @method string getRef() 获取<p>分支 tag commit；Git 默认 main，zip 模式下忽略</p>
 * @method void setRef(string $Ref) 设置<p>分支 tag commit；Git 默认 main，zip 模式下忽略</p>
 * @method string getChannel() 获取<p>&quot;git&quot; &quot;github&quot; &quot;gitlab&quot; &quot;gitee&quot; &quot;coding&quot;；私有仓必填，平台据此走 OAuth 鉴权</p>
 * @method void setChannel(string $Channel) 设置<p>&quot;git&quot; &quot;github&quot; &quot;gitlab&quot; &quot;gitee&quot; &quot;coding&quot;；私有仓必填，平台据此走 OAuth 鉴权</p>
 * @method boolean getIsPrivate() 获取<p>是否私有仓；true 时平台自动注入 CodeUrlWithAuth</p>
 * @method void setIsPrivate(boolean $IsPrivate) 设置<p>是否私有仓；true 时平台自动注入 CodeUrlWithAuth</p>
 * @method string getCodeUrlWithAuth() 获取<p>调用方显式传入的带鉴权 clone URL 或带签名的 zip 下载直链（优先级最高，会覆盖平台 OAuth / 自动签名）</p>
 * @method void setCodeUrlWithAuth(string $CodeUrlWithAuth) 设置<p>调用方显式传入的带鉴权 clone URL 或带签名的 zip 下载直链（优先级最高，会覆盖平台 OAuth / 自动签名）</p>
 * @method string getCosTimestamp() 获取<p>仅 Type=zip/cos 时使用。配合 zip 二阶段上传：填 DescribeCloudAppCosInfo 返回的 UnixTimestamp，平台据此自动签名出 ZIP_FILE_URL</p>
 * @method void setCosTimestamp(string $CosTimestamp) 设置<p>仅 Type=zip/cos 时使用。配合 zip 二阶段上传：填 DescribeCloudAppCosInfo 返回的 UnixTimestamp，平台据此自动签名出 ZIP_FILE_URL</p>
 * @method string getCosSuffix() 获取<p>仅 Type=zip/cos 时使用。zip 文件后缀，默认 .zip；与 CosTimestamp 配合定位 COS 对象</p>
 * @method void setCosSuffix(string $CosSuffix) 设置<p>仅 Type=zip/cos 时使用。zip 文件后缀，默认 .zip；与 CosTimestamp 配合定位 COS 对象</p>
 */
class BuildSource extends AbstractModel
{
    /**
     * @var string <p>源码来源类型，取值：&quot;git&quot; &quot;zip&quot;</p>
     */
    public $Type;

    /**
     * @var string <p>Git 仓库 HTTPS URL；或 COS 下载完整 URL；与 CodeUrlWithAuth / CosTimestamp 之一非空（zip 二阶段上传时可留空）</p>
     */
    public $Repo;

    /**
     * @var string <p>分支 tag commit；Git 默认 main，zip 模式下忽略</p>
     */
    public $Ref;

    /**
     * @var string <p>&quot;git&quot; &quot;github&quot; &quot;gitlab&quot; &quot;gitee&quot; &quot;coding&quot;；私有仓必填，平台据此走 OAuth 鉴权</p>
     */
    public $Channel;

    /**
     * @var boolean <p>是否私有仓；true 时平台自动注入 CodeUrlWithAuth</p>
     */
    public $IsPrivate;

    /**
     * @var string <p>调用方显式传入的带鉴权 clone URL 或带签名的 zip 下载直链（优先级最高，会覆盖平台 OAuth / 自动签名）</p>
     */
    public $CodeUrlWithAuth;

    /**
     * @var string <p>仅 Type=zip/cos 时使用。配合 zip 二阶段上传：填 DescribeCloudAppCosInfo 返回的 UnixTimestamp，平台据此自动签名出 ZIP_FILE_URL</p>
     */
    public $CosTimestamp;

    /**
     * @var string <p>仅 Type=zip/cos 时使用。zip 文件后缀，默认 .zip；与 CosTimestamp 配合定位 COS 对象</p>
     */
    public $CosSuffix;

    /**
     * @param string $Type <p>源码来源类型，取值：&quot;git&quot; &quot;zip&quot;</p>
     * @param string $Repo <p>Git 仓库 HTTPS URL；或 COS 下载完整 URL；与 CodeUrlWithAuth / CosTimestamp 之一非空（zip 二阶段上传时可留空）</p>
     * @param string $Ref <p>分支 tag commit；Git 默认 main，zip 模式下忽略</p>
     * @param string $Channel <p>&quot;git&quot; &quot;github&quot; &quot;gitlab&quot; &quot;gitee&quot; &quot;coding&quot;；私有仓必填，平台据此走 OAuth 鉴权</p>
     * @param boolean $IsPrivate <p>是否私有仓；true 时平台自动注入 CodeUrlWithAuth</p>
     * @param string $CodeUrlWithAuth <p>调用方显式传入的带鉴权 clone URL 或带签名的 zip 下载直链（优先级最高，会覆盖平台 OAuth / 自动签名）</p>
     * @param string $CosTimestamp <p>仅 Type=zip/cos 时使用。配合 zip 二阶段上传：填 DescribeCloudAppCosInfo 返回的 UnixTimestamp，平台据此自动签名出 ZIP_FILE_URL</p>
     * @param string $CosSuffix <p>仅 Type=zip/cos 时使用。zip 文件后缀，默认 .zip；与 CosTimestamp 配合定位 COS 对象</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Repo",$param) and $param["Repo"] !== null) {
            $this->Repo = $param["Repo"];
        }

        if (array_key_exists("Ref",$param) and $param["Ref"] !== null) {
            $this->Ref = $param["Ref"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("IsPrivate",$param) and $param["IsPrivate"] !== null) {
            $this->IsPrivate = $param["IsPrivate"];
        }

        if (array_key_exists("CodeUrlWithAuth",$param) and $param["CodeUrlWithAuth"] !== null) {
            $this->CodeUrlWithAuth = $param["CodeUrlWithAuth"];
        }

        if (array_key_exists("CosTimestamp",$param) and $param["CosTimestamp"] !== null) {
            $this->CosTimestamp = $param["CosTimestamp"];
        }

        if (array_key_exists("CosSuffix",$param) and $param["CosSuffix"] !== null) {
            $this->CosSuffix = $param["CosSuffix"];
        }
    }
}
