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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFlowLog请求参数结构体
 *
 * @method string getFlowLogName() 获取流日志实例名称。长度为不超过60个字符。
 * @method void setFlowLogName(string $FlowLogName) 设置流日志实例名称。长度为不超过60个字符。
 * @method string getResourceType() 获取流日志所属资源类型，NETWORKINTERFACE（网卡），CCN（云联网），NAT（网络地址转化），DCG（专线网关）。当选择CCN，DCG时，请通过工单加入白名单。
 * @method void setResourceType(string $ResourceType) 设置流日志所属资源类型，NETWORKINTERFACE（网卡），CCN（云联网），NAT（网络地址转化），DCG（专线网关）。当选择CCN，DCG时，请通过工单加入白名单。
 * @method string getResourceId() 获取资源唯一ID。
 * @method void setResourceId(string $ResourceId) 设置资源唯一ID。
 * @method string getTrafficType() 获取流日志采集类型，ACCEPT（允许），REJECT（拒绝），ALL（全部）。
 * @method void setTrafficType(string $TrafficType) 设置流日志采集类型，ACCEPT（允许），REJECT（拒绝），ALL（全部）。
 * @method string getVpcId() 获取私用网络唯一ID。当ResourceType为CCN时不填，其他类型必填。
 * @method void setVpcId(string $VpcId) 设置私用网络唯一ID。当ResourceType为CCN时不填，其他类型必填。
 * @method string getFlowLogDescription() 获取流日志实例描述。长度不超过512个字符。
 * @method void setFlowLogDescription(string $FlowLogDescription) 设置流日志实例描述。长度不超过512个字符。
 * @method string getCloudLogId() 获取流日志存储ID（cls的日志主题ID，
可通过[DescribeTopics](https://cloud.tencent.com/document/product/614/56454)接口获取）。当StorageType为cls时，CloudLogId为必选。
 * @method void setCloudLogId(string $CloudLogId) 设置流日志存储ID（cls的日志主题ID，
可通过[DescribeTopics](https://cloud.tencent.com/document/product/614/56454)接口获取）。当StorageType为cls时，CloudLogId为必选。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method string getStorageType() 获取消费端类型：cls、ckafka。默认值cls。当选择ckafka时，请通过工单加入白名单。
 * @method void setStorageType(string $StorageType) 设置消费端类型：cls、ckafka。默认值cls。当选择ckafka时，请通过工单加入白名单。
 * @method FlowLogStorage getFlowLogStorage() 获取流日志消费端信息，当消费端类型为ckafka时，必填。
 * @method void setFlowLogStorage(FlowLogStorage $FlowLogStorage) 设置流日志消费端信息，当消费端类型为ckafka时，必填。
 * @method string getCloudLogRegion() 获取流日志存储ID对应的地域，不传递默认为本地域。
 * @method void setCloudLogRegion(string $CloudLogRegion) 设置流日志存储ID对应的地域，不传递默认为本地域。
 * @method integer getPeriod() 获取流日志采集周期，只支持CCN类型流日志。取值范围（单位s）：60， 300， 600。
 * @method void setPeriod(integer $Period) 设置流日志采集周期，只支持CCN类型流日志。取值范围（单位s）：60， 300， 600。
 */
class CreateFlowLogRequest extends AbstractModel
{
    /**
     * @var string 流日志实例名称。长度为不超过60个字符。
     */
    public $FlowLogName;

    /**
     * @var string 流日志所属资源类型，NETWORKINTERFACE（网卡），CCN（云联网），NAT（网络地址转化），DCG（专线网关）。当选择CCN，DCG时，请通过工单加入白名单。
     */
    public $ResourceType;

    /**
     * @var string 资源唯一ID。
     */
    public $ResourceId;

    /**
     * @var string 流日志采集类型，ACCEPT（允许），REJECT（拒绝），ALL（全部）。
     */
    public $TrafficType;

    /**
     * @var string 私用网络唯一ID。当ResourceType为CCN时不填，其他类型必填。
     */
    public $VpcId;

    /**
     * @var string 流日志实例描述。长度不超过512个字符。
     */
    public $FlowLogDescription;

    /**
     * @var string 流日志存储ID（cls的日志主题ID，
可通过[DescribeTopics](https://cloud.tencent.com/document/product/614/56454)接口获取）。当StorageType为cls时，CloudLogId为必选。
     */
    public $CloudLogId;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
     */
    public $Tags;

    /**
     * @var string 消费端类型：cls、ckafka。默认值cls。当选择ckafka时，请通过工单加入白名单。
     */
    public $StorageType;

    /**
     * @var FlowLogStorage 流日志消费端信息，当消费端类型为ckafka时，必填。
     */
    public $FlowLogStorage;

    /**
     * @var string 流日志存储ID对应的地域，不传递默认为本地域。
     */
    public $CloudLogRegion;

    /**
     * @var integer 流日志采集周期，只支持CCN类型流日志。取值范围（单位s）：60， 300， 600。
     */
    public $Period;

    /**
     * @param string $FlowLogName 流日志实例名称。长度为不超过60个字符。
     * @param string $ResourceType 流日志所属资源类型，NETWORKINTERFACE（网卡），CCN（云联网），NAT（网络地址转化），DCG（专线网关）。当选择CCN，DCG时，请通过工单加入白名单。
     * @param string $ResourceId 资源唯一ID。
     * @param string $TrafficType 流日志采集类型，ACCEPT（允许），REJECT（拒绝），ALL（全部）。
     * @param string $VpcId 私用网络唯一ID。当ResourceType为CCN时不填，其他类型必填。
     * @param string $FlowLogDescription 流日志实例描述。长度不超过512个字符。
     * @param string $CloudLogId 流日志存储ID（cls的日志主题ID，
可通过[DescribeTopics](https://cloud.tencent.com/document/product/614/56454)接口获取）。当StorageType为cls时，CloudLogId为必选。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
     * @param string $StorageType 消费端类型：cls、ckafka。默认值cls。当选择ckafka时，请通过工单加入白名单。
     * @param FlowLogStorage $FlowLogStorage 流日志消费端信息，当消费端类型为ckafka时，必填。
     * @param string $CloudLogRegion 流日志存储ID对应的地域，不传递默认为本地域。
     * @param integer $Period 流日志采集周期，只支持CCN类型流日志。取值范围（单位s）：60， 300， 600。
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
        if (array_key_exists("FlowLogName",$param) and $param["FlowLogName"] !== null) {
            $this->FlowLogName = $param["FlowLogName"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TrafficType",$param) and $param["TrafficType"] !== null) {
            $this->TrafficType = $param["TrafficType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("FlowLogDescription",$param) and $param["FlowLogDescription"] !== null) {
            $this->FlowLogDescription = $param["FlowLogDescription"];
        }

        if (array_key_exists("CloudLogId",$param) and $param["CloudLogId"] !== null) {
            $this->CloudLogId = $param["CloudLogId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("FlowLogStorage",$param) and $param["FlowLogStorage"] !== null) {
            $this->FlowLogStorage = new FlowLogStorage();
            $this->FlowLogStorage->deserialize($param["FlowLogStorage"]);
        }

        if (array_key_exists("CloudLogRegion",$param) and $param["CloudLogRegion"] !== null) {
            $this->CloudLogRegion = $param["CloudLogRegion"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
