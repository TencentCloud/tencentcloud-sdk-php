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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVulScanTask请求参数结构体
 *
 * @method string getLocalImageScanType() 获取本地镜像扫描范围类型。ALL:全部本地镜像，NOT_SCAN：全部已授权未扫描本地镜像，IMAGEIDS:自选本地镜像ID
 * @method void setLocalImageScanType(string $LocalImageScanType) 设置本地镜像扫描范围类型。ALL:全部本地镜像，NOT_SCAN：全部已授权未扫描本地镜像，IMAGEIDS:自选本地镜像ID
 * @method array getLocalImageIDs() 获取根据已授权的本地镜像IDs扫描，优先权高于根据满足条件的已授权的本地镜像。
 * @method void setLocalImageIDs(array $LocalImageIDs) 设置根据已授权的本地镜像IDs扫描，优先权高于根据满足条件的已授权的本地镜像。
 * @method string getRegistryImageScanType() 获取仓库镜像扫描范围类型。ALL:全部仓库镜像，NOT_SCAN：全部已授权未扫描仓库镜像，IMAGEIDS:自选仓库镜像ID
 * @method void setRegistryImageScanType(string $RegistryImageScanType) 设置仓库镜像扫描范围类型。ALL:全部仓库镜像，NOT_SCAN：全部已授权未扫描仓库镜像，IMAGEIDS:自选仓库镜像ID
 * @method array getRegistryImageIDs() 获取根据已授权的仓库镜像IDs扫描，优先权高于根据满足条件的已授权的仓库镜像。
 * @method void setRegistryImageIDs(array $RegistryImageIDs) 设置根据已授权的仓库镜像IDs扫描，优先权高于根据满足条件的已授权的仓库镜像。
 * @method integer getLocalTaskID() 获取本地镜像重新漏洞扫描时的任务ID
 * @method void setLocalTaskID(integer $LocalTaskID) 设置本地镜像重新漏洞扫描时的任务ID
 * @method integer getRegistryTaskID() 获取仓库镜像重新漏洞扫描时的任务ID
 * @method void setRegistryTaskID(integer $RegistryTaskID) 设置仓库镜像重新漏洞扫描时的任务ID
 */
class CreateVulScanTaskRequest extends AbstractModel
{
    /**
     * @var string 本地镜像扫描范围类型。ALL:全部本地镜像，NOT_SCAN：全部已授权未扫描本地镜像，IMAGEIDS:自选本地镜像ID
     */
    public $LocalImageScanType;

    /**
     * @var array 根据已授权的本地镜像IDs扫描，优先权高于根据满足条件的已授权的本地镜像。
     */
    public $LocalImageIDs;

    /**
     * @var string 仓库镜像扫描范围类型。ALL:全部仓库镜像，NOT_SCAN：全部已授权未扫描仓库镜像，IMAGEIDS:自选仓库镜像ID
     */
    public $RegistryImageScanType;

    /**
     * @var array 根据已授权的仓库镜像IDs扫描，优先权高于根据满足条件的已授权的仓库镜像。
     */
    public $RegistryImageIDs;

    /**
     * @var integer 本地镜像重新漏洞扫描时的任务ID
     */
    public $LocalTaskID;

    /**
     * @var integer 仓库镜像重新漏洞扫描时的任务ID
     */
    public $RegistryTaskID;

    /**
     * @param string $LocalImageScanType 本地镜像扫描范围类型。ALL:全部本地镜像，NOT_SCAN：全部已授权未扫描本地镜像，IMAGEIDS:自选本地镜像ID
     * @param array $LocalImageIDs 根据已授权的本地镜像IDs扫描，优先权高于根据满足条件的已授权的本地镜像。
     * @param string $RegistryImageScanType 仓库镜像扫描范围类型。ALL:全部仓库镜像，NOT_SCAN：全部已授权未扫描仓库镜像，IMAGEIDS:自选仓库镜像ID
     * @param array $RegistryImageIDs 根据已授权的仓库镜像IDs扫描，优先权高于根据满足条件的已授权的仓库镜像。
     * @param integer $LocalTaskID 本地镜像重新漏洞扫描时的任务ID
     * @param integer $RegistryTaskID 仓库镜像重新漏洞扫描时的任务ID
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
        if (array_key_exists("LocalImageScanType",$param) and $param["LocalImageScanType"] !== null) {
            $this->LocalImageScanType = $param["LocalImageScanType"];
        }

        if (array_key_exists("LocalImageIDs",$param) and $param["LocalImageIDs"] !== null) {
            $this->LocalImageIDs = $param["LocalImageIDs"];
        }

        if (array_key_exists("RegistryImageScanType",$param) and $param["RegistryImageScanType"] !== null) {
            $this->RegistryImageScanType = $param["RegistryImageScanType"];
        }

        if (array_key_exists("RegistryImageIDs",$param) and $param["RegistryImageIDs"] !== null) {
            $this->RegistryImageIDs = $param["RegistryImageIDs"];
        }

        if (array_key_exists("LocalTaskID",$param) and $param["LocalTaskID"] !== null) {
            $this->LocalTaskID = $param["LocalTaskID"];
        }

        if (array_key_exists("RegistryTaskID",$param) and $param["RegistryTaskID"] !== null) {
            $this->RegistryTaskID = $param["RegistryTaskID"];
        }
    }
}
