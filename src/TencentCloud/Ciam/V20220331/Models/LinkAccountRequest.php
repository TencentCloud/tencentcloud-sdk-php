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
 * LinkAccount请求参数结构体
 *
 * @method string getUserStoreId() 获取用户目录ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户目录ID
 * @method string getPrimaryUserId() 获取主用户ID
 * @method void setPrimaryUserId(string $PrimaryUserId) 设置主用户ID
 * @method string getSecondaryUserId() 获取从用户ID
 * @method void setSecondaryUserId(string $SecondaryUserId) 设置从用户ID
 * @method string getUserLinkedOnAttribute() 获取融合属性

<li> **PHONENUMBER** </li>	  手机号码
<li> **EMAIL** </li>  邮箱
 * @method void setUserLinkedOnAttribute(string $UserLinkedOnAttribute) 设置融合属性

<li> **PHONENUMBER** </li>	  手机号码
<li> **EMAIL** </li>  邮箱
 */
class LinkAccountRequest extends AbstractModel
{
    /**
     * @var string 用户目录ID
     */
    public $UserStoreId;

    /**
     * @var string 主用户ID
     */
    public $PrimaryUserId;

    /**
     * @var string 从用户ID
     */
    public $SecondaryUserId;

    /**
     * @var string 融合属性

<li> **PHONENUMBER** </li>	  手机号码
<li> **EMAIL** </li>  邮箱
     */
    public $UserLinkedOnAttribute;

    /**
     * @param string $UserStoreId 用户目录ID
     * @param string $PrimaryUserId 主用户ID
     * @param string $SecondaryUserId 从用户ID
     * @param string $UserLinkedOnAttribute 融合属性

<li> **PHONENUMBER** </li>	  手机号码
<li> **EMAIL** </li>  邮箱
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

        if (array_key_exists("PrimaryUserId",$param) and $param["PrimaryUserId"] !== null) {
            $this->PrimaryUserId = $param["PrimaryUserId"];
        }

        if (array_key_exists("SecondaryUserId",$param) and $param["SecondaryUserId"] !== null) {
            $this->SecondaryUserId = $param["SecondaryUserId"];
        }

        if (array_key_exists("UserLinkedOnAttribute",$param) and $param["UserLinkedOnAttribute"] !== null) {
            $this->UserLinkedOnAttribute = $param["UserLinkedOnAttribute"];
        }
    }
}
