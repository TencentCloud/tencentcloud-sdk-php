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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞详细信息
 *
 * @method integer getVulId() 获取漏洞ID
 * @method void setVulId(integer $VulId) 设置漏洞ID
 * @method integer getLevel() 获取漏洞级别
 * @method void setLevel(integer $Level) 设置漏洞级别
 * @method string getName() 获取漏洞名称
 * @method void setName(string $Name) 设置漏洞名称
 * @method string getCveId() 获取cve编号
 * @method void setCveId(string $CveId) 设置cve编号
 * @method integer getVulCategory() 获取1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞 0= 应急漏洞
 * @method void setVulCategory(integer $VulCategory) 设置1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞 0= 应急漏洞
 * @method string getDescript() 获取漏洞描述
 * @method void setDescript(string $Descript) 设置漏洞描述
 * @method string getFix() 获取修复建议
 * @method void setFix(string $Fix) 设置修复建议
 * @method string getReference() 获取参考链接
 * @method void setReference(string $Reference) 设置参考链接
 * @method float getCvssScore() 获取CVSS评分
 * @method void setCvssScore(float $CvssScore) 设置CVSS评分
 * @method string getCvss() 获取CVSS详情
 * @method void setCvss(string $Cvss) 设置CVSS详情
 * @method string getPublishTime() 获取发布时间
 * @method void setPublishTime(string $PublishTime) 设置发布时间
 */
class VulDetailInfo extends AbstractModel
{
    /**
     * @var integer 漏洞ID
     */
    public $VulId;

    /**
     * @var integer 漏洞级别
     */
    public $Level;

    /**
     * @var string 漏洞名称
     */
    public $Name;

    /**
     * @var string cve编号
     */
    public $CveId;

    /**
     * @var integer 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞 0= 应急漏洞
     */
    public $VulCategory;

    /**
     * @var string 漏洞描述
     */
    public $Descript;

    /**
     * @var string 修复建议
     */
    public $Fix;

    /**
     * @var string 参考链接
     */
    public $Reference;

    /**
     * @var float CVSS评分
     */
    public $CvssScore;

    /**
     * @var string CVSS详情
     */
    public $Cvss;

    /**
     * @var string 发布时间
     */
    public $PublishTime;

    /**
     * @param integer $VulId 漏洞ID
     * @param integer $Level 漏洞级别
     * @param string $Name 漏洞名称
     * @param string $CveId cve编号
     * @param integer $VulCategory 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞 0= 应急漏洞
     * @param string $Descript 漏洞描述
     * @param string $Fix 修复建议
     * @param string $Reference 参考链接
     * @param float $CvssScore CVSS评分
     * @param string $Cvss CVSS详情
     * @param string $PublishTime 发布时间
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

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("Descript",$param) and $param["Descript"] !== null) {
            $this->Descript = $param["Descript"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("Cvss",$param) and $param["Cvss"] !== null) {
            $this->Cvss = $param["Cvss"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }
    }
}
