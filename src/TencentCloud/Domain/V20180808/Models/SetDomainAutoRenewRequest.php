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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetDomainAutoRenew请求参数结构体
 *
 * @method string getDomainId() 获取域名实例ID
可通过[DescribeDomainNameList](https://cloud.tencent.com/document/api/242/48941)接口获取
 * @method void setDomainId(string $DomainId) 设置域名实例ID
可通过[DescribeDomainNameList](https://cloud.tencent.com/document/api/242/48941)接口获取
 * @method integer getAutoRenew() 获取AutoRenew 有三个可选值：
 0：不设置自动续费
1：设置自动续费
2：设置到期后不续费
 * @method void setAutoRenew(integer $AutoRenew) 设置AutoRenew 有三个可选值：
 0：不设置自动续费
1：设置自动续费
2：设置到期后不续费
 */
class SetDomainAutoRenewRequest extends AbstractModel
{
    /**
     * @var string 域名实例ID
可通过[DescribeDomainNameList](https://cloud.tencent.com/document/api/242/48941)接口获取
     */
    public $DomainId;

    /**
     * @var integer AutoRenew 有三个可选值：
 0：不设置自动续费
1：设置自动续费
2：设置到期后不续费
     */
    public $AutoRenew;

    /**
     * @param string $DomainId 域名实例ID
可通过[DescribeDomainNameList](https://cloud.tencent.com/document/api/242/48941)接口获取
     * @param integer $AutoRenew AutoRenew 有三个可选值：
 0：不设置自动续费
1：设置自动续费
2：设置到期后不续费
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }
    }
}
