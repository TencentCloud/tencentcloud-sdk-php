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
 * 漏洞忽略规则
 *
 * @method integer getVulID() 获取漏洞规则ID
 * @method void setVulID(integer $VulID) 设置漏洞规则ID
 * @method integer getAssetScopeType() 获取<li>0:全部主机</li>
<li>1:自选主机</li>
 * @method void setAssetScopeType(integer $AssetScopeType) 设置<li>0:全部主机</li>
<li>1:自选主机</li>
 * @method array getIncludeQuuidList() 获取自选主机情况下自选主机quuid列表
 * @method void setIncludeQuuidList(array $IncludeQuuidList) 设置自选主机情况下自选主机quuid列表
 * @method array getExcludeQuuidList() 获取全部主机情况下排出的主机
 * @method void setExcludeQuuidList(array $ExcludeQuuidList) 设置全部主机情况下排出的主机
 * @method string getRemark() 获取忽略的原因
 * @method void setRemark(string $Remark) 设置忽略的原因
 * @method integer getConfigHostCount() 获取配置主机数
 * @method void setConfigHostCount(integer $ConfigHostCount) 设置配置主机数
 * @method integer getAffectedHostCount() 获取实际受影响主机数
 * @method void setAffectedHostCount(integer $AffectedHostCount) 设置实际受影响主机数
 * @method string getVulName() 获取漏洞名字
 * @method void setVulName(string $VulName) 设置漏洞名字
 * @method integer getRuleID() 获取忽略规则ID
 * @method void setRuleID(integer $RuleID) 设置忽略规则ID
 * @method string getModifyTime() 获取最近更新时间
 * @method void setModifyTime(string $ModifyTime) 设置最近更新时间
 */
class VulIgnoreRule extends AbstractModel
{
    /**
     * @var integer 漏洞规则ID
     */
    public $VulID;

    /**
     * @var integer <li>0:全部主机</li>
<li>1:自选主机</li>
     */
    public $AssetScopeType;

    /**
     * @var array 自选主机情况下自选主机quuid列表
     */
    public $IncludeQuuidList;

    /**
     * @var array 全部主机情况下排出的主机
     */
    public $ExcludeQuuidList;

    /**
     * @var string 忽略的原因
     */
    public $Remark;

    /**
     * @var integer 配置主机数
     */
    public $ConfigHostCount;

    /**
     * @var integer 实际受影响主机数
     */
    public $AffectedHostCount;

    /**
     * @var string 漏洞名字
     */
    public $VulName;

    /**
     * @var integer 忽略规则ID
     */
    public $RuleID;

    /**
     * @var string 最近更新时间
     */
    public $ModifyTime;

    /**
     * @param integer $VulID 漏洞规则ID
     * @param integer $AssetScopeType <li>0:全部主机</li>
<li>1:自选主机</li>
     * @param array $IncludeQuuidList 自选主机情况下自选主机quuid列表
     * @param array $ExcludeQuuidList 全部主机情况下排出的主机
     * @param string $Remark 忽略的原因
     * @param integer $ConfigHostCount 配置主机数
     * @param integer $AffectedHostCount 实际受影响主机数
     * @param string $VulName 漏洞名字
     * @param integer $RuleID 忽略规则ID
     * @param string $ModifyTime 最近更新时间
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
        if (array_key_exists("VulID",$param) and $param["VulID"] !== null) {
            $this->VulID = $param["VulID"];
        }

        if (array_key_exists("AssetScopeType",$param) and $param["AssetScopeType"] !== null) {
            $this->AssetScopeType = $param["AssetScopeType"];
        }

        if (array_key_exists("IncludeQuuidList",$param) and $param["IncludeQuuidList"] !== null) {
            $this->IncludeQuuidList = $param["IncludeQuuidList"];
        }

        if (array_key_exists("ExcludeQuuidList",$param) and $param["ExcludeQuuidList"] !== null) {
            $this->ExcludeQuuidList = $param["ExcludeQuuidList"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConfigHostCount",$param) and $param["ConfigHostCount"] !== null) {
            $this->ConfigHostCount = $param["ConfigHostCount"];
        }

        if (array_key_exists("AffectedHostCount",$param) and $param["AffectedHostCount"] !== null) {
            $this->AffectedHostCount = $param["AffectedHostCount"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
