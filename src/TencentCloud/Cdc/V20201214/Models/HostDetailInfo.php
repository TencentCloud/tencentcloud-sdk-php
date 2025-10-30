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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 宿主机资源的概览详细信息。
 *
 * @method string getHostTypeFamily() 获取类型族
 * @method void setHostTypeFamily(string $HostTypeFamily) 设置类型族
 * @method float getCpuTotal() 获取总CPU
 * @method void setCpuTotal(float $CpuTotal) 设置总CPU
 * @method float getCpuAvailable() 获取可用CPU
 * @method void setCpuAvailable(float $CpuAvailable) 设置可用CPU
 * @method float getMemTotal() 获取总内存
 * @method void setMemTotal(float $MemTotal) 设置总内存
 * @method float getMemAvailable() 获取可用内存
 * @method void setMemAvailable(float $MemAvailable) 设置可用内存
 */
class HostDetailInfo extends AbstractModel
{
    /**
     * @var string 类型族
     */
    public $HostTypeFamily;

    /**
     * @var float 总CPU
     */
    public $CpuTotal;

    /**
     * @var float 可用CPU
     */
    public $CpuAvailable;

    /**
     * @var float 总内存
     */
    public $MemTotal;

    /**
     * @var float 可用内存
     */
    public $MemAvailable;

    /**
     * @param string $HostTypeFamily 类型族
     * @param float $CpuTotal 总CPU
     * @param float $CpuAvailable 可用CPU
     * @param float $MemTotal 总内存
     * @param float $MemAvailable 可用内存
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
        if (array_key_exists("HostTypeFamily",$param) and $param["HostTypeFamily"] !== null) {
            $this->HostTypeFamily = $param["HostTypeFamily"];
        }

        if (array_key_exists("CpuTotal",$param) and $param["CpuTotal"] !== null) {
            $this->CpuTotal = $param["CpuTotal"];
        }

        if (array_key_exists("CpuAvailable",$param) and $param["CpuAvailable"] !== null) {
            $this->CpuAvailable = $param["CpuAvailable"];
        }

        if (array_key_exists("MemTotal",$param) and $param["MemTotal"] !== null) {
            $this->MemTotal = $param["MemTotal"];
        }

        if (array_key_exists("MemAvailable",$param) and $param["MemAvailable"] !== null) {
            $this->MemAvailable = $param["MemAvailable"];
        }
    }
}
