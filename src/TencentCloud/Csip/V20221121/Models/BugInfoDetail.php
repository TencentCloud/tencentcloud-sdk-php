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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞详细信息
 *
 * @method integer getId() 获取漏洞编号
 * @method void setId(integer $Id) 设置漏洞编号
 * @method string getPatchId() 获取漏洞对应pocId
 * @method void setPatchId(string $PatchId) 设置漏洞对应pocId
 * @method string getVULName() 获取漏洞名称
 * @method void setVULName(string $VULName) 设置漏洞名称
 * @method string getLevel() 获取漏洞严重性：high,middle，low，info
 * @method void setLevel(string $Level) 设置漏洞严重性：high,middle，low，info
 * @method string getCVSSScore() 获取cvss评分
 * @method void setCVSSScore(string $CVSSScore) 设置cvss评分
 * @method string getCVEId() 获取cve编号
 * @method void setCVEId(string $CVEId) 设置cve编号
 * @method string getTag() 获取漏洞标签
 * @method void setTag(string $Tag) 设置漏洞标签
 * @method integer getVULCategory() 获取漏洞种类，1:web应用，2:系统组件漏洞，3:配置风险
 * @method void setVULCategory(integer $VULCategory) 设置漏洞种类，1:web应用，2:系统组件漏洞，3:配置风险
 * @method string getImpactOs() 获取漏洞影响系统
 * @method void setImpactOs(string $ImpactOs) 设置漏洞影响系统
 * @method string getImpactCOMPENT() 获取漏洞影响组件
 * @method void setImpactCOMPENT(string $ImpactCOMPENT) 设置漏洞影响组件
 * @method string getImpactVersion() 获取漏洞影响版本
 * @method void setImpactVersion(string $ImpactVersion) 设置漏洞影响版本
 * @method string getReference() 获取链接
 * @method void setReference(string $Reference) 设置链接
 * @method string getVULDescribe() 获取漏洞描述
 * @method void setVULDescribe(string $VULDescribe) 设置漏洞描述
 * @method string getFix() 获取修复建议
 * @method void setFix(string $Fix) 设置修复建议
 * @method integer getProSupport() 获取产品支持状态，实时返回
 * @method void setProSupport(integer $ProSupport) 设置产品支持状态，实时返回
 * @method integer getIsPublish() 获取是否公开，0为未发布，1为发布
 * @method void setIsPublish(integer $IsPublish) 设置是否公开，0为未发布，1为发布
 * @method string getReleaseTime() 获取释放时间
 * @method void setReleaseTime(string $ReleaseTime) 设置释放时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getSubCategory() 获取漏洞子类别
 * @method void setSubCategory(string $SubCategory) 设置漏洞子类别
 */
class BugInfoDetail extends AbstractModel
{
    /**
     * @var integer 漏洞编号
     */
    public $Id;

    /**
     * @var string 漏洞对应pocId
     */
    public $PatchId;

    /**
     * @var string 漏洞名称
     */
    public $VULName;

    /**
     * @var string 漏洞严重性：high,middle，low，info
     */
    public $Level;

    /**
     * @var string cvss评分
     */
    public $CVSSScore;

    /**
     * @var string cve编号
     */
    public $CVEId;

    /**
     * @var string 漏洞标签
     */
    public $Tag;

    /**
     * @var integer 漏洞种类，1:web应用，2:系统组件漏洞，3:配置风险
     */
    public $VULCategory;

    /**
     * @var string 漏洞影响系统
     */
    public $ImpactOs;

    /**
     * @var string 漏洞影响组件
     */
    public $ImpactCOMPENT;

    /**
     * @var string 漏洞影响版本
     */
    public $ImpactVersion;

    /**
     * @var string 链接
     */
    public $Reference;

    /**
     * @var string 漏洞描述
     */
    public $VULDescribe;

    /**
     * @var string 修复建议
     */
    public $Fix;

    /**
     * @var integer 产品支持状态，实时返回
     */
    public $ProSupport;

    /**
     * @var integer 是否公开，0为未发布，1为发布
     */
    public $IsPublish;

    /**
     * @var string 释放时间
     */
    public $ReleaseTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 漏洞子类别
     */
    public $SubCategory;

    /**
     * @param integer $Id 漏洞编号
     * @param string $PatchId 漏洞对应pocId
     * @param string $VULName 漏洞名称
     * @param string $Level 漏洞严重性：high,middle，low，info
     * @param string $CVSSScore cvss评分
     * @param string $CVEId cve编号
     * @param string $Tag 漏洞标签
     * @param integer $VULCategory 漏洞种类，1:web应用，2:系统组件漏洞，3:配置风险
     * @param string $ImpactOs 漏洞影响系统
     * @param string $ImpactCOMPENT 漏洞影响组件
     * @param string $ImpactVersion 漏洞影响版本
     * @param string $Reference 链接
     * @param string $VULDescribe 漏洞描述
     * @param string $Fix 修复建议
     * @param integer $ProSupport 产品支持状态，实时返回
     * @param integer $IsPublish 是否公开，0为未发布，1为发布
     * @param string $ReleaseTime 释放时间
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $SubCategory 漏洞子类别
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

        if (array_key_exists("PatchId",$param) and $param["PatchId"] !== null) {
            $this->PatchId = $param["PatchId"];
        }

        if (array_key_exists("VULName",$param) and $param["VULName"] !== null) {
            $this->VULName = $param["VULName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CVSSScore",$param) and $param["CVSSScore"] !== null) {
            $this->CVSSScore = $param["CVSSScore"];
        }

        if (array_key_exists("CVEId",$param) and $param["CVEId"] !== null) {
            $this->CVEId = $param["CVEId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("VULCategory",$param) and $param["VULCategory"] !== null) {
            $this->VULCategory = $param["VULCategory"];
        }

        if (array_key_exists("ImpactOs",$param) and $param["ImpactOs"] !== null) {
            $this->ImpactOs = $param["ImpactOs"];
        }

        if (array_key_exists("ImpactCOMPENT",$param) and $param["ImpactCOMPENT"] !== null) {
            $this->ImpactCOMPENT = $param["ImpactCOMPENT"];
        }

        if (array_key_exists("ImpactVersion",$param) and $param["ImpactVersion"] !== null) {
            $this->ImpactVersion = $param["ImpactVersion"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("VULDescribe",$param) and $param["VULDescribe"] !== null) {
            $this->VULDescribe = $param["VULDescribe"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("ProSupport",$param) and $param["ProSupport"] !== null) {
            $this->ProSupport = $param["ProSupport"];
        }

        if (array_key_exists("IsPublish",$param) and $param["IsPublish"] !== null) {
            $this->IsPublish = $param["IsPublish"];
        }

        if (array_key_exists("ReleaseTime",$param) and $param["ReleaseTime"] !== null) {
            $this->ReleaseTime = $param["ReleaseTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SubCategory",$param) and $param["SubCategory"] !== null) {
            $this->SubCategory = $param["SubCategory"];
        }
    }
}
