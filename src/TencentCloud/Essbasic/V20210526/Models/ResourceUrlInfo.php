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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源链接信息
 *
 * @method string getUrl() 获取资源链接地址，过期时间5分钟
 * @method void setUrl(string $Url) 设置资源链接地址，过期时间5分钟
 * @method string getName() 获取资源名称
 * @method void setName(string $Name) 设置资源名称
 * @method string getType() 获取资源类型
 * @method void setType(string $Type) 设置资源类型
 */
class ResourceUrlInfo extends AbstractModel
{
    /**
     * @var string 资源链接地址，过期时间5分钟
     */
    public $Url;

    /**
     * @var string 资源名称
     */
    public $Name;

    /**
     * @var string 资源类型
     */
    public $Type;

    /**
     * @param string $Url 资源链接地址，过期时间5分钟
     * @param string $Name 资源名称
     * @param string $Type 资源类型
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
