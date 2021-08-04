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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 小租户网关套餐配置
 *
 * @method float getCPU() 获取CPU核心数
 * @method void setCPU(float $CPU) 设置CPU核心数
 * @method integer getMem() 获取内存大小，单位MB
 * @method void setMem(integer $Mem) 设置内存大小，单位MB
 * @method string getPackageVersion() 获取套餐包版本名称
 * @method void setPackageVersion(string $PackageVersion) 设置套餐包版本名称
 */
class StandaloneGatewayPackageInfo extends AbstractModel
{
    /**
     * @var float CPU核心数
     */
    public $CPU;

    /**
     * @var integer 内存大小，单位MB
     */
    public $Mem;

    /**
     * @var string 套餐包版本名称
     */
    public $PackageVersion;

    /**
     * @param float $CPU CPU核心数
     * @param integer $Mem 内存大小，单位MB
     * @param string $PackageVersion 套餐包版本名称
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
        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }
    }
}
