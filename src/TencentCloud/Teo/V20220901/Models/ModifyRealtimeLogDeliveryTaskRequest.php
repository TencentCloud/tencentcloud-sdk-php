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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRealtimeLogDeliveryTask请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getTaskId() 获取实时日志投递任务 ID。
 * @method void setTaskId(string $TaskId) 设置实时日志投递任务 ID。
 * @method string getTaskName() 获取实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。不填保持原有配置。
 * @method void setTaskName(string $TaskName) 设置实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。不填保持原有配置。
 * @method string getDeliveryStatus() 获取实时日志投递任务的状态，取值有：
<li>enabled: 启用；</li>
<li>disabled: 停用。</li>不填保持原有配置。
 * @method void setDeliveryStatus(string $DeliveryStatus) 设置实时日志投递任务的状态，取值有：
<li>enabled: 启用；</li>
<li>disabled: 停用。</li>不填保持原有配置。
 * @method array getEntityList() 获取实时日志投递任务对应的实体（七层域名或者四层代理实例）列表。取值示例如下：
<li>七层域名：domain.example.com；</li>
<li>四层代理实例：sid-2s69eb5wcms7。</li>不填保持原有配置。
 * @method void setEntityList(array $EntityList) 设置实时日志投递任务对应的实体（七层域名或者四层代理实例）列表。取值示例如下：
<li>七层域名：domain.example.com；</li>
<li>四层代理实例：sid-2s69eb5wcms7。</li>不填保持原有配置。
 * @method array getFields() 获取投递的预设字段列表。不填保持原有配置。
 * @method void setFields(array $Fields) 设置投递的预设字段列表。不填保持原有配置。
 * @method array getCustomFields() 获取投递的自定义字段列表，支持在 HTTP 请求头、响应头、Cookie、请求正文中提取指定内容。不填保持原有配置。自定义字段名称不能重复，且最多不能超过 200 个字段。单个实时日志推送任务最多添加 5 个请求正文类型的自定义字段。目前仅站点加速日志（LogType=domain）支持添加自定义字段。
 * @method void setCustomFields(array $CustomFields) 设置投递的自定义字段列表，支持在 HTTP 请求头、响应头、Cookie、请求正文中提取指定内容。不填保持原有配置。自定义字段名称不能重复，且最多不能超过 200 个字段。单个实时日志推送任务最多添加 5 个请求正文类型的自定义字段。目前仅站点加速日志（LogType=domain）支持添加自定义字段。
 * @method array getDeliveryConditions() 获取日志投递的过滤条件。不填表示投递全量日志。
 * @method void setDeliveryConditions(array $DeliveryConditions) 设置日志投递的过滤条件。不填表示投递全量日志。
 * @method integer getSample() 获取采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填保持原有配置。
 * @method void setSample(integer $Sample) 设置采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填保持原有配置。
 * @method LogFormat getLogFormat() 获取日志投递的输出格式。不填保持原有配置。
特别地，当 TaskType 取值为 cls 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。
 * @method void setLogFormat(LogFormat $LogFormat) 设置日志投递的输出格式。不填保持原有配置。
特别地，当 TaskType 取值为 cls 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。
 * @method CustomEndpoint getCustomEndpoint() 获取自定义 HTTP 服务的配置信息，不填保持原有配置。 
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) 设置自定义 HTTP 服务的配置信息，不填保持原有配置。 
 * @method S3 getS3() 获取AWS S3 兼容存储桶的配置信息，不填保持原有配置。
 * @method void setS3(S3 $S3) 设置AWS S3 兼容存储桶的配置信息，不填保持原有配置。
 */
class ModifyRealtimeLogDeliveryTaskRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 实时日志投递任务 ID。
     */
    public $TaskId;

    /**
     * @var string 实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。不填保持原有配置。
     */
    public $TaskName;

    /**
     * @var string 实时日志投递任务的状态，取值有：
<li>enabled: 启用；</li>
<li>disabled: 停用。</li>不填保持原有配置。
     */
    public $DeliveryStatus;

    /**
     * @var array 实时日志投递任务对应的实体（七层域名或者四层代理实例）列表。取值示例如下：
<li>七层域名：domain.example.com；</li>
<li>四层代理实例：sid-2s69eb5wcms7。</li>不填保持原有配置。
     */
    public $EntityList;

    /**
     * @var array 投递的预设字段列表。不填保持原有配置。
     */
    public $Fields;

    /**
     * @var array 投递的自定义字段列表，支持在 HTTP 请求头、响应头、Cookie、请求正文中提取指定内容。不填保持原有配置。自定义字段名称不能重复，且最多不能超过 200 个字段。单个实时日志推送任务最多添加 5 个请求正文类型的自定义字段。目前仅站点加速日志（LogType=domain）支持添加自定义字段。
     */
    public $CustomFields;

    /**
     * @var array 日志投递的过滤条件。不填表示投递全量日志。
     */
    public $DeliveryConditions;

    /**
     * @var integer 采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填保持原有配置。
     */
    public $Sample;

    /**
     * @var LogFormat 日志投递的输出格式。不填保持原有配置。
特别地，当 TaskType 取值为 cls 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。
     */
    public $LogFormat;

    /**
     * @var CustomEndpoint 自定义 HTTP 服务的配置信息，不填保持原有配置。 
     */
    public $CustomEndpoint;

    /**
     * @var S3 AWS S3 兼容存储桶的配置信息，不填保持原有配置。
     */
    public $S3;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $TaskId 实时日志投递任务 ID。
     * @param string $TaskName 实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。不填保持原有配置。
     * @param string $DeliveryStatus 实时日志投递任务的状态，取值有：
<li>enabled: 启用；</li>
<li>disabled: 停用。</li>不填保持原有配置。
     * @param array $EntityList 实时日志投递任务对应的实体（七层域名或者四层代理实例）列表。取值示例如下：
<li>七层域名：domain.example.com；</li>
<li>四层代理实例：sid-2s69eb5wcms7。</li>不填保持原有配置。
     * @param array $Fields 投递的预设字段列表。不填保持原有配置。
     * @param array $CustomFields 投递的自定义字段列表，支持在 HTTP 请求头、响应头、Cookie、请求正文中提取指定内容。不填保持原有配置。自定义字段名称不能重复，且最多不能超过 200 个字段。单个实时日志推送任务最多添加 5 个请求正文类型的自定义字段。目前仅站点加速日志（LogType=domain）支持添加自定义字段。
     * @param array $DeliveryConditions 日志投递的过滤条件。不填表示投递全量日志。
     * @param integer $Sample 采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填保持原有配置。
     * @param LogFormat $LogFormat 日志投递的输出格式。不填保持原有配置。
特别地，当 TaskType 取值为 cls 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。
     * @param CustomEndpoint $CustomEndpoint 自定义 HTTP 服务的配置信息，不填保持原有配置。 
     * @param S3 $S3 AWS S3 兼容存储桶的配置信息，不填保持原有配置。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("DeliveryStatus",$param) and $param["DeliveryStatus"] !== null) {
            $this->DeliveryStatus = $param["DeliveryStatus"];
        }

        if (array_key_exists("EntityList",$param) and $param["EntityList"] !== null) {
            $this->EntityList = $param["EntityList"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = $param["Fields"];
        }

        if (array_key_exists("CustomFields",$param) and $param["CustomFields"] !== null) {
            $this->CustomFields = [];
            foreach ($param["CustomFields"] as $key => $value){
                $obj = new CustomField();
                $obj->deserialize($value);
                array_push($this->CustomFields, $obj);
            }
        }

        if (array_key_exists("DeliveryConditions",$param) and $param["DeliveryConditions"] !== null) {
            $this->DeliveryConditions = [];
            foreach ($param["DeliveryConditions"] as $key => $value){
                $obj = new DeliveryCondition();
                $obj->deserialize($value);
                array_push($this->DeliveryConditions, $obj);
            }
        }

        if (array_key_exists("Sample",$param) and $param["Sample"] !== null) {
            $this->Sample = $param["Sample"];
        }

        if (array_key_exists("LogFormat",$param) and $param["LogFormat"] !== null) {
            $this->LogFormat = new LogFormat();
            $this->LogFormat->deserialize($param["LogFormat"]);
        }

        if (array_key_exists("CustomEndpoint",$param) and $param["CustomEndpoint"] !== null) {
            $this->CustomEndpoint = new CustomEndpoint();
            $this->CustomEndpoint->deserialize($param["CustomEndpoint"]);
        }

        if (array_key_exists("S3",$param) and $param["S3"] !== null) {
            $this->S3 = new S3();
            $this->S3->deserialize($param["S3"]);
        }
    }
}
