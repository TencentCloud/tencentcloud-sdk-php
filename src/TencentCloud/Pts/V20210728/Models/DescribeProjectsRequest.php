<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjects请求参数结构体
 *
 * @method integer getOffset() 获取分页offset
 * @method void setOffset(integer $Offset) 设置分页offset
 * @method integer getLimit() 获取每页limit
 * @method void setLimit(integer $Limit) 设置每页limit
 * @method array getProjectIds() 获取项目ID数组
 * @method void setProjectIds(array $ProjectIds) 设置项目ID数组
 * @method string getProjectName() 获取项目名
 * @method void setProjectName(string $ProjectName) 设置项目名
 * @method string getOrderBy() 获取按字段排序
 * @method void setOrderBy(string $OrderBy) 设置按字段排序
 * @method boolean getAscend() 获取升序/降序
 * @method void setAscend(boolean $Ascend) 设置升序/降序
 * @method array getTagFilters() 获取标签数组
 * @method void setTagFilters(array $TagFilters) 设置标签数组
 */
class DescribeProjectsRequest extends AbstractModel
{
    /**
     * @var integer 分页offset
     */
    public $Offset;

    /**
     * @var integer 每页limit
     */
    public $Limit;

    /**
     * @var array 项目ID数组
     */
    public $ProjectIds;

    /**
     * @var string 项目名
     */
    public $ProjectName;

    /**
     * @var string 按字段排序
     */
    public $OrderBy;

    /**
     * @var boolean 升序/降序
     */
    public $Ascend;

    /**
     * @var array 标签数组
     */
    public $TagFilters;

    /**
     * @param integer $Offset 分页offset
     * @param integer $Limit 每页limit
     * @param array $ProjectIds 项目ID数组
     * @param string $ProjectName 项目名
     * @param string $OrderBy 按字段排序
     * @param boolean $Ascend 升序/降序
     * @param array $TagFilters 标签数组
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Ascend",$param) and $param["Ascend"] !== null) {
            $this->Ascend = $param["Ascend"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagSpec();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
