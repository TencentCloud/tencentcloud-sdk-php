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
 * DescribeDomainPriceList请求参数结构体
 *
 * @method array getTldList() 获取查询指定域名后缀的域名价格列表，若不指定域名后缀，默认查询所有后缀的域名价格列表。
 * @method void setTldList(array $TldList) 设置查询指定域名后缀的域名价格列表，若不指定域名后缀，默认查询所有后缀的域名价格列表。
 * @method array getYear() 获取查询购买的年份，默认会列出所有年份的价格，可选值【1,10】
 * @method void setYear(array $Year) 设置查询购买的年份，默认会列出所有年份的价格，可选值【1,10】
 * @method array getOperation() 获取域名的购买类型：
new  新购
renew 续费
redem 赎回
tran 转入
 * @method void setOperation(array $Operation) 设置域名的购买类型：
new  新购
renew 续费
redem 赎回
tran 转入
 */
class DescribeDomainPriceListRequest extends AbstractModel
{
    /**
     * @var array 查询指定域名后缀的域名价格列表，若不指定域名后缀，默认查询所有后缀的域名价格列表。
     */
    public $TldList;

    /**
     * @var array 查询购买的年份，默认会列出所有年份的价格，可选值【1,10】
     */
    public $Year;

    /**
     * @var array 域名的购买类型：
new  新购
renew 续费
redem 赎回
tran 转入
     */
    public $Operation;

    /**
     * @param array $TldList 查询指定域名后缀的域名价格列表，若不指定域名后缀，默认查询所有后缀的域名价格列表。
     * @param array $Year 查询购买的年份，默认会列出所有年份的价格，可选值【1,10】
     * @param array $Operation 域名的购买类型：
new  新购
renew 续费
redem 赎回
tran 转入
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
        if (array_key_exists("TldList",$param) and $param["TldList"] !== null) {
            $this->TldList = $param["TldList"];
        }

        if (array_key_exists("Year",$param) and $param["Year"] !== null) {
            $this->Year = $param["Year"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
