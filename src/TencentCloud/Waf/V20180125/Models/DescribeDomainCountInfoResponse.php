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
 * DescribeDomainCountInfo返回参数结构体
 *
 * @method integer getAllDomain() 获取域名总数
 * @method void setAllDomain(integer $AllDomain) 设置域名总数
 * @method string getUpdateTime() 获取最近发现时间
 * @method void setUpdateTime(string $UpdateTime) 设置最近发现时间
 * @method integer getWafDomainCount() 获取接入域名总数
 * @method void setWafDomainCount(integer $WafDomainCount) 设置接入域名总数
 * @method integer getLeftDomainCount() 获取剩下配额
 * @method void setLeftDomainCount(integer $LeftDomainCount) 设置剩下配额
 * @method integer getOpenWafDomain() 获取开启防护域名数
 * @method void setOpenWafDomain(integer $OpenWafDomain) 设置开启防护域名数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDomainCountInfoResponse extends AbstractModel
{
    /**
     * @var integer 域名总数
     */
    public $AllDomain;

    /**
     * @var string 最近发现时间
     */
    public $UpdateTime;

    /**
     * @var integer 接入域名总数
     */
    public $WafDomainCount;

    /**
     * @var integer 剩下配额
     */
    public $LeftDomainCount;

    /**
     * @var integer 开启防护域名数
     */
    public $OpenWafDomain;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AllDomain 域名总数
     * @param string $UpdateTime 最近发现时间
     * @param integer $WafDomainCount 接入域名总数
     * @param integer $LeftDomainCount 剩下配额
     * @param integer $OpenWafDomain 开启防护域名数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AllDomain",$param) and $param["AllDomain"] !== null) {
            $this->AllDomain = $param["AllDomain"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("WafDomainCount",$param) and $param["WafDomainCount"] !== null) {
            $this->WafDomainCount = $param["WafDomainCount"];
        }

        if (array_key_exists("LeftDomainCount",$param) and $param["LeftDomainCount"] !== null) {
            $this->LeftDomainCount = $param["LeftDomainCount"];
        }

        if (array_key_exists("OpenWafDomain",$param) and $param["OpenWafDomain"] !== null) {
            $this->OpenWafDomain = $param["OpenWafDomain"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
