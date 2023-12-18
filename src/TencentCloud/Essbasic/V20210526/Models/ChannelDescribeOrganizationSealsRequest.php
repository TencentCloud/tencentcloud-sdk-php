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
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
 * @method integer getLimit() 获取返回最大数量，最大为100
 * @method void setLimit(integer $Limit) 设置返回最大数量，最大为100
 * @method integer getOffset() 获取分页查询偏移量，默认为0，最大为20000
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，默认为0，最大为20000
 * @method integer getInfoType() 获取查询信息类型
支持的值如下：
<ul><li>0-默认，不返回授权用户信息</li>
<li>1-返回授权用户信息</li>
</ul>
 * @method void setInfoType(integer $InfoType) 设置查询信息类型
支持的值如下：
<ul><li>0-默认，不返回授权用户信息</li>
<li>1-返回授权用户信息</li>
</ul>
 * @method string getSealId() 获取印章id（没有输入返回所有）

注:  `没有输入返回所有记录，最大返回100条。`
 * @method void setSealId(string $SealId) 设置印章id（没有输入返回所有）

注:  `没有输入返回所有记录，最大返回100条。`
 * @method array getSealTypes() 获取电子印章类型 , 可选类型如下: 
<ul><li>**OFFICIAL**: (默认)公章</li>
<li>**CONTRACT**: 合同专用章;</li>
<li>**FINANCE**: 财务专用章;</li>
<li>**PERSONNEL**: 人事专用章</li>
<li>**INVOICE**: 发票专用章</li>
</ul>

注:  `为空时查询所有类型的印章。`
 * @method void setSealTypes(array $SealTypes) 设置电子印章类型 , 可选类型如下: 
<ul><li>**OFFICIAL**: (默认)公章</li>
<li>**CONTRACT**: 合同专用章;</li>
<li>**FINANCE**: 财务专用章;</li>
<li>**PERSONNEL**: 人事专用章</li>
<li>**INVOICE**: 发票专用章</li>
</ul>

注:  `为空时查询所有类型的印章。`
 */
class ChannelDescribeOrganizationSealsRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var integer 返回最大数量，最大为100
     */
    public $Limit;

    /**
     * @var integer 分页查询偏移量，默认为0，最大为20000
     */
    public $Offset;

    /**
     * @var integer 查询信息类型
支持的值如下：
<ul><li>0-默认，不返回授权用户信息</li>
<li>1-返回授权用户信息</li>
</ul>
     */
    public $InfoType;

    /**
     * @var string 印章id（没有输入返回所有）

注:  `没有输入返回所有记录，最大返回100条。`
     */
    public $SealId;

    /**
     * @var array 电子印章类型 , 可选类型如下: 
<ul><li>**OFFICIAL**: (默认)公章</li>
<li>**CONTRACT**: 合同专用章;</li>
<li>**FINANCE**: 财务专用章;</li>
<li>**PERSONNEL**: 人事专用章</li>
<li>**INVOICE**: 发票专用章</li>
</ul>

注:  `为空时查询所有类型的印章。`
     */
    public $SealTypes;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     * @param integer $Limit 返回最大数量，最大为100
     * @param integer $Offset 分页查询偏移量，默认为0，最大为20000
     * @param integer $InfoType 查询信息类型
支持的值如下：
<ul><li>0-默认，不返回授权用户信息</li>
<li>1-返回授权用户信息</li>
</ul>
     * @param string $SealId 印章id（没有输入返回所有）

注:  `没有输入返回所有记录，最大返回100条。`
     * @param array $SealTypes 电子印章类型 , 可选类型如下: 
<ul><li>**OFFICIAL**: (默认)公章</li>
<li>**CONTRACT**: 合同专用章;</li>
<li>**FINANCE**: 财务专用章;</li>
<li>**PERSONNEL**: 人事专用章</li>
<li>**INVOICE**: 发票专用章</li>
</ul>

注:  `为空时查询所有类型的印章。`
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
