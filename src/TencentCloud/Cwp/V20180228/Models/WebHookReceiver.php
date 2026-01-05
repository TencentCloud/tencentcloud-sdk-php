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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警接收人
 *
 * @method integer getId() 获取id
 * @method void setId(integer $Id) 设置id
 * @method string getName() 获取接收人名称
 * @method void setName(string $Name) 设置接收人名称
 * @method string getAddr() 获取webhook地址
 * @method void setAddr(string $Addr) 设置webhook地址
 * @method integer getType() 获取类型
 * @method void setType(integer $Type) 设置类型
 * @method string getSCFRegion() 获取目标地域
 * @method void setSCFRegion(string $SCFRegion) 设置目标地域
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getFunctionVersion() 获取版本
 * @method void setFunctionVersion(string $FunctionVersion) 设置版本
 * @method string getAlias() 获取别名
 * @method void setAlias(string $Alias) 设置别名
 */
class WebHookReceiver extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Id;

    /**
     * @var string 接收人名称
     */
    public $Name;

    /**
     * @var string webhook地址
     */
    public $Addr;

    /**
     * @var integer 类型
     */
    public $Type;

    /**
     * @var string 目标地域
     */
    public $SCFRegion;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 版本
     */
    public $FunctionVersion;

    /**
     * @var string 别名
     */
    public $Alias;

    /**
     * @param integer $Id id
     * @param string $Name 接收人名称
     * @param string $Addr webhook地址
     * @param integer $Type 类型
     * @param string $SCFRegion 目标地域
     * @param string $Namespace 命名空间
     * @param string $FunctionName 函数名称
     * @param string $FunctionVersion 版本
     * @param string $Alias 别名
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

        if (array_key_exists("Addr",$param) and $param["Addr"] !== null) {
            $this->Addr = $param["Addr"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SCFRegion",$param) and $param["SCFRegion"] !== null) {
            $this->SCFRegion = $param["SCFRegion"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
