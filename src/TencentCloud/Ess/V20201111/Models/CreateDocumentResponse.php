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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDocument返回参数结构体
 *
 * @method string getDocumentId() 获取合同流程的底层电子文档ID，为32位字符串。

注:
后续需用同样的FlowId再次调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/StartFlow" target="_blank">发起签署流程</a>，合同才能进入签署环节
 * @method void setDocumentId(string $DocumentId) 设置合同流程的底层电子文档ID，为32位字符串。

注:
后续需用同样的FlowId再次调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/StartFlow" target="_blank">发起签署流程</a>，合同才能进入签署环节
 * @method string getPreviewFileUrl() 获取合同预览链接URL。

注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreviewFileUrl(string $PreviewFileUrl) 设置合同预览链接URL。

注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateDocumentResponse extends AbstractModel
{
    /**
     * @var string 合同流程的底层电子文档ID，为32位字符串。

注:
后续需用同样的FlowId再次调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/StartFlow" target="_blank">发起签署流程</a>，合同才能进入签署环节
     */
    public $DocumentId;

    /**
     * @var string 合同预览链接URL。

注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreviewFileUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DocumentId 合同流程的底层电子文档ID，为32位字符串。

注:
后续需用同样的FlowId再次调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/StartFlow" target="_blank">发起签署流程</a>，合同才能进入签署环节
     * @param string $PreviewFileUrl 合同预览链接URL。

注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DocumentId",$param) and $param["DocumentId"] !== null) {
            $this->DocumentId = $param["DocumentId"];
        }

        if (array_key_exists("PreviewFileUrl",$param) and $param["PreviewFileUrl"] !== null) {
            $this->PreviewFileUrl = $param["PreviewFileUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
