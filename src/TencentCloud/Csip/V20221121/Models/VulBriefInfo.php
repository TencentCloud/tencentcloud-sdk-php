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
 * 漏洞简要信息
 *
 * @method integer getVulID() 获取漏洞 ID（vul_vuls.id）
 * @method void setVulID(integer $VulID) 设置漏洞 ID（vul_vuls.id）
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getCVEID() 获取CVE 编号
参数格式：形如 CVE-2018-5377
 * @method void setCVEID(string $CVEID) 设置CVE 编号
参数格式：形如 CVE-2018-5377
 * @method array getLabel() 获取VPR 风险标签列表
 * @method void setLabel(array $Label) 设置VPR 风险标签列表
 * @method float getCvssScore() 获取CVSS 评分
取值范围：[0.0, 10.0]
 * @method void setCvssScore(float $CvssScore) 设置CVSS 评分
取值范围：[0.0, 10.0]
 * @method string getLevel() 获取威胁等级
枚举值：
INVALID：无效
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
 * @method void setLevel(string $Level) 设置威胁等级
枚举值：
INVALID：无效
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
 * @method string getPublishTime() 获取漏洞披露时间
参数格式：YYYY-MM-DD HH:mm:ss
 * @method void setPublishTime(string $PublishTime) 设置漏洞披露时间
参数格式：YYYY-MM-DD HH:mm:ss
 */
class VulBriefInfo extends AbstractModel
{
    /**
     * @var integer 漏洞 ID（vul_vuls.id）
     */
    public $VulID;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string CVE 编号
参数格式：形如 CVE-2018-5377
     */
    public $CVEID;

    /**
     * @var array VPR 风险标签列表
     */
    public $Label;

    /**
     * @var float CVSS 评分
取值范围：[0.0, 10.0]
     */
    public $CvssScore;

    /**
     * @var string 威胁等级
枚举值：
INVALID：无效
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
     */
    public $Level;

    /**
     * @var string 漏洞披露时间
参数格式：YYYY-MM-DD HH:mm:ss
     */
    public $PublishTime;

    /**
     * @param integer $VulID 漏洞 ID（vul_vuls.id）
     * @param string $VulName 漏洞名称
     * @param string $CVEID CVE 编号
参数格式：形如 CVE-2018-5377
     * @param array $Label VPR 风险标签列表
     * @param float $CvssScore CVSS 评分
取值范围：[0.0, 10.0]
     * @param string $Level 威胁等级
枚举值：
INVALID：无效
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
     * @param string $PublishTime 漏洞披露时间
参数格式：YYYY-MM-DD HH:mm:ss
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

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = [];
            foreach ($param["Label"] as $key => $value){
                $obj = new VPRLabel();
                $obj->deserialize($value);
                array_push($this->Label, $obj);
            }
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }
    }
}
