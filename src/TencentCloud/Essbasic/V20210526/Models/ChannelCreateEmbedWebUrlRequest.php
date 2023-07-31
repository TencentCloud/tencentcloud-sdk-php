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
 * ChannelCreateEmbedWebUrl请求参数结构体
 *
 * @method Agent getAgent() 获取渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
 * @method void setAgent(Agent $Agent) 设置渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
 * @method string getEmbedType() 获取要生成WEB嵌入界面的类型, 可以选择的值如下: 

- CREATE_SEAL: 生成创建印章的嵌入页面
- CREATE_TEMPLATE：生成创建模板的嵌入页面
- MODIFY_TEMPLATE：生成修改模板的嵌入页面
- PREVIEW_TEMPLATE：生成预览模板的嵌入页面
- PREVIEW_FLOW：生成预览合同文档的嵌入页面
- PREVIEW_FLOW_DETAIL：生成预览合同详情的嵌入页面
- PREVIEW_SEAL_LIST：生成预览印章列表的嵌入页面
- PREVIEW_SEAL_DETAIL：生成预览印章详情的嵌入页面
- EXTEND_SERVICE：生成扩展服务的嵌入页面
 * @method void setEmbedType(string $EmbedType) 设置要生成WEB嵌入界面的类型, 可以选择的值如下: 

- CREATE_SEAL: 生成创建印章的嵌入页面
- CREATE_TEMPLATE：生成创建模板的嵌入页面
- MODIFY_TEMPLATE：生成修改模板的嵌入页面
- PREVIEW_TEMPLATE：生成预览模板的嵌入页面
- PREVIEW_FLOW：生成预览合同文档的嵌入页面
- PREVIEW_FLOW_DETAIL：生成预览合同详情的嵌入页面
- PREVIEW_SEAL_LIST：生成预览印章列表的嵌入页面
- PREVIEW_SEAL_DETAIL：生成预览印章详情的嵌入页面
- EXTEND_SERVICE：生成扩展服务的嵌入页面
 * @method string getBusinessId() 获取WEB嵌入的业务资源ID

- 当EmbedType取值MODIFY_TEMPLATE，PREVIEW_TEMPLATE时需要填写模板id作为BusinessId
- 当EmbedType取值PREVIEW_FLOW，PREVIEW_FLOW_DETAIL时需要填写合同id作为BusinessId
- 当EmbedType取值PREVIEW_SEAL_DETAIL需要填写印章id作为BusinessId
 * @method void setBusinessId(string $BusinessId) 设置WEB嵌入的业务资源ID

- 当EmbedType取值MODIFY_TEMPLATE，PREVIEW_TEMPLATE时需要填写模板id作为BusinessId
- 当EmbedType取值PREVIEW_FLOW，PREVIEW_FLOW_DETAIL时需要填写合同id作为BusinessId
- 当EmbedType取值PREVIEW_SEAL_DETAIL需要填写印章id作为BusinessId
 * @method boolean getHiddenComponents() 获取是否隐藏控件，只有预览模板时生效
 * @method void setHiddenComponents(boolean $HiddenComponents) 设置是否隐藏控件，只有预览模板时生效
 * @method UserInfo getOperator() 获取渠道操作者信息
 * @method void setOperator(UserInfo $Operator) 设置渠道操作者信息
 */
class ChannelCreateEmbedWebUrlRequest extends AbstractModel
{
    /**
     * @var Agent 渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
     */
    public $Agent;

    /**
     * @var string 要生成WEB嵌入界面的类型, 可以选择的值如下: 

- CREATE_SEAL: 生成创建印章的嵌入页面
- CREATE_TEMPLATE：生成创建模板的嵌入页面
- MODIFY_TEMPLATE：生成修改模板的嵌入页面
- PREVIEW_TEMPLATE：生成预览模板的嵌入页面
- PREVIEW_FLOW：生成预览合同文档的嵌入页面
- PREVIEW_FLOW_DETAIL：生成预览合同详情的嵌入页面
- PREVIEW_SEAL_LIST：生成预览印章列表的嵌入页面
- PREVIEW_SEAL_DETAIL：生成预览印章详情的嵌入页面
- EXTEND_SERVICE：生成扩展服务的嵌入页面
     */
    public $EmbedType;

    /**
     * @var string WEB嵌入的业务资源ID

- 当EmbedType取值MODIFY_TEMPLATE，PREVIEW_TEMPLATE时需要填写模板id作为BusinessId
- 当EmbedType取值PREVIEW_FLOW，PREVIEW_FLOW_DETAIL时需要填写合同id作为BusinessId
- 当EmbedType取值PREVIEW_SEAL_DETAIL需要填写印章id作为BusinessId
     */
    public $BusinessId;

    /**
     * @var boolean 是否隐藏控件，只有预览模板时生效
     */
    public $HiddenComponents;

    /**
     * @var UserInfo 渠道操作者信息
     * @deprecated
     */
    public $Operator;

    /**
     * @param Agent $Agent 渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 必填。
     * @param string $EmbedType 要生成WEB嵌入界面的类型, 可以选择的值如下: 

- CREATE_SEAL: 生成创建印章的嵌入页面
- CREATE_TEMPLATE：生成创建模板的嵌入页面
- MODIFY_TEMPLATE：生成修改模板的嵌入页面
- PREVIEW_TEMPLATE：生成预览模板的嵌入页面
- PREVIEW_FLOW：生成预览合同文档的嵌入页面
- PREVIEW_FLOW_DETAIL：生成预览合同详情的嵌入页面
- PREVIEW_SEAL_LIST：生成预览印章列表的嵌入页面
- PREVIEW_SEAL_DETAIL：生成预览印章详情的嵌入页面
- EXTEND_SERVICE：生成扩展服务的嵌入页面
     * @param string $BusinessId WEB嵌入的业务资源ID

- 当EmbedType取值MODIFY_TEMPLATE，PREVIEW_TEMPLATE时需要填写模板id作为BusinessId
- 当EmbedType取值PREVIEW_FLOW，PREVIEW_FLOW_DETAIL时需要填写合同id作为BusinessId
- 当EmbedType取值PREVIEW_SEAL_DETAIL需要填写印章id作为BusinessId
     * @param boolean $HiddenComponents 是否隐藏控件，只有预览模板时生效
     * @param UserInfo $Operator 渠道操作者信息
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("EmbedType",$param) and $param["EmbedType"] !== null) {
            $this->EmbedType = $param["EmbedType"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("HiddenComponents",$param) and $param["HiddenComponents"] !== null) {
            $this->HiddenComponents = $param["HiddenComponents"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
