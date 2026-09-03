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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * spark session详细信息
 *
 * @method string getSparkSessionId() 获取<p>spark session id</p>
 * @method void setSparkSessionId(string $SparkSessionId) 设置<p>spark session id</p>
 * @method string getSparkSessionName() 获取<p>spark session名称</p>
 * @method void setSparkSessionName(string $SparkSessionName) 设置<p>spark session名称</p>
 * @method string getResourceGroupId() 获取<p>资源组id</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>资源组id</p>
 * @method string getEngineSessionId() 获取<p>engine session id</p>
 * @method void setEngineSessionId(string $EngineSessionId) 设置<p>engine session id</p>
 * @method string getEngineSessionName() 获取<p>engine session<br>name</p>
 * @method void setEngineSessionName(string $EngineSessionName) 设置<p>engine session<br>name</p>
 * @method integer getIdleTimeoutMin() 获取<p>自动销毁时间</p>
 * @method void setIdleTimeoutMin(integer $IdleTimeoutMin) 设置<p>自动销毁时间</p>
 * @method string getDriverSpec() 获取<p>driver规格</p>
 * @method void setDriverSpec(string $DriverSpec) 设置<p>driver规格</p>
 * @method string getExecutorSpec() 获取<p>executor规格</p>
 * @method void setExecutorSpec(string $ExecutorSpec) 设置<p>executor规格</p>
 * @method integer getExecutorNumMin() 获取<p>executor最小数量</p>
 * @method void setExecutorNumMin(integer $ExecutorNumMin) 设置<p>executor最小数量</p>
 * @method integer getExecutorNumMax() 获取<p>executor最大数量</p>
 * @method void setExecutorNumMax(integer $ExecutorNumMax) 设置<p>executor最大数量</p>
 * @method integer getTotalSpecMin() 获取<p>总规格最小</p>
 * @method void setTotalSpecMin(integer $TotalSpecMin) 设置<p>总规格最小</p>
 * @method integer getTotalSpecMax() 获取<p>总规格最大</p>
 * @method void setTotalSpecMax(integer $TotalSpecMax) 设置<p>总规格最大</p>
 * @method string getState() 获取<p>状态，STARTING、RUNNING、TERMINATED</p>
 * @method void setState(string $State) 设置<p>状态，STARTING、RUNNING、TERMINATED</p>
 * @method string getApplicationId() 获取<p>应用 ID</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>应用 ID</p>
 * @method integer getApplicationStartTime() 获取<p>应用启动时间</p>
 * @method void setApplicationStartTime(integer $ApplicationStartTime) 设置<p>应用启动时间</p>
 */
class SparkSessionInfo extends AbstractModel
{
    /**
     * @var string <p>spark session id</p>
     */
    public $SparkSessionId;

    /**
     * @var string <p>spark session名称</p>
     */
    public $SparkSessionName;

    /**
     * @var string <p>资源组id</p>
     */
    public $ResourceGroupId;

    /**
     * @var string <p>engine session id</p>
     */
    public $EngineSessionId;

    /**
     * @var string <p>engine session<br>name</p>
     */
    public $EngineSessionName;

    /**
     * @var integer <p>自动销毁时间</p>
     */
    public $IdleTimeoutMin;

    /**
     * @var string <p>driver规格</p>
     */
    public $DriverSpec;

    /**
     * @var string <p>executor规格</p>
     */
    public $ExecutorSpec;

    /**
     * @var integer <p>executor最小数量</p>
     */
    public $ExecutorNumMin;

    /**
     * @var integer <p>executor最大数量</p>
     */
    public $ExecutorNumMax;

    /**
     * @var integer <p>总规格最小</p>
     */
    public $TotalSpecMin;

    /**
     * @var integer <p>总规格最大</p>
     */
    public $TotalSpecMax;

    /**
     * @var string <p>状态，STARTING、RUNNING、TERMINATED</p>
     */
    public $State;

    /**
     * @var string <p>应用 ID</p>
     */
    public $ApplicationId;

    /**
     * @var integer <p>应用启动时间</p>
     */
    public $ApplicationStartTime;

    /**
     * @param string $SparkSessionId <p>spark session id</p>
     * @param string $SparkSessionName <p>spark session名称</p>
     * @param string $ResourceGroupId <p>资源组id</p>
     * @param string $EngineSessionId <p>engine session id</p>
     * @param string $EngineSessionName <p>engine session<br>name</p>
     * @param integer $IdleTimeoutMin <p>自动销毁时间</p>
     * @param string $DriverSpec <p>driver规格</p>
     * @param string $ExecutorSpec <p>executor规格</p>
     * @param integer $ExecutorNumMin <p>executor最小数量</p>
     * @param integer $ExecutorNumMax <p>executor最大数量</p>
     * @param integer $TotalSpecMin <p>总规格最小</p>
     * @param integer $TotalSpecMax <p>总规格最大</p>
     * @param string $State <p>状态，STARTING、RUNNING、TERMINATED</p>
     * @param string $ApplicationId <p>应用 ID</p>
     * @param integer $ApplicationStartTime <p>应用启动时间</p>
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
        if (array_key_exists("SparkSessionId",$param) and $param["SparkSessionId"] !== null) {
            $this->SparkSessionId = $param["SparkSessionId"];
        }

        if (array_key_exists("SparkSessionName",$param) and $param["SparkSessionName"] !== null) {
            $this->SparkSessionName = $param["SparkSessionName"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("EngineSessionId",$param) and $param["EngineSessionId"] !== null) {
            $this->EngineSessionId = $param["EngineSessionId"];
        }

        if (array_key_exists("EngineSessionName",$param) and $param["EngineSessionName"] !== null) {
            $this->EngineSessionName = $param["EngineSessionName"];
        }

        if (array_key_exists("IdleTimeoutMin",$param) and $param["IdleTimeoutMin"] !== null) {
            $this->IdleTimeoutMin = $param["IdleTimeoutMin"];
        }

        if (array_key_exists("DriverSpec",$param) and $param["DriverSpec"] !== null) {
            $this->DriverSpec = $param["DriverSpec"];
        }

        if (array_key_exists("ExecutorSpec",$param) and $param["ExecutorSpec"] !== null) {
            $this->ExecutorSpec = $param["ExecutorSpec"];
        }

        if (array_key_exists("ExecutorNumMin",$param) and $param["ExecutorNumMin"] !== null) {
            $this->ExecutorNumMin = $param["ExecutorNumMin"];
        }

        if (array_key_exists("ExecutorNumMax",$param) and $param["ExecutorNumMax"] !== null) {
            $this->ExecutorNumMax = $param["ExecutorNumMax"];
        }

        if (array_key_exists("TotalSpecMin",$param) and $param["TotalSpecMin"] !== null) {
            $this->TotalSpecMin = $param["TotalSpecMin"];
        }

        if (array_key_exists("TotalSpecMax",$param) and $param["TotalSpecMax"] !== null) {
            $this->TotalSpecMax = $param["TotalSpecMax"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationStartTime",$param) and $param["ApplicationStartTime"] !== null) {
            $this->ApplicationStartTime = $param["ApplicationStartTime"];
        }
    }
}
