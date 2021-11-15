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
 * 主播扩展信息
 *
 * @method string getType() 获取扩展信息类型
__id_card_no__:身份证号码
__id_card_name__:身份证姓名
__id_card_front__:身份证图片正面
__id_card_back__:身份证图片反面
__tax_type__:完税类型:0-自然人,1-个体工商户
__channel_account__:渠道账号(_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密)
 * @method void setType(string $Type) 设置扩展信息类型
__id_card_no__:身份证号码
__id_card_name__:身份证姓名
__id_card_front__:身份证图片正面
__id_card_back__:身份证图片反面
__tax_type__:完税类型:0-自然人,1-个体工商户
__channel_account__:渠道账号(_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密)
 * @method string getValue() 获取扩展信息
 * @method void setValue(string $Value) 设置扩展信息
 */
class AnchorExtendInfo extends AbstractModel
{
    /**
     * @var string 扩展信息类型
__id_card_no__:身份证号码
__id_card_name__:身份证姓名
__id_card_front__:身份证图片正面
__id_card_back__:身份证图片反面
__tax_type__:完税类型:0-自然人,1-个体工商户
__channel_account__:渠道账号(_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密)
     */
    public $Type;

    /**
     * @var string 扩展信息
     */
    public $Value;

    /**
     * @param string $Type 扩展信息类型
__id_card_no__:身份证号码
__id_card_name__:身份证姓名
__id_card_front__:身份证图片正面
__id_card_back__:身份证图片反面
__tax_type__:完税类型:0-自然人,1-个体工商户
__channel_account__:渠道账号(_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密)
     * @param string $Value 扩展信息
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
