<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取需要制作镜像的实例ID
 * @method void setInstanceId(string $InstanceId) 设置需要制作镜像的实例ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageDescription() 获取镜像描述
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述
 * @method string getForcePoweroff() 获取软关机失败时是否执行强制关机以制作镜像
 * @method void setForcePoweroff(string $ForcePoweroff) 设置软关机失败时是否执行强制关机以制作镜像
 * @method string getSysprep() 获取创建Windows镜像时是否启用Sysprep
 * @method void setSysprep(string $Sysprep) 设置创建Windows镜像时是否启用Sysprep
 * @method string getReboot() 获取实例处于运行中时，是否允许关机执行制作镜像任务。
 * @method void setReboot(string $Reboot) 设置实例处于运行中时，是否允许关机执行制作镜像任务。
 */

/**
 *CreateImage请求参数结构体
 */
class CreateImageRequest extends AbstractModel
{
    /**
     * @var string 需要制作镜像的实例ID
     */
    public $InstanceId;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像描述
     */
    public $ImageDescription;

    /**
     * @var string 软关机失败时是否执行强制关机以制作镜像
     */
    public $ForcePoweroff;

    /**
     * @var string 创建Windows镜像时是否启用Sysprep
     */
    public $Sysprep;

    /**
     * @var string 实例处于运行中时，是否允许关机执行制作镜像任务。
     */
    public $Reboot;
    /**
     * @param string $InstanceId 需要制作镜像的实例ID
     * @param string $ImageName 镜像名称
     * @param string $ImageDescription 镜像描述
     * @param string $ForcePoweroff 软关机失败时是否执行强制关机以制作镜像
     * @param string $Sysprep 创建Windows镜像时是否启用Sysprep
     * @param string $Reboot 实例处于运行中时，是否允许关机执行制作镜像任务。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ForcePoweroff",$param) and $param["ForcePoweroff"] !== null) {
            $this->ForcePoweroff = $param["ForcePoweroff"];
        }

        if (array_key_exists("Sysprep",$param) and $param["Sysprep"] !== null) {
            $this->Sysprep = $param["Sysprep"];
        }

        if (array_key_exists("Reboot",$param) and $param["Reboot"] !== null) {
            $this->Reboot = $param["Reboot"];
        }
    }
}
