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
 * @method string getSparkSessionId() 获取spark session id
 * @method void setSparkSessionId(string $SparkSessionId) 设置spark session id
 * @method string getSparkSessionName() 获取spark session名称
 * @method void setSparkSessionName(string $SparkSessionName) 设置spark session名称
 * @method string getResourceGroupId() 获取资源组id
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组id
 * @method string getEngineSessionId() 获取engine session id
 * @method void setEngineSessionId(string $EngineSessionId) 设置engine session id
 * @method string getEngineSessionName() 获取engine session   
name
 * @method void setEngineSessionName(string $EngineSessionName) 设置engine session   
name
 * @method integer getIdleTimeoutMin() 获取自动销毁时间
 * @method void setIdleTimeoutMin(integer $IdleTimeoutMin) 设置自动销毁时间
 * @method string getDriverSpec() 获取driver规格
 * @method void setDriverSpec(string $DriverSpec) 设置driver规格
 * @method string getExecutorSpec() 获取executor规格
 * @method void setExecutorSpec(string $ExecutorSpec) 设置executor规格
 * @method integer getExecutorNumMin() 获取executor最小数量
 * @method void setExecutorNumMin(integer $ExecutorNumMin) 设置executor最小数量
 * @method integer getExecutorNumMax() 获取executor最大数量
 * @method void setExecutorNumMax(integer $ExecutorNumMax) 设置executor最大数量
 * @method integer getTotalSpecMin() 获取总规格最小
 * @method void setTotalSpecMin(integer $TotalSpecMin) 设置总规格最小
 * @method integer getTotalSpecMax() 获取总规格最大
 * @method void setTotalSpecMax(integer $TotalSpecMax) 设置总规格最大
 */
class SparkSessionInfo extends AbstractModel
{
    /**
     * @var string spark session id
     */
    public $SparkSessionId;

    /**
     * @var string spark session名称
     */
    public $SparkSessionName;

    /**
     * @var string 资源组id
     */
    public $ResourceGroupId;

    /**
     * @var string engine session id
     */
    public $EngineSessionId;

    /**
     * @var string engine session   
name
     */
    public $EngineSessionName;

    /**
     * @var integer 自动销毁时间
     */
    public $IdleTimeoutMin;

    /**
     * @var string driver规格
     */
    public $DriverSpec;

    /**
     * @var string executor规格
     */
    public $ExecutorSpec;

    /**
     * @var integer executor最小数量
     */
    public $ExecutorNumMin;

    /**
     * @var integer executor最大数量
     */
    public $ExecutorNumMax;

    /**
     * @var integer 总规格最小
     */
    public $TotalSpecMin;

    /**
     * @var integer 总规格最大
     */
    public $TotalSpecMax;

    /**
     * @param string $SparkSessionId spark session id
     * @param string $SparkSessionName spark session名称
     * @param string $ResourceGroupId 资源组id
     * @param string $EngineSessionId engine session id
     * @param string $EngineSessionName engine session   
name
     * @param integer $IdleTimeoutMin 自动销毁时间
     * @param string $DriverSpec driver规格
     * @param string $ExecutorSpec executor规格
     * @param integer $ExecutorNumMin executor最小数量
     * @param integer $ExecutorNumMax executor最大数量
     * @param integer $TotalSpecMin 总规格最小
     * @param integer $TotalSpecMax 总规格最大
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
    }
}
