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
 * 容器安全镜像漏洞信息
 *
 * @method string getCVEID() 获取漏洞id
 * @method void setCVEID(string $CVEID) 设置漏洞id
 * @method string getPOCID() 获取观点验证程序id
 * @method void setPOCID(string $POCID) 设置观点验证程序id
 * @method string getName() 获取漏洞名称
 * @method void setName(string $Name) 设置漏洞名称
 * @method array getComponents() 获取涉及组件信息
 * @method void setComponents(array $Components) 设置涉及组件信息
 * @method string getCategory() 获取分类
 * @method void setCategory(string $Category) 设置分类
 * @method string getCategoryType() 获取分类2
 * @method void setCategoryType(string $CategoryType) 设置分类2
 * @method string getLevel() 获取风险等级
 * @method void setLevel(string $Level) 设置风险等级
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
 * @method string getCvssScore() 获取Cvss分数
 * @method void setCvssScore(string $CvssScore) 设置Cvss分数
 * @method string getCvssVector() 获取Cvss信息
 * @method void setCvssVector(string $CvssVector) 设置Cvss信息
 * @method string getIsSuggest() 获取是否建议修复
 * @method void setIsSuggest(string $IsSuggest) 设置是否建议修复
 * @method string getFixedVersions() 获取修复版本号
 * @method void setFixedVersions(string $FixedVersions) 设置修复版本号
 * @method array getTag() 获取漏洞标签:"CanBeFixed","DynamicLevelPoc","DynamicLevelExp"
 * @method void setTag(array $Tag) 设置漏洞标签:"CanBeFixed","DynamicLevelPoc","DynamicLevelExp"
 * @method string getComponent() 获取组件名
 * @method void setComponent(string $Component) 设置组件名
 * @method string getVersion() 获取组件版本
 * @method void setVersion(string $Version) 设置组件版本
 * @method integer getAttackLevel() 获取攻击热度 0-3
 * @method void setAttackLevel(integer $AttackLevel) 设置攻击热度 0-3
 * @method array getLayerInfos() 获取镜像层信息列表
 * @method void setLayerInfos(array $LayerInfos) 设置镜像层信息列表
 */
class ImageVul extends AbstractModel
{
    /**
     * @var string 漏洞id
     */
    public $CVEID;

    /**
     * @var string 观点验证程序id
     */
    public $POCID;

    /**
     * @var string 漏洞名称
     */
    public $Name;

    /**
     * @var array 涉及组件信息
     */
    public $Components;

    /**
     * @var string 分类
     */
    public $Category;

    /**
     * @var string 分类2
     */
    public $CategoryType;

    /**
     * @var string 风险等级
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
     * @var string Cvss分数
     */
    public $CvssScore;

    /**
     * @var string Cvss信息
     */
    public $CvssVector;

    /**
     * @var string 是否建议修复
     */
    public $IsSuggest;

    /**
     * @var string 修复版本号
     */
    public $FixedVersions;

    /**
     * @var array 漏洞标签:"CanBeFixed","DynamicLevelPoc","DynamicLevelExp"
     */
    public $Tag;

    /**
     * @var string 组件名
     */
    public $Component;

    /**
     * @var string 组件版本
     */
    public $Version;

    /**
     * @var integer 攻击热度 0-3
     */
    public $AttackLevel;

    /**
     * @var array 镜像层信息列表
     */
    public $LayerInfos;

    /**
     * @param string $CVEID 漏洞id
     * @param string $POCID 观点验证程序id
     * @param string $Name 漏洞名称
     * @param array $Components 涉及组件信息
     * @param string $Category 分类
     * @param string $CategoryType 分类2
     * @param string $Level 风险等级
     * @param string $Des 描述
     * @param string $OfficialSolution 解决方案
     * @param string $Reference 引用
     * @param string $DefenseSolution 防御方案
     * @param string $SubmitTime 提交时间
     * @param string $CvssScore Cvss分数
     * @param string $CvssVector Cvss信息
     * @param string $IsSuggest 是否建议修复
     * @param string $FixedVersions 修复版本号
     * @param array $Tag 漏洞标签:"CanBeFixed","DynamicLevelPoc","DynamicLevelExp"
     * @param string $Component 组件名
     * @param string $Version 组件版本
     * @param integer $AttackLevel 攻击热度 0-3
     * @param array $LayerInfos 镜像层信息列表
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

        if (array_key_exists("POCID",$param) and $param["POCID"] !== null) {
            $this->POCID = $param["POCID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new ComponentsInfo();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
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

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("CvssVector",$param) and $param["CvssVector"] !== null) {
            $this->CvssVector = $param["CvssVector"];
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

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("AttackLevel",$param) and $param["AttackLevel"] !== null) {
            $this->AttackLevel = $param["AttackLevel"];
        }

        if (array_key_exists("LayerInfos",$param) and $param["LayerInfos"] !== null) {
            $this->LayerInfos = [];
            foreach ($param["LayerInfos"] as $key => $value){
                $obj = new ImageVulLayerInfo();
                $obj->deserialize($value);
                array_push($this->LayerInfos, $obj);
            }
        }
    }
}
