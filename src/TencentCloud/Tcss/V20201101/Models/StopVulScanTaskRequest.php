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
 * StopVulScanTask请求参数结构体
 *
 * @method integer getLocalTaskID() 获取本地镜像漏洞扫描任务ID
 * @method void setLocalTaskID(integer $LocalTaskID) 设置本地镜像漏洞扫描任务ID
 * @method array getLocalImageIDs() 获取本地镜像ID，无则全部
 * @method void setLocalImageIDs(array $LocalImageIDs) 设置本地镜像ID，无则全部
 * @method array getRegistryImageIDs() 获取仓库镜像ID，无则全部
 * @method void setRegistryImageIDs(array $RegistryImageIDs) 设置仓库镜像ID，无则全部
 * @method integer getRegistryTaskID() 获取仓库镜像漏洞扫描任务ID
 * @method void setRegistryTaskID(integer $RegistryTaskID) 设置仓库镜像漏洞扫描任务ID
 */
class StopVulScanTaskRequest extends AbstractModel
{
    /**
     * @var integer 本地镜像漏洞扫描任务ID
     */
    public $LocalTaskID;

    /**
     * @var array 本地镜像ID，无则全部
     */
    public $LocalImageIDs;

    /**
     * @var array 仓库镜像ID，无则全部
     */
    public $RegistryImageIDs;

    /**
     * @var integer 仓库镜像漏洞扫描任务ID
     */
    public $RegistryTaskID;

    /**
     * @param integer $LocalTaskID 本地镜像漏洞扫描任务ID
     * @param array $LocalImageIDs 本地镜像ID，无则全部
     * @param array $RegistryImageIDs 仓库镜像ID，无则全部
     * @param integer $RegistryTaskID 仓库镜像漏洞扫描任务ID
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
        if (array_key_exists("LocalTaskID",$param) and $param["LocalTaskID"] !== null) {
            $this->LocalTaskID = $param["LocalTaskID"];
        }

        if (array_key_exists("LocalImageIDs",$param) and $param["LocalImageIDs"] !== null) {
            $this->LocalImageIDs = $param["LocalImageIDs"];
        }

        if (array_key_exists("RegistryImageIDs",$param) and $param["RegistryImageIDs"] !== null) {
            $this->RegistryImageIDs = $param["RegistryImageIDs"];
        }

        if (array_key_exists("RegistryTaskID",$param) and $param["RegistryTaskID"] !== null) {
            $this->RegistryTaskID = $param["RegistryTaskID"];
        }
    }
}
