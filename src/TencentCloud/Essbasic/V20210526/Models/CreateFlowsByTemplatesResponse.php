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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFlowsByTemplates返回参数结构体
 *
 * @method array getFlowIds() 获取<p>生成的合同流程ID数组，合同流程ID为32位字符串。<br>建议开发者妥善保存此流程ID数组，以便于顺利进行后续操作。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/05af26573d5106763b4cfbb9f7c64b41.png">点击产看FlowId在控制台上的位置</a></p>
 * @method void setFlowIds(array $FlowIds) 设置<p>生成的合同流程ID数组，合同流程ID为32位字符串。<br>建议开发者妥善保存此流程ID数组，以便于顺利进行后续操作。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/05af26573d5106763b4cfbb9f7c64b41.png">点击产看FlowId在控制台上的位置</a></p>
 * @method array getCustomerData() 获取<p>第三方应用平台的业务信息, 与创建合同的FlowInfos数组中的CustomerData一一对应</p>
 * @method void setCustomerData(array $CustomerData) 设置<p>第三方应用平台的业务信息, 与创建合同的FlowInfos数组中的CustomerData一一对应</p>
 * @method array getErrorMessages() 获取<p>创建消息，对应多个合同ID，<br>成功为“”,创建失败则对应失败消息</p>
 * @method void setErrorMessages(array $ErrorMessages) 设置<p>创建消息，对应多个合同ID，<br>成功为“”,创建失败则对应失败消息</p>
 * @method array getPreviewUrls() 获取<p>合同预览链接URL数组。</p><p>注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL<br>如果预览的文件中指定了动态表格控件，此时此接口返回的是合成前的文档预览链接，合成完成后的文档预览链接需要通过<a href="https://qian.tencent.com/developers/partner/callback_types_contracts_sign#%E5%8D%81%E4%B8%80-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83">合同文档合成完成回调</a>获取或使用返回的TaskInfo中的TaskId通过<a href="https://qian.tencent.com/developers/partnerApis/files/ChannelGetTaskResultApi">查询转换任务状态</a>接口查询得到</p>
 * @method void setPreviewUrls(array $PreviewUrls) 设置<p>合同预览链接URL数组。</p><p>注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL<br>如果预览的文件中指定了动态表格控件，此时此接口返回的是合成前的文档预览链接，合成完成后的文档预览链接需要通过<a href="https://qian.tencent.com/developers/partner/callback_types_contracts_sign#%E5%8D%81%E4%B8%80-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83">合同文档合成完成回调</a>获取或使用返回的TaskInfo中的TaskId通过<a href="https://qian.tencent.com/developers/partnerApis/files/ChannelGetTaskResultApi">查询转换任务状态</a>接口查询得到</p>
 * @method array getTaskInfos() 获取<p>复杂文档合成任务（如，包含动态表格的预览任务）的任务信息数组；<br>如果文档需要异步合成，此字段会返回该异步任务的任务信息，后续可以通过ChannelGetTaskResultApi接口查询任务详情；</p>
 * @method void setTaskInfos(array $TaskInfos) 设置<p>复杂文档合成任务（如，包含动态表格的预览任务）的任务信息数组；<br>如果文档需要异步合成，此字段会返回该异步任务的任务信息，后续可以通过ChannelGetTaskResultApi接口查询任务详情；</p>
 * @method array getFlowApprovers() 获取<p>签署方信息，如角色ID、角色名称等</p>
 * @method void setFlowApprovers(array $FlowApprovers) 设置<p>签署方信息，如角色ID、角色名称等</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateFlowsByTemplatesResponse extends AbstractModel
{
    /**
     * @var array <p>生成的合同流程ID数组，合同流程ID为32位字符串。<br>建议开发者妥善保存此流程ID数组，以便于顺利进行后续操作。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/05af26573d5106763b4cfbb9f7c64b41.png">点击产看FlowId在控制台上的位置</a></p>
     */
    public $FlowIds;

    /**
     * @var array <p>第三方应用平台的业务信息, 与创建合同的FlowInfos数组中的CustomerData一一对应</p>
     */
    public $CustomerData;

    /**
     * @var array <p>创建消息，对应多个合同ID，<br>成功为“”,创建失败则对应失败消息</p>
     */
    public $ErrorMessages;

    /**
     * @var array <p>合同预览链接URL数组。</p><p>注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL<br>如果预览的文件中指定了动态表格控件，此时此接口返回的是合成前的文档预览链接，合成完成后的文档预览链接需要通过<a href="https://qian.tencent.com/developers/partner/callback_types_contracts_sign#%E5%8D%81%E4%B8%80-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83">合同文档合成完成回调</a>获取或使用返回的TaskInfo中的TaskId通过<a href="https://qian.tencent.com/developers/partnerApis/files/ChannelGetTaskResultApi">查询转换任务状态</a>接口查询得到</p>
     */
    public $PreviewUrls;

    /**
     * @var array <p>复杂文档合成任务（如，包含动态表格的预览任务）的任务信息数组；<br>如果文档需要异步合成，此字段会返回该异步任务的任务信息，后续可以通过ChannelGetTaskResultApi接口查询任务详情；</p>
     */
    public $TaskInfos;

    /**
     * @var array <p>签署方信息，如角色ID、角色名称等</p>
     */
    public $FlowApprovers;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FlowIds <p>生成的合同流程ID数组，合同流程ID为32位字符串。<br>建议开发者妥善保存此流程ID数组，以便于顺利进行后续操作。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/05af26573d5106763b4cfbb9f7c64b41.png">点击产看FlowId在控制台上的位置</a></p>
     * @param array $CustomerData <p>第三方应用平台的业务信息, 与创建合同的FlowInfos数组中的CustomerData一一对应</p>
     * @param array $ErrorMessages <p>创建消息，对应多个合同ID，<br>成功为“”,创建失败则对应失败消息</p>
     * @param array $PreviewUrls <p>合同预览链接URL数组。</p><p>注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL<br>如果预览的文件中指定了动态表格控件，此时此接口返回的是合成前的文档预览链接，合成完成后的文档预览链接需要通过<a href="https://qian.tencent.com/developers/partner/callback_types_contracts_sign#%E5%8D%81%E4%B8%80-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83">合同文档合成完成回调</a>获取或使用返回的TaskInfo中的TaskId通过<a href="https://qian.tencent.com/developers/partnerApis/files/ChannelGetTaskResultApi">查询转换任务状态</a>接口查询得到</p>
     * @param array $TaskInfos <p>复杂文档合成任务（如，包含动态表格的预览任务）的任务信息数组；<br>如果文档需要异步合成，此字段会返回该异步任务的任务信息，后续可以通过ChannelGetTaskResultApi接口查询任务详情；</p>
     * @param array $FlowApprovers <p>签署方信息，如角色ID、角色名称等</p>
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
        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("CustomerData",$param) and $param["CustomerData"] !== null) {
            $this->CustomerData = $param["CustomerData"];
        }

        if (array_key_exists("ErrorMessages",$param) and $param["ErrorMessages"] !== null) {
            $this->ErrorMessages = $param["ErrorMessages"];
        }

        if (array_key_exists("PreviewUrls",$param) and $param["PreviewUrls"] !== null) {
            $this->PreviewUrls = $param["PreviewUrls"];
        }

        if (array_key_exists("TaskInfos",$param) and $param["TaskInfos"] !== null) {
            $this->TaskInfos = [];
            foreach ($param["TaskInfos"] as $key => $value){
                $obj = new TaskInfo();
                $obj->deserialize($value);
                array_push($this->TaskInfos, $obj);
            }
        }

        if (array_key_exists("FlowApprovers",$param) and $param["FlowApprovers"] !== null) {
            $this->FlowApprovers = [];
            foreach ($param["FlowApprovers"] as $key => $value){
                $obj = new FlowApproverItem();
                $obj->deserialize($value);
                array_push($this->FlowApprovers, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
