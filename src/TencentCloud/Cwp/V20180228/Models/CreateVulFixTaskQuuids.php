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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建修复任务的quuids
 *
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method array getQuuids() 获取需要修复漏洞的主机，所有主机必须有VulId的这个漏洞且是待修复状态。
 * @method void setQuuids(array $Quuids) 设置需要修复漏洞的主机，所有主机必须有VulId的这个漏洞且是待修复状态。
 * @method integer getFixMethod() 获取修复方式 0组件更新或者安装补丁,1禁用服务
 * @method void setFixMethod(integer $FixMethod) 设置修复方式 0组件更新或者安装补丁,1禁用服务
 */
class CreateVulFixTaskQuuids extends AbstractModel
{
    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var array 需要修复漏洞的主机，所有主机必须有VulId的这个漏洞且是待修复状态。
     */
    public $Quuids;

    /**
     * @var integer 修复方式 0组件更新或者安装补丁,1禁用服务
     */
    public $FixMethod;

    /**
     * @param integer $VulId 漏洞id
     * @param array $Quuids 需要修复漏洞的主机，所有主机必须有VulId的这个漏洞且是待修复状态。
     * @param integer $FixMethod 修复方式 0组件更新或者安装补丁,1禁用服务
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }
    }
}
