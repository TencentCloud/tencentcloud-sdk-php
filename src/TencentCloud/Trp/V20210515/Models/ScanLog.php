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
 * 扫码明细
 *
 * @method integer getLogId() 获取行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogId(integer $LogId) 设置行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenid() 获取微信openid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenid(string $Openid) 设置微信openid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNickname() 获取微信昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickname(string $Nickname) 设置微信昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCode() 获取码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCorpId() 获取企业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpId(integer $CorpId) 设置企业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantId() 获取商户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantId(string $MerchantId) 设置商户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductId() 获取商品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置商品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCountry() 获取国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountry(string $Country) 设置国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvince() 获取省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(string $Province) 设置省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCity() 获取城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDistrict() 获取县/区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDistrict(string $District) 设置县/区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnionid() 获取微信 unionid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnionid(string $Unionid) 设置微信 unionid
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFirst() 获取首次扫码 0:否, 1:是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirst(integer $First) 设置首次扫码 0:否, 1:是
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBatchId() 获取批次ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchId(string $BatchId) 设置批次ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScanLog extends AbstractModel
{
    /**
     * @var integer 行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogId;

    /**
     * @var string 微信openid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Openid;

    /**
     * @var string 微信昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nickname;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var integer 企业ID
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var string ip地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string 国家
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Country;

    /**
     * @var string 省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Province;

    /**
     * @var string 城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var string 县/区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $District;

    /**
     * @var string 微信 unionid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unionid;

    /**
     * @var integer 首次扫码 0:否, 1:是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $First;

    /**
     * @var string 批次ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchId;

    /**
     * @param integer $LogId 行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Openid 微信openid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nickname 微信昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Code 码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CorpId 企业ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantId 商户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductId 商品ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip ip地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Country 国家
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Province 省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $City 城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $District 县/区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unionid 微信 unionid
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $First 首次扫码 0:否, 1:是
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BatchId 批次ID
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

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
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

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
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

        if (array_key_exists("Unionid",$param) and $param["Unionid"] !== null) {
            $this->Unionid = $param["Unionid"];
        }

        if (array_key_exists("First",$param) and $param["First"] !== null) {
            $this->First = $param["First"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }
    }
}
