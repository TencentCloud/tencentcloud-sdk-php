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
 * ListResourceGroups请求参数结构体
 *
 * @method string getType() 获取执行资源组类型

- Schedule --- 调度资源组
- Integration --- 集成资源组
- DataService -- 数据服务资源组
 * @method void setType(string $Type) 设置执行资源组类型

- Schedule --- 调度资源组
- Integration --- 集成资源组
- DataService -- 数据服务资源组
 * @method string getId() 获取资源组id
 * @method void setId(string $Id) 设置资源组id
 * @method string getName() 获取搜索的执行资源组名称
 * @method void setName(string $Name) 设置搜索的执行资源组名称
 * @method array getProjectIds() 获取项目空间id查询列表
 * @method void setProjectIds(array $ProjectIds) 设置项目空间id查询列表
 * @method integer getPageNumber() 获取页数
 * @method void setPageNumber(integer $PageNumber) 设置页数
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 */
class ListResourceGroupsRequest extends AbstractModel
{
    /**
     * @var string 执行资源组类型

- Schedule --- 调度资源组
- Integration --- 集成资源组
- DataService -- 数据服务资源组
     */
    public $Type;

    /**
     * @var string 资源组id
     */
    public $Id;

    /**
     * @var string 搜索的执行资源组名称
     */
    public $Name;

    /**
     * @var array 项目空间id查询列表
     */
    public $ProjectIds;

    /**
     * @var integer 页数
     */
    public $PageNumber;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @param string $Type 执行资源组类型

- Schedule --- 调度资源组
- Integration --- 集成资源组
- DataService -- 数据服务资源组
     * @param string $Id 资源组id
     * @param string $Name 搜索的执行资源组名称
     * @param array $ProjectIds 项目空间id查询列表
     * @param integer $PageNumber 页数
     * @param integer $PageSize 页大小
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
