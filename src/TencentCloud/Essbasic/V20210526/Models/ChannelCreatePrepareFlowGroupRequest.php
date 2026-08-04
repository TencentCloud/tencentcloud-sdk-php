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
 * ChannelCreatePrepareFlowGroup请求参数结构体
 *
 * @method array getBaseFlowInfos() 获取<p>合同组中每个合同签署流程的信息，合同组中最少包含2个合同，不能超过50个合同。</p>
 * @method void setBaseFlowInfos(array $BaseFlowInfos) 设置<p>合同组中每个合同签署流程的信息，合同组中最少包含2个合同，不能超过50个合同。</p>
 * @method string getFlowGroupName() 获取<p>合同组的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
 * @method void setFlowGroupName(string $FlowGroupName) 设置<p>合同组的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
 * @method integer getResourceType() 获取<p>资源类型，取值有： <ul><li> <strong>1</strong>：模板</li> <li> <strong>2</strong>：文件</li></ul></p>
 * @method void setResourceType(integer $ResourceType) 设置<p>资源类型，取值有： <ul><li> <strong>1</strong>：模板</li> <li> <strong>2</strong>：文件</li></ul></p>
 * @method Agent getAgent() 获取<p>合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a></p><p>此接口下面信息必填。</p><ul><li>渠道应用标识: <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li></ul><p>合同的发起企业和发起人必需已经完成实名，并加入企业</p>
 * @method void setAgent(Agent $Agent) 设置<p>合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a></p><p>此接口下面信息必填。</p><ul><li>渠道应用标识: <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li></ul><p>合同的发起企业和发起人必需已经完成实名，并加入企业</p>
 * @method FlowGroupOptions getFlowGroupOptions() 获取<p>合同组发起参数控制，包括对合同组名称、过期时间、发起后签署以及查看等操作</p>
 * @method void setFlowGroupOptions(FlowGroupOptions $FlowGroupOptions) 设置<p>合同组发起参数控制，包括对合同组名称、过期时间、发起后签署以及查看等操作</p>
 * @method string getFlowGroupType() 获取<p>合同组类型，会应用到所有子合同</p>
 * @method void setFlowGroupType(string $FlowGroupType) 设置<p>合同组类型，会应用到所有子合同</p>
 * @method integer getFlowGroupDeadline() 获取<p>合同组过期时间，会应用到所有子合同</p>
 * @method void setFlowGroupDeadline(integer $FlowGroupDeadline) 设置<p>合同组过期时间，会应用到所有子合同</p>
 */
class ChannelCreatePrepareFlowGroupRequest extends AbstractModel
{
    /**
     * @var array <p>合同组中每个合同签署流程的信息，合同组中最少包含2个合同，不能超过50个合同。</p>
     */
    public $BaseFlowInfos;

    /**
     * @var string <p>合同组的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
     */
    public $FlowGroupName;

    /**
     * @var integer <p>资源类型，取值有： <ul><li> <strong>1</strong>：模板</li> <li> <strong>2</strong>：文件</li></ul></p>
     */
    public $ResourceType;

    /**
     * @var Agent <p>合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a></p><p>此接口下面信息必填。</p><ul><li>渠道应用标识: <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li></ul><p>合同的发起企业和发起人必需已经完成实名，并加入企业</p>
     */
    public $Agent;

    /**
     * @var FlowGroupOptions <p>合同组发起参数控制，包括对合同组名称、过期时间、发起后签署以及查看等操作</p>
     */
    public $FlowGroupOptions;

    /**
     * @var string <p>合同组类型，会应用到所有子合同</p>
     */
    public $FlowGroupType;

    /**
     * @var integer <p>合同组过期时间，会应用到所有子合同</p>
     */
    public $FlowGroupDeadline;

    /**
     * @param array $BaseFlowInfos <p>合同组中每个合同签署流程的信息，合同组中最少包含2个合同，不能超过50个合同。</p>
     * @param string $FlowGroupName <p>合同组的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
     * @param integer $ResourceType <p>资源类型，取值有： <ul><li> <strong>1</strong>：模板</li> <li> <strong>2</strong>：文件</li></ul></p>
     * @param Agent $Agent <p>合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a></p><p>此接口下面信息必填。</p><ul><li>渠道应用标识: <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li></ul><p>合同的发起企业和发起人必需已经完成实名，并加入企业</p>
     * @param FlowGroupOptions $FlowGroupOptions <p>合同组发起参数控制，包括对合同组名称、过期时间、发起后签署以及查看等操作</p>
     * @param string $FlowGroupType <p>合同组类型，会应用到所有子合同</p>
     * @param integer $FlowGroupDeadline <p>合同组过期时间，会应用到所有子合同</p>
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
        if (array_key_exists("BaseFlowInfos",$param) and $param["BaseFlowInfos"] !== null) {
            $this->BaseFlowInfos = [];
            foreach ($param["BaseFlowInfos"] as $key => $value){
                $obj = new BaseFlowInfo();
                $obj->deserialize($value);
                array_push($this->BaseFlowInfos, $obj);
            }
        }

        if (array_key_exists("FlowGroupName",$param) and $param["FlowGroupName"] !== null) {
            $this->FlowGroupName = $param["FlowGroupName"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("FlowGroupOptions",$param) and $param["FlowGroupOptions"] !== null) {
            $this->FlowGroupOptions = new FlowGroupOptions();
            $this->FlowGroupOptions->deserialize($param["FlowGroupOptions"]);
        }

        if (array_key_exists("FlowGroupType",$param) and $param["FlowGroupType"] !== null) {
            $this->FlowGroupType = $param["FlowGroupType"];
        }

        if (array_key_exists("FlowGroupDeadline",$param) and $param["FlowGroupDeadline"] !== null) {
            $this->FlowGroupDeadline = $param["FlowGroupDeadline"];
        }
    }
}
