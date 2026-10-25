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
 * DescribeSymbolArtifacts请求参数结构体
 *
 * @method string getKind() 获取<p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。native_symbol 仅查询历史数据。</p>
 * @method void setKind(string $Kind) 设置<p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。native_symbol 仅查询历史数据。</p>
 * @method string getAppId() 获取<p>应用 ID。js_sourcemap 必填，其他应用级制品用于过滤。</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID。js_sourcemap 必填，其他应用级制品用于过滤。</p>
 * @method string getProjectId() 获取<p>兼容别名，未传 AppId 时使用。</p>
 * @method void setProjectId(string $ProjectId) 设置<p>兼容别名，未传 AppId 时使用。</p>
 * @method string getRelease() 获取<p>JS 应用版本过滤条件。</p>
 * @method void setRelease(string $Release) 设置<p>JS 应用版本过滤条件。</p>
 * @method string getDist() 获取<p>JS 制品的历史 Dist 过滤条件。</p>
 * @method void setDist(string $Dist) 设置<p>JS 制品的历史 Dist 过滤条件。</p>
 * @method string getFileType() 获取<p>JS 制品文件类型过滤条件。</p>
 * @method void setFileType(string $FileType) 设置<p>JS 制品文件类型过滤条件。</p>
 * @method string getAppVersion() 获取<p>应用版本过滤条件。</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>应用版本过滤条件。</p>
 * @method string getPlatform() 获取<p>历史 native_symbol 的平台过滤条件。</p>
 * @method void setPlatform(string $Platform) 设置<p>历史 native_symbol 的平台过滤条件。</p>
 * @method string getOS() 获取<p>系统名称。system_symbol 场景过滤条件。</p>
 * @method void setOS(string $OS) 设置<p>系统名称。system_symbol 场景过滤条件。</p>
 * @method string getOSVersion() 获取<p>系统版本。system_symbol 场景过滤条件。</p>
 * @method void setOSVersion(string $OSVersion) 设置<p>系统版本。system_symbol 场景过滤条件。</p>
 * @method string getStatus() 获取<p>状态过滤。可按 active、superseded、deleted、invalid 过滤。</p>
 * @method void setStatus(string $Status) 设置<p>状态过滤。可按 active、superseded、deleted、invalid 过滤。</p>
 * @method integer getLimit() 获取<p>分页大小。默认 50。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小。默认 50。</p>
 * @method string getCursor() 获取<p>分页游标。</p>
 * @method void setCursor(string $Cursor) 设置<p>分页游标。</p>
 */
class DescribeSymbolArtifactsRequest extends AbstractModel
{
    /**
     * @var string <p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。native_symbol 仅查询历史数据。</p>
     */
    public $Kind;

    /**
     * @var string <p>应用 ID。js_sourcemap 必填，其他应用级制品用于过滤。</p>
     */
    public $AppId;

    /**
     * @var string <p>兼容别名，未传 AppId 时使用。</p>
     */
    public $ProjectId;

    /**
     * @var string <p>JS 应用版本过滤条件。</p>
     */
    public $Release;

    /**
     * @var string <p>JS 制品的历史 Dist 过滤条件。</p>
     */
    public $Dist;

    /**
     * @var string <p>JS 制品文件类型过滤条件。</p>
     */
    public $FileType;

    /**
     * @var string <p>应用版本过滤条件。</p>
     */
    public $AppVersion;

    /**
     * @var string <p>历史 native_symbol 的平台过滤条件。</p>
     */
    public $Platform;

    /**
     * @var string <p>系统名称。system_symbol 场景过滤条件。</p>
     */
    public $OS;

    /**
     * @var string <p>系统版本。system_symbol 场景过滤条件。</p>
     */
    public $OSVersion;

    /**
     * @var string <p>状态过滤。可按 active、superseded、deleted、invalid 过滤。</p>
     */
    public $Status;

    /**
     * @var integer <p>分页大小。默认 50。</p>
     */
    public $Limit;

    /**
     * @var string <p>分页游标。</p>
     */
    public $Cursor;

    /**
     * @param string $Kind <p>制品类型。取值：js_sourcemap、ios_dsym、macos_dsym、windows_pdb、android_mapping、android_native、system_symbol。native_symbol 仅查询历史数据。</p>
     * @param string $AppId <p>应用 ID。js_sourcemap 必填，其他应用级制品用于过滤。</p>
     * @param string $ProjectId <p>兼容别名，未传 AppId 时使用。</p>
     * @param string $Release <p>JS 应用版本过滤条件。</p>
     * @param string $Dist <p>JS 制品的历史 Dist 过滤条件。</p>
     * @param string $FileType <p>JS 制品文件类型过滤条件。</p>
     * @param string $AppVersion <p>应用版本过滤条件。</p>
     * @param string $Platform <p>历史 native_symbol 的平台过滤条件。</p>
     * @param string $OS <p>系统名称。system_symbol 场景过滤条件。</p>
     * @param string $OSVersion <p>系统版本。system_symbol 场景过滤条件。</p>
     * @param string $Status <p>状态过滤。可按 active、superseded、deleted、invalid 过滤。</p>
     * @param integer $Limit <p>分页大小。默认 50。</p>
     * @param string $Cursor <p>分页游标。</p>
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }
    }
}
