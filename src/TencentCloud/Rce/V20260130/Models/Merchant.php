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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商家信息
 *
 * @method string getMerchantId() 获取<p>商家ID</p>
 * @method void setMerchantId(string $MerchantId) 设置<p>商家ID</p>
 * @method string getName() 获取<p>商家名称</p>
 * @method void setName(string $Name) 设置<p>商家名称</p>
 * @method string getRegisterTime() 获取<p>商家的注册时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
 * @method void setRegisterTime(string $RegisterTime) 设置<p>商家的注册时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
 * @method string getCategory() 获取<p>商家类别代码</p><p>参数格式：符合ISO 18245标准的4位编号</p>
 * @method void setCategory(string $Category) 设置<p>商家类别代码</p><p>参数格式：符合ISO 18245标准的4位编号</p>
 * @method string getPhone() 获取<p>商家电话</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
 * @method void setPhone(string $Phone) 设置<p>商家电话</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
 * @method string getEmail() 获取<p>商家邮件</p>
 * @method void setEmail(string $Email) 设置<p>商家邮件</p>
 * @method string getURL() 获取<p>商家店铺网址</p>
 * @method void setURL(string $URL) 设置<p>商家店铺网址</p>
 * @method Address getAddress() 获取<p>商家地址</p>
 * @method void setAddress(Address $Address) 设置<p>商家地址</p>
 * @method string getLevel() 获取<p>商家等级</p>
 * @method void setLevel(string $Level) 设置<p>商家等级</p>
 * @method string getBusinessType() 获取<p>经营类型</p><p>枚举值：</p><ul><li>person： 个人</li><li>company： 企业</li></ul>
 * @method void setBusinessType(string $BusinessType) 设置<p>经营类型</p><p>枚举值：</p><ul><li>person： 个人</li><li>company： 企业</li></ul>
 * @method integer getGoodsQuantity() 获取<p>商家在售商品数量</p>
 * @method void setGoodsQuantity(integer $GoodsQuantity) 设置<p>商家在售商品数量</p>
 * @method integer getHistoricSalesQuantity() 获取<p>商家历史销售数量</p>
 * @method void setHistoricSalesQuantity(integer $HistoricSalesQuantity) 设置<p>商家历史销售数量</p>
 * @method Amount getHistoricSalesAmount() 获取<p>商家历史销售总额</p>
 * @method void setHistoricSalesAmount(Amount $HistoricSalesAmount) 设置<p>商家历史销售总额</p>
 */
class Merchant extends AbstractModel
{
    /**
     * @var string <p>商家ID</p>
     */
    public $MerchantId;

    /**
     * @var string <p>商家名称</p>
     */
    public $Name;

    /**
     * @var string <p>商家的注册时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
     */
    public $RegisterTime;

    /**
     * @var string <p>商家类别代码</p><p>参数格式：符合ISO 18245标准的4位编号</p>
     */
    public $Category;

    /**
     * @var string <p>商家电话</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
     */
    public $Phone;

    /**
     * @var string <p>商家邮件</p>
     */
    public $Email;

    /**
     * @var string <p>商家店铺网址</p>
     */
    public $URL;

    /**
     * @var Address <p>商家地址</p>
     */
    public $Address;

    /**
     * @var string <p>商家等级</p>
     */
    public $Level;

    /**
     * @var string <p>经营类型</p><p>枚举值：</p><ul><li>person： 个人</li><li>company： 企业</li></ul>
     */
    public $BusinessType;

    /**
     * @var integer <p>商家在售商品数量</p>
     */
    public $GoodsQuantity;

    /**
     * @var integer <p>商家历史销售数量</p>
     */
    public $HistoricSalesQuantity;

    /**
     * @var Amount <p>商家历史销售总额</p>
     */
    public $HistoricSalesAmount;

    /**
     * @param string $MerchantId <p>商家ID</p>
     * @param string $Name <p>商家名称</p>
     * @param string $RegisterTime <p>商家的注册时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
     * @param string $Category <p>商家类别代码</p><p>参数格式：符合ISO 18245标准的4位编号</p>
     * @param string $Phone <p>商家电话</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
     * @param string $Email <p>商家邮件</p>
     * @param string $URL <p>商家店铺网址</p>
     * @param Address $Address <p>商家地址</p>
     * @param string $Level <p>商家等级</p>
     * @param string $BusinessType <p>经营类型</p><p>枚举值：</p><ul><li>person： 个人</li><li>company： 企业</li></ul>
     * @param integer $GoodsQuantity <p>商家在售商品数量</p>
     * @param integer $HistoricSalesQuantity <p>商家历史销售数量</p>
     * @param Amount $HistoricSalesAmount <p>商家历史销售总额</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RegisterTime",$param) and $param["RegisterTime"] !== null) {
            $this->RegisterTime = $param["RegisterTime"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new Address();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("GoodsQuantity",$param) and $param["GoodsQuantity"] !== null) {
            $this->GoodsQuantity = $param["GoodsQuantity"];
        }

        if (array_key_exists("HistoricSalesQuantity",$param) and $param["HistoricSalesQuantity"] !== null) {
            $this->HistoricSalesQuantity = $param["HistoricSalesQuantity"];
        }

        if (array_key_exists("HistoricSalesAmount",$param) and $param["HistoricSalesAmount"] !== null) {
            $this->HistoricSalesAmount = new Amount();
            $this->HistoricSalesAmount->deserialize($param["HistoricSalesAmount"]);
        }
    }
}
