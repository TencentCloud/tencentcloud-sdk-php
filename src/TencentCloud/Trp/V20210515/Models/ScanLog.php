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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫码明细
 *
 * @method integer getLogId() 获取行ID
 * @method void setLogId(integer $LogId) 设置行ID
 * @method string getOpenid() 获取微信openid
 * @method void setOpenid(string $Openid) 设置微信openid
 * @method string getNickname() 获取微信昵称
 * @method void setNickname(string $Nickname) 设置微信昵称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getCode() 获取码
 * @method void setCode(string $Code) 设置码
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method string getMerchantId() 获取商户ID
 * @method void setMerchantId(string $MerchantId) 设置商户ID
 * @method string getProductId() 获取商品ID
 * @method void setProductId(string $ProductId) 设置商品ID
 * @method string getIp() 获取ip地址
 * @method void setIp(string $Ip) 设置ip地址
 * @method string getCountry() 获取国家
 * @method void setCountry(string $Country) 设置国家
 * @method string getProvince() 获取省份
 * @method void setProvince(string $Province) 设置省份
 * @method string getCity() 获取城市
 * @method void setCity(string $City) 设置城市
 * @method string getDistrict() 获取县/区
 * @method void setDistrict(string $District) 设置县/区
 * @method string getUnionid() 获取微信 unionid
 * @method void setUnionid(string $Unionid) 设置微信 unionid
 * @method integer getFirst() 获取首次扫码 0:否, 1:是
 * @method void setFirst(integer $First) 设置首次扫码 0:否, 1:是
 * @method string getBatchId() 获取批次ID
 * @method void setBatchId(string $BatchId) 设置批次ID
 * @method integer getType() 获取扫码类型 0:无效扫码 1: 小程序扫码 2: 商家扫码
 * @method void setType(integer $Type) 设置扫码类型 0:无效扫码 1: 小程序扫码 2: 商家扫码
 * @method string getMerchantName() 获取商户名称
 * @method void setMerchantName(string $MerchantName) 设置商户名称
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getProductLogo() 获取产品Logo
 * @method void setProductLogo(string $ProductLogo) 设置产品Logo
 * @method integer getStatus() 获取风险状态
0: 未知, 1:通过, 2:失败/风险, 3:存疑
 * @method void setStatus(integer $Status) 设置风险状态
0: 未知, 1:通过, 2:失败/风险, 3:存疑
 * @method integer getVerify() 获取是否开启验证
0:否, 1:是
 * @method void setVerify(integer $Verify) 设置是否开启验证
0:否, 1:是
 */
class ScanLog extends AbstractModel
{
    /**
     * @var integer 行ID
     */
    public $LogId;

    /**
     * @var string 微信openid
     */
    public $Openid;

    /**
     * @var string 微信昵称
     */
    public $Nickname;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 码
     */
    public $Code;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var string 商户ID
     */
    public $MerchantId;

    /**
     * @var string 商品ID
     */
    public $ProductId;

    /**
     * @var string ip地址
     */
    public $Ip;

    /**
     * @var string 国家
     */
    public $Country;

    /**
     * @var string 省份
     */
    public $Province;

    /**
     * @var string 城市
     */
    public $City;

    /**
     * @var string 县/区
     */
    public $District;

    /**
     * @var string 微信 unionid
     */
    public $Unionid;

    /**
     * @var integer 首次扫码 0:否, 1:是
     */
    public $First;

    /**
     * @var string 批次ID
     */
    public $BatchId;

    /**
     * @var integer 扫码类型 0:无效扫码 1: 小程序扫码 2: 商家扫码
     */
    public $Type;

    /**
     * @var string 商户名称
     */
    public $MerchantName;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 产品Logo
     */
    public $ProductLogo;

    /**
     * @var integer 风险状态
0: 未知, 1:通过, 2:失败/风险, 3:存疑
     */
    public $Status;

    /**
     * @var integer 是否开启验证
0:否, 1:是
     */
    public $Verify;

    /**
     * @param integer $LogId 行ID
     * @param string $Openid 微信openid
     * @param string $Nickname 微信昵称
     * @param string $CreateTime 创建时间
     * @param string $Code 码
     * @param integer $CorpId 企业ID
     * @param string $MerchantId 商户ID
     * @param string $ProductId 商品ID
     * @param string $Ip ip地址
     * @param string $Country 国家
     * @param string $Province 省份
     * @param string $City 城市
     * @param string $District 县/区
     * @param string $Unionid 微信 unionid
     * @param integer $First 首次扫码 0:否, 1:是
     * @param string $BatchId 批次ID
     * @param integer $Type 扫码类型 0:无效扫码 1: 小程序扫码 2: 商家扫码
     * @param string $MerchantName 商户名称
     * @param string $ProductName 产品名称
     * @param string $ProductLogo 产品Logo
     * @param integer $Status 风险状态
0: 未知, 1:通过, 2:失败/风险, 3:存疑
     * @param integer $Verify 是否开启验证
0:否, 1:是
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductLogo",$param) and $param["ProductLogo"] !== null) {
            $this->ProductLogo = $param["ProductLogo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Verify",$param) and $param["Verify"] !== null) {
            $this->Verify = $param["Verify"];
        }
    }
}
