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
 * CreateRealtimeLogDeliveryTask请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getTaskName() 获取实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。
 * @method void setTaskName(string $TaskName) 设置实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。
 * @method string getTaskType() 获取实时日志投递任务类型，取值有：
<li>cls: 推送到腾讯云 CLS；</li>
<li>custom_endpoint：推送到自定义 HTTP(S) 地址；</li>
<li>s3：推送到 AWS S3 兼容存储桶地址；</li>
 * @method void setTaskType(string $TaskType) 设置实时日志投递任务类型，取值有：
<li>cls: 推送到腾讯云 CLS；</li>
<li>custom_endpoint：推送到自定义 HTTP(S) 地址；</li>
<li>s3：推送到 AWS S3 兼容存储桶地址；</li>
 * @method array getEntityList() 获取实时日志投递任务对应的实体列表。取值示例如下：
<li>七层域名：domain.example.com</li>
<li>四层代理实例：sid-2s69eb5wcms7</li>
<li>边缘函数实例：test-zone-2mxigizoh9l9-1257626257</li>
 * @method void setEntityList(array $EntityList) 设置实时日志投递任务对应的实体列表。取值示例如下：
<li>七层域名：domain.example.com</li>
<li>四层代理实例：sid-2s69eb5wcms7</li>
<li>边缘函数实例：test-zone-2mxigizoh9l9-1257626257</li>
 * @method string getLogType() 获取数据投递类型，取值有：
<li>domain：站点加速日志；</li>
<li>application：四层代理日志；</li>
<li>function：边缘函数运行日志；</li>
<li>web-rateLiming：速率限制和 CC 攻击防护日志；</li>
<li>web-attack：托管规则日志；</li>
<li>web-rule：自定义规则日志；</li>
<li>web-bot：Bot管理日志。</li>
 * @method void setLogType(string $LogType) 设置数据投递类型，取值有：
<li>domain：站点加速日志；</li>
<li>application：四层代理日志；</li>
<li>function：边缘函数运行日志；</li>
<li>web-rateLiming：速率限制和 CC 攻击防护日志；</li>
<li>web-attack：托管规则日志；</li>
<li>web-rule：自定义规则日志；</li>
<li>web-bot：Bot管理日志。</li>
 * @method string getArea() 获取数据投递区域，取值有：
<li>mainland：中国大陆境内；</li>
<li>overseas：全球（不含中国大陆）。</li>
 * @method void setArea(string $Area) 设置数据投递区域，取值有：
<li>mainland：中国大陆境内；</li>
<li>overseas：全球（不含中国大陆）。</li>
 * @method array getFields() 获取投递的预设字段列表。取值参考：
<li>[站点加速日志（七层访问日志）](https://cloud.tencent.com/document/product/1552/105791)</li>
<li>[四层代理日志](https://cloud.tencent.com/document/product/1552/105792)</li>
<li>[边缘函数运行日志](https://cloud.tencent.com/document/product/1552/115585)</li>
 * @method void setFields(array $Fields) 设置投递的预设字段列表。取值参考：
<li>[站点加速日志（七层访问日志）](https://cloud.tencent.com/document/product/1552/105791)</li>
<li>[四层代理日志](https://cloud.tencent.com/document/product/1552/105792)</li>
<li>[边缘函数运行日志](https://cloud.tencent.com/document/product/1552/115585)</li>
 * @method array getCustomFields() 获取投递的自定义字段列表，支持在 HTTP 请求头、响应头、Cookie、请求正文中提取指定内容。自定义字段名称不能重复，且最多不能超过 200 个字段。单个实时日志推送任务最多添加 5 个请求正文类型的自定义字段。目前仅站点加速日志（LogType=domain）支持添加自定义字段。
 * @method void setCustomFields(array $CustomFields) 设置投递的自定义字段列表，支持在 HTTP 请求头、响应头、Cookie、请求正文中提取指定内容。自定义字段名称不能重复，且最多不能超过 200 个字段。单个实时日志推送任务最多添加 5 个请求正文类型的自定义字段。目前仅站点加速日志（LogType=domain）支持添加自定义字段。
 * @method array getDeliveryConditions() 获取日志投递的过滤条件，不填表示投递全量日志。
 * @method void setDeliveryConditions(array $DeliveryConditions) 设置日志投递的过滤条件，不填表示投递全量日志。
 * @method integer getSample() 获取采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填表示采样比例为 100%。
 * @method void setSample(integer $Sample) 设置采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填表示采样比例为 100%。
 * @method LogFormat getLogFormat() 获取日志投递的输出格式。不填表示为默认格式，默认格式逻辑如下：
<li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li>
<li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines；</li>特别地，当 TaskType 取值为 cls 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。
 * @method void setLogFormat(LogFormat $LogFormat) 设置日志投递的输出格式。不填表示为默认格式，默认格式逻辑如下：
<li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li>
<li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines；</li>特别地，当 TaskType 取值为 cls 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。
 * @method CLSTopic getCLS() 获取CLS 的配置信息。当 TaskType 取值为 cls 时，该参数必填。
 * @method void setCLS(CLSTopic $CLS) 设置CLS 的配置信息。当 TaskType 取值为 cls 时，该参数必填。
 * @method CustomEndpoint getCustomEndpoint() 获取自定义 HTTP 服务的配置信息。当 TaskType 取值为 custom_endpoint 时，该参数必填。
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) 设置自定义 HTTP 服务的配置信息。当 TaskType 取值为 custom_endpoint 时，该参数必填。
 * @method S3 getS3() 获取AWS S3 兼容存储桶的配置信息。当 TaskType 取值为 s3 时，该参数必填。
 * @method void setS3(S3 $S3) 设置AWS S3 兼容存储桶的配置信息。当 TaskType 取值为 s3 时，该参数必填。
 */
class CreateRealtimeLogDeliveryTaskRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。
     */
    public $TaskName;

    /**
     * @var string 实时日志投递任务类型，取值有：
<li>cls: 推送到腾讯云 CLS；</li>
<li>custom_endpoint：推送到自定义 HTTP(S) 地址；</li>
<li>s3：推送到 AWS S3 兼容存储桶地址；</li>
     */
    public $TaskType;

    /**
     * @var array 实时日志投递任务对应的实体列表。取值示例如下：
<li>七层域名：domain.example.com</li>
<li>四层代理实例：sid-2s69eb5wcms7</li>
<li>边缘函数实例：test-zone-2mxigizoh9l9-1257626257</li>
     */
    public $EntityList;

    /**
     * @var string 数据投递类型，取值有：
<li>domain：站点加速日志；</li>
<li>application：四层代理日志；</li>
<li>function：边缘函数运行日志；</li>
<li>web-rateLiming：速率限制和 CC 攻击防护日志；</li>
<li>web-attack：托管规则日志；</li>
<li>web-rule：自定义规则日志；</li>
<li>web-bot：Bot管理日志。</li>
     */
    public $LogType;

    /**
     * @var string 数据投递区域，取值有：
<li>mainland：中国大陆境内；</li>
<li>overseas：全球（不含中国大陆）。</li>
     */
    public $Area;

    /**
     * @var array 投递的预设字段列表。取值参考：
<li>[站点加速日志（七层访问日志）](https://cloud.tencent.com/document/product/1552/105791)</li>
<li>[四层代理日志](https://cloud.tencent.com/document/product/1552/105792)</li>
<li>[边缘函数运行日志](https://cloud.tencent.com/document/product/1552/115585)</li>
     */
    public $Fields;

    /**
     * @var array 投递的自定义字段列表，支持在 HTTP 请求头、响应头、Cookie、请求正文中提取指定内容。自定义字段名称不能重复，且最多不能超过 200 个字段。单个实时日志推送任务最多添加 5 个请求正文类型的自定义字段。目前仅站点加速日志（LogType=domain）支持添加自定义字段。
     */
    public $CustomFields;

    /**
     * @var array 日志投递的过滤条件，不填表示投递全量日志。
     */
    public $DeliveryConditions;

    /**
     * @var integer 采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填表示采样比例为 100%。
     */
    public $Sample;

    /**
     * @var LogFormat 日志投递的输出格式。不填表示为默认格式，默认格式逻辑如下：
<li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li>
<li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines；</li>特别地，当 TaskType 取值为 cls 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。
     */
    public $LogFormat;

    /**
     * @var CLSTopic CLS 的配置信息。当 TaskType 取值为 cls 时，该参数必填。
     */
    public $CLS;

    /**
     * @var CustomEndpoint 自定义 HTTP 服务的配置信息。当 TaskType 取值为 custom_endpoint 时，该参数必填。
     */
    public $CustomEndpoint;

    /**
     * @var S3 AWS S3 兼容存储桶的配置信息。当 TaskType 取值为 s3 时，该参数必填。
     */
    public $S3;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $TaskName 实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。
     * @param string $TaskType 实时日志投递任务类型，取值有：
<li>cls: 推送到腾讯云 CLS；</li>
<li>custom_endpoint：推送到自定义 HTTP(S) 地址；</li>
<li>s3：推送到 AWS S3 兼容存储桶地址；</li>
     * @param array $EntityList 实时日志投递任务对应的实体列表。取值示例如下：
<li>七层域名：domain.example.com</li>
<li>四层代理实例：sid-2s69eb5wcms7</li>
<li>边缘函数实例：test-zone-2mxigizoh9l9-1257626257</li>
     * @param string $LogType 数据投递类型，取值有：
<li>domain：站点加速日志；</li>
<li>application：四层代理日志；</li>
<li>function：边缘函数运行日志；</li>
<li>web-rateLiming：速率限制和 CC 攻击防护日志；</li>
<li>web-attack：托管规则日志；</li>
<li>web-rule：自定义规则日志；</li>
<li>web-bot：Bot管理日志。</li>
     * @param string $Area 数据投递区域，取值有：
<li>mainland：中国大陆境内；</li>
<li>overseas：全球（不含中国大陆）。</li>
     * @param array $Fields 投递的预设字段列表。取值参考：
<li>[站点加速日志（七层访问日志）](https://cloud.tencent.com/document/product/1552/105791)</li>
<li>[四层代理日志](https://cloud.tencent.com/document/product/1552/105792)</li>
<li>[边缘函数运行日志](https://cloud.tencent.com/document/product/1552/115585)</li>
     * @param array $CustomFields 投递的自定义字段列表，支持在 HTTP 请求头、响应头、Cookie、请求正文中提取指定内容。自定义字段名称不能重复，且最多不能超过 200 个字段。单个实时日志推送任务最多添加 5 个请求正文类型的自定义字段。目前仅站点加速日志（LogType=domain）支持添加自定义字段。
     * @param array $DeliveryConditions 日志投递的过滤条件，不填表示投递全量日志。
     * @param integer $Sample 采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填表示采样比例为 100%。
     * @param LogFormat $LogFormat 日志投递的输出格式。不填表示为默认格式，默认格式逻辑如下：
<li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li>
<li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines；</li>特别地，当 TaskType 取值为 cls 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。
     * @param CLSTopic $CLS CLS 的配置信息。当 TaskType 取值为 cls 时，该参数必填。
     * @param CustomEndpoint $CustomEndpoint 自定义 HTTP 服务的配置信息。当 TaskType 取值为 custom_endpoint 时，该参数必填。
     * @param S3 $S3 AWS S3 兼容存储桶的配置信息。当 TaskType 取值为 s3 时，该参数必填。
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("EntityList",$param) and $param["EntityList"] !== null) {
            $this->EntityList = $param["EntityList"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
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

        if (array_key_exists("CLS",$param) and $param["CLS"] !== null) {
            $this->CLS = new CLSTopic();
            $this->CLS->deserialize($param["CLS"]);
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
