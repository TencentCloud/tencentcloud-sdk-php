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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUserSAMLConfig请求参数结构体
 *
 * @method string getOperate() 获取修改的操作类型:enable:启用,disable:禁用,updateSAML:修改元数据文档
 * @method void setOperate(string $Operate) 设置修改的操作类型:enable:启用,disable:禁用,updateSAML:修改元数据文档
 * @method string getSAMLMetadataDocument() 获取元数据文档，需要base64 encode，仅当Operate为updateSAML时需要此参数
 * @method void setSAMLMetadataDocument(string $SAMLMetadataDocument) 设置元数据文档，需要base64 encode，仅当Operate为updateSAML时需要此参数
 * @method string getAuxiliaryDomain() 获取辅助域名
 * @method void setAuxiliaryDomain(string $AuxiliaryDomain) 设置辅助域名
 */
class UpdateUserSAMLConfigRequest extends AbstractModel
{
    /**
     * @var string 修改的操作类型:enable:启用,disable:禁用,updateSAML:修改元数据文档
     */
    public $Operate;

    /**
     * @var string 元数据文档，需要base64 encode，仅当Operate为updateSAML时需要此参数
     */
    public $SAMLMetadataDocument;

    /**
     * @var string 辅助域名
     */
    public $AuxiliaryDomain;

    /**
     * @param string $Operate 修改的操作类型:enable:启用,disable:禁用,updateSAML:修改元数据文档
     * @param string $SAMLMetadataDocument 元数据文档，需要base64 encode，仅当Operate为updateSAML时需要此参数
     * @param string $AuxiliaryDomain 辅助域名
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
        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("SAMLMetadataDocument",$param) and $param["SAMLMetadataDocument"] !== null) {
            $this->SAMLMetadataDocument = $param["SAMLMetadataDocument"];
        }

        if (array_key_exists("AuxiliaryDomain",$param) and $param["AuxiliaryDomain"] !== null) {
            $this->AuxiliaryDomain = $param["AuxiliaryDomain"];
        }
    }
}
