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
 * 多通道安全网关线路信息
 *
 * @method string getLineId() 获取线路 ID ， 其中 line-0 和 line-1 为系统内置线路 ID，取值有:
<li> line-0：直连线路，不支持添加、编辑和删除；</li>
<li> line-1： EdgeOne 四层代理线路，支持修改实例和规则，不支持删除；</li>
<li> line-2 及以上：EdgeOne 四层代理线路或者自定义线路，支持修改、删除实例和规则。</li>
 * @method void setLineId(string $LineId) 设置线路 ID ， 其中 line-0 和 line-1 为系统内置线路 ID，取值有:
<li> line-0：直连线路，不支持添加、编辑和删除；</li>
<li> line-1： EdgeOne 四层代理线路，支持修改实例和规则，不支持删除；</li>
<li> line-2 及以上：EdgeOne 四层代理线路或者自定义线路，支持修改、删除实例和规则。</li>
 * @method string getLineType() 获取线路类型，取值有：
<li>direct ：直连线路，不支持编辑、不支持删除；</li>
<li>proxy ：EdgeOne 四层代理线路，支持编辑修改实例和规则，不支持删除；</li>
<li>custom ：自定义线路，支持编辑、支持删除。</li>
 * @method void setLineType(string $LineType) 设置线路类型，取值有：
<li>direct ：直连线路，不支持编辑、不支持删除；</li>
<li>proxy ：EdgeOne 四层代理线路，支持编辑修改实例和规则，不支持删除；</li>
<li>custom ：自定义线路，支持编辑、支持删除。</li>
 * @method string getLineAddress() 获取线路地址，格式为 host:port 。
 * @method void setLineAddress(string $LineAddress) 设置线路地址，格式为 host:port 。
 * @method string getProxyId() 获取四层代理实例 ID  ，当线路类型 LineType 取值为 proxy（EdgeOne 四层代理）返回。
 * @method void setProxyId(string $ProxyId) 设置四层代理实例 ID  ，当线路类型 LineType 取值为 proxy（EdgeOne 四层代理）返回。
 * @method string getRuleId() 获取转发规则 ID ，当线路类型 LineType 取值为 proxy（EdgeOne 四层代理）返回。
 * @method void setRuleId(string $RuleId) 设置转发规则 ID ，当线路类型 LineType 取值为 proxy（EdgeOne 四层代理）返回。
 */
class MultiPathGatewayLine extends AbstractModel
{
    /**
     * @var string 线路 ID ， 其中 line-0 和 line-1 为系统内置线路 ID，取值有:
<li> line-0：直连线路，不支持添加、编辑和删除；</li>
<li> line-1： EdgeOne 四层代理线路，支持修改实例和规则，不支持删除；</li>
<li> line-2 及以上：EdgeOne 四层代理线路或者自定义线路，支持修改、删除实例和规则。</li>
     */
    public $LineId;

    /**
     * @var string 线路类型，取值有：
<li>direct ：直连线路，不支持编辑、不支持删除；</li>
<li>proxy ：EdgeOne 四层代理线路，支持编辑修改实例和规则，不支持删除；</li>
<li>custom ：自定义线路，支持编辑、支持删除。</li>
     */
    public $LineType;

    /**
     * @var string 线路地址，格式为 host:port 。
     */
    public $LineAddress;

    /**
     * @var string 四层代理实例 ID  ，当线路类型 LineType 取值为 proxy（EdgeOne 四层代理）返回。
     */
    public $ProxyId;

    /**
     * @var string 转发规则 ID ，当线路类型 LineType 取值为 proxy（EdgeOne 四层代理）返回。
     */
    public $RuleId;

    /**
     * @param string $LineId 线路 ID ， 其中 line-0 和 line-1 为系统内置线路 ID，取值有:
<li> line-0：直连线路，不支持添加、编辑和删除；</li>
<li> line-1： EdgeOne 四层代理线路，支持修改实例和规则，不支持删除；</li>
<li> line-2 及以上：EdgeOne 四层代理线路或者自定义线路，支持修改、删除实例和规则。</li>
     * @param string $LineType 线路类型，取值有：
<li>direct ：直连线路，不支持编辑、不支持删除；</li>
<li>proxy ：EdgeOne 四层代理线路，支持编辑修改实例和规则，不支持删除；</li>
<li>custom ：自定义线路，支持编辑、支持删除。</li>
     * @param string $LineAddress 线路地址，格式为 host:port 。
     * @param string $ProxyId 四层代理实例 ID  ，当线路类型 LineType 取值为 proxy（EdgeOne 四层代理）返回。
     * @param string $RuleId 转发规则 ID ，当线路类型 LineType 取值为 proxy（EdgeOne 四层代理）返回。
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
        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            $this->LineId = $param["LineId"];
        }

        if (array_key_exists("LineType",$param) and $param["LineType"] !== null) {
            $this->LineType = $param["LineType"];
        }

        if (array_key_exists("LineAddress",$param) and $param["LineAddress"] !== null) {
            $this->LineAddress = $param["LineAddress"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
