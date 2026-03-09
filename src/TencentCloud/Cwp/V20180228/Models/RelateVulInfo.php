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
 * Windows补丁关联的漏洞信息
 *
 * @method string getCveId() 获取CVEid
 * @method void setCveId(string $CveId) 设置CVEid
 * @method string getName() 获取漏洞名
 * @method void setName(string $Name) 设置漏洞名
 * @method string getLabel() 获取漏洞标签
 * @method void setLabel(string $Label) 设置漏洞标签
 * @method integer getLevel() 获取漏洞等级
 * @method void setLevel(integer $Level) 设置漏洞等级
 * @method float getCVSS() 获取CVSS评分
 * @method void setCVSS(float $CVSS) 设置CVSS评分
 * @method string getPublishTime() 获取漏洞披露时间
 * @method void setPublishTime(string $PublishTime) 设置漏洞披露时间
 * @method integer getId() 获取漏洞id
 * @method void setId(integer $Id) 设置漏洞id
 */
class RelateVulInfo extends AbstractModel
{
    /**
     * @var string CVEid
     */
    public $CveId;

    /**
     * @var string 漏洞名
     */
    public $Name;

    /**
     * @var string 漏洞标签
     */
    public $Label;

    /**
     * @var integer 漏洞等级
     */
    public $Level;

    /**
     * @var float CVSS评分
     */
    public $CVSS;

    /**
     * @var string 漏洞披露时间
     */
    public $PublishTime;

    /**
     * @var integer 漏洞id
     */
    public $Id;

    /**
     * @param string $CveId CVEid
     * @param string $Name 漏洞名
     * @param string $Label 漏洞标签
     * @param integer $Level 漏洞等级
     * @param float $CVSS CVSS评分
     * @param string $PublishTime 漏洞披露时间
     * @param integer $Id 漏洞id
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
        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
