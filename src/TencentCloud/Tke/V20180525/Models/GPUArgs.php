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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GPU相关的参数，包括驱动版本，CUDA版本，cuDNN版本以及是否开启MIG
 *
 * @method DriverVersion getCUDA() 获取CUDA版本信息
 * @method void setCUDA(DriverVersion $CUDA) 设置CUDA版本信息
 * @method CUDNN getCUDNN() 获取cuDNN版本信息
 * @method void setCUDNN(CUDNN $CUDNN) 设置cuDNN版本信息
 * @method CustomDriver getCustomDriver() 获取自定义GPU驱动信息
 * @method void setCustomDriver(CustomDriver $CustomDriver) 设置自定义GPU驱动信息
 * @method DriverVersion getDriver() 获取GPU驱动版本信息
 * @method void setDriver(DriverVersion $Driver) 设置GPU驱动版本信息
 * @method boolean getMIGEnable() 获取是否启用MIG特性
 * @method void setMIGEnable(boolean $MIGEnable) 设置是否启用MIG特性
 */
class GPUArgs extends AbstractModel
{
    /**
     * @var DriverVersion CUDA版本信息
     */
    public $CUDA;

    /**
     * @var CUDNN cuDNN版本信息
     */
    public $CUDNN;

    /**
     * @var CustomDriver 自定义GPU驱动信息
     */
    public $CustomDriver;

    /**
     * @var DriverVersion GPU驱动版本信息
     */
    public $Driver;

    /**
     * @var boolean 是否启用MIG特性
     */
    public $MIGEnable;

    /**
     * @param DriverVersion $CUDA CUDA版本信息
     * @param CUDNN $CUDNN cuDNN版本信息
     * @param CustomDriver $CustomDriver 自定义GPU驱动信息
     * @param DriverVersion $Driver GPU驱动版本信息
     * @param boolean $MIGEnable 是否启用MIG特性
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
        if (array_key_exists("CUDA",$param) and $param["CUDA"] !== null) {
            $this->CUDA = new DriverVersion();
            $this->CUDA->deserialize($param["CUDA"]);
        }

        if (array_key_exists("CUDNN",$param) and $param["CUDNN"] !== null) {
            $this->CUDNN = new CUDNN();
            $this->CUDNN->deserialize($param["CUDNN"]);
        }

        if (array_key_exists("CustomDriver",$param) and $param["CustomDriver"] !== null) {
            $this->CustomDriver = new CustomDriver();
            $this->CustomDriver->deserialize($param["CustomDriver"]);
        }

        if (array_key_exists("Driver",$param) and $param["Driver"] !== null) {
            $this->Driver = new DriverVersion();
            $this->Driver->deserialize($param["Driver"]);
        }

        if (array_key_exists("MIGEnable",$param) and $param["MIGEnable"] !== null) {
            $this->MIGEnable = $param["MIGEnable"];
        }
    }
}
