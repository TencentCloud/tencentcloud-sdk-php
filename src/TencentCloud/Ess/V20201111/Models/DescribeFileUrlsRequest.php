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
 * DescribeFileUrls请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getBusinessType() 获取<p>文件对应的业务类型，目前支持：<ul><li><strong>FLOW</strong> : <font color="red">如需下载合同文件请选择此项</font></li><li><strong>TEMPLATE</strong> : 如需下载模板文件请选择此项</li><li><strong>DOCUMENT</strong>: 如需下载文档文件请选择此项</li><li><strong>SEAL</strong>: 如需下载印章图片请选择此项</li><li><strong>DIGITFILE</strong>: 如需下载加签文件请选择此项</li><li><strong>ARCHIVE</strong>: 如需下载合同归档文件请选择此项</li></ul></p><p>枚举值：</p><ul><li>FLOW： 如需下载合同文件请选择此项</li><li>TEMPLATE： 如需下载模板文件请选择此项</li><li>DOCUMENT： 如需下载文档文件请选择此项</li><li>SEAL： 如需下载印章图片请选择此项</li><li>DIGITFILE： 如需下载加签文件请选择此项</li><li>ARCHIVE： 如需下载合同归档文件请选择此项</li></ul>
 * @method void setBusinessType(string $BusinessType) 设置<p>文件对应的业务类型，目前支持：<ul><li><strong>FLOW</strong> : <font color="red">如需下载合同文件请选择此项</font></li><li><strong>TEMPLATE</strong> : 如需下载模板文件请选择此项</li><li><strong>DOCUMENT</strong>: 如需下载文档文件请选择此项</li><li><strong>SEAL</strong>: 如需下载印章图片请选择此项</li><li><strong>DIGITFILE</strong>: 如需下载加签文件请选择此项</li><li><strong>ARCHIVE</strong>: 如需下载合同归档文件请选择此项</li></ul></p><p>枚举值：</p><ul><li>FLOW： 如需下载合同文件请选择此项</li><li>TEMPLATE： 如需下载模板文件请选择此项</li><li>DOCUMENT： 如需下载文档文件请选择此项</li><li>SEAL： 如需下载印章图片请选择此项</li><li>DIGITFILE： 如需下载加签文件请选择此项</li><li>ARCHIVE： 如需下载合同归档文件请选择此项</li></ul>
 * @method array getBusinessIds() 获取<p>业务编号的数组，取值如下：<ul><li>流程编号</li><li>模板编号</li><li>文档编号</li><li>印章编号</li><li>加签文件编号</li><li>如需下载合同文件请传入FlowId，最大支持20个资源</li></ul></p>
 * @method void setBusinessIds(array $BusinessIds) 设置<p>业务编号的数组，取值如下：<ul><li>流程编号</li><li>模板编号</li><li>文档编号</li><li>印章编号</li><li>加签文件编号</li><li>如需下载合同文件请传入FlowId，最大支持20个资源</li></ul></p>
 * @method string getFileName() 获取<p>下载后的文件命名，只有FileType为zip的时候生效</p>
 * @method void setFileName(string $FileName) 设置<p>下载后的文件命名，只有FileType为zip的时候生效</p>
 * @method string getFileType() 获取<p>要下载的文件类型，取值如下：</p><ul><li>JPG</li><li>PDF</li><li>ZIP</li></ul>
 * @method void setFileType(string $FileType) 设置<p>要下载的文件类型，取值如下：</p><ul><li>JPG</li><li>PDF</li><li>ZIP</li></ul>
 * @method integer getOffset() 获取<p>指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 1000。</p>
 * @method void setOffset(integer $Offset) 设置<p>指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 1000。</p>
 * @method integer getLimit() 获取<p>指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 100。</p>
 * @method integer getUrlTtl() 获取<p>下载url过期时间，单位秒。0: 按默认值5分钟，允许范围：1s~24x60x60s(1天)</p>
 * @method void setUrlTtl(integer $UrlTtl) 设置<p>下载url过期时间，单位秒。0: 按默认值5分钟，允许范围：1s~24x60x60s(1天)</p>
 * @method string getCcToken() 获取<p>暂不开放</p>
 * @method void setCcToken(string $CcToken) 设置<p>暂不开放</p>
 * @method string getScene() 获取<p>暂不开放</p>
 * @method void setScene(string $Scene) 设置<p>暂不开放</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 */
class DescribeFileUrlsRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>文件对应的业务类型，目前支持：<ul><li><strong>FLOW</strong> : <font color="red">如需下载合同文件请选择此项</font></li><li><strong>TEMPLATE</strong> : 如需下载模板文件请选择此项</li><li><strong>DOCUMENT</strong>: 如需下载文档文件请选择此项</li><li><strong>SEAL</strong>: 如需下载印章图片请选择此项</li><li><strong>DIGITFILE</strong>: 如需下载加签文件请选择此项</li><li><strong>ARCHIVE</strong>: 如需下载合同归档文件请选择此项</li></ul></p><p>枚举值：</p><ul><li>FLOW： 如需下载合同文件请选择此项</li><li>TEMPLATE： 如需下载模板文件请选择此项</li><li>DOCUMENT： 如需下载文档文件请选择此项</li><li>SEAL： 如需下载印章图片请选择此项</li><li>DIGITFILE： 如需下载加签文件请选择此项</li><li>ARCHIVE： 如需下载合同归档文件请选择此项</li></ul>
     */
    public $BusinessType;

    /**
     * @var array <p>业务编号的数组，取值如下：<ul><li>流程编号</li><li>模板编号</li><li>文档编号</li><li>印章编号</li><li>加签文件编号</li><li>如需下载合同文件请传入FlowId，最大支持20个资源</li></ul></p>
     */
    public $BusinessIds;

    /**
     * @var string <p>下载后的文件命名，只有FileType为zip的时候生效</p>
     */
    public $FileName;

    /**
     * @var string <p>要下载的文件类型，取值如下：</p><ul><li>JPG</li><li>PDF</li><li>ZIP</li></ul>
     */
    public $FileType;

    /**
     * @var integer <p>指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 1000。</p>
     */
    public $Offset;

    /**
     * @var integer <p>指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>下载url过期时间，单位秒。0: 按默认值5分钟，允许范围：1s~24x60x60s(1天)</p>
     */
    public $UrlTtl;

    /**
     * @var string <p>暂不开放</p>
     * @deprecated
     */
    public $CcToken;

    /**
     * @var string <p>暂不开放</p>
     * @deprecated
     */
    public $Scene;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $BusinessType <p>文件对应的业务类型，目前支持：<ul><li><strong>FLOW</strong> : <font color="red">如需下载合同文件请选择此项</font></li><li><strong>TEMPLATE</strong> : 如需下载模板文件请选择此项</li><li><strong>DOCUMENT</strong>: 如需下载文档文件请选择此项</li><li><strong>SEAL</strong>: 如需下载印章图片请选择此项</li><li><strong>DIGITFILE</strong>: 如需下载加签文件请选择此项</li><li><strong>ARCHIVE</strong>: 如需下载合同归档文件请选择此项</li></ul></p><p>枚举值：</p><ul><li>FLOW： 如需下载合同文件请选择此项</li><li>TEMPLATE： 如需下载模板文件请选择此项</li><li>DOCUMENT： 如需下载文档文件请选择此项</li><li>SEAL： 如需下载印章图片请选择此项</li><li>DIGITFILE： 如需下载加签文件请选择此项</li><li>ARCHIVE： 如需下载合同归档文件请选择此项</li></ul>
     * @param array $BusinessIds <p>业务编号的数组，取值如下：<ul><li>流程编号</li><li>模板编号</li><li>文档编号</li><li>印章编号</li><li>加签文件编号</li><li>如需下载合同文件请传入FlowId，最大支持20个资源</li></ul></p>
     * @param string $FileName <p>下载后的文件命名，只有FileType为zip的时候生效</p>
     * @param string $FileType <p>要下载的文件类型，取值如下：</p><ul><li>JPG</li><li>PDF</li><li>ZIP</li></ul>
     * @param integer $Offset <p>指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 1000。</p>
     * @param integer $Limit <p>指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 100。</p>
     * @param integer $UrlTtl <p>下载url过期时间，单位秒。0: 按默认值5分钟，允许范围：1s~24x60x60s(1天)</p>
     * @param string $CcToken <p>暂不开放</p>
     * @param string $Scene <p>暂不开放</p>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("BusinessIds",$param) and $param["BusinessIds"] !== null) {
            $this->BusinessIds = $param["BusinessIds"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("UrlTtl",$param) and $param["UrlTtl"] !== null) {
            $this->UrlTtl = $param["UrlTtl"];
        }

        if (array_key_exists("CcToken",$param) and $param["CcToken"] !== null) {
            $this->CcToken = $param["CcToken"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
