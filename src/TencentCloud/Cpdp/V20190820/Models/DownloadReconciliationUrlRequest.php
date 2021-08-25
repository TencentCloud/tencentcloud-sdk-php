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
 * DownloadReconciliationUrl请求参数结构体
 *
 * @method string getMainAppId() 获取平台应用ID
 * @method void setMainAppId(string $MainAppId) 设置平台应用ID
 * @method string getAppCode() 获取平台代码
 * @method void setAppCode(string $AppCode) 设置平台代码
 * @method string getBillDate() 获取账单日期，yyyy-MM-dd
 * @method void setBillDate(string $BillDate) 设置账单日期，yyyy-MM-dd
 * @method string getSubAppId() 获取商户或者代理商ID
 * @method void setSubAppId(string $SubAppId) 设置商户或者代理商ID
 */
class DownloadReconciliationUrlRequest extends AbstractModel
{
    /**
     * @var string 平台应用ID
     */
    public $MainAppId;

    /**
     * @var string 平台代码
     */
    public $AppCode;

    /**
     * @var string 账单日期，yyyy-MM-dd
     */
    public $BillDate;

    /**
     * @var string 商户或者代理商ID
     */
    public $SubAppId;

    /**
     * @param string $MainAppId 平台应用ID
     * @param string $AppCode 平台代码
     * @param string $BillDate 账单日期，yyyy-MM-dd
     * @param string $SubAppId 商户或者代理商ID
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
        if (array_key_exists("MainAppId",$param) and $param["MainAppId"] !== null) {
            $this->MainAppId = $param["MainAppId"];
        }

        if (array_key_exists("AppCode",$param) and $param["AppCode"] !== null) {
            $this->AppCode = $param["AppCode"];
        }

        if (array_key_exists("BillDate",$param) and $param["BillDate"] !== null) {
            $this->BillDate = $param["BillDate"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
