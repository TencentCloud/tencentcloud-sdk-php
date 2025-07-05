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
 * 漏洞防御范围详情
 *
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getLabel() 获取标签
 * @method void setLabel(string $Label) 设置标签
 * @method integer getLevel() 获取漏洞级别：  1低危 2中危 3高危 4严重
 * @method void setLevel(integer $Level) 设置漏洞级别：  1低危 2中危 3高危 4严重
 * @method float getCvssScore() 获取cvss 分数
 * @method void setCvssScore(float $CvssScore) 设置cvss 分数
 * @method string getCveId() 获取cve id
 * @method void setCveId(string $CveId) 设置cve id
 * @method string getPublishTime() 获取发布时间
 * @method void setPublishTime(string $PublishTime) 设置发布时间
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method integer getStatus() 获取状态，0:防御中，1：已加白，指的是在白名单列表中有这个漏洞的，不一定是全局型白名单
 * @method void setStatus(integer $Status) 设置状态，0:防御中，1：已加白，指的是在白名单列表中有这个漏洞的，不一定是全局型白名单
 */
class VulDefenceRangeDetail extends AbstractModel
{
    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string 标签
     */
    public $Label;

    /**
     * @var integer 漏洞级别：  1低危 2中危 3高危 4严重
     */
    public $Level;

    /**
     * @var float cvss 分数
     */
    public $CvssScore;

    /**
     * @var string cve id
     */
    public $CveId;

    /**
     * @var string 发布时间
     */
    public $PublishTime;

    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var integer 状态，0:防御中，1：已加白，指的是在白名单列表中有这个漏洞的，不一定是全局型白名单
     */
    public $Status;

    /**
     * @param string $VulName 漏洞名称
     * @param string $Label 标签
     * @param integer $Level 漏洞级别：  1低危 2中危 3高危 4严重
     * @param float $CvssScore cvss 分数
     * @param string $CveId cve id
     * @param string $PublishTime 发布时间
     * @param integer $VulId 漏洞id
     * @param integer $Status 状态，0:防御中，1：已加白，指的是在白名单列表中有这个漏洞的，不一定是全局型白名单
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
        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
