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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCodePack请求参数结构体
 *
 * @method string getMerchantId() 获取商户ID
 * @method void setMerchantId(string $MerchantId) 设置商户ID
 * @method integer getCodeLength() 获取码长度
 * @method void setCodeLength(integer $CodeLength) 设置码长度
 * @method string getCodeType() 获取码类型 alphabet 字母, number 数字, mixin 混合
 * @method void setCodeType(string $CodeType) 设置码类型 alphabet 字母, number 数字, mixin 混合
 * @method integer getAmount() 获取生码数量 普通码包时必填
 * @method void setAmount(integer $Amount) 设置生码数量 普通码包时必填
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method integer getPackType() 获取码包类型 0: 普通码包 1: 层级码包
 * @method void setPackType(integer $PackType) 设置码包类型 0: 普通码包 1: 层级码包
 * @method integer getPackLevel() 获取码包层级
 * @method void setPackLevel(integer $PackLevel) 设置码包层级
 * @method array getPackSpec() 获取码包规格
 * @method void setPackSpec(array $PackSpec) 设置码包规格
 * @method string getBatchId() 获取批次ID，如果传了生码后会同时绑定批次，并激活码
 * @method void setBatchId(string $BatchId) 设置批次ID，如果传了生码后会同时绑定批次，并激活码
 * @method integer getSerialType() 获取是否有流水码 0:无 1:有
 * @method void setSerialType(integer $SerialType) 设置是否有流水码 0:无 1:有
 */
class CreateCodePackRequest extends AbstractModel
{
    /**
     * @var string 商户ID
     */
    public $MerchantId;

    /**
     * @var integer 码长度
     */
    public $CodeLength;

    /**
     * @var string 码类型 alphabet 字母, number 数字, mixin 混合
     */
    public $CodeType;

    /**
     * @var integer 生码数量 普通码包时必填
     */
    public $Amount;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var integer 码包类型 0: 普通码包 1: 层级码包
     */
    public $PackType;

    /**
     * @var integer 码包层级
     */
    public $PackLevel;

    /**
     * @var array 码包规格
     */
    public $PackSpec;

    /**
     * @var string 批次ID，如果传了生码后会同时绑定批次，并激活码
     */
    public $BatchId;

    /**
     * @var integer 是否有流水码 0:无 1:有
     */
    public $SerialType;

    /**
     * @param string $MerchantId 商户ID
     * @param integer $CodeLength 码长度
     * @param string $CodeType 码类型 alphabet 字母, number 数字, mixin 混合
     * @param integer $Amount 生码数量 普通码包时必填
     * @param integer $CorpId 企业ID
     * @param integer $PackType 码包类型 0: 普通码包 1: 层级码包
     * @param integer $PackLevel 码包层级
     * @param array $PackSpec 码包规格
     * @param string $BatchId 批次ID，如果传了生码后会同时绑定批次，并激活码
     * @param integer $SerialType 是否有流水码 0:无 1:有
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
        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("CodeLength",$param) and $param["CodeLength"] !== null) {
            $this->CodeLength = $param["CodeLength"];
        }

        if (array_key_exists("CodeType",$param) and $param["CodeType"] !== null) {
            $this->CodeType = $param["CodeType"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("PackType",$param) and $param["PackType"] !== null) {
            $this->PackType = $param["PackType"];
        }

        if (array_key_exists("PackLevel",$param) and $param["PackLevel"] !== null) {
            $this->PackLevel = $param["PackLevel"];
        }

        if (array_key_exists("PackSpec",$param) and $param["PackSpec"] !== null) {
            $this->PackSpec = [];
            foreach ($param["PackSpec"] as $key => $value){
                $obj = new PackSpec();
                $obj->deserialize($value);
                array_push($this->PackSpec, $obj);
            }
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("SerialType",$param) and $param["SerialType"] !== null) {
            $this->SerialType = $param["SerialType"];
        }
    }
}
