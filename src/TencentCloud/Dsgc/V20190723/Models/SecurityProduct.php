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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 建议使用的安全产品
 *
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getReferUrl() 获取产品链接
 * @method void setReferUrl(string $ReferUrl) 设置产品链接
 */
class SecurityProduct extends AbstractModel
{
    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 产品链接
     */
    public $ReferUrl;

    /**
     * @param string $ProductName 产品名称
     * @param string $ReferUrl 产品链接
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ReferUrl",$param) and $param["ReferUrl"] !== null) {
            $this->ReferUrl = $param["ReferUrl"];
        }
    }
}
