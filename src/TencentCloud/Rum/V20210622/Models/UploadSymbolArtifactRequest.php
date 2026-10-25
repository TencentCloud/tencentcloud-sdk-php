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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadSymbolArtifact请求参数结构体
 *
 * @method string getKind() 获取<p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。</p>
 * @method void setKind(string $Kind) 设置<p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。</p>
 * @method integer getFileSize() 获取<p>对象大小（字节）。</p>
 * @method void setFileSize(integer $FileSize) 设置<p>对象大小（字节）。</p>
 * @method string getSha256() 获取<p>对象内容的 SHA256 十六进制摘要，长度固定为 64 个字符。</p>
 * @method void setSha256(string $Sha256) 设置<p>对象内容的 SHA256 十六进制摘要，长度固定为 64 个字符。</p>
 * @method string getCOSUrl() 获取<p>已上传对象的腾讯云 COS URL。与 FileUrl 二选一至少传一个；优先使用 COSUrl。必须属于当前配置的 Bucket 和 Region。</p>
 * @method void setCOSUrl(string $COSUrl) 设置<p>已上传对象的腾讯云 COS URL。与 FileUrl 二选一至少传一个；优先使用 COSUrl。必须属于当前配置的 Bucket 和 Region。</p>
 * @method string getAppId() 获取<p>应用 ID。应用级制品必填；system_symbol 不传。</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID。应用级制品必填；system_symbol 不传。</p>
 * @method string getProjectId() 获取<p>兼容别名，未传 AppId 时使用。</p>
 * @method void setProjectId(string $ProjectId) 设置<p>兼容别名，未传 AppId 时使用。</p>
 * @method string getRelease() 获取<p>JS 应用版本。未传 AppVersion 时使用。</p>
 * @method void setRelease(string $Release) 设置<p>JS 应用版本。未传 AppVersion 时使用。</p>
 * @method string getDist() 获取<p>兼容字段，不参与制品匹配。</p>
 * @method void setDist(string $Dist) 设置<p>兼容字段，不参与制品匹配。</p>
 * @method string getMinifiedUrl() 获取<p>压缩文件 URL。Kind=js_sourcemap 且 FileType 非 source_bundle 时必填。</p>
 * @method void setMinifiedUrl(string $MinifiedUrl) 设置<p>压缩文件 URL。Kind=js_sourcemap 且 FileType 非 source_bundle 时必填。</p>
 * @method string getFileType() 获取<p>JS 制品文件类型。可选值说明：sourcemap、minified、source_bundle；为空时默认 sourcemap。</p>
 * @method void setFileType(string $FileType) 设置<p>JS 制品文件类型。可选值说明：sourcemap、minified、source_bundle；为空时默认 sourcemap。</p>
 * @method string getDebugId() 获取<p>调试 ID。除 js_sourcemap 外均必填。</p>
 * @method void setDebugId(string $DebugId) 设置<p>调试 ID。除 js_sourcemap 外均必填。</p>
 * @method string getBuildId() 获取<p>构建 ID。ios_dsym、android_mapping、android_native 必填。</p>
 * @method void setBuildId(string $BuildId) 设置<p>构建 ID。ios_dsym、android_mapping、android_native 必填。</p>
 * @method string getAppVersion() 获取<p>应用版本。js_sourcemap 必填，未传时使用 Release。</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>应用版本。js_sourcemap 必填，未传时使用 Release。</p>
 * @method string getPlatform() 获取<p>兼容字段，请勿传入。</p>
 * @method void setPlatform(string $Platform) 设置<p>兼容字段，请勿传入。</p>
 * @method string getOS() 获取<p>系统名称。system_symbol 可填写。</p>
 * @method void setOS(string $OS) 设置<p>系统名称。system_symbol 可填写。</p>
 * @method string getOSVersion() 获取<p>系统版本。system_symbol 可填写。</p>
 * @method void setOSVersion(string $OSVersion) 设置<p>系统版本。system_symbol 可填写。</p>
 * @method string getStorePath() 获取<p>兼容字段，请勿传入。</p>
 * @method void setStorePath(string $StorePath) 设置<p>兼容字段，请勿传入。</p>
 * @method string getFileName() 获取<p>文件名。原生和系统符号必填；ios_dsym 使用模块名，android_native 使用 abi/文件名。</p>
 * @method void setFileName(string $FileName) 设置<p>文件名。原生和系统符号必填；ios_dsym 使用模块名，android_native 使用 abi/文件名。</p>
 * @method string getContentType() 获取<p>文件内容类型，如 application/json。</p>
 * @method void setContentType(string $ContentType) 设置<p>文件内容类型，如 application/json。</p>
 * @method string getFileUrl() 获取<p>COSUrl 的兼容别名；当未传 COSUrl 时使用。与 COSUrl 二选一至少传一个。</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>COSUrl 的兼容别名；当未传 COSUrl 时使用。与 COSUrl 二选一至少传一个。</p>
 */
class UploadSymbolArtifactRequest extends AbstractModel
{
    /**
     * @var string <p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。</p>
     */
    public $Kind;

    /**
     * @var integer <p>对象大小（字节）。</p>
     */
    public $FileSize;

    /**
     * @var string <p>对象内容的 SHA256 十六进制摘要，长度固定为 64 个字符。</p>
     */
    public $Sha256;

    /**
     * @var string <p>已上传对象的腾讯云 COS URL。与 FileUrl 二选一至少传一个；优先使用 COSUrl。必须属于当前配置的 Bucket 和 Region。</p>
     */
    public $COSUrl;

    /**
     * @var string <p>应用 ID。应用级制品必填；system_symbol 不传。</p>
     */
    public $AppId;

    /**
     * @var string <p>兼容别名，未传 AppId 时使用。</p>
     */
    public $ProjectId;

    /**
     * @var string <p>JS 应用版本。未传 AppVersion 时使用。</p>
     */
    public $Release;

    /**
     * @var string <p>兼容字段，不参与制品匹配。</p>
     */
    public $Dist;

    /**
     * @var string <p>压缩文件 URL。Kind=js_sourcemap 且 FileType 非 source_bundle 时必填。</p>
     */
    public $MinifiedUrl;

    /**
     * @var string <p>JS 制品文件类型。可选值说明：sourcemap、minified、source_bundle；为空时默认 sourcemap。</p>
     */
    public $FileType;

    /**
     * @var string <p>调试 ID。除 js_sourcemap 外均必填。</p>
     */
    public $DebugId;

    /**
     * @var string <p>构建 ID。ios_dsym、android_mapping、android_native 必填。</p>
     */
    public $BuildId;

    /**
     * @var string <p>应用版本。js_sourcemap 必填，未传时使用 Release。</p>
     */
    public $AppVersion;

    /**
     * @var string <p>兼容字段，请勿传入。</p>
     */
    public $Platform;

    /**
     * @var string <p>系统名称。system_symbol 可填写。</p>
     */
    public $OS;

    /**
     * @var string <p>系统版本。system_symbol 可填写。</p>
     */
    public $OSVersion;

    /**
     * @var string <p>兼容字段，请勿传入。</p>
     */
    public $StorePath;

    /**
     * @var string <p>文件名。原生和系统符号必填；ios_dsym 使用模块名，android_native 使用 abi/文件名。</p>
     */
    public $FileName;

    /**
     * @var string <p>文件内容类型，如 application/json。</p>
     */
    public $ContentType;

    /**
     * @var string <p>COSUrl 的兼容别名；当未传 COSUrl 时使用。与 COSUrl 二选一至少传一个。</p>
     */
    public $FileUrl;

    /**
     * @param string $Kind <p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。</p>
     * @param integer $FileSize <p>对象大小（字节）。</p>
     * @param string $Sha256 <p>对象内容的 SHA256 十六进制摘要，长度固定为 64 个字符。</p>
     * @param string $COSUrl <p>已上传对象的腾讯云 COS URL。与 FileUrl 二选一至少传一个；优先使用 COSUrl。必须属于当前配置的 Bucket 和 Region。</p>
     * @param string $AppId <p>应用 ID。应用级制品必填；system_symbol 不传。</p>
     * @param string $ProjectId <p>兼容别名，未传 AppId 时使用。</p>
     * @param string $Release <p>JS 应用版本。未传 AppVersion 时使用。</p>
     * @param string $Dist <p>兼容字段，不参与制品匹配。</p>
     * @param string $MinifiedUrl <p>压缩文件 URL。Kind=js_sourcemap 且 FileType 非 source_bundle 时必填。</p>
     * @param string $FileType <p>JS 制品文件类型。可选值说明：sourcemap、minified、source_bundle；为空时默认 sourcemap。</p>
     * @param string $DebugId <p>调试 ID。除 js_sourcemap 外均必填。</p>
     * @param string $BuildId <p>构建 ID。ios_dsym、android_mapping、android_native 必填。</p>
     * @param string $AppVersion <p>应用版本。js_sourcemap 必填，未传时使用 Release。</p>
     * @param string $Platform <p>兼容字段，请勿传入。</p>
     * @param string $OS <p>系统名称。system_symbol 可填写。</p>
     * @param string $OSVersion <p>系统版本。system_symbol 可填写。</p>
     * @param string $StorePath <p>兼容字段，请勿传入。</p>
     * @param string $FileName <p>文件名。原生和系统符号必填；ios_dsym 使用模块名，android_native 使用 abi/文件名。</p>
     * @param string $ContentType <p>文件内容类型，如 application/json。</p>
     * @param string $FileUrl <p>COSUrl 的兼容别名；当未传 COSUrl 时使用。与 COSUrl 二选一至少传一个。</p>
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
        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Sha256",$param) and $param["Sha256"] !== null) {
            $this->Sha256 = $param["Sha256"];
        }

        if (array_key_exists("COSUrl",$param) and $param["COSUrl"] !== null) {
            $this->COSUrl = $param["COSUrl"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Release",$param) and $param["Release"] !== null) {
            $this->Release = $param["Release"];
        }

        if (array_key_exists("Dist",$param) and $param["Dist"] !== null) {
            $this->Dist = $param["Dist"];
        }

        if (array_key_exists("MinifiedUrl",$param) and $param["MinifiedUrl"] !== null) {
            $this->MinifiedUrl = $param["MinifiedUrl"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("DebugId",$param) and $param["DebugId"] !== null) {
            $this->DebugId = $param["DebugId"];
        }

        if (array_key_exists("BuildId",$param) and $param["BuildId"] !== null) {
            $this->BuildId = $param["BuildId"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("OS",$param) and $param["OS"] !== null) {
            $this->OS = $param["OS"];
        }

        if (array_key_exists("OSVersion",$param) and $param["OSVersion"] !== null) {
            $this->OSVersion = $param["OSVersion"];
        }

        if (array_key_exists("StorePath",$param) and $param["StorePath"] !== null) {
            $this->StorePath = $param["StorePath"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }
    }
}
