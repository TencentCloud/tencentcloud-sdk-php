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
 * ChannelDescribeOrganizationSeals请求参数结构体
 *
 * @method Agent getAgent() 获取渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method void setAgent(Agent $Agent) 设置渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method integer getLimit() 获取返回最大数量，最大为100
 * @method void setLimit(integer $Limit) 设置返回最大数量，最大为100
 * @method integer getOffset() 获取偏移量，默认为0，最大为20000
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0，最大为20000
 * @method integer getInfoType() 获取查询信息类型，为1时返回授权用户，为其他值时不返回
 * @method void setInfoType(integer $InfoType) 设置查询信息类型，为1时返回授权用户，为其他值时不返回
 * @method string getSealId() 获取印章id（没有输入返回所有）
 * @method void setSealId(string $SealId) 设置印章id（没有输入返回所有）
 * @method array getSealTypes() 获取印章类型列表（都是组织机构印章）。
为空时查询所有类型的印章。
目前支持以下类型：
OFFICIAL：企业公章；
CONTRACT：合同专用章；
ORGANIZATION_SEAL：企业印章(图片上传创建)；
LEGAL_PERSON_SEAL：法定代表人章
 * @method void setSealTypes(array $SealTypes) 设置印章类型列表（都是组织机构印章）。
为空时查询所有类型的印章。
目前支持以下类型：
OFFICIAL：企业公章；
CONTRACT：合同专用章；
ORGANIZATION_SEAL：企业印章(图片上传创建)；
LEGAL_PERSON_SEAL：法定代表人章
 */
class ChannelDescribeOrganizationSealsRequest extends AbstractModel
{
    /**
     * @var Agent 渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     */
    public $Agent;

    /**
     * @var integer 返回最大数量，最大为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0，最大为20000
     */
    public $Offset;

    /**
     * @var integer 查询信息类型，为1时返回授权用户，为其他值时不返回
     */
    public $InfoType;

    /**
     * @var string 印章id（没有输入返回所有）
     */
    public $SealId;

    /**
     * @var array 印章类型列表（都是组织机构印章）。
为空时查询所有类型的印章。
目前支持以下类型：
OFFICIAL：企业公章；
CONTRACT：合同专用章；
ORGANIZATION_SEAL：企业印章(图片上传创建)；
LEGAL_PERSON_SEAL：法定代表人章
     */
    public $SealTypes;

    /**
     * @param Agent $Agent 渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     * @param integer $Limit 返回最大数量，最大为100
     * @param integer $Offset 偏移量，默认为0，最大为20000
     * @param integer $InfoType 查询信息类型，为1时返回授权用户，为其他值时不返回
     * @param string $SealId 印章id（没有输入返回所有）
     * @param array $SealTypes 印章类型列表（都是组织机构印章）。
为空时查询所有类型的印章。
目前支持以下类型：
OFFICIAL：企业公章；
CONTRACT：合同专用章；
ORGANIZATION_SEAL：企业印章(图片上传创建)；
LEGAL_PERSON_SEAL：法定代表人章
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InfoType",$param) and $param["InfoType"] !== null) {
            $this->InfoType = $param["InfoType"];
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("SealTypes",$param) and $param["SealTypes"] !== null) {
            $this->SealTypes = $param["SealTypes"];
        }
    }
}
