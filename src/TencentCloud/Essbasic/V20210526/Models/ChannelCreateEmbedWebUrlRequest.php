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
 * @method string getEmbedType() 获取WEB嵌入资源类型，取值范围：CREATE_SEAL创建印章，CREATE_TEMPLATE创建模板，MODIFY_TEMPLATE修改模板，PREVIEW_TEMPLATE预览模板，PREVIEW_FLOW预览流程
 * @method void setEmbedType(string $EmbedType) 设置WEB嵌入资源类型，取值范围：CREATE_SEAL创建印章，CREATE_TEMPLATE创建模板，MODIFY_TEMPLATE修改模板，PREVIEW_TEMPLATE预览模板，PREVIEW_FLOW预览流程
 * @method Agent getAgent() 获取渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
 * @method void setAgent(Agent $Agent) 设置渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
 * @method UserInfo getOperator() 获取渠道操作者信息
 * @method void setOperator(UserInfo $Operator) 设置渠道操作者信息
 * @method string getBusinessId() 获取WEB嵌入的业务资源ID，EmbedType取值MODIFY_TEMPLATE或PREVIEW_TEMPLATE或 PREVIEW_FLOW时BusinessId必填
 * @method void setBusinessId(string $BusinessId) 设置WEB嵌入的业务资源ID，EmbedType取值MODIFY_TEMPLATE或PREVIEW_TEMPLATE或 PREVIEW_FLOW时BusinessId必填
 * @method boolean getHiddenComponents() 获取是否隐藏控件，只有预览模板时生效
 * @method void setHiddenComponents(boolean $HiddenComponents) 设置是否隐藏控件，只有预览模板时生效
 */
class ChannelCreateEmbedWebUrlRequest extends AbstractModel
{
    /**
     * @var string WEB嵌入资源类型，取值范围：CREATE_SEAL创建印章，CREATE_TEMPLATE创建模板，MODIFY_TEMPLATE修改模板，PREVIEW_TEMPLATE预览模板，PREVIEW_FLOW预览流程
     */
    public $EmbedType;

    /**
     * @var Agent 渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
     */
    public $Agent;

    /**
     * @var UserInfo 渠道操作者信息
     */
    public $Operator;

    /**
     * @var string WEB嵌入的业务资源ID，EmbedType取值MODIFY_TEMPLATE或PREVIEW_TEMPLATE或 PREVIEW_FLOW时BusinessId必填
     */
    public $BusinessId;

    /**
     * @var boolean 是否隐藏控件，只有预览模板时生效
     */
    public $HiddenComponents;

    /**
     * @param string $EmbedType WEB嵌入资源类型，取值范围：CREATE_SEAL创建印章，CREATE_TEMPLATE创建模板，MODIFY_TEMPLATE修改模板，PREVIEW_TEMPLATE预览模板，PREVIEW_FLOW预览流程
     * @param Agent $Agent 渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
     * @param UserInfo $Operator 渠道操作者信息
     * @param string $BusinessId WEB嵌入的业务资源ID，EmbedType取值MODIFY_TEMPLATE或PREVIEW_TEMPLATE或 PREVIEW_FLOW时BusinessId必填
     * @param boolean $HiddenComponents 是否隐藏控件，只有预览模板时生效
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
        if (array_key_exists("EmbedType",$param) and $param["EmbedType"] !== null) {
            $this->EmbedType = $param["EmbedType"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("HiddenComponents",$param) and $param["HiddenComponents"] !== null) {
            $this->HiddenComponents = $param["HiddenComponents"];
        }
    }
}
