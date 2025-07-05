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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskRunHistory请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method InstanceSearchCondition getSearchCondition() 获取检索条件
 * @method void setSearchCondition(InstanceSearchCondition $SearchCondition) 设置检索条件
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method integer getPageNumber() 获取分页页码
 * @method void setPageNumber(integer $PageNumber) 设置分页页码
 */
class DescribeTaskRunHistoryRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var InstanceSearchCondition 检索条件
     */
    public $SearchCondition;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var integer 分页页码
     */
    public $PageNumber;

    /**
     * @param string $ProjectId 项目id
     * @param InstanceSearchCondition $SearchCondition 检索条件
     * @param integer $PageSize 分页大小
     * @param integer $PageNumber 分页页码
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

        if (array_key_exists("SearchCondition",$param) and $param["SearchCondition"] !== null) {
            $this->SearchCondition = new InstanceSearchCondition();
            $this->SearchCondition->deserialize($param["SearchCondition"]);
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
