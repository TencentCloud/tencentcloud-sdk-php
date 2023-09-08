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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 平台产品基础信息
 *
 * @method string getProductName() 获取平台产品名称
 * @method void setProductName(string $ProductName) 设置平台产品名称
 * @method string getProductType() 获取平台产品类型
 * @method void setProductType(string $ProductType) 设置平台产品类型
 */
class PlatformProduct extends AbstractModel
{
    /**
     * @var string 平台产品名称
     */
    public $ProductName;

    /**
     * @var string 平台产品类型
     */
    public $ProductType;

    /**
     * @param string $ProductName 平台产品名称
     * @param string $ProductType 平台产品类型
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

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }
    }
}
