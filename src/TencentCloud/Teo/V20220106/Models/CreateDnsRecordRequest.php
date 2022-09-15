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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDnsRecord请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID
 * @method void setZoneId(string $ZoneId) 设置站点 ID
 * @method string getType() 获取记录类型
 * @method void setType(string $Type) 设置记录类型
 * @method string getName() 获取记录名
 * @method void setName(string $Name) 设置记录名
 * @method string getContent() 获取记录内容
 * @method void setContent(string $Content) 设置记录内容
 * @method string getMode() 获取代理模式，可选值：dns_only, cdn_only, secure_cdn
 * @method void setMode(string $Mode) 设置代理模式，可选值：dns_only, cdn_only, secure_cdn
 * @method integer getTtl() 获取生存时间值
 * @method void setTtl(integer $Ttl) 设置生存时间值
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 */
class CreateDnsRecordRequest extends AbstractModel
{
    /**
     * @var string 站点 ID
     */
    public $ZoneId;

    /**
     * @var string 记录类型
     */
    public $Type;

    /**
     * @var string 记录名
     */
    public $Name;

    /**
     * @var string 记录内容
     */
    public $Content;

    /**
     * @var string 代理模式，可选值：dns_only, cdn_only, secure_cdn
     */
    public $Mode;

    /**
     * @var integer 生存时间值
     */
    public $Ttl;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @param string $ZoneId 站点 ID
     * @param string $Type 记录类型
     * @param string $Name 记录名
     * @param string $Content 记录内容
     * @param string $Mode 代理模式，可选值：dns_only, cdn_only, secure_cdn
     * @param integer $Ttl 生存时间值
     * @param integer $Priority 优先级
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
