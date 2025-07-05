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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对象类型字段类型
 *
 * @method string getKey() 获取instanceId
 * @method void setKey(string $Key) 设置instanceId
 * @method string getHeader() 获取实例id
 * @method void setHeader(string $Header) 设置实例id
 * @method string getTransfer() 获取字段值是否需要转译，当不需要转译时，此字段返回null
 * @method void setTransfer(string $Transfer) 设置字段值是否需要转译，当不需要转译时，此字段返回null
 * @method string getJsonParse() 获取tke的pod字段信息解析
 * @method void setJsonParse(string $JsonParse) 设置tke的pod字段信息解析
 * @method integer getType() 获取字段类型 0:str 1:list
 * @method void setType(integer $Type) 设置字段类型 0:str 1:list
 */
class ObjectTypeConfigFields extends AbstractModel
{
    /**
     * @var string instanceId
     */
    public $Key;

    /**
     * @var string 实例id
     */
    public $Header;

    /**
     * @var string 字段值是否需要转译，当不需要转译时，此字段返回null
     */
    public $Transfer;

    /**
     * @var string tke的pod字段信息解析
     */
    public $JsonParse;

    /**
     * @var integer 字段类型 0:str 1:list
     */
    public $Type;

    /**
     * @param string $Key instanceId
     * @param string $Header 实例id
     * @param string $Transfer 字段值是否需要转译，当不需要转译时，此字段返回null
     * @param string $JsonParse tke的pod字段信息解析
     * @param integer $Type 字段类型 0:str 1:list
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = $param["Header"];
        }

        if (array_key_exists("Transfer",$param) and $param["Transfer"] !== null) {
            $this->Transfer = $param["Transfer"];
        }

        if (array_key_exists("JsonParse",$param) and $param["JsonParse"] !== null) {
            $this->JsonParse = $param["JsonParse"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
