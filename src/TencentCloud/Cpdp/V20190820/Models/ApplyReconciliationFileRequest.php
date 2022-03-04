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
 * ApplyReconciliationFile请求参数结构体
 *
 * @method string getApplyFileType() 获取申请的文件类型。
__CZ__：充值文件
__TX__：提现文件
__JY__：交易文件
__YE__：余额文件
 * @method void setApplyFileType(string $ApplyFileType) 设置申请的文件类型。
__CZ__：充值文件
__TX__：提现文件
__JY__：交易文件
__YE__：余额文件
 * @method string getApplyFileDate() 获取申请的对账文件日期，格式：yyyyMMdd。
 * @method void setApplyFileDate(string $ApplyFileDate) 设置申请的对账文件日期，格式：yyyyMMdd。
 * @method string getBankAccountNumber() 获取父账户账号。
_平安渠道为资金汇总账号_
 * @method void setBankAccountNumber(string $BankAccountNumber) 设置父账户账号。
_平安渠道为资金汇总账号_
 * @method string getMidasEnvironment() 获取环境名。
__release__: 现网环境
__sandbox__: 沙箱环境
__development__: 开发环境
_缺省: release_
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境名。
__release__: 现网环境
__sandbox__: 沙箱环境
__development__: 开发环境
_缺省: release_
 */
class ApplyReconciliationFileRequest extends AbstractModel
{
    /**
     * @var string 申请的文件类型。
__CZ__：充值文件
__TX__：提现文件
__JY__：交易文件
__YE__：余额文件
     */
    public $ApplyFileType;

    /**
     * @var string 申请的对账文件日期，格式：yyyyMMdd。
     */
    public $ApplyFileDate;

    /**
     * @var string 父账户账号。
_平安渠道为资金汇总账号_
     */
    public $BankAccountNumber;

    /**
     * @var string 环境名。
__release__: 现网环境
__sandbox__: 沙箱环境
__development__: 开发环境
_缺省: release_
     */
    public $MidasEnvironment;

    /**
     * @param string $ApplyFileType 申请的文件类型。
__CZ__：充值文件
__TX__：提现文件
__JY__：交易文件
__YE__：余额文件
     * @param string $ApplyFileDate 申请的对账文件日期，格式：yyyyMMdd。
     * @param string $BankAccountNumber 父账户账号。
_平安渠道为资金汇总账号_
     * @param string $MidasEnvironment 环境名。
__release__: 现网环境
__sandbox__: 沙箱环境
__development__: 开发环境
_缺省: release_
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
        if (array_key_exists("ApplyFileType",$param) and $param["ApplyFileType"] !== null) {
            $this->ApplyFileType = $param["ApplyFileType"];
        }

        if (array_key_exists("ApplyFileDate",$param) and $param["ApplyFileDate"] !== null) {
            $this->ApplyFileDate = $param["ApplyFileDate"];
        }

        if (array_key_exists("BankAccountNumber",$param) and $param["BankAccountNumber"] !== null) {
            $this->BankAccountNumber = $param["BankAccountNumber"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }
    }
}
