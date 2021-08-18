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
 * CreateBatchPayment请求参数结构体
 *
 * @method integer getTransferType() 获取1 微信企业付款 
2 支付宝转账 
3 平安银企直连代发转账
 * @method void setTransferType(integer $TransferType) 设置1 微信企业付款 
2 支付宝转账 
3 平安银企直连代发转账
 * @method array getRecipientList() 获取转账详情
 * @method void setRecipientList(array $RecipientList) 设置转账详情
 * @method string getReqReserved() 获取请求预留字段
 * @method void setReqReserved(string $ReqReserved) 设置请求预留字段
 * @method string getNotifyUrl() 获取回调Url
 * @method void setNotifyUrl(string $NotifyUrl) 设置回调Url
 */
class CreateBatchPaymentRequest extends AbstractModel
{
    /**
     * @var integer 1 微信企业付款 
2 支付宝转账 
3 平安银企直连代发转账
     */
    public $TransferType;

    /**
     * @var array 转账详情
     */
    public $RecipientList;

    /**
     * @var string 请求预留字段
     */
    public $ReqReserved;

    /**
     * @var string 回调Url
     */
    public $NotifyUrl;

    /**
     * @param integer $TransferType 1 微信企业付款 
2 支付宝转账 
3 平安银企直连代发转账
     * @param array $RecipientList 转账详情
     * @param string $ReqReserved 请求预留字段
     * @param string $NotifyUrl 回调Url
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

        if (array_key_exists("RecipientList",$param) and $param["RecipientList"] !== null) {
            $this->RecipientList = [];
            foreach ($param["RecipientList"] as $key => $value){
                $obj = new CreateBatchPaymentRecipient();
                $obj->deserialize($value);
                array_push($this->RecipientList, $obj);
            }
        }

        if (array_key_exists("ReqReserved",$param) and $param["ReqReserved"] !== null) {
            $this->ReqReserved = $param["ReqReserved"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }
    }
}
