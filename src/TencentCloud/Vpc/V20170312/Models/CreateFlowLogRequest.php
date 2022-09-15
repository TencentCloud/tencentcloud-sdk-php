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
 * CreateFlowLog请求参数结构体
 *
 * @method string getFlowLogName() 获取流日志实例名字
 * @method void setFlowLogName(string $FlowLogName) 设置流日志实例名字
 * @method string getResourceType() 获取流日志所属资源类型，VPC|SUBNET|NETWORKINTERFACE|CCN|NAT|DCG
 * @method void setResourceType(string $ResourceType) 设置流日志所属资源类型，VPC|SUBNET|NETWORKINTERFACE|CCN|NAT|DCG
 * @method string getResourceId() 获取资源唯一ID
 * @method void setResourceId(string $ResourceId) 设置资源唯一ID
 * @method string getTrafficType() 获取流日志采集类型，ACCEPT|REJECT|ALL
 * @method void setTrafficType(string $TrafficType) 设置流日志采集类型，ACCEPT|REJECT|ALL
 * @method string getVpcId() 获取私用网络ID或者统一ID，建议使用统一ID，当ResourceType为CCN时不填，其他类型必填。
 * @method void setVpcId(string $VpcId) 设置私用网络ID或者统一ID，建议使用统一ID，当ResourceType为CCN时不填，其他类型必填。
 * @method string getFlowLogDescription() 获取流日志实例描述
 * @method void setFlowLogDescription(string $FlowLogDescription) 设置流日志实例描述
 * @method string getCloudLogId() 获取流日志存储ID
 * @method void setCloudLogId(string $CloudLogId) 设置流日志存储ID
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method string getStorageType() 获取消费端类型：cls、ckafka
 * @method void setStorageType(string $StorageType) 设置消费端类型：cls、ckafka
 * @method FlowLogStorage getFlowLogStorage() 获取流日志消费端信息，当消费端类型为ckafka时，必填。
 * @method void setFlowLogStorage(FlowLogStorage $FlowLogStorage) 设置流日志消费端信息，当消费端类型为ckafka时，必填。
 * @method string getCloudLogRegion() 获取流日志存储ID对应的地域，不传递默认为本地域。
 * @method void setCloudLogRegion(string $CloudLogRegion) 设置流日志存储ID对应的地域，不传递默认为本地域。
 */
class CreateFlowLogRequest extends AbstractModel
{
    /**
     * @var string 流日志实例名字
     */
    public $FlowLogName;

    /**
     * @var string 流日志所属资源类型，VPC|SUBNET|NETWORKINTERFACE|CCN|NAT|DCG
     */
    public $ResourceType;

    /**
     * @var string 资源唯一ID
     */
    public $ResourceId;

    /**
     * @var string 流日志采集类型，ACCEPT|REJECT|ALL
     */
    public $TrafficType;

    /**
     * @var string 私用网络ID或者统一ID，建议使用统一ID，当ResourceType为CCN时不填，其他类型必填。
     */
    public $VpcId;

    /**
     * @var string 流日志实例描述
     */
    public $FlowLogDescription;

    /**
     * @var string 流日志存储ID
     */
    public $CloudLogId;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     */
    public $Tags;

    /**
     * @var string 消费端类型：cls、ckafka
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
     * @param string $FlowLogName 流日志实例名字
     * @param string $ResourceType 流日志所属资源类型，VPC|SUBNET|NETWORKINTERFACE|CCN|NAT|DCG
     * @param string $ResourceId 资源唯一ID
     * @param string $TrafficType 流日志采集类型，ACCEPT|REJECT|ALL
     * @param string $VpcId 私用网络ID或者统一ID，建议使用统一ID，当ResourceType为CCN时不填，其他类型必填。
     * @param string $FlowLogDescription 流日志实例描述
     * @param string $CloudLogId 流日志存储ID
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     * @param string $StorageType 消费端类型：cls、ckafka
     * @param FlowLogStorage $FlowLogStorage 流日志消费端信息，当消费端类型为ckafka时，必填。
     * @param string $CloudLogRegion 流日志存储ID对应的地域，不传递默认为本地域。
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
    }
}
