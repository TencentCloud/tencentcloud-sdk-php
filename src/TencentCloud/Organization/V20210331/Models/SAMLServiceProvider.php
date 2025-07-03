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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SAML服务提供商信息
 *
 * @method string getEntityId() 获取https://tencentcloudsso.com/saml/sp/z-sjw8ensa**
 * @method void setEntityId(string $EntityId) 设置https://tencentcloudsso.com/saml/sp/z-sjw8ensa**
 * @method string getZoneId() 获取空间ID。
 * @method void setZoneId(string $ZoneId) 设置空间ID。
 * @method string getEncodedMetadataDocument() 获取SP 元数据文档（Base64 编码）。
 * @method void setEncodedMetadataDocument(string $EncodedMetadataDocument) 设置SP 元数据文档（Base64 编码）。
 * @method string getAcsUrl() 获取SP 的 ACS URL。
 * @method void setAcsUrl(string $AcsUrl) 设置SP 的 ACS URL。
 */
class SAMLServiceProvider extends AbstractModel
{
    /**
     * @var string https://tencentcloudsso.com/saml/sp/z-sjw8ensa**
     */
    public $EntityId;

    /**
     * @var string 空间ID。
     */
    public $ZoneId;

    /**
     * @var string SP 元数据文档（Base64 编码）。
     */
    public $EncodedMetadataDocument;

    /**
     * @var string SP 的 ACS URL。
     */
    public $AcsUrl;

    /**
     * @param string $EntityId https://tencentcloudsso.com/saml/sp/z-sjw8ensa**
     * @param string $ZoneId 空间ID。
     * @param string $EncodedMetadataDocument SP 元数据文档（Base64 编码）。
     * @param string $AcsUrl SP 的 ACS URL。
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
        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("EncodedMetadataDocument",$param) and $param["EncodedMetadataDocument"] !== null) {
            $this->EncodedMetadataDocument = $param["EncodedMetadataDocument"];
        }

        if (array_key_exists("AcsUrl",$param) and $param["AcsUrl"] !== null) {
            $this->AcsUrl = $param["AcsUrl"];
        }
    }
}
