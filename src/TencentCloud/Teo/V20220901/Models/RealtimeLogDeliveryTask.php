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
 * 实时日志投递任务。
 *
 * @method string getTaskId() 获取实时日志投递任务 ID。
 * @method void setTaskId(string $TaskId) 设置实时日志投递任务 ID。
 * @method string getTaskName() 获取实时日志投递任务的名称。
 * @method void setTaskName(string $TaskName) 设置实时日志投递任务的名称。
 * @method string getDeliveryStatus() 获取实时日志投递任务的状态，取值有： <li>enabled: 已启用；</li> <li>disabled: 已停用；</li><li>deleted: 异常删除状态，请检查目的地腾讯云 CLS 日志集/日志主题是否已被删除。</li>
 * @method void setDeliveryStatus(string $DeliveryStatus) 设置实时日志投递任务的状态，取值有： <li>enabled: 已启用；</li> <li>disabled: 已停用；</li><li>deleted: 异常删除状态，请检查目的地腾讯云 CLS 日志集/日志主题是否已被删除。</li>
 * @method string getTaskType() 获取实时日志投递任务类型，取值有： <li>cls: 推送到腾讯云 CLS；</li> <li>custom_endpoint：推送到自定义 HTTP(S) 地址；</li> <li>s3：推送到 AWS S3 兼容存储桶地址。</li>
 * @method void setTaskType(string $TaskType) 设置实时日志投递任务类型，取值有： <li>cls: 推送到腾讯云 CLS；</li> <li>custom_endpoint：推送到自定义 HTTP(S) 地址；</li> <li>s3：推送到 AWS S3 兼容存储桶地址。</li>
 * @method array getEntityList() 获取实时日志投递任务对应的实体（七层域名或者四层代理实例）列表。取值示例如下： <li>七层域名：domain.example.com；</li> <li>四层代理实例：sid-2s69eb5wcms7。</li>	
 * @method void setEntityList(array $EntityList) 设置实时日志投递任务对应的实体（七层域名或者四层代理实例）列表。取值示例如下： <li>七层域名：domain.example.com；</li> <li>四层代理实例：sid-2s69eb5wcms7。</li>	
 * @method string getLogType() 获取数据投递类型，取值有： <li>domain：站点加速日志；</li> <li>application：四层代理日志；</li> <li>web-rateLiming：速率限制和 CC 攻击防护日志；</li> <li>web-attack：托管规则日志；</li> <li>web-rule：自定义规则日志；</li> <li>web-bot：Bot管理日志。</li>
 * @method void setLogType(string $LogType) 设置数据投递类型，取值有： <li>domain：站点加速日志；</li> <li>application：四层代理日志；</li> <li>web-rateLiming：速率限制和 CC 攻击防护日志；</li> <li>web-attack：托管规则日志；</li> <li>web-rule：自定义规则日志；</li> <li>web-bot：Bot管理日志。</li>
 * @method string getArea() 获取数据投递区域，取值有： <li>mainland：中国大陆境内；</li> <li>overseas：全球（不含中国大陆）。</li>
 * @method void setArea(string $Area) 设置数据投递区域，取值有： <li>mainland：中国大陆境内；</li> <li>overseas：全球（不含中国大陆）。</li>
 * @method array getFields() 获取投递的预设字段列表。
 * @method void setFields(array $Fields) 设置投递的预设字段列表。
 * @method array getCustomFields() 获取投递的自定义字段列表。
 * @method void setCustomFields(array $CustomFields) 设置投递的自定义字段列表。
 * @method array getDeliveryConditions() 获取日志投递的过滤条件。
 * @method void setDeliveryConditions(array $DeliveryConditions) 设置日志投递的过滤条件。
 * @method integer getSample() 获取采样比例，采用千分制，取值范围为1-1000，例如：605 表示采样比例为 60.5%。
 * @method void setSample(integer $Sample) 设置采样比例，采用千分制，取值范围为1-1000，例如：605 表示采样比例为 60.5%。
 * @method LogFormat getLogFormat() 获取日志投递的输出格式。出参为 null 时表示为默认格式，默认格式逻辑如下：
<li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li>
<li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogFormat(LogFormat $LogFormat) 设置日志投递的输出格式。出参为 null 时表示为默认格式，默认格式逻辑如下：
<li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li>
<li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CLSTopic getCLS() 获取CLS 的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLS(CLSTopic $CLS) 设置CLS 的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CustomEndpoint getCustomEndpoint() 获取自定义 HTTP 服务的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomEndpoint(CustomEndpoint $CustomEndpoint) 设置自定义 HTTP 服务的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method S3 getS3() 获取AWS S3 兼容存储桶的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setS3(S3 $S3) 设置AWS S3 兼容存储桶的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 */
class RealtimeLogDeliveryTask extends AbstractModel
{
    /**
     * @var string 实时日志投递任务 ID。
     */
    public $TaskId;

    /**
     * @var string 实时日志投递任务的名称。
     */
    public $TaskName;

    /**
     * @var string 实时日志投递任务的状态，取值有： <li>enabled: 已启用；</li> <li>disabled: 已停用；</li><li>deleted: 异常删除状态，请检查目的地腾讯云 CLS 日志集/日志主题是否已被删除。</li>
     */
    public $DeliveryStatus;

    /**
     * @var string 实时日志投递任务类型，取值有： <li>cls: 推送到腾讯云 CLS；</li> <li>custom_endpoint：推送到自定义 HTTP(S) 地址；</li> <li>s3：推送到 AWS S3 兼容存储桶地址。</li>
     */
    public $TaskType;

    /**
     * @var array 实时日志投递任务对应的实体（七层域名或者四层代理实例）列表。取值示例如下： <li>七层域名：domain.example.com；</li> <li>四层代理实例：sid-2s69eb5wcms7。</li>	
     */
    public $EntityList;

    /**
     * @var string 数据投递类型，取值有： <li>domain：站点加速日志；</li> <li>application：四层代理日志；</li> <li>web-rateLiming：速率限制和 CC 攻击防护日志；</li> <li>web-attack：托管规则日志；</li> <li>web-rule：自定义规则日志；</li> <li>web-bot：Bot管理日志。</li>
     */
    public $LogType;

    /**
     * @var string 数据投递区域，取值有： <li>mainland：中国大陆境内；</li> <li>overseas：全球（不含中国大陆）。</li>
     */
    public $Area;

    /**
     * @var array 投递的预设字段列表。
     */
    public $Fields;

    /**
     * @var array 投递的自定义字段列表。
     */
    public $CustomFields;

    /**
     * @var array 日志投递的过滤条件。
     */
    public $DeliveryConditions;

    /**
     * @var integer 采样比例，采用千分制，取值范围为1-1000，例如：605 表示采样比例为 60.5%。
     */
    public $Sample;

    /**
     * @var LogFormat 日志投递的输出格式。出参为 null 时表示为默认格式，默认格式逻辑如下：
<li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li>
<li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogFormat;

    /**
     * @var CLSTopic CLS 的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLS;

    /**
     * @var CustomEndpoint 自定义 HTTP 服务的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomEndpoint;

    /**
     * @var S3 AWS S3 兼容存储桶的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $S3;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @param string $TaskId 实时日志投递任务 ID。
     * @param string $TaskName 实时日志投递任务的名称。
     * @param string $DeliveryStatus 实时日志投递任务的状态，取值有： <li>enabled: 已启用；</li> <li>disabled: 已停用；</li><li>deleted: 异常删除状态，请检查目的地腾讯云 CLS 日志集/日志主题是否已被删除。</li>
     * @param string $TaskType 实时日志投递任务类型，取值有： <li>cls: 推送到腾讯云 CLS；</li> <li>custom_endpoint：推送到自定义 HTTP(S) 地址；</li> <li>s3：推送到 AWS S3 兼容存储桶地址。</li>
     * @param array $EntityList 实时日志投递任务对应的实体（七层域名或者四层代理实例）列表。取值示例如下： <li>七层域名：domain.example.com；</li> <li>四层代理实例：sid-2s69eb5wcms7。</li>	
     * @param string $LogType 数据投递类型，取值有： <li>domain：站点加速日志；</li> <li>application：四层代理日志；</li> <li>web-rateLiming：速率限制和 CC 攻击防护日志；</li> <li>web-attack：托管规则日志；</li> <li>web-rule：自定义规则日志；</li> <li>web-bot：Bot管理日志。</li>
     * @param string $Area 数据投递区域，取值有： <li>mainland：中国大陆境内；</li> <li>overseas：全球（不含中国大陆）。</li>
     * @param array $Fields 投递的预设字段列表。
     * @param array $CustomFields 投递的自定义字段列表。
     * @param array $DeliveryConditions 日志投递的过滤条件。
     * @param integer $Sample 采样比例，采用千分制，取值范围为1-1000，例如：605 表示采样比例为 60.5%。
     * @param LogFormat $LogFormat 日志投递的输出格式。出参为 null 时表示为默认格式，默认格式逻辑如下：
<li>当 TaskType 取值为 custom_endpoint 时，默认格式为多个 JSON 对象组成的数组，每个 JSON 对象为一条日志；</li>
<li>当 TaskType 取值为 s3 时，默认格式为 JSON Lines。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CLSTopic $CLS CLS 的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CustomEndpoint $CustomEndpoint 自定义 HTTP 服务的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param S3 $S3 AWS S3 兼容存储桶的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间。
     * @param string $UpdateTime 更新时间。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("DeliveryStatus",$param) and $param["DeliveryStatus"] !== null) {
            $this->DeliveryStatus = $param["DeliveryStatus"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
