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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetDrmKeyProviderInfo请求参数结构体
 *
 * @method SDMCDrmKeyProviderInfo getSDMCInfo() 获取华曦达（SDMC）相关的 DRM 密钥提供商信息。
 * @method void setSDMCInfo(SDMCDrmKeyProviderInfo $SDMCInfo) 设置华曦达（SDMC）相关的 DRM 密钥提供商信息。
 * @method integer getSubAppId() 获取<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 */
class SetDrmKeyProviderInfoRequest extends AbstractModel
{
    /**
     * @var SDMCDrmKeyProviderInfo 华曦达（SDMC）相关的 DRM 密钥提供商信息。
     */
    public $SDMCInfo;

    /**
     * @var integer <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

    /**
     * @param SDMCDrmKeyProviderInfo $SDMCInfo 华曦达（SDMC）相关的 DRM 密钥提供商信息。
     * @param integer $SubAppId <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
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
