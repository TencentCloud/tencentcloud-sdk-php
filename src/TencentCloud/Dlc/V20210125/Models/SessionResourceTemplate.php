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
 * Spark批作业集群Session资源配置模板；
 *
 * @method string getDriverSize() 获取driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
 * @method void setDriverSize(string $DriverSize) 设置driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
 * @method string getExecutorSize() 获取executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
 * @method void setExecutorSize(string $ExecutorSize) 设置executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
 * @method integer getExecutorNums() 获取指定executor数量，最小值为1，最大值小于集群规格
 * @method void setExecutorNums(integer $ExecutorNums) 设置指定executor数量，最小值为1，最大值小于集群规格
 * @method integer getExecutorMaxNumbers() 获取指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）
 * @method void setExecutorMaxNumbers(integer $ExecutorMaxNumbers) 设置指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）
 * @method array getRunningTimeParameters() 获取运行时参数
 * @method void setRunningTimeParameters(array $RunningTimeParameters) 设置运行时参数
 */
class SessionResourceTemplate extends AbstractModel
{
    /**
     * @var string driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
     */
    public $DriverSize;

    /**
     * @var string executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
     */
    public $ExecutorSize;

    /**
     * @var integer 指定executor数量，最小值为1，最大值小于集群规格
     */
    public $ExecutorNums;

    /**
     * @var integer 指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）
     */
    public $ExecutorMaxNumbers;

    /**
     * @var array 运行时参数
     */
    public $RunningTimeParameters;

    /**
     * @param string $DriverSize driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
     * @param string $ExecutorSize executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
     * @param integer $ExecutorNums 指定executor数量，最小值为1，最大值小于集群规格
     * @param integer $ExecutorMaxNumbers 指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）
     * @param array $RunningTimeParameters 运行时参数
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
        if (array_key_exists("DriverSize",$param) and $param["DriverSize"] !== null) {
            $this->DriverSize = $param["DriverSize"];
        }

        if (array_key_exists("ExecutorSize",$param) and $param["ExecutorSize"] !== null) {
            $this->ExecutorSize = $param["ExecutorSize"];
        }

        if (array_key_exists("ExecutorNums",$param) and $param["ExecutorNums"] !== null) {
            $this->ExecutorNums = $param["ExecutorNums"];
        }

        if (array_key_exists("ExecutorMaxNumbers",$param) and $param["ExecutorMaxNumbers"] !== null) {
            $this->ExecutorMaxNumbers = $param["ExecutorMaxNumbers"];
        }

        if (array_key_exists("RunningTimeParameters",$param) and $param["RunningTimeParameters"] !== null) {
            $this->RunningTimeParameters = [];
            foreach ($param["RunningTimeParameters"] as $key => $value){
                $obj = new DataEngineConfigPair();
                $obj->deserialize($value);
                array_push($this->RunningTimeParameters, $obj);
            }
        }
    }
}
