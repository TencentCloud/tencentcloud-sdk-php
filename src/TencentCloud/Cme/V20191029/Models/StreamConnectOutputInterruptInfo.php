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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云转推输出断流信息
 *
 * @method string getId() 获取云转推输出标识。
 * @method void setId(string $Id) 设置云转推输出标识。
 * @method string getName() 获取云转推输出名称。
 * @method void setName(string $Name) 设置云转推输出名称。
 * @method string getUrl() 获取云转推输出地址。
 * @method void setUrl(string $Url) 设置云转推输出地址。
 */
class StreamConnectOutputInterruptInfo extends AbstractModel
{
    /**
     * @var string 云转推输出标识。
     */
    public $Id;

    /**
     * @var string 云转推输出名称。
     */
    public $Name;

    /**
     * @var string 云转推输出地址。
     */
    public $Url;

    /**
     * @param string $Id 云转推输出标识。
     * @param string $Name 云转推输出名称。
     * @param string $Url 云转推输出地址。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
