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
namespace TencentCloud\Bma\V20221115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商标响应数据
 *
 * @method string getTrademark() 获取商标证明
 * @method void setTrademark(string $Trademark) 设置商标证明
 * @method integer getTrademarkStatus() 获取商标审核状态
 * @method void setTrademarkStatus(integer $TrademarkStatus) 设置商标审核状态
 * @method string getTrademarkNote() 获取商标审核状态说明
 * @method void setTrademarkNote(string $TrademarkNote) 设置商标审核状态说明
 * @method integer getTrademarkId() 获取商标id
 * @method void setTrademarkId(integer $TrademarkId) 设置商标id
 * @method string getTransfer() 获取商标转让书
 * @method void setTransfer(string $Transfer) 设置商标转让书
 * @method integer getTransferStatus() 获取商标转让书审核状态
 * @method void setTransferStatus(integer $TransferStatus) 设置商标转让书审核状态
 * @method string getTransferNote() 获取商标转让书审核状态说明
 * @method void setTransferNote(string $TransferNote) 设置商标转让书审核状态说明
 * @method string getTrademarkName() 获取商标名称
 * @method void setTrademarkName(string $TrademarkName) 设置商标名称
 */
class TrademarkData extends AbstractModel
{
    /**
     * @var string 商标证明
     */
    public $Trademark;

    /**
     * @var integer 商标审核状态
     */
    public $TrademarkStatus;

    /**
     * @var string 商标审核状态说明
     */
    public $TrademarkNote;

    /**
     * @var integer 商标id
     */
    public $TrademarkId;

    /**
     * @var string 商标转让书
     */
    public $Transfer;

    /**
     * @var integer 商标转让书审核状态
     */
    public $TransferStatus;

    /**
     * @var string 商标转让书审核状态说明
     */
    public $TransferNote;

    /**
     * @var string 商标名称
     */
    public $TrademarkName;

    /**
     * @param string $Trademark 商标证明
     * @param integer $TrademarkStatus 商标审核状态
     * @param string $TrademarkNote 商标审核状态说明
     * @param integer $TrademarkId 商标id
     * @param string $Transfer 商标转让书
     * @param integer $TransferStatus 商标转让书审核状态
     * @param string $TransferNote 商标转让书审核状态说明
     * @param string $TrademarkName 商标名称
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
        if (array_key_exists("Trademark",$param) and $param["Trademark"] !== null) {
            $this->Trademark = $param["Trademark"];
        }

        if (array_key_exists("TrademarkStatus",$param) and $param["TrademarkStatus"] !== null) {
            $this->TrademarkStatus = $param["TrademarkStatus"];
        }

        if (array_key_exists("TrademarkNote",$param) and $param["TrademarkNote"] !== null) {
            $this->TrademarkNote = $param["TrademarkNote"];
        }

        if (array_key_exists("TrademarkId",$param) and $param["TrademarkId"] !== null) {
            $this->TrademarkId = $param["TrademarkId"];
        }

        if (array_key_exists("Transfer",$param) and $param["Transfer"] !== null) {
            $this->Transfer = $param["Transfer"];
        }

        if (array_key_exists("TransferStatus",$param) and $param["TransferStatus"] !== null) {
            $this->TransferStatus = $param["TransferStatus"];
        }

        if (array_key_exists("TransferNote",$param) and $param["TransferNote"] !== null) {
            $this->TransferNote = $param["TransferNote"];
        }

        if (array_key_exists("TrademarkName",$param) and $param["TrademarkName"] !== null) {
            $this->TrademarkName = $param["TrademarkName"];
        }
    }
}
