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
 * 漏洞仓库列表信息
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
 * @method string getPublishDate() 获取发布时间
 * @method void setPublishDate(string $PublishDate) 设置发布时间
 * @method integer getMethod() 获取漏洞检测方法 0 - 版本比对, 1 - POC验证
 * @method void setMethod(integer $Method) 设置漏洞检测方法 0 - 版本比对, 1 - POC验证
 * @method integer getAttackLevel() 获取漏洞攻击热度
 * @method void setAttackLevel(integer $AttackLevel) 设置漏洞攻击热度
 * @method integer getFixSwitch() 获取漏洞是否支持自动修复
0-windows/linux均关闭; 1-windows/linux均打开; 2-仅linux; 3-仅windows
 * @method void setFixSwitch(integer $FixSwitch) 设置漏洞是否支持自动修复
0-windows/linux均关闭; 1-windows/linux均打开; 2-仅linux; 3-仅windows
 * @method integer getSupportDefense() 获取漏洞是否支持防御
0:不支持 1:支持
 * @method void setSupportDefense(integer $SupportDefense) 设置漏洞是否支持防御
0:不支持 1:支持
 */
class VulStoreListInfo extends AbstractModel
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
     * @var string 发布时间
     */
    public $PublishDate;

    /**
     * @var integer 漏洞检测方法 0 - 版本比对, 1 - POC验证
     */
    public $Method;

    /**
     * @var integer 漏洞攻击热度
     */
    public $AttackLevel;

    /**
     * @var integer 漏洞是否支持自动修复
0-windows/linux均关闭; 1-windows/linux均打开; 2-仅linux; 3-仅windows
     */
    public $FixSwitch;

    /**
     * @var integer 漏洞是否支持防御
0:不支持 1:支持
     */
    public $SupportDefense;

    /**
     * @param integer $VulId 漏洞ID
     * @param integer $Level 漏洞级别
     * @param string $Name 漏洞名称
     * @param string $CveId cve编号
     * @param integer $VulCategory 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞 0= 应急漏洞
     * @param string $PublishDate 发布时间
     * @param integer $Method 漏洞检测方法 0 - 版本比对, 1 - POC验证
     * @param integer $AttackLevel 漏洞攻击热度
     * @param integer $FixSwitch 漏洞是否支持自动修复
0-windows/linux均关闭; 1-windows/linux均打开; 2-仅linux; 3-仅windows
     * @param integer $SupportDefense 漏洞是否支持防御
0:不支持 1:支持
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

        if (array_key_exists("PublishDate",$param) and $param["PublishDate"] !== null) {
            $this->PublishDate = $param["PublishDate"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("AttackLevel",$param) and $param["AttackLevel"] !== null) {
            $this->AttackLevel = $param["AttackLevel"];
        }

        if (array_key_exists("FixSwitch",$param) and $param["FixSwitch"] !== null) {
            $this->FixSwitch = $param["FixSwitch"];
        }

        if (array_key_exists("SupportDefense",$param) and $param["SupportDefense"] !== null) {
            $this->SupportDefense = $param["SupportDefense"];
        }
    }
}
