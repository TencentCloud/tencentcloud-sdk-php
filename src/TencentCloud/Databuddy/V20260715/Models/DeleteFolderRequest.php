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
 * DeleteFolder请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间id</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间id</p>
 * @method FolderLocator getFolder() 获取<p>待删除的文件夹</p>
 * @method void setFolder(FolderLocator $Folder) 设置<p>待删除的文件夹</p>
 * @method boolean getForceDelete() 获取<p>软删除还是从回收站硬删除</p><p>枚举值：</p><ul><li>false： 软删除到回收站</li><li>true： 从回收站硬删除</li></ul>
 * @method void setForceDelete(boolean $ForceDelete) 设置<p>软删除还是从回收站硬删除</p><p>枚举值：</p><ul><li>false： 软删除到回收站</li><li>true： 从回收站硬删除</li></ul>
 */
class DeleteFolderRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间id</p>
     */
    public $WorkspaceId;

    /**
     * @var FolderLocator <p>待删除的文件夹</p>
     */
    public $Folder;

    /**
     * @var boolean <p>软删除还是从回收站硬删除</p><p>枚举值：</p><ul><li>false： 软删除到回收站</li><li>true： 从回收站硬删除</li></ul>
     */
    public $ForceDelete;

    /**
     * @param string $WorkspaceId <p>工作空间id</p>
     * @param FolderLocator $Folder <p>待删除的文件夹</p>
     * @param boolean $ForceDelete <p>软删除还是从回收站硬删除</p><p>枚举值：</p><ul><li>false： 软删除到回收站</li><li>true： 从回收站硬删除</li></ul>
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

        if (array_key_exists("ForceDelete",$param) and $param["ForceDelete"] !== null) {
            $this->ForceDelete = $param["ForceDelete"];
        }
    }
}
