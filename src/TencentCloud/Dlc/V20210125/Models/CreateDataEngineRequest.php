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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataEngine请求参数结构体
 *
 * @method string getEngineType() 获取引擎类型spark/presto
 * @method void setEngineType(string $EngineType) 设置引擎类型spark/presto
 * @method string getDataEngineName() 获取虚拟集群名称
 * @method void setDataEngineName(string $DataEngineName) 设置虚拟集群名称
 * @method string getClusterType() 获取集群类型 spark_private/presto_private/presto_cu/spark_cu
 * @method void setClusterType(string $ClusterType) 设置集群类型 spark_private/presto_private/presto_cu/spark_cu
 * @method integer getMode() 获取计费模式 0=共享模式 1=按量计费 2=包年包月
 * @method void setMode(integer $Mode) 设置计费模式 0=共享模式 1=按量计费 2=包年包月
 * @method boolean getAutoResume() 获取是否自动启动集群
 * @method void setAutoResume(boolean $AutoResume) 设置是否自动启动集群
 * @method integer getMinClusters() 获取最小资源
 * @method void setMinClusters(integer $MinClusters) 设置最小资源
 * @method integer getMaxClusters() 获取最大资源
 * @method void setMaxClusters(integer $MaxClusters) 设置最大资源
 * @method boolean getDefaultDataEngine() 获取是否为默虚拟集群
 * @method void setDefaultDataEngine(boolean $DefaultDataEngine) 设置是否为默虚拟集群
 * @method string getCidrBlock() 获取VPC网段
 * @method void setCidrBlock(string $CidrBlock) 设置VPC网段
 * @method string getMessage() 获取描述信息
 * @method void setMessage(string $Message) 设置描述信息
 * @method integer getSize() 获取集群规模
 * @method void setSize(integer $Size) 设置集群规模
 * @method integer getPayMode() 获取计费类型，后付费：0，预付费：1。当前只支持后付费，不填默认为后付费。
 * @method void setPayMode(integer $PayMode) 设置计费类型，后付费：0，预付费：1。当前只支持后付费，不填默认为后付费。
 * @method integer getTimeSpan() 获取资源使用时长，后付费：固定填3600，预付费：最少填1，代表购买资源一个月，最长不超过120。默认3600
 * @method void setTimeSpan(integer $TimeSpan) 设置资源使用时长，后付费：固定填3600，预付费：最少填1，代表购买资源一个月，最长不超过120。默认3600
 * @method string getTimeUnit() 获取资源使用时长的单位，后付费：s，预付费：m。默认为s
 * @method void setTimeUnit(string $TimeUnit) 设置资源使用时长的单位，后付费：s，预付费：m。默认为s
 * @method integer getAutoRenew() 获取资源的自动续费标志。后付费无需续费，固定填0；预付费下：0表示手动续费、1代表自动续费、2代表不续费，在0下如果是大客户，会自动帮大客户续费。默认为0
 * @method void setAutoRenew(integer $AutoRenew) 设置资源的自动续费标志。后付费无需续费，固定填0；预付费下：0表示手动续费、1代表自动续费、2代表不续费，在0下如果是大客户，会自动帮大客户续费。默认为0
 * @method array getTags() 获取创建资源的时候需要绑定的标签信息
 * @method void setTags(array $Tags) 设置创建资源的时候需要绑定的标签信息
 * @method boolean getAutoSuspend() 获取是否自定挂起集群：false（默认）：不自动挂起、true：自动挂起
 * @method void setAutoSuspend(boolean $AutoSuspend) 设置是否自定挂起集群：false（默认）：不自动挂起、true：自动挂起
 * @method integer getCrontabResumeSuspend() 获取定时启停集群策略：0（默认）：关闭定时策略、1：开启定时策略（注：定时启停策略与自动挂起策略互斥）
 * @method void setCrontabResumeSuspend(integer $CrontabResumeSuspend) 设置定时启停集群策略：0（默认）：关闭定时策略、1：开启定时策略（注：定时启停策略与自动挂起策略互斥）
 * @method CrontabResumeSuspendStrategy getCrontabResumeSuspendStrategy() 获取定时启停策略，复杂类型：包含启停时间、挂起集群策略
 * @method void setCrontabResumeSuspendStrategy(CrontabResumeSuspendStrategy $CrontabResumeSuspendStrategy) 设置定时启停策略，复杂类型：包含启停时间、挂起集群策略
 * @method string getEngineExecType() 获取引擎执行任务类型，默认为SQL
 * @method void setEngineExecType(string $EngineExecType) 设置引擎执行任务类型，默认为SQL
 * @method integer getMaxConcurrency() 获取单个集群最大并发任务数，默认5
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置单个集群最大并发任务数，默认5
 * @method integer getTolerableQueueTime() 获取可容忍的排队时间，默认0。当任务排队的时间超过可容忍的时间时可能会触发扩容。如果该参数为0，则表示一旦有任务排队就可能立即触发扩容。
 * @method void setTolerableQueueTime(integer $TolerableQueueTime) 设置可容忍的排队时间，默认0。当任务排队的时间超过可容忍的时间时可能会触发扩容。如果该参数为0，则表示一旦有任务排队就可能立即触发扩容。
 * @method integer getAutoSuspendTime() 获取集群自动挂起时间，默认10分钟
 * @method void setAutoSuspendTime(integer $AutoSuspendTime) 设置集群自动挂起时间，默认10分钟
 * @method string getResourceType() 获取资源类型。Standard_CU：标准型；Memory_CU：内存型
 * @method void setResourceType(string $ResourceType) 设置资源类型。Standard_CU：标准型；Memory_CU：内存型
 * @method array getDataEngineConfigPairs() 获取集群高级配置
 * @method void setDataEngineConfigPairs(array $DataEngineConfigPairs) 设置集群高级配置
 * @method string getImageVersionName() 获取集群镜像版本名字。如SuperSQL-P 1.1;SuperSQL-S 3.2等,不传，默认创建最新镜像版本的集群
 * @method void setImageVersionName(string $ImageVersionName) 设置集群镜像版本名字。如SuperSQL-P 1.1;SuperSQL-S 3.2等,不传，默认创建最新镜像版本的集群
 * @method string getMainClusterName() 获取主集群名称
 * @method void setMainClusterName(string $MainClusterName) 设置主集群名称
 * @method boolean getElasticSwitch() 获取spark jar 包年包月集群是否开启弹性
 * @method void setElasticSwitch(boolean $ElasticSwitch) 设置spark jar 包年包月集群是否开启弹性
 * @method integer getElasticLimit() 获取spark jar 包年包月集群弹性上限
 * @method void setElasticLimit(integer $ElasticLimit) 设置spark jar 包年包月集群弹性上限
 */
class CreateDataEngineRequest extends AbstractModel
{
    /**
     * @var string 引擎类型spark/presto
     */
    public $EngineType;

    /**
     * @var string 虚拟集群名称
     */
    public $DataEngineName;

    /**
     * @var string 集群类型 spark_private/presto_private/presto_cu/spark_cu
     */
    public $ClusterType;

    /**
     * @var integer 计费模式 0=共享模式 1=按量计费 2=包年包月
     */
    public $Mode;

    /**
     * @var boolean 是否自动启动集群
     */
    public $AutoResume;

    /**
     * @var integer 最小资源
     */
    public $MinClusters;

    /**
     * @var integer 最大资源
     */
    public $MaxClusters;

    /**
     * @var boolean 是否为默虚拟集群
     */
    public $DefaultDataEngine;

    /**
     * @var string VPC网段
     */
    public $CidrBlock;

    /**
     * @var string 描述信息
     */
    public $Message;

    /**
     * @var integer 集群规模
     */
    public $Size;

    /**
     * @var integer 计费类型，后付费：0，预付费：1。当前只支持后付费，不填默认为后付费。
     */
    public $PayMode;

    /**
     * @var integer 资源使用时长，后付费：固定填3600，预付费：最少填1，代表购买资源一个月，最长不超过120。默认3600
     */
    public $TimeSpan;

    /**
     * @var string 资源使用时长的单位，后付费：s，预付费：m。默认为s
     */
    public $TimeUnit;

    /**
     * @var integer 资源的自动续费标志。后付费无需续费，固定填0；预付费下：0表示手动续费、1代表自动续费、2代表不续费，在0下如果是大客户，会自动帮大客户续费。默认为0
     */
    public $AutoRenew;

    /**
     * @var array 创建资源的时候需要绑定的标签信息
     */
    public $Tags;

    /**
     * @var boolean 是否自定挂起集群：false（默认）：不自动挂起、true：自动挂起
     */
    public $AutoSuspend;

    /**
     * @var integer 定时启停集群策略：0（默认）：关闭定时策略、1：开启定时策略（注：定时启停策略与自动挂起策略互斥）
     */
    public $CrontabResumeSuspend;

    /**
     * @var CrontabResumeSuspendStrategy 定时启停策略，复杂类型：包含启停时间、挂起集群策略
     */
    public $CrontabResumeSuspendStrategy;

    /**
     * @var string 引擎执行任务类型，默认为SQL
     */
    public $EngineExecType;

    /**
     * @var integer 单个集群最大并发任务数，默认5
     */
    public $MaxConcurrency;

    /**
     * @var integer 可容忍的排队时间，默认0。当任务排队的时间超过可容忍的时间时可能会触发扩容。如果该参数为0，则表示一旦有任务排队就可能立即触发扩容。
     */
    public $TolerableQueueTime;

    /**
     * @var integer 集群自动挂起时间，默认10分钟
     */
    public $AutoSuspendTime;

    /**
     * @var string 资源类型。Standard_CU：标准型；Memory_CU：内存型
     */
    public $ResourceType;

    /**
     * @var array 集群高级配置
     */
    public $DataEngineConfigPairs;

    /**
     * @var string 集群镜像版本名字。如SuperSQL-P 1.1;SuperSQL-S 3.2等,不传，默认创建最新镜像版本的集群
     */
    public $ImageVersionName;

    /**
     * @var string 主集群名称
     */
    public $MainClusterName;

    /**
     * @var boolean spark jar 包年包月集群是否开启弹性
     */
    public $ElasticSwitch;

    /**
     * @var integer spark jar 包年包月集群弹性上限
     */
    public $ElasticLimit;

    /**
     * @param string $EngineType 引擎类型spark/presto
     * @param string $DataEngineName 虚拟集群名称
     * @param string $ClusterType 集群类型 spark_private/presto_private/presto_cu/spark_cu
     * @param integer $Mode 计费模式 0=共享模式 1=按量计费 2=包年包月
     * @param boolean $AutoResume 是否自动启动集群
     * @param integer $MinClusters 最小资源
     * @param integer $MaxClusters 最大资源
     * @param boolean $DefaultDataEngine 是否为默虚拟集群
     * @param string $CidrBlock VPC网段
     * @param string $Message 描述信息
     * @param integer $Size 集群规模
     * @param integer $PayMode 计费类型，后付费：0，预付费：1。当前只支持后付费，不填默认为后付费。
     * @param integer $TimeSpan 资源使用时长，后付费：固定填3600，预付费：最少填1，代表购买资源一个月，最长不超过120。默认3600
     * @param string $TimeUnit 资源使用时长的单位，后付费：s，预付费：m。默认为s
     * @param integer $AutoRenew 资源的自动续费标志。后付费无需续费，固定填0；预付费下：0表示手动续费、1代表自动续费、2代表不续费，在0下如果是大客户，会自动帮大客户续费。默认为0
     * @param array $Tags 创建资源的时候需要绑定的标签信息
     * @param boolean $AutoSuspend 是否自定挂起集群：false（默认）：不自动挂起、true：自动挂起
     * @param integer $CrontabResumeSuspend 定时启停集群策略：0（默认）：关闭定时策略、1：开启定时策略（注：定时启停策略与自动挂起策略互斥）
     * @param CrontabResumeSuspendStrategy $CrontabResumeSuspendStrategy 定时启停策略，复杂类型：包含启停时间、挂起集群策略
     * @param string $EngineExecType 引擎执行任务类型，默认为SQL
     * @param integer $MaxConcurrency 单个集群最大并发任务数，默认5
     * @param integer $TolerableQueueTime 可容忍的排队时间，默认0。当任务排队的时间超过可容忍的时间时可能会触发扩容。如果该参数为0，则表示一旦有任务排队就可能立即触发扩容。
     * @param integer $AutoSuspendTime 集群自动挂起时间，默认10分钟
     * @param string $ResourceType 资源类型。Standard_CU：标准型；Memory_CU：内存型
     * @param array $DataEngineConfigPairs 集群高级配置
     * @param string $ImageVersionName 集群镜像版本名字。如SuperSQL-P 1.1;SuperSQL-S 3.2等,不传，默认创建最新镜像版本的集群
     * @param string $MainClusterName 主集群名称
     * @param boolean $ElasticSwitch spark jar 包年包月集群是否开启弹性
     * @param integer $ElasticLimit spark jar 包年包月集群弹性上限
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
        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("AutoResume",$param) and $param["AutoResume"] !== null) {
            $this->AutoResume = $param["AutoResume"];
        }

        if (array_key_exists("MinClusters",$param) and $param["MinClusters"] !== null) {
            $this->MinClusters = $param["MinClusters"];
        }

        if (array_key_exists("MaxClusters",$param) and $param["MaxClusters"] !== null) {
            $this->MaxClusters = $param["MaxClusters"];
        }

        if (array_key_exists("DefaultDataEngine",$param) and $param["DefaultDataEngine"] !== null) {
            $this->DefaultDataEngine = $param["DefaultDataEngine"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoSuspend",$param) and $param["AutoSuspend"] !== null) {
            $this->AutoSuspend = $param["AutoSuspend"];
        }

        if (array_key_exists("CrontabResumeSuspend",$param) and $param["CrontabResumeSuspend"] !== null) {
            $this->CrontabResumeSuspend = $param["CrontabResumeSuspend"];
        }

        if (array_key_exists("CrontabResumeSuspendStrategy",$param) and $param["CrontabResumeSuspendStrategy"] !== null) {
            $this->CrontabResumeSuspendStrategy = new CrontabResumeSuspendStrategy();
            $this->CrontabResumeSuspendStrategy->deserialize($param["CrontabResumeSuspendStrategy"]);
        }

        if (array_key_exists("EngineExecType",$param) and $param["EngineExecType"] !== null) {
            $this->EngineExecType = $param["EngineExecType"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("TolerableQueueTime",$param) and $param["TolerableQueueTime"] !== null) {
            $this->TolerableQueueTime = $param["TolerableQueueTime"];
        }

        if (array_key_exists("AutoSuspendTime",$param) and $param["AutoSuspendTime"] !== null) {
            $this->AutoSuspendTime = $param["AutoSuspendTime"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("DataEngineConfigPairs",$param) and $param["DataEngineConfigPairs"] !== null) {
            $this->DataEngineConfigPairs = [];
            foreach ($param["DataEngineConfigPairs"] as $key => $value){
                $obj = new DataEngineConfigPair();
                $obj->deserialize($value);
                array_push($this->DataEngineConfigPairs, $obj);
            }
        }

        if (array_key_exists("ImageVersionName",$param) and $param["ImageVersionName"] !== null) {
            $this->ImageVersionName = $param["ImageVersionName"];
        }

        if (array_key_exists("MainClusterName",$param) and $param["MainClusterName"] !== null) {
            $this->MainClusterName = $param["MainClusterName"];
        }

        if (array_key_exists("ElasticSwitch",$param) and $param["ElasticSwitch"] !== null) {
            $this->ElasticSwitch = $param["ElasticSwitch"];
        }

        if (array_key_exists("ElasticLimit",$param) and $param["ElasticLimit"] !== null) {
            $this->ElasticLimit = $param["ElasticLimit"];
        }
    }
}
