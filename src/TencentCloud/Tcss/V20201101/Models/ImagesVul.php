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
 * 容器安全镜像漏洞
 *
 * @method string getCVEID() 获取漏洞id
 * @method void setCVEID(string $CVEID) 设置漏洞id
 * @method string getName() 获取漏洞名称
 * @method void setName(string $Name) 设置漏洞名称
 * @method string getComponent() 获取组件
 * @method void setComponent(string $Component) 设置组件
 * @method string getVersion() 获取版本
 * @method void setVersion(string $Version) 设置版本
 * @method string getCategory() 获取分类
 * @method void setCategory(string $Category) 设置分类
 * @method string getCategoryType() 获取分类2
 * @method void setCategoryType(string $CategoryType) 设置分类2
 * @method integer getLevel() 获取风险等级
 * @method void setLevel(integer $Level) 设置风险等级
 * @method string getDes() 获取描述
 * @method void setDes(string $Des) 设置描述
 * @method string getOfficialSolution() 获取解决方案
 * @method void setOfficialSolution(string $OfficialSolution) 设置解决方案
 * @method string getReference() 获取引用
 * @method void setReference(string $Reference) 设置引用
 * @method string getDefenseSolution() 获取防御方案
 * @method void setDefenseSolution(string $DefenseSolution) 设置防御方案
 * @method string getSubmitTime() 获取提交时间
 * @method void setSubmitTime(string $SubmitTime) 设置提交时间
 * @method float getCVSSV3Score() 获取CVSS V3分数
 * @method void setCVSSV3Score(float $CVSSV3Score) 设置CVSS V3分数
 * @method string getCVSSV3Desc() 获取CVSS V3描述
 * @method void setCVSSV3Desc(string $CVSSV3Desc) 设置CVSS V3描述
 * @method boolean getIsSuggest() 获取是否是重点关注：true：是，false：不是
 * @method void setIsSuggest(boolean $IsSuggest) 设置是否是重点关注：true：是，false：不是
 * @method string getFixedVersions() 获取修复版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixedVersions(string $FixedVersions) 设置修复版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTag() 获取漏洞标签:"CanBeFixed","DynamicLevelPoc","DynamicLevelExp"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置漏洞标签:"CanBeFixed","DynamicLevelPoc","DynamicLevelExp"
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImagesVul extends AbstractModel
{
    /**
     * @var string 漏洞id
     */
    public $CVEID;

    /**
     * @var string 漏洞名称
     */
    public $Name;

    /**
     * @var string 组件
     */
    public $Component;

    /**
     * @var string 版本
     */
    public $Version;

    /**
     * @var string 分类
     */
    public $Category;

    /**
     * @var string 分类2
     */
    public $CategoryType;

    /**
     * @var integer 风险等级
     */
    public $Level;

    /**
     * @var string 描述
     */
    public $Des;

    /**
     * @var string 解决方案
     */
    public $OfficialSolution;

    /**
     * @var string 引用
     */
    public $Reference;

    /**
     * @var string 防御方案
     */
    public $DefenseSolution;

    /**
     * @var string 提交时间
     */
    public $SubmitTime;

    /**
     * @var float CVSS V3分数
     */
    public $CVSSV3Score;

    /**
     * @var string CVSS V3描述
     */
    public $CVSSV3Desc;

    /**
     * @var boolean 是否是重点关注：true：是，false：不是
     */
    public $IsSuggest;

    /**
     * @var string 修复版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixedVersions;

    /**
     * @var array 漏洞标签:"CanBeFixed","DynamicLevelPoc","DynamicLevelExp"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @param string $CVEID 漏洞id
     * @param string $Name 漏洞名称
     * @param string $Component 组件
     * @param string $Version 版本
     * @param string $Category 分类
     * @param string $CategoryType 分类2
     * @param integer $Level 风险等级
     * @param string $Des 描述
     * @param string $OfficialSolution 解决方案
     * @param string $Reference 引用
     * @param string $DefenseSolution 防御方案
     * @param string $SubmitTime 提交时间
     * @param float $CVSSV3Score CVSS V3分数
     * @param string $CVSSV3Desc CVSS V3描述
     * @param boolean $IsSuggest 是否是重点关注：true：是，false：不是
     * @param string $FixedVersions 修复版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tag 漏洞标签:"CanBeFixed","DynamicLevelPoc","DynamicLevelExp"
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

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("CategoryType",$param) and $param["CategoryType"] !== null) {
            $this->CategoryType = $param["CategoryType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Des",$param) and $param["Des"] !== null) {
            $this->Des = $param["Des"];
        }

        if (array_key_exists("OfficialSolution",$param) and $param["OfficialSolution"] !== null) {
            $this->OfficialSolution = $param["OfficialSolution"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("DefenseSolution",$param) and $param["DefenseSolution"] !== null) {
            $this->DefenseSolution = $param["DefenseSolution"];
        }

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("CVSSV3Score",$param) and $param["CVSSV3Score"] !== null) {
            $this->CVSSV3Score = $param["CVSSV3Score"];
        }

        if (array_key_exists("CVSSV3Desc",$param) and $param["CVSSV3Desc"] !== null) {
            $this->CVSSV3Desc = $param["CVSSV3Desc"];
        }

        if (array_key_exists("IsSuggest",$param) and $param["IsSuggest"] !== null) {
            $this->IsSuggest = $param["IsSuggest"];
        }

        if (array_key_exists("FixedVersions",$param) and $param["FixedVersions"] !== null) {
            $this->FixedVersions = $param["FixedVersions"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
