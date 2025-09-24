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
 * 漏洞列表信息
 *
 * @method string getName() 获取漏洞名称
 * @method void setName(string $Name) 设置漏洞名称
 * @method array getTags() 获取漏洞标签
 * @method void setTags(array $Tags) 设置漏洞标签
 * @method float getCVSSV3Score() 获取CVSS V3分数
 * @method void setCVSSV3Score(float $CVSSV3Score) 设置CVSS V3分数
 * @method string getLevel() 获取风险等级
 * @method void setLevel(string $Level) 设置风险等级
 * @method string getCVEID() 获取CVE编号
 * @method void setCVEID(string $CVEID) 设置CVE编号
 * @method string getCategory() 获取漏洞子类型
 * @method void setCategory(string $Category) 设置漏洞子类型
 * @method string getFoundTime() 获取首次发现时间
 * @method void setFoundTime(string $FoundTime) 设置首次发现时间
 * @method string getLatestFoundTime() 获取最近发现时间
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置最近发现时间
 * @method integer getID() 获取漏洞ID
 * @method void setID(integer $ID) 设置漏洞ID
 * @method integer getLocalImageCount() 获取影响本地镜像数
 * @method void setLocalImageCount(integer $LocalImageCount) 设置影响本地镜像数
 * @method integer getContainerCount() 获取影响容器数
 * @method void setContainerCount(integer $ContainerCount) 设置影响容器数
 * @method integer getRegistryImageCount() 获取影响仓库镜像数
 * @method void setRegistryImageCount(integer $RegistryImageCount) 设置影响仓库镜像数
 * @method string getPocID() 获取漏洞PocID
 * @method void setPocID(string $PocID) 设置漏洞PocID
 * @method string getDefenceStatus() 获取防御状态，NO_DEFENDED:未防御，DEFENDED:已防御
 * @method void setDefenceStatus(string $DefenceStatus) 设置防御状态，NO_DEFENDED:未防御，DEFENDED:已防御
 * @method string getDefenceScope() 获取漏洞防御主机范围: MANUAL:自选主机节点，ALL:全部
 * @method void setDefenceScope(string $DefenceScope) 设置漏洞防御主机范围: MANUAL:自选主机节点，ALL:全部
 * @method integer getDefenceHostCount() 获取漏洞防御主机数量
 * @method void setDefenceHostCount(integer $DefenceHostCount) 设置漏洞防御主机数量
 * @method integer getDefendedCount() 获取已防御攻击次数
 * @method void setDefendedCount(integer $DefendedCount) 设置已防御攻击次数
 * @method integer getRaspOpenNodeCount() 获取漏洞对应机器的应用防护开启数量
 * @method void setRaspOpenNodeCount(integer $RaspOpenNodeCount) 设置漏洞对应机器的应用防护开启数量
 * @method integer getRaspClosedNodeCount() 获取漏洞对应机器的应用防护关闭数量
 * @method void setRaspClosedNodeCount(integer $RaspClosedNodeCount) 设置漏洞对应机器的应用防护关闭数量
 */
class VulInfo extends AbstractModel
{
    /**
     * @var string 漏洞名称
     */
    public $Name;

    /**
     * @var array 漏洞标签
     */
    public $Tags;

    /**
     * @var float CVSS V3分数
     */
    public $CVSSV3Score;

    /**
     * @var string 风险等级
     */
    public $Level;

    /**
     * @var string CVE编号
     */
    public $CVEID;

    /**
     * @var string 漏洞子类型
     */
    public $Category;

    /**
     * @var string 首次发现时间
     */
    public $FoundTime;

    /**
     * @var string 最近发现时间
     */
    public $LatestFoundTime;

    /**
     * @var integer 漏洞ID
     */
    public $ID;

    /**
     * @var integer 影响本地镜像数
     */
    public $LocalImageCount;

    /**
     * @var integer 影响容器数
     */
    public $ContainerCount;

    /**
     * @var integer 影响仓库镜像数
     */
    public $RegistryImageCount;

    /**
     * @var string 漏洞PocID
     */
    public $PocID;

    /**
     * @var string 防御状态，NO_DEFENDED:未防御，DEFENDED:已防御
     */
    public $DefenceStatus;

    /**
     * @var string 漏洞防御主机范围: MANUAL:自选主机节点，ALL:全部
     */
    public $DefenceScope;

    /**
     * @var integer 漏洞防御主机数量
     */
    public $DefenceHostCount;

    /**
     * @var integer 已防御攻击次数
     */
    public $DefendedCount;

    /**
     * @var integer 漏洞对应机器的应用防护开启数量
     */
    public $RaspOpenNodeCount;

    /**
     * @var integer 漏洞对应机器的应用防护关闭数量
     */
    public $RaspClosedNodeCount;

    /**
     * @param string $Name 漏洞名称
     * @param array $Tags 漏洞标签
     * @param float $CVSSV3Score CVSS V3分数
     * @param string $Level 风险等级
     * @param string $CVEID CVE编号
     * @param string $Category 漏洞子类型
     * @param string $FoundTime 首次发现时间
     * @param string $LatestFoundTime 最近发现时间
     * @param integer $ID 漏洞ID
     * @param integer $LocalImageCount 影响本地镜像数
     * @param integer $ContainerCount 影响容器数
     * @param integer $RegistryImageCount 影响仓库镜像数
     * @param string $PocID 漏洞PocID
     * @param string $DefenceStatus 防御状态，NO_DEFENDED:未防御，DEFENDED:已防御
     * @param string $DefenceScope 漏洞防御主机范围: MANUAL:自选主机节点，ALL:全部
     * @param integer $DefenceHostCount 漏洞防御主机数量
     * @param integer $DefendedCount 已防御攻击次数
     * @param integer $RaspOpenNodeCount 漏洞对应机器的应用防护开启数量
     * @param integer $RaspClosedNodeCount 漏洞对应机器的应用防护关闭数量
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("CVSSV3Score",$param) and $param["CVSSV3Score"] !== null) {
            $this->CVSSV3Score = $param["CVSSV3Score"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("LocalImageCount",$param) and $param["LocalImageCount"] !== null) {
            $this->LocalImageCount = $param["LocalImageCount"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("RegistryImageCount",$param) and $param["RegistryImageCount"] !== null) {
            $this->RegistryImageCount = $param["RegistryImageCount"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("DefenceStatus",$param) and $param["DefenceStatus"] !== null) {
            $this->DefenceStatus = $param["DefenceStatus"];
        }

        if (array_key_exists("DefenceScope",$param) and $param["DefenceScope"] !== null) {
            $this->DefenceScope = $param["DefenceScope"];
        }

        if (array_key_exists("DefenceHostCount",$param) and $param["DefenceHostCount"] !== null) {
            $this->DefenceHostCount = $param["DefenceHostCount"];
        }

        if (array_key_exists("DefendedCount",$param) and $param["DefendedCount"] !== null) {
            $this->DefendedCount = $param["DefendedCount"];
        }

        if (array_key_exists("RaspOpenNodeCount",$param) and $param["RaspOpenNodeCount"] !== null) {
            $this->RaspOpenNodeCount = $param["RaspOpenNodeCount"];
        }

        if (array_key_exists("RaspClosedNodeCount",$param) and $param["RaspClosedNodeCount"] !== null) {
            $this->RaspClosedNodeCount = $param["RaspClosedNodeCount"];
        }
    }
}
