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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAigcTaskList请求参数结构体
 *
 * @method integer getPageNum() 获取<p>开始查询页</p>
 * @method void setPageNum(integer $PageNum) 设置<p>开始查询页</p>
 * @method integer getPageSize() 获取<p>当前页要获取多少数据</p>
 * @method void setPageSize(integer $PageSize) 设置<p>当前页要获取多少数据</p>
 * @method QueryTaskFilter getQueryTaskFilter() 获取<p>查询过滤条件</p>
 * @method void setQueryTaskFilter(QueryTaskFilter $QueryTaskFilter) 设置<p>查询过滤条件</p>
 */
class DescribeAigcTaskListRequest extends AbstractModel
{
    /**
     * @var integer <p>开始查询页</p>
     */
    public $PageNum;

    /**
     * @var integer <p>当前页要获取多少数据</p>
     */
    public $PageSize;

    /**
     * @var QueryTaskFilter <p>查询过滤条件</p>
     */
    public $QueryTaskFilter;

    /**
     * @param integer $PageNum <p>开始查询页</p>
     * @param integer $PageSize <p>当前页要获取多少数据</p>
     * @param QueryTaskFilter $QueryTaskFilter <p>查询过滤条件</p>
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("QueryTaskFilter",$param) and $param["QueryTaskFilter"] !== null) {
            $this->QueryTaskFilter = new QueryTaskFilter();
            $this->QueryTaskFilter->deserialize($param["QueryTaskFilter"]);
        }
    }
}
