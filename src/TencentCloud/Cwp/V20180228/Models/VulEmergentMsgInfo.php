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
 * 紧急通知实体
 *
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method string getPublishTime() 获取漏洞披露时间
 * @method void setPublishTime(string $PublishTime) 设置漏洞披露时间
 * @method string getName() 获取漏洞名
 * @method void setName(string $Name) 设置漏洞名
 * @method string getNameEn() 获取漏洞名,英文描述
 * @method void setNameEn(string $NameEn) 设置漏洞名,英文描述
 * @method integer getSupportFix() 获取是否支持自动修复 0:不支持 >0: 支持
 * @method void setSupportFix(integer $SupportFix) 设置是否支持自动修复 0:不支持 >0: 支持
 * @method integer getSupportDefense() 获取是否支持自动防御 0:不支持 1:支持
 * @method void setSupportDefense(integer $SupportDefense) 设置是否支持自动防御 0:不支持 1:支持
 * @method integer getKbId() 获取KB对应的ID
 * @method void setKbId(integer $KbId) 设置KB对应的ID
 * @method string getKbNumber() 获取KB号
 * @method void setKbNumber(string $KbNumber) 设置KB号
 */
class VulEmergentMsgInfo extends AbstractModel
{
    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var string 漏洞披露时间
     */
    public $PublishTime;

    /**
     * @var string 漏洞名
     */
    public $Name;

    /**
     * @var string 漏洞名,英文描述
     */
    public $NameEn;

    /**
     * @var integer 是否支持自动修复 0:不支持 >0: 支持
     */
    public $SupportFix;

    /**
     * @var integer 是否支持自动防御 0:不支持 1:支持
     */
    public $SupportDefense;

    /**
     * @var integer KB对应的ID
     */
    public $KbId;

    /**
     * @var string KB号
     */
    public $KbNumber;

    /**
     * @param integer $VulId 漏洞id
     * @param string $PublishTime 漏洞披露时间
     * @param string $Name 漏洞名
     * @param string $NameEn 漏洞名,英文描述
     * @param integer $SupportFix 是否支持自动修复 0:不支持 >0: 支持
     * @param integer $SupportDefense 是否支持自动防御 0:不支持 1:支持
     * @param integer $KbId KB对应的ID
     * @param string $KbNumber KB号
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

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NameEn",$param) and $param["NameEn"] !== null) {
            $this->NameEn = $param["NameEn"];
        }

        if (array_key_exists("SupportFix",$param) and $param["SupportFix"] !== null) {
            $this->SupportFix = $param["SupportFix"];
        }

        if (array_key_exists("SupportDefense",$param) and $param["SupportDefense"] !== null) {
            $this->SupportDefense = $param["SupportDefense"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("KbNumber",$param) and $param["KbNumber"] !== null) {
            $this->KbNumber = $param["KbNumber"];
        }
    }
}
