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
 * DeleteFile请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
 * @method string getFileId() 获取<p>文件 ID。来源：CreateFile / ListFiles / GetFile 接口返回的 FileId</p>
 * @method void setFileId(string $FileId) 设置<p>文件 ID。来源：CreateFile / ListFiles / GetFile 接口返回的 FileId</p>
 * @method string getFileType() 获取<p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
 * @method void setFileType(string $FileType) 设置<p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
 */
class DeleteFileRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>文件 ID。来源：CreateFile / ListFiles / GetFile 接口返回的 FileId</p>
     */
    public $FileId;

    /**
     * @var string <p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
     */
    public $FileType;

    /**
     * @param string $WorkspaceId <p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
     * @param string $FileId <p>文件 ID。来源：CreateFile / ListFiles / GetFile 接口返回的 FileId</p>
     * @param string $FileType <p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
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
    }
}
