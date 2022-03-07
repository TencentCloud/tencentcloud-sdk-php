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
 * 支行信息
 *
 * @method string getBankName() 获取银行名称。
 * @method void setBankName(string $BankName) 设置银行名称。
 * @method string getBankAbbreviation() 获取银行简称。
 * @method void setBankAbbreviation(string $BankAbbreviation) 设置银行简称。
 * @method string getBankBranchName() 获取支行名。
 * @method void setBankBranchName(string $BankBranchName) 设置支行名。
 * @method string getBankBranchId() 获取联行号。
 * @method void setBankBranchId(string $BankBranchId) 设置联行号。
 */
class BankBranchInfo extends AbstractModel
{
    /**
     * @var string 银行名称。
     */
    public $BankName;

    /**
     * @var string 银行简称。
     */
    public $BankAbbreviation;

    /**
     * @var string 支行名。
     */
    public $BankBranchName;

    /**
     * @var string 联行号。
     */
    public $BankBranchId;

    /**
     * @param string $BankName 银行名称。
     * @param string $BankAbbreviation 银行简称。
     * @param string $BankBranchName 支行名。
     * @param string $BankBranchId 联行号。
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
        if (array_key_exists("BankName",$param) and $param["BankName"] !== null) {
            $this->BankName = $param["BankName"];
        }

        if (array_key_exists("BankAbbreviation",$param) and $param["BankAbbreviation"] !== null) {
            $this->BankAbbreviation = $param["BankAbbreviation"];
        }

        if (array_key_exists("BankBranchName",$param) and $param["BankBranchName"] !== null) {
            $this->BankBranchName = $param["BankBranchName"];
        }

        if (array_key_exists("BankBranchId",$param) and $param["BankBranchId"] !== null) {
            $this->BankBranchId = $param["BankBranchId"];
        }
    }
}
