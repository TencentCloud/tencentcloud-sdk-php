<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
 * 红票结果数据
 *
 * @method integer getCode() 获取红冲状态码
 * @method void setCode(integer $Code) 设置红冲状态码
 * @method string getMessage() 获取红冲状态消息
 * @method void setMessage(string $Message) 设置红冲状态消息
 * @method string getInvoiceId() 获取发票ID
 * @method void setInvoiceId(string $InvoiceId) 设置发票ID
 * @method string getOrderSn() 获取业务开票号
 * @method void setOrderSn(string $OrderSn) 设置业务开票号
 */
class CreateRedInvoiceResultData extends AbstractModel
{
    /**
     * @var integer 红冲状态码
     */
    public $Code;

    /**
     * @var string 红冲状态消息
     */
    public $Message;

    /**
     * @var string 发票ID
     */
    public $InvoiceId;

    /**
     * @var string 业务开票号
     */
    public $OrderSn;

    /**
     * @param integer $Code 红冲状态码
     * @param string $Message 红冲状态消息
     * @param string $InvoiceId 发票ID
     * @param string $OrderSn 业务开票号
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
        if (array_key_exists('Code',$param) and $param['Code'] !== null) {
            $this->Code = $param['Code'];
        }

        if (array_key_exists('Message',$param) and $param['Message'] !== null) {
            $this->Message = $param['Message'];
        }

        if (array_key_exists('InvoiceId',$param) and $param['InvoiceId'] !== null) {
            $this->InvoiceId = $param['InvoiceId'];
        }

        if (array_key_exists('OrderSn',$param) and $param['OrderSn'] !== null) {
            $this->OrderSn = $param['OrderSn'];
        }
    }
}
