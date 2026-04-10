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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplications请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method integer getLimit() 获取<p>翻页入参</p>
 * @method void setLimit(integer $Limit) 设置<p>翻页入参</p>
 * @method integer getOffset() 获取<p>翻页入参</p>
 * @method void setOffset(integer $Offset) 设置<p>翻页入参</p>
 * @method array getFilters() 获取<p>过滤器，支持过滤字段：</p><ul><li>Name：应用名称</li><li>ApplicationId：应用ID</li><li>HasRun</li><li>CreatorId：创建人ID</li><li>Type：应用类型</li></ul>
 * @method void setFilters(array $Filters) 设置<p>过滤器，支持过滤字段：</p><ul><li>Name：应用名称</li><li>ApplicationId：应用ID</li><li>HasRun</li><li>CreatorId：创建人ID</li><li>Type：应用类型</li></ul>
 * @method string getOrderBy() 获取<p>排序</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序</p>
 */
class DescribeApplicationsRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>翻页入参</p>
     */
    public $Limit;

    /**
     * @var integer <p>翻页入参</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤器，支持过滤字段：</p><ul><li>Name：应用名称</li><li>ApplicationId：应用ID</li><li>HasRun</li><li>CreatorId：创建人ID</li><li>Type：应用类型</li></ul>
     */
    public $Filters;

    /**
     * @var string <p>排序</p>
     */
    public $OrderBy;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param integer $Limit <p>翻页入参</p>
     * @param integer $Offset <p>翻页入参</p>
     * @param array $Filters <p>过滤器，支持过滤字段：</p><ul><li>Name：应用名称</li><li>ApplicationId：应用ID</li><li>HasRun</li><li>CreatorId：创建人ID</li><li>Type：应用类型</li></ul>
     * @param string $OrderBy <p>排序</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
