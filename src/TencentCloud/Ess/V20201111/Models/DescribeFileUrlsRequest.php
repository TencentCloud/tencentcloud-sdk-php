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
 * @method UserInfo getOperator() 获取调用方用户信息，UserId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，UserId 必填
 * @method string getBusinessType() 获取文件对应的业务类型，目前支持：
- 流程 "FLOW"，如需下载合同文件请选择此项
- 模板 "TEMPLATE"
- 文档 "DOCUMENT"
- 印章  “SEAL”
 * @method void setBusinessType(string $BusinessType) 设置文件对应的业务类型，目前支持：
- 流程 "FLOW"，如需下载合同文件请选择此项
- 模板 "TEMPLATE"
- 文档 "DOCUMENT"
- 印章  “SEAL”
 * @method array getBusinessIds() 获取业务编号的数组，如流程编号、模板编号、文档编号、印章编号。如需下载合同文件请传入FlowId
最大支持20个资源
 * @method void setBusinessIds(array $BusinessIds) 设置业务编号的数组，如流程编号、模板编号、文档编号、印章编号。如需下载合同文件请传入FlowId
最大支持20个资源
 * @method string getFileName() 获取下载后的文件命名，只有FileType为zip的时候生效
 * @method void setFileName(string $FileName) 设置下载后的文件命名，只有FileType为zip的时候生效
 * @method string getFileType() 获取文件类型，"JPG", "PDF","ZIP"等
 * @method void setFileType(string $FileType) 设置文件类型，"JPG", "PDF","ZIP"等
 * @method integer getOffset() 获取指定资源起始偏移量，默认0
 * @method void setOffset(integer $Offset) 设置指定资源起始偏移量，默认0
 * @method integer getLimit() 获取指定资源数量，查询全部资源则传入-1
 * @method void setLimit(integer $Limit) 设置指定资源数量，查询全部资源则传入-1
 * @method integer getUrlTtl() 获取下载url过期时间，单位秒。0: 按默认值5分钟，允许范围：1s~24x60x60s(1天)
 * @method void setUrlTtl(integer $UrlTtl) 设置下载url过期时间，单位秒。0: 按默认值5分钟，允许范围：1s~24x60x60s(1天)
 * @method string getCcToken() 获取暂不开放
 * @method void setCcToken(string $CcToken) 设置暂不开放
 * @method string getScene() 获取暂不开放
 * @method void setScene(string $Scene) 设置暂不开放
 * @method Agent getAgent() 获取应用相关信息
 * @method void setAgent(Agent $Agent) 设置应用相关信息
 */
class DescribeFileUrlsRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，UserId 必填
     */
    public $Operator;

    /**
     * @var string 文件对应的业务类型，目前支持：
- 流程 "FLOW"，如需下载合同文件请选择此项
- 模板 "TEMPLATE"
- 文档 "DOCUMENT"
- 印章  “SEAL”
     */
    public $BusinessType;

    /**
     * @var array 业务编号的数组，如流程编号、模板编号、文档编号、印章编号。如需下载合同文件请传入FlowId
最大支持20个资源
     */
    public $BusinessIds;

    /**
     * @var string 下载后的文件命名，只有FileType为zip的时候生效
     */
    public $FileName;

    /**
     * @var string 文件类型，"JPG", "PDF","ZIP"等
     */
    public $FileType;

    /**
     * @var integer 指定资源起始偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 指定资源数量，查询全部资源则传入-1
     */
    public $Limit;

    /**
     * @var integer 下载url过期时间，单位秒。0: 按默认值5分钟，允许范围：1s~24x60x60s(1天)
     */
    public $UrlTtl;

    /**
     * @var string 暂不开放
     */
    public $CcToken;

    /**
     * @var string 暂不开放
     */
    public $Scene;

    /**
     * @var Agent 应用相关信息
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 调用方用户信息，UserId 必填
     * @param string $BusinessType 文件对应的业务类型，目前支持：
- 流程 "FLOW"，如需下载合同文件请选择此项
- 模板 "TEMPLATE"
- 文档 "DOCUMENT"
- 印章  “SEAL”
     * @param array $BusinessIds 业务编号的数组，如流程编号、模板编号、文档编号、印章编号。如需下载合同文件请传入FlowId
最大支持20个资源
     * @param string $FileName 下载后的文件命名，只有FileType为zip的时候生效
     * @param string $FileType 文件类型，"JPG", "PDF","ZIP"等
     * @param integer $Offset 指定资源起始偏移量，默认0
     * @param integer $Limit 指定资源数量，查询全部资源则传入-1
     * @param integer $UrlTtl 下载url过期时间，单位秒。0: 按默认值5分钟，允许范围：1s~24x60x60s(1天)
     * @param string $CcToken 暂不开放
     * @param string $Scene 暂不开放
     * @param Agent $Agent 应用相关信息
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
