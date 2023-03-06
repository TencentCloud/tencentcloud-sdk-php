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
 * DescribeTemplates请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method string getTemplateId() 获取模板唯一标识，查询单个模板时使用
 * @method void setTemplateId(string $TemplateId) 设置模板唯一标识，查询单个模板时使用
 * @method integer getContentType() 获取查询内容：0-模板列表及详情（默认），1-仅模板列表
 * @method void setContentType(integer $ContentType) 设置查询内容：0-模板列表及详情（默认），1-仅模板列表
 * @method integer getLimit() 获取查询个数，默认20，最大100；在查询列表的时候有效
 * @method void setLimit(integer $Limit) 设置查询个数，默认20，最大100；在查询列表的时候有效
 * @method integer getOffset() 获取查询偏移位置，默认0；在查询列表的时候有效
 * @method void setOffset(integer $Offset) 设置查询偏移位置，默认0；在查询列表的时候有效
 * @method boolean getQueryAllComponents() 获取是否返回所有组件信息。默认false，只返回发起方控件；true，返回所有签署方控件
 * @method void setQueryAllComponents(boolean $QueryAllComponents) 设置是否返回所有组件信息。默认false，只返回发起方控件；true，返回所有签署方控件
 * @method string getTemplateName() 获取模糊搜索模板名称，最大长度200
 * @method void setTemplateName(string $TemplateName) 设置模糊搜索模板名称，最大长度200
 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 * @method boolean getWithPreviewUrl() 获取是否获取模板预览链接
 * @method void setWithPreviewUrl(boolean $WithPreviewUrl) 设置是否获取模板预览链接
 * @method boolean getWithPdfUrl() 获取是否获取模板的PDF文件链接- 第三方应用集成需要开启白名单时才能使用。
 * @method void setWithPdfUrl(boolean $WithPdfUrl) 设置是否获取模板的PDF文件链接- 第三方应用集成需要开启白名单时才能使用。
 * @method string getChannelTemplateId() 获取模板ID
 * @method void setChannelTemplateId(string $ChannelTemplateId) 设置模板ID
 */
class DescribeTemplatesRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     */
    public $Agent;

    /**
     * @var string 模板唯一标识，查询单个模板时使用
     */
    public $TemplateId;

    /**
     * @var integer 查询内容：0-模板列表及详情（默认），1-仅模板列表
     */
    public $ContentType;

    /**
     * @var integer 查询个数，默认20，最大100；在查询列表的时候有效
     */
    public $Limit;

    /**
     * @var integer 查询偏移位置，默认0；在查询列表的时候有效
     */
    public $Offset;

    /**
     * @var boolean 是否返回所有组件信息。默认false，只返回发起方控件；true，返回所有签署方控件
     */
    public $QueryAllComponents;

    /**
     * @var string 模糊搜索模板名称，最大长度200
     */
    public $TemplateName;

    /**
     * @var UserInfo 操作者的信息
     */
    public $Operator;

    /**
     * @var boolean 是否获取模板预览链接
     */
    public $WithPreviewUrl;

    /**
     * @var boolean 是否获取模板的PDF文件链接- 第三方应用集成需要开启白名单时才能使用。
     */
    public $WithPdfUrl;

    /**
     * @var string 模板ID
     */
    public $ChannelTemplateId;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     * @param string $TemplateId 模板唯一标识，查询单个模板时使用
     * @param integer $ContentType 查询内容：0-模板列表及详情（默认），1-仅模板列表
     * @param integer $Limit 查询个数，默认20，最大100；在查询列表的时候有效
     * @param integer $Offset 查询偏移位置，默认0；在查询列表的时候有效
     * @param boolean $QueryAllComponents 是否返回所有组件信息。默认false，只返回发起方控件；true，返回所有签署方控件
     * @param string $TemplateName 模糊搜索模板名称，最大长度200
     * @param UserInfo $Operator 操作者的信息
     * @param boolean $WithPreviewUrl 是否获取模板预览链接
     * @param boolean $WithPdfUrl 是否获取模板的PDF文件链接- 第三方应用集成需要开启白名单时才能使用。
     * @param string $ChannelTemplateId 模板ID
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("QueryAllComponents",$param) and $param["QueryAllComponents"] !== null) {
            $this->QueryAllComponents = $param["QueryAllComponents"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("WithPreviewUrl",$param) and $param["WithPreviewUrl"] !== null) {
            $this->WithPreviewUrl = $param["WithPreviewUrl"];
        }

        if (array_key_exists("WithPdfUrl",$param) and $param["WithPdfUrl"] !== null) {
            $this->WithPdfUrl = $param["WithPdfUrl"];
        }

        if (array_key_exists("ChannelTemplateId",$param) and $param["ChannelTemplateId"] !== null) {
            $this->ChannelTemplateId = $param["ChannelTemplateId"];
        }
    }
}
