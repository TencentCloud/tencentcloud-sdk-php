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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GPU机型镜像与驱动配置
 *
 * @method string getImageId() 获取<p>镜像ID</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像ID</p>
 * @method string getDriverName() 获取<p>驱动名称</p>
 * @method void setDriverName(string $DriverName) 设置<p>驱动名称</p>
 * @method string getDriverVersion() 获取<p>驱动版本</p>
 * @method void setDriverVersion(string $DriverVersion) 设置<p>驱动版本</p>
 * @method string getCUDAName() 获取<p>CUDA名称</p>
 * @method void setCUDAName(string $CUDAName) 设置<p>CUDA名称</p>
 * @method string getCUDAVersion() 获取<p>CUDA版本</p>
 * @method void setCUDAVersion(string $CUDAVersion) 设置<p>CUDA版本</p>
 * @method string getCUDNNName() 获取<p>CUDNN名称</p>
 * @method void setCUDNNName(string $CUDNNName) 设置<p>CUDNN名称</p>
 * @method string getCUDNNVersion() 获取<p>CUDNN版本</p>
 * @method void setCUDNNVersion(string $CUDNNVersion) 设置<p>CUDNN版本</p>
 */
class GpuImageDriverSpec extends AbstractModel
{
    /**
     * @var string <p>镜像ID</p>
     */
    public $ImageId;

    /**
     * @var string <p>驱动名称</p>
     */
    public $DriverName;

    /**
     * @var string <p>驱动版本</p>
     */
    public $DriverVersion;

    /**
     * @var string <p>CUDA名称</p>
     */
    public $CUDAName;

    /**
     * @var string <p>CUDA版本</p>
     */
    public $CUDAVersion;

    /**
     * @var string <p>CUDNN名称</p>
     */
    public $CUDNNName;

    /**
     * @var string <p>CUDNN版本</p>
     */
    public $CUDNNVersion;

    /**
     * @param string $ImageId <p>镜像ID</p>
     * @param string $DriverName <p>驱动名称</p>
     * @param string $DriverVersion <p>驱动版本</p>
     * @param string $CUDAName <p>CUDA名称</p>
     * @param string $CUDAVersion <p>CUDA版本</p>
     * @param string $CUDNNName <p>CUDNN名称</p>
     * @param string $CUDNNVersion <p>CUDNN版本</p>
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("DriverName",$param) and $param["DriverName"] !== null) {
            $this->DriverName = $param["DriverName"];
        }

        if (array_key_exists("DriverVersion",$param) and $param["DriverVersion"] !== null) {
            $this->DriverVersion = $param["DriverVersion"];
        }

        if (array_key_exists("CUDAName",$param) and $param["CUDAName"] !== null) {
            $this->CUDAName = $param["CUDAName"];
        }

        if (array_key_exists("CUDAVersion",$param) and $param["CUDAVersion"] !== null) {
            $this->CUDAVersion = $param["CUDAVersion"];
        }

        if (array_key_exists("CUDNNName",$param) and $param["CUDNNName"] !== null) {
            $this->CUDNNName = $param["CUDNNName"];
        }

        if (array_key_exists("CUDNNVersion",$param) and $param["CUDNNVersion"] !== null) {
            $this->CUDNNVersion = $param["CUDNNVersion"];
        }
    }
}
