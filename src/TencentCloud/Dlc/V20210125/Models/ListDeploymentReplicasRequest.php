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
 * ListDeploymentReplicas请求参数结构体
 *
 * @method string getDeploymentId() 获取<p>DeploymentId</p>
 * @method void setDeploymentId(string $DeploymentId) 设置<p>DeploymentId</p>
 * @method integer getPage() 获取<p>页码（从1开始）</p>
 * @method void setPage(integer $Page) 设置<p>页码（从1开始）</p>
 * @method integer getPageSize() 获取<p>每页数量（最大 200）</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量（最大 200）</p>
 * @method integer getStartTime() 获取<p>起始时间</p><p>单位： ms</p>
 * @method void setStartTime(integer $StartTime) 设置<p>起始时间</p><p>单位： ms</p>
 * @method integer getEndTime() 获取<p>结束时间</p><p>单位： ms</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p><p>单位： ms</p>
 * @method array getFilters() 获取<p>过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件</p>
 * @method array getSortFields() 获取<p>排序字段</p>
 * @method void setSortFields(array $SortFields) 设置<p>排序字段</p>
 */
class ListDeploymentReplicasRequest extends AbstractModel
{
    /**
     * @var string <p>DeploymentId</p>
     */
    public $DeploymentId;

    /**
     * @var integer <p>页码（从1开始）</p>
     */
    public $Page;

    /**
     * @var integer <p>每页数量（最大 200）</p>
     */
    public $PageSize;

    /**
     * @var integer <p>起始时间</p><p>单位： ms</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间</p><p>单位： ms</p>
     */
    public $EndTime;

    /**
     * @var array <p>过滤条件</p>
     */
    public $Filters;

    /**
     * @var array <p>排序字段</p>
     */
    public $SortFields;

    /**
     * @param string $DeploymentId <p>DeploymentId</p>
     * @param integer $Page <p>页码（从1开始）</p>
     * @param integer $PageSize <p>每页数量（最大 200）</p>
     * @param integer $StartTime <p>起始时间</p><p>单位： ms</p>
     * @param integer $EndTime <p>结束时间</p><p>单位： ms</p>
     * @param array $Filters <p>过滤条件</p>
     * @param array $SortFields <p>排序字段</p>
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
        if (array_key_exists("DeploymentId",$param) and $param["DeploymentId"] !== null) {
            $this->DeploymentId = $param["DeploymentId"];
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
    }
}
