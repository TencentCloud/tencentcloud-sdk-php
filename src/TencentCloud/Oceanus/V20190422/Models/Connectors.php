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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 解析Connector
 *
 * @method string getConnectionMethod() 获取连接方式
 * @method void setConnectionMethod(string $ConnectionMethod) 设置连接方式
 * @method string getConnector() 获取连接器名称
 * @method void setConnector(string $Connector) 设置连接器名称
 * @method boolean getExisted() 获取是否已经被使用
 * @method void setExisted(boolean $Existed) 设置是否已经被使用
 */
class Connectors extends AbstractModel
{
    /**
     * @var string 连接方式
     */
    public $ConnectionMethod;

    /**
     * @var string 连接器名称
     */
    public $Connector;

    /**
     * @var boolean 是否已经被使用
     */
    public $Existed;

    /**
     * @param string $ConnectionMethod 连接方式
     * @param string $Connector 连接器名称
     * @param boolean $Existed 是否已经被使用
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
        if (array_key_exists("ConnectionMethod",$param) and $param["ConnectionMethod"] !== null) {
            $this->ConnectionMethod = $param["ConnectionMethod"];
        }

        if (array_key_exists("Connector",$param) and $param["Connector"] !== null) {
            $this->Connector = $param["Connector"];
        }

        if (array_key_exists("Existed",$param) and $param["Existed"] !== null) {
            $this->Existed = $param["Existed"];
        }
    }
}
