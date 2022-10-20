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
 * DescribeVulScanInfo请求参数结构体
 *
 * @method integer getLocalTaskID() 获取本地镜像漏洞扫描任务ID，无则返回最近一次的漏洞任务扫描
 * @method void setLocalTaskID(integer $LocalTaskID) 设置本地镜像漏洞扫描任务ID，无则返回最近一次的漏洞任务扫描
 * @method integer getRegistryTaskID() 获取仓库镜像漏洞扫描任务ID，无则返回最近一次的漏洞任务扫描
 * @method void setRegistryTaskID(integer $RegistryTaskID) 设置仓库镜像漏洞扫描任务ID，无则返回最近一次的漏洞任务扫描
 */
class DescribeVulScanInfoRequest extends AbstractModel
{
    /**
     * @var integer 本地镜像漏洞扫描任务ID，无则返回最近一次的漏洞任务扫描
     */
    public $LocalTaskID;

    /**
     * @var integer 仓库镜像漏洞扫描任务ID，无则返回最近一次的漏洞任务扫描
     */
    public $RegistryTaskID;

    /**
     * @param integer $LocalTaskID 本地镜像漏洞扫描任务ID，无则返回最近一次的漏洞任务扫描
     * @param integer $RegistryTaskID 仓库镜像漏洞扫描任务ID，无则返回最近一次的漏洞任务扫描
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

        if (array_key_exists("RegistryTaskID",$param) and $param["RegistryTaskID"] !== null) {
            $this->RegistryTaskID = $param["RegistryTaskID"];
        }
    }
}
