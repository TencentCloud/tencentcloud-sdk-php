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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * rasp白名单漏洞列表
 *
 * @method integer getVulVulsID() 获取漏洞id
 * @method void setVulVulsID(integer $VulVulsID) 设置漏洞id
 * @method string getVulVulsName() 获取漏洞名称
 * @method void setVulVulsName(string $VulVulsName) 设置漏洞名称
 * @method string getCveID() 获取cve_id
 * @method void setCveID(string $CveID) 设置cve_id
 * @method integer getSupportDefense() 获取漏洞防御类型，从漏洞表富化， 1:支持组件漏洞防御，组件漏洞没有正则加白。2:支持正则防御
 * @method void setSupportDefense(integer $SupportDefense) 设置漏洞防御类型，从漏洞表富化， 1:支持组件漏洞防御，组件漏洞没有正则加白。2:支持正则防御
 */
class RaspRuleVul extends AbstractModel
{
    /**
     * @var integer 漏洞id
     */
    public $VulVulsID;

    /**
     * @var string 漏洞名称
     */
    public $VulVulsName;

    /**
     * @var string cve_id
     */
    public $CveID;

    /**
     * @var integer 漏洞防御类型，从漏洞表富化， 1:支持组件漏洞防御，组件漏洞没有正则加白。2:支持正则防御
     */
    public $SupportDefense;

    /**
     * @param integer $VulVulsID 漏洞id
     * @param string $VulVulsName 漏洞名称
     * @param string $CveID cve_id
     * @param integer $SupportDefense 漏洞防御类型，从漏洞表富化， 1:支持组件漏洞防御，组件漏洞没有正则加白。2:支持正则防御
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
        if (array_key_exists("VulVulsID",$param) and $param["VulVulsID"] !== null) {
            $this->VulVulsID = $param["VulVulsID"];
        }

        if (array_key_exists("VulVulsName",$param) and $param["VulVulsName"] !== null) {
            $this->VulVulsName = $param["VulVulsName"];
        }

        if (array_key_exists("CveID",$param) and $param["CveID"] !== null) {
            $this->CveID = $param["CveID"];
        }

        if (array_key_exists("SupportDefense",$param) and $param["SupportDefense"] !== null) {
            $this->SupportDefense = $param["SupportDefense"];
        }
    }
}
