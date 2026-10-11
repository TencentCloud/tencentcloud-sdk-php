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
 * Spark 集群资源规格（CU 维度），Spec.Spark 平铺字段载体。
 *
 * @method integer getDriverCU() 获取<p>Driver 资源规格（CU 数）.</p>
 * @method void setDriverCU(integer $DriverCU) 设置<p>Driver 资源规格（CU 数）.</p>
 * @method integer getExecutorCU() 获取<p>Executor 资源规格（CU 数）.</p>
 * @method void setExecutorCU(integer $ExecutorCU) 设置<p>Executor 资源规格（CU 数）.</p>
 * @method integer getExecutorNum() 获取<p>Executor 实例数量（弹性伸缩关闭时的固定数量）.</p>
 * @method void setExecutorNum(integer $ExecutorNum) 设置<p>Executor 实例数量（弹性伸缩关闭时的固定数量）.</p>
 * @method boolean getDynamicAllocation() 获取<p>是否开启弹性扩缩容.</p>
 * @method void setDynamicAllocation(boolean $DynamicAllocation) 设置<p>是否开启弹性扩缩容.</p>
 * @method integer getMinExecutors() 获取<p>弹性扩缩容最小 Executor 数.</p>
 * @method void setMinExecutors(integer $MinExecutors) 设置<p>弹性扩缩容最小 Executor 数.</p>
 * @method integer getMaxExecutors() 获取<p>弹性扩缩容最大 Executor 数.</p>
 * @method void setMaxExecutors(integer $MaxExecutors) 设置<p>弹性扩缩容最大 Executor 数.</p>
 */
class SparkJobSpec extends AbstractModel
{
    /**
     * @var integer <p>Driver 资源规格（CU 数）.</p>
     */
    public $DriverCU;

    /**
     * @var integer <p>Executor 资源规格（CU 数）.</p>
     */
    public $ExecutorCU;

    /**
     * @var integer <p>Executor 实例数量（弹性伸缩关闭时的固定数量）.</p>
     */
    public $ExecutorNum;

    /**
     * @var boolean <p>是否开启弹性扩缩容.</p>
     */
    public $DynamicAllocation;

    /**
     * @var integer <p>弹性扩缩容最小 Executor 数.</p>
     */
    public $MinExecutors;

    /**
     * @var integer <p>弹性扩缩容最大 Executor 数.</p>
     */
    public $MaxExecutors;

    /**
     * @param integer $DriverCU <p>Driver 资源规格（CU 数）.</p>
     * @param integer $ExecutorCU <p>Executor 资源规格（CU 数）.</p>
     * @param integer $ExecutorNum <p>Executor 实例数量（弹性伸缩关闭时的固定数量）.</p>
     * @param boolean $DynamicAllocation <p>是否开启弹性扩缩容.</p>
     * @param integer $MinExecutors <p>弹性扩缩容最小 Executor 数.</p>
     * @param integer $MaxExecutors <p>弹性扩缩容最大 Executor 数.</p>
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
        if (array_key_exists("DriverCU",$param) and $param["DriverCU"] !== null) {
            $this->DriverCU = $param["DriverCU"];
        }

        if (array_key_exists("ExecutorCU",$param) and $param["ExecutorCU"] !== null) {
            $this->ExecutorCU = $param["ExecutorCU"];
        }

        if (array_key_exists("ExecutorNum",$param) and $param["ExecutorNum"] !== null) {
            $this->ExecutorNum = $param["ExecutorNum"];
        }

        if (array_key_exists("DynamicAllocation",$param) and $param["DynamicAllocation"] !== null) {
            $this->DynamicAllocation = $param["DynamicAllocation"];
        }

        if (array_key_exists("MinExecutors",$param) and $param["MinExecutors"] !== null) {
            $this->MinExecutors = $param["MinExecutors"];
        }

        if (array_key_exists("MaxExecutors",$param) and $param["MaxExecutors"] !== null) {
            $this->MaxExecutors = $param["MaxExecutors"];
        }
    }
}
