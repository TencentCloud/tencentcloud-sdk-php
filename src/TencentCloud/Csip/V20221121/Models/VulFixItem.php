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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞修复项，指定一个漏洞/KB补丁及其需要修复的目标主机
 *
 * @method array getInstanceIds() 获取<p>需要修复的主机实例ID列表<br>入参限制：单项最多1000个实例ID</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>需要修复的主机实例ID列表<br>入参限制：单项最多1000个实例ID</p>
 * @method integer getVulId() 获取<p>漏洞ID，VulId和KBId二选一</p>
 * @method void setVulId(integer $VulId) 设置<p>漏洞ID，VulId和KBId二选一</p>
 * @method integer getKBId() 获取<p>KB补丁ID，VulId和KBId二选一</p>
 * @method void setKBId(integer $KBId) 设置<p>KB补丁ID，VulId和KBId二选一</p>
 */
class VulFixItem extends AbstractModel
{
    /**
     * @var array <p>需要修复的主机实例ID列表<br>入参限制：单项最多1000个实例ID</p>
     */
    public $InstanceIds;

    /**
     * @var integer <p>漏洞ID，VulId和KBId二选一</p>
     */
    public $VulId;

    /**
     * @var integer <p>KB补丁ID，VulId和KBId二选一</p>
     */
    public $KBId;

    /**
     * @param array $InstanceIds <p>需要修复的主机实例ID列表<br>入参限制：单项最多1000个实例ID</p>
     * @param integer $VulId <p>漏洞ID，VulId和KBId二选一</p>
     * @param integer $KBId <p>KB补丁ID，VulId和KBId二选一</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("KBId",$param) and $param["KBId"] !== null) {
            $this->KBId = $param["KBId"];
        }
    }
}
