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
 * @method integer getId() 获取主键ID
 * @method void setId(integer $Id) 设置主键ID
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method string getUrl() 获取Url
 * @method void setUrl(string $Url) 设置Url
 * @method string getHost() 获取Host地址
 * @method void setHost(string $Host) 设置Host地址
 * @method string getPath() 获取Path路径
 * @method void setPath(string $Path) 设置Path路径
 * @method string getMethod() 获取方法：POST、GET、DELETE等
 * @method void setMethod(string $Method) 设置方法：POST、GET、DELETE等
 * @method string getStatus() 获取修复状态：unrepaired:未修复，repaired:已修复, ignore:已忽略,checking:复测中
 * @method void setStatus(string $Status) 设置修复状态：unrepaired:未修复，repaired:已修复, ignore:已忽略,checking:复测中
 * @method integer getCode() 获取状态码
 * @method void setCode(integer $Code) 设置状态码
 * @method string getRequest() 获取请求体
 * @method void setRequest(string $Request) 设置请求体
 * @method string getResponse() 获取响应体
 * @method void setResponse(string $Response) 设置响应体
 * @method boolean getIsRiskAPI() 获取是否风险API
 * @method void setIsRiskAPI(boolean $IsRiskAPI) 设置是否风险API
 */
class DisplayApiSec extends AbstractModel
{
    /**
     * @var integer 主键ID
     */
    public $Id;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var string Url
     */
    public $Url;

    /**
     * @var string Host地址
     */
    public $Host;

    /**
     * @var string Path路径
     */
    public $Path;

    /**
     * @var string 方法：POST、GET、DELETE等
     */
    public $Method;

    /**
     * @var string 修复状态：unrepaired:未修复，repaired:已修复, ignore:已忽略,checking:复测中
     */
    public $Status;

    /**
     * @var integer 状态码
     */
    public $Code;

    /**
     * @var string 请求体
     */
    public $Request;

    /**
     * @var string 响应体
     */
    public $Response;

    /**
     * @var boolean 是否风险API
     */
    public $IsRiskAPI;

    /**
     * @param integer $Id 主键ID
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param string $Url Url
     * @param string $Host Host地址
     * @param string $Path Path路径
     * @param string $Method 方法：POST、GET、DELETE等
     * @param string $Status 修复状态：unrepaired:未修复，repaired:已修复, ignore:已忽略,checking:复测中
     * @param integer $Code 状态码
     * @param string $Request 请求体
     * @param string $Response 响应体
     * @param boolean $IsRiskAPI 是否风险API
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
    }
}
