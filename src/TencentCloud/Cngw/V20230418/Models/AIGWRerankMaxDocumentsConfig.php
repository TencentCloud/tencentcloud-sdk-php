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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 网关Rerank场景最大文档数限制配置
 *
 * @method boolean getEnableMaxDocuments() 获取<p>启用最大文档数限制</p>
 * @method void setEnableMaxDocuments(boolean $EnableMaxDocuments) 设置<p>启用最大文档数限制</p>
 * @method integer getMaxDocumentValue() 获取<p>Rerank场景最大文档数限制</p>
 * @method void setMaxDocumentValue(integer $MaxDocumentValue) 设置<p>Rerank场景最大文档数限制</p>
 */
class AIGWRerankMaxDocumentsConfig extends AbstractModel
{
    /**
     * @var boolean <p>启用最大文档数限制</p>
     */
    public $EnableMaxDocuments;

    /**
     * @var integer <p>Rerank场景最大文档数限制</p>
     */
    public $MaxDocumentValue;

    /**
     * @param boolean $EnableMaxDocuments <p>启用最大文档数限制</p>
     * @param integer $MaxDocumentValue <p>Rerank场景最大文档数限制</p>
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
        if (array_key_exists("EnableMaxDocuments",$param) and $param["EnableMaxDocuments"] !== null) {
            $this->EnableMaxDocuments = $param["EnableMaxDocuments"];
        }

        if (array_key_exists("MaxDocumentValue",$param) and $param["MaxDocumentValue"] !== null) {
            $this->MaxDocumentValue = $param["MaxDocumentValue"];
        }
    }
}
