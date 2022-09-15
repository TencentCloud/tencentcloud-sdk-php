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
 * QueryFlexBillDownloadUrl请求参数结构体
 *
 * @method string getBillDate() 获取对账单日期
 * @method void setBillDate(string $BillDate) 设置对账单日期
 * @method string getBillType() 获取对账单类型：FREEZE, SETTLEMENT,PAYMENT
 * @method void setBillType(string $BillType) 设置对账单类型：FREEZE, SETTLEMENT,PAYMENT
 * @method string getServiceProviderId() 获取服务商ID，如不填则查询平台级别对账单文件
 * @method void setServiceProviderId(string $ServiceProviderId) 设置服务商ID，如不填则查询平台级别对账单文件
 * @method string getEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 * @method void setEnvironment(string $Environment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 */
class QueryFlexBillDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string 对账单日期
     */
    public $BillDate;

    /**
     * @var string 对账单类型：FREEZE, SETTLEMENT,PAYMENT
     */
    public $BillType;

    /**
     * @var string 服务商ID，如不填则查询平台级别对账单文件
     */
    public $ServiceProviderId;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
     */
    public $Environment;

    /**
     * @param string $BillDate 对账单日期
     * @param string $BillType 对账单类型：FREEZE, SETTLEMENT,PAYMENT
     * @param string $ServiceProviderId 服务商ID，如不填则查询平台级别对账单文件
     * @param string $Environment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
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
        if (array_key_exists("BillDate",$param) and $param["BillDate"] !== null) {
            $this->BillDate = $param["BillDate"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
