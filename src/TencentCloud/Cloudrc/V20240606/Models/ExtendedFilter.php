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
namespace TencentCloud\Cloudrc\V20240606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤器
 *
 * @method string getKey() 获取<p>过滤条件键</p><p>枚举值：</p><ul><li>ResourceType： 资源类型</li><li>ResourceId： 资源ID</li><li>ResourceAlias： 资源名称</li><li>PayMode： 计费模式</li><li>RegionCode： 地域编码</li><li>ZoneCode： 可用区编码</li><li>PublicIpAddress： 外网IP</li><li>PrivateIpAddress： 内网IP</li><li>VpcId： VPC ID</li><li>SubnetId： 子网ID</li><li>Tag： 标签</li></ul>
 * @method void setKey(string $Key) 设置<p>过滤条件键</p><p>枚举值：</p><ul><li>ResourceType： 资源类型</li><li>ResourceId： 资源ID</li><li>ResourceAlias： 资源名称</li><li>PayMode： 计费模式</li><li>RegionCode： 地域编码</li><li>ZoneCode： 可用区编码</li><li>PublicIpAddress： 外网IP</li><li>PrivateIpAddress： 内网IP</li><li>VpcId： VPC ID</li><li>SubnetId： 子网ID</li><li>Tag： 标签</li></ul>
 * @method array getValues() 获取<p>过滤条件值</p>
 * @method void setValues(array $Values) 设置<p>过滤条件值</p>
 * @method string getMatchType() 获取<p>匹配方式</p><p>枚举值：</p><ul><li>Equals： 等于</li><li>NotEquals： 不等于</li><li>Contains： 包含</li><li>NotContains： 不包含</li><li>Exists： 存在</li><li>NotExists： 不存在</li></ul>
 * @method void setMatchType(string $MatchType) 设置<p>匹配方式</p><p>枚举值：</p><ul><li>Equals： 等于</li><li>NotEquals： 不等于</li><li>Contains： 包含</li><li>NotContains： 不包含</li><li>Exists： 存在</li><li>NotExists： 不存在</li></ul>
 */
class ExtendedFilter extends AbstractModel
{
    /**
     * @var string <p>过滤条件键</p><p>枚举值：</p><ul><li>ResourceType： 资源类型</li><li>ResourceId： 资源ID</li><li>ResourceAlias： 资源名称</li><li>PayMode： 计费模式</li><li>RegionCode： 地域编码</li><li>ZoneCode： 可用区编码</li><li>PublicIpAddress： 外网IP</li><li>PrivateIpAddress： 内网IP</li><li>VpcId： VPC ID</li><li>SubnetId： 子网ID</li><li>Tag： 标签</li></ul>
     */
    public $Key;

    /**
     * @var array <p>过滤条件值</p>
     */
    public $Values;

    /**
     * @var string <p>匹配方式</p><p>枚举值：</p><ul><li>Equals： 等于</li><li>NotEquals： 不等于</li><li>Contains： 包含</li><li>NotContains： 不包含</li><li>Exists： 存在</li><li>NotExists： 不存在</li></ul>
     */
    public $MatchType;

    /**
     * @param string $Key <p>过滤条件键</p><p>枚举值：</p><ul><li>ResourceType： 资源类型</li><li>ResourceId： 资源ID</li><li>ResourceAlias： 资源名称</li><li>PayMode： 计费模式</li><li>RegionCode： 地域编码</li><li>ZoneCode： 可用区编码</li><li>PublicIpAddress： 外网IP</li><li>PrivateIpAddress： 内网IP</li><li>VpcId： VPC ID</li><li>SubnetId： 子网ID</li><li>Tag： 标签</li></ul>
     * @param array $Values <p>过滤条件值</p>
     * @param string $MatchType <p>匹配方式</p><p>枚举值：</p><ul><li>Equals： 等于</li><li>NotEquals： 不等于</li><li>Contains： 包含</li><li>NotContains： 不包含</li><li>Exists： 存在</li><li>NotExists： 不存在</li></ul>
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }
    }
}
