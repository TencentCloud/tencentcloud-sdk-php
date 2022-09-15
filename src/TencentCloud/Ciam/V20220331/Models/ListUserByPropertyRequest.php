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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUserByProperty请求参数结构体
 *
 * @method string getUserStoreId() 获取用户目录ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户目录ID
 * @method string getPropertyCode() 获取查询的属性

<li> **phoneNumber** </li>	  手机号码
<li> **email** </li>  邮箱
 * @method void setPropertyCode(string $PropertyCode) 设置查询的属性

<li> **phoneNumber** </li>	  手机号码
<li> **email** </li>  邮箱
 * @method string getPropertyValue() 获取属性值
 * @method void setPropertyValue(string $PropertyValue) 设置属性值
 * @method boolean getOriginal() 获取返回信息是否为原文
 * @method void setOriginal(boolean $Original) 设置返回信息是否为原文
 */
class ListUserByPropertyRequest extends AbstractModel
{
    /**
     * @var string 用户目录ID
     */
    public $UserStoreId;

    /**
     * @var string 查询的属性

<li> **phoneNumber** </li>	  手机号码
<li> **email** </li>  邮箱
     */
    public $PropertyCode;

    /**
     * @var string 属性值
     */
    public $PropertyValue;

    /**
     * @var boolean 返回信息是否为原文
     */
    public $Original;

    /**
     * @param string $UserStoreId 用户目录ID
     * @param string $PropertyCode 查询的属性

<li> **phoneNumber** </li>	  手机号码
<li> **email** </li>  邮箱
     * @param string $PropertyValue 属性值
     * @param boolean $Original 返回信息是否为原文
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
        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("PropertyCode",$param) and $param["PropertyCode"] !== null) {
            $this->PropertyCode = $param["PropertyCode"];
        }

        if (array_key_exists("PropertyValue",$param) and $param["PropertyValue"] !== null) {
            $this->PropertyValue = $param["PropertyValue"];
        }

        if (array_key_exists("Original",$param) and $param["Original"] !== null) {
            $this->Original = $param["Original"];
        }
    }
}
