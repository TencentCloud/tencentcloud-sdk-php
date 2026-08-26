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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 外发域名检测维度（URL / 排除 URL）
 *
 * @method array getURL() 获取外发对象列表（域名/URL）
 * @method void setURL(array $URL) 设置外发对象列表（域名/URL）
 * @method array getURLExcept() 获取排除对象列表
 * @method void setURLExcept(array $URLExcept) 设置排除对象列表
 */
class TrafficSandboxDLPURLRuleItem extends AbstractModel
{
    /**
     * @var array 外发对象列表（域名/URL）
     */
    public $URL;

    /**
     * @var array 排除对象列表
     */
    public $URLExcept;

    /**
     * @param array $URL 外发对象列表（域名/URL）
     * @param array $URLExcept 排除对象列表
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("URLExcept",$param) and $param["URLExcept"] !== null) {
            $this->URLExcept = $param["URLExcept"];
        }
    }
}
