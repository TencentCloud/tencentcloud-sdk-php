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
 * DescribeVulCountByDates请求参数结构体
 *
 * @method array getLastDays() 获取需要查询最近几天的数据，需要都 -1后传入
 * @method void setLastDays(array $LastDays) 设置需要查询最近几天的数据，需要都 -1后传入
 * @method integer getVulCategory() 获取漏洞的分类: 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
 * @method void setVulCategory(integer $VulCategory) 设置漏洞的分类: 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
 * @method string getIfEmergency() 获取是否为应急漏洞筛选  是: yes
 * @method void setIfEmergency(string $IfEmergency) 设置是否为应急漏洞筛选  是: yes
 */
class DescribeVulCountByDatesRequest extends AbstractModel
{
    /**
     * @var array 需要查询最近几天的数据，需要都 -1后传入
     */
    public $LastDays;

    /**
     * @var integer 漏洞的分类: 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
     */
    public $VulCategory;

    /**
     * @var string 是否为应急漏洞筛选  是: yes
     */
    public $IfEmergency;

    /**
     * @param array $LastDays 需要查询最近几天的数据，需要都 -1后传入
     * @param integer $VulCategory 漏洞的分类: 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
     * @param string $IfEmergency 是否为应急漏洞筛选  是: yes
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
        if (array_key_exists("LastDays",$param) and $param["LastDays"] !== null) {
            $this->LastDays = $param["LastDays"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("IfEmergency",$param) and $param["IfEmergency"] !== null) {
            $this->IfEmergency = $param["IfEmergency"];
        }
    }
}
