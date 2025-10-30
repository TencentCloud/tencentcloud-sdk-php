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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户信息
 *
 * @method string getCustomerName() 获取公司全称
 * @method void setCustomerName(string $CustomerName) 设置公司全称
 * @method string getShortCustomerName() 获取公司简称
 * @method void setShortCustomerName(string $ShortCustomerName) 设置公司简称
 * @method boolean getWholeFlag() 获取是否全托管用户
 * @method void setWholeFlag(boolean $WholeFlag) 设置是否全托管用户
 */
class CustomerInfo extends AbstractModel
{
    /**
     * @var string 公司全称
     */
    public $CustomerName;

    /**
     * @var string 公司简称
     */
    public $ShortCustomerName;

    /**
     * @var boolean 是否全托管用户
     */
    public $WholeFlag;

    /**
     * @param string $CustomerName 公司全称
     * @param string $ShortCustomerName 公司简称
     * @param boolean $WholeFlag 是否全托管用户
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
        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("ShortCustomerName",$param) and $param["ShortCustomerName"] !== null) {
            $this->ShortCustomerName = $param["ShortCustomerName"];
        }

        if (array_key_exists("WholeFlag",$param) and $param["WholeFlag"] !== null) {
            $this->WholeFlag = $param["WholeFlag"];
        }
    }
}
