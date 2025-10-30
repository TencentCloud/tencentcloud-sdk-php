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
 * 根据cve_id查询漏洞详情
 *
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method integer getFixSwitch() 获取修复支持情况：0-Windows/Linux均不支持修复 ;1-Windows/Linux 均支持修复 ;2-仅Linux支持修复;3-仅Windows支持修复
 * @method void setFixSwitch(integer $FixSwitch) 设置修复支持情况：0-Windows/Linux均不支持修复 ;1-Windows/Linux 均支持修复 ;2-仅Linux支持修复;3-仅Windows支持修复
 */
class VulInfoByCveId extends AbstractModel
{
    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var integer 修复支持情况：0-Windows/Linux均不支持修复 ;1-Windows/Linux 均支持修复 ;2-仅Linux支持修复;3-仅Windows支持修复
     */
    public $FixSwitch;

    /**
     * @param integer $VulId 漏洞id
     * @param integer $FixSwitch 修复支持情况：0-Windows/Linux均不支持修复 ;1-Windows/Linux 均支持修复 ;2-仅Linux支持修复;3-仅Windows支持修复
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

        if (array_key_exists("FixSwitch",$param) and $param["FixSwitch"] !== null) {
            $this->FixSwitch = $param["FixSwitch"];
        }
    }
}
