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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRayClusterEvent请求参数结构体
 *
 * @method string getId() 获取<p>Ray集群ID</p>
 * @method void setId(string $Id) 设置<p>Ray集群ID</p>
 * @method integer getPage() 获取<p>当前页码（从1开始）</p>
 * @method void setPage(integer $Page) 设置<p>当前页码（从1开始）</p>
 * @method integer getPageSize() 获取<p>每页数量</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量</p>
 * @method integer getStartTime() 获取<p>开始时间（毫秒时间戳）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间（毫秒时间戳）</p>
 * @method integer getEndTime() 获取<p>结束时间（毫秒时间戳）</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间（毫秒时间戳）</p>
 * @method array getSortFields() 获取<p>排序字段列表</p>
 * @method void setSortFields(array $SortFields) 设置<p>排序字段列表</p>
 * @method string getContext() 获取<p>翻页上下文，首次查询不传，后续翻页传入上一次返回的 Context 值</p>
 * @method void setContext(string $Context) 设置<p>翻页上下文，首次查询不传，后续翻页传入上一次返回的 Context 值</p>
 */
class GetRayClusterEventRequest extends AbstractModel
{
    /**
     * @var string <p>Ray集群ID</p>
     */
    public $Id;

    /**
     * @var integer <p>当前页码（从1开始）</p>
     */
    public $Page;

    /**
     * @var integer <p>每页数量</p>
     */
    public $PageSize;

    /**
     * @var integer <p>开始时间（毫秒时间戳）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间（毫秒时间戳）</p>
     */
    public $EndTime;

    /**
     * @var array <p>排序字段列表</p>
     */
    public $SortFields;

    /**
     * @var string <p>翻页上下文，首次查询不传，后续翻页传入上一次返回的 Context 值</p>
     */
    public $Context;

    /**
     * @param string $Id <p>Ray集群ID</p>
     * @param integer $Page <p>当前页码（从1开始）</p>
     * @param integer $PageSize <p>每页数量</p>
     * @param integer $StartTime <p>开始时间（毫秒时间戳）</p>
     * @param integer $EndTime <p>结束时间（毫秒时间戳）</p>
     * @param array $SortFields <p>排序字段列表</p>
     * @param string $Context <p>翻页上下文，首次查询不传，后续翻页传入上一次返回的 Context 值</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SortFields",$param) and $param["SortFields"] !== null) {
            $this->SortFields = [];
            foreach ($param["SortFields"] as $key => $value){
                $obj = new SortField();
                $obj->deserialize($value);
                array_push($this->SortFields, $obj);
            }
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}
