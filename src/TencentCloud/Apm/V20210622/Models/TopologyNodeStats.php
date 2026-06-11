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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拓扑图应用节点状态
 *
 * @method integer getTotal() 获取节点总数
 * @method void setTotal(integer $Total) 设置节点总数
 * @method integer getHealthy() 获取健康节点数量
 * @method void setHealthy(integer $Healthy) 设置健康节点数量
 * @method integer getWarning() 获取警告节点数量
 * @method void setWarning(integer $Warning) 设置警告节点数量
 * @method integer getError() 获取异常节点数量
 * @method void setError(integer $Error) 设置异常节点数量
 */
class TopologyNodeStats extends AbstractModel
{
    /**
     * @var integer 节点总数
     */
    public $Total;

    /**
     * @var integer 健康节点数量
     */
    public $Healthy;

    /**
     * @var integer 警告节点数量
     */
    public $Warning;

    /**
     * @var integer 异常节点数量
     */
    public $Error;

    /**
     * @param integer $Total 节点总数
     * @param integer $Healthy 健康节点数量
     * @param integer $Warning 警告节点数量
     * @param integer $Error 异常节点数量
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("Warning",$param) and $param["Warning"] !== null) {
            $this->Warning = $param["Warning"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
