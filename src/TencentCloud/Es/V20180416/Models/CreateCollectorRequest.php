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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCollector请求参数结构体
 *
 * @method string getCollectorName() 获取采集器名称（1-50 个英文、汉字、数字、连接线-或下划线_）
 * @method void setCollectorName(string $CollectorName) 设置采集器名称（1-50 个英文、汉字、数字、连接线-或下划线_）
 * @method string getCollectorVersion() 获取采集器版本（支持"6.8.15"、"7.10.2"）
 * @method void setCollectorVersion(string $CollectorVersion) 设置采集器版本（支持"6.8.15"、"7.10.2"）
 * @method string getCollectorType() 获取采集器类型（支持filebeat、metricbeat、heartbeat、auditbeat、packetbeat）
 * @method void setCollectorType(string $CollectorType) 设置采集器类型（支持filebeat、metricbeat、heartbeat、auditbeat、packetbeat）
 * @method CollectorOutputInstance getOutputInstance() 获取采集器输出的ES实例信息
 * @method void setOutputInstance(CollectorOutputInstance $OutputInstance) 设置采集器输出的ES实例信息
 * @method array getCollectorConfigs() 获取采集器配置
 * @method void setCollectorConfigs(array $CollectorConfigs) 设置采集器配置
 * @method array getCVMInstanceIds() 获取采集器下发的CVM实例ID列表
 * @method void setCVMInstanceIds(array $CVMInstanceIds) 设置采集器下发的CVM实例ID列表
 * @method string getTargetType() 获取采集目标类型，CVM或者TKE
 * @method void setTargetType(string $TargetType) 设置采集目标类型，CVM或者TKE
 * @method string getContainerClusterId() 获取容器集群ID，采集目标为TKE时必填
 * @method void setContainerClusterId(string $ContainerClusterId) 设置容器集群ID，采集目标为TKE时必填
 * @method array getCollectorTargets() 获取采集器配置，采集目标为TKE时必填
 * @method void setCollectorTargets(array $CollectorTargets) 设置采集器配置，采集目标为TKE时必填
 * @method array getTagList() 获取标签信息
 * @method void setTagList(array $TagList) 设置标签信息
 */
class CreateCollectorRequest extends AbstractModel
{
    /**
     * @var string 采集器名称（1-50 个英文、汉字、数字、连接线-或下划线_）
     */
    public $CollectorName;

    /**
     * @var string 采集器版本（支持"6.8.15"、"7.10.2"）
     */
    public $CollectorVersion;

    /**
     * @var string 采集器类型（支持filebeat、metricbeat、heartbeat、auditbeat、packetbeat）
     */
    public $CollectorType;

    /**
     * @var CollectorOutputInstance 采集器输出的ES实例信息
     */
    public $OutputInstance;

    /**
     * @var array 采集器配置
     */
    public $CollectorConfigs;

    /**
     * @var array 采集器下发的CVM实例ID列表
     */
    public $CVMInstanceIds;

    /**
     * @var string 采集目标类型，CVM或者TKE
     */
    public $TargetType;

    /**
     * @var string 容器集群ID，采集目标为TKE时必填
     */
    public $ContainerClusterId;

    /**
     * @var array 采集器配置，采集目标为TKE时必填
     */
    public $CollectorTargets;

    /**
     * @var array 标签信息
     */
    public $TagList;

    /**
     * @param string $CollectorName 采集器名称（1-50 个英文、汉字、数字、连接线-或下划线_）
     * @param string $CollectorVersion 采集器版本（支持"6.8.15"、"7.10.2"）
     * @param string $CollectorType 采集器类型（支持filebeat、metricbeat、heartbeat、auditbeat、packetbeat）
     * @param CollectorOutputInstance $OutputInstance 采集器输出的ES实例信息
     * @param array $CollectorConfigs 采集器配置
     * @param array $CVMInstanceIds 采集器下发的CVM实例ID列表
     * @param string $TargetType 采集目标类型，CVM或者TKE
     * @param string $ContainerClusterId 容器集群ID，采集目标为TKE时必填
     * @param array $CollectorTargets 采集器配置，采集目标为TKE时必填
     * @param array $TagList 标签信息
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
        if (array_key_exists("CollectorName",$param) and $param["CollectorName"] !== null) {
            $this->CollectorName = $param["CollectorName"];
        }

        if (array_key_exists("CollectorVersion",$param) and $param["CollectorVersion"] !== null) {
            $this->CollectorVersion = $param["CollectorVersion"];
        }

        if (array_key_exists("CollectorType",$param) and $param["CollectorType"] !== null) {
            $this->CollectorType = $param["CollectorType"];
        }

        if (array_key_exists("OutputInstance",$param) and $param["OutputInstance"] !== null) {
            $this->OutputInstance = new CollectorOutputInstance();
            $this->OutputInstance->deserialize($param["OutputInstance"]);
        }

        if (array_key_exists("CollectorConfigs",$param) and $param["CollectorConfigs"] !== null) {
            $this->CollectorConfigs = [];
            foreach ($param["CollectorConfigs"] as $key => $value){
                $obj = new CollectorConfigInfo();
                $obj->deserialize($value);
                array_push($this->CollectorConfigs, $obj);
            }
        }

        if (array_key_exists("CVMInstanceIds",$param) and $param["CVMInstanceIds"] !== null) {
            $this->CVMInstanceIds = $param["CVMInstanceIds"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("ContainerClusterId",$param) and $param["ContainerClusterId"] !== null) {
            $this->ContainerClusterId = $param["ContainerClusterId"];
        }

        if (array_key_exists("CollectorTargets",$param) and $param["CollectorTargets"] !== null) {
            $this->CollectorTargets = [];
            foreach ($param["CollectorTargets"] as $key => $value){
                $obj = new CollectorTarget();
                $obj->deserialize($value);
                array_push($this->CollectorTargets, $obj);
            }
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
