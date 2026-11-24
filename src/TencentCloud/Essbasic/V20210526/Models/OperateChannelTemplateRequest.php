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
 * OperateChannelTemplate请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识: Agent.AppId</li></ul>
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识: Agent.AppId</li></ul>
 * @method string getOperateType() 获取<p>操作类型，可取值如下:</p><ul><li>SELECT:  查询</li><li>DELETE:  删除</li><li>UPDATE: 更新</li><li> DELETETEMPLATE: 删除指定的模板</li></ul>
 * @method void setOperateType(string $OperateType) 设置<p>操作类型，可取值如下:</p><ul><li>SELECT:  查询</li><li>DELETE:  删除</li><li>UPDATE: 更新</li><li> DELETETEMPLATE: 删除指定的模板</li></ul>
 * @method string getTemplateId() 获取<p>合同模板ID，为32位字符串。<br>注: <code>此处为第三方应用平台模板库模板ID，非子客模板ID</code></p>
 * @method void setTemplateId(string $TemplateId) 设置<p>合同模板ID，为32位字符串。<br>注: <code>此处为第三方应用平台模板库模板ID，非子客模板ID</code></p>
 * @method string getProxyOrganizationOpenIds() 获取<p>第三方平台子客企业的唯一标识，支持批量(用,分割)<br>一次批量操作最多支持100个第三方平台子客</p>
 * @method void setProxyOrganizationOpenIds(string $ProxyOrganizationOpenIds) 设置<p>第三方平台子客企业的唯一标识，支持批量(用,分割)<br>一次批量操作最多支持100个第三方平台子客</p>
 * @method string getAuthTag() 获取<p>模板可见范围, 可以设置的值如下:</p><p><strong>all</strong>: 所有本第三方应用合作企业可见<br><strong>part</strong>: 指定的本第三方应用合作企业</p><p>对应控制台的位置<br><img src="https://qcloudimg.tencent-cloud.cn/raw/68b97812c68d6af77a5991e3bff5c790.png" alt="image"></p>
 * @method void setAuthTag(string $AuthTag) 设置<p>模板可见范围, 可以设置的值如下:</p><p><strong>all</strong>: 所有本第三方应用合作企业可见<br><strong>part</strong>: 指定的本第三方应用合作企业</p><p>对应控制台的位置<br><img src="https://qcloudimg.tencent-cloud.cn/raw/68b97812c68d6af77a5991e3bff5c790.png" alt="image"></p>
 * @method integer getAvailable() 获取<p>当OperateType=UPDATE时，可以通过设置此字段对模板启停用状态进行操作。</p><ul><li>0: 不修改模板可用状态</li><li>1:  启用模板</li><li>2: 停用模板</li></ul>启用后模板可以正常领取。<p>停用后，推送方式为【自动推送】的模板则无法被子客使用，推送方式为【手动领取】的模板则无法出现被模板库被子客领用。<br>如果Available更新失败，会直接返回错误。</p>
 * @method void setAvailable(integer $Available) 设置<p>当OperateType=UPDATE时，可以通过设置此字段对模板启停用状态进行操作。</p><ul><li>0: 不修改模板可用状态</li><li>1:  启用模板</li><li>2: 停用模板</li></ul>启用后模板可以正常领取。<p>停用后，推送方式为【自动推送】的模板则无法被子客使用，推送方式为【手动领取】的模板则无法出现被模板库被子客领用。<br>如果Available更新失败，会直接返回错误。</p>
 * @method UserInfo getOperator() 获取<p>暂未开放</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>暂未开放</p>
 * @method integer getLimit() 获取<p>指定分页每页返回的数据条数，单页最大支持 100。<br>不传默认值为 20</p>
 * @method void setLimit(integer $Limit) 设置<p>指定分页每页返回的数据条数，单页最大支持 100。<br>不传默认值为 20</p>
 * @method integer getOffset() 获取<p>分页查询偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询偏移量，默认为0</p>
 */
class OperateChannelTemplateRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识: Agent.AppId</li></ul>
     */
    public $Agent;

    /**
     * @var string <p>操作类型，可取值如下:</p><ul><li>SELECT:  查询</li><li>DELETE:  删除</li><li>UPDATE: 更新</li><li> DELETETEMPLATE: 删除指定的模板</li></ul>
     */
    public $OperateType;

    /**
     * @var string <p>合同模板ID，为32位字符串。<br>注: <code>此处为第三方应用平台模板库模板ID，非子客模板ID</code></p>
     */
    public $TemplateId;

    /**
     * @var string <p>第三方平台子客企业的唯一标识，支持批量(用,分割)<br>一次批量操作最多支持100个第三方平台子客</p>
     */
    public $ProxyOrganizationOpenIds;

    /**
     * @var string <p>模板可见范围, 可以设置的值如下:</p><p><strong>all</strong>: 所有本第三方应用合作企业可见<br><strong>part</strong>: 指定的本第三方应用合作企业</p><p>对应控制台的位置<br><img src="https://qcloudimg.tencent-cloud.cn/raw/68b97812c68d6af77a5991e3bff5c790.png" alt="image"></p>
     */
    public $AuthTag;

    /**
     * @var integer <p>当OperateType=UPDATE时，可以通过设置此字段对模板启停用状态进行操作。</p><ul><li>0: 不修改模板可用状态</li><li>1:  启用模板</li><li>2: 停用模板</li></ul>启用后模板可以正常领取。<p>停用后，推送方式为【自动推送】的模板则无法被子客使用，推送方式为【手动领取】的模板则无法出现被模板库被子客领用。<br>如果Available更新失败，会直接返回错误。</p>
     */
    public $Available;

    /**
     * @var UserInfo <p>暂未开放</p>
     * @deprecated
     */
    public $Operator;

    /**
     * @var integer <p>指定分页每页返回的数据条数，单页最大支持 100。<br>不传默认值为 20</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页查询偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识: Agent.AppId</li></ul>
     * @param string $OperateType <p>操作类型，可取值如下:</p><ul><li>SELECT:  查询</li><li>DELETE:  删除</li><li>UPDATE: 更新</li><li> DELETETEMPLATE: 删除指定的模板</li></ul>
     * @param string $TemplateId <p>合同模板ID，为32位字符串。<br>注: <code>此处为第三方应用平台模板库模板ID，非子客模板ID</code></p>
     * @param string $ProxyOrganizationOpenIds <p>第三方平台子客企业的唯一标识，支持批量(用,分割)<br>一次批量操作最多支持100个第三方平台子客</p>
     * @param string $AuthTag <p>模板可见范围, 可以设置的值如下:</p><p><strong>all</strong>: 所有本第三方应用合作企业可见<br><strong>part</strong>: 指定的本第三方应用合作企业</p><p>对应控制台的位置<br><img src="https://qcloudimg.tencent-cloud.cn/raw/68b97812c68d6af77a5991e3bff5c790.png" alt="image"></p>
     * @param integer $Available <p>当OperateType=UPDATE时，可以通过设置此字段对模板启停用状态进行操作。</p><ul><li>0: 不修改模板可用状态</li><li>1:  启用模板</li><li>2: 停用模板</li></ul>启用后模板可以正常领取。<p>停用后，推送方式为【自动推送】的模板则无法被子客使用，推送方式为【手动领取】的模板则无法出现被模板库被子客领用。<br>如果Available更新失败，会直接返回错误。</p>
     * @param UserInfo $Operator <p>暂未开放</p>
     * @param integer $Limit <p>指定分页每页返回的数据条数，单页最大支持 100。<br>不传默认值为 20</p>
     * @param integer $Offset <p>分页查询偏移量，默认为0</p>
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

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
