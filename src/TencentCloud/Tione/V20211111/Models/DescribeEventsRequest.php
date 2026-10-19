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
 * DescribeEvents请求参数结构体
 *
 * @method string getService() 获取<p>服务类型，TRAIN为任务式建模, NOTEBOOK为Notebook, INFER为在线服务, BATCH为批量预测<br>枚举值：</p><ul><li>TRAIN</li><li>NOTEBOOK</li><li>INFER</li><li>BATCH</li></ul>
 * @method void setService(string $Service) 设置<p>服务类型，TRAIN为任务式建模, NOTEBOOK为Notebook, INFER为在线服务, BATCH为批量预测<br>枚举值：</p><ul><li>TRAIN</li><li>NOTEBOOK</li><li>INFER</li><li>BATCH</li></ul>
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method string getServiceId() 获取<p>服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：</p><ul><li>Service类型为TRAIN：<br>调用<a href="/document/product/851/75089">DescribeTrainingTask接口</a>查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId</li><li>Service类型为NOTEBOOK：<br>调用<a href="/document/product/851/95662">DescribeNotebook接口</a>查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName</li><li>Service类型为INFER：<br>调用<a href="/document/product/851/82285">DescribeModelServiceGroup接口</a>查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId</li><li>Service类型为BATCH：<br>调用<a href="/document/product/851/80180">DescribeBatchTask接口</a>查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId</li></ul>
 * @method void setServiceId(string $ServiceId) 设置<p>服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：</p><ul><li>Service类型为TRAIN：<br>调用<a href="/document/product/851/75089">DescribeTrainingTask接口</a>查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId</li><li>Service类型为NOTEBOOK：<br>调用<a href="/document/product/851/95662">DescribeNotebook接口</a>查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName</li><li>Service类型为INFER：<br>调用<a href="/document/product/851/82285">DescribeModelServiceGroup接口</a>查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId</li><li>Service类型为BATCH：<br>调用<a href="/document/product/851/80180">DescribeBatchTask接口</a>查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId</li></ul>
 * @method string getStartTime() 获取<p>查询事件最早发生的时间（RFC3339格式的时间字符串），默认值为当前时间的前一天</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询事件最早发生的时间（RFC3339格式的时间字符串），默认值为当前时间的前一天</p>
 * @method string getEndTime() 获取<p>查询事件最晚发生的时间（RFC3339格式的时间字符串），默认值为当前时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询事件最晚发生的时间（RFC3339格式的时间字符串），默认值为当前时间</p>
 * @method integer getLimit() 获取<p>分页Limit，默认值为100，最大值为100</p>
 * @method void setLimit(integer $Limit) 设置<p>分页Limit，默认值为100，最大值为100</p>
 * @method integer getOffset() 获取<p>分页Offset，默认值为0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页Offset，默认值为0</p>
 * @method string getOrder() 获取<p>排列顺序（可选值为ASC, DESC ），默认为DESC</p>
 * @method void setOrder(string $Order) 设置<p>排列顺序（可选值为ASC, DESC ），默认为DESC</p>
 * @method string getOrderField() 获取<p>排序的依据字段（可选值为FirstTimestamp, LastTimestamp），默认值为LastTimestamp</p>
 * @method void setOrderField(string $OrderField) 设置<p>排序的依据字段（可选值为FirstTimestamp, LastTimestamp），默认值为LastTimestamp</p>
 * @method array getFilters() 获取<p>过滤条件<br>注意: </p><ol><li>Filter.Name：目前支持ResourceKind（按事件关联的资源类型过滤）；Type（按事件类型过滤）</li><li>Filter.Values：<br>对于Name为ResourceKind，Values的可选取值为Deployment, Replicaset, Pod等K8S资源类型；<br>对于Name为Type，Values的可选取值仅为Normal或者Warning；<br>Values为多个的时候表示同时满足</li><li>Filter. Negative和Filter. Fuzzy没有使用</li></ol>
 * @method void setFilters(array $Filters) 设置<p>过滤条件<br>注意: </p><ol><li>Filter.Name：目前支持ResourceKind（按事件关联的资源类型过滤）；Type（按事件类型过滤）</li><li>Filter.Values：<br>对于Name为ResourceKind，Values的可选取值为Deployment, Replicaset, Pod等K8S资源类型；<br>对于Name为Type，Values的可选取值仅为Normal或者Warning；<br>Values为多个的时候表示同时满足</li><li>Filter. Negative和Filter. Fuzzy没有使用</li></ol>
 */
class DescribeEventsRequest extends AbstractModel
{
    /**
     * @var string <p>服务类型，TRAIN为任务式建模, NOTEBOOK为Notebook, INFER为在线服务, BATCH为批量预测<br>枚举值：</p><ul><li>TRAIN</li><li>NOTEBOOK</li><li>INFER</li><li>BATCH</li></ul>
     */
    public $Service;

    /**
     * @var string <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     */
    public $TiProjectId;

    /**
     * @var string <p>服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：</p><ul><li>Service类型为TRAIN：<br>调用<a href="/document/product/851/75089">DescribeTrainingTask接口</a>查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId</li><li>Service类型为NOTEBOOK：<br>调用<a href="/document/product/851/95662">DescribeNotebook接口</a>查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName</li><li>Service类型为INFER：<br>调用<a href="/document/product/851/82285">DescribeModelServiceGroup接口</a>查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId</li><li>Service类型为BATCH：<br>调用<a href="/document/product/851/80180">DescribeBatchTask接口</a>查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId</li></ul>
     */
    public $ServiceId;

    /**
     * @var string <p>查询事件最早发生的时间（RFC3339格式的时间字符串），默认值为当前时间的前一天</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询事件最晚发生的时间（RFC3339格式的时间字符串），默认值为当前时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>分页Limit，默认值为100，最大值为100</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页Offset，默认值为0</p>
     */
    public $Offset;

    /**
     * @var string <p>排列顺序（可选值为ASC, DESC ），默认为DESC</p>
     */
    public $Order;

    /**
     * @var string <p>排序的依据字段（可选值为FirstTimestamp, LastTimestamp），默认值为LastTimestamp</p>
     */
    public $OrderField;

    /**
     * @var array <p>过滤条件<br>注意: </p><ol><li>Filter.Name：目前支持ResourceKind（按事件关联的资源类型过滤）；Type（按事件类型过滤）</li><li>Filter.Values：<br>对于Name为ResourceKind，Values的可选取值为Deployment, Replicaset, Pod等K8S资源类型；<br>对于Name为Type，Values的可选取值仅为Normal或者Warning；<br>Values为多个的时候表示同时满足</li><li>Filter. Negative和Filter. Fuzzy没有使用</li></ol>
     */
    public $Filters;

    /**
     * @param string $Service <p>服务类型，TRAIN为任务式建模, NOTEBOOK为Notebook, INFER为在线服务, BATCH为批量预测<br>枚举值：</p><ul><li>TRAIN</li><li>NOTEBOOK</li><li>INFER</li><li>BATCH</li></ul>
     * @param string $TiProjectId <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     * @param string $ServiceId <p>服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：</p><ul><li>Service类型为TRAIN：<br>调用<a href="/document/product/851/75089">DescribeTrainingTask接口</a>查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId</li><li>Service类型为NOTEBOOK：<br>调用<a href="/document/product/851/95662">DescribeNotebook接口</a>查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName</li><li>Service类型为INFER：<br>调用<a href="/document/product/851/82285">DescribeModelServiceGroup接口</a>查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId</li><li>Service类型为BATCH：<br>调用<a href="/document/product/851/80180">DescribeBatchTask接口</a>查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId</li></ul>
     * @param string $StartTime <p>查询事件最早发生的时间（RFC3339格式的时间字符串），默认值为当前时间的前一天</p>
     * @param string $EndTime <p>查询事件最晚发生的时间（RFC3339格式的时间字符串），默认值为当前时间</p>
     * @param integer $Limit <p>分页Limit，默认值为100，最大值为100</p>
     * @param integer $Offset <p>分页Offset，默认值为0</p>
     * @param string $Order <p>排列顺序（可选值为ASC, DESC ），默认为DESC</p>
     * @param string $OrderField <p>排序的依据字段（可选值为FirstTimestamp, LastTimestamp），默认值为LastTimestamp</p>
     * @param array $Filters <p>过滤条件<br>注意: </p><ol><li>Filter.Name：目前支持ResourceKind（按事件关联的资源类型过滤）；Type（按事件类型过滤）</li><li>Filter.Values：<br>对于Name为ResourceKind，Values的可选取值为Deployment, Replicaset, Pod等K8S资源类型；<br>对于Name为Type，Values的可选取值仅为Normal或者Warning；<br>Values为多个的时候表示同时满足</li><li>Filter. Negative和Filter. Fuzzy没有使用</li></ol>
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

        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
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
