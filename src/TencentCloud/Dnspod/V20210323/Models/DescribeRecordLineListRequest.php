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
 * DescribeRecordLineList请求参数结构体
 *
 * @method string getDomain() 获取域名。
 * @method void setDomain(string $Domain) 设置域名。
 * @method string getDomainGrade() 获取域名套餐等级。  旧套餐：D_FREE、D_PLUS、D_EXTRA、D_EXPERT、D_ULTRA 、DP_EXTRA 分别对应免费套餐、个人豪华、企业 I、企业 II、企业 III、企业基础版。 新套餐：DP_FREE、DP_PLUS、DP_EXPERT、DP_ULTRA 分别对应新免费、专业版、企业版、尊享版。
 * @method void setDomainGrade(string $DomainGrade) 设置域名套餐等级。  旧套餐：D_FREE、D_PLUS、D_EXTRA、D_EXPERT、D_ULTRA 、DP_EXTRA 分别对应免费套餐、个人豪华、企业 I、企业 II、企业 III、企业基础版。 新套餐：DP_FREE、DP_PLUS、DP_EXPERT、DP_ULTRA 分别对应新免费、专业版、企业版、尊享版。
 * @method integer getDomainId() 获取域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
 * @method void setDomainId(integer $DomainId) 设置域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
 */
class DescribeRecordLineListRequest extends AbstractModel
{
    /**
     * @var string 域名。
     */
    public $Domain;

    /**
     * @var string 域名套餐等级。  旧套餐：D_FREE、D_PLUS、D_EXTRA、D_EXPERT、D_ULTRA 、DP_EXTRA 分别对应免费套餐、个人豪华、企业 I、企业 II、企业 III、企业基础版。 新套餐：DP_FREE、DP_PLUS、DP_EXPERT、DP_ULTRA 分别对应新免费、专业版、企业版、尊享版。
     */
    public $DomainGrade;

    /**
     * @var integer 域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
     */
    public $DomainId;

    /**
     * @param string $Domain 域名。
     * @param string $DomainGrade 域名套餐等级。  旧套餐：D_FREE、D_PLUS、D_EXTRA、D_EXPERT、D_ULTRA 、DP_EXTRA 分别对应免费套餐、个人豪华、企业 I、企业 II、企业 III、企业基础版。 新套餐：DP_FREE、DP_PLUS、DP_EXPERT、DP_ULTRA 分别对应新免费、专业版、企业版、尊享版。
     * @param integer $DomainId 域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainGrade",$param) and $param["DomainGrade"] !== null) {
            $this->DomainGrade = $param["DomainGrade"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
