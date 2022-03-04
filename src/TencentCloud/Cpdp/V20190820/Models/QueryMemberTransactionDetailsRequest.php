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
 * QueryMemberTransactionDetails请求参数结构体
 *
 * @method string getQueryDateType() 获取查询的交易发生时间类型。
__1__：当日
__2__：历史
 * @method void setQueryDateType(string $QueryDateType) 设置查询的交易发生时间类型。
__1__：当日
__2__：历史
 * @method string getQueryTranType() 获取查询的交易类型。
__1__：全部
__2__：转出
__3__：转入
 * @method void setQueryTranType(string $QueryTranType) 设置查询的交易类型。
__1__：全部
__2__：转出
__3__：转入
 * @method string getBankAccountNumber() 获取父账户账号。
_平安渠道为资金汇总账号_
 * @method void setBankAccountNumber(string $BankAccountNumber) 设置父账户账号。
_平安渠道为资金汇总账号_
 * @method string getSubAccountNumber() 获取子账户账号。
_平安渠道为见证子账户的账号_
 * @method void setSubAccountNumber(string $SubAccountNumber) 设置子账户账号。
_平安渠道为见证子账户的账号_
 * @method string getPageOffSet() 获取分页号, 起始值为1。
 * @method void setPageOffSet(string $PageOffSet) 设置分页号, 起始值为1。
 * @method string getQueryStartDate() 获取查询开始日期，格式：yyyyMMdd。
__若是历史查询，则必输，当日查询时，不起作用；开始日期不能超过当前日期__
 * @method void setQueryStartDate(string $QueryStartDate) 设置查询开始日期，格式：yyyyMMdd。
__若是历史查询，则必输，当日查询时，不起作用；开始日期不能超过当前日期__
 * @method string getQueryEndDate() 获取查询终止日期，格式：yyyyMMdd。
__若是历史查询，则必输，当日查询时，不起作用；终止日期不能超过当前日期__
 * @method void setQueryEndDate(string $QueryEndDate) 设置查询终止日期，格式：yyyyMMdd。
__若是历史查询，则必输，当日查询时，不起作用；终止日期不能超过当前日期__
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
class QueryMemberTransactionDetailsRequest extends AbstractModel
{
    /**
     * @var string 查询的交易发生时间类型。
__1__：当日
__2__：历史
     */
    public $QueryDateType;

    /**
     * @var string 查询的交易类型。
__1__：全部
__2__：转出
__3__：转入
     */
    public $QueryTranType;

    /**
     * @var string 父账户账号。
_平安渠道为资金汇总账号_
     */
    public $BankAccountNumber;

    /**
     * @var string 子账户账号。
_平安渠道为见证子账户的账号_
     */
    public $SubAccountNumber;

    /**
     * @var string 分页号, 起始值为1。
     */
    public $PageOffSet;

    /**
     * @var string 查询开始日期，格式：yyyyMMdd。
__若是历史查询，则必输，当日查询时，不起作用；开始日期不能超过当前日期__
     */
    public $QueryStartDate;

    /**
     * @var string 查询终止日期，格式：yyyyMMdd。
__若是历史查询，则必输，当日查询时，不起作用；终止日期不能超过当前日期__
     */
    public $QueryEndDate;

    /**
     * @var string 环境名。
__release__: 现网环境
__sandbox__: 沙箱环境
__development__: 开发环境
_缺省: release_
     */
    public $MidasEnvironment;

    /**
     * @param string $QueryDateType 查询的交易发生时间类型。
__1__：当日
__2__：历史
     * @param string $QueryTranType 查询的交易类型。
__1__：全部
__2__：转出
__3__：转入
     * @param string $BankAccountNumber 父账户账号。
_平安渠道为资金汇总账号_
     * @param string $SubAccountNumber 子账户账号。
_平安渠道为见证子账户的账号_
     * @param string $PageOffSet 分页号, 起始值为1。
     * @param string $QueryStartDate 查询开始日期，格式：yyyyMMdd。
__若是历史查询，则必输，当日查询时，不起作用；开始日期不能超过当前日期__
     * @param string $QueryEndDate 查询终止日期，格式：yyyyMMdd。
__若是历史查询，则必输，当日查询时，不起作用；终止日期不能超过当前日期__
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
        if (array_key_exists("QueryDateType",$param) and $param["QueryDateType"] !== null) {
            $this->QueryDateType = $param["QueryDateType"];
        }

        if (array_key_exists("QueryTranType",$param) and $param["QueryTranType"] !== null) {
            $this->QueryTranType = $param["QueryTranType"];
        }

        if (array_key_exists("BankAccountNumber",$param) and $param["BankAccountNumber"] !== null) {
            $this->BankAccountNumber = $param["BankAccountNumber"];
        }

        if (array_key_exists("SubAccountNumber",$param) and $param["SubAccountNumber"] !== null) {
            $this->SubAccountNumber = $param["SubAccountNumber"];
        }

        if (array_key_exists("PageOffSet",$param) and $param["PageOffSet"] !== null) {
            $this->PageOffSet = $param["PageOffSet"];
        }

        if (array_key_exists("QueryStartDate",$param) and $param["QueryStartDate"] !== null) {
            $this->QueryStartDate = $param["QueryStartDate"];
        }

        if (array_key_exists("QueryEndDate",$param) and $param["QueryEndDate"] !== null) {
            $this->QueryEndDate = $param["QueryEndDate"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }
    }
}
