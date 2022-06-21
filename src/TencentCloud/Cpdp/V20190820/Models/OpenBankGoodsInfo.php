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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云企付-商品信息
 *
 * @method string getGoodsName() 获取商品标题。默认值“商品支付”。
 * @method void setGoodsName(string $GoodsName) 设置商品标题。默认值“商品支付”。
 * @method string getGoodsDetail() 获取商品详细描述（商品列表）。
 * @method void setGoodsDetail(string $GoodsDetail) 设置商品详细描述（商品列表）。
 * @method string getGoodsDescription() 获取银行附言。不可以有以下字符：<>+{}()%*&';"[]等特殊符号
 * @method void setGoodsDescription(string $GoodsDescription) 设置银行附言。不可以有以下字符：<>+{}()%*&';"[]等特殊符号
 * @method string getGoodsBizType() 获取业务类型。汇付渠道必填，汇付渠道传入固定值100099。
 * @method void setGoodsBizType(string $GoodsBizType) 设置业务类型。汇付渠道必填，汇付渠道传入固定值100099。
 */
class OpenBankGoodsInfo extends AbstractModel
{
    /**
     * @var string 商品标题。默认值“商品支付”。
     */
    public $GoodsName;

    /**
     * @var string 商品详细描述（商品列表）。
     */
    public $GoodsDetail;

    /**
     * @var string 银行附言。不可以有以下字符：<>+{}()%*&';"[]等特殊符号
     */
    public $GoodsDescription;

    /**
     * @var string 业务类型。汇付渠道必填，汇付渠道传入固定值100099。
     */
    public $GoodsBizType;

    /**
     * @param string $GoodsName 商品标题。默认值“商品支付”。
     * @param string $GoodsDetail 商品详细描述（商品列表）。
     * @param string $GoodsDescription 银行附言。不可以有以下字符：<>+{}()%*&';"[]等特殊符号
     * @param string $GoodsBizType 业务类型。汇付渠道必填，汇付渠道传入固定值100099。
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
        if (array_key_exists("GoodsName",$param) and $param["GoodsName"] !== null) {
            $this->GoodsName = $param["GoodsName"];
        }

        if (array_key_exists("GoodsDetail",$param) and $param["GoodsDetail"] !== null) {
            $this->GoodsDetail = $param["GoodsDetail"];
        }

        if (array_key_exists("GoodsDescription",$param) and $param["GoodsDescription"] !== null) {
            $this->GoodsDescription = $param["GoodsDescription"];
        }

        if (array_key_exists("GoodsBizType",$param) and $param["GoodsBizType"] !== null) {
            $this->GoodsBizType = $param["GoodsBizType"];
        }
    }
}
