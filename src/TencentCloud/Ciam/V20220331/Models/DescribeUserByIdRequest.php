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
 * DescribeUserById请求参数结构体
 *
 * @method string getUserStoreId() 获取用户目录ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户目录ID
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method boolean getOriginal() 获取返回信息是否为原文

<li> **false** </li>	默认，返回信息为脱敏信息
<li> **true** </li>	返回用户信息原文
 * @method void setOriginal(boolean $Original) 设置返回信息是否为原文

<li> **false** </li>	默认，返回信息为脱敏信息
<li> **true** </li>	返回用户信息原文
 */
class DescribeUserByIdRequest extends AbstractModel
{
    /**
     * @var string 用户目录ID
     */
    public $UserStoreId;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var boolean 返回信息是否为原文

<li> **false** </li>	默认，返回信息为脱敏信息
<li> **true** </li>	返回用户信息原文
     */
    public $Original;

    /**
     * @param string $UserStoreId 用户目录ID
     * @param string $UserId 用户ID
     * @param boolean $Original 返回信息是否为原文

<li> **false** </li>	默认，返回信息为脱敏信息
<li> **true** </li>	返回用户信息原文
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Original",$param) and $param["Original"] !== null) {
            $this->Original = $param["Original"];
        }
    }
}
