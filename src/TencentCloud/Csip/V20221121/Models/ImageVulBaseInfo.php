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
 * 镜像漏洞信息
 *
 * @method array getAffectedComponents() 获取<p>受影响的组件信息</p>
 * @method void setAffectedComponents(array $AffectedComponents) 设置<p>受影响的组件信息</p>
 * @method string getName() 获取<p>漏洞名</p>
 * @method void setName(string $Name) 设置<p>漏洞名</p>
 * @method string getCVEID() 获取<p>漏洞CVEID</p>
 * @method void setCVEID(string $CVEID) 设置<p>漏洞CVEID</p>
 * @method string getCategory() 获取<p>漏洞类别</p>
 * @method void setCategory(string $Category) 设置<p>漏洞类别</p>
 * @method string getPublishTime() 获取<p>漏洞发布时间</p>
 * @method void setPublishTime(string $PublishTime) 设置<p>漏洞发布时间</p>
 * @method string getCheckMethod() 获取<p>漏洞检测方式</p>
 * @method void setCheckMethod(string $CheckMethod) 设置<p>漏洞检测方式</p>
 * @method string getDefendStatus() 获取<p>是否支持防御</p><p>枚举值：</p><ul><li>ENABLED： 支持防御</li><li>NOT_ENABLED： 不支持防御</li></ul>
 * @method void setDefendStatus(string $DefendStatus) 设置<p>是否支持防御</p><p>枚举值：</p><ul><li>ENABLED： 支持防御</li><li>NOT_ENABLED： 不支持防御</li></ul>
 * @method boolean getSupportFix() 获取<p>是否支持修复</p>
 * @method void setSupportFix(boolean $SupportFix) 设置<p>是否支持修复</p>
 * @method string getCvssScore() 获取<p>CVSS分数</p>
 * @method void setCvssScore(string $CvssScore) 设置<p>CVSS分数</p>
 * @method string getRemark() 获取<p>漏洞危害描述</p>
 * @method void setRemark(string $Remark) 设置<p>漏洞危害描述</p>
 * @method string getSummary() 获取<p>漏洞描述</p>
 * @method void setSummary(string $Summary) 设置<p>漏洞描述</p>
 * @method string getCVSSLevel() 获取<p>危害等级</p>
 * @method void setCVSSLevel(string $CVSSLevel) 设置<p>危害等级</p>
 * @method string getVulAffect() 获取<p>主要影响类型</p>
 * @method void setVulAffect(string $VulAffect) 设置<p>主要影响类型</p>
 * @method boolean getKVERecord() 获取<p>是否存在在野利用</p>
 * @method void setKVERecord(boolean $KVERecord) 设置<p>是否存在在野利用</p>
 * @method float getEPSSScore() 获取<p>EPSS 概率分数</p>
 * @method void setEPSSScore(float $EPSSScore) 设置<p>EPSS 概率分数</p>
 * @method string getAffectVendor() 获取<p>影响厂商</p>
 * @method void setAffectVendor(string $AffectVendor) 设置<p>影响厂商</p>
 * @method string getAffectProduct() 获取<p>影响目标产品</p>
 * @method void setAffectProduct(string $AffectProduct) 设置<p>影响目标产品</p>
 * @method string getMechanism() 获取<p>漏洞原理</p>
 * @method void setMechanism(string $Mechanism) 设置<p>漏洞原理</p>
 * @method string getPrecondition() 获取<p>攻击前提条件</p>
 * @method void setPrecondition(string $Precondition) 设置<p>攻击前提条件</p>
 * @method string getFixSolution() 获取<p>漏洞修复建议</p>
 * @method void setFixSolution(string $FixSolution) 设置<p>漏洞修复建议</p>
 * @method string getRefLink() 获取<p>漏洞相关链接</p>
 * @method void setRefLink(string $RefLink) 设置<p>漏洞相关链接</p>
 * @method array getLabel() 获取<p>漏洞标签</p>
 * @method void setLabel(array $Label) 设置<p>漏洞标签</p>
 * @method string getPocId() 获取<p>漏洞Id</p>
 * @method void setPocId(string $PocId) 设置<p>漏洞Id</p>
 */
class ImageVulBaseInfo extends AbstractModel
{
    /**
     * @var array <p>受影响的组件信息</p>
     */
    public $AffectedComponents;

    /**
     * @var string <p>漏洞名</p>
     */
    public $Name;

    /**
     * @var string <p>漏洞CVEID</p>
     */
    public $CVEID;

    /**
     * @var string <p>漏洞类别</p>
     */
    public $Category;

    /**
     * @var string <p>漏洞发布时间</p>
     */
    public $PublishTime;

    /**
     * @var string <p>漏洞检测方式</p>
     */
    public $CheckMethod;

    /**
     * @var string <p>是否支持防御</p><p>枚举值：</p><ul><li>ENABLED： 支持防御</li><li>NOT_ENABLED： 不支持防御</li></ul>
     */
    public $DefendStatus;

    /**
     * @var boolean <p>是否支持修复</p>
     */
    public $SupportFix;

    /**
     * @var string <p>CVSS分数</p>
     */
    public $CvssScore;

    /**
     * @var string <p>漏洞危害描述</p>
     */
    public $Remark;

    /**
     * @var string <p>漏洞描述</p>
     */
    public $Summary;

    /**
     * @var string <p>危害等级</p>
     */
    public $CVSSLevel;

    /**
     * @var string <p>主要影响类型</p>
     */
    public $VulAffect;

    /**
     * @var boolean <p>是否存在在野利用</p>
     */
    public $KVERecord;

    /**
     * @var float <p>EPSS 概率分数</p>
     */
    public $EPSSScore;

    /**
     * @var string <p>影响厂商</p>
     */
    public $AffectVendor;

    /**
     * @var string <p>影响目标产品</p>
     */
    public $AffectProduct;

    /**
     * @var string <p>漏洞原理</p>
     */
    public $Mechanism;

    /**
     * @var string <p>攻击前提条件</p>
     */
    public $Precondition;

    /**
     * @var string <p>漏洞修复建议</p>
     */
    public $FixSolution;

    /**
     * @var string <p>漏洞相关链接</p>
     */
    public $RefLink;

    /**
     * @var array <p>漏洞标签</p>
     */
    public $Label;

    /**
     * @var string <p>漏洞Id</p>
     */
    public $PocId;

    /**
     * @param array $AffectedComponents <p>受影响的组件信息</p>
     * @param string $Name <p>漏洞名</p>
     * @param string $CVEID <p>漏洞CVEID</p>
     * @param string $Category <p>漏洞类别</p>
     * @param string $PublishTime <p>漏洞发布时间</p>
     * @param string $CheckMethod <p>漏洞检测方式</p>
     * @param string $DefendStatus <p>是否支持防御</p><p>枚举值：</p><ul><li>ENABLED： 支持防御</li><li>NOT_ENABLED： 不支持防御</li></ul>
     * @param boolean $SupportFix <p>是否支持修复</p>
     * @param string $CvssScore <p>CVSS分数</p>
     * @param string $Remark <p>漏洞危害描述</p>
     * @param string $Summary <p>漏洞描述</p>
     * @param string $CVSSLevel <p>危害等级</p>
     * @param string $VulAffect <p>主要影响类型</p>
     * @param boolean $KVERecord <p>是否存在在野利用</p>
     * @param float $EPSSScore <p>EPSS 概率分数</p>
     * @param string $AffectVendor <p>影响厂商</p>
     * @param string $AffectProduct <p>影响目标产品</p>
     * @param string $Mechanism <p>漏洞原理</p>
     * @param string $Precondition <p>攻击前提条件</p>
     * @param string $FixSolution <p>漏洞修复建议</p>
     * @param string $RefLink <p>漏洞相关链接</p>
     * @param array $Label <p>漏洞标签</p>
     * @param string $PocId <p>漏洞Id</p>
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
        if (array_key_exists("AffectedComponents",$param) and $param["AffectedComponents"] !== null) {
            $this->AffectedComponents = [];
            foreach ($param["AffectedComponents"] as $key => $value){
                $obj = new VulAffectedComponent();
                $obj->deserialize($value);
                array_push($this->AffectedComponents, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("CheckMethod",$param) and $param["CheckMethod"] !== null) {
            $this->CheckMethod = $param["CheckMethod"];
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }

        if (array_key_exists("SupportFix",$param) and $param["SupportFix"] !== null) {
            $this->SupportFix = $param["SupportFix"];
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("CVSSLevel",$param) and $param["CVSSLevel"] !== null) {
            $this->CVSSLevel = $param["CVSSLevel"];
        }

        if (array_key_exists("VulAffect",$param) and $param["VulAffect"] !== null) {
            $this->VulAffect = $param["VulAffect"];
        }

        if (array_key_exists("KVERecord",$param) and $param["KVERecord"] !== null) {
            $this->KVERecord = $param["KVERecord"];
        }

        if (array_key_exists("EPSSScore",$param) and $param["EPSSScore"] !== null) {
            $this->EPSSScore = $param["EPSSScore"];
        }

        if (array_key_exists("AffectVendor",$param) and $param["AffectVendor"] !== null) {
            $this->AffectVendor = $param["AffectVendor"];
        }

        if (array_key_exists("AffectProduct",$param) and $param["AffectProduct"] !== null) {
            $this->AffectProduct = $param["AffectProduct"];
        }

        if (array_key_exists("Mechanism",$param) and $param["Mechanism"] !== null) {
            $this->Mechanism = $param["Mechanism"];
        }

        if (array_key_exists("Precondition",$param) and $param["Precondition"] !== null) {
            $this->Precondition = $param["Precondition"];
        }

        if (array_key_exists("FixSolution",$param) and $param["FixSolution"] !== null) {
            $this->FixSolution = $param["FixSolution"];
        }

        if (array_key_exists("RefLink",$param) and $param["RefLink"] !== null) {
            $this->RefLink = $param["RefLink"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("PocId",$param) and $param["PocId"] !== null) {
            $this->PocId = $param["PocId"];
        }
    }
}
