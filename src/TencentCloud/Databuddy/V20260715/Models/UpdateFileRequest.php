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
 * UpdateFile请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
 * @method string getFileId() 获取<p>文件 ID。来源：CreateFile / ListFiles / GetFile 接口返回的 FileId</p>
 * @method void setFileId(string $FileId) 设置<p>文件 ID。来源：CreateFile / ListFiles / GetFile 接口返回的 FileId</p>
 * @method FileConfig getFileConfig() 获取<p>文件运行配置。不传则不更新配置</p>
 * @method void setFileConfig(FileConfig $FileConfig) 设置<p>文件运行配置。不传则不更新配置</p>
 * @method string getFileType() 获取<p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
 * @method void setFileType(string $FileType) 设置<p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
 * @method string getBundleId() 获取<p>绑定的 BundleId。来源：ListBundles 接口返回的 BundleId</p>
 * @method void setBundleId(string $BundleId) 设置<p>绑定的 BundleId。来源：ListBundles 接口返回的 BundleId</p>
 * @method string getBundleInfo() 获取<p>绑定的 BundleInfo，JSON 字符串</p>
 * @method void setBundleInfo(string $BundleInfo) 设置<p>绑定的 BundleInfo，JSON 字符串</p>
 * @method FileStorage getStorage() 获取<p>文件内容。不传则不更新内容</p>
 * @method void setStorage(FileStorage $Storage) 设置<p>文件内容。不传则不更新内容</p>
 * @method string getFileName() 获取<p>目标文件名，非空且与当前文件名不同时执行 rename 动作。长度不超过 SCRIPT_NAME_MAX_LENGTH，禁止以 . 或 .. 开头/结尾，禁止空格、双点、控制字符及 Linux 保留名（参考 docs/linux_filename_rules.md）。与 ExtensionType 一起校验后缀合法性</p>
 * @method void setFileName(string $FileName) 设置<p>目标文件名，非空且与当前文件名不同时执行 rename 动作。长度不超过 SCRIPT_NAME_MAX_LENGTH，禁止以 . 或 .. 开头/结尾，禁止空格、双点、控制字符及 Linux 保留名（参考 docs/linux_filename_rules.md）。与 ExtensionType 一起校验后缀合法性</p>
 * @method string getParentFolderPath() 获取<p>目标父目录路径，非空时执行 move 动作。根目录传 /；与 FileName 可同时出现，语义为「移动+重命名」。与 CreateFile 的 ParentFolderPath 保持一致</p>
 * @method void setParentFolderPath(string $ParentFolderPath) 设置<p>目标父目录路径，非空时执行 move 动作。根目录传 /；与 FileName 可同时出现，语义为「移动+重命名」。与 CreateFile 的 ParentFolderPath 保持一致</p>
 * @method string getTargetFileType() 获取<p>目标父目录的 FileType。取值：FOLDER、GIT_FOLDER。仅当 ParentFolderPath 非空时使用；缺省时按解析出的父目录实际类型处理</p>
 * @method void setTargetFileType(string $TargetFileType) 设置<p>目标父目录的 FileType。取值：FOLDER、GIT_FOLDER。仅当 ParentFolderPath 非空时使用；缺省时按解析出的父目录实际类型处理</p>
 * @method integer getUpdateAction() 获取<p>动作类型（必填，未来版本会强制校验）。取值：1 = UPDATE_CONTENT（仅更新 FileConfig / Storage / Bundle*，禁止传 FileName / ParentFolderPath / TargetFileType）；2 = RENAME（仅重命名，必须传 FileName，禁止传 ParentFolderPath / FileConfig / Storage / Bundle*）；3 = MOVE（仅移动，必须传 ParentFolderPath，禁止传 FileName / FileConfig / Storage / Bundle*）。参数互斥校验失败会返回 ParamIllegal 错误</p>
 * @method void setUpdateAction(integer $UpdateAction) 设置<p>动作类型（必填，未来版本会强制校验）。取值：1 = UPDATE_CONTENT（仅更新 FileConfig / Storage / Bundle*，禁止传 FileName / ParentFolderPath / TargetFileType）；2 = RENAME（仅重命名，必须传 FileName，禁止传 ParentFolderPath / FileConfig / Storage / Bundle*）；3 = MOVE（仅移动，必须传 ParentFolderPath，禁止传 FileName / FileConfig / Storage / Bundle*）。参数互斥校验失败会返回 ParamIllegal 错误</p>
 */
class UpdateFileRequest extends AbstractModel
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
     * @var FileConfig <p>文件运行配置。不传则不更新配置</p>
     */
    public $FileConfig;

    /**
     * @var string <p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
     */
    public $FileType;

    /**
     * @var string <p>绑定的 BundleId。来源：ListBundles 接口返回的 BundleId</p>
     */
    public $BundleId;

    /**
     * @var string <p>绑定的 BundleInfo，JSON 字符串</p>
     */
    public $BundleInfo;

    /**
     * @var FileStorage <p>文件内容。不传则不更新内容</p>
     */
    public $Storage;

    /**
     * @var string <p>目标文件名，非空且与当前文件名不同时执行 rename 动作。长度不超过 SCRIPT_NAME_MAX_LENGTH，禁止以 . 或 .. 开头/结尾，禁止空格、双点、控制字符及 Linux 保留名（参考 docs/linux_filename_rules.md）。与 ExtensionType 一起校验后缀合法性</p>
     */
    public $FileName;

    /**
     * @var string <p>目标父目录路径，非空时执行 move 动作。根目录传 /；与 FileName 可同时出现，语义为「移动+重命名」。与 CreateFile 的 ParentFolderPath 保持一致</p>
     */
    public $ParentFolderPath;

    /**
     * @var string <p>目标父目录的 FileType。取值：FOLDER、GIT_FOLDER。仅当 ParentFolderPath 非空时使用；缺省时按解析出的父目录实际类型处理</p>
     */
    public $TargetFileType;

    /**
     * @var integer <p>动作类型（必填，未来版本会强制校验）。取值：1 = UPDATE_CONTENT（仅更新 FileConfig / Storage / Bundle*，禁止传 FileName / ParentFolderPath / TargetFileType）；2 = RENAME（仅重命名，必须传 FileName，禁止传 ParentFolderPath / FileConfig / Storage / Bundle*）；3 = MOVE（仅移动，必须传 ParentFolderPath，禁止传 FileName / FileConfig / Storage / Bundle*）。参数互斥校验失败会返回 ParamIllegal 错误</p>
     */
    public $UpdateAction;

    /**
     * @param string $WorkspaceId <p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
     * @param string $FileId <p>文件 ID。来源：CreateFile / ListFiles / GetFile 接口返回的 FileId</p>
     * @param FileConfig $FileConfig <p>文件运行配置。不传则不更新配置</p>
     * @param string $FileType <p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
     * @param string $BundleId <p>绑定的 BundleId。来源：ListBundles 接口返回的 BundleId</p>
     * @param string $BundleInfo <p>绑定的 BundleInfo，JSON 字符串</p>
     * @param FileStorage $Storage <p>文件内容。不传则不更新内容</p>
     * @param string $FileName <p>目标文件名，非空且与当前文件名不同时执行 rename 动作。长度不超过 SCRIPT_NAME_MAX_LENGTH，禁止以 . 或 .. 开头/结尾，禁止空格、双点、控制字符及 Linux 保留名（参考 docs/linux_filename_rules.md）。与 ExtensionType 一起校验后缀合法性</p>
     * @param string $ParentFolderPath <p>目标父目录路径，非空时执行 move 动作。根目录传 /；与 FileName 可同时出现，语义为「移动+重命名」。与 CreateFile 的 ParentFolderPath 保持一致</p>
     * @param string $TargetFileType <p>目标父目录的 FileType。取值：FOLDER、GIT_FOLDER。仅当 ParentFolderPath 非空时使用；缺省时按解析出的父目录实际类型处理</p>
     * @param integer $UpdateAction <p>动作类型（必填，未来版本会强制校验）。取值：1 = UPDATE_CONTENT（仅更新 FileConfig / Storage / Bundle*，禁止传 FileName / ParentFolderPath / TargetFileType）；2 = RENAME（仅重命名，必须传 FileName，禁止传 ParentFolderPath / FileConfig / Storage / Bundle*）；3 = MOVE（仅移动，必须传 ParentFolderPath，禁止传 FileName / FileConfig / Storage / Bundle*）。参数互斥校验失败会返回 ParamIllegal 错误</p>
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

        if (array_key_exists("FileConfig",$param) and $param["FileConfig"] !== null) {
            $this->FileConfig = new FileConfig();
            $this->FileConfig->deserialize($param["FileConfig"]);
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new FileStorage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("TargetFileType",$param) and $param["TargetFileType"] !== null) {
            $this->TargetFileType = $param["TargetFileType"];
        }

        if (array_key_exists("UpdateAction",$param) and $param["UpdateAction"] !== null) {
            $this->UpdateAction = $param["UpdateAction"];
        }
    }
}
