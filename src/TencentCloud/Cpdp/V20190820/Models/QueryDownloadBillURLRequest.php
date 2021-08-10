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
 * QueryDownloadBillURL请求参数结构体
 *
 * @method string getMerchantAppId() 获取分配给商户的AppId。进件成功后返给商户方的AppId。
 * @method void setMerchantAppId(string $MerchantAppId) 设置分配给商户的AppId。进件成功后返给商户方的AppId。
 * @method string getChannelCode() 获取渠道编号。固定值：ZSB2B
 * @method void setChannelCode(string $ChannelCode) 设置渠道编号。固定值：ZSB2B
 * @method string getBillDate() 获取对账单日期，格式yyyyMMdd
 * @method void setBillDate(string $BillDate) 设置对账单日期，格式yyyyMMdd
 */
class QueryDownloadBillURLRequest extends AbstractModel
{
    /**
     * @var string 分配给商户的AppId。进件成功后返给商户方的AppId。
     */
    public $MerchantAppId;

    /**
     * @var string 渠道编号。固定值：ZSB2B
     */
    public $ChannelCode;

    /**
     * @var string 对账单日期，格式yyyyMMdd
     */
    public $BillDate;

    /**
     * @param string $MerchantAppId 分配给商户的AppId。进件成功后返给商户方的AppId。
     * @param string $ChannelCode 渠道编号。固定值：ZSB2B
     * @param string $BillDate 对账单日期，格式yyyyMMdd
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
        if (array_key_exists("MerchantAppId",$param) and $param["MerchantAppId"] !== null) {
            $this->MerchantAppId = $param["MerchantAppId"];
        }

        if (array_key_exists("ChannelCode",$param) and $param["ChannelCode"] !== null) {
            $this->ChannelCode = $param["ChannelCode"];
        }

        if (array_key_exists("BillDate",$param) and $param["BillDate"] !== null) {
            $this->BillDate = $param["BillDate"];
        }
    }
}
