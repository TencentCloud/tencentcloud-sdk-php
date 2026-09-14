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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档链接
 *
 * @method string getCosUrl() 获取<p>COS 链接地址，可用作预览和下载</p>
 * @method void setCosUrl(string $CosUrl) 设置<p>COS 链接地址，可用作预览和下载</p>
 * @method DocExternalLink getExternalLink() 获取<p>外部链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalLink(DocExternalLink $ExternalLink) 设置<p>外部链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DocLink extends AbstractModel
{
    /**
     * @var string <p>COS 链接地址，可用作预览和下载</p>
     */
    public $CosUrl;

    /**
     * @var DocExternalLink <p>外部链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalLink;

    /**
     * @param string $CosUrl <p>COS 链接地址，可用作预览和下载</p>
     * @param DocExternalLink $ExternalLink <p>外部链接</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("ExternalLink",$param) and $param["ExternalLink"] !== null) {
            $this->ExternalLink = new DocExternalLink();
            $this->ExternalLink->deserialize($param["ExternalLink"]);
        }
    }
}
