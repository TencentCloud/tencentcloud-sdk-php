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
 * DeleteSymbolArtifact请求参数结构体
 *
 * @method string getKind() 获取<p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。</p>
 * @method void setKind(string $Kind) 设置<p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。</p>
 * @method string getArtifactId() 获取<p>制品 ID。</p>
 * @method void setArtifactId(string $ArtifactId) 设置<p>制品 ID。</p>
 * @method string getAppId() 获取<p>应用 ID。删除应用级制品时必填，须与制品所属应用一致。</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID。删除应用级制品时必填，须与制品所属应用一致。</p>
 * @method string getProjectId() 获取<p>兼容别名，未传 AppId 时使用。</p>
 * @method void setProjectId(string $ProjectId) 设置<p>兼容别名，未传 AppId 时使用。</p>
 * @method string getAppVersion() 获取<p>兼容字段，请勿传入。</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>兼容字段，请勿传入。</p>
 * @method string getPlatform() 获取<p>兼容字段，请勿传入。</p>
 * @method void setPlatform(string $Platform) 设置<p>兼容字段，请勿传入。</p>
 * @method string getOS() 获取<p>系统名称。system_symbol 场景可用于归属校验。</p>
 * @method void setOS(string $OS) 设置<p>系统名称。system_symbol 场景可用于归属校验。</p>
 * @method string getOSVersion() 获取<p>系统版本。system_symbol 场景可用于归属校验。</p>
 * @method void setOSVersion(string $OSVersion) 设置<p>系统版本。system_symbol 场景可用于归属校验。</p>
 */
class DeleteSymbolArtifactRequest extends AbstractModel
{
    /**
     * @var string <p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。</p>
     */
    public $Kind;

    /**
     * @var string <p>制品 ID。</p>
     */
    public $ArtifactId;

    /**
     * @var string <p>应用 ID。删除应用级制品时必填，须与制品所属应用一致。</p>
     */
    public $AppId;

    /**
     * @var string <p>兼容别名，未传 AppId 时使用。</p>
     */
    public $ProjectId;

    /**
     * @var string <p>兼容字段，请勿传入。</p>
     */
    public $AppVersion;

    /**
     * @var string <p>兼容字段，请勿传入。</p>
     */
    public $Platform;

    /**
     * @var string <p>系统名称。system_symbol 场景可用于归属校验。</p>
     */
    public $OS;

    /**
     * @var string <p>系统版本。system_symbol 场景可用于归属校验。</p>
     */
    public $OSVersion;

    /**
     * @param string $Kind <p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。</p>
     * @param string $ArtifactId <p>制品 ID。</p>
     * @param string $AppId <p>应用 ID。删除应用级制品时必填，须与制品所属应用一致。</p>
     * @param string $ProjectId <p>兼容别名，未传 AppId 时使用。</p>
     * @param string $AppVersion <p>兼容字段，请勿传入。</p>
     * @param string $Platform <p>兼容字段，请勿传入。</p>
     * @param string $OS <p>系统名称。system_symbol 场景可用于归属校验。</p>
     * @param string $OSVersion <p>系统版本。system_symbol 场景可用于归属校验。</p>
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

        if (array_key_exists("ArtifactId",$param) and $param["ArtifactId"] !== null) {
            $this->ArtifactId = $param["ArtifactId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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
    }
}
