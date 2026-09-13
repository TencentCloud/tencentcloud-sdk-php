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
 * 文件详情
 *
 * @method string getAppId() 获取<p>主账号 AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置<p>主账号 AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceId() 获取<p>工作空间 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileId() 获取<p>文件 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileId(string $FileId) 设置<p>文件 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取<p>文件名，含后缀</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置<p>文件名，含后缀</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileType() 获取<p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileType(string $FileType) 设置<p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取<p>文件在工作空间中的完整路径，以 / 开头，如 /etl/daily/demo.ipynb</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置<p>文件在工作空间中的完整路径，以 / 开头，如 /etl/daily/demo.ipynb</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileConfig getFileConfig() 获取<p>文件运行配置</p>
 * @method void setFileConfig(FileConfig $FileConfig) 设置<p>文件运行配置</p>
 * @method string getBundleId() 获取<p>绑定的 BundleId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置<p>绑定的 BundleId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleInfo() 获取<p>绑定的 BundleInfo，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleInfo(string $BundleInfo) 设置<p>绑定的 BundleInfo，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>文件状态。active=正常，deleted=已删除</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>文件状态。active=正常，deleted=已删除</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUserName() 获取<p>文件负责人用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserName(string $OwnerUserName) 设置<p>文件负责人用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取<p>创建人子账号 Uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置<p>创建人子账号 Uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserUin() 获取<p>最近更新人子账号 Uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserUin(string $UpdateUserUin) 设置<p>最近更新人子账号 Uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间，毫秒级时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，毫秒级时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>最近更新时间，毫秒级时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最近更新时间，毫秒级时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileStorage getStorage() 获取<p>文件存储信息。仅当请求 IncludeContent=true 时返回内容</p>
 * @method void setStorage(FileStorage $Storage) 设置<p>文件存储信息。仅当请求 IncludeContent=true 时返回内容</p>
 * @method string getPermissions() 获取<p>当前调用方对该文件的权限点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermissions(string $Permissions) 设置<p>当前调用方对该文件的权限点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getReleaseStatus() 获取<p>是否已发布</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseStatus(boolean $ReleaseStatus) 设置<p>是否已发布</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceMode() 获取<p>资源模式。1=分布式，2=单节点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceMode(integer $ResourceMode) 设置<p>资源模式。1=分布式，2=单节点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AsyncOperation getAsyncOperation() 获取ZIP 异步创建时透传 Workspace 作业信息；普通同步创建或其他复用该返回结构的接口不设置该字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsyncOperation(AsyncOperation $AsyncOperation) 设置ZIP 异步创建时透传 Workspace 作业信息；普通同步创建或其他复用该返回结构的接口不设置该字段
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileInfo extends AbstractModel
{
    /**
     * @var string <p>主账号 AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>工作空间 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceId;

    /**
     * @var string <p>文件 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileId;

    /**
     * @var string <p>文件名，含后缀</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string <p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileType;

    /**
     * @var string <p>文件在工作空间中的完整路径，以 / 开头，如 /etl/daily/demo.ipynb</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var FileConfig <p>文件运行配置</p>
     */
    public $FileConfig;

    /**
     * @var string <p>绑定的 BundleId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string <p>绑定的 BundleInfo，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleInfo;

    /**
     * @var string <p>文件状态。active=正常，deleted=已删除</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>文件负责人用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserName;

    /**
     * @var string <p>创建人子账号 Uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var string <p>最近更新人子账号 Uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserUin;

    /**
     * @var string <p>创建时间，毫秒级时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>最近更新时间，毫秒级时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var FileStorage <p>文件存储信息。仅当请求 IncludeContent=true 时返回内容</p>
     */
    public $Storage;

    /**
     * @var string <p>当前调用方对该文件的权限点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Permissions;

    /**
     * @var boolean <p>是否已发布</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseStatus;

    /**
     * @var integer <p>资源模式。1=分布式，2=单节点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceMode;

    /**
     * @var AsyncOperation ZIP 异步创建时透传 Workspace 作业信息；普通同步创建或其他复用该返回结构的接口不设置该字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsyncOperation;

    /**
     * @param string $AppId <p>主账号 AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceId <p>工作空间 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileId <p>文件 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName <p>文件名，含后缀</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileType <p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path <p>文件在工作空间中的完整路径，以 / 开头，如 /etl/daily/demo.ipynb</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileConfig $FileConfig <p>文件运行配置</p>
     * @param string $BundleId <p>绑定的 BundleId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleInfo <p>绑定的 BundleInfo，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>文件状态。active=正常，deleted=已删除</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUserName <p>文件负责人用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin <p>创建人子账号 Uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserUin <p>最近更新人子账号 Uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间，毫秒级时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>最近更新时间，毫秒级时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileStorage $Storage <p>文件存储信息。仅当请求 IncludeContent=true 时返回内容</p>
     * @param string $Permissions <p>当前调用方对该文件的权限点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ReleaseStatus <p>是否已发布</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceMode <p>资源模式。1=分布式，2=单节点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AsyncOperation $AsyncOperation ZIP 异步创建时透传 Workspace 作业信息；普通同步创建或其他复用该返回结构的接口不设置该字段
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("FileConfig",$param) and $param["FileConfig"] !== null) {
            $this->FileConfig = new FileConfig();
            $this->FileConfig->deserialize($param["FileConfig"]);
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUserName",$param) and $param["OwnerUserName"] !== null) {
            $this->OwnerUserName = $param["OwnerUserName"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new FileStorage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }

        if (array_key_exists("ResourceMode",$param) and $param["ResourceMode"] !== null) {
            $this->ResourceMode = $param["ResourceMode"];
        }

        if (array_key_exists("AsyncOperation",$param) and $param["AsyncOperation"] !== null) {
            $this->AsyncOperation = new AsyncOperation();
            $this->AsyncOperation->deserialize($param["AsyncOperation"]);
        }
    }
}
