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
 * 漏洞修复汇总信息
 *
 * @method integer getVulId() 获取<p>漏洞ID</p>
 * @method void setVulId(integer $VulId) 设置<p>漏洞ID</p>
 * @method string getVulName() 获取<p>漏洞名称</p>
 * @method void setVulName(string $VulName) 设置<p>漏洞名称</p>
 * @method string getCveId() 获取<p>CVE编号</p>
 * @method void setCveId(string $CveId) 设置<p>CVE编号</p>
 * @method integer getAffectedCount() 获取<p>受影响主机数</p>
 * @method void setAffectedCount(integer $AffectedCount) 设置<p>受影响主机数</p>
 * @method boolean getNeedReboot() 获取<p>修复后是否需要重启系统</p>
 * @method void setNeedReboot(boolean $NeedReboot) 设置<p>修复后是否需要重启系统</p>
 * @method boolean getFixSwitch() 获取<p>是否支持一键修复true-支持 false-不支持</p>
 * @method void setFixSwitch(boolean $FixSwitch) 设置<p>是否支持一键修复true-支持 false-不支持</p>
 */
class VulFixSummaryItem extends AbstractModel
{
    /**
     * @var integer <p>漏洞ID</p>
     */
    public $VulId;

    /**
     * @var string <p>漏洞名称</p>
     */
    public $VulName;

    /**
     * @var string <p>CVE编号</p>
     */
    public $CveId;

    /**
     * @var integer <p>受影响主机数</p>
     */
    public $AffectedCount;

    /**
     * @var boolean <p>修复后是否需要重启系统</p>
     */
    public $NeedReboot;

    /**
     * @var boolean <p>是否支持一键修复true-支持 false-不支持</p>
     */
    public $FixSwitch;

    /**
     * @param integer $VulId <p>漏洞ID</p>
     * @param string $VulName <p>漏洞名称</p>
     * @param string $CveId <p>CVE编号</p>
     * @param integer $AffectedCount <p>受影响主机数</p>
     * @param boolean $NeedReboot <p>修复后是否需要重启系统</p>
     * @param boolean $FixSwitch <p>是否支持一键修复true-支持 false-不支持</p>
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

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("AffectedCount",$param) and $param["AffectedCount"] !== null) {
            $this->AffectedCount = $param["AffectedCount"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("FixSwitch",$param) and $param["FixSwitch"] !== null) {
            $this->FixSwitch = $param["FixSwitch"];
        }
    }
}
