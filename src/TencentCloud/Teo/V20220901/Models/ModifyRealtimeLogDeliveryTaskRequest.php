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
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getTaskId() 获取<p>实时日志投递任务 ID。</p>
 * @method void setTaskId(string $TaskId) 设置<p>实时日志投递任务 ID。</p>
 * @method string getTaskName() 获取<p>实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。不填保持原有配置。</p>
 * @method void setTaskName(string $TaskName) 设置<p>实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。不填保持原有配置。</p>
 * @method string getDeliveryStatus() 获取<p>实时日志投递任务的状态，取值有：</p><li>enabled: 启用；</li><li>disabled: 停用。</li>不填保持原有配置。
 * @method void setDeliveryStatus(string $DeliveryStatus) 设置<p>实时日志投递任务的状态，取值有：</p><li>enabled: 启用；</li><li>disabled: 停用。</li>不填保持原有配置。
 * @method array getEntityList() 获取<p>实时日志投递任务对应的实体（七层域名或者四层代理实例）列表。取值示例如下：</p><li>七层域名：domain.example.com；</li><li>四层代理实例：sid-2s69eb5wcms7。</li>不填保持原有配置。<p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/80690">DescribeApplicationProxies</a></p>
 * @method void setEntityList(array $EntityList) 设置<p>实时日志投递任务对应的实体（七层域名或者四层代理实例）列表。取值示例如下：</p><li>七层域名：domain.example.com；</li><li>四层代理实例：sid-2s69eb5wcms7。</li>不填保持原有配置。<p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/80690">DescribeApplicationProxies</a></p>
 * @method array getFields() 获取<p>投递的预设字段列表。不填保持原有配置。</p><p>取值参考：DescribeLogFields</p>
 * @method void setFields(array $Fields) 设置<p>投递的预设字段列表。不填保持原有配置。</p><p>取值参考：DescribeLogFields</p>
 * @method array getCustomFields() 获取<p>投递的自定义日志字段列表，可以通过自定义日志推送字段名称和取值表达式，实现个性化的实时日志内容推送，详见 <a href="">自定义日志字段表达式</a>。<br>仅七层访问日志（LogType= l7-access-logs 或 domain）支持添加自定义字段，允许配置的自定义字段个数有配额限制，如遇配额不足请 <a href="https://cloud.tencent.com/online-service?from=sales&amp;source=PRESALE">联系我们</a> 。</p>
 * @method void setCustomFields(array $CustomFields) 设置<p>投递的自定义日志字段列表，可以通过自定义日志推送字段名称和取值表达式，实现个性化的实时日志内容推送，详见 <a href="">自定义日志字段表达式</a>。<br>仅七层访问日志（LogType= l7-access-logs 或 domain）支持添加自定义字段，允许配置的自定义字段个数有配额限制，如遇配额不足请 <a href="https://cloud.tencent.com/online-service?from=sales&amp;source=PRESALE">联系我们</a> 。</p>
 * @method array getCustomExpressionFields() 获取<p>投递的自定义表达式字段列表，可以通过自定义日志推送字段名称和取值表达式，实现个性化的实时日志内容推送，使用详情见 [自定义日志字段表达式]()。<br>仅七层访问日志（LogType= l7-access-logs 或 domain）支持添加自定义字段。允许配置的自定义字段个数有配额限制，如遇配额不足请 [联系我们](https://cloud.tencent.com/online-service?from=sales&amp;source=PRESALE) 。<br>**注意**：若 CustomExpressionFields 中存在命名 与 Fields 和 CustomFields 中同名的字段，以  CustomExpressionFields 中的取值为准。</p>
 * @method void setCustomExpressionFields(array $CustomExpressionFields) 设置<p>投递的自定义表达式字段列表，可以通过自定义日志推送字段名称和取值表达式，实现个性化的实时日志内容推送，使用详情见 [自定义日志字段表达式]()。<br>仅七层访问日志（LogType= l7-access-logs 或 domain）支持添加自定义字段。允许配置的自定义字段个数有配额限制，如遇配额不足请 [联系我们](https://cloud.tencent.com/online-service?from=sales&amp;source=PRESALE) 。<br>**注意**：若 CustomExpressionFields 中存在命名 与 Fields 和 CustomFields 中同名的字段，以  CustomExpressionFields 中的取值为准。</p>
 * @method array getDeliveryConditions() 获取<p>日志投递的过滤条件。不填表示投递全量日志。</p>
 * @method void setDeliveryConditions(array $DeliveryConditions) 设置<p>日志投递的过滤条件。不填表示投递全量日志。</p>
 * @method integer getSample() 获取<p>采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填保持原有配置。</p>
 * @method void setSample(integer $Sample) 设置<p>采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填保持原有配置。</p>
 * @method LogFormat getLogFormat() 获取<p>日志投递的输出格式，使用详情见 <a href="https://cloud.tencent.com/document/product/1552/110448">自定义日志输出格式</a>。不填表示为默认格式，默认格式逻辑如下：<ul><li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li><li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines；</li></ul>特别地，当 TaskType 取值为 cls 或 log_analysis 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。</p>
 * @method void setLogFormat(LogFormat $LogFormat) 设置<p>日志投递的输出格式，使用详情见 <a href="https://cloud.tencent.com/document/product/1552/110448">自定义日志输出格式</a>。不填表示为默认格式，默认格式逻辑如下：<ul><li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li><li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines；</li></ul>特别地，当 TaskType 取值为 cls 或 log_analysis 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。</p>
 * @method CustomEndpoint getCustomEndpoint() 获取<p>自定义 HTTP 服务的配置信息，不填保持原有配置。</p>
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) 设置<p>自定义 HTTP 服务的配置信息，不填保持原有配置。</p>
 * @method S3 getS3() 获取<p>AWS S3 兼容存储桶的配置信息，不填保持原有配置。</p>
 * @method void setS3(S3 $S3) 设置<p>AWS S3 兼容存储桶的配置信息，不填保持原有配置。</p>
 */
class ModifyRealtimeLogDeliveryTaskRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>实时日志投递任务 ID。</p>
     */
    public $TaskId;

    /**
     * @var string <p>实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。不填保持原有配置。</p>
     */
    public $TaskName;

    /**
     * @var string <p>实时日志投递任务的状态，取值有：</p><li>enabled: 启用；</li><li>disabled: 停用。</li>不填保持原有配置。
     */
    public $DeliveryStatus;

    /**
     * @var array <p>实时日志投递任务对应的实体（七层域名或者四层代理实例）列表。取值示例如下：</p><li>七层域名：domain.example.com；</li><li>四层代理实例：sid-2s69eb5wcms7。</li>不填保持原有配置。<p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/80690">DescribeApplicationProxies</a></p>
     */
    public $EntityList;

    /**
     * @var array <p>投递的预设字段列表。不填保持原有配置。</p><p>取值参考：DescribeLogFields</p>
     */
    public $Fields;

    /**
     * @var array <p>投递的自定义日志字段列表，可以通过自定义日志推送字段名称和取值表达式，实现个性化的实时日志内容推送，详见 <a href="">自定义日志字段表达式</a>。<br>仅七层访问日志（LogType= l7-access-logs 或 domain）支持添加自定义字段，允许配置的自定义字段个数有配额限制，如遇配额不足请 <a href="https://cloud.tencent.com/online-service?from=sales&amp;source=PRESALE">联系我们</a> 。</p>
     */
    public $CustomFields;

    /**
     * @var array <p>投递的自定义表达式字段列表，可以通过自定义日志推送字段名称和取值表达式，实现个性化的实时日志内容推送，使用详情见 [自定义日志字段表达式]()。<br>仅七层访问日志（LogType= l7-access-logs 或 domain）支持添加自定义字段。允许配置的自定义字段个数有配额限制，如遇配额不足请 [联系我们](https://cloud.tencent.com/online-service?from=sales&amp;source=PRESALE) 。<br>**注意**：若 CustomExpressionFields 中存在命名 与 Fields 和 CustomFields 中同名的字段，以  CustomExpressionFields 中的取值为准。</p>
     */
    public $CustomExpressionFields;

    /**
     * @var array <p>日志投递的过滤条件。不填表示投递全量日志。</p>
     */
    public $DeliveryConditions;

    /**
     * @var integer <p>采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填保持原有配置。</p>
     */
    public $Sample;

    /**
     * @var LogFormat <p>日志投递的输出格式，使用详情见 <a href="https://cloud.tencent.com/document/product/1552/110448">自定义日志输出格式</a>。不填表示为默认格式，默认格式逻辑如下：<ul><li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li><li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines；</li></ul>特别地，当 TaskType 取值为 cls 或 log_analysis 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。</p>
     */
    public $LogFormat;

    /**
     * @var CustomEndpoint <p>自定义 HTTP 服务的配置信息，不填保持原有配置。</p>
     */
    public $CustomEndpoint;

    /**
     * @var S3 <p>AWS S3 兼容存储桶的配置信息，不填保持原有配置。</p>
     */
    public $S3;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $TaskId <p>实时日志投递任务 ID。</p>
     * @param string $TaskName <p>实时日志投递任务的名称，格式为数字、英文、-和_组合，最多 200 个字符。不填保持原有配置。</p>
     * @param string $DeliveryStatus <p>实时日志投递任务的状态，取值有：</p><li>enabled: 启用；</li><li>disabled: 停用。</li>不填保持原有配置。
     * @param array $EntityList <p>实时日志投递任务对应的实体（七层域名或者四层代理实例）列表。取值示例如下：</p><li>七层域名：domain.example.com；</li><li>四层代理实例：sid-2s69eb5wcms7。</li>不填保持原有配置。<p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/80690">DescribeApplicationProxies</a></p>
     * @param array $Fields <p>投递的预设字段列表。不填保持原有配置。</p><p>取值参考：DescribeLogFields</p>
     * @param array $CustomFields <p>投递的自定义日志字段列表，可以通过自定义日志推送字段名称和取值表达式，实现个性化的实时日志内容推送，详见 <a href="">自定义日志字段表达式</a>。<br>仅七层访问日志（LogType= l7-access-logs 或 domain）支持添加自定义字段，允许配置的自定义字段个数有配额限制，如遇配额不足请 <a href="https://cloud.tencent.com/online-service?from=sales&amp;source=PRESALE">联系我们</a> 。</p>
     * @param array $CustomExpressionFields <p>投递的自定义表达式字段列表，可以通过自定义日志推送字段名称和取值表达式，实现个性化的实时日志内容推送，使用详情见 [自定义日志字段表达式]()。<br>仅七层访问日志（LogType= l7-access-logs 或 domain）支持添加自定义字段。允许配置的自定义字段个数有配额限制，如遇配额不足请 [联系我们](https://cloud.tencent.com/online-service?from=sales&amp;source=PRESALE) 。<br>**注意**：若 CustomExpressionFields 中存在命名 与 Fields 和 CustomFields 中同名的字段，以  CustomExpressionFields 中的取值为准。</p>
     * @param array $DeliveryConditions <p>日志投递的过滤条件。不填表示投递全量日志。</p>
     * @param integer $Sample <p>采样比例，采用千分制，取值范围为1-1000，例如：填写 605 表示采样比例为 60.5%。不填保持原有配置。</p>
     * @param LogFormat $LogFormat <p>日志投递的输出格式，使用详情见 <a href="https://cloud.tencent.com/document/product/1552/110448">自定义日志输出格式</a>。不填表示为默认格式，默认格式逻辑如下：<ul><li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li><li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines；</li></ul>特别地，当 TaskType 取值为 cls 或 log_analysis 时，LogFormat.FormatType 的值只能为 json，且 LogFormat 中其他参数将被忽略，建议不传 LogFormat。</p>
     * @param CustomEndpoint $CustomEndpoint <p>自定义 HTTP 服务的配置信息，不填保持原有配置。</p>
     * @param S3 $S3 <p>AWS S3 兼容存储桶的配置信息，不填保持原有配置。</p>
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

        if (array_key_exists("CustomExpressionFields",$param) and $param["CustomExpressionFields"] !== null) {
            $this->CustomExpressionFields = [];
            foreach ($param["CustomExpressionFields"] as $key => $value){
                $obj = new CustomExpressionField();
                $obj->deserialize($value);
                array_push($this->CustomExpressionFields, $obj);
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
