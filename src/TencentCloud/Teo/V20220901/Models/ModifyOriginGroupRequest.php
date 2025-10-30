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
 * ModifyOriginGroup请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID
 * @method void setZoneId(string $ZoneId) 设置站点 ID
 * @method string getGroupId() 获取源站组 ID，此参数必填。
 * @method void setGroupId(string $GroupId) 设置源站组 ID，此参数必填。
 * @method string getName() 获取源站组名称，不填保持原有配置，可输入1 - 200个字符，允许的字符为 a - z, A - Z, 0 - 9, _, - 。	
 * @method void setName(string $Name) 设置源站组名称，不填保持原有配置，可输入1 - 200个字符，允许的字符为 a - z, A - Z, 0 - 9, _, - 。	
 * @method string getType() 获取源站组类型，取值有：
<li>GENERAL：通用型源站组，仅支持添加 IP/域名 源站，可以被域名服务、规则引擎、四层代理、通用型负载均衡引用；</li>
<li>HTTP： HTTP专用型源站组，支持添加 IP/域名、对象存储源站，无法被四层代理引用。</li>不填保持原有配置。
 * @method void setType(string $Type) 设置源站组类型，取值有：
<li>GENERAL：通用型源站组，仅支持添加 IP/域名 源站，可以被域名服务、规则引擎、四层代理、通用型负载均衡引用；</li>
<li>HTTP： HTTP专用型源站组，支持添加 IP/域名、对象存储源站，无法被四层代理引用。</li>不填保持原有配置。
 * @method array getRecords() 获取源站记录信息，不填保持原有配置。
 * @method void setRecords(array $Records) 设置源站记录信息，不填保持原有配置。
 * @method string getHostHeader() 获取回源 Host Header，仅 Type = HTTP 时生效， 不填或者填空表示不配置回源Host，规则引擎修改 Host Header 配置优先级高于源站组的 Host Header。
 * @method void setHostHeader(string $HostHeader) 设置回源 Host Header，仅 Type = HTTP 时生效， 不填或者填空表示不配置回源Host，规则引擎修改 Host Header 配置优先级高于源站组的 Host Header。
 */
class ModifyOriginGroupRequest extends AbstractModel
{
    /**
     * @var string 站点 ID
     */
    public $ZoneId;

    /**
     * @var string 源站组 ID，此参数必填。
     */
    public $GroupId;

    /**
     * @var string 源站组名称，不填保持原有配置，可输入1 - 200个字符，允许的字符为 a - z, A - Z, 0 - 9, _, - 。	
     */
    public $Name;

    /**
     * @var string 源站组类型，取值有：
<li>GENERAL：通用型源站组，仅支持添加 IP/域名 源站，可以被域名服务、规则引擎、四层代理、通用型负载均衡引用；</li>
<li>HTTP： HTTP专用型源站组，支持添加 IP/域名、对象存储源站，无法被四层代理引用。</li>不填保持原有配置。
     */
    public $Type;

    /**
     * @var array 源站记录信息，不填保持原有配置。
     */
    public $Records;

    /**
     * @var string 回源 Host Header，仅 Type = HTTP 时生效， 不填或者填空表示不配置回源Host，规则引擎修改 Host Header 配置优先级高于源站组的 Host Header。
     */
    public $HostHeader;

    /**
     * @param string $ZoneId 站点 ID
     * @param string $GroupId 源站组 ID，此参数必填。
     * @param string $Name 源站组名称，不填保持原有配置，可输入1 - 200个字符，允许的字符为 a - z, A - Z, 0 - 9, _, - 。	
     * @param string $Type 源站组类型，取值有：
<li>GENERAL：通用型源站组，仅支持添加 IP/域名 源站，可以被域名服务、规则引擎、四层代理、通用型负载均衡引用；</li>
<li>HTTP： HTTP专用型源站组，支持添加 IP/域名、对象存储源站，无法被四层代理引用。</li>不填保持原有配置。
     * @param array $Records 源站记录信息，不填保持原有配置。
     * @param string $HostHeader 回源 Host Header，仅 Type = HTTP 时生效， 不填或者填空表示不配置回源Host，规则引擎修改 Host Header 配置优先级高于源站组的 Host Header。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new OriginRecord();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }
    }
}
