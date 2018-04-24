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
 * @method string getName() 获取产品名称
 * @method void setName(string $Name) 设置产品名称
 * @method string getDescription() 获取产品类型
 * @method void setDescription(string $Description) 设置产品类型
 * @method integer getAuthType() 获取产品鉴权类型（0：直连，1：Token）
 * @method void setAuthType(integer $AuthType) 设置产品鉴权类型（0：直连，1：Token）
 * @method array getDataTemplate() 获取数据模版（json数组）
 * @method void setDataTemplate(array $DataTemplate) 设置数据模版（json数组）
 */

/**
 *AddProduct请求参数结构体
 */
class AddProductRequest extends AbstractModel
{
    /**
     * @var string 产品名称
     */
    public $Name;

    /**
     * @var string 产品类型
     */
    public $Description;

    /**
     * @var integer 产品鉴权类型（0：直连，1：Token）
     */
    public $AuthType;

    /**
     * @var array 数据模版（json数组）
     */
    public $DataTemplate;
    /**
     * @param string $Name 产品名称
     * @param string $Description 产品类型
     * @param integer $AuthType 产品鉴权类型（0：直连，1：Token）
     * @param array $DataTemplate 数据模版（json数组）
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("DataTemplate",$param) and $param["DataTemplate"] !== null) {
            $this->DataTemplate = $param["DataTemplate"];
        }
    }
}
