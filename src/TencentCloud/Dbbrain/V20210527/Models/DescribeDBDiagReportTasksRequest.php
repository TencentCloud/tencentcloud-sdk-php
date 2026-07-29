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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBDiagReportTasks请求参数结构体
 *
 * @method string getStartTime() 获取<p>第一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。</p>
 * @method void setStartTime(string $StartTime) 设置<p>第一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。</p>
 * @method string getEndTime() 获取<p>最后一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。</p>
 * @method void setEndTime(string $EndTime) 设置<p>最后一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。</p>
 * @method array getInstanceIds() 获取<p>实例ID数组，用于筛选指定实例的任务列表。。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例ID数组，用于筛选指定实例的任务列表。。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method array getSources() 获取<p>任务的触发来源，支持的取值包括：&quot;DAILY_INSPECTION&quot; - 实例巡检；&quot;SCHEDULED&quot; - 计划任务；&quot;MANUAL&quot; - 手动触发。</p>
 * @method void setSources(array $Sources) 设置<p>任务的触发来源，支持的取值包括：&quot;DAILY_INSPECTION&quot; - 实例巡检；&quot;SCHEDULED&quot; - 计划任务；&quot;MANUAL&quot; - 手动触发。</p>
 * @method string getHealthLevels() 获取<p>报告的健康等级，支持的取值包括：&quot;HEALTH&quot; - 健康；&quot;SUB_HEALTH&quot; - 亚健康；&quot;RISK&quot; - 危险；&quot;HIGH_RISK&quot; - 高危。</p>
 * @method void setHealthLevels(string $HealthLevels) 设置<p>报告的健康等级，支持的取值包括：&quot;HEALTH&quot; - 健康；&quot;SUB_HEALTH&quot; - 亚健康；&quot;RISK&quot; - 危险；&quot;HIGH_RISK&quot; - 高危。</p>
 * @method string getTaskStatuses() 获取<p>任务的状态，支持的取值包括：&quot;created&quot; - 新建；&quot;chosen&quot; - 待执行； &quot;running&quot; - 执行中；&quot;failed&quot; - 失败；&quot;finished&quot; - 已完成。</p>
 * @method void setTaskStatuses(string $TaskStatuses) 设置<p>任务的状态，支持的取值包括：&quot;created&quot; - 新建；&quot;chosen&quot; - 待执行； &quot;running&quot; - 执行中；&quot;failed&quot; - 失败；&quot;finished&quot; - 已完成。</p>
 * @method integer getOffset() 获取<p>偏移量，默认0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认0。</p>
 * @method integer getLimit() 获取<p>返回数量，默认20，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认20，最大值为100。</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，默认为&quot;mysql&quot;。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，默认为&quot;mysql&quot;。</p>
 * @method array getTagFilters() 获取<p>根据任务所属实例的标签信息进行过滤</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>根据任务所属实例的标签信息进行过滤</p>
 */
class DescribeDBDiagReportTasksRequest extends AbstractModel
{
    /**
     * @var string <p>第一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。</p>
     */
    public $StartTime;

    /**
     * @var string <p>最后一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。</p>
     */
    public $EndTime;

    /**
     * @var array <p>实例ID数组，用于筛选指定实例的任务列表。。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>任务的触发来源，支持的取值包括：&quot;DAILY_INSPECTION&quot; - 实例巡检；&quot;SCHEDULED&quot; - 计划任务；&quot;MANUAL&quot; - 手动触发。</p>
     */
    public $Sources;

    /**
     * @var string <p>报告的健康等级，支持的取值包括：&quot;HEALTH&quot; - 健康；&quot;SUB_HEALTH&quot; - 亚健康；&quot;RISK&quot; - 危险；&quot;HIGH_RISK&quot; - 高危。</p>
     */
    public $HealthLevels;

    /**
     * @var string <p>任务的状态，支持的取值包括：&quot;created&quot; - 新建；&quot;chosen&quot; - 待执行； &quot;running&quot; - 执行中；&quot;failed&quot; - 失败；&quot;finished&quot; - 已完成。</p>
     */
    public $TaskStatuses;

    /**
     * @var integer <p>偏移量，默认0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var string <p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，默认为&quot;mysql&quot;。</p>
     */
    public $Product;

    /**
     * @var array <p>根据任务所属实例的标签信息进行过滤</p>
     */
    public $TagFilters;

    /**
     * @param string $StartTime <p>第一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。</p>
     * @param string $EndTime <p>最后一个任务的开始时间，用于范围查询，时间格式如：2019-09-10 12:13:14。</p>
     * @param array $InstanceIds <p>实例ID数组，用于筛选指定实例的任务列表。。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     * @param array $Sources <p>任务的触发来源，支持的取值包括：&quot;DAILY_INSPECTION&quot; - 实例巡检；&quot;SCHEDULED&quot; - 计划任务；&quot;MANUAL&quot; - 手动触发。</p>
     * @param string $HealthLevels <p>报告的健康等级，支持的取值包括：&quot;HEALTH&quot; - 健康；&quot;SUB_HEALTH&quot; - 亚健康；&quot;RISK&quot; - 危险；&quot;HIGH_RISK&quot; - 高危。</p>
     * @param string $TaskStatuses <p>任务的状态，支持的取值包括：&quot;created&quot; - 新建；&quot;chosen&quot; - 待执行； &quot;running&quot; - 执行中；&quot;failed&quot; - 失败；&quot;finished&quot; - 已完成。</p>
     * @param integer $Offset <p>偏移量，默认0。</p>
     * @param integer $Limit <p>返回数量，默认20，最大值为100。</p>
     * @param string $Product <p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，默认为&quot;mysql&quot;。</p>
     * @param array $TagFilters <p>根据任务所属实例的标签信息进行过滤</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Sources",$param) and $param["Sources"] !== null) {
            $this->Sources = $param["Sources"];
        }

        if (array_key_exists("HealthLevels",$param) and $param["HealthLevels"] !== null) {
            $this->HealthLevels = $param["HealthLevels"];
        }

        if (array_key_exists("TaskStatuses",$param) and $param["TaskStatuses"] !== null) {
            $this->TaskStatuses = $param["TaskStatuses"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilterGroup();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
