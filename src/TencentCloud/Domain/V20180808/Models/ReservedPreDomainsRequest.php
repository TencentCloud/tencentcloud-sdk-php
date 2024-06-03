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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReservedPreDomains请求参数结构体
 *
 * @method array getDomainList() 获取预约预释放域名列表
 * @method void setDomainList(array $DomainList) 设置预约预释放域名列表
 * @method string getTemplateId() 获取模板ID
 * @method void setTemplateId(string $TemplateId) 设置模板ID
 * @method integer getIsAutoPay() 获取结束后是否自动支付尾款，默认开启 传入1关闭
 * @method void setIsAutoPay(integer $IsAutoPay) 设置结束后是否自动支付尾款，默认开启 传入1关闭
 * @method integer getIsBidAutoPay() 获取结束后是否自动进行梯度保证金扣除，默认开启 传入1关闭
 * @method void setIsBidAutoPay(integer $IsBidAutoPay) 设置结束后是否自动进行梯度保证金扣除，默认开启 传入1关闭
 */
class ReservedPreDomainsRequest extends AbstractModel
{
    /**
     * @var array 预约预释放域名列表
     */
    public $DomainList;

    /**
     * @var string 模板ID
     */
    public $TemplateId;

    /**
     * @var integer 结束后是否自动支付尾款，默认开启 传入1关闭
     */
    public $IsAutoPay;

    /**
     * @var integer 结束后是否自动进行梯度保证金扣除，默认开启 传入1关闭
     */
    public $IsBidAutoPay;

    /**
     * @param array $DomainList 预约预释放域名列表
     * @param string $TemplateId 模板ID
     * @param integer $IsAutoPay 结束后是否自动支付尾款，默认开启 传入1关闭
     * @param integer $IsBidAutoPay 结束后是否自动进行梯度保证金扣除，默认开启 传入1关闭
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
        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("IsAutoPay",$param) and $param["IsAutoPay"] !== null) {
            $this->IsAutoPay = $param["IsAutoPay"];
        }

        if (array_key_exists("IsBidAutoPay",$param) and $param["IsBidAutoPay"] !== null) {
            $this->IsBidAutoPay = $param["IsBidAutoPay"];
        }
    }
}
