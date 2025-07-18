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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSinglePayment请求参数结构体
 *
 * @method integer getTransferType() 获取转账类型
1 微信企业付款 
2 支付宝转账 
3 平安银企直连代发转账
 * @method void setTransferType(integer $TransferType) 设置转账类型
1 微信企业付款 
2 支付宝转账 
3 平安银企直连代发转账
 * @method string getOrderId() 获取订单流水号
 * @method void setOrderId(string $OrderId) 设置订单流水号
 * @method integer getTransferAmount() 获取转账金额
 * @method void setTransferAmount(integer $TransferAmount) 设置转账金额
 * @method string getAnchorId() 获取主播ID（与主播业务ID不能同时为空，两者都填取主播ID）
 * @method void setAnchorId(string $AnchorId) 设置主播ID（与主播业务ID不能同时为空，两者都填取主播ID）
 * @method string getReqReserved() 获取请求预留字段，原样透传返回
 * @method void setReqReserved(string $ReqReserved) 设置请求预留字段，原样透传返回
 * @method string getRemark() 获取业务备注
 * @method void setRemark(string $Remark) 设置业务备注
 * @method string getAnchorName() 获取主播名称。如果该字段填入，则会对AnchorName和AnchorId/Uid进行校验。
 * @method void setAnchorName(string $AnchorName) 设置主播名称。如果该字段填入，则会对AnchorName和AnchorId/Uid进行校验。
 * @method string getUid() 获取主播业务ID（与主播ID不能同时为空，两者都填取主播ID）
 * @method void setUid(string $Uid) 设置主播业务ID（与主播ID不能同时为空，两者都填取主播ID）
 * @method string getNotifyUrl() 获取转账结果回调通知URL。若不填，则不进行回调。
 * @method void setNotifyUrl(string $NotifyUrl) 设置转账结果回调通知URL。若不填，则不进行回调。
 */
class CreateSinglePaymentRequest extends AbstractModel
{
    /**
     * @var integer 转账类型
1 微信企业付款 
2 支付宝转账 
3 平安银企直连代发转账
     */
    public $TransferType;

    /**
     * @var string 订单流水号
     */
    public $OrderId;

    /**
     * @var integer 转账金额
     */
    public $TransferAmount;

    /**
     * @var string 主播ID（与主播业务ID不能同时为空，两者都填取主播ID）
     */
    public $AnchorId;

    /**
     * @var string 请求预留字段，原样透传返回
     */
    public $ReqReserved;

    /**
     * @var string 业务备注
     */
    public $Remark;

    /**
     * @var string 主播名称。如果该字段填入，则会对AnchorName和AnchorId/Uid进行校验。
     */
    public $AnchorName;

    /**
     * @var string 主播业务ID（与主播ID不能同时为空，两者都填取主播ID）
     */
    public $Uid;

    /**
     * @var string 转账结果回调通知URL。若不填，则不进行回调。
     */
    public $NotifyUrl;

    /**
     * @param integer $TransferType 转账类型
1 微信企业付款 
2 支付宝转账 
3 平安银企直连代发转账
     * @param string $OrderId 订单流水号
     * @param integer $TransferAmount 转账金额
     * @param string $AnchorId 主播ID（与主播业务ID不能同时为空，两者都填取主播ID）
     * @param string $ReqReserved 请求预留字段，原样透传返回
     * @param string $Remark 业务备注
     * @param string $AnchorName 主播名称。如果该字段填入，则会对AnchorName和AnchorId/Uid进行校验。
     * @param string $Uid 主播业务ID（与主播ID不能同时为空，两者都填取主播ID）
     * @param string $NotifyUrl 转账结果回调通知URL。若不填，则不进行回调。
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
        if (array_key_exists("TransferType",$param) and $param["TransferType"] !== null) {
            $this->TransferType = $param["TransferType"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("TransferAmount",$param) and $param["TransferAmount"] !== null) {
            $this->TransferAmount = $param["TransferAmount"];
        }

        if (array_key_exists("AnchorId",$param) and $param["AnchorId"] !== null) {
            $this->AnchorId = $param["AnchorId"];
        }

        if (array_key_exists("ReqReserved",$param) and $param["ReqReserved"] !== null) {
            $this->ReqReserved = $param["ReqReserved"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AnchorName",$param) and $param["AnchorName"] !== null) {
            $this->AnchorName = $param["AnchorName"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }
    }
}
