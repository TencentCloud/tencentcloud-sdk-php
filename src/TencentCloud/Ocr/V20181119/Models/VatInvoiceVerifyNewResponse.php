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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VatInvoiceVerifyNew返回参数结构体
 *
 * @method VatInvoice getInvoice() 获取增值税发票信息，详情请点击左侧链接。
 * @method void setInvoice(VatInvoice $Invoice) 设置增值税发票信息，详情请点击左侧链接。
 * @method VehicleInvoiceInfo getVehicleInvoiceInfo() 获取机动车销售统一发票信息
 * @method void setVehicleInvoiceInfo(VehicleInvoiceInfo $VehicleInvoiceInfo) 设置机动车销售统一发票信息
 * @method UsedVehicleInvoiceInfo getUsedVehicleInvoiceInfo() 获取二手车销售统一发票信息
 * @method void setUsedVehicleInvoiceInfo(UsedVehicleInvoiceInfo $UsedVehicleInvoiceInfo) 设置二手车销售统一发票信息
 * @method array getPassInvoiceInfoList() 获取通行费发票信息
 * @method void setPassInvoiceInfoList(array $PassInvoiceInfoList) 设置通行费发票信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class VatInvoiceVerifyNewResponse extends AbstractModel
{
    /**
     * @var VatInvoice 增值税发票信息，详情请点击左侧链接。
     */
    public $Invoice;

    /**
     * @var VehicleInvoiceInfo 机动车销售统一发票信息
     */
    public $VehicleInvoiceInfo;

    /**
     * @var UsedVehicleInvoiceInfo 二手车销售统一发票信息
     */
    public $UsedVehicleInvoiceInfo;

    /**
     * @var array 通行费发票信息
     */
    public $PassInvoiceInfoList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param VatInvoice $Invoice 增值税发票信息，详情请点击左侧链接。
     * @param VehicleInvoiceInfo $VehicleInvoiceInfo 机动车销售统一发票信息
     * @param UsedVehicleInvoiceInfo $UsedVehicleInvoiceInfo 二手车销售统一发票信息
     * @param array $PassInvoiceInfoList 通行费发票信息
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Invoice",$param) and $param["Invoice"] !== null) {
            $this->Invoice = new VatInvoice();
            $this->Invoice->deserialize($param["Invoice"]);
        }

        if (array_key_exists("VehicleInvoiceInfo",$param) and $param["VehicleInvoiceInfo"] !== null) {
            $this->VehicleInvoiceInfo = new VehicleInvoiceInfo();
            $this->VehicleInvoiceInfo->deserialize($param["VehicleInvoiceInfo"]);
        }

        if (array_key_exists("UsedVehicleInvoiceInfo",$param) and $param["UsedVehicleInvoiceInfo"] !== null) {
            $this->UsedVehicleInvoiceInfo = new UsedVehicleInvoiceInfo();
            $this->UsedVehicleInvoiceInfo->deserialize($param["UsedVehicleInvoiceInfo"]);
        }

        if (array_key_exists("PassInvoiceInfoList",$param) and $param["PassInvoiceInfoList"] !== null) {
            $this->PassInvoiceInfoList = [];
            foreach ($param["PassInvoiceInfoList"] as $key => $value){
                $obj = new PassInvoiceInfo();
                $obj->deserialize($value);
                array_push($this->PassInvoiceInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
