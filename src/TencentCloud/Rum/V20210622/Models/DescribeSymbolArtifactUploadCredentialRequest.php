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
 * DescribeSymbolArtifactUploadCredential请求参数结构体
 *
 * @method string getKind() 获取<p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。</p>
 * @method void setKind(string $Kind) 设置<p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。</p>
 * @method string getFileName() 获取<p>上传文件名。</p>
 * @method void setFileName(string $FileName) 设置<p>上传文件名。</p>
 * @method string getAppId() 获取<p>应用 ID。应用级制品必填；system_symbol 不传。</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID。应用级制品必填；system_symbol 不传。</p>
 * @method string getProjectId() 获取<p>兼容别名，未传 AppId 时使用。</p>
 * @method void setProjectId(string $ProjectId) 设置<p>兼容别名，未传 AppId 时使用。</p>
 * @method string getRelease() 获取<p>保留字段，请勿传入。</p>
 * @method void setRelease(string $Release) 设置<p>保留字段，请勿传入。</p>
 * @method string getDist() 获取<p>保留字段，请勿传入。</p>
 * @method void setDist(string $Dist) 设置<p>保留字段，请勿传入。</p>
 * @method string getMinifiedUrl() 获取<p>保留字段，请勿传入。</p>
 * @method void setMinifiedUrl(string $MinifiedUrl) 设置<p>保留字段，请勿传入。</p>
 * @method string getFileType() 获取<p>保留字段，请勿传入。</p>
 * @method void setFileType(string $FileType) 设置<p>保留字段，请勿传入。</p>
 * @method string getDebugId() 获取<p>保留字段，请勿传入。</p>
 * @method void setDebugId(string $DebugId) 设置<p>保留字段，请勿传入。</p>
 * @method string getBuildId() 获取<p>保留字段，请勿传入。</p>
 * @method void setBuildId(string $BuildId) 设置<p>保留字段，请勿传入。</p>
 * @method string getAppVersion() 获取<p>保留字段，请勿传入。</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>保留字段，请勿传入。</p>
 * @method string getPlatform() 获取<p>保留字段，请勿传入。</p>
 * @method void setPlatform(string $Platform) 设置<p>保留字段，请勿传入。</p>
 * @method string getOS() 获取<p>系统名称。</p>
 * @method void setOS(string $OS) 设置<p>系统名称。</p>
 * @method string getOSVersion() 获取<p>系统版本。</p>
 * @method void setOSVersion(string $OSVersion) 设置<p>系统版本。</p>
 * @method string getStorePath() 获取<p>保留字段，请勿传入。</p>
 * @method void setStorePath(string $StorePath) 设置<p>保留字段，请勿传入。</p>
 * @method string getContentType() 获取<p>文件内容类型，如 application/json。</p>
 * @method void setContentType(string $ContentType) 设置<p>文件内容类型，如 application/json。</p>
 */
class DescribeSymbolArtifactUploadCredentialRequest extends AbstractModel
{
    /**
     * @var string <p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。</p>
     */
    public $Kind;

    /**
     * @var string <p>上传文件名。</p>
     */
    public $FileName;

    /**
     * @var string <p>应用 ID。应用级制品必填；system_symbol 不传。</p>
     */
    public $AppId;

    /**
     * @var string <p>兼容别名，未传 AppId 时使用。</p>
     */
    public $ProjectId;

    /**
     * @var string <p>保留字段，请勿传入。</p>
     */
    public $Release;

    /**
     * @var string <p>保留字段，请勿传入。</p>
     */
    public $Dist;

    /**
     * @var string <p>保留字段，请勿传入。</p>
     */
    public $MinifiedUrl;

    /**
     * @var string <p>保留字段，请勿传入。</p>
     */
    public $FileType;

    /**
     * @var string <p>保留字段，请勿传入。</p>
     */
    public $DebugId;

    /**
     * @var string <p>保留字段，请勿传入。</p>
     */
    public $BuildId;

    /**
     * @var string <p>保留字段，请勿传入。</p>
     */
    public $AppVersion;

    /**
     * @var string <p>保留字段，请勿传入。</p>
     */
    public $Platform;

    /**
     * @var string <p>系统名称。</p>
     */
    public $OS;

    /**
     * @var string <p>系统版本。</p>
     */
    public $OSVersion;

    /**
     * @var string <p>保留字段，请勿传入。</p>
     */
    public $StorePath;

    /**
     * @var string <p>文件内容类型，如 application/json。</p>
     */
    public $ContentType;

    /**
     * @param string $Kind <p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。</p>
     * @param string $FileName <p>上传文件名。</p>
     * @param string $AppId <p>应用 ID。应用级制品必填；system_symbol 不传。</p>
     * @param string $ProjectId <p>兼容别名，未传 AppId 时使用。</p>
     * @param string $Release <p>保留字段，请勿传入。</p>
     * @param string $Dist <p>保留字段，请勿传入。</p>
     * @param string $MinifiedUrl <p>保留字段，请勿传入。</p>
     * @param string $FileType <p>保留字段，请勿传入。</p>
     * @param string $DebugId <p>保留字段，请勿传入。</p>
     * @param string $BuildId <p>保留字段，请勿传入。</p>
     * @param string $AppVersion <p>保留字段，请勿传入。</p>
     * @param string $Platform <p>保留字段，请勿传入。</p>
     * @param string $OS <p>系统名称。</p>
     * @param string $OSVersion <p>系统版本。</p>
     * @param string $StorePath <p>保留字段，请勿传入。</p>
     * @param string $ContentType <p>文件内容类型，如 application/json。</p>
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
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

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }
    }
}
