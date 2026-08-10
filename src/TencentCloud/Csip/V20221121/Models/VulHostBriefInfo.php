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
 * 主机简要信息
 *
 * @method string getInstanceID() 获取<p>云主机实例 ID<br>参数格式：形如 ins-xxxxxxxx</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>云主机实例 ID<br>参数格式：形如 ins-xxxxxxxx</p>
 * @method string getName() 获取<p>主机名称</p>
 * @method void setName(string $Name) 设置<p>主机名称</p>
 * @method string getPublicIP() 获取<p>公网 IP 地址</p>
 * @method void setPublicIP(string $PublicIP) 设置<p>公网 IP 地址</p>
 * @method string getPrivateIP() 获取<p>内网 IP 地址</p>
 * @method void setPrivateIP(string $PrivateIP) 设置<p>内网 IP 地址</p>
 * @method string getDefendVersion() 获取<p>防护版本<br>枚举值：<br>NONE：无防护<br>BASIC：基础版<br>PRO：专业版<br>ULTIMATE：旗舰版<br>PRO_LH：轻量版</p>
 * @method void setDefendVersion(string $DefendVersion) 设置<p>防护版本<br>枚举值：<br>NONE：无防护<br>BASIC：基础版<br>PRO：专业版<br>ULTIMATE：旗舰版<br>PRO_LH：轻量版</p>
 * @method string getDefendStatus() 获取<p>漏洞防御状态<br>枚举值：<br>ENABLED：已开启<br>NOT_SUPPORTED：不支持<br>NOT_ENABLED：未开启</p>
 * @method void setDefendStatus(string $DefendStatus) 设置<p>漏洞防御状态<br>枚举值：<br>ENABLED：已开启<br>NOT_SUPPORTED：不支持<br>NOT_ENABLED：未开启</p>
 * @method AccountBriefInfo getAccount() 获取<p>所属账号信息</p>
 * @method void setAccount(AccountBriefInfo $Account) 设置<p>所属账号信息</p>
 * @method string getInstanceStatus() 获取<p>云主机实例状态<br>枚举值：<br>RUNNING：运行中<br>STOPPED：已停止<br>UNKNOWN：未知</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>云主机实例状态<br>枚举值：<br>RUNNING：运行中<br>STOPPED：已停止<br>UNKNOWN：未知</p>
 * @method string getRiskStatus() 获取<p>修复状态枚举值</p><p>枚举值：</p><ul><li>PENDING： 待修复</li><li>SCANNING： 扫描中</li><li>FIXED： 已修复</li><li>IGNORED： 已忽略</li><li>FIXING： 修复中</li><li>FIX_FAILED： 修复失败</li><li>NEED_REBOOT： 修复待重启</li></ul>
 * @method void setRiskStatus(string $RiskStatus) 设置<p>修复状态枚举值</p><p>枚举值：</p><ul><li>PENDING： 待修复</li><li>SCANNING： 扫描中</li><li>FIXED： 已修复</li><li>IGNORED： 已忽略</li><li>FIXING： 修复中</li><li>FIX_FAILED： 修复失败</li><li>NEED_REBOOT： 修复待重启</li></ul>
 * @method VPRRatingInfo getVPRRating() 获取<p>VPR 评级信息（含评级结果与各维度详情）</p>
 * @method void setVPRRating(VPRRatingInfo $VPRRating) 设置<p>VPR 评级信息（含评级结果与各维度详情）</p>
 * @method string getAgentStatus() 获取<p>CWP Agent 状态<br>枚举值：<br>ONLINE：在线<br>OFFLINE：离线<br>UNINSTALLED：未安装</p>
 * @method void setAgentStatus(string $AgentStatus) 设置<p>CWP Agent 状态<br>枚举值：<br>ONLINE：在线<br>OFFLINE：离线<br>UNINSTALLED：未安装</p>
 * @method array getTagItem() 获取<p>资产标签列表（CSIP 内部资产标签）</p>
 * @method void setTagItem(array $TagItem) 设置<p>资产标签列表（CSIP 内部资产标签）</p>
 * @method array getCloudTag() 获取<p>云上标签列表（云资产侧 Tag）</p>
 * @method void setCloudTag(array $CloudTag) 设置<p>云上标签列表（云资产侧 Tag）</p>
 */
class VulHostBriefInfo extends AbstractModel
{
    /**
     * @var string <p>云主机实例 ID<br>参数格式：形如 ins-xxxxxxxx</p>
     */
    public $InstanceID;

    /**
     * @var string <p>主机名称</p>
     */
    public $Name;

    /**
     * @var string <p>公网 IP 地址</p>
     */
    public $PublicIP;

    /**
     * @var string <p>内网 IP 地址</p>
     */
    public $PrivateIP;

    /**
     * @var string <p>防护版本<br>枚举值：<br>NONE：无防护<br>BASIC：基础版<br>PRO：专业版<br>ULTIMATE：旗舰版<br>PRO_LH：轻量版</p>
     */
    public $DefendVersion;

    /**
     * @var string <p>漏洞防御状态<br>枚举值：<br>ENABLED：已开启<br>NOT_SUPPORTED：不支持<br>NOT_ENABLED：未开启</p>
     */
    public $DefendStatus;

    /**
     * @var AccountBriefInfo <p>所属账号信息</p>
     */
    public $Account;

    /**
     * @var string <p>云主机实例状态<br>枚举值：<br>RUNNING：运行中<br>STOPPED：已停止<br>UNKNOWN：未知</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>修复状态枚举值</p><p>枚举值：</p><ul><li>PENDING： 待修复</li><li>SCANNING： 扫描中</li><li>FIXED： 已修复</li><li>IGNORED： 已忽略</li><li>FIXING： 修复中</li><li>FIX_FAILED： 修复失败</li><li>NEED_REBOOT： 修复待重启</li></ul>
     */
    public $RiskStatus;

    /**
     * @var VPRRatingInfo <p>VPR 评级信息（含评级结果与各维度详情）</p>
     */
    public $VPRRating;

    /**
     * @var string <p>CWP Agent 状态<br>枚举值：<br>ONLINE：在线<br>OFFLINE：离线<br>UNINSTALLED：未安装</p>
     */
    public $AgentStatus;

    /**
     * @var array <p>资产标签列表（CSIP 内部资产标签）</p>
     */
    public $TagItem;

    /**
     * @var array <p>云上标签列表（云资产侧 Tag）</p>
     */
    public $CloudTag;

    /**
     * @param string $InstanceID <p>云主机实例 ID<br>参数格式：形如 ins-xxxxxxxx</p>
     * @param string $Name <p>主机名称</p>
     * @param string $PublicIP <p>公网 IP 地址</p>
     * @param string $PrivateIP <p>内网 IP 地址</p>
     * @param string $DefendVersion <p>防护版本<br>枚举值：<br>NONE：无防护<br>BASIC：基础版<br>PRO：专业版<br>ULTIMATE：旗舰版<br>PRO_LH：轻量版</p>
     * @param string $DefendStatus <p>漏洞防御状态<br>枚举值：<br>ENABLED：已开启<br>NOT_SUPPORTED：不支持<br>NOT_ENABLED：未开启</p>
     * @param AccountBriefInfo $Account <p>所属账号信息</p>
     * @param string $InstanceStatus <p>云主机实例状态<br>枚举值：<br>RUNNING：运行中<br>STOPPED：已停止<br>UNKNOWN：未知</p>
     * @param string $RiskStatus <p>修复状态枚举值</p><p>枚举值：</p><ul><li>PENDING： 待修复</li><li>SCANNING： 扫描中</li><li>FIXED： 已修复</li><li>IGNORED： 已忽略</li><li>FIXING： 修复中</li><li>FIX_FAILED： 修复失败</li><li>NEED_REBOOT： 修复待重启</li></ul>
     * @param VPRRatingInfo $VPRRating <p>VPR 评级信息（含评级结果与各维度详情）</p>
     * @param string $AgentStatus <p>CWP Agent 状态<br>枚举值：<br>ONLINE：在线<br>OFFLINE：离线<br>UNINSTALLED：未安装</p>
     * @param array $TagItem <p>资产标签列表（CSIP 内部资产标签）</p>
     * @param array $CloudTag <p>云上标签列表（云资产侧 Tag）</p>
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("PrivateIP",$param) and $param["PrivateIP"] !== null) {
            $this->PrivateIP = $param["PrivateIP"];
        }

        if (array_key_exists("DefendVersion",$param) and $param["DefendVersion"] !== null) {
            $this->DefendVersion = $param["DefendVersion"];
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new AccountBriefInfo();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("VPRRating",$param) and $param["VPRRating"] !== null) {
            $this->VPRRating = new VPRRatingInfo();
            $this->VPRRating->deserialize($param["VPRRating"]);
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("TagItem",$param) and $param["TagItem"] !== null) {
            $this->TagItem = [];
            foreach ($param["TagItem"] as $key => $value){
                $obj = new MiniTagItem();
                $obj->deserialize($value);
                array_push($this->TagItem, $obj);
            }
        }

        if (array_key_exists("CloudTag",$param) and $param["CloudTag"] !== null) {
            $this->CloudTag = [];
            foreach ($param["CloudTag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->CloudTag, $obj);
            }
        }
    }
}
