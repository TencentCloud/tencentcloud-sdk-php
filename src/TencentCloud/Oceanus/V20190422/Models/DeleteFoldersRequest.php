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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteFolders请求参数结构体
 *
 * @method array getFolderIds() 获取需删除的文件夹唯一ID
 * @method void setFolderIds(array $FolderIds) 设置需删除的文件夹唯一ID
 * @method integer getFolderType() 获取文件夹类型，0是任务文件夹，1是依赖文件夹
 * @method void setFolderType(integer $FolderType) 设置文件夹类型，0是任务文件夹，1是依赖文件夹
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 */
class DeleteFoldersRequest extends AbstractModel
{
    /**
     * @var array 需删除的文件夹唯一ID
     */
    public $FolderIds;

    /**
     * @var integer 文件夹类型，0是任务文件夹，1是依赖文件夹
     */
    public $FolderType;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @param array $FolderIds 需删除的文件夹唯一ID
     * @param integer $FolderType 文件夹类型，0是任务文件夹，1是依赖文件夹
     * @param string $WorkSpaceId 工作空间 SerialId
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
        if (array_key_exists("FolderIds",$param) and $param["FolderIds"] !== null) {
            $this->FolderIds = $param["FolderIds"];
        }

        if (array_key_exists("FolderType",$param) and $param["FolderType"] !== null) {
            $this->FolderType = $param["FolderType"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
