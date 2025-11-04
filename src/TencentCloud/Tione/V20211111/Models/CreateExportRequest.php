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
 * CreateExport请求参数结构体
 *
 * @method string getService() 获取服务类型，TRAIN为任务式建模, NOTEBOOK为Notebook, INFER为在线服务, BATCH为批量预测枚举值：- TRAIN- NOTEBOOK- INFER- BATCH
 * @method void setService(string $Service) 设置服务类型，TRAIN为任务式建模, NOTEBOOK为Notebook, INFER为在线服务, BATCH为批量预测枚举值：- TRAIN- NOTEBOOK- INFER- BATCH
 * @method string getServiceId() 获取服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：- Service类型为TRAIN：  调用[DescribeTrainingTask接口](/document/product/851/75089)查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId- Service类型为NOTEBOOK：  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName- Service类型为INFER：  调用[DescribeModelServiceGroup接口](/document/product/851/82285)查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId- Service类型为BATCH：  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId
 * @method void setServiceId(string $ServiceId) 设置服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：- Service类型为TRAIN：  调用[DescribeTrainingTask接口](/document/product/851/75089)查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId- Service类型为NOTEBOOK：  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName- Service类型为INFER：  调用[DescribeModelServiceGroup接口](/document/product/851/82285)查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId- Service类型为BATCH：  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId
 * @method string getStartTime() 获取日志查询开始时间（RFC3339格式的时间字符串），默认值为当前时间的前一个小时
 * @method void setStartTime(string $StartTime) 设置日志查询开始时间（RFC3339格式的时间字符串），默认值为当前时间的前一个小时
 * @method string getEndTime() 获取日志查询结束时间（RFC3339格式的时间字符串），开始时间和结束时间必须同时填或同时不填，默认值为当前时间
 * @method void setEndTime(string $EndTime) 设置日志查询结束时间（RFC3339格式的时间字符串），开始时间和结束时间必须同时填或同时不填，默认值为当前时间
 * @method string getFormat() 获取日志导出数据格式。json，csv，默认为csv
 * @method void setFormat(string $Format) 设置日志导出数据格式。json，csv，默认为csv
 * @method string getPodName() 获取Pod的名称，即需要查询服务对应的Pod，和Service参数对应，不同Service的PodName获取方式不同，具体如下：- Service类型为TRAIN：  调用[DescribeTrainingTaskPods接口](/document/product/851/75088)查询训练任务pod列表，PodName为接口返回值中Response.PodNames- Service类型为NOTEBOOK：  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，PodName为接口返回值中Response.NotebookDetail.PodName- Service类型为INFER：  调用[DescribeModelService接口](/document/product/851/82287)查询单个服务详情，PodName为接口返回值中Response.Service.ServiceInfo.PodInfos- Service类型为BATCH：  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，PodName为接口返回值中Response.BatchTaskDetail. PodList注：支持结尾通配符*
 * @method void setPodName(string $PodName) 设置Pod的名称，即需要查询服务对应的Pod，和Service参数对应，不同Service的PodName获取方式不同，具体如下：- Service类型为TRAIN：  调用[DescribeTrainingTaskPods接口](/document/product/851/75088)查询训练任务pod列表，PodName为接口返回值中Response.PodNames- Service类型为NOTEBOOK：  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，PodName为接口返回值中Response.NotebookDetail.PodName- Service类型为INFER：  调用[DescribeModelService接口](/document/product/851/82287)查询单个服务详情，PodName为接口返回值中Response.Service.ServiceInfo.PodInfos- Service类型为BATCH：  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，PodName为接口返回值中Response.BatchTaskDetail. PodList注：支持结尾通配符*
 * @method string getJobCategory() 获取描述任务的类型
 * @method void setJobCategory(string $JobCategory) 设置描述任务的类型
 * @method string getInstanceType() 获取实例的类型
 * @method void setInstanceType(string $InstanceType) 设置实例的类型
 * @method string getInstanceId() 获取查实例Id
 * @method void setInstanceId(string $InstanceId) 设置查实例Id
 * @method string getType() 获取日志类型： PLATFORM_INIT, PLATFORM_SANITY_CHECK, USER
 * @method void setType(string $Type) 设置日志类型： PLATFORM_INIT, PLATFORM_SANITY_CHECK, USER
 */
class CreateExportRequest extends AbstractModel
{
    /**
     * @var string 服务类型，TRAIN为任务式建模, NOTEBOOK为Notebook, INFER为在线服务, BATCH为批量预测枚举值：- TRAIN- NOTEBOOK- INFER- BATCH
     */
    public $Service;

    /**
     * @var string 服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：- Service类型为TRAIN：  调用[DescribeTrainingTask接口](/document/product/851/75089)查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId- Service类型为NOTEBOOK：  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName- Service类型为INFER：  调用[DescribeModelServiceGroup接口](/document/product/851/82285)查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId- Service类型为BATCH：  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId
     */
    public $ServiceId;

    /**
     * @var string 日志查询开始时间（RFC3339格式的时间字符串），默认值为当前时间的前一个小时
     */
    public $StartTime;

    /**
     * @var string 日志查询结束时间（RFC3339格式的时间字符串），开始时间和结束时间必须同时填或同时不填，默认值为当前时间
     */
    public $EndTime;

    /**
     * @var string 日志导出数据格式。json，csv，默认为csv
     */
    public $Format;

    /**
     * @var string Pod的名称，即需要查询服务对应的Pod，和Service参数对应，不同Service的PodName获取方式不同，具体如下：- Service类型为TRAIN：  调用[DescribeTrainingTaskPods接口](/document/product/851/75088)查询训练任务pod列表，PodName为接口返回值中Response.PodNames- Service类型为NOTEBOOK：  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，PodName为接口返回值中Response.NotebookDetail.PodName- Service类型为INFER：  调用[DescribeModelService接口](/document/product/851/82287)查询单个服务详情，PodName为接口返回值中Response.Service.ServiceInfo.PodInfos- Service类型为BATCH：  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，PodName为接口返回值中Response.BatchTaskDetail. PodList注：支持结尾通配符*
     */
    public $PodName;

    /**
     * @var string 描述任务的类型
     */
    public $JobCategory;

    /**
     * @var string 实例的类型
     */
    public $InstanceType;

    /**
     * @var string 查实例Id
     */
    public $InstanceId;

    /**
     * @var string 日志类型： PLATFORM_INIT, PLATFORM_SANITY_CHECK, USER
     */
    public $Type;

    /**
     * @param string $Service 服务类型，TRAIN为任务式建模, NOTEBOOK为Notebook, INFER为在线服务, BATCH为批量预测枚举值：- TRAIN- NOTEBOOK- INFER- BATCH
     * @param string $ServiceId 服务ID，和Service参数对应，不同Service的服务ID获取方式不同，具体如下：- Service类型为TRAIN：  调用[DescribeTrainingTask接口](/document/product/851/75089)查询训练任务详情，ServiceId为接口返回值中Response.TrainingTaskDetail.LatestInstanceId- Service类型为NOTEBOOK：  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，ServiceId为接口返回值中Response.NotebookDetail.PodName- Service类型为INFER：  调用[DescribeModelServiceGroup接口](/document/product/851/82285)查询服务组详情，ServiceId为接口返回值中Response.ServiceGroup.Services.ServiceId- Service类型为BATCH：  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，ServiceId为接口返回值中Response.BatchTaskDetail.LatestInstanceId
     * @param string $StartTime 日志查询开始时间（RFC3339格式的时间字符串），默认值为当前时间的前一个小时
     * @param string $EndTime 日志查询结束时间（RFC3339格式的时间字符串），开始时间和结束时间必须同时填或同时不填，默认值为当前时间
     * @param string $Format 日志导出数据格式。json，csv，默认为csv
     * @param string $PodName Pod的名称，即需要查询服务对应的Pod，和Service参数对应，不同Service的PodName获取方式不同，具体如下：- Service类型为TRAIN：  调用[DescribeTrainingTaskPods接口](/document/product/851/75088)查询训练任务pod列表，PodName为接口返回值中Response.PodNames- Service类型为NOTEBOOK：  调用[DescribeNotebook接口](/document/product/851/95662)查询Notebook详情，PodName为接口返回值中Response.NotebookDetail.PodName- Service类型为INFER：  调用[DescribeModelService接口](/document/product/851/82287)查询单个服务详情，PodName为接口返回值中Response.Service.ServiceInfo.PodInfos- Service类型为BATCH：  调用[DescribeBatchTask接口](/document/product/851/80180)查询跑批任务详情，PodName为接口返回值中Response.BatchTaskDetail. PodList注：支持结尾通配符*
     * @param string $JobCategory 描述任务的类型
     * @param string $InstanceType 实例的类型
     * @param string $InstanceId 查实例Id
     * @param string $Type 日志类型： PLATFORM_INIT, PLATFORM_SANITY_CHECK, USER
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

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("JobCategory",$param) and $param["JobCategory"] !== null) {
            $this->JobCategory = $param["JobCategory"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
