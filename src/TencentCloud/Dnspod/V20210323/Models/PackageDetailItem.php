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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐配置明细
 *
 * @method integer getRealPrice() 获取套餐原价
 * @method void setRealPrice(integer $RealPrice) 设置套餐原价
 * @method integer getChangedTimes() 获取可更换域名次数
 * @method void setChangedTimes(integer $ChangedTimes) 设置可更换域名次数
 * @method integer getMinTtl() 获取允许设置的最小 TTL 值
 * @method void setMinTtl(integer $MinTtl) 设置允许设置的最小 TTL 值
 * @method integer getRecordRoll() 获取负载均衡数量
 * @method void setRecordRoll(integer $RecordRoll) 设置负载均衡数量
 * @method integer getSubDomainLevel() 获取子域名级数
 * @method void setSubDomainLevel(integer $SubDomainLevel) 设置子域名级数
 * @method integer getMaxWildcard() 获取泛解析级数
 * @method void setMaxWildcard(integer $MaxWildcard) 设置泛解析级数
 * @method string getDnsServerRegion() 获取DNS 服务集群个数
 * @method void setDnsServerRegion(string $DnsServerRegion) 设置DNS 服务集群个数
 * @method string getDomainGradeCn() 获取套餐名称
 * @method void setDomainGradeCn(string $DomainGradeCn) 设置套餐名称
 * @method integer getGradeLevel() 获取套餐代号
 * @method void setGradeLevel(integer $GradeLevel) 设置套餐代号
 * @method array getNs() 获取套餐对应的 NS
 * @method void setNs(array $Ns) 设置套餐对应的 NS
 * @method string getDomainGrade() 获取套餐代码
 * @method void setDomainGrade(string $DomainGrade) 设置套餐代码
 */
class PackageDetailItem extends AbstractModel
{
    /**
     * @var integer 套餐原价
     */
    public $RealPrice;

    /**
     * @var integer 可更换域名次数
     */
    public $ChangedTimes;

    /**
     * @var integer 允许设置的最小 TTL 值
     */
    public $MinTtl;

    /**
     * @var integer 负载均衡数量
     */
    public $RecordRoll;

    /**
     * @var integer 子域名级数
     */
    public $SubDomainLevel;

    /**
     * @var integer 泛解析级数
     */
    public $MaxWildcard;

    /**
     * @var string DNS 服务集群个数
     */
    public $DnsServerRegion;

    /**
     * @var string 套餐名称
     */
    public $DomainGradeCn;

    /**
     * @var integer 套餐代号
     */
    public $GradeLevel;

    /**
     * @var array 套餐对应的 NS
     */
    public $Ns;

    /**
     * @var string 套餐代码
     */
    public $DomainGrade;

    /**
     * @param integer $RealPrice 套餐原价
     * @param integer $ChangedTimes 可更换域名次数
     * @param integer $MinTtl 允许设置的最小 TTL 值
     * @param integer $RecordRoll 负载均衡数量
     * @param integer $SubDomainLevel 子域名级数
     * @param integer $MaxWildcard 泛解析级数
     * @param string $DnsServerRegion DNS 服务集群个数
     * @param string $DomainGradeCn 套餐名称
     * @param integer $GradeLevel 套餐代号
     * @param array $Ns 套餐对应的 NS
     * @param string $DomainGrade 套餐代码
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
        if (array_key_exists("RealPrice",$param) and $param["RealPrice"] !== null) {
            $this->RealPrice = $param["RealPrice"];
        }

        if (array_key_exists("ChangedTimes",$param) and $param["ChangedTimes"] !== null) {
            $this->ChangedTimes = $param["ChangedTimes"];
        }

        if (array_key_exists("MinTtl",$param) and $param["MinTtl"] !== null) {
            $this->MinTtl = $param["MinTtl"];
        }

        if (array_key_exists("RecordRoll",$param) and $param["RecordRoll"] !== null) {
            $this->RecordRoll = $param["RecordRoll"];
        }

        if (array_key_exists("SubDomainLevel",$param) and $param["SubDomainLevel"] !== null) {
            $this->SubDomainLevel = $param["SubDomainLevel"];
        }

        if (array_key_exists("MaxWildcard",$param) and $param["MaxWildcard"] !== null) {
            $this->MaxWildcard = $param["MaxWildcard"];
        }

        if (array_key_exists("DnsServerRegion",$param) and $param["DnsServerRegion"] !== null) {
            $this->DnsServerRegion = $param["DnsServerRegion"];
        }

        if (array_key_exists("DomainGradeCn",$param) and $param["DomainGradeCn"] !== null) {
            $this->DomainGradeCn = $param["DomainGradeCn"];
        }

        if (array_key_exists("GradeLevel",$param) and $param["GradeLevel"] !== null) {
            $this->GradeLevel = $param["GradeLevel"];
        }

        if (array_key_exists("Ns",$param) and $param["Ns"] !== null) {
            $this->Ns = $param["Ns"];
        }

        if (array_key_exists("DomainGrade",$param) and $param["DomainGrade"] !== null) {
            $this->DomainGrade = $param["DomainGrade"];
        }
    }
}
