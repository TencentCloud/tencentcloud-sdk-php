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
 * TCHouse-X 任务参数
 *
 * @method integer getDriverCores() 获取DriverCPU核数
 * @method void setDriverCores(integer $DriverCores) 设置DriverCPU核数
 * @method integer getExecutorCores() 获取ExecutorCPU核数
 * @method void setExecutorCores(integer $ExecutorCores) 设置ExecutorCPU核数
 * @method integer getNumExecutors() 获取Executor个数
 * @method void setNumExecutors(integer $NumExecutors) 设置Executor个数
 */
class TCHouseXTaskParameter extends AbstractModel
{
    /**
     * @var integer DriverCPU核数
     */
    public $DriverCores;

    /**
     * @var integer ExecutorCPU核数
     */
    public $ExecutorCores;

    /**
     * @var integer Executor个数
     */
    public $NumExecutors;

    /**
     * @param integer $DriverCores DriverCPU核数
     * @param integer $ExecutorCores ExecutorCPU核数
     * @param integer $NumExecutors Executor个数
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
        if (array_key_exists("DriverCores",$param) and $param["DriverCores"] !== null) {
            $this->DriverCores = $param["DriverCores"];
        }

        if (array_key_exists("ExecutorCores",$param) and $param["ExecutorCores"] !== null) {
            $this->ExecutorCores = $param["ExecutorCores"];
        }

        if (array_key_exists("NumExecutors",$param) and $param["NumExecutors"] !== null) {
            $this->NumExecutors = $param["NumExecutors"];
        }
    }
}
