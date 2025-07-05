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
 * DescribeFolder请求参数结构体
 *
 * @method string getFolderId() 获取folder id
 * @method void setFolderId(string $FolderId) 设置folder id
 * @method string getWorkSpaceId() 获取workspace id
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置workspace id
 * @method integer getFolderType() 获取1:资源文件夹
其他:作业文件夹
 * @method void setFolderType(integer $FolderType) 设置1:资源文件夹
其他:作业文件夹
 */
class DescribeFolderRequest extends AbstractModel
{
    /**
     * @var string folder id
     */
    public $FolderId;

    /**
     * @var string workspace id
     */
    public $WorkSpaceId;

    /**
     * @var integer 1:资源文件夹
其他:作业文件夹
     */
    public $FolderType;

    /**
     * @param string $FolderId folder id
     * @param string $WorkSpaceId workspace id
     * @param integer $FolderType 1:资源文件夹
其他:作业文件夹
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
        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("FolderType",$param) and $param["FolderType"] !== null) {
            $this->FolderType = $param["FolderType"];
        }
    }
}
