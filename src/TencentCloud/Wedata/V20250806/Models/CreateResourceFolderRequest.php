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
 * CreateResourceFolder请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getParentFolderPath() 获取父文件夹绝对路径, 取值示例 /wedata/test, 根目录,请使用/即可
 * @method void setParentFolderPath(string $ParentFolderPath) 设置父文件夹绝对路径, 取值示例 /wedata/test, 根目录,请使用/即可
 * @method string getFolderName() 获取文件夹名称
 * @method void setFolderName(string $FolderName) 设置文件夹名称
 */
class CreateResourceFolderRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 父文件夹绝对路径, 取值示例 /wedata/test, 根目录,请使用/即可
     */
    public $ParentFolderPath;

    /**
     * @var string 文件夹名称
     */
    public $FolderName;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ParentFolderPath 父文件夹绝对路径, 取值示例 /wedata/test, 根目录,请使用/即可
     * @param string $FolderName 文件夹名称
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }
    }
}
