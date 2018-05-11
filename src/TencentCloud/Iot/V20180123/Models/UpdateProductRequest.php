<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getName() 获取产品名称
 * @method void setName(string $Name) 设置产品名称
 * @method string getDescription() 获取产品描述
 * @method void setDescription(string $Description) 设置产品描述
 * @method string getDataTemplate() 获取数据模版（json）
 * @method void setDataTemplate(string $DataTemplate) 设置数据模版（json）
 */

/**
 *UpdateProduct请求参数结构体
 */
class UpdateProductRequest extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 产品名称
     */
    public $Name;

    /**
     * @var string 产品描述
     */
    public $Description;

    /**
     * @var string 数据模版（json）
     */
    public $DataTemplate;
    /**
     * @param string $ProductId 产品Id
     * @param string $Name 产品名称
     * @param string $Description 产品描述
     * @param string $DataTemplate 数据模版（json）
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DataTemplate",$param) and $param["DataTemplate"] !== null) {
            $this->DataTemplate = $param["DataTemplate"];
        }
    }
}
