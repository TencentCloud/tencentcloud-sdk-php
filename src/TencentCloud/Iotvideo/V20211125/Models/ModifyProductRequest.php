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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProduct请求参数结构体
 *
 * @method string getProductId() 获取产品id
 * @method void setProductId(string $ProductId) 设置产品id
 * @method string getProductName() 获取修改的产品名称 （支持中文、英文、数字、下划线组合，最多不超过20个字符）
 * @method void setProductName(string $ProductName) 设置修改的产品名称 （支持中文、英文、数字、下划线组合，最多不超过20个字符）
 * @method string getProductDescription() 获取修改的产品描述 （最多不超过128个字符）
 * @method void setProductDescription(string $ProductDescription) 设置修改的产品描述 （最多不超过128个字符）
 */
class ModifyProductRequest extends AbstractModel
{
    /**
     * @var string 产品id
     */
    public $ProductId;

    /**
     * @var string 修改的产品名称 （支持中文、英文、数字、下划线组合，最多不超过20个字符）
     */
    public $ProductName;

    /**
     * @var string 修改的产品描述 （最多不超过128个字符）
     */
    public $ProductDescription;

    /**
     * @param string $ProductId 产品id
     * @param string $ProductName 修改的产品名称 （支持中文、英文、数字、下划线组合，最多不超过20个字符）
     * @param string $ProductDescription 修改的产品描述 （最多不超过128个字符）
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }
    }
}
