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
 * ListResourceFolders请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getParentFolderPath() 获取资源文件夹绝对路径，取值示例
/wedata/test
 * @method void setParentFolderPath(string $ParentFolderPath) 设置资源文件夹绝对路径，取值示例
/wedata/test
 * @method integer getPageNumber() 获取数据页数，大于等于1。默认1
 * @method void setPageNumber(integer $PageNumber) 设置数据页数，大于等于1。默认1
 * @method integer getPageSize() 获取每页显示的数据条数，最小为10条，最大为200 条。默认10
 * @method void setPageSize(integer $PageSize) 设置每页显示的数据条数，最小为10条，最大为200 条。默认10
 */
class ListResourceFoldersRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 资源文件夹绝对路径，取值示例
/wedata/test
     */
    public $ParentFolderPath;

    /**
     * @var integer 数据页数，大于等于1。默认1
     */
    public $PageNumber;

    /**
     * @var integer 每页显示的数据条数，最小为10条，最大为200 条。默认10
     */
    public $PageSize;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ParentFolderPath 资源文件夹绝对路径，取值示例
/wedata/test
     * @param integer $PageNumber 数据页数，大于等于1。默认1
     * @param integer $PageSize 每页显示的数据条数，最小为10条，最大为200 条。默认10
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
