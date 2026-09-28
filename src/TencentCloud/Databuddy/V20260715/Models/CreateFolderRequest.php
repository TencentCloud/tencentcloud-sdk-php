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
 * CreateFolder请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间名称</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间名称</p>
 * @method string getFolderName() 获取<p>文件夹名称</p>
 * @method void setFolderName(string $FolderName) 设置<p>文件夹名称</p>
 * @method string getFolderType() 获取<p>文件夹类型</p><p>枚举值：</p><ul><li>FOLDER： 文件夹</li><li>GIT_FOLDER： git文件夹</li></ul>
 * @method void setFolderType(string $FolderType) 设置<p>文件夹类型</p><p>枚举值：</p><ul><li>FOLDER： 文件夹</li><li>GIT_FOLDER： git文件夹</li></ul>
 * @method FolderLocator getParentFolder() 获取<p>父节点</p>
 * @method void setParentFolder(FolderLocator $ParentFolder) 设置<p>父节点</p>
 * @method GitRepoConfig getGitConfig() 获取<p>git配置，FolderType=GIT_FOLDER 时必填</p>
 * @method void setGitConfig(GitRepoConfig $GitConfig) 设置<p>git配置，FolderType=GIT_FOLDER 时必填</p>
 */
class CreateFolderRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间名称</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>文件夹名称</p>
     */
    public $FolderName;

    /**
     * @var string <p>文件夹类型</p><p>枚举值：</p><ul><li>FOLDER： 文件夹</li><li>GIT_FOLDER： git文件夹</li></ul>
     */
    public $FolderType;

    /**
     * @var FolderLocator <p>父节点</p>
     */
    public $ParentFolder;

    /**
     * @var GitRepoConfig <p>git配置，FolderType=GIT_FOLDER 时必填</p>
     */
    public $GitConfig;

    /**
     * @param string $WorkspaceId <p>工作空间名称</p>
     * @param string $FolderName <p>文件夹名称</p>
     * @param string $FolderType <p>文件夹类型</p><p>枚举值：</p><ul><li>FOLDER： 文件夹</li><li>GIT_FOLDER： git文件夹</li></ul>
     * @param FolderLocator $ParentFolder <p>父节点</p>
     * @param GitRepoConfig $GitConfig <p>git配置，FolderType=GIT_FOLDER 时必填</p>
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

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("FolderType",$param) and $param["FolderType"] !== null) {
            $this->FolderType = $param["FolderType"];
        }

        if (array_key_exists("ParentFolder",$param) and $param["ParentFolder"] !== null) {
            $this->ParentFolder = new FolderLocator();
            $this->ParentFolder->deserialize($param["ParentFolder"]);
        }

        if (array_key_exists("GitConfig",$param) and $param["GitConfig"] !== null) {
            $this->GitConfig = new GitRepoConfig();
            $this->GitConfig->deserialize($param["GitConfig"]);
        }
    }
}
