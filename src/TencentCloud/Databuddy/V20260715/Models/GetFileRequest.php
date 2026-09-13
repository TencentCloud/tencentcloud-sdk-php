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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFile请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
 * @method string getFileId() 获取<p>文件 ID。来源：CreateFile / ListFiles 接口返回的 FileId。与 FilePath 二选一</p>
 * @method void setFileId(string $FileId) 设置<p>文件 ID。来源：CreateFile / ListFiles 接口返回的 FileId。与 FilePath 二选一</p>
 * @method string getFileType() 获取<p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
 * @method void setFileType(string $FileType) 设置<p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
 * @method boolean getIncludeContent() 获取<p>是否返回文件内容。true 时 Storage.Content 返回 base64 内容，默认 false</p>
 * @method void setIncludeContent(boolean $IncludeContent) 设置<p>是否返回文件内容。true 时 Storage.Content 返回 base64 内容，默认 false</p>
 * @method string getVersionId() 获取<p>文件版本 ID。来源：ListFileVersions 接口返回的 VersionId。不传则读取最新版本</p>
 * @method void setVersionId(string $VersionId) 设置<p>文件版本 ID。来源：ListFileVersions 接口返回的 VersionId。不传则读取最新版本</p>
 * @method string getFilePath() 获取<p>文件完整路径，以 / 开头，如 /etl/daily/demo.ipynb。与 FileId 二选一</p>
 * @method void setFilePath(string $FilePath) 设置<p>文件完整路径，以 / 开头，如 /etl/daily/demo.ipynb。与 FileId 二选一</p>
 */
class GetFileRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>文件 ID。来源：CreateFile / ListFiles 接口返回的 FileId。与 FilePath 二选一</p>
     */
    public $FileId;

    /**
     * @var string <p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
     */
    public $FileType;

    /**
     * @var boolean <p>是否返回文件内容。true 时 Storage.Content 返回 base64 内容，默认 false</p>
     */
    public $IncludeContent;

    /**
     * @var string <p>文件版本 ID。来源：ListFileVersions 接口返回的 VersionId。不传则读取最新版本</p>
     */
    public $VersionId;

    /**
     * @var string <p>文件完整路径，以 / 开头，如 /etl/daily/demo.ipynb。与 FileId 二选一</p>
     */
    public $FilePath;

    /**
     * @param string $WorkspaceId <p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
     * @param string $FileId <p>文件 ID。来源：CreateFile / ListFiles 接口返回的 FileId。与 FilePath 二选一</p>
     * @param string $FileType <p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
     * @param boolean $IncludeContent <p>是否返回文件内容。true 时 Storage.Content 返回 base64 内容，默认 false</p>
     * @param string $VersionId <p>文件版本 ID。来源：ListFileVersions 接口返回的 VersionId。不传则读取最新版本</p>
     * @param string $FilePath <p>文件完整路径，以 / 开头，如 /etl/daily/demo.ipynb。与 FileId 二选一</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("IncludeContent",$param) and $param["IncludeContent"] !== null) {
            $this->IncludeContent = $param["IncludeContent"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }
    }
}
