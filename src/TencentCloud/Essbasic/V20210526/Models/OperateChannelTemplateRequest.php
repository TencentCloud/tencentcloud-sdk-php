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
 * OperateChannelTemplate请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method string getOperateType() 获取操作类型，查询:"SELECT"，删除:"DELETE"，更新:"UPDATE"
 * @method void setOperateType(string $OperateType) 设置操作类型，查询:"SELECT"，删除:"DELETE"，更新:"UPDATE"
 * @method string getTemplateId() 获取第三方应用平台模板库模板唯一标识
 * @method void setTemplateId(string $TemplateId) 设置第三方应用平台模板库模板唯一标识
 * @method string getProxyOrganizationOpenIds() 获取合作企业方第三方机构唯一标识数据，支持多个， 用","进行分隔
 * @method void setProxyOrganizationOpenIds(string $ProxyOrganizationOpenIds) 设置合作企业方第三方机构唯一标识数据，支持多个， 用","进行分隔
 * @method string getAuthTag() 获取模板可见性, 全部可见-"all", 部分可见-"part"
 * @method void setAuthTag(string $AuthTag) 设置模板可见性, 全部可见-"all", 部分可见-"part"
 * @method UserInfo getOperator() 获取暂未开放
 * @method void setOperator(UserInfo $Operator) 设置暂未开放
 */
class OperateChannelTemplateRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     */
    public $Agent;

    /**
     * @var string 操作类型，查询:"SELECT"，删除:"DELETE"，更新:"UPDATE"
     */
    public $OperateType;

    /**
     * @var string 第三方应用平台模板库模板唯一标识
     */
    public $TemplateId;

    /**
     * @var string 合作企业方第三方机构唯一标识数据，支持多个， 用","进行分隔
     */
    public $ProxyOrganizationOpenIds;

    /**
     * @var string 模板可见性, 全部可见-"all", 部分可见-"part"
     */
    public $AuthTag;

    /**
     * @var UserInfo 暂未开放
     */
    public $Operator;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     * @param string $OperateType 操作类型，查询:"SELECT"，删除:"DELETE"，更新:"UPDATE"
     * @param string $TemplateId 第三方应用平台模板库模板唯一标识
     * @param string $ProxyOrganizationOpenIds 合作企业方第三方机构唯一标识数据，支持多个， 用","进行分隔
     * @param string $AuthTag 模板可见性, 全部可见-"all", 部分可见-"part"
     * @param UserInfo $Operator 暂未开放
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

        if (array_key_exists("OperateType",$param) and $param["OperateType"] !== null) {
            $this->OperateType = $param["OperateType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ProxyOrganizationOpenIds",$param) and $param["ProxyOrganizationOpenIds"] !== null) {
            $this->ProxyOrganizationOpenIds = $param["ProxyOrganizationOpenIds"];
        }

        if (array_key_exists("AuthTag",$param) and $param["AuthTag"] !== null) {
            $this->AuthTag = $param["AuthTag"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
