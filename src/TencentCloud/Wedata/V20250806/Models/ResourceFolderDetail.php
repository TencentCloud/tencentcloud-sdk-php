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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源文件夹详情
 *
 * @method string getFolderId() 获取资源文件夹ID
 * @method void setFolderId(string $FolderId) 设置资源文件夹ID
 * @method string getCreateUserUin() 获取创建人ID
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人ID
 * @method string getCreateUserName() 获取创建人名称
 * @method void setCreateUserName(string $CreateUserName) 设置创建人名称
 * @method string getFolderPath() 获取文件夹路径
 * @method void setFolderPath(string $FolderPath) 设置文件夹路径
 * @method string getFolderName() 获取文件夹名称
 * @method void setFolderName(string $FolderName) 设置文件夹名称
 * @method string getParentFolderPath() 获取父文件夹绝对路径,不包含文件名夹名
 * @method void setParentFolderPath(string $ParentFolderPath) 设置父文件夹绝对路径,不包含文件名夹名
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 */
class ResourceFolderDetail extends AbstractModel
{
    /**
     * @var string 资源文件夹ID
     */
    public $FolderId;

    /**
     * @var string 创建人ID
     */
    public $CreateUserUin;

    /**
     * @var string 创建人名称
     */
    public $CreateUserName;

    /**
     * @var string 文件夹路径
     */
    public $FolderPath;

    /**
     * @var string 文件夹名称
     */
    public $FolderName;

    /**
     * @var string 父文件夹绝对路径,不包含文件名夹名
     */
    public $ParentFolderPath;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @param string $FolderId 资源文件夹ID
     * @param string $CreateUserUin 创建人ID
     * @param string $CreateUserName 创建人名称
     * @param string $FolderPath 文件夹路径
     * @param string $FolderName 文件夹名称
     * @param string $ParentFolderPath 父文件夹绝对路径,不包含文件名夹名
     * @param string $ProjectId 项目id
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

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("CreateUserName",$param) and $param["CreateUserName"] !== null) {
            $this->CreateUserName = $param["CreateUserName"];
        }

        if (array_key_exists("FolderPath",$param) and $param["FolderPath"] !== null) {
            $this->FolderPath = $param["FolderPath"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
