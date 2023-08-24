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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名列表
 *
 * @method integer getAppid() 获取用户id
 * @method void setAppid(integer $Appid) 设置用户id
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method array getIps() 获取域名ip
 * @method void setIps(array $Ips) 设置域名ip
 * @method string getFindTime() 获取发现时间
 * @method void setFindTime(string $FindTime) 设置发现时间
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getDomainId() 获取域名id
 * @method void setDomainId(string $DomainId) 设置域名id
 * @method string getEdition() 获取waf类型
 * @method void setEdition(string $Edition) 设置waf类型
 * @method integer getIsWafDomain() 获取是否接入waf
 * @method void setIsWafDomain(integer $IsWafDomain) 设置是否接入waf
 */
class FindAllDomainDetail extends AbstractModel
{
    /**
     * @var integer 用户id
     */
    public $Appid;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var array 域名ip
     */
    public $Ips;

    /**
     * @var string 发现时间
     */
    public $FindTime;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 域名id
     */
    public $DomainId;

    /**
     * @var string waf类型
     */
    public $Edition;

    /**
     * @var integer 是否接入waf
     */
    public $IsWafDomain;

    /**
     * @param integer $Appid 用户id
     * @param string $Domain 域名
     * @param array $Ips 域名ip
     * @param string $FindTime 发现时间
     * @param string $InstanceId 实例id
     * @param string $DomainId 域名id
     * @param string $Edition waf类型
     * @param integer $IsWafDomain 是否接入waf
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
        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Ips",$param) and $param["Ips"] !== null) {
            $this->Ips = $param["Ips"];
        }

        if (array_key_exists("FindTime",$param) and $param["FindTime"] !== null) {
            $this->FindTime = $param["FindTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("IsWafDomain",$param) and $param["IsWafDomain"] !== null) {
            $this->IsWafDomain = $param["IsWafDomain"];
        }
    }
}
