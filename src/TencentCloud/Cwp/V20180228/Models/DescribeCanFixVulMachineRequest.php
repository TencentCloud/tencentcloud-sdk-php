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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCanFixVulMachine请求参数结构体
 *
 * @method array getVulIds() 获取漏洞id 支持多个漏洞
 * @method void setVulIds(array $VulIds) 设置漏洞id 支持多个漏洞
 * @method array getQuuids() 获取需要修复的主机，和VulIds是and 的关系
 * @method void setQuuids(array $Quuids) 设置需要修复的主机，和VulIds是and 的关系
 */
class DescribeCanFixVulMachineRequest extends AbstractModel
{
    /**
     * @var array 漏洞id 支持多个漏洞
     */
    public $VulIds;

    /**
     * @var array 需要修复的主机，和VulIds是and 的关系
     */
    public $Quuids;

    /**
     * @param array $VulIds 漏洞id 支持多个漏洞
     * @param array $Quuids 需要修复的主机，和VulIds是and 的关系
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
        if (array_key_exists("VulIds",$param) and $param["VulIds"] !== null) {
            $this->VulIds = $param["VulIds"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }
    }
}
