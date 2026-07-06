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
 * CreateFileConvertTask请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method string getResourceType() 获取<p>需要进行转换的资源文件类型<br>支持的文件类型如下：</p><p>枚举值：</p><ul><li>doc： doc</li><li>docx： docx</li><li>xls： xls</li><li>xlsx： xlsx</li><li>jpg： jpg</li><li>jpeg： jpeg</li><li>png： png</li><li>bmp： bmp</li><li>html： html</li><li>txt： txt</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>需要进行转换的资源文件类型<br>支持的文件类型如下：</p><p>枚举值：</p><ul><li>doc： doc</li><li>docx： docx</li><li>xls： xls</li><li>xlsx： xlsx</li><li>jpg： jpg</li><li>jpeg： jpeg</li><li>png： png</li><li>bmp： bmp</li><li>html： html</li><li>txt： txt</li></ul>
 * @method string getResourceName() 获取<p>需要进行转换操作的文件资源名称，带资源后缀名。</p><p>注:  <code>资源名称长度限制为256个字符</code></p>
 * @method void setResourceName(string $ResourceName) 设置<p>需要进行转换操作的文件资源名称，带资源后缀名。</p><p>注:  <code>资源名称长度限制为256个字符</code></p>
 * @method string getResourceId() 获取<p>需要进行转换操作的文件资源Id，通过<a href="https://qian.tencent.com/developers/partnerApis/files/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源Id。</p><p>注:  <code>目前，此接口仅支持单个文件进行转换。</code></p>
 * @method void setResourceId(string $ResourceId) 设置<p>需要进行转换操作的文件资源Id，通过<a href="https://qian.tencent.com/developers/partnerApis/files/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源Id。</p><p>注:  <code>目前，此接口仅支持单个文件进行转换。</code></p>
 */
class CreateFileConvertTaskRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string <p>需要进行转换的资源文件类型<br>支持的文件类型如下：</p><p>枚举值：</p><ul><li>doc： doc</li><li>docx： docx</li><li>xls： xls</li><li>xlsx： xlsx</li><li>jpg： jpg</li><li>jpeg： jpeg</li><li>png： png</li><li>bmp： bmp</li><li>html： html</li><li>txt： txt</li></ul>
     */
    public $ResourceType;

    /**
     * @var string <p>需要进行转换操作的文件资源名称，带资源后缀名。</p><p>注:  <code>资源名称长度限制为256个字符</code></p>
     */
    public $ResourceName;

    /**
     * @var string <p>需要进行转换操作的文件资源Id，通过<a href="https://qian.tencent.com/developers/partnerApis/files/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源Id。</p><p>注:  <code>目前，此接口仅支持单个文件进行转换。</code></p>
     */
    public $ResourceId;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     * @param string $ResourceType <p>需要进行转换的资源文件类型<br>支持的文件类型如下：</p><p>枚举值：</p><ul><li>doc： doc</li><li>docx： docx</li><li>xls： xls</li><li>xlsx： xlsx</li><li>jpg： jpg</li><li>jpeg： jpeg</li><li>png： png</li><li>bmp： bmp</li><li>html： html</li><li>txt： txt</li></ul>
     * @param string $ResourceName <p>需要进行转换操作的文件资源名称，带资源后缀名。</p><p>注:  <code>资源名称长度限制为256个字符</code></p>
     * @param string $ResourceId <p>需要进行转换操作的文件资源Id，通过<a href="https://qian.tencent.com/developers/partnerApis/files/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源Id。</p><p>注:  <code>目前，此接口仅支持单个文件进行转换。</code></p>
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
