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
 * ListProjects请求参数结构体
 *
 * @method array getProjectIds() 获取项目id列表
 * @method void setProjectIds(array $ProjectIds) 设置项目id列表
 * @method string getProjectName() 获取项目名或项目唯一标识名，支持模糊搜索
 * @method void setProjectName(string $ProjectName) 设置项目名或项目唯一标识名，支持模糊搜索
 * @method integer getStatus() 获取项目状态，可选值：0（禁用）、1（正常）
 * @method void setStatus(integer $Status) 设置项目状态，可选值：0（禁用）、1（正常）
 * @method string getProjectModel() 获取项目模式，可选值：SIMPLE、STANDARD
 * @method void setProjectModel(string $ProjectModel) 设置项目模式，可选值：SIMPLE、STANDARD
 * @method integer getPageNumber() 获取请求的数据页数，用于翻页
 * @method void setPageNumber(integer $PageNumber) 设置请求的数据页数，用于翻页
 * @method integer getPageSize() 获取每页显示的条数，默认为 10 条
 * @method void setPageSize(integer $PageSize) 设置每页显示的条数，默认为 10 条
 */
class ListProjectsRequest extends AbstractModel
{
    /**
     * @var array 项目id列表
     */
    public $ProjectIds;

    /**
     * @var string 项目名或项目唯一标识名，支持模糊搜索
     */
    public $ProjectName;

    /**
     * @var integer 项目状态，可选值：0（禁用）、1（正常）
     */
    public $Status;

    /**
     * @var string 项目模式，可选值：SIMPLE、STANDARD
     */
    public $ProjectModel;

    /**
     * @var integer 请求的数据页数，用于翻页
     */
    public $PageNumber;

    /**
     * @var integer 每页显示的条数，默认为 10 条
     */
    public $PageSize;

    /**
     * @param array $ProjectIds 项目id列表
     * @param string $ProjectName 项目名或项目唯一标识名，支持模糊搜索
     * @param integer $Status 项目状态，可选值：0（禁用）、1（正常）
     * @param string $ProjectModel 项目模式，可选值：SIMPLE、STANDARD
     * @param integer $PageNumber 请求的数据页数，用于翻页
     * @param integer $PageSize 每页显示的条数，默认为 10 条
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
        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectModel",$param) and $param["ProjectModel"] !== null) {
            $this->ProjectModel = $param["ProjectModel"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
