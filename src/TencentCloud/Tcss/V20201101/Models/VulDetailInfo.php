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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞详情信息
 *
 * @method string getCVEID() 获取CVE编号
 * @method void setCVEID(string $CVEID) 设置CVE编号
 * @method string getName() 获取漏洞名称
 * @method void setName(string $Name) 设置漏洞名称
 * @method array getTags() 获取漏洞标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置漏洞标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategoryType() 获取漏洞类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryType(string $CategoryType) 设置漏洞类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLevel() 获取漏洞威胁等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(string $Level) 设置漏洞威胁等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubmitTime() 获取漏洞披露时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmitTime(string $SubmitTime) 设置漏洞披露时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取漏洞描述
 * @method void setDescription(string $Description) 设置漏洞描述
 * @method string getCVSSV3Desc() 获取CVSS V3描述
 * @method void setCVSSV3Desc(string $CVSSV3Desc) 设置CVSS V3描述
 * @method string getOfficialSolution() 获取漏洞修复建议
 * @method void setOfficialSolution(string $OfficialSolution) 设置漏洞修复建议
 * @method string getDefenseSolution() 获取缓解措施
 * @method void setDefenseSolution(string $DefenseSolution) 设置缓解措施
 * @method array getReference() 获取参考链接
 * @method void setReference(array $Reference) 设置参考链接
 * @method float getCVSSV3Score() 获取CVSS V3分数
 * @method void setCVSSV3Score(float $CVSSV3Score) 设置CVSS V3分数
 * @method array getComponentList() 获取受漏洞影响的组件列表
 * @method void setComponentList(array $ComponentList) 设置受漏洞影响的组件列表
 * @method integer getLocalImageCount() 获取影响本地镜像数
 * @method void setLocalImageCount(integer $LocalImageCount) 设置影响本地镜像数
 * @method integer getContainerCount() 获取影响容器数
 * @method void setContainerCount(integer $ContainerCount) 设置影响容器数
 * @method integer getRegistryImageCount() 获取影响仓库镜像数
 * @method void setRegistryImageCount(integer $RegistryImageCount) 设置影响仓库镜像数
 * @method string getCategory() 获取漏洞子类型
 * @method void setCategory(string $Category) 设置漏洞子类型
 * @method integer getLocalNewestImageCount() 获取影响最新本地镜像数
 * @method void setLocalNewestImageCount(integer $LocalNewestImageCount) 设置影响最新本地镜像数
 * @method integer getRegistryNewestImageCount() 获取影响最新仓库镜像数
 * @method void setRegistryNewestImageCount(integer $RegistryNewestImageCount) 设置影响最新仓库镜像数
 * @method string getPocID() 获取漏洞PocID
 * @method void setPocID(string $PocID) 设置漏洞PocID
 * @method string getDefenceStatus() 获取防御状态，NO_DEFENDED:未防御，DEFENDED:已防御
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefenceStatus(string $DefenceStatus) 设置防御状态，NO_DEFENDED:未防御，DEFENDED:已防御
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefenceScope() 获取漏洞防御主机范围: MANUAL:自选主机节点，ALL:全部
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefenceScope(string $DefenceScope) 设置漏洞防御主机范围: MANUAL:自选主机节点，ALL:全部
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefenceHostCount() 获取漏洞防御主机数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefenceHostCount(integer $DefenceHostCount) 设置漏洞防御主机数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefendedCount() 获取已防御攻击次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefendedCount(integer $DefendedCount) 设置已防御攻击次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanStatus() 获取是否已扫描，NOT_SCAN:未扫描,SCANNED:已扫描
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanStatus(string $ScanStatus) 设置是否已扫描，NOT_SCAN:未扫描,SCANNED:已扫描
注意：此字段可能返回 null，表示取不到有效值。
 */
class VulDetailInfo extends AbstractModel
{
    /**
     * @var string CVE编号
     */
    public $CVEID;

    /**
     * @var string 漏洞名称
     */
    public $Name;

    /**
     * @var array 漏洞标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 漏洞类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryType;

    /**
     * @var string 漏洞威胁等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 漏洞披露时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmitTime;

    /**
     * @var string 漏洞描述
     */
    public $Description;

    /**
     * @var string CVSS V3描述
     */
    public $CVSSV3Desc;

    /**
     * @var string 漏洞修复建议
     */
    public $OfficialSolution;

    /**
     * @var string 缓解措施
     */
    public $DefenseSolution;

    /**
     * @var array 参考链接
     */
    public $Reference;

    /**
     * @var float CVSS V3分数
     */
    public $CVSSV3Score;

    /**
     * @var array 受漏洞影响的组件列表
     */
    public $ComponentList;

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
     * @var string 漏洞子类型
     */
    public $Category;

    /**
     * @var integer 影响最新本地镜像数
     */
    public $LocalNewestImageCount;

    /**
     * @var integer 影响最新仓库镜像数
     */
    public $RegistryNewestImageCount;

    /**
     * @var string 漏洞PocID
     */
    public $PocID;

    /**
     * @var string 防御状态，NO_DEFENDED:未防御，DEFENDED:已防御
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefenceStatus;

    /**
     * @var string 漏洞防御主机范围: MANUAL:自选主机节点，ALL:全部
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefenceScope;

    /**
     * @var integer 漏洞防御主机数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefenceHostCount;

    /**
     * @var integer 已防御攻击次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefendedCount;

    /**
     * @var string 是否已扫描，NOT_SCAN:未扫描,SCANNED:已扫描
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanStatus;

    /**
     * @param string $CVEID CVE编号
     * @param string $Name 漏洞名称
     * @param array $Tags 漏洞标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CategoryType 漏洞类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Level 漏洞威胁等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubmitTime 漏洞披露时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 漏洞描述
     * @param string $CVSSV3Desc CVSS V3描述
     * @param string $OfficialSolution 漏洞修复建议
     * @param string $DefenseSolution 缓解措施
     * @param array $Reference 参考链接
     * @param float $CVSSV3Score CVSS V3分数
     * @param array $ComponentList 受漏洞影响的组件列表
     * @param integer $LocalImageCount 影响本地镜像数
     * @param integer $ContainerCount 影响容器数
     * @param integer $RegistryImageCount 影响仓库镜像数
     * @param string $Category 漏洞子类型
     * @param integer $LocalNewestImageCount 影响最新本地镜像数
     * @param integer $RegistryNewestImageCount 影响最新仓库镜像数
     * @param string $PocID 漏洞PocID
     * @param string $DefenceStatus 防御状态，NO_DEFENDED:未防御，DEFENDED:已防御
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefenceScope 漏洞防御主机范围: MANUAL:自选主机节点，ALL:全部
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefenceHostCount 漏洞防御主机数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefendedCount 已防御攻击次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanStatus 是否已扫描，NOT_SCAN:未扫描,SCANNED:已扫描
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("CategoryType",$param) and $param["CategoryType"] !== null) {
            $this->CategoryType = $param["CategoryType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CVSSV3Desc",$param) and $param["CVSSV3Desc"] !== null) {
            $this->CVSSV3Desc = $param["CVSSV3Desc"];
        }

        if (array_key_exists("OfficialSolution",$param) and $param["OfficialSolution"] !== null) {
            $this->OfficialSolution = $param["OfficialSolution"];
        }

        if (array_key_exists("DefenseSolution",$param) and $param["DefenseSolution"] !== null) {
            $this->DefenseSolution = $param["DefenseSolution"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("CVSSV3Score",$param) and $param["CVSSV3Score"] !== null) {
            $this->CVSSV3Score = $param["CVSSV3Score"];
        }

        if (array_key_exists("ComponentList",$param) and $param["ComponentList"] !== null) {
            $this->ComponentList = [];
            foreach ($param["ComponentList"] as $key => $value){
                $obj = new VulAffectedComponentInfo();
                $obj->deserialize($value);
                array_push($this->ComponentList, $obj);
            }
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("LocalNewestImageCount",$param) and $param["LocalNewestImageCount"] !== null) {
            $this->LocalNewestImageCount = $param["LocalNewestImageCount"];
        }

        if (array_key_exists("RegistryNewestImageCount",$param) and $param["RegistryNewestImageCount"] !== null) {
            $this->RegistryNewestImageCount = $param["RegistryNewestImageCount"];
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

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }
    }
}
