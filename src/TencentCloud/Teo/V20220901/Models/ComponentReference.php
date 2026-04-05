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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组件被引用的实例信息，用于展示该组件与边缘函数等资源的绑定关系。当边缘函数需要访问组件（如 KV 命名空间）时，会建立引用关系，通过此结构体可查看引用的具体实例详情及所属站点信息。
 *
 * @method string getReferenceType() 获取引用的实例类型。取值有：
<li>edge-function：边缘函数。</li>
 * @method void setReferenceType(string $ReferenceType) 设置引用的实例类型。取值有：
<li>edge-function：边缘函数。</li>
 * @method string getReferenceId() 获取引用的实例 ID。根据 ReferenceType 的取值不同，返回对应的实例 ID：
<li>当 ReferenceType 为 edge-function 时：返回边缘函数 ID，格式形如：ef-2vc5oe9mzqhm。</li>

 * @method void setReferenceId(string $ReferenceId) 设置引用的实例 ID。根据 ReferenceType 的取值不同，返回对应的实例 ID：
<li>当 ReferenceType 为 edge-function 时：返回边缘函数 ID，格式形如：ef-2vc5oe9mzqhm。</li>

 * @method string getReferenceName() 获取引用的实例名称。根据 ReferenceType 的取值不同，返回对应的实例名称：
<li>当 ReferenceType 为 edge-function 时：返回边缘函数名称。</li>

 * @method void setReferenceName(string $ReferenceName) 设置引用的实例名称。根据 ReferenceType 的取值不同，返回对应的实例名称：
<li>当 ReferenceType 为 edge-function 时：返回边缘函数名称。</li>

 * @method string getZoneId() 获取站点 ID。引用该命名空间的实例所属的站点标识。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。引用该命名空间的实例所属的站点标识。
 * @method string getZoneName() 获取站点名称。引用该命名空间的实例所属的站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。引用该命名空间的实例所属的站点名称。
 * @method string getAliasZoneName() 获取引用该命名空间的实例所属站点的别名。若未设置站点别名，则返回空字符串。
 * @method void setAliasZoneName(string $AliasZoneName) 设置引用该命名空间的实例所属站点的别名。若未设置站点别名，则返回空字符串。
 */
class ComponentReference extends AbstractModel
{
    /**
     * @var string 引用的实例类型。取值有：
<li>edge-function：边缘函数。</li>
     */
    public $ReferenceType;

    /**
     * @var string 引用的实例 ID。根据 ReferenceType 的取值不同，返回对应的实例 ID：
<li>当 ReferenceType 为 edge-function 时：返回边缘函数 ID，格式形如：ef-2vc5oe9mzqhm。</li>

     */
    public $ReferenceId;

    /**
     * @var string 引用的实例名称。根据 ReferenceType 的取值不同，返回对应的实例名称：
<li>当 ReferenceType 为 edge-function 时：返回边缘函数名称。</li>

     */
    public $ReferenceName;

    /**
     * @var string 站点 ID。引用该命名空间的实例所属的站点标识。
     */
    public $ZoneId;

    /**
     * @var string 站点名称。引用该命名空间的实例所属的站点名称。
     */
    public $ZoneName;

    /**
     * @var string 引用该命名空间的实例所属站点的别名。若未设置站点别名，则返回空字符串。
     */
    public $AliasZoneName;

    /**
     * @param string $ReferenceType 引用的实例类型。取值有：
<li>edge-function：边缘函数。</li>
     * @param string $ReferenceId 引用的实例 ID。根据 ReferenceType 的取值不同，返回对应的实例 ID：
<li>当 ReferenceType 为 edge-function 时：返回边缘函数 ID，格式形如：ef-2vc5oe9mzqhm。</li>

     * @param string $ReferenceName 引用的实例名称。根据 ReferenceType 的取值不同，返回对应的实例名称：
<li>当 ReferenceType 为 edge-function 时：返回边缘函数名称。</li>

     * @param string $ZoneId 站点 ID。引用该命名空间的实例所属的站点标识。
     * @param string $ZoneName 站点名称。引用该命名空间的实例所属的站点名称。
     * @param string $AliasZoneName 引用该命名空间的实例所属站点的别名。若未设置站点别名，则返回空字符串。
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
        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("ReferenceId",$param) and $param["ReferenceId"] !== null) {
            $this->ReferenceId = $param["ReferenceId"];
        }

        if (array_key_exists("ReferenceName",$param) and $param["ReferenceName"] !== null) {
            $this->ReferenceName = $param["ReferenceName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
        }
    }
}
