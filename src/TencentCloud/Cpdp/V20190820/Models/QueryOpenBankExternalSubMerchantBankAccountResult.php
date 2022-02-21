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
 * 第三方子商户银行卡列表查询返回结果
 *
 * @method array getAccountList() 获取第三方渠道子商户查询银行账户返回。
 * @method void setAccountList(array $AccountList) 设置第三方渠道子商户查询银行账户返回。
 */
class QueryOpenBankExternalSubMerchantBankAccountResult extends AbstractModel
{
    /**
     * @var array 第三方渠道子商户查询银行账户返回。
     */
    public $AccountList;

    /**
     * @param array $AccountList 第三方渠道子商户查询银行账户返回。
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
        if (array_key_exists("AccountList",$param) and $param["AccountList"] !== null) {
            $this->AccountList = [];
            foreach ($param["AccountList"] as $key => $value){
                $obj = new QueryOpenBankExternalSubMerchantBankAccountData();
                $obj->deserialize($value);
                array_push($this->AccountList, $obj);
            }
        }
    }
}
