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
 * CPU resource summary item aggregated from all running deployments.
 *
 * @method integer getTotalCpuCores() 获取<p>CPU 总核数（headCpu + cpu × replicas 的总和）</p>
 * @method void setTotalCpuCores(integer $TotalCpuCores) 设置<p>CPU 总核数（headCpu + cpu × replicas 的总和）</p>
 * @method integer getTotalMemoryGB() 获取<p>内存总量（headMem + mem × replicas 的总和，单位 GB）</p>
 * @method void setTotalMemoryGB(integer $TotalMemoryGB) 设置<p>内存总量（headMem + mem × replicas 的总和，单位 GB）</p>
 * @method integer getReplicas() 获取<p>运行中的副本总数</p>
 * @method void setReplicas(integer $Replicas) 设置<p>运行中的副本总数</p>
 */
class CpuSummaryItem extends AbstractModel
{
    /**
     * @var integer <p>CPU 总核数（headCpu + cpu × replicas 的总和）</p>
     */
    public $TotalCpuCores;

    /**
     * @var integer <p>内存总量（headMem + mem × replicas 的总和，单位 GB）</p>
     */
    public $TotalMemoryGB;

    /**
     * @var integer <p>运行中的副本总数</p>
     */
    public $Replicas;

    /**
     * @param integer $TotalCpuCores <p>CPU 总核数（headCpu + cpu × replicas 的总和）</p>
     * @param integer $TotalMemoryGB <p>内存总量（headMem + mem × replicas 的总和，单位 GB）</p>
     * @param integer $Replicas <p>运行中的副本总数</p>
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
        if (array_key_exists("TotalCpuCores",$param) and $param["TotalCpuCores"] !== null) {
            $this->TotalCpuCores = $param["TotalCpuCores"];
        }

        if (array_key_exists("TotalMemoryGB",$param) and $param["TotalMemoryGB"] !== null) {
            $this->TotalMemoryGB = $param["TotalMemoryGB"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }
    }
}
