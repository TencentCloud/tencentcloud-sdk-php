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
 * @method string getBusinessType() 获取文件对应的业务类型，目前支持：
- 模板 "TEMPLATE"
- 文档 "DOCUMENT"
- 印章  “SEAL”
- 流程 "FLOW"
 * @method void setBusinessType(string $BusinessType) 设置文件对应的业务类型，目前支持：
- 模板 "TEMPLATE"
- 文档 "DOCUMENT"
- 印章  “SEAL”
- 流程 "FLOW"
 * @method UserInfo getOperator() 获取操作者信息
 * @method void setOperator(UserInfo $Operator) 设置操作者信息
 * @method array getBusinessIds() 获取业务编号的数组，如模板编号、文档编号、印章编号
 * @method void setBusinessIds(array $BusinessIds) 设置业务编号的数组，如模板编号、文档编号、印章编号
 * @method string getFileType() 获取文件类型，"JPG", "PDF","ZIP"等
 * @method void setFileType(string $FileType) 设置文件类型，"JPG", "PDF","ZIP"等
 * @method string getFileName() 获取下载后的文件命名，只有fileType为zip的时候生效
 * @method void setFileName(string $FileName) 设置下载后的文件命名，只有fileType为zip的时候生效
 * @method integer getOffset() 获取指定资源起始偏移量
 * @method void setOffset(integer $Offset) 设置指定资源起始偏移量
 * @method integer getLimit() 获取指定资源数量，查询全部资源则传入-1
 * @method void setLimit(integer $Limit) 设置指定资源数量，查询全部资源则传入-1
 * @method Agent getAgent() 获取应用相关信息
 * @method void setAgent(Agent $Agent) 设置应用相关信息
 * @method integer getUrlTtl() 获取下载url过期时间，0: 按默认值5分钟，允许范围：1s~24*60*60s(1天)
 * @method void setUrlTtl(integer $UrlTtl) 设置下载url过期时间，0: 按默认值5分钟，允许范围：1s~24*60*60s(1天)
 * @method string getCcToken() 获取流程校验发送邮件权限
 * @method void setCcToken(string $CcToken) 设置流程校验发送邮件权限
 * @method string getScene() 获取场景
 * @method void setScene(string $Scene) 设置场景
 */
class DescribeFileUrlsRequest extends AbstractModel
{
    /**
     * @var string 文件对应的业务类型，目前支持：
- 模板 "TEMPLATE"
- 文档 "DOCUMENT"
- 印章  “SEAL”
- 流程 "FLOW"
     */
    public $BusinessType;

    /**
     * @var UserInfo 操作者信息
     */
    public $Operator;

    /**
     * @var array 业务编号的数组，如模板编号、文档编号、印章编号
     */
    public $BusinessIds;

    /**
     * @var string 文件类型，"JPG", "PDF","ZIP"等
     */
    public $FileType;

    /**
     * @var string 下载后的文件命名，只有fileType为zip的时候生效
     */
    public $FileName;

    /**
     * @var integer 指定资源起始偏移量
     */
    public $Offset;

    /**
     * @var integer 指定资源数量，查询全部资源则传入-1
     */
    public $Limit;

    /**
     * @var Agent 应用相关信息
     */
    public $Agent;

    /**
     * @var integer 下载url过期时间，0: 按默认值5分钟，允许范围：1s~24*60*60s(1天)
     */
    public $UrlTtl;

    /**
     * @var string 流程校验发送邮件权限
     */
    public $CcToken;

    /**
     * @var string 场景
     */
    public $Scene;

    /**
     * @param string $BusinessType 文件对应的业务类型，目前支持：
- 模板 "TEMPLATE"
- 文档 "DOCUMENT"
- 印章  “SEAL”
- 流程 "FLOW"
     * @param UserInfo $Operator 操作者信息
     * @param array $BusinessIds 业务编号的数组，如模板编号、文档编号、印章编号
     * @param string $FileType 文件类型，"JPG", "PDF","ZIP"等
     * @param string $FileName 下载后的文件命名，只有fileType为zip的时候生效
     * @param integer $Offset 指定资源起始偏移量
     * @param integer $Limit 指定资源数量，查询全部资源则传入-1
     * @param Agent $Agent 应用相关信息
     * @param integer $UrlTtl 下载url过期时间，0: 按默认值5分钟，允许范围：1s~24*60*60s(1天)
     * @param string $CcToken 流程校验发送邮件权限
     * @param string $Scene 场景
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
        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("BusinessIds",$param) and $param["BusinessIds"] !== null) {
            $this->BusinessIds = $param["BusinessIds"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
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
    }
}
