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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEvents请求参数结构体
 *
 * @method string getService() 获取服务类型，TRAIN为任务式建模, NOTEBOOK为Notebook, INFER为在线服务, BATCH为批量预测
枚举值：
- TRAIN
- NOTEBOOK
- INFER
- BATCH
 * @method void setService(string $Service) 设置服务类型，TRAIN为任务式建模, NOTEBOOK为Notebook, INFER为在线服务, BATCH为批量预测
枚举值：
- TRAIN
- NOTEBOOK
- INFER
- BATCH
 * @method string getServiceId() 获取服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：
- Service类型为TRAIN：
  调用[DescribeTrainingTask接口](/document/product/851/75089)查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId
- Service类型为NOTEBOOK：
  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName
- Service类型为INFER：
  调用[DescribeModelServiceGroup接口](/document/product/851/82285)查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId
- Service类型为BATCH：
  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId
 * @method void setServiceId(string $ServiceId) 设置服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：
- Service类型为TRAIN：
  调用[DescribeTrainingTask接口](/document/product/851/75089)查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId
- Service类型为NOTEBOOK：
  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName
- Service类型为INFER：
  调用[DescribeModelServiceGroup接口](/document/product/851/82285)查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId
- Service类型为BATCH：
  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId
 * @method string getStartTime() 获取查询事件最早发生的时间（RFC3339格式的时间字符串），默认值为当前时间的前一天
 * @method void setStartTime(string $StartTime) 设置查询事件最早发生的时间（RFC3339格式的时间字符串），默认值为当前时间的前一天
 * @method string getEndTime() 获取查询事件最晚发生的时间（RFC3339格式的时间字符串），默认值为当前时间
 * @method void setEndTime(string $EndTime) 设置查询事件最晚发生的时间（RFC3339格式的时间字符串），默认值为当前时间
 * @method integer getLimit() 获取分页Limit，默认值为100，最大值为100
 * @method void setLimit(integer $Limit) 设置分页Limit，默认值为100，最大值为100
 * @method integer getOffset() 获取分页Offset，默认值为0
 * @method void setOffset(integer $Offset) 设置分页Offset，默认值为0
 * @method string getOrder() 获取排列顺序（可选值为ASC, DESC ），默认为DESC
 * @method void setOrder(string $Order) 设置排列顺序（可选值为ASC, DESC ），默认为DESC
 * @method string getOrderField() 获取排序的依据字段（可选值为FirstTimestamp, LastTimestamp），默认值为LastTimestamp
 * @method void setOrderField(string $OrderField) 设置排序的依据字段（可选值为FirstTimestamp, LastTimestamp），默认值为LastTimestamp
 * @method array getFilters() 获取过滤条件
注意: 
1. Filter.Name：目前支持ResourceKind（按事件关联的资源类型过滤）；Type（按事件类型过滤）
2. Filter.Values：
对于Name为ResourceKind，Values的可选取值为Deployment, Replicaset, Pod等K8S资源类型；
对于Name为Type，Values的可选取值仅为Normal或者Warning；
Values为多个的时候表示同时满足
3. Filter. Negative和Filter. Fuzzy没有使用
 * @method void setFilters(array $Filters) 设置过滤条件
注意: 
1. Filter.Name：目前支持ResourceKind（按事件关联的资源类型过滤）；Type（按事件类型过滤）
2. Filter.Values：
对于Name为ResourceKind，Values的可选取值为Deployment, Replicaset, Pod等K8S资源类型；
对于Name为Type，Values的可选取值仅为Normal或者Warning；
Values为多个的时候表示同时满足
3. Filter. Negative和Filter. Fuzzy没有使用
 */
class DescribeEventsRequest extends AbstractModel
{
    /**
     * @var string 服务类型，TRAIN为任务式建模, NOTEBOOK为Notebook, INFER为在线服务, BATCH为批量预测
枚举值：
- TRAIN
- NOTEBOOK
- INFER
- BATCH
     */
    public $Service;

    /**
     * @var string 服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：
- Service类型为TRAIN：
  调用[DescribeTrainingTask接口](/document/product/851/75089)查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId
- Service类型为NOTEBOOK：
  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName
- Service类型为INFER：
  调用[DescribeModelServiceGroup接口](/document/product/851/82285)查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId
- Service类型为BATCH：
  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId
     */
    public $ServiceId;

    /**
     * @var string 查询事件最早发生的时间（RFC3339格式的时间字符串），默认值为当前时间的前一天
     */
    public $StartTime;

    /**
     * @var string 查询事件最晚发生的时间（RFC3339格式的时间字符串），默认值为当前时间
     */
    public $EndTime;

    /**
     * @var integer 分页Limit，默认值为100，最大值为100
     */
    public $Limit;

    /**
     * @var integer 分页Offset，默认值为0
     */
    public $Offset;

    /**
     * @var string 排列顺序（可选值为ASC, DESC ），默认为DESC
     */
    public $Order;

    /**
     * @var string 排序的依据字段（可选值为FirstTimestamp, LastTimestamp），默认值为LastTimestamp
     */
    public $OrderField;

    /**
     * @var array 过滤条件
注意: 
1. Filter.Name：目前支持ResourceKind（按事件关联的资源类型过滤）；Type（按事件类型过滤）
2. Filter.Values：
对于Name为ResourceKind，Values的可选取值为Deployment, Replicaset, Pod等K8S资源类型；
对于Name为Type，Values的可选取值仅为Normal或者Warning；
Values为多个的时候表示同时满足
3. Filter. Negative和Filter. Fuzzy没有使用
     */
    public $Filters;

    /**
     * @param string $Service 服务类型，TRAIN为任务式建模, NOTEBOOK为Notebook, INFER为在线服务, BATCH为批量预测
枚举值：
- TRAIN
- NOTEBOOK
- INFER
- BATCH
     * @param string $ServiceId 服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：
- Service类型为TRAIN：
  调用[DescribeTrainingTask接口](/document/product/851/75089)查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId
- Service类型为NOTEBOOK：
  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName
- Service类型为INFER：
  调用[DescribeModelServiceGroup接口](/document/product/851/82285)查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId
- Service类型为BATCH：
  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId
     * @param string $StartTime 查询事件最早发生的时间（RFC3339格式的时间字符串），默认值为当前时间的前一天
     * @param string $EndTime 查询事件最晚发生的时间（RFC3339格式的时间字符串），默认值为当前时间
     * @param integer $Limit 分页Limit，默认值为100，最大值为100
     * @param integer $Offset 分页Offset，默认值为0
     * @param string $Order 排列顺序（可选值为ASC, DESC ），默认为DESC
     * @param string $OrderField 排序的依据字段（可选值为FirstTimestamp, LastTimestamp），默认值为LastTimestamp
     * @param array $Filters 过滤条件
注意: 
1. Filter.Name：目前支持ResourceKind（按事件关联的资源类型过滤）；Type（按事件类型过滤）
2. Filter.Values：
对于Name为ResourceKind，Values的可选取值为Deployment, Replicaset, Pod等K8S资源类型；
对于Name为Type，Values的可选取值仅为Normal或者Warning；
Values为多个的时候表示同时满足
3. Filter. Negative和Filter. Fuzzy没有使用
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
