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
 * CreateSQLFolder请求参数结构体
 *
 * @method string getFolderName() 获取文件夹名称
 * @method void setFolderName(string $FolderName) 设置文件夹名称
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getParentFolderPath() 获取父文件夹path，/aaa/bbb/ccc，路径头需带斜杠，查询根目录传/
 * @method void setParentFolderPath(string $ParentFolderPath) 设置父文件夹path，/aaa/bbb/ccc，路径头需带斜杠，查询根目录传/
 * @method string getAccessScope() 获取权限范围：SHARED, PRIVATE
 * @method void setAccessScope(string $AccessScope) 设置权限范围：SHARED, PRIVATE
 */
class CreateSQLFolderRequest extends AbstractModel
{
    /**
     * @var string 文件夹名称
     */
    public $FolderName;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 父文件夹path，/aaa/bbb/ccc，路径头需带斜杠，查询根目录传/
     */
    public $ParentFolderPath;

    /**
     * @var string 权限范围：SHARED, PRIVATE
     */
    public $AccessScope;

    /**
     * @param string $FolderName 文件夹名称
     * @param string $ProjectId 项目id
     * @param string $ParentFolderPath 父文件夹path，/aaa/bbb/ccc，路径头需带斜杠，查询根目录传/
     * @param string $AccessScope 权限范围：SHARED, PRIVATE
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
        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }
    }
}
