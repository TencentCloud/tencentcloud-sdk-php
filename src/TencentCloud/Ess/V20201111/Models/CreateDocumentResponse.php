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
后续需用同样的FlowId再次调用[发起签署流程](https://qian.tencent.com/developers/companyApis/startFlows/StartFlow)，合同才能进入签署环节
 * @method void setDocumentId(string $DocumentId) 设置合同流程的底层电子文档ID，为32位字符串。

注:
后续需用同样的FlowId再次调用[发起签署流程](https://qian.tencent.com/developers/companyApis/startFlows/StartFlow)，合同才能进入签署环节
 * @method string getPreviewFileUrl() 获取合同预览链接URL。

注: `1.如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL`
`2.当使用的模板中存在动态表格控件时，预览结果中没有动态表格的填写内容,完整的预览链接需通过[合同文档合成完成回调](https://qian.tencent.com/developers/company/callback_types_contracts_sign/#%E4%B9%9D-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83)获取。
 * @method void setPreviewFileUrl(string $PreviewFileUrl) 设置合同预览链接URL。

注: `1.如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL`
`2.当使用的模板中存在动态表格控件时，预览结果中没有动态表格的填写内容,完整的预览链接需通过[合同文档合成完成回调](https://qian.tencent.com/developers/company/callback_types_contracts_sign/#%E4%B9%9D-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83)获取。
 * @method array getApprovers() 获取签署方信息，如角色ID、角色名称等
 * @method void setApprovers(array $Approvers) 设置签署方信息，如角色ID、角色名称等
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateDocumentResponse extends AbstractModel
{
    /**
     * @var string 合同流程的底层电子文档ID，为32位字符串。

注:
后续需用同样的FlowId再次调用[发起签署流程](https://qian.tencent.com/developers/companyApis/startFlows/StartFlow)，合同才能进入签署环节
     */
    public $DocumentId;

    /**
     * @var string 合同预览链接URL。

注: `1.如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL`
`2.当使用的模板中存在动态表格控件时，预览结果中没有动态表格的填写内容,完整的预览链接需通过[合同文档合成完成回调](https://qian.tencent.com/developers/company/callback_types_contracts_sign/#%E4%B9%9D-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83)获取。
     */
    public $PreviewFileUrl;

    /**
     * @var array 签署方信息，如角色ID、角色名称等
     */
    public $Approvers;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DocumentId 合同流程的底层电子文档ID，为32位字符串。

注:
后续需用同样的FlowId再次调用[发起签署流程](https://qian.tencent.com/developers/companyApis/startFlows/StartFlow)，合同才能进入签署环节
     * @param string $PreviewFileUrl 合同预览链接URL。

注: `1.如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL`
`2.当使用的模板中存在动态表格控件时，预览结果中没有动态表格的填写内容,完整的预览链接需通过[合同文档合成完成回调](https://qian.tencent.com/developers/company/callback_types_contracts_sign/#%E4%B9%9D-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83)获取。
     * @param array $Approvers 签署方信息，如角色ID、角色名称等
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new ApproverItem();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
