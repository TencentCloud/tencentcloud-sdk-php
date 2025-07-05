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
 * ChannelCreateFlowGroupByTemplates请求参数结构体
 *
 * @method Agent getAgent() 获取合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a>

此接口下面信息必填。
<ul>
<li>渠道应用标识:  <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li>
</ul>

合同的发起企业和发起人必需已经完成实名，并加入企业
 * @method void setAgent(Agent $Agent) 设置合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a>

此接口下面信息必填。
<ul>
<li>渠道应用标识:  <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li>
</ul>

合同的发起企业和发起人必需已经完成实名，并加入企业
 * @method array getFlowInfos() 获取合同组中每个合同签署流程的信息，合同组中最少包含2个合同，不能超过50个合同。
 * @method void setFlowInfos(array $FlowInfos) 设置合同组中每个合同签署流程的信息，合同组中最少包含2个合同，不能超过50个合同。
 * @method string getFlowGroupName() 获取合同组的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
 * @method void setFlowGroupName(string $FlowGroupName) 设置合同组的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
 */
class ChannelCreateFlowGroupByTemplatesRequest extends AbstractModel
{
    /**
     * @var Agent 合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a>

此接口下面信息必填。
<ul>
<li>渠道应用标识:  <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li>
</ul>

合同的发起企业和发起人必需已经完成实名，并加入企业
     */
    public $Agent;

    /**
     * @var array 合同组中每个合同签署流程的信息，合同组中最少包含2个合同，不能超过50个合同。
     */
    public $FlowInfos;

    /**
     * @var string 合同组的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
     */
    public $FlowGroupName;

    /**
     * @param Agent $Agent 合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a>

此接口下面信息必填。
<ul>
<li>渠道应用标识:  <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li>
</ul>

合同的发起企业和发起人必需已经完成实名，并加入企业
     * @param array $FlowInfos 合同组中每个合同签署流程的信息，合同组中最少包含2个合同，不能超过50个合同。
     * @param string $FlowGroupName 合同组的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
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

        if (array_key_exists("FlowInfos",$param) and $param["FlowInfos"] !== null) {
            $this->FlowInfos = [];
            foreach ($param["FlowInfos"] as $key => $value){
                $obj = new FlowInfo();
                $obj->deserialize($value);
                array_push($this->FlowInfos, $obj);
            }
        }

        if (array_key_exists("FlowGroupName",$param) and $param["FlowGroupName"] !== null) {
            $this->FlowGroupName = $param["FlowGroupName"];
        }
    }
}
