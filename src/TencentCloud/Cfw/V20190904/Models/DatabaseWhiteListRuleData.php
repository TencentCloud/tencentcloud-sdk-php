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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库白名单规则数据
 *
 * @method string getSourceIp() 获取访问源
 * @method void setSourceIp(string $SourceIp) 设置访问源
 * @method integer getSourceType() 获取访问源类型，1 ip；6 实例；100 资源分组
 * @method void setSourceType(integer $SourceType) 设置访问源类型，1 ip；6 实例；100 资源分组
 * @method string getTargetIp() 获取访问目的
 * @method void setTargetIp(string $TargetIp) 设置访问目的
 * @method integer getTargetType() 获取访问目的类型，1 ip；6 实例；100 资源分组
 * @method void setTargetType(integer $TargetType) 设置访问目的类型，1 ip；6 实例；100 资源分组
 * @method string getDetail() 获取规则描述
 * @method void setDetail(string $Detail) 设置规则描述
 * @method integer getIsRegionRule() 获取是否地域规则，0不是 1是
 * @method void setIsRegionRule(integer $IsRegionRule) 设置是否地域规则，0不是 1是
 * @method integer getIsCloudRule() 获取是否云厂商规则，0不是 1 时
 * @method void setIsCloudRule(integer $IsCloudRule) 设置是否云厂商规则，0不是 1 时
 * @method integer getEnable() 获取是否启用，0 不启用，1启用
 * @method void setEnable(integer $Enable) 设置是否启用，0 不启用，1启用
 * @method integer getFirstLevelRegionCode() 获取地域码1
 * @method void setFirstLevelRegionCode(integer $FirstLevelRegionCode) 设置地域码1
 * @method integer getSecondLevelRegionCode() 获取地域码2
 * @method void setSecondLevelRegionCode(integer $SecondLevelRegionCode) 设置地域码2
 * @method string getFirstLevelRegionName() 获取地域名称1
 * @method void setFirstLevelRegionName(string $FirstLevelRegionName) 设置地域名称1
 * @method string getSecondLevelRegionName() 获取地域名称2
 * @method void setSecondLevelRegionName(string $SecondLevelRegionName) 设置地域名称2
 * @method string getCloudCode() 获取云厂商码
 * @method void setCloudCode(string $CloudCode) 设置云厂商码
 */
class DatabaseWhiteListRuleData extends AbstractModel
{
    /**
     * @var string 访问源
     */
    public $SourceIp;

    /**
     * @var integer 访问源类型，1 ip；6 实例；100 资源分组
     */
    public $SourceType;

    /**
     * @var string 访问目的
     */
    public $TargetIp;

    /**
     * @var integer 访问目的类型，1 ip；6 实例；100 资源分组
     */
    public $TargetType;

    /**
     * @var string 规则描述
     */
    public $Detail;

    /**
     * @var integer 是否地域规则，0不是 1是
     */
    public $IsRegionRule;

    /**
     * @var integer 是否云厂商规则，0不是 1 时
     */
    public $IsCloudRule;

    /**
     * @var integer 是否启用，0 不启用，1启用
     */
    public $Enable;

    /**
     * @var integer 地域码1
     */
    public $FirstLevelRegionCode;

    /**
     * @var integer 地域码2
     */
    public $SecondLevelRegionCode;

    /**
     * @var string 地域名称1
     */
    public $FirstLevelRegionName;

    /**
     * @var string 地域名称2
     */
    public $SecondLevelRegionName;

    /**
     * @var string 云厂商码
     */
    public $CloudCode;

    /**
     * @param string $SourceIp 访问源
     * @param integer $SourceType 访问源类型，1 ip；6 实例；100 资源分组
     * @param string $TargetIp 访问目的
     * @param integer $TargetType 访问目的类型，1 ip；6 实例；100 资源分组
     * @param string $Detail 规则描述
     * @param integer $IsRegionRule 是否地域规则，0不是 1是
     * @param integer $IsCloudRule 是否云厂商规则，0不是 1 时
     * @param integer $Enable 是否启用，0 不启用，1启用
     * @param integer $FirstLevelRegionCode 地域码1
     * @param integer $SecondLevelRegionCode 地域码2
     * @param string $FirstLevelRegionName 地域名称1
     * @param string $SecondLevelRegionName 地域名称2
     * @param string $CloudCode 云厂商码
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
        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("IsRegionRule",$param) and $param["IsRegionRule"] !== null) {
            $this->IsRegionRule = $param["IsRegionRule"];
        }

        if (array_key_exists("IsCloudRule",$param) and $param["IsCloudRule"] !== null) {
            $this->IsCloudRule = $param["IsCloudRule"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("FirstLevelRegionCode",$param) and $param["FirstLevelRegionCode"] !== null) {
            $this->FirstLevelRegionCode = $param["FirstLevelRegionCode"];
        }

        if (array_key_exists("SecondLevelRegionCode",$param) and $param["SecondLevelRegionCode"] !== null) {
            $this->SecondLevelRegionCode = $param["SecondLevelRegionCode"];
        }

        if (array_key_exists("FirstLevelRegionName",$param) and $param["FirstLevelRegionName"] !== null) {
            $this->FirstLevelRegionName = $param["FirstLevelRegionName"];
        }

        if (array_key_exists("SecondLevelRegionName",$param) and $param["SecondLevelRegionName"] !== null) {
            $this->SecondLevelRegionName = $param["SecondLevelRegionName"];
        }

        if (array_key_exists("CloudCode",$param) and $param["CloudCode"] !== null) {
            $this->CloudCode = $param["CloudCode"];
        }
    }
}
