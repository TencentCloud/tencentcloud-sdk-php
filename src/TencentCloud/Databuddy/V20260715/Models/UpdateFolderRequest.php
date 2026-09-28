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
 * UpdateFolder请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID</p>
 * @method FolderLocator getFolder() 获取<p>待更新文件夹</p>
 * @method void setFolder(FolderLocator $Folder) 设置<p>待更新文件夹</p>
 * @method string getOperationType() 获取<p>操作类型</p><p>枚举值：</p><ul><li>1： 重命名</li><li>2： 移动</li></ul>
 * @method void setOperationType(string $OperationType) 设置<p>操作类型</p><p>枚举值：</p><ul><li>1： 重命名</li><li>2： 移动</li></ul>
 * @method string getFolderName() 获取<p>重命名后的文件名，OperationType = 1时生效</p>
 * @method void setFolderName(string $FolderName) 设置<p>重命名后的文件名，OperationType = 1时生效</p>
 * @method FolderLocator getTargetParent() 获取<p>移动的目的文件夹，OperationType = 2时生效</p>
 * @method void setTargetParent(FolderLocator $TargetParent) 设置<p>移动的目的文件夹，OperationType = 2时生效</p>
 */
class UpdateFolderRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID</p>
     */
    public $WorkspaceId;

    /**
     * @var FolderLocator <p>待更新文件夹</p>
     */
    public $Folder;

    /**
     * @var string <p>操作类型</p><p>枚举值：</p><ul><li>1： 重命名</li><li>2： 移动</li></ul>
     */
    public $OperationType;

    /**
     * @var string <p>重命名后的文件名，OperationType = 1时生效</p>
     */
    public $FolderName;

    /**
     * @var FolderLocator <p>移动的目的文件夹，OperationType = 2时生效</p>
     */
    public $TargetParent;

    /**
     * @param string $WorkspaceId <p>工作空间ID</p>
     * @param FolderLocator $Folder <p>待更新文件夹</p>
     * @param string $OperationType <p>操作类型</p><p>枚举值：</p><ul><li>1： 重命名</li><li>2： 移动</li></ul>
     * @param string $FolderName <p>重命名后的文件名，OperationType = 1时生效</p>
     * @param FolderLocator $TargetParent <p>移动的目的文件夹，OperationType = 2时生效</p>
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

        if (array_key_exists("Folder",$param) and $param["Folder"] !== null) {
            $this->Folder = new FolderLocator();
            $this->Folder->deserialize($param["Folder"]);
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("TargetParent",$param) and $param["TargetParent"] !== null) {
            $this->TargetParent = new FolderLocator();
            $this->TargetParent->deserialize($param["TargetParent"]);
        }
    }
}
