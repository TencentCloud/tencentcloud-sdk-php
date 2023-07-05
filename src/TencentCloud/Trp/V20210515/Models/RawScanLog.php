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
 * 原始扫码日志
 *
 * @method integer getLogId() 获取日志ID
 * @method void setLogId(integer $LogId) 设置日志ID
 * @method string getOpenid() 获取微信小程序openid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenid(string $Openid) 设置微信小程序openid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取扫码时间
 * @method void setCreateTime(string $CreateTime) 设置扫码时间
 * @method string getCode() 获取溯源码
 * @method void setCode(string $Code) 设置溯源码
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method string getMerchantId() 获取商户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantId(string $MerchantId) 设置商户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductId() 获取商品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置商品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBatchId() 获取批次ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchId(string $BatchId) 设置批次ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvince() 获取省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(string $Province) 设置省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCity() 获取地市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置地市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDistrict() 获取区/县
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDistrict(string $District) 设置区/县
注意：此字段可能返回 null，表示取不到有效值。
 */
class RawScanLog extends AbstractModel
{
    /**
     * @var integer 日志ID
     */
    public $LogId;

    /**
     * @var string 微信小程序openid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Openid;

    /**
     * @var string 扫码时间
     */
    public $CreateTime;

    /**
     * @var string 溯源码
     */
    public $Code;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var string 商户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantId;

    /**
     * @var string 商品ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var string 批次ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchId;

    /**
     * @var string 省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Province;

    /**
     * @var string 地市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var string 区/县
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $District;

    /**
     * @param integer $LogId 日志ID
     * @param string $Openid 微信小程序openid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 扫码时间
     * @param string $Code 溯源码
     * @param integer $CorpId 企业ID
     * @param string $MerchantId 商户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductId 商品ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BatchId 批次ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Province 省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $City 地市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $District 区/县
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("Openid",$param) and $param["Openid"] !== null) {
            $this->Openid = $param["Openid"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }
    }
}
