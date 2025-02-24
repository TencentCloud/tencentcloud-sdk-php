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
 * SAASWAF规则回源时的规则数据结构
 *
 * @method string getKeyName() 获取匹配的关键字。目前支持host、uri两种
 * @method void setKeyName(string $KeyName) 设置匹配的关键字。目前支持host、uri两种
 * @method string getSymbol() 获取逻辑符号。
equal：等于
not equal：不等于
belong：属于
not belong：不属于
 * @method void setSymbol(string $Symbol) 设置逻辑符号。
equal：等于
not equal：不等于
belong：属于
not belong：不属于
 * @method array getContentList() 获取匹配的内容。equal和not equal时，数组只能有一个元素
 * @method void setContentList(array $ContentList) 设置匹配的内容。equal和not equal时，数组只能有一个元素
 * @method array getAddressList() 获取规则匹配后生效的回源地址。
 * @method void setAddressList(array $AddressList) 设置规则匹配后生效的回源地址。
 * @method integer getBalanceType() 获取回源负载均衡类型，仅多个回源地址时生效。
0：轮询
1：IP_HASH
 * @method void setBalanceType(integer $BalanceType) 设置回源负载均衡类型，仅多个回源地址时生效。
0：轮询
1：IP_HASH
 */
class UpstreamRule extends AbstractModel
{
    /**
     * @var string 匹配的关键字。目前支持host、uri两种
     */
    public $KeyName;

    /**
     * @var string 逻辑符号。
equal：等于
not equal：不等于
belong：属于
not belong：不属于
     */
    public $Symbol;

    /**
     * @var array 匹配的内容。equal和not equal时，数组只能有一个元素
     */
    public $ContentList;

    /**
     * @var array 规则匹配后生效的回源地址。
     */
    public $AddressList;

    /**
     * @var integer 回源负载均衡类型，仅多个回源地址时生效。
0：轮询
1：IP_HASH
     */
    public $BalanceType;

    /**
     * @param string $KeyName 匹配的关键字。目前支持host、uri两种
     * @param string $Symbol 逻辑符号。
equal：等于
not equal：不等于
belong：属于
not belong：不属于
     * @param array $ContentList 匹配的内容。equal和not equal时，数组只能有一个元素
     * @param array $AddressList 规则匹配后生效的回源地址。
     * @param integer $BalanceType 回源负载均衡类型，仅多个回源地址时生效。
0：轮询
1：IP_HASH
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("Symbol",$param) and $param["Symbol"] !== null) {
            $this->Symbol = $param["Symbol"];
        }

        if (array_key_exists("ContentList",$param) and $param["ContentList"] !== null) {
            $this->ContentList = $param["ContentList"];
        }

        if (array_key_exists("AddressList",$param) and $param["AddressList"] !== null) {
            $this->AddressList = $param["AddressList"];
        }

        if (array_key_exists("BalanceType",$param) and $param["BalanceType"] !== null) {
            $this->BalanceType = $param["BalanceType"];
        }
    }
}
