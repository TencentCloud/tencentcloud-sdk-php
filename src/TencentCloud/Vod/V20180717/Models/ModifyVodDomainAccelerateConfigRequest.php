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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVodDomainAccelerateConfig请求参数结构体
 *
 * @method string getDomain() 获取需要设置加速配置的域名。
 * @method void setDomain(string $Domain) 设置需要设置加速配置的域名。
 * @method string getArea() 获取区域，可选值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland: 中国境外。</li>
<li>Global: 全球范围。</li>
 * @method void setArea(string $Area) 设置区域，可选值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland: 中国境外。</li>
<li>Global: 全球范围。</li>
 * @method string getStatus() 获取开启或者关闭所选区域的域名加速，可选值：
<li>Enabled: 开启。</li>
<li>Disabled：关闭。</li>
开启中国境内加速的域名，需要先[备案域名](/document/product/243/18905)。
 * @method void setStatus(string $Status) 设置开启或者关闭所选区域的域名加速，可选值：
<li>Enabled: 开启。</li>
<li>Disabled：关闭。</li>
开启中国境内加速的域名，需要先[备案域名](/document/product/243/18905)。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 */
class ModifyVodDomainAccelerateConfigRequest extends AbstractModel
{
    /**
     * @var string 需要设置加速配置的域名。
     */
    public $Domain;

    /**
     * @var string 区域，可选值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland: 中国境外。</li>
<li>Global: 全球范围。</li>
     */
    public $Area;

    /**
     * @var string 开启或者关闭所选区域的域名加速，可选值：
<li>Enabled: 开启。</li>
<li>Disabled：关闭。</li>
开启中国境内加速的域名，需要先[备案域名](/document/product/243/18905)。
     */
    public $Status;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @param string $Domain 需要设置加速配置的域名。
     * @param string $Area 区域，可选值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland: 中国境外。</li>
<li>Global: 全球范围。</li>
     * @param string $Status 开启或者关闭所选区域的域名加速，可选值：
<li>Enabled: 开启。</li>
<li>Disabled：关闭。</li>
开启中国境内加速的域名，需要先[备案域名](/document/product/243/18905)。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
