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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFileConvertTask请求参数结构体
 *
 * @method string getResourceType() 获取<p>需要进行转换的资源文件类型<br>支持的文件类型如下：</p><p>枚举值：</p><ul><li>doc： doc</li><li>docx： docx</li><li>xls： xls</li><li>xlsx： xlsx</li><li>jpg： jpg</li><li>jpeg： jpeg</li><li>png： png</li><li>html： html</li><li>bmp： bmp</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>需要进行转换的资源文件类型<br>支持的文件类型如下：</p><p>枚举值：</p><ul><li>doc： doc</li><li>docx： docx</li><li>xls： xls</li><li>xlsx： xlsx</li><li>jpg： jpg</li><li>jpeg： jpeg</li><li>png： png</li><li>html： html</li><li>bmp： bmp</li></ul>
 * @method string getResourceName() 获取<p>需要进行转换操作的文件资源名称，带资源后缀名。</p><p>注:  <code>资源名称长度限制为256个字符</code></p>
 * @method void setResourceName(string $ResourceName) 设置<p>需要进行转换操作的文件资源名称，带资源后缀名。</p><p>注:  <code>资源名称长度限制为256个字符</code></p>
 * @method string getResourceId() 获取<p>需要进行转换操作的文件资源Id，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源Id。</p><p>注:  <code>目前，此接口仅支持单个文件进行转换。</code></p>
 * @method void setResourceId(string $ResourceId) 设置<p>需要进行转换操作的文件资源Id，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源Id。</p><p>注:  <code>目前，此接口仅支持单个文件进行转换。</code></p>
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 */
class CreateFileConvertTaskRequest extends AbstractModel
{
    /**
     * @var string <p>需要进行转换的资源文件类型<br>支持的文件类型如下：</p><p>枚举值：</p><ul><li>doc： doc</li><li>docx： docx</li><li>xls： xls</li><li>xlsx： xlsx</li><li>jpg： jpg</li><li>jpeg： jpeg</li><li>png： png</li><li>html： html</li><li>bmp： bmp</li></ul>
     */
    public $ResourceType;

    /**
     * @var string <p>需要进行转换操作的文件资源名称，带资源后缀名。</p><p>注:  <code>资源名称长度限制为256个字符</code></p>
     */
    public $ResourceName;

    /**
     * @var string <p>需要进行转换操作的文件资源Id，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源Id。</p><p>注:  <code>目前，此接口仅支持单个文件进行转换。</code></p>
     */
    public $ResourceId;

    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @param string $ResourceType <p>需要进行转换的资源文件类型<br>支持的文件类型如下：</p><p>枚举值：</p><ul><li>doc： doc</li><li>docx： docx</li><li>xls： xls</li><li>xlsx： xlsx</li><li>jpg： jpg</li><li>jpeg： jpeg</li><li>png： png</li><li>html： html</li><li>bmp： bmp</li></ul>
     * @param string $ResourceName <p>需要进行转换操作的文件资源名称，带资源后缀名。</p><p>注:  <code>资源名称长度限制为256个字符</code></p>
     * @param string $ResourceId <p>需要进行转换操作的文件资源Id，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源Id。</p><p>注:  <code>目前，此接口仅支持单个文件进行转换。</code></p>
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
