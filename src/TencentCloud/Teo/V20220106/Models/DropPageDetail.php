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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拦截页面的配置信息
 *
 * @method integer getPageId() 获取拦截页面的唯一Id。系统默认包含一个自带拦截页面，Id值为0。
该Id可通过创建拦截页面接口进行上传获取。如传入0，代表使用系统默认拦截页面
 * @method void setPageId(integer $PageId) 设置拦截页面的唯一Id。系统默认包含一个自带拦截页面，Id值为0。
该Id可通过创建拦截页面接口进行上传获取。如传入0，代表使用系统默认拦截页面
 * @method integer getStatusCode() 获取拦截页面的HTTP状态码。状态码范围是 100 - 600。
 * @method void setStatusCode(integer $StatusCode) 设置拦截页面的HTTP状态码。状态码范围是 100 - 600。
 * @method string getName() 获取页面的元信息，文件名或url。
 * @method void setName(string $Name) 设置页面的元信息，文件名或url。
 * @method string getType() 获取页面的类型。
 * @method void setType(string $Type) 设置页面的类型。
 */
class DropPageDetail extends AbstractModel
{
    /**
     * @var integer 拦截页面的唯一Id。系统默认包含一个自带拦截页面，Id值为0。
该Id可通过创建拦截页面接口进行上传获取。如传入0，代表使用系统默认拦截页面
     */
    public $PageId;

    /**
     * @var integer 拦截页面的HTTP状态码。状态码范围是 100 - 600。
     */
    public $StatusCode;

    /**
     * @var string 页面的元信息，文件名或url。
     */
    public $Name;

    /**
     * @var string 页面的类型。
     */
    public $Type;

    /**
     * @param integer $PageId 拦截页面的唯一Id。系统默认包含一个自带拦截页面，Id值为0。
该Id可通过创建拦截页面接口进行上传获取。如传入0，代表使用系统默认拦截页面
     * @param integer $StatusCode 拦截页面的HTTP状态码。状态码范围是 100 - 600。
     * @param string $Name 页面的元信息，文件名或url。
     * @param string $Type 页面的类型。
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
        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
