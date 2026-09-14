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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检索计费信息
 *
 * @method array getBillingTagList() 获取<p>计费标签列表</p>
 * @method void setBillingTagList(array $BillingTagList) 设置<p>计费标签列表</p>
 * @method string getFinanceSubBusinessType() 获取<p>计费子业务类型</p>
 * @method void setFinanceSubBusinessType(string $FinanceSubBusinessType) 设置<p>计费子业务类型</p>
 */
class SearchBilling extends AbstractModel
{
    /**
     * @var array <p>计费标签列表</p>
     */
    public $BillingTagList;

    /**
     * @var string <p>计费子业务类型</p>
     */
    public $FinanceSubBusinessType;

    /**
     * @param array $BillingTagList <p>计费标签列表</p>
     * @param string $FinanceSubBusinessType <p>计费子业务类型</p>
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
        if (array_key_exists("BillingTagList",$param) and $param["BillingTagList"] !== null) {
            $this->BillingTagList = [];
            foreach ($param["BillingTagList"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->BillingTagList, $obj);
            }
        }

        if (array_key_exists("FinanceSubBusinessType",$param) and $param["FinanceSubBusinessType"] !== null) {
            $this->FinanceSubBusinessType = $param["FinanceSubBusinessType"];
        }
    }
}
