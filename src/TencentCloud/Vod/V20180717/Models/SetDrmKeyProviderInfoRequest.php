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
 * SetDrmKeyProviderInfo请求参数结构体
 *
 * @method SDMCDrmKeyProviderInfo getSDMCInfo() 获取<p>华曦达（SDMC）相关的 DRM 密钥提供商信息。</p><p>华曦达服务后续逐步下线，请使用VOD DRM加密服务。</p>
 * @method void setSDMCInfo(SDMCDrmKeyProviderInfo $SDMCInfo) 设置<p>华曦达（SDMC）相关的 DRM 密钥提供商信息。</p><p>华曦达服务后续逐步下线，请使用VOD DRM加密服务。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 */
class SetDrmKeyProviderInfoRequest extends AbstractModel
{
    /**
     * @var SDMCDrmKeyProviderInfo <p>华曦达（SDMC）相关的 DRM 密钥提供商信息。</p><p>华曦达服务后续逐步下线，请使用VOD DRM加密服务。</p>
     */
    public $SDMCInfo;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @param SDMCDrmKeyProviderInfo $SDMCInfo <p>华曦达（SDMC）相关的 DRM 密钥提供商信息。</p><p>华曦达服务后续逐步下线，请使用VOD DRM加密服务。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
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
        if (array_key_exists("SDMCInfo",$param) and $param["SDMCInfo"] !== null) {
            $this->SDMCInfo = new SDMCDrmKeyProviderInfo();
            $this->SDMCInfo->deserialize($param["SDMCInfo"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
