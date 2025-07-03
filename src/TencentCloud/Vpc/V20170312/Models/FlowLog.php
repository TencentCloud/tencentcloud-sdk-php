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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流日志
 *
 * @method string getVpcId() 获取私用网络唯一ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。
 * @method void setVpcId(string $VpcId) 设置私用网络唯一ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。
 * @method string getFlowLogId() 获取流日志唯一ID。
 * @method void setFlowLogId(string $FlowLogId) 设置流日志唯一ID。
 * @method string getFlowLogName() 获取流日志实例名字。
 * @method void setFlowLogName(string $FlowLogName) 设置流日志实例名字。
 * @method string getResourceType() 获取流日志所属资源类型：VPC(私有网络)，SUBNET（子网），NETWORKINTERFACE（网卡），CCN（云联网），NAT（网络地址转化），DCG（专线网关）。
 * @method void setResourceType(string $ResourceType) 设置流日志所属资源类型：VPC(私有网络)，SUBNET（子网），NETWORKINTERFACE（网卡），CCN（云联网），NAT（网络地址转化），DCG（专线网关）。
 * @method string getResourceId() 获取资源唯一ID。
 * @method void setResourceId(string $ResourceId) 设置资源唯一ID。
 * @method string getTrafficType() 获取流日志采集类型，ACCEPT（允许），REJECT（拒绝），ALL（全部）。
 * @method void setTrafficType(string $TrafficType) 设置流日志采集类型，ACCEPT（允许），REJECT（拒绝），ALL（全部）。
 * @method string getCloudLogId() 获取流日志存储ID。
 * @method void setCloudLogId(string $CloudLogId) 设置流日志存储ID。
 * @method string getCloudLogState() 获取流日志存储ID状态。SUCCESS（成功），DELETED（删除）。
 * @method void setCloudLogState(string $CloudLogState) 设置流日志存储ID状态。SUCCESS（成功），DELETED（删除）。
 * @method string getFlowLogDescription() 获取流日志描述信息。
 * @method void setFlowLogDescription(string $FlowLogDescription) 设置流日志描述信息。
 * @method string getCreatedTime() 获取流日志创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置流日志创建时间。
 * @method array getTagSet() 获取标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method void setTagSet(array $TagSet) 设置标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method boolean getEnable() 获取是否启用，true-启用，false-停用。
 * @method void setEnable(boolean $Enable) 设置是否启用，true-启用，false-停用。
 * @method string getStorageType() 获取消费端类型：cls、ckafka。
 * @method void setStorageType(string $StorageType) 设置消费端类型：cls、ckafka。
 * @method FlowLogStorage getFlowLogStorage() 获取消费端信息，当消费端类型为ckafka时返回。
 * @method void setFlowLogStorage(FlowLogStorage $FlowLogStorage) 设置消费端信息，当消费端类型为ckafka时返回。
 * @method string getCloudLogRegion() 获取流日志存储ID对应的地域信息。
 * @method void setCloudLogRegion(string $CloudLogRegion) 设置流日志存储ID对应的地域信息。
 */
class FlowLog extends AbstractModel
{
    /**
     * @var string 私用网络唯一ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。
     */
    public $VpcId;

    /**
     * @var string 流日志唯一ID。
     */
    public $FlowLogId;

    /**
     * @var string 流日志实例名字。
     */
    public $FlowLogName;

    /**
     * @var string 流日志所属资源类型：VPC(私有网络)，SUBNET（子网），NETWORKINTERFACE（网卡），CCN（云联网），NAT（网络地址转化），DCG（专线网关）。
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
     * @var string 流日志存储ID。
     */
    public $CloudLogId;

    /**
     * @var string 流日志存储ID状态。SUCCESS（成功），DELETED（删除）。
     */
    public $CloudLogState;

    /**
     * @var string 流日志描述信息。
     */
    public $FlowLogDescription;

    /**
     * @var string 流日志创建时间。
     */
    public $CreatedTime;

    /**
     * @var array 标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
     */
    public $TagSet;

    /**
     * @var boolean 是否启用，true-启用，false-停用。
     */
    public $Enable;

    /**
     * @var string 消费端类型：cls、ckafka。
     */
    public $StorageType;

    /**
     * @var FlowLogStorage 消费端信息，当消费端类型为ckafka时返回。
     */
    public $FlowLogStorage;

    /**
     * @var string 流日志存储ID对应的地域信息。
     */
    public $CloudLogRegion;

    /**
     * @param string $VpcId 私用网络唯一ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。
     * @param string $FlowLogId 流日志唯一ID。
     * @param string $FlowLogName 流日志实例名字。
     * @param string $ResourceType 流日志所属资源类型：VPC(私有网络)，SUBNET（子网），NETWORKINTERFACE（网卡），CCN（云联网），NAT（网络地址转化），DCG（专线网关）。
     * @param string $ResourceId 资源唯一ID。
     * @param string $TrafficType 流日志采集类型，ACCEPT（允许），REJECT（拒绝），ALL（全部）。
     * @param string $CloudLogId 流日志存储ID。
     * @param string $CloudLogState 流日志存储ID状态。SUCCESS（成功），DELETED（删除）。
     * @param string $FlowLogDescription 流日志描述信息。
     * @param string $CreatedTime 流日志创建时间。
     * @param array $TagSet 标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
     * @param boolean $Enable 是否启用，true-启用，false-停用。
     * @param string $StorageType 消费端类型：cls、ckafka。
     * @param FlowLogStorage $FlowLogStorage 消费端信息，当消费端类型为ckafka时返回。
     * @param string $CloudLogRegion 流日志存储ID对应的地域信息。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("FlowLogId",$param) and $param["FlowLogId"] !== null) {
            $this->FlowLogId = $param["FlowLogId"];
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

        if (array_key_exists("CloudLogId",$param) and $param["CloudLogId"] !== null) {
            $this->CloudLogId = $param["CloudLogId"];
        }

        if (array_key_exists("CloudLogState",$param) and $param["CloudLogState"] !== null) {
            $this->CloudLogState = $param["CloudLogState"];
        }

        if (array_key_exists("FlowLogDescription",$param) and $param["FlowLogDescription"] !== null) {
            $this->FlowLogDescription = $param["FlowLogDescription"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
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
    }
}
