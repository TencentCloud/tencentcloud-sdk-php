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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询时过滤条件。
 *
 * @method string getName() 获取过滤字段名，支持的列表如下：
- type：主资源类型，CDN。
- instanceId：IGTM实例ID。此为必传参数，未传将导致接口查询失败。
 * @method void setName(string $Name) 设置过滤字段名，支持的列表如下：
- type：主资源类型，CDN。
- instanceId：IGTM实例ID。此为必传参数，未传将导致接口查询失败。
 * @method array getValue() 获取过滤字段值。

 * @method void setValue(array $Value) 设置过滤字段值。

 * @method boolean getFuzzy() 获取是否启用模糊查询，仅支持过滤字段名为domain。
模糊查询时，Value长度最大为1，否则Value长度最大为5。(预留字段，暂未使用)
 * @method void setFuzzy(boolean $Fuzzy) 设置是否启用模糊查询，仅支持过滤字段名为domain。
模糊查询时，Value长度最大为1，否则Value长度最大为5。(预留字段，暂未使用)
 */
class ResourceFilter extends AbstractModel
{
    /**
     * @var string 过滤字段名，支持的列表如下：
- type：主资源类型，CDN。
- instanceId：IGTM实例ID。此为必传参数，未传将导致接口查询失败。
     */
    public $Name;

    /**
     * @var array 过滤字段值。

     */
    public $Value;

    /**
     * @var boolean 是否启用模糊查询，仅支持过滤字段名为domain。
模糊查询时，Value长度最大为1，否则Value长度最大为5。(预留字段，暂未使用)
     */
    public $Fuzzy;

    /**
     * @param string $Name 过滤字段名，支持的列表如下：
- type：主资源类型，CDN。
- instanceId：IGTM实例ID。此为必传参数，未传将导致接口查询失败。
     * @param array $Value 过滤字段值。

     * @param boolean $Fuzzy 是否启用模糊查询，仅支持过滤字段名为domain。
模糊查询时，Value长度最大为1，否则Value长度最大为5。(预留字段，暂未使用)
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }
    }
}
