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
 * @method array getFlowIds() 获取生成的合同流程ID数组，合同流程ID为32位字符串。
建议开发者妥善保存此流程ID数组，以便于顺利进行后续操作。

[点击产看FlowId在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/05af26573d5106763b4cfbb9f7c64b41.png)
 * @method void setFlowIds(array $FlowIds) 设置生成的合同流程ID数组，合同流程ID为32位字符串。
建议开发者妥善保存此流程ID数组，以便于顺利进行后续操作。

[点击产看FlowId在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/05af26573d5106763b4cfbb9f7c64b41.png)
 * @method array getCustomerData() 获取第三方应用平台的业务信息, 与创建合同的FlowInfos数组中的CustomerData一一对应
 * @method void setCustomerData(array $CustomerData) 设置第三方应用平台的业务信息, 与创建合同的FlowInfos数组中的CustomerData一一对应
 * @method array getErrorMessages() 获取创建消息，对应多个合同ID，
成功为“”,创建失败则对应失败消息
 * @method void setErrorMessages(array $ErrorMessages) 设置创建消息，对应多个合同ID，
成功为“”,创建失败则对应失败消息
 * @method array getPreviewUrls() 获取合同预览链接URL数组。

注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL
如果预览的文件中指定了动态表格控件，此时此接口返回的是合成前的文档预览链接，合成完成后的文档预览链接需要通过[合同文档合成完成回调](https://qian.tencent.com/developers/partner/callback_types_contracts_sign#%E5%8D%81%E4%B8%80-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83)获取或使用返回的TaskInfo中的TaskId通过[查询转换任务状态
](https://qian.tencent.com/developers/partnerApis/files/ChannelGetTaskResultApi)接口查询得到
 * @method void setPreviewUrls(array $PreviewUrls) 设置合同预览链接URL数组。

注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL
如果预览的文件中指定了动态表格控件，此时此接口返回的是合成前的文档预览链接，合成完成后的文档预览链接需要通过[合同文档合成完成回调](https://qian.tencent.com/developers/partner/callback_types_contracts_sign#%E5%8D%81%E4%B8%80-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83)获取或使用返回的TaskInfo中的TaskId通过[查询转换任务状态
](https://qian.tencent.com/developers/partnerApis/files/ChannelGetTaskResultApi)接口查询得到
 * @method array getTaskInfos() 获取复杂文档合成任务（如，包含动态表格的预览任务）的任务信息数组；
如果文档需要异步合成，此字段会返回该异步任务的任务信息，后续可以通过ChannelGetTaskResultApi接口查询任务详情；
 * @method void setTaskInfos(array $TaskInfos) 设置复杂文档合成任务（如，包含动态表格的预览任务）的任务信息数组；
如果文档需要异步合成，此字段会返回该异步任务的任务信息，后续可以通过ChannelGetTaskResultApi接口查询任务详情；
 * @method array getFlowApprovers() 获取签署方信息，如角色ID、角色名称等
 * @method void setFlowApprovers(array $FlowApprovers) 设置签署方信息，如角色ID、角色名称等
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateFlowsByTemplatesResponse extends AbstractModel
{
    /**
     * @var array 生成的合同流程ID数组，合同流程ID为32位字符串。
建议开发者妥善保存此流程ID数组，以便于顺利进行后续操作。

[点击产看FlowId在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/05af26573d5106763b4cfbb9f7c64b41.png)
     */
    public $FlowIds;

    /**
     * @var array 第三方应用平台的业务信息, 与创建合同的FlowInfos数组中的CustomerData一一对应
     */
    public $CustomerData;

    /**
     * @var array 创建消息，对应多个合同ID，
成功为“”,创建失败则对应失败消息
     */
    public $ErrorMessages;

    /**
     * @var array 合同预览链接URL数组。

注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL
如果预览的文件中指定了动态表格控件，此时此接口返回的是合成前的文档预览链接，合成完成后的文档预览链接需要通过[合同文档合成完成回调](https://qian.tencent.com/developers/partner/callback_types_contracts_sign#%E5%8D%81%E4%B8%80-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83)获取或使用返回的TaskInfo中的TaskId通过[查询转换任务状态
](https://qian.tencent.com/developers/partnerApis/files/ChannelGetTaskResultApi)接口查询得到
     */
    public $PreviewUrls;

    /**
     * @var array 复杂文档合成任务（如，包含动态表格的预览任务）的任务信息数组；
如果文档需要异步合成，此字段会返回该异步任务的任务信息，后续可以通过ChannelGetTaskResultApi接口查询任务详情；
     */
    public $TaskInfos;

    /**
     * @var array 签署方信息，如角色ID、角色名称等
     */
    public $FlowApprovers;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FlowIds 生成的合同流程ID数组，合同流程ID为32位字符串。
建议开发者妥善保存此流程ID数组，以便于顺利进行后续操作。

[点击产看FlowId在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/05af26573d5106763b4cfbb9f7c64b41.png)
     * @param array $CustomerData 第三方应用平台的业务信息, 与创建合同的FlowInfos数组中的CustomerData一一对应
     * @param array $ErrorMessages 创建消息，对应多个合同ID，
成功为“”,创建失败则对应失败消息
     * @param array $PreviewUrls 合同预览链接URL数组。

注：如果是预览模式(即NeedPreview设置为true)时, 才会有此预览链接URL
如果预览的文件中指定了动态表格控件，此时此接口返回的是合成前的文档预览链接，合成完成后的文档预览链接需要通过[合同文档合成完成回调](https://qian.tencent.com/developers/partner/callback_types_contracts_sign#%E5%8D%81%E4%B8%80-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83)获取或使用返回的TaskInfo中的TaskId通过[查询转换任务状态
](https://qian.tencent.com/developers/partnerApis/files/ChannelGetTaskResultApi)接口查询得到
     * @param array $TaskInfos 复杂文档合成任务（如，包含动态表格的预览任务）的任务信息数组；
如果文档需要异步合成，此字段会返回该异步任务的任务信息，后续可以通过ChannelGetTaskResultApi接口查询任务详情；
     * @param array $FlowApprovers 签署方信息，如角色ID、角色名称等
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
