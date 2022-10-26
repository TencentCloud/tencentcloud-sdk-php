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
 * 子订单对象
 *
 * @method string getSubOutTradeNo() 获取子订单号。
长度32个字符供参考，部分渠道存在长度更短的情况接入时请联系开发咨询。
 * @method void setSubOutTradeNo(string $SubOutTradeNo) 设置子订单号。
长度32个字符供参考，部分渠道存在长度更短的情况接入时请联系开发咨询。
 * @method string getSubAppId() 获取支付子商户ID。
米大师计费SubAppId，代表子商户。
 * @method void setSubAppId(string $SubAppId) 设置支付子商户ID。
米大师计费SubAppId，代表子商户。
 * @method string getProductName() 获取商品名称。
业务自定义的子订单商品名称，无需URL编码，长度限制以具体所接入渠道为准。
 * @method void setProductName(string $ProductName) 设置商品名称。
业务自定义的子订单商品名称，无需URL编码，长度限制以具体所接入渠道为准。
 * @method string getProductDetail() 获取商品详情。
业务自定义的子订单商品详情，无需URL编码，长度限制以具体所接入渠道为准。
 * @method void setProductDetail(string $ProductDetail) 设置商品详情。
业务自定义的子订单商品详情，无需URL编码，长度限制以具体所接入渠道为准。
 * @method integer getPlatformIncome() 获取平台应收。
子订单平台应收金额，单位：分，需要注意的是Amt = PlatformIncome+SubMchIncome。
 * @method void setPlatformIncome(integer $PlatformIncome) 设置平台应收。
子订单平台应收金额，单位：分，需要注意的是Amt = PlatformIncome+SubMchIncome。
 * @method integer getSubMchIncome() 获取商户应收。
子订单结算应收金额，单位：分，需要注意的是Amt = PlatformIncome+SubMchIncome。
 * @method void setSubMchIncome(integer $SubMchIncome) 设置商户应收。
子订单结算应收金额，单位：分，需要注意的是Amt = PlatformIncome+SubMchIncome。
 * @method string getMetadata() 获取透传字段。
发货标识，由开发者在调用米大师下单接口的 时候下发。
 * @method void setMetadata(string $Metadata) 设置透传字段。
发货标识，由开发者在调用米大师下单接口的 时候下发。
 * @method integer getAmt() 获取支付金额。
子订单支付金额，需要注意的是Amt = PlatformIncome+SubMchIncome。
 * @method void setAmt(integer $Amt) 设置支付金额。
子订单支付金额，需要注意的是Amt = PlatformIncome+SubMchIncome。
 * @method integer getOriginalAmt() 获取原始金额。
子订单原始金额，OriginalAmt>=Amt。
 * @method void setOriginalAmt(integer $OriginalAmt) 设置原始金额。
子订单原始金额，OriginalAmt>=Amt。
 * @method string getWxSubMchId() 获取微信子商户号。
 * @method void setWxSubMchId(string $WxSubMchId) 设置微信子商户号。
 * @method CloudSettleInfo getSettleInfo() 获取结算信息。
例如是否需要分账、是否需要支付确认等。
 * @method void setSettleInfo(CloudSettleInfo $SettleInfo) 设置结算信息。
例如是否需要分账、是否需要支付确认等。
 * @method array getAttachmentInfoList() 获取附加项信息列表。
例如溢价信息、抵扣信息、积分信息、补贴信息
通过该字段可以实现渠道方的优惠抵扣补贴等营销功能。
 * @method void setAttachmentInfoList(array $AttachmentInfoList) 设置附加项信息列表。
例如溢价信息、抵扣信息、积分信息、补贴信息
通过该字段可以实现渠道方的优惠抵扣补贴等营销功能。
 * @method array getExternalAttachmentDataList() 获取渠道透传数据列表。
 * @method void setExternalAttachmentDataList(array $ExternalAttachmentDataList) 设置渠道透传数据列表。
 */
class CloudSubOrder extends AbstractModel
{
    /**
     * @var string 子订单号。
长度32个字符供参考，部分渠道存在长度更短的情况接入时请联系开发咨询。
     */
    public $SubOutTradeNo;

    /**
     * @var string 支付子商户ID。
米大师计费SubAppId，代表子商户。
     */
    public $SubAppId;

    /**
     * @var string 商品名称。
业务自定义的子订单商品名称，无需URL编码，长度限制以具体所接入渠道为准。
     */
    public $ProductName;

    /**
     * @var string 商品详情。
业务自定义的子订单商品详情，无需URL编码，长度限制以具体所接入渠道为准。
     */
    public $ProductDetail;

    /**
     * @var integer 平台应收。
子订单平台应收金额，单位：分，需要注意的是Amt = PlatformIncome+SubMchIncome。
     */
    public $PlatformIncome;

    /**
     * @var integer 商户应收。
子订单结算应收金额，单位：分，需要注意的是Amt = PlatformIncome+SubMchIncome。
     */
    public $SubMchIncome;

    /**
     * @var string 透传字段。
发货标识，由开发者在调用米大师下单接口的 时候下发。
     */
    public $Metadata;

    /**
     * @var integer 支付金额。
子订单支付金额，需要注意的是Amt = PlatformIncome+SubMchIncome。
     */
    public $Amt;

    /**
     * @var integer 原始金额。
子订单原始金额，OriginalAmt>=Amt。
     */
    public $OriginalAmt;

    /**
     * @var string 微信子商户号。
     */
    public $WxSubMchId;

    /**
     * @var CloudSettleInfo 结算信息。
例如是否需要分账、是否需要支付确认等。
     */
    public $SettleInfo;

    /**
     * @var array 附加项信息列表。
例如溢价信息、抵扣信息、积分信息、补贴信息
通过该字段可以实现渠道方的优惠抵扣补贴等营销功能。
     */
    public $AttachmentInfoList;

    /**
     * @var array 渠道透传数据列表。
     */
    public $ExternalAttachmentDataList;

    /**
     * @param string $SubOutTradeNo 子订单号。
长度32个字符供参考，部分渠道存在长度更短的情况接入时请联系开发咨询。
     * @param string $SubAppId 支付子商户ID。
米大师计费SubAppId，代表子商户。
     * @param string $ProductName 商品名称。
业务自定义的子订单商品名称，无需URL编码，长度限制以具体所接入渠道为准。
     * @param string $ProductDetail 商品详情。
业务自定义的子订单商品详情，无需URL编码，长度限制以具体所接入渠道为准。
     * @param integer $PlatformIncome 平台应收。
子订单平台应收金额，单位：分，需要注意的是Amt = PlatformIncome+SubMchIncome。
     * @param integer $SubMchIncome 商户应收。
子订单结算应收金额，单位：分，需要注意的是Amt = PlatformIncome+SubMchIncome。
     * @param string $Metadata 透传字段。
发货标识，由开发者在调用米大师下单接口的 时候下发。
     * @param integer $Amt 支付金额。
子订单支付金额，需要注意的是Amt = PlatformIncome+SubMchIncome。
     * @param integer $OriginalAmt 原始金额。
子订单原始金额，OriginalAmt>=Amt。
     * @param string $WxSubMchId 微信子商户号。
     * @param CloudSettleInfo $SettleInfo 结算信息。
例如是否需要分账、是否需要支付确认等。
     * @param array $AttachmentInfoList 附加项信息列表。
例如溢价信息、抵扣信息、积分信息、补贴信息
通过该字段可以实现渠道方的优惠抵扣补贴等营销功能。
     * @param array $ExternalAttachmentDataList 渠道透传数据列表。
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
        if (array_key_exists("SubOutTradeNo",$param) and $param["SubOutTradeNo"] !== null) {
            $this->SubOutTradeNo = $param["SubOutTradeNo"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductDetail",$param) and $param["ProductDetail"] !== null) {
            $this->ProductDetail = $param["ProductDetail"];
        }

        if (array_key_exists("PlatformIncome",$param) and $param["PlatformIncome"] !== null) {
            $this->PlatformIncome = $param["PlatformIncome"];
        }

        if (array_key_exists("SubMchIncome",$param) and $param["SubMchIncome"] !== null) {
            $this->SubMchIncome = $param["SubMchIncome"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("Amt",$param) and $param["Amt"] !== null) {
            $this->Amt = $param["Amt"];
        }

        if (array_key_exists("OriginalAmt",$param) and $param["OriginalAmt"] !== null) {
            $this->OriginalAmt = $param["OriginalAmt"];
        }

        if (array_key_exists("WxSubMchId",$param) and $param["WxSubMchId"] !== null) {
            $this->WxSubMchId = $param["WxSubMchId"];
        }

        if (array_key_exists("SettleInfo",$param) and $param["SettleInfo"] !== null) {
            $this->SettleInfo = new CloudSettleInfo();
            $this->SettleInfo->deserialize($param["SettleInfo"]);
        }

        if (array_key_exists("AttachmentInfoList",$param) and $param["AttachmentInfoList"] !== null) {
            $this->AttachmentInfoList = [];
            foreach ($param["AttachmentInfoList"] as $key => $value){
                $obj = new CloudAttachmentInfo();
                $obj->deserialize($value);
                array_push($this->AttachmentInfoList, $obj);
            }
        }

        if (array_key_exists("ExternalAttachmentDataList",$param) and $param["ExternalAttachmentDataList"] !== null) {
            $this->ExternalAttachmentDataList = [];
            foreach ($param["ExternalAttachmentDataList"] as $key => $value){
                $obj = new CloudExternalAttachmentData();
                $obj->deserialize($value);
                array_push($this->ExternalAttachmentDataList, $obj);
            }
        }
    }
}
