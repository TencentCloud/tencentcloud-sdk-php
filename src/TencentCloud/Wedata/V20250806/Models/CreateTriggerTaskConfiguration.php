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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建任务配置信息
 *
 * @method string getResourceGroup() 获取资源组ID： 需要通过 DescribeNormalSchedulerExecutorGroups 获取 ExecutorGroupId
 * @method void setResourceGroup(string $ResourceGroup) 设置资源组ID： 需要通过 DescribeNormalSchedulerExecutorGroups 获取 ExecutorGroupId
 * @method string getCodeContent() 获取代码内容的Base64编码
 * @method void setCodeContent(string $CodeContent) 设置代码内容的Base64编码
 * @method array getTaskExtConfigurationList() 获取任务扩展属性配置列表
 * @method void setTaskExtConfigurationList(array $TaskExtConfigurationList) 设置任务扩展属性配置列表
 * @method string getDataCluster() 获取集群ID
 * @method void setDataCluster(string $DataCluster) 设置集群ID
 * @method string getBrokerIp() 获取指定的运行节点
 * @method void setBrokerIp(string $BrokerIp) 设置指定的运行节点
 * @method string getYarnQueue() 获取资源池队列名称，需要通过 DescribeProjectClusterQueues 获取
 * @method void setYarnQueue(string $YarnQueue) 设置资源池队列名称，需要通过 DescribeProjectClusterQueues 获取
 * @method string getSourceServiceId() 获取来源数据源ID, 使用 ; 分隔, 需要通过 DescribeDataSourceWithoutInfo 获取
 * @method void setSourceServiceId(string $SourceServiceId) 设置来源数据源ID, 使用 ; 分隔, 需要通过 DescribeDataSourceWithoutInfo 获取
 * @method string getTargetServiceId() 获取目标数据源ID, 使用 ; 分隔, 需要通过 DescribeDataSourceWithoutInfo 获取
 * @method void setTargetServiceId(string $TargetServiceId) 设置目标数据源ID, 使用 ; 分隔, 需要通过 DescribeDataSourceWithoutInfo 获取
 * @method array getTaskSchedulingParameterList() 获取调度参数
 * @method void setTaskSchedulingParameterList(array $TaskSchedulingParameterList) 设置调度参数
 * @method string getBundleId() 获取Bundle使用的ID
 * @method void setBundleId(string $BundleId) 设置Bundle使用的ID
 * @method string getBundleInfo() 获取Bundle信息
 * @method void setBundleInfo(string $BundleInfo) 设置Bundle信息
 */
class CreateTriggerTaskConfiguration extends AbstractModel
{
    /**
     * @var string 资源组ID： 需要通过 DescribeNormalSchedulerExecutorGroups 获取 ExecutorGroupId
     */
    public $ResourceGroup;

    /**
     * @var string 代码内容的Base64编码
     */
    public $CodeContent;

    /**
     * @var array 任务扩展属性配置列表
     */
    public $TaskExtConfigurationList;

    /**
     * @var string 集群ID
     */
    public $DataCluster;

    /**
     * @var string 指定的运行节点
     */
    public $BrokerIp;

    /**
     * @var string 资源池队列名称，需要通过 DescribeProjectClusterQueues 获取
     */
    public $YarnQueue;

    /**
     * @var string 来源数据源ID, 使用 ; 分隔, 需要通过 DescribeDataSourceWithoutInfo 获取
     */
    public $SourceServiceId;

    /**
     * @var string 目标数据源ID, 使用 ; 分隔, 需要通过 DescribeDataSourceWithoutInfo 获取
     */
    public $TargetServiceId;

    /**
     * @var array 调度参数
     */
    public $TaskSchedulingParameterList;

    /**
     * @var string Bundle使用的ID
     */
    public $BundleId;

    /**
     * @var string Bundle信息
     */
    public $BundleInfo;

    /**
     * @param string $ResourceGroup 资源组ID： 需要通过 DescribeNormalSchedulerExecutorGroups 获取 ExecutorGroupId
     * @param string $CodeContent 代码内容的Base64编码
     * @param array $TaskExtConfigurationList 任务扩展属性配置列表
     * @param string $DataCluster 集群ID
     * @param string $BrokerIp 指定的运行节点
     * @param string $YarnQueue 资源池队列名称，需要通过 DescribeProjectClusterQueues 获取
     * @param string $SourceServiceId 来源数据源ID, 使用 ; 分隔, 需要通过 DescribeDataSourceWithoutInfo 获取
     * @param string $TargetServiceId 目标数据源ID, 使用 ; 分隔, 需要通过 DescribeDataSourceWithoutInfo 获取
     * @param array $TaskSchedulingParameterList 调度参数
     * @param string $BundleId Bundle使用的ID
     * @param string $BundleInfo Bundle信息
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
        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("CodeContent",$param) and $param["CodeContent"] !== null) {
            $this->CodeContent = $param["CodeContent"];
        }

        if (array_key_exists("TaskExtConfigurationList",$param) and $param["TaskExtConfigurationList"] !== null) {
            $this->TaskExtConfigurationList = [];
            foreach ($param["TaskExtConfigurationList"] as $key => $value){
                $obj = new TaskExtParameter();
                $obj->deserialize($value);
                array_push($this->TaskExtConfigurationList, $obj);
            }
        }

        if (array_key_exists("DataCluster",$param) and $param["DataCluster"] !== null) {
            $this->DataCluster = $param["DataCluster"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("YarnQueue",$param) and $param["YarnQueue"] !== null) {
            $this->YarnQueue = $param["YarnQueue"];
        }

        if (array_key_exists("SourceServiceId",$param) and $param["SourceServiceId"] !== null) {
            $this->SourceServiceId = $param["SourceServiceId"];
        }

        if (array_key_exists("TargetServiceId",$param) and $param["TargetServiceId"] !== null) {
            $this->TargetServiceId = $param["TargetServiceId"];
        }

        if (array_key_exists("TaskSchedulingParameterList",$param) and $param["TaskSchedulingParameterList"] !== null) {
            $this->TaskSchedulingParameterList = [];
            foreach ($param["TaskSchedulingParameterList"] as $key => $value){
                $obj = new TaskSchedulingParameter();
                $obj->deserialize($value);
                array_push($this->TaskSchedulingParameterList, $obj);
            }
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }
    }
}
