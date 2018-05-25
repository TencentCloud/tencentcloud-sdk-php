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
 * @method string getName() 获取产品名称，同一区域产品名称需唯一，支持中文、英文字母、中划线和下划线，长度不超过31个字符，中文占两个字符
 * @method void setName(string $Name) 设置产品名称，同一区域产品名称需唯一，支持中文、英文字母、中划线和下划线，长度不超过31个字符，中文占两个字符
 * @method string getDescription() 获取产品描述
 * @method void setDescription(string $Description) 设置产品描述
 * @method integer getAuthType() 获取鉴权模式（1：动态令牌，推荐使用动态令牌）
 * @method void setAuthType(integer $AuthType) 设置鉴权模式（1：动态令牌，推荐使用动态令牌）
 * @method array getDataTemplate() 获取数据模版（json数组）
 * @method void setDataTemplate(array $DataTemplate) 设置数据模版（json数组）
 * @method string getDataProtocol() 获取数据协议（native表示自定义，template表示数据模板，默认值为template）
 * @method void setDataProtocol(string $DataProtocol) 设置数据协议（native表示自定义，template表示数据模板，默认值为template）
 */

/**
 *AddProduct请求参数结构体
 */
class AddProductRequest extends AbstractModel
{
    /**
     * @var string 产品名称，同一区域产品名称需唯一，支持中文、英文字母、中划线和下划线，长度不超过31个字符，中文占两个字符
     */
    public $Name;

    /**
     * @var string 产品描述
     */
    public $Description;

    /**
     * @var integer 鉴权模式（1：动态令牌，推荐使用动态令牌）
     */
    public $AuthType;

    /**
     * @var array 数据模版（json数组）
     */
    public $DataTemplate;

    /**
     * @var string 数据协议（native表示自定义，template表示数据模板，默认值为template）
     */
    public $DataProtocol;
    /**
     * @param string $Name 产品名称，同一区域产品名称需唯一，支持中文、英文字母、中划线和下划线，长度不超过31个字符，中文占两个字符
     * @param string $Description 产品描述
     * @param integer $AuthType 鉴权模式（1：动态令牌，推荐使用动态令牌）
     * @param array $DataTemplate 数据模版（json数组）
     * @param string $DataProtocol 数据协议（native表示自定义，template表示数据模板，默认值为template）
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

        if (array_key_exists("DataProtocol",$param) and $param["DataProtocol"] !== null) {
            $this->DataProtocol = $param["DataProtocol"];
        }
    }
}
