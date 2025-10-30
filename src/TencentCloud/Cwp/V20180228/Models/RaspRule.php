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
 * rasp白名单规则
 *
 * @method integer getId() 获取规则ID
 * @method void setId(integer $Id) 设置规则ID
 * @method string getURLRegexp() 获取自定义请求url范围正则表达式，为空则保存不成功
 * @method void setURLRegexp(string $URLRegexp) 设置自定义请求url范围正则表达式，为空则保存不成功
 * @method integer getVulVulsID() 获取漏洞id
 * @method void setVulVulsID(integer $VulVulsID) 设置漏洞id
 * @method string getVulVulsName() 获取漏洞名称
 * @method void setVulVulsName(string $VulVulsName) 设置漏洞名称
 * @method string getCveID() 获取cve_id
 * @method void setCveID(string $CveID) 设置cve_id
 * @method integer getSupportDefense() 获取漏洞防御类型，从漏洞表富化， 1:支持组件漏洞防御，组件漏洞没有正则加白。2:支持正则防御
 * @method void setSupportDefense(integer $SupportDefense) 设置漏洞防御类型，从漏洞表富化， 1:支持组件漏洞防御，组件漏洞没有正则加白。2:支持正则防御
 * @method integer getWhiteType() 获取加白范围，0:全部请求加白，1:自定义请求范围加白
 * @method void setWhiteType(integer $WhiteType) 设置加白范围，0:全部请求加白，1:自定义请求范围加白
 * @method integer getStatus() 获取状态 0: 有效
 * @method void setStatus(integer $Status) 设置状态 0: 有效
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 */
class RaspRule extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $Id;

    /**
     * @var string 自定义请求url范围正则表达式，为空则保存不成功
     */
    public $URLRegexp;

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
     * @var integer 加白范围，0:全部请求加白，1:自定义请求范围加白
     */
    public $WhiteType;

    /**
     * @var integer 状态 0: 有效
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @param integer $Id 规则ID
     * @param string $URLRegexp 自定义请求url范围正则表达式，为空则保存不成功
     * @param integer $VulVulsID 漏洞id
     * @param string $VulVulsName 漏洞名称
     * @param string $CveID cve_id
     * @param integer $SupportDefense 漏洞防御类型，从漏洞表富化， 1:支持组件漏洞防御，组件漏洞没有正则加白。2:支持正则防御
     * @param integer $WhiteType 加白范围，0:全部请求加白，1:自定义请求范围加白
     * @param integer $Status 状态 0: 有效
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("URLRegexp",$param) and $param["URLRegexp"] !== null) {
            $this->URLRegexp = $param["URLRegexp"];
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

        if (array_key_exists("WhiteType",$param) and $param["WhiteType"] !== null) {
            $this->WhiteType = $param["WhiteType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
