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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运单识别结果
 *
 * @method WaybillObj getRecName() 获取<p>收件人姓名</p>
 * @method void setRecName(WaybillObj $RecName) 设置<p>收件人姓名</p>
 * @method WaybillObj getRecNum() 获取<p>收件人手机号</p>
 * @method void setRecNum(WaybillObj $RecNum) 设置<p>收件人手机号</p>
 * @method WaybillObj getRecAddr() 获取<p>收件人地址</p>
 * @method void setRecAddr(WaybillObj $RecAddr) 设置<p>收件人地址</p>
 * @method WaybillObj getSenderName() 获取<p>寄件人姓名</p>
 * @method void setSenderName(WaybillObj $SenderName) 设置<p>寄件人姓名</p>
 * @method WaybillObj getSenderNum() 获取<p>寄件人手机号</p>
 * @method void setSenderNum(WaybillObj $SenderNum) 设置<p>寄件人手机号</p>
 * @method WaybillObj getSenderAddr() 获取<p>寄件人地址</p>
 * @method void setSenderAddr(WaybillObj $SenderAddr) 设置<p>寄件人地址</p>
 * @method WaybillObj getWaybillNum() 获取<p>运单号, 当同时存在 母 / 子 运单号时， 该字段为子运单号</p>
 * @method void setWaybillNum(WaybillObj $WaybillNum) 设置<p>运单号, 当同时存在 母 / 子 运单号时， 该字段为子运单号</p>
 * @method WaybillObj getMainWaybillNum() 获取<p>母运单号， 当不存在母运单号时， 该字段为不存在</p>
 * @method void setMainWaybillNum(WaybillObj $MainWaybillNum) 设置<p>母运单号， 当不存在母运单号时， 该字段为不存在</p>
 */
class TextWaybill extends AbstractModel
{
    /**
     * @var WaybillObj <p>收件人姓名</p>
     */
    public $RecName;

    /**
     * @var WaybillObj <p>收件人手机号</p>
     */
    public $RecNum;

    /**
     * @var WaybillObj <p>收件人地址</p>
     */
    public $RecAddr;

    /**
     * @var WaybillObj <p>寄件人姓名</p>
     */
    public $SenderName;

    /**
     * @var WaybillObj <p>寄件人手机号</p>
     */
    public $SenderNum;

    /**
     * @var WaybillObj <p>寄件人地址</p>
     */
    public $SenderAddr;

    /**
     * @var WaybillObj <p>运单号, 当同时存在 母 / 子 运单号时， 该字段为子运单号</p>
     */
    public $WaybillNum;

    /**
     * @var WaybillObj <p>母运单号， 当不存在母运单号时， 该字段为不存在</p>
     */
    public $MainWaybillNum;

    /**
     * @param WaybillObj $RecName <p>收件人姓名</p>
     * @param WaybillObj $RecNum <p>收件人手机号</p>
     * @param WaybillObj $RecAddr <p>收件人地址</p>
     * @param WaybillObj $SenderName <p>寄件人姓名</p>
     * @param WaybillObj $SenderNum <p>寄件人手机号</p>
     * @param WaybillObj $SenderAddr <p>寄件人地址</p>
     * @param WaybillObj $WaybillNum <p>运单号, 当同时存在 母 / 子 运单号时， 该字段为子运单号</p>
     * @param WaybillObj $MainWaybillNum <p>母运单号， 当不存在母运单号时， 该字段为不存在</p>
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
        if (array_key_exists("RecName",$param) and $param["RecName"] !== null) {
            $this->RecName = new WaybillObj();
            $this->RecName->deserialize($param["RecName"]);
        }

        if (array_key_exists("RecNum",$param) and $param["RecNum"] !== null) {
            $this->RecNum = new WaybillObj();
            $this->RecNum->deserialize($param["RecNum"]);
        }

        if (array_key_exists("RecAddr",$param) and $param["RecAddr"] !== null) {
            $this->RecAddr = new WaybillObj();
            $this->RecAddr->deserialize($param["RecAddr"]);
        }

        if (array_key_exists("SenderName",$param) and $param["SenderName"] !== null) {
            $this->SenderName = new WaybillObj();
            $this->SenderName->deserialize($param["SenderName"]);
        }

        if (array_key_exists("SenderNum",$param) and $param["SenderNum"] !== null) {
            $this->SenderNum = new WaybillObj();
            $this->SenderNum->deserialize($param["SenderNum"]);
        }

        if (array_key_exists("SenderAddr",$param) and $param["SenderAddr"] !== null) {
            $this->SenderAddr = new WaybillObj();
            $this->SenderAddr->deserialize($param["SenderAddr"]);
        }

        if (array_key_exists("WaybillNum",$param) and $param["WaybillNum"] !== null) {
            $this->WaybillNum = new WaybillObj();
            $this->WaybillNum->deserialize($param["WaybillNum"]);
        }

        if (array_key_exists("MainWaybillNum",$param) and $param["MainWaybillNum"] !== null) {
            $this->MainWaybillNum = new WaybillObj();
            $this->MainWaybillNum->deserialize($param["MainWaybillNum"]);
        }
    }
}
