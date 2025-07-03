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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFileUrls请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getBusinessType() 获取文件对应的业务类型，目前支持：<ul><li>**FLOW ** : <font color="red">如需下载合同文件请选择此项</font></li><li>**TEMPLATE ** : 如需下载模板文件请选择此项</li><li>**DOCUMENT  **: 如需下载文档文件请选择此项</li><li>**SEAL  **: 如需下载印章图片请选择此项</li><li>**DIGITFILE**: 如需下载加签文件请选择此项</li></ul>
 * @method void setBusinessType(string $BusinessType) 设置文件对应的业务类型，目前支持：<ul><li>**FLOW ** : <font color="red">如需下载合同文件请选择此项</font></li><li>**TEMPLATE ** : 如需下载模板文件请选择此项</li><li>**DOCUMENT  **: 如需下载文档文件请选择此项</li><li>**SEAL  **: 如需下载印章图片请选择此项</li><li>**DIGITFILE**: 如需下载加签文件请选择此项</li></ul>
 * @method array getBusinessIds() 获取业务编号的数组，取值如下：<ul><li>流程编号</li><li>模板编号</li><li>文档编号</li><li>印章编号</li><li>加签文件编号</li><li>如需下载合同文件请传入FlowId，最大支持20个资源</li></ul>
 * @method void setBusinessIds(array $BusinessIds) 设置业务编号的数组，取值如下：<ul><li>流程编号</li><li>模板编号</li><li>文档编号</li><li>印章编号</li><li>加签文件编号</li><li>如需下载合同文件请传入FlowId，最大支持20个资源</li></ul>
 * @method string getFileName() 获取下载后的文件命名，只有FileType为zip的时候生效
 * @method void setFileName(string $FileName) 设置下载后的文件命名，只有FileType为zip的时候生效
 * @method string getFileType() 获取要下载的文件类型，取值如下：
<ul>
<li>JPG</li>
<li>PDF</li>
<li>ZIP</li>
</ul>
 * @method void setFileType(string $FileType) 设置要下载的文件类型，取值如下：
<ul>
<li>JPG</li>
<li>PDF</li>
<li>ZIP</li>
</ul>
 * @method integer getOffset() 获取指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 1000。
 * @method void setOffset(integer $Offset) 设置指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 1000。
 * @method integer getLimit() 获取指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 100。
 * @method void setLimit(integer $Limit) 设置指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 100。
 * @method integer getUrlTtl() 获取下载url过期时间，单位秒。0: 按默认值5分钟，允许范围：1s~24x60x60s(1天)
 * @method void setUrlTtl(integer $UrlTtl) 设置下载url过期时间，单位秒。0: 按默认值5分钟，允许范围：1s~24x60x60s(1天)
 * @method string getCcToken() 获取暂不开放
 * @method void setCcToken(string $CcToken) 设置暂不开放
 * @method string getScene() 获取暂不开放
 * @method void setScene(string $Scene) 设置暂不开放
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 */
class DescribeFileUrlsRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 文件对应的业务类型，目前支持：<ul><li>**FLOW ** : <font color="red">如需下载合同文件请选择此项</font></li><li>**TEMPLATE ** : 如需下载模板文件请选择此项</li><li>**DOCUMENT  **: 如需下载文档文件请选择此项</li><li>**SEAL  **: 如需下载印章图片请选择此项</li><li>**DIGITFILE**: 如需下载加签文件请选择此项</li></ul>
     */
    public $BusinessType;

    /**
     * @var array 业务编号的数组，取值如下：<ul><li>流程编号</li><li>模板编号</li><li>文档编号</li><li>印章编号</li><li>加签文件编号</li><li>如需下载合同文件请传入FlowId，最大支持20个资源</li></ul>
     */
    public $BusinessIds;

    /**
     * @var string 下载后的文件命名，只有FileType为zip的时候生效
     */
    public $FileName;

    /**
     * @var string 要下载的文件类型，取值如下：
<ul>
<li>JPG</li>
<li>PDF</li>
<li>ZIP</li>
</ul>
     */
    public $FileType;

    /**
     * @var integer 指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 1000。
     */
    public $Offset;

    /**
     * @var integer 指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 100。
     */
    public $Limit;

    /**
     * @var integer 下载url过期时间，单位秒。0: 按默认值5分钟，允许范围：1s~24x60x60s(1天)
     */
    public $UrlTtl;

    /**
     * @var string 暂不开放
     * @deprecated
     */
    public $CcToken;

    /**
     * @var string 暂不开放
     * @deprecated
     */
    public $Scene;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $BusinessType 文件对应的业务类型，目前支持：<ul><li>**FLOW ** : <font color="red">如需下载合同文件请选择此项</font></li><li>**TEMPLATE ** : 如需下载模板文件请选择此项</li><li>**DOCUMENT  **: 如需下载文档文件请选择此项</li><li>**SEAL  **: 如需下载印章图片请选择此项</li><li>**DIGITFILE**: 如需下载加签文件请选择此项</li></ul>
     * @param array $BusinessIds 业务编号的数组，取值如下：<ul><li>流程编号</li><li>模板编号</li><li>文档编号</li><li>印章编号</li><li>加签文件编号</li><li>如需下载合同文件请传入FlowId，最大支持20个资源</li></ul>
     * @param string $FileName 下载后的文件命名，只有FileType为zip的时候生效
     * @param string $FileType 要下载的文件类型，取值如下：
<ul>
<li>JPG</li>
<li>PDF</li>
<li>ZIP</li>
</ul>
     * @param integer $Offset 指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 1000。
     * @param integer $Limit 指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 100。
     * @param integer $UrlTtl 下载url过期时间，单位秒。0: 按默认值5分钟，允许范围：1s~24x60x60s(1天)
     * @param string $CcToken 暂不开放
     * @param string $Scene 暂不开放
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
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
