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
 * ModifyFolder请求参数结构体
 *
 * @method string getSourceFolderId() 获取文件夹ID（必填）
 * @method void setSourceFolderId(string $SourceFolderId) 设置文件夹ID（必填）
 * @method string getTargetFolderId() 获取如需拖拽文件夹，需传入目标文件夹ID
 * @method void setTargetFolderId(string $TargetFolderId) 设置如需拖拽文件夹，需传入目标文件夹ID
 * @method string getFolderName() 获取如需修改文件夹名，需传入FolderName字段
 * @method void setFolderName(string $FolderName) 设置如需修改文件夹名，需传入FolderName字段
 * @method integer getFolderType() 获取文件夹类型，0是任务文件夹，1是依赖文件夹
 * @method void setFolderType(integer $FolderType) 设置文件夹类型，0是任务文件夹，1是依赖文件夹
 * @method array getSourceJobIds() 获取批量移动的作业serial id 列表
 * @method void setSourceJobIds(array $SourceJobIds) 设置批量移动的作业serial id 列表
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 */
class ModifyFolderRequest extends AbstractModel
{
    /**
     * @var string 文件夹ID（必填）
     */
    public $SourceFolderId;

    /**
     * @var string 如需拖拽文件夹，需传入目标文件夹ID
     */
    public $TargetFolderId;

    /**
     * @var string 如需修改文件夹名，需传入FolderName字段
     */
    public $FolderName;

    /**
     * @var integer 文件夹类型，0是任务文件夹，1是依赖文件夹
     */
    public $FolderType;

    /**
     * @var array 批量移动的作业serial id 列表
     */
    public $SourceJobIds;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @param string $SourceFolderId 文件夹ID（必填）
     * @param string $TargetFolderId 如需拖拽文件夹，需传入目标文件夹ID
     * @param string $FolderName 如需修改文件夹名，需传入FolderName字段
     * @param integer $FolderType 文件夹类型，0是任务文件夹，1是依赖文件夹
     * @param array $SourceJobIds 批量移动的作业serial id 列表
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
        if (array_key_exists("SourceFolderId",$param) and $param["SourceFolderId"] !== null) {
            $this->SourceFolderId = $param["SourceFolderId"];
        }

        if (array_key_exists("TargetFolderId",$param) and $param["TargetFolderId"] !== null) {
            $this->TargetFolderId = $param["TargetFolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("FolderType",$param) and $param["FolderType"] !== null) {
            $this->FolderType = $param["FolderType"];
        }

        if (array_key_exists("SourceJobIds",$param) and $param["SourceJobIds"] !== null) {
            $this->SourceJobIds = $param["SourceJobIds"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
