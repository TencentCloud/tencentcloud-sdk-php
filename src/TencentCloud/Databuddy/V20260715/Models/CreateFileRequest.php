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
 * CreateFile请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
 * @method string getFileName() 获取<p>文件名，含后缀，最长 255 字节。不能以 . 或 .. 开头/结尾，不能含空格与控制字符</p>
 * @method void setFileName(string $FileName) 设置<p>文件名，含后缀，最长 255 字节。不能以 . 或 .. 开头/结尾，不能含空格与控制字符</p>
 * @method string getParentFolderPath() 获取<p>父文件夹路径，以 / 开头、末尾不带 /，根目录传 /。来源：ListFiles 接口返回的 Path</p>
 * @method void setParentFolderPath(string $ParentFolderPath) 设置<p>父文件夹路径，以 / 开头、末尾不带 /，根目录传 /。来源：ListFiles 接口返回的 Path</p>
 * @method string getFileType() 获取<p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
 * @method void setFileType(string $FileType) 设置<p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
 * @method FileConfig getFileConfig() 获取<p>文件运行配置</p>
 * @method void setFileConfig(FileConfig $FileConfig) 设置<p>文件运行配置</p>
 * @method string getBundleId() 获取<p>绑定的 BundleId。来源：ListBundles 接口返回的 BundleId</p>
 * @method void setBundleId(string $BundleId) 设置<p>绑定的 BundleId。来源：ListBundles 接口返回的 BundleId</p>
 * @method string getBundleInfo() 获取<p>绑定的 BundleInfo，JSON 字符串</p>
 * @method void setBundleInfo(string $BundleInfo) 设置<p>绑定的 BundleInfo，JSON 字符串</p>
 * @method FileStorage getStorage() 获取<p>文件初始内容。不传则按FileType 生成默认内容</p>
 * @method void setStorage(FileStorage $Storage) 设置<p>文件初始内容。不传则按FileType 生成默认内容</p>
 * @method boolean getExtractArchive() 获取是否将 Storage 中的 ZIP 文件异步解压创建，默认 false。true 时异步作业由 Workspace 负责全生命周期，响应仅通过 AsyncOperation 返回作业信息（FileId 为空）；作业进度查询由基础平台 WS 接口实现，不在本协议中定义。
 * @method void setExtractArchive(boolean $ExtractArchive) 设置是否将 Storage 中的 ZIP 文件异步解压创建，默认 false。true 时异步作业由 Workspace 负责全生命周期，响应仅通过 AsyncOperation 返回作业信息（FileId 为空）；作业进度查询由基础平台 WS 接口实现，不在本协议中定义。
 */
class CreateFileRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>文件名，含后缀，最长 255 字节。不能以 . 或 .. 开头/结尾，不能含空格与控制字符</p>
     */
    public $FileName;

    /**
     * @var string <p>父文件夹路径，以 / 开头、末尾不带 /，根目录传 /。来源：ListFiles 接口返回的 Path</p>
     */
    public $ParentFolderPath;

    /**
     * @var string <p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
     */
    public $FileType;

    /**
     * @var FileConfig <p>文件运行配置</p>
     */
    public $FileConfig;

    /**
     * @var string <p>绑定的 BundleId。来源：ListBundles 接口返回的 BundleId</p>
     */
    public $BundleId;

    /**
     * @var string <p>绑定的 BundleInfo，JSON 字符串</p>
     */
    public $BundleInfo;

    /**
     * @var FileStorage <p>文件初始内容。不传则按FileType 生成默认内容</p>
     */
    public $Storage;

    /**
     * @var boolean 是否将 Storage 中的 ZIP 文件异步解压创建，默认 false。true 时异步作业由 Workspace 负责全生命周期，响应仅通过 AsyncOperation 返回作业信息（FileId 为空）；作业进度查询由基础平台 WS 接口实现，不在本协议中定义。
     */
    public $ExtractArchive;

    /**
     * @param string $WorkspaceId <p>工作空间 ID。来源：ListWorkspaces 接口返回的 WorkspaceId</p>
     * @param string $FileName <p>文件名，含后缀，最长 255 字节。不能以 . 或 .. 开头/结尾，不能含空格与控制字符</p>
     * @param string $ParentFolderPath <p>父文件夹路径，以 / 开头、末尾不带 /，根目录传 /。来源：ListFiles 接口返回的 Path</p>
     * @param string $FileType <p>文件类型。取值：FILE（普通文件/脚本）、NOTEBOOK_FILE（Notebook）、SQL_FILE（SQL文件）。对应 common/domain/entity.proto EntityType</p>
     * @param FileConfig $FileConfig <p>文件运行配置</p>
     * @param string $BundleId <p>绑定的 BundleId。来源：ListBundles 接口返回的 BundleId</p>
     * @param string $BundleInfo <p>绑定的 BundleInfo，JSON 字符串</p>
     * @param FileStorage $Storage <p>文件初始内容。不传则按FileType 生成默认内容</p>
     * @param boolean $ExtractArchive 是否将 Storage 中的 ZIP 文件异步解压创建，默认 false。true 时异步作业由 Workspace 负责全生命周期，响应仅通过 AsyncOperation 返回作业信息（FileId 为空）；作业进度查询由基础平台 WS 接口实现，不在本协议中定义。
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
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

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new FileStorage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("ExtractArchive",$param) and $param["ExtractArchive"] !== null) {
            $this->ExtractArchive = $param["ExtractArchive"];
        }
    }
}
