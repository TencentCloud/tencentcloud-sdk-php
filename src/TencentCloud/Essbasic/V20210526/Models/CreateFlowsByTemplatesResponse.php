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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFlowsByTemplates返回参数结构体
 *
 * @method array getFlowIds() 获取多个合同ID
 * @method void setFlowIds(array $FlowIds) 设置多个合同ID
 * @method array getCustomerData() 获取渠道的业务信息，限制1024字符
 * @method void setCustomerData(array $CustomerData) 设置渠道的业务信息，限制1024字符
 * @method array getErrorMessages() 获取创建消息，对应多个合同ID，
成功为“”,创建失败则对应失败消息
 * @method void setErrorMessages(array $ErrorMessages) 设置创建消息，对应多个合同ID，
成功为“”,创建失败则对应失败消息
 * @method array getPreviewUrls() 获取预览模式下返回的预览文件url数组
 * @method void setPreviewUrls(array $PreviewUrls) 设置预览模式下返回的预览文件url数组
 * @method array getTaskInfos() 获取复杂文档合成任务的任务信息数组
 * @method void setTaskInfos(array $TaskInfos) 设置复杂文档合成任务的任务信息数组
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateFlowsByTemplatesResponse extends AbstractModel
{
    /**
     * @var array 多个合同ID
     */
    public $FlowIds;

    /**
     * @var array 渠道的业务信息，限制1024字符
     */
    public $CustomerData;

    /**
     * @var array 创建消息，对应多个合同ID，
成功为“”,创建失败则对应失败消息
     */
    public $ErrorMessages;

    /**
     * @var array 预览模式下返回的预览文件url数组
     */
    public $PreviewUrls;

    /**
     * @var array 复杂文档合成任务的任务信息数组
     */
    public $TaskInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FlowIds 多个合同ID
     * @param array $CustomerData 渠道的业务信息，限制1024字符
     * @param array $ErrorMessages 创建消息，对应多个合同ID，
成功为“”,创建失败则对应失败消息
     * @param array $PreviewUrls 预览模式下返回的预览文件url数组
     * @param array $TaskInfos 复杂文档合成任务的任务信息数组
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
