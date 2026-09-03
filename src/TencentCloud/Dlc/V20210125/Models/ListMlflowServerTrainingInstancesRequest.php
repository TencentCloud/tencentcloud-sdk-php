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
 * ListMlflowServerTrainingInstances请求参数结构体
 *
 * @method string getServerId() 获取<p>MlFlowServer的ID</p>
 * @method void setServerId(string $ServerId) 设置<p>MlFlowServer的ID</p>
 * @method array getFilters() 获取<p>分页过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>分页过滤条件</p>
 * @method array getSortFields() 获取<p>分页筛选条件</p>
 * @method void setSortFields(array $SortFields) 设置<p>分页筛选条件</p>
 * @method integer getStartTime() 获取<p>分页开始时间范围</p>
 * @method void setStartTime(integer $StartTime) 设置<p>分页开始时间范围</p>
 * @method integer getEndTime() 获取<p>分页结束时间范围</p>
 * @method void setEndTime(integer $EndTime) 设置<p>分页结束时间范围</p>
 * @method integer getPage() 获取<p>分页当前页号</p>
 * @method void setPage(integer $Page) 设置<p>分页当前页号</p>
 * @method integer getPageSize() 获取<p>分页每页大小</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页每页大小</p>
 */
class ListMlflowServerTrainingInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>MlFlowServer的ID</p>
     */
    public $ServerId;

    /**
     * @var array <p>分页过滤条件</p>
     */
    public $Filters;

    /**
     * @var array <p>分页筛选条件</p>
     */
    public $SortFields;

    /**
     * @var integer <p>分页开始时间范围</p>
     */
    public $StartTime;

    /**
     * @var integer <p>分页结束时间范围</p>
     */
    public $EndTime;

    /**
     * @var integer <p>分页当前页号</p>
     */
    public $Page;

    /**
     * @var integer <p>分页每页大小</p>
     */
    public $PageSize;

    /**
     * @param string $ServerId <p>MlFlowServer的ID</p>
     * @param array $Filters <p>分页过滤条件</p>
     * @param array $SortFields <p>分页筛选条件</p>
     * @param integer $StartTime <p>分页开始时间范围</p>
     * @param integer $EndTime <p>分页结束时间范围</p>
     * @param integer $Page <p>分页当前页号</p>
     * @param integer $PageSize <p>分页每页大小</p>
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
        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
