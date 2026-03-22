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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本控制-类型数组
 *
 * @method array getProtocols() 获取<p>协议与售卖详情</p>
 * @method void setProtocols(array $Protocols) 设置<p>协议与售卖详情</p>
 * @method string getType() 获取<p>存储类型。返回值中 SD 为通用标准型存储， HP为通用性能型存储， TB为Turbo标准型， TP 为Turbo性能型。</p>
 * @method void setType(string $Type) 设置<p>存储类型。返回值中 SD 为通用标准型存储， HP为通用性能型存储， TB为Turbo标准型， TP 为Turbo性能型。</p>
 * @method boolean getPrepayment() 获取<p>是否支持预付费。返回值中 true 为支持、false 为不支持</p>
 * @method void setPrepayment(boolean $Prepayment) 设置<p>是否支持预付费。返回值中 true 为支持、false 为不支持</p>
 * @method string getVersion() 获取<p>文件系统版本</p><p>枚举值：</p><ul><li>v1.5： 通用系列</li><li>v3.1： 通用系列（增强型）</li><li>v4.0： Turbo系列</li></ul>
 * @method void setVersion(string $Version) 设置<p>文件系统版本</p><p>枚举值：</p><ul><li>v1.5： 通用系列</li><li>v3.1： 通用系列（增强型）</li><li>v4.0： Turbo系列</li></ul>
 */
class AvailableType extends AbstractModel
{
    /**
     * @var array <p>协议与售卖详情</p>
     */
    public $Protocols;

    /**
     * @var string <p>存储类型。返回值中 SD 为通用标准型存储， HP为通用性能型存储， TB为Turbo标准型， TP 为Turbo性能型。</p>
     */
    public $Type;

    /**
     * @var boolean <p>是否支持预付费。返回值中 true 为支持、false 为不支持</p>
     */
    public $Prepayment;

    /**
     * @var string <p>文件系统版本</p><p>枚举值：</p><ul><li>v1.5： 通用系列</li><li>v3.1： 通用系列（增强型）</li><li>v4.0： Turbo系列</li></ul>
     */
    public $Version;

    /**
     * @param array $Protocols <p>协议与售卖详情</p>
     * @param string $Type <p>存储类型。返回值中 SD 为通用标准型存储， HP为通用性能型存储， TB为Turbo标准型， TP 为Turbo性能型。</p>
     * @param boolean $Prepayment <p>是否支持预付费。返回值中 true 为支持、false 为不支持</p>
     * @param string $Version <p>文件系统版本</p><p>枚举值：</p><ul><li>v1.5： 通用系列</li><li>v3.1： 通用系列（增强型）</li><li>v4.0： Turbo系列</li></ul>
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
        if (array_key_exists("Protocols",$param) and $param["Protocols"] !== null) {
            $this->Protocols = [];
            foreach ($param["Protocols"] as $key => $value){
                $obj = new AvailableProtoStatus();
                $obj->deserialize($value);
                array_push($this->Protocols, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Prepayment",$param) and $param["Prepayment"] !== null) {
            $this->Prepayment = $param["Prepayment"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
