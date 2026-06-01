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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API安全详情
 *
 * @method integer getId() 获取<p>主键ID</p>
 * @method void setId(integer $Id) 设置<p>主键ID</p>
 * @method DisplayToolCommon getDisplayToolCommon() 获取<p>公共字段</p>
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置<p>公共字段</p>
 * @method string getUrl() 获取<p>Url</p>
 * @method void setUrl(string $Url) 设置<p>Url</p>
 * @method string getHost() 获取<p>Host地址</p>
 * @method void setHost(string $Host) 设置<p>Host地址</p>
 * @method string getPath() 获取<p>Path路径</p>
 * @method void setPath(string $Path) 设置<p>Path路径</p>
 * @method string getMethod() 获取<p>方法：POST、GET、DELETE等</p>
 * @method void setMethod(string $Method) 设置<p>方法：POST、GET、DELETE等</p>
 * @method string getStatus() 获取<p>修复状态：unrepaired:未修复，repaired:已修复, ignore:已忽略,checking:复测中</p>
 * @method void setStatus(string $Status) 设置<p>修复状态：unrepaired:未修复，repaired:已修复, ignore:已忽略,checking:复测中</p>
 * @method integer getCode() 获取<p>状态码</p>
 * @method void setCode(integer $Code) 设置<p>状态码</p>
 * @method string getRequest() 获取<p>请求体</p>
 * @method void setRequest(string $Request) 设置<p>请求体</p>
 * @method string getResponse() 获取<p>响应体</p>
 * @method void setResponse(string $Response) 设置<p>响应体</p>
 * @method boolean getIsRiskAPI() 获取<p>是否风险API</p>
 * @method void setIsRiskAPI(boolean $IsRiskAPI) 设置<p>是否风险API</p>
 * @method integer getAggregationCount() 获取<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 * @method void setAggregationCount(integer $AggregationCount) 设置<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 */
class DisplayApiSec extends AbstractModel
{
    /**
     * @var integer <p>主键ID</p>
     */
    public $Id;

    /**
     * @var DisplayToolCommon <p>公共字段</p>
     */
    public $DisplayToolCommon;

    /**
     * @var string <p>Url</p>
     */
    public $Url;

    /**
     * @var string <p>Host地址</p>
     */
    public $Host;

    /**
     * @var string <p>Path路径</p>
     */
    public $Path;

    /**
     * @var string <p>方法：POST、GET、DELETE等</p>
     */
    public $Method;

    /**
     * @var string <p>修复状态：unrepaired:未修复，repaired:已修复, ignore:已忽略,checking:复测中</p>
     */
    public $Status;

    /**
     * @var integer <p>状态码</p>
     */
    public $Code;

    /**
     * @var string <p>请求体</p>
     */
    public $Request;

    /**
     * @var string <p>响应体</p>
     */
    public $Response;

    /**
     * @var boolean <p>是否风险API</p>
     */
    public $IsRiskAPI;

    /**
     * @var integer <p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
     */
    public $AggregationCount;

    /**
     * @param integer $Id <p>主键ID</p>
     * @param DisplayToolCommon $DisplayToolCommon <p>公共字段</p>
     * @param string $Url <p>Url</p>
     * @param string $Host <p>Host地址</p>
     * @param string $Path <p>Path路径</p>
     * @param string $Method <p>方法：POST、GET、DELETE等</p>
     * @param string $Status <p>修复状态：unrepaired:未修复，repaired:已修复, ignore:已忽略,checking:复测中</p>
     * @param integer $Code <p>状态码</p>
     * @param string $Request <p>请求体</p>
     * @param string $Response <p>响应体</p>
     * @param boolean $IsRiskAPI <p>是否风险API</p>
     * @param integer $AggregationCount <p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }

        if (array_key_exists("Response",$param) and $param["Response"] !== null) {
            $this->Response = $param["Response"];
        }

        if (array_key_exists("IsRiskAPI",$param) and $param["IsRiskAPI"] !== null) {
            $this->IsRiskAPI = $param["IsRiskAPI"];
        }

        if (array_key_exists("AggregationCount",$param) and $param["AggregationCount"] !== null) {
            $this->AggregationCount = $param["AggregationCount"];
        }
    }
}
