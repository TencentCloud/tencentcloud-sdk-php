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
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getArea() 获取<p>数据投递区域，可选值：<ul><li>mainland：中国大陆境内；</li><li>overseas：全球（不含中国大陆）。</li></ul></p>
 * @method void setArea(string $Area) 设置<p>数据投递区域，可选值：<ul><li>mainland：中国大陆境内；</li><li>overseas：全球（不含中国大陆）。</li></ul></p>
 * @method string getLogType() 获取<p>数据投递类型，可选值：<ul><li>l7-access-logs：七层访问日志；</li><li>application：四层代理日志；</li><li>function：边缘函数运行日志；</li><li>web-attack：托管规则日志；</li></ul>以下类型日志合并入 l7-access-logs，不再支持新增：</p><ul><li>domain：站点加速日志；</li><li>web-rateLiming：速率限制和 CC 攻击防护日志；</li><li>web-rule：自定义规则日志；</li><li>web-bot：Bot 管理日志。</li></ul>
 * @method void setLogType(string $LogType) 设置<p>数据投递类型，可选值：<ul><li>l7-access-logs：七层访问日志；</li><li>application：四层代理日志；</li><li>function：边缘函数运行日志；</li><li>web-attack：托管规则日志；</li></ul>以下类型日志合并入 l7-access-logs，不再支持新增：</p><ul><li>domain：站点加速日志；</li><li>web-rateLiming：速率限制和 CC 攻击防护日志；</li><li>web-rule：自定义规则日志；</li><li>web-bot：Bot 管理日志。</li></ul>
 * @method string getTaskName() 获取<p>实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。</p>
 * @method void setTaskName(string $TaskName) 设置<p>实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。</p>
 * @method string getTaskType() 获取<p>实时日志投递任务类型，取值有：<ul><li>cls: 推送到腾讯云 CLS；</li><li>custom_endpoint：推送到自定义 HTTP(S) 地址；</li><li>s3：推送到 AWS S3 兼容存储桶地址；</li><li>log_analysis：推送到 EdgeOne 日志分析，仅当 LogType = l7-access-logs 或 web-attack 时支持。</li></ul></p>
 * @method void setTaskType(string $TaskType) 设置<p>实时日志投递任务类型，取值有：<ul><li>cls: 推送到腾讯云 CLS；</li><li>custom_endpoint：推送到自定义 HTTP(S) 地址；</li><li>s3：推送到 AWS S3 兼容存储桶地址；</li><li>log_analysis：推送到 EdgeOne 日志分析，仅当 LogType = l7-access-logs 或 web-attack 时支持。</li></ul></p>
 * @method array getEntityList() 获取<p>实时日志投递任务对应的实体列表。取值示例如下：<ul><li>七层域名：domain.example.com</li><li>四层代理实例：sid-2s69eb5wcms7</li><li>边缘函数实例：test-zone-2mxigizoh9l9-1257626257</li></ul></p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/103413">DescribeL4Proxy</a></p>
 * @method void setEntityList(array $EntityList) 设置<p>实时日志投递任务对应的实体列表。取值示例如下：<ul><li>七层域名：domain.example.com</li><li>四层代理实例：sid-2s69eb5wcms7</li><li>边缘函数实例：test-zone-2mxigizoh9l9-1257626257</li></ul></p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/103413">DescribeL4Proxy</a></p>
 * @method array getFields() 获取<p>投递的预设字段列表。取值参考：<ul><li><a href="https://cloud.tencent.com/document/product/1552/105791">七层访问日志（站点加速日志）</a></li><li><a href="https://cloud.tencent.com/document/product/1552/105792">四层代理日志</a></li><li><a href="https://cloud.tencent.com/document/product/1552/115585">边缘函数运行日志</a></li></ul></p><p>取值参考：DescribeLogFields</p>
 * @method void setFields(array $Fields) 设置<p>投递的预设字段列表。取值参考：<ul><li><a href="https://cloud.tencent.com/document/product/1552/105791">七层访问日志（站点加速日志）</a></li><li><a href="https://cloud.tencent.com/document/product/1552/105792">四层代理日志</a></li><li><a href="https://cloud.tencent.com/document/product/1552/115585">边缘函数运行日志</a></li></ul></p><p>取值参考：DescribeLogFields</p>
 * @method array getCustomFields() 获取<p>投递的自定义字段列表，支持在 HTTP 请求头、响应头、Cookie、请求正文中提取指定内容。<br>自定义字段名称不能重复，仅七层访问日志（LogType= l7-access-logs 或 domain）支持添加自定义字段。<br>允许配置的自定义字段个数有配额限制，如遇配额不足请 [联系我们](https://cloud.tencent.com/online-service?from=sales&amp;source=PRESALE)。</p>
 * @method void setCustomFields(array $CustomFields) 设置<p>投递的自定义字段列表，支持在 HTTP 请求头、响应头、Cookie、请求正文中提取指定内容。<br>自定义字段名称不能重复，仅七层访问日志（LogType= l7-access-logs 或 domain）支持添加自定义字段。<br>允许配置的自定义字段个数有配额限制，如遇配额不足请 [联系我们](https://cloud.tencent.com/online-service?from=sales&amp;source=PRESALE)。</p>
 * @method array getDeliveryConditions() 获取<p>日志投递的过滤条件，不填表示投递全量日志。</p>
 * @method void setDeliveryConditions(array $DeliveryConditions) 设置<p>日志投递的过滤条件，不填表示投递全量日志。</p>
 * @method integer getSample() 获取<p>采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填表示采样比例为 100%。</p>
 * @method void setSample(integer $Sample) 设置<p>采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填表示采样比例为 100%。</p>
 * @method LogFormat getLogFormat() 获取<p>日志投递的输出格式，使用详情见 <a href="https://cloud.tencent.com/document/product/1552/110448">自定义日志输出格式</a>。不填表示为默认格式，默认格式逻辑如下：<ul><li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li><li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines；</li></ul>特别地，当 TaskType 取值为 cls 或 log_analysis 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。</p>
 * @method void setLogFormat(LogFormat $LogFormat) 设置<p>日志投递的输出格式，使用详情见 <a href="https://cloud.tencent.com/document/product/1552/110448">自定义日志输出格式</a>。不填表示为默认格式，默认格式逻辑如下：<ul><li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li><li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines；</li></ul>特别地，当 TaskType 取值为 cls 或 log_analysis 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。</p>
 * @method CLSTopic getCLS() 获取<p>CLS 的配置信息。当 TaskType 取值为 cls 时，该参数必填。</p>
 * @method void setCLS(CLSTopic $CLS) 设置<p>CLS 的配置信息。当 TaskType 取值为 cls 时，该参数必填。</p>
 * @method CustomEndpoint getCustomEndpoint() 获取<p>自定义 HTTP 服务的配置信息。当 TaskType 取值为 custom_endpoint 时，该参数必填。</p>
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) 设置<p>自定义 HTTP 服务的配置信息。当 TaskType 取值为 custom_endpoint 时，该参数必填。</p>
 * @method S3 getS3() 获取<p>AWS S3 兼容存储桶的配置信息。当 TaskType 取值为 s3 时，该参数必填。</p>
 * @method void setS3(S3 $S3) 设置<p>AWS S3 兼容存储桶的配置信息。当 TaskType 取值为 s3 时，该参数必填。</p>
 */
class CreateRealtimeLogDeliveryTaskRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>数据投递区域，可选值：<ul><li>mainland：中国大陆境内；</li><li>overseas：全球（不含中国大陆）。</li></ul></p>
     */
    public $Area;

    /**
     * @var string <p>数据投递类型，可选值：<ul><li>l7-access-logs：七层访问日志；</li><li>application：四层代理日志；</li><li>function：边缘函数运行日志；</li><li>web-attack：托管规则日志；</li></ul>以下类型日志合并入 l7-access-logs，不再支持新增：</p><ul><li>domain：站点加速日志；</li><li>web-rateLiming：速率限制和 CC 攻击防护日志；</li><li>web-rule：自定义规则日志；</li><li>web-bot：Bot 管理日志。</li></ul>
     */
    public $LogType;

    /**
     * @var string <p>实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。</p>
     */
    public $TaskName;

    /**
     * @var string <p>实时日志投递任务类型，取值有：<ul><li>cls: 推送到腾讯云 CLS；</li><li>custom_endpoint：推送到自定义 HTTP(S) 地址；</li><li>s3：推送到 AWS S3 兼容存储桶地址；</li><li>log_analysis：推送到 EdgeOne 日志分析，仅当 LogType = l7-access-logs 或 web-attack 时支持。</li></ul></p>
     */
    public $TaskType;

    /**
     * @var array <p>实时日志投递任务对应的实体列表。取值示例如下：<ul><li>七层域名：domain.example.com</li><li>四层代理实例：sid-2s69eb5wcms7</li><li>边缘函数实例：test-zone-2mxigizoh9l9-1257626257</li></ul></p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/103413">DescribeL4Proxy</a></p>
     */
    public $EntityList;

    /**
     * @var array <p>投递的预设字段列表。取值参考：<ul><li><a href="https://cloud.tencent.com/document/product/1552/105791">七层访问日志（站点加速日志）</a></li><li><a href="https://cloud.tencent.com/document/product/1552/105792">四层代理日志</a></li><li><a href="https://cloud.tencent.com/document/product/1552/115585">边缘函数运行日志</a></li></ul></p><p>取值参考：DescribeLogFields</p>
     */
    public $Fields;

    /**
     * @var array <p>投递的自定义字段列表，支持在 HTTP 请求头、响应头、Cookie、请求正文中提取指定内容。<br>自定义字段名称不能重复，仅七层访问日志（LogType= l7-access-logs 或 domain）支持添加自定义字段。<br>允许配置的自定义字段个数有配额限制，如遇配额不足请 [联系我们](https://cloud.tencent.com/online-service?from=sales&amp;source=PRESALE)。</p>
     */
    public $CustomFields;

    /**
     * @var array <p>日志投递的过滤条件，不填表示投递全量日志。</p>
     */
    public $DeliveryConditions;

    /**
     * @var integer <p>采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填表示采样比例为 100%。</p>
     */
    public $Sample;

    /**
     * @var LogFormat <p>日志投递的输出格式，使用详情见 <a href="https://cloud.tencent.com/document/product/1552/110448">自定义日志输出格式</a>。不填表示为默认格式，默认格式逻辑如下：<ul><li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li><li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines；</li></ul>特别地，当 TaskType 取值为 cls 或 log_analysis 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。</p>
     */
    public $LogFormat;

    /**
     * @var CLSTopic <p>CLS 的配置信息。当 TaskType 取值为 cls 时，该参数必填。</p>
     */
    public $CLS;

    /**
     * @var CustomEndpoint <p>自定义 HTTP 服务的配置信息。当 TaskType 取值为 custom_endpoint 时，该参数必填。</p>
     */
    public $CustomEndpoint;

    /**
     * @var S3 <p>AWS S3 兼容存储桶的配置信息。当 TaskType 取值为 s3 时，该参数必填。</p>
     */
    public $S3;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $Area <p>数据投递区域，可选值：<ul><li>mainland：中国大陆境内；</li><li>overseas：全球（不含中国大陆）。</li></ul></p>
     * @param string $LogType <p>数据投递类型，可选值：<ul><li>l7-access-logs：七层访问日志；</li><li>application：四层代理日志；</li><li>function：边缘函数运行日志；</li><li>web-attack：托管规则日志；</li></ul>以下类型日志合并入 l7-access-logs，不再支持新增：</p><ul><li>domain：站点加速日志；</li><li>web-rateLiming：速率限制和 CC 攻击防护日志；</li><li>web-rule：自定义规则日志；</li><li>web-bot：Bot 管理日志。</li></ul>
     * @param string $TaskName <p>实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。</p>
     * @param string $TaskType <p>实时日志投递任务类型，取值有：<ul><li>cls: 推送到腾讯云 CLS；</li><li>custom_endpoint：推送到自定义 HTTP(S) 地址；</li><li>s3：推送到 AWS S3 兼容存储桶地址；</li><li>log_analysis：推送到 EdgeOne 日志分析，仅当 LogType = l7-access-logs 或 web-attack 时支持。</li></ul></p>
     * @param array $EntityList <p>实时日志投递任务对应的实体列表。取值示例如下：<ul><li>七层域名：domain.example.com</li><li>四层代理实例：sid-2s69eb5wcms7</li><li>边缘函数实例：test-zone-2mxigizoh9l9-1257626257</li></ul></p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/103413">DescribeL4Proxy</a></p>
     * @param array $Fields <p>投递的预设字段列表。取值参考：<ul><li><a href="https://cloud.tencent.com/document/product/1552/105791">七层访问日志（站点加速日志）</a></li><li><a href="https://cloud.tencent.com/document/product/1552/105792">四层代理日志</a></li><li><a href="https://cloud.tencent.com/document/product/1552/115585">边缘函数运行日志</a></li></ul></p><p>取值参考：DescribeLogFields</p>
     * @param array $CustomFields <p>投递的自定义字段列表，支持在 HTTP 请求头、响应头、Cookie、请求正文中提取指定内容。<br>自定义字段名称不能重复，仅七层访问日志（LogType= l7-access-logs 或 domain）支持添加自定义字段。<br>允许配置的自定义字段个数有配额限制，如遇配额不足请 [联系我们](https://cloud.tencent.com/online-service?from=sales&amp;source=PRESALE)。</p>
     * @param array $DeliveryConditions <p>日志投递的过滤条件，不填表示投递全量日志。</p>
     * @param integer $Sample <p>采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填表示采样比例为 100%。</p>
     * @param LogFormat $LogFormat <p>日志投递的输出格式，使用详情见 <a href="https://cloud.tencent.com/document/product/1552/110448">自定义日志输出格式</a>。不填表示为默认格式，默认格式逻辑如下：<ul><li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li><li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines；</li></ul>特别地，当 TaskType 取值为 cls 或 log_analysis 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。</p>
     * @param CLSTopic $CLS <p>CLS 的配置信息。当 TaskType 取值为 cls 时，该参数必填。</p>
     * @param CustomEndpoint $CustomEndpoint <p>自定义 HTTP 服务的配置信息。当 TaskType 取值为 custom_endpoint 时，该参数必填。</p>
     * @param S3 $S3 <p>AWS S3 兼容存储桶的配置信息。当 TaskType 取值为 s3 时，该参数必填。</p>
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
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
