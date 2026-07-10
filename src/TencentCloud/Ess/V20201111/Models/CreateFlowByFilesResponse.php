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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFlowByFiles返回参数结构体
 *
 * @method string getFlowId() 获取<p>合同流程ID，为32位字符串。<br>建议开发者妥善保存此流程ID，以便于顺利进行后续操作。</p><p>注: 如果是预览模式(即NeedPreview设置为true)时, 此处不会有值返回。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/0a83015166cfe1cb043d14f9ec4bd75e.png">点击查看FlowId在控制台中的位置</a></p>
 * @method void setFlowId(string $FlowId) 设置<p>合同流程ID，为32位字符串。<br>建议开发者妥善保存此流程ID，以便于顺利进行后续操作。</p><p>注: 如果是预览模式(即NeedPreview设置为true)时, 此处不会有值返回。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/0a83015166cfe1cb043d14f9ec4bd75e.png">点击查看FlowId在控制台中的位置</a></p>
 * @method string getPreviewUrl() 获取<p>合同预览链接URL。</p><p>注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL</p>
 * @method void setPreviewUrl(string $PreviewUrl) 设置<p>合同预览链接URL。</p><p>注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL</p>
 * @method array getApprovers() 获取<p>签署方信息，如角色ID、角色名称等</p>
 * @method void setApprovers(array $Approvers) 设置<p>签署方信息，如角色ID、角色名称等</p>
 * @method string getWorkflowInstanceId() 获取<p>发起审批流id，仅在CreateFlowByFiles时指定了WorkFlow=true时返回</p>
 * @method void setWorkflowInstanceId(string $WorkflowInstanceId) 设置<p>发起审批流id，仅在CreateFlowByFiles时指定了WorkFlow=true时返回</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateFlowByFilesResponse extends AbstractModel
{
    /**
     * @var string <p>合同流程ID，为32位字符串。<br>建议开发者妥善保存此流程ID，以便于顺利进行后续操作。</p><p>注: 如果是预览模式(即NeedPreview设置为true)时, 此处不会有值返回。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/0a83015166cfe1cb043d14f9ec4bd75e.png">点击查看FlowId在控制台中的位置</a></p>
     */
    public $FlowId;

    /**
     * @var string <p>合同预览链接URL。</p><p>注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL</p>
     */
    public $PreviewUrl;

    /**
     * @var array <p>签署方信息，如角色ID、角色名称等</p>
     */
    public $Approvers;

    /**
     * @var string <p>发起审批流id，仅在CreateFlowByFiles时指定了WorkFlow=true时返回</p>
     */
    public $WorkflowInstanceId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FlowId <p>合同流程ID，为32位字符串。<br>建议开发者妥善保存此流程ID，以便于顺利进行后续操作。</p><p>注: 如果是预览模式(即NeedPreview设置为true)时, 此处不会有值返回。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/0a83015166cfe1cb043d14f9ec4bd75e.png">点击查看FlowId在控制台中的位置</a></p>
     * @param string $PreviewUrl <p>合同预览链接URL。</p><p>注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL</p>
     * @param array $Approvers <p>签署方信息，如角色ID、角色名称等</p>
     * @param string $WorkflowInstanceId <p>发起审批流id，仅在CreateFlowByFiles时指定了WorkFlow=true时返回</p>
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new ApproverItem();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("WorkflowInstanceId",$param) and $param["WorkflowInstanceId"] !== null) {
            $this->WorkflowInstanceId = $param["WorkflowInstanceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
