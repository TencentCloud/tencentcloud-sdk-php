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
 * CreateVodDomain请求参数结构体
 *
 * @method string getDomain() 获取需要接入点播的加速域名。注意：不支持填写泛域名。
 * @method void setDomain(string $Domain) 设置需要接入点播的加速域名。注意：不支持填写泛域名。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getAccelerateArea() 获取需要开启 CDN 加速的区域：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland: 中国境外。</li>
<li>Global: 全球范围。</li>
如果没有设置 AccelerateArea， 点播会根据用户在腾讯云设置的地域信息自动开通中国境内或者中国境外的 CDN 加速。开启中国境内加速的域名，需要先[备案域名](/document/product/243/18905)。
 * @method void setAccelerateArea(string $AccelerateArea) 设置需要开启 CDN 加速的区域：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland: 中国境外。</li>
<li>Global: 全球范围。</li>
如果没有设置 AccelerateArea， 点播会根据用户在腾讯云设置的地域信息自动开通中国境内或者中国境外的 CDN 加速。开启中国境内加速的域名，需要先[备案域名](/document/product/243/18905)。
 * @method string getType() 获取域名类型，取值有： <li>VOD：使用 VOD 产品分发的域名；</li> <li>EdgeOne：使用 EdgeOne 产品分发的域名。</li>不填默认取值为 VOD 。
 * @method void setType(string $Type) 设置域名类型，取值有： <li>VOD：使用 VOD 产品分发的域名；</li> <li>EdgeOne：使用 EdgeOne 产品分发的域名。</li>不填默认取值为 VOD 。
 */
class CreateVodDomainRequest extends AbstractModel
{
    /**
     * @var string 需要接入点播的加速域名。注意：不支持填写泛域名。
     */
    public $Domain;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 需要开启 CDN 加速的区域：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland: 中国境外。</li>
<li>Global: 全球范围。</li>
如果没有设置 AccelerateArea， 点播会根据用户在腾讯云设置的地域信息自动开通中国境内或者中国境外的 CDN 加速。开启中国境内加速的域名，需要先[备案域名](/document/product/243/18905)。
     */
    public $AccelerateArea;

    /**
     * @var string 域名类型，取值有： <li>VOD：使用 VOD 产品分发的域名；</li> <li>EdgeOne：使用 EdgeOne 产品分发的域名。</li>不填默认取值为 VOD 。
     */
    public $Type;

    /**
     * @param string $Domain 需要接入点播的加速域名。注意：不支持填写泛域名。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $AccelerateArea 需要开启 CDN 加速的区域：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland: 中国境外。</li>
<li>Global: 全球范围。</li>
如果没有设置 AccelerateArea， 点播会根据用户在腾讯云设置的地域信息自动开通中国境内或者中国境外的 CDN 加速。开启中国境内加速的域名，需要先[备案域名](/document/product/243/18905)。
     * @param string $Type 域名类型，取值有： <li>VOD：使用 VOD 产品分发的域名；</li> <li>EdgeOne：使用 EdgeOne 产品分发的域名。</li>不填默认取值为 VOD 。
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("AccelerateArea",$param) and $param["AccelerateArea"] !== null) {
            $this->AccelerateArea = $param["AccelerateArea"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
