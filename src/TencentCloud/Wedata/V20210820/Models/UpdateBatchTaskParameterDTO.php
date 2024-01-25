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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量修改任务参数
 *
 * @method string getDriverSize() 获取spark作业driver资源规格大小, 可取small,medium,large,xlarge
 * @method void setDriverSize(string $DriverSize) 设置spark作业driver资源规格大小, 可取small,medium,large,xlarge
 * @method string getExecutorMaxNumbers() 获取指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于AppExecutorNums
 * @method void setExecutorMaxNumbers(string $ExecutorMaxNumbers) 设置指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于AppExecutorNums
 * @method string getExecutorNumbers() 获取spark作业executor个数
 * @method void setExecutorNumbers(string $ExecutorNumbers) 设置spark作业executor个数
 * @method string getExecutorSize() 获取spark作业executor资源规格大小, 可取small,medium,large,xlarge
 * @method void setExecutorSize(string $ExecutorSize) 设置spark作业executor资源规格大小, 可取small,medium,large,xlarge
 * @method string getRunConfParams() 获取sparksql和presto引擎参数
 * @method void setRunConfParams(string $RunConfParams) 设置sparksql和presto引擎参数
 * @method string getIsInherit() 获取任务资源配置是否继承集群模板，0（默认）不继承，1：继承
 * @method void setIsInherit(string $IsInherit) 设置任务资源配置是否继承集群模板，0（默认）不继承，1：继承
 */
class UpdateBatchTaskParameterDTO extends AbstractModel
{
    /**
     * @var string spark作业driver资源规格大小, 可取small,medium,large,xlarge
     */
    public $DriverSize;

    /**
     * @var string 指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于AppExecutorNums
     */
    public $ExecutorMaxNumbers;

    /**
     * @var string spark作业executor个数
     */
    public $ExecutorNumbers;

    /**
     * @var string spark作业executor资源规格大小, 可取small,medium,large,xlarge
     */
    public $ExecutorSize;

    /**
     * @var string sparksql和presto引擎参数
     */
    public $RunConfParams;

    /**
     * @var string 任务资源配置是否继承集群模板，0（默认）不继承，1：继承
     */
    public $IsInherit;

    /**
     * @param string $DriverSize spark作业driver资源规格大小, 可取small,medium,large,xlarge
     * @param string $ExecutorMaxNumbers 指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于AppExecutorNums
     * @param string $ExecutorNumbers spark作业executor个数
     * @param string $ExecutorSize spark作业executor资源规格大小, 可取small,medium,large,xlarge
     * @param string $RunConfParams sparksql和presto引擎参数
     * @param string $IsInherit 任务资源配置是否继承集群模板，0（默认）不继承，1：继承
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

        if (array_key_exists("ExecutorMaxNumbers",$param) and $param["ExecutorMaxNumbers"] !== null) {
            $this->ExecutorMaxNumbers = $param["ExecutorMaxNumbers"];
        }

        if (array_key_exists("ExecutorNumbers",$param) and $param["ExecutorNumbers"] !== null) {
            $this->ExecutorNumbers = $param["ExecutorNumbers"];
        }

        if (array_key_exists("ExecutorSize",$param) and $param["ExecutorSize"] !== null) {
            $this->ExecutorSize = $param["ExecutorSize"];
        }

        if (array_key_exists("RunConfParams",$param) and $param["RunConfParams"] !== null) {
            $this->RunConfParams = $param["RunConfParams"];
        }

        if (array_key_exists("IsInherit",$param) and $param["IsInherit"] !== null) {
            $this->IsInherit = $param["IsInherit"];
        }
    }
}
