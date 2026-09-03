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
 * ListServiceApiKeys请求参数结构体
 *
 * @method string getServiceId() 获取<p>推理服务ID</p>
 * @method void setServiceId(string $ServiceId) 设置<p>推理服务ID</p>
 * @method integer getStartTime() 获取<p>创建时间起始过滤-毫秒时间戳</p>
 * @method void setStartTime(integer $StartTime) 设置<p>创建时间起始过滤-毫秒时间戳</p>
 * @method integer getEndTime() 获取<p>创建时间截止过滤-毫秒时间戳</p>
 * @method void setEndTime(integer $EndTime) 设置<p>创建时间截止过滤-毫秒时间戳</p>
 * @method array getFilters() 获取<p>额外过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>额外过滤条件</p>
 * @method array getSortFields() 获取<p>排序字段列表</p>
 * @method void setSortFields(array $SortFields) 设置<p>排序字段列表</p>
 * @method integer getPage() 获取<p>页码（默认1）</p>
 * @method void setPage(integer $Page) 设置<p>页码（默认1）</p>
 * @method integer getPageSize() 获取<p>每页数量（默认200）</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量（默认200）</p>
 */
class ListServiceApiKeysRequest extends AbstractModel
{
    /**
     * @var string <p>推理服务ID</p>
     */
    public $ServiceId;

    /**
     * @var integer <p>创建时间起始过滤-毫秒时间戳</p>
     */
    public $StartTime;

    /**
     * @var integer <p>创建时间截止过滤-毫秒时间戳</p>
     */
    public $EndTime;

    /**
     * @var array <p>额外过滤条件</p>
     */
    public $Filters;

    /**
     * @var array <p>排序字段列表</p>
     */
    public $SortFields;

    /**
     * @var integer <p>页码（默认1）</p>
     */
    public $Page;

    /**
     * @var integer <p>每页数量（默认200）</p>
     */
    public $PageSize;

    /**
     * @param string $ServiceId <p>推理服务ID</p>
     * @param integer $StartTime <p>创建时间起始过滤-毫秒时间戳</p>
     * @param integer $EndTime <p>创建时间截止过滤-毫秒时间戳</p>
     * @param array $Filters <p>额外过滤条件</p>
     * @param array $SortFields <p>排序字段列表</p>
     * @param integer $Page <p>页码（默认1）</p>
     * @param integer $PageSize <p>每页数量（默认200）</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortFields",$param) and $param["SortFields"] !== null) {
            $this->SortFields = [];
            foreach ($param["SortFields"] as $key => $value){
                $obj = new SortField();
                $obj->deserialize($value);
                array_push($this->SortFields, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
