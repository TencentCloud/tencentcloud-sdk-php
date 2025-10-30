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
 * 支持防御的漏洞
 *
 * @method string getPocID() 获取漏洞PocID
 * @method void setPocID(string $PocID) 设置漏洞PocID
 * @method string getName() 获取漏洞名称
 * @method void setName(string $Name) 设置漏洞名称
 * @method array getTags() 获取漏洞标签
 * @method void setTags(array $Tags) 设置漏洞标签
 * @method float getCVSSV3Score() 获取漏洞CVSS
 * @method void setCVSSV3Score(float $CVSSV3Score) 设置漏洞CVSS
 * @method string getLevel() 获取漏洞威胁等级
 * @method void setLevel(string $Level) 设置漏洞威胁等级
 * @method string getCVEID() 获取漏洞CVEID
 * @method void setCVEID(string $CVEID) 设置漏洞CVEID
 * @method string getSubmitTime() 获取漏洞披露时间
 * @method void setSubmitTime(string $SubmitTime) 设置漏洞披露时间
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method integer getStatus() 获取状态，0:防御中，1：已加白，指的是在白名单列表中有这个漏洞的，不一定是全局型白名单
 * @method void setStatus(integer $Status) 设置状态，0:防御中，1：已加白，指的是在白名单列表中有这个漏洞的，不一定是全局型白名单
 */
class SupportDefenceVul extends AbstractModel
{
    /**
     * @var string 漏洞PocID
     */
    public $PocID;

    /**
     * @var string 漏洞名称
     */
    public $Name;

    /**
     * @var array 漏洞标签
     */
    public $Tags;

    /**
     * @var float 漏洞CVSS
     */
    public $CVSSV3Score;

    /**
     * @var string 漏洞威胁等级
     */
    public $Level;

    /**
     * @var string 漏洞CVEID
     */
    public $CVEID;

    /**
     * @var string 漏洞披露时间
     */
    public $SubmitTime;

    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var integer 状态，0:防御中，1：已加白，指的是在白名单列表中有这个漏洞的，不一定是全局型白名单
     */
    public $Status;

    /**
     * @param string $PocID 漏洞PocID
     * @param string $Name 漏洞名称
     * @param array $Tags 漏洞标签
     * @param float $CVSSV3Score 漏洞CVSS
     * @param string $Level 漏洞威胁等级
     * @param string $CVEID 漏洞CVEID
     * @param string $SubmitTime 漏洞披露时间
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
        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
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

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
