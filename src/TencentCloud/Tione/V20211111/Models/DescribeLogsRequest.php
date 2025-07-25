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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogs请求参数结构体
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
 * @method string getStartTime() 获取日志查询开始时间（RFC3339格式的时间字符串），默认值为当前时间的前一个小时
 * @method void setStartTime(string $StartTime) 设置日志查询开始时间（RFC3339格式的时间字符串），默认值为当前时间的前一个小时
 * @method string getEndTime() 获取日志查询结束时间（RFC3339格式的时间字符串），默认值为当前时间
 * @method void setEndTime(string $EndTime) 设置日志查询结束时间（RFC3339格式的时间字符串），默认值为当前时间
 * @method integer getLimit() 获取日志查询条数，默认值100，最大值100
 * @method void setLimit(integer $Limit) 设置日志查询条数，默认值100，最大值100
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
 * @method string getPodName() 获取Pod的名称，即需要查询服务对应的Pod，和Service参数对应，不同Service的PodName获取方式不同，具体如下：
- Service类型为TRAIN：
  调用[DescribeTrainingTaskPods接口](/document/product/851/75088)查询训练任务pod列表，PodName为接口返回值中Response.PodNames
- Service类型为NOTEBOOK：
  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，PodName为接口返回值中Response.NotebookDetail.PodName
- Service类型为INFER：
  调用[DescribeModelService接口](/document/product/851/82287)查询单个服务详情，PodName为接口返回值中Response.Service.ServiceInfo.PodInfos
- Service类型为BATCH：
  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，PodName为接口返回值中Response.BatchTaskDetail. PodList
注：支持结尾通配符*
 * @method void setPodName(string $PodName) 设置Pod的名称，即需要查询服务对应的Pod，和Service参数对应，不同Service的PodName获取方式不同，具体如下：
- Service类型为TRAIN：
  调用[DescribeTrainingTaskPods接口](/document/product/851/75088)查询训练任务pod列表，PodName为接口返回值中Response.PodNames
- Service类型为NOTEBOOK：
  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，PodName为接口返回值中Response.NotebookDetail.PodName
- Service类型为INFER：
  调用[DescribeModelService接口](/document/product/851/82287)查询单个服务详情，PodName为接口返回值中Response.Service.ServiceInfo.PodInfos
- Service类型为BATCH：
  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，PodName为接口返回值中Response.BatchTaskDetail. PodList
注：支持结尾通配符*
 * @method string getOrder() 获取排序方向（可选值为ASC, DESC ），默认为DESC
 * @method void setOrder(string $Order) 设置排序方向（可选值为ASC, DESC ），默认为DESC
 * @method string getOrderField() 获取按哪个字段排序（可选值为Timestamp），默认值为Timestamp
 * @method void setOrderField(string $OrderField) 设置按哪个字段排序（可选值为Timestamp），默认值为Timestamp
 * @method string getContext() 获取日志查询上下文，查询下一页的时候需要回传这个字段，该字段来自本接口的返回
 * @method void setContext(string $Context) 设置日志查询上下文，查询下一页的时候需要回传这个字段，该字段来自本接口的返回
 * @method array getFilters() 获取过滤条件
注意: 
1. Filter.Name：目前只支持Key（也就是按关键字过滤日志）
2. Filter.Values：表示过滤日志的关键字；Values为多个的时候表示同时满足
3. Filter. Negative和Filter. Fuzzy没有使用
 * @method void setFilters(array $Filters) 设置过滤条件
注意: 
1. Filter.Name：目前只支持Key（也就是按关键字过滤日志）
2. Filter.Values：表示过滤日志的关键字；Values为多个的时候表示同时满足
3. Filter. Negative和Filter. Fuzzy没有使用
 */
class DescribeLogsRequest extends AbstractModel
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
     * @var string 日志查询开始时间（RFC3339格式的时间字符串），默认值为当前时间的前一个小时
     */
    public $StartTime;

    /**
     * @var string 日志查询结束时间（RFC3339格式的时间字符串），默认值为当前时间
     */
    public $EndTime;

    /**
     * @var integer 日志查询条数，默认值100，最大值100
     */
    public $Limit;

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
     * @var string Pod的名称，即需要查询服务对应的Pod，和Service参数对应，不同Service的PodName获取方式不同，具体如下：
- Service类型为TRAIN：
  调用[DescribeTrainingTaskPods接口](/document/product/851/75088)查询训练任务pod列表，PodName为接口返回值中Response.PodNames
- Service类型为NOTEBOOK：
  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，PodName为接口返回值中Response.NotebookDetail.PodName
- Service类型为INFER：
  调用[DescribeModelService接口](/document/product/851/82287)查询单个服务详情，PodName为接口返回值中Response.Service.ServiceInfo.PodInfos
- Service类型为BATCH：
  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，PodName为接口返回值中Response.BatchTaskDetail. PodList
注：支持结尾通配符*
     */
    public $PodName;

    /**
     * @var string 排序方向（可选值为ASC, DESC ），默认为DESC
     */
    public $Order;

    /**
     * @var string 按哪个字段排序（可选值为Timestamp），默认值为Timestamp
     */
    public $OrderField;

    /**
     * @var string 日志查询上下文，查询下一页的时候需要回传这个字段，该字段来自本接口的返回
     */
    public $Context;

    /**
     * @var array 过滤条件
注意: 
1. Filter.Name：目前只支持Key（也就是按关键字过滤日志）
2. Filter.Values：表示过滤日志的关键字；Values为多个的时候表示同时满足
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
     * @param string $StartTime 日志查询开始时间（RFC3339格式的时间字符串），默认值为当前时间的前一个小时
     * @param string $EndTime 日志查询结束时间（RFC3339格式的时间字符串），默认值为当前时间
     * @param integer $Limit 日志查询条数，默认值100，最大值100
     * @param string $ServiceId 服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：
- Service类型为TRAIN：
  调用[DescribeTrainingTask接口](/document/product/851/75089)查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId
- Service类型为NOTEBOOK：
  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName
- Service类型为INFER：
  调用[DescribeModelServiceGroup接口](/document/product/851/82285)查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId
- Service类型为BATCH：
  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId
     * @param string $PodName Pod的名称，即需要查询服务对应的Pod，和Service参数对应，不同Service的PodName获取方式不同，具体如下：
- Service类型为TRAIN：
  调用[DescribeTrainingTaskPods接口](/document/product/851/75088)查询训练任务pod列表，PodName为接口返回值中Response.PodNames
- Service类型为NOTEBOOK：
  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，PodName为接口返回值中Response.NotebookDetail.PodName
- Service类型为INFER：
  调用[DescribeModelService接口](/document/product/851/82287)查询单个服务详情，PodName为接口返回值中Response.Service.ServiceInfo.PodInfos
- Service类型为BATCH：
  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，PodName为接口返回值中Response.BatchTaskDetail. PodList
注：支持结尾通配符*
     * @param string $Order 排序方向（可选值为ASC, DESC ），默认为DESC
     * @param string $OrderField 按哪个字段排序（可选值为Timestamp），默认值为Timestamp
     * @param string $Context 日志查询上下文，查询下一页的时候需要回传这个字段，该字段来自本接口的返回
     * @param array $Filters 过滤条件
注意: 
1. Filter.Name：目前只支持Key（也就是按关键字过滤日志）
2. Filter.Values：表示过滤日志的关键字；Values为多个的时候表示同时满足
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
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
