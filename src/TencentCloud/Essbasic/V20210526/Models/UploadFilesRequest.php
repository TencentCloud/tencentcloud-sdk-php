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
 * UploadFiles请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method string getBusinessType() 获取<p>文件对应业务类型,可以选择的类型如下<ul><li> <strong>TEMPLATE</strong> : 此上传的文件用户生成合同模板，文件类型支持.pdf/.doc/.docx/.html格式，如果非pdf文件需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后才能使用</li><li> <strong>DOCUMENT</strong> : 此文件用来发起合同流程，文件类型支持.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html。如果上传的是非pdf文件，用来发起流程，还需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后得到的pdf文件才能用于发起合同接口。如果上传的文件不是用来发起合同，直接上传后使用返回的文件资源Id即可</li><li> <strong>SEAL</strong> : 此文件用于印章的生成，文件类型支持.jpg/.jpeg/.png</li><li> <strong>ARCHIVE</strong> : 此文件用于归档文件夹，文件类型支持.pdf/.zip格式</li></ul></p><p>枚举值：</p><ul><li>TEMPLATE： 此上传的文件用户生成合同模板</li><li>DOCUMENT： 此文件用来发起合同流程</li><li>SEAL： 此文件用于印章的生成</li><li>ARCHIVE： 此文件用于归档文件夹</li></ul>
 * @method void setBusinessType(string $BusinessType) 设置<p>文件对应业务类型,可以选择的类型如下<ul><li> <strong>TEMPLATE</strong> : 此上传的文件用户生成合同模板，文件类型支持.pdf/.doc/.docx/.html格式，如果非pdf文件需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后才能使用</li><li> <strong>DOCUMENT</strong> : 此文件用来发起合同流程，文件类型支持.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html。如果上传的是非pdf文件，用来发起流程，还需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后得到的pdf文件才能用于发起合同接口。如果上传的文件不是用来发起合同，直接上传后使用返回的文件资源Id即可</li><li> <strong>SEAL</strong> : 此文件用于印章的生成，文件类型支持.jpg/.jpeg/.png</li><li> <strong>ARCHIVE</strong> : 此文件用于归档文件夹，文件类型支持.pdf/.zip格式</li></ul></p><p>枚举值：</p><ul><li>TEMPLATE： 此上传的文件用户生成合同模板</li><li>DOCUMENT： 此文件用来发起合同流程</li><li>SEAL： 此文件用于印章的生成</li><li>ARCHIVE： 此文件用于归档文件夹</li></ul>
 * @method array getFileInfos() 获取<p>上传文件内容数组，一次最多可上传20个文件。</p><p><b>若上传多个文件，所有文件必须为相同类型</b>，例如全部为PDF或全部为Word文件。不支持混合文件类型的上传。</p>
 * @method void setFileInfos(array $FileInfos) 设置<p>上传文件内容数组，一次最多可上传20个文件。</p><p><b>若上传多个文件，所有文件必须为相同类型</b>，例如全部为PDF或全部为Word文件。不支持混合文件类型的上传。</p>
 * @method UserInfo getOperator() 获取<p>操作者的信息</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>操作者的信息</p>
 * @method integer getDeadline() 获取<p>文件的截止有效期，最长有效期是当前时间后的一年。如果超过截止有效期则文件会失效。此功能是白名单功能，如需使用，请联系电子签开通</p><p>如果没有传入，则默认过期时间是上传时间加10分钟</p>
 * @method void setDeadline(integer $Deadline) 设置<p>文件的截止有效期，最长有效期是当前时间后的一年。如果超过截止有效期则文件会失效。此功能是白名单功能，如需使用，请联系电子签开通</p><p>如果没有传入，则默认过期时间是上传时间加10分钟</p>
 */
class UploadFilesRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string <p>文件对应业务类型,可以选择的类型如下<ul><li> <strong>TEMPLATE</strong> : 此上传的文件用户生成合同模板，文件类型支持.pdf/.doc/.docx/.html格式，如果非pdf文件需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后才能使用</li><li> <strong>DOCUMENT</strong> : 此文件用来发起合同流程，文件类型支持.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html。如果上传的是非pdf文件，用来发起流程，还需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后得到的pdf文件才能用于发起合同接口。如果上传的文件不是用来发起合同，直接上传后使用返回的文件资源Id即可</li><li> <strong>SEAL</strong> : 此文件用于印章的生成，文件类型支持.jpg/.jpeg/.png</li><li> <strong>ARCHIVE</strong> : 此文件用于归档文件夹，文件类型支持.pdf/.zip格式</li></ul></p><p>枚举值：</p><ul><li>TEMPLATE： 此上传的文件用户生成合同模板</li><li>DOCUMENT： 此文件用来发起合同流程</li><li>SEAL： 此文件用于印章的生成</li><li>ARCHIVE： 此文件用于归档文件夹</li></ul>
     */
    public $BusinessType;

    /**
     * @var array <p>上传文件内容数组，一次最多可上传20个文件。</p><p><b>若上传多个文件，所有文件必须为相同类型</b>，例如全部为PDF或全部为Word文件。不支持混合文件类型的上传。</p>
     */
    public $FileInfos;

    /**
     * @var UserInfo <p>操作者的信息</p>
     * @deprecated
     */
    public $Operator;

    /**
     * @var integer <p>文件的截止有效期，最长有效期是当前时间后的一年。如果超过截止有效期则文件会失效。此功能是白名单功能，如需使用，请联系电子签开通</p><p>如果没有传入，则默认过期时间是上传时间加10分钟</p>
     */
    public $Deadline;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     * @param string $BusinessType <p>文件对应业务类型,可以选择的类型如下<ul><li> <strong>TEMPLATE</strong> : 此上传的文件用户生成合同模板，文件类型支持.pdf/.doc/.docx/.html格式，如果非pdf文件需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后才能使用</li><li> <strong>DOCUMENT</strong> : 此文件用来发起合同流程，文件类型支持.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html。如果上传的是非pdf文件，用来发起流程，还需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后得到的pdf文件才能用于发起合同接口。如果上传的文件不是用来发起合同，直接上传后使用返回的文件资源Id即可</li><li> <strong>SEAL</strong> : 此文件用于印章的生成，文件类型支持.jpg/.jpeg/.png</li><li> <strong>ARCHIVE</strong> : 此文件用于归档文件夹，文件类型支持.pdf/.zip格式</li></ul></p><p>枚举值：</p><ul><li>TEMPLATE： 此上传的文件用户生成合同模板</li><li>DOCUMENT： 此文件用来发起合同流程</li><li>SEAL： 此文件用于印章的生成</li><li>ARCHIVE： 此文件用于归档文件夹</li></ul>
     * @param array $FileInfos <p>上传文件内容数组，一次最多可上传20个文件。</p><p><b>若上传多个文件，所有文件必须为相同类型</b>，例如全部为PDF或全部为Word文件。不支持混合文件类型的上传。</p>
     * @param UserInfo $Operator <p>操作者的信息</p>
     * @param integer $Deadline <p>文件的截止有效期，最长有效期是当前时间后的一年。如果超过截止有效期则文件会失效。此功能是白名单功能，如需使用，请联系电子签开通</p><p>如果没有传入，则默认过期时间是上传时间加10分钟</p>
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

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new UploadFile();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }
    }
}
