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
 * 漏洞等级数量实体
 *
 * @method integer getVulLevel() 获取漏洞等级
 * @method void setVulLevel(integer $VulLevel) 设置漏洞等级
 * @method integer getVulCount() 获取漏洞数量
 * @method void setVulCount(integer $VulCount) 设置漏洞数量
 */
class VulLevelCountInfo extends AbstractModel
{
    /**
     * @var integer 漏洞等级
     */
    public $VulLevel;

    /**
     * @var integer 漏洞数量
     */
    public $VulCount;

    /**
     * @param integer $VulLevel 漏洞等级
     * @param integer $VulCount 漏洞数量
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
        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }
    }
}
