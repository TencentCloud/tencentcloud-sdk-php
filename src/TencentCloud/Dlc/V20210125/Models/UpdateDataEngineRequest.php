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
 * UpdateDataEngine请求参数结构体
 *
 * @method integer getSize() 获取资源大小
 * @method void setSize(integer $Size) 设置资源大小
 * @method integer getMinClusters() 获取最小资源
 * @method void setMinClusters(integer $MinClusters) 设置最小资源
 * @method integer getMaxClusters() 获取最大资源
 * @method void setMaxClusters(integer $MaxClusters) 设置最大资源
 * @method boolean getAutoResume() 获取开启自动刷新：true：开启、false（默认）：关闭
 * @method void setAutoResume(boolean $AutoResume) 设置开启自动刷新：true：开启、false（默认）：关闭
 * @method string getDataEngineName() 获取数据引擎名称
 * @method void setDataEngineName(string $DataEngineName) 设置数据引擎名称
 * @method string getMessage() 获取相关信息
 * @method void setMessage(string $Message) 设置相关信息
 * @method boolean getAutoSuspend() 获取是否自定挂起集群：false（默认）：不自动挂起、true：自动挂起
 * @method void setAutoSuspend(boolean $AutoSuspend) 设置是否自定挂起集群：false（默认）：不自动挂起、true：自动挂起
 * @method integer getCrontabResumeSuspend() 获取定时启停集群策略：0（默认）：关闭定时策略、1：开启定时策略（注：定时启停策略与自动挂起策略互斥）
 * @method void setCrontabResumeSuspend(integer $CrontabResumeSuspend) 设置定时启停集群策略：0（默认）：关闭定时策略、1：开启定时策略（注：定时启停策略与自动挂起策略互斥）
 * @method CrontabResumeSuspendStrategy getCrontabResumeSuspendStrategy() 获取定时启停策略，复杂类型：包含启停时间、挂起集群策略
 * @method void setCrontabResumeSuspendStrategy(CrontabResumeSuspendStrategy $CrontabResumeSuspendStrategy) 设置定时启停策略，复杂类型：包含启停时间、挂起集群策略
 * @method integer getMaxConcurrency() 获取单个集群最大并发任务数，默认5
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置单个集群最大并发任务数，默认5
 * @method integer getTolerableQueueTime() 获取可容忍的排队时间，默认0。当任务排队的时间超过可容忍的时间时可能会触发扩容。如果该参数为0，则表示一旦有任务排队就可能立即触发扩容。
 * @method void setTolerableQueueTime(integer $TolerableQueueTime) 设置可容忍的排队时间，默认0。当任务排队的时间超过可容忍的时间时可能会触发扩容。如果该参数为0，则表示一旦有任务排队就可能立即触发扩容。
 * @method integer getAutoSuspendTime() 获取集群自动挂起时间
 * @method void setAutoSuspendTime(integer $AutoSuspendTime) 设置集群自动挂起时间
 * @method boolean getElasticSwitch() 获取spark jar 包年包月集群是否开启弹性
 * @method void setElasticSwitch(boolean $ElasticSwitch) 设置spark jar 包年包月集群是否开启弹性
 * @method integer getElasticLimit() 获取spark jar 包年包月集群弹性上限
 * @method void setElasticLimit(integer $ElasticLimit) 设置spark jar 包年包月集群弹性上限
 * @method SessionResourceTemplate getSessionResourceTemplate() 获取Spark批作业集群Session资源配置模板
 * @method void setSessionResourceTemplate(SessionResourceTemplate $SessionResourceTemplate) 设置Spark批作业集群Session资源配置模板
 */
class UpdateDataEngineRequest extends AbstractModel
{
    /**
     * @var integer 资源大小
     */
    public $Size;

    /**
     * @var integer 最小资源
     */
    public $MinClusters;

    /**
     * @var integer 最大资源
     */
    public $MaxClusters;

    /**
     * @var boolean 开启自动刷新：true：开启、false（默认）：关闭
     */
    public $AutoResume;

    /**
     * @var string 数据引擎名称
     */
    public $DataEngineName;

    /**
     * @var string 相关信息
     */
    public $Message;

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
     * @var integer 单个集群最大并发任务数，默认5
     */
    public $MaxConcurrency;

    /**
     * @var integer 可容忍的排队时间，默认0。当任务排队的时间超过可容忍的时间时可能会触发扩容。如果该参数为0，则表示一旦有任务排队就可能立即触发扩容。
     */
    public $TolerableQueueTime;

    /**
     * @var integer 集群自动挂起时间
     */
    public $AutoSuspendTime;

    /**
     * @var boolean spark jar 包年包月集群是否开启弹性
     */
    public $ElasticSwitch;

    /**
     * @var integer spark jar 包年包月集群弹性上限
     */
    public $ElasticLimit;

    /**
     * @var SessionResourceTemplate Spark批作业集群Session资源配置模板
     */
    public $SessionResourceTemplate;

    /**
     * @param integer $Size 资源大小
     * @param integer $MinClusters 最小资源
     * @param integer $MaxClusters 最大资源
     * @param boolean $AutoResume 开启自动刷新：true：开启、false（默认）：关闭
     * @param string $DataEngineName 数据引擎名称
     * @param string $Message 相关信息
     * @param boolean $AutoSuspend 是否自定挂起集群：false（默认）：不自动挂起、true：自动挂起
     * @param integer $CrontabResumeSuspend 定时启停集群策略：0（默认）：关闭定时策略、1：开启定时策略（注：定时启停策略与自动挂起策略互斥）
     * @param CrontabResumeSuspendStrategy $CrontabResumeSuspendStrategy 定时启停策略，复杂类型：包含启停时间、挂起集群策略
     * @param integer $MaxConcurrency 单个集群最大并发任务数，默认5
     * @param integer $TolerableQueueTime 可容忍的排队时间，默认0。当任务排队的时间超过可容忍的时间时可能会触发扩容。如果该参数为0，则表示一旦有任务排队就可能立即触发扩容。
     * @param integer $AutoSuspendTime 集群自动挂起时间
     * @param boolean $ElasticSwitch spark jar 包年包月集群是否开启弹性
     * @param integer $ElasticLimit spark jar 包年包月集群弹性上限
     * @param SessionResourceTemplate $SessionResourceTemplate Spark批作业集群Session资源配置模板
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
        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("MinClusters",$param) and $param["MinClusters"] !== null) {
            $this->MinClusters = $param["MinClusters"];
        }

        if (array_key_exists("MaxClusters",$param) and $param["MaxClusters"] !== null) {
            $this->MaxClusters = $param["MaxClusters"];
        }

        if (array_key_exists("AutoResume",$param) and $param["AutoResume"] !== null) {
            $this->AutoResume = $param["AutoResume"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
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

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("TolerableQueueTime",$param) and $param["TolerableQueueTime"] !== null) {
            $this->TolerableQueueTime = $param["TolerableQueueTime"];
        }

        if (array_key_exists("AutoSuspendTime",$param) and $param["AutoSuspendTime"] !== null) {
            $this->AutoSuspendTime = $param["AutoSuspendTime"];
        }

        if (array_key_exists("ElasticSwitch",$param) and $param["ElasticSwitch"] !== null) {
            $this->ElasticSwitch = $param["ElasticSwitch"];
        }

        if (array_key_exists("ElasticLimit",$param) and $param["ElasticLimit"] !== null) {
            $this->ElasticLimit = $param["ElasticLimit"];
        }

        if (array_key_exists("SessionResourceTemplate",$param) and $param["SessionResourceTemplate"] !== null) {
            $this->SessionResourceTemplate = new SessionResourceTemplate();
            $this->SessionResourceTemplate->deserialize($param["SessionResourceTemplate"]);
        }
    }
}
