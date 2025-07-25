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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccessLogConfig请求参数结构体
 *
 * @method string getMeshId() 获取mesh ID
 * @method void setMeshId(string $MeshId) 设置mesh ID
 * @method SelectedRange getSelectedRange() 获取选中的范围
 * @method void setSelectedRange(SelectedRange $SelectedRange) 设置选中的范围
 * @method string getTemplate() 获取采用的模板，可选值：istio（默认）、trace、custom
 * @method void setTemplate(string $Template) 设置采用的模板，可选值：istio（默认）、trace、custom
 * @method boolean getEnable() 获取是否启用
 * @method void setEnable(boolean $Enable) 设置是否启用
 * @method CLS getCLS() 获取腾讯云日志服务相关参数
 * @method void setCLS(CLS $CLS) 设置腾讯云日志服务相关参数
 * @method string getEncoding() 获取编码格式，可选值：TEXT、JSON
 * @method void setEncoding(string $Encoding) 设置编码格式，可选值：TEXT、JSON
 * @method string getFormat() 获取日志格式
 * @method void setFormat(string $Format) 设置日志格式
 * @method boolean getEnableStdout() 获取是否启用标准输出
 * @method void setEnableStdout(boolean $EnableStdout) 设置是否启用标准输出
 * @method boolean getEnableServer() 获取是否启动GRPC第三方服务器
 * @method void setEnableServer(boolean $EnableServer) 设置是否启动GRPC第三方服务器
 * @method string getAddress() 获取GRPC第三方服务器地址
 * @method void setAddress(string $Address) 设置GRPC第三方服务器地址
 */
class ModifyAccessLogConfigRequest extends AbstractModel
{
    /**
     * @var string mesh ID
     */
    public $MeshId;

    /**
     * @var SelectedRange 选中的范围
     */
    public $SelectedRange;

    /**
     * @var string 采用的模板，可选值：istio（默认）、trace、custom
     */
    public $Template;

    /**
     * @var boolean 是否启用
     */
    public $Enable;

    /**
     * @var CLS 腾讯云日志服务相关参数
     */
    public $CLS;

    /**
     * @var string 编码格式，可选值：TEXT、JSON
     */
    public $Encoding;

    /**
     * @var string 日志格式
     */
    public $Format;

    /**
     * @var boolean 是否启用标准输出
     */
    public $EnableStdout;

    /**
     * @var boolean 是否启动GRPC第三方服务器
     */
    public $EnableServer;

    /**
     * @var string GRPC第三方服务器地址
     */
    public $Address;

    /**
     * @param string $MeshId mesh ID
     * @param SelectedRange $SelectedRange 选中的范围
     * @param string $Template 采用的模板，可选值：istio（默认）、trace、custom
     * @param boolean $Enable 是否启用
     * @param CLS $CLS 腾讯云日志服务相关参数
     * @param string $Encoding 编码格式，可选值：TEXT、JSON
     * @param string $Format 日志格式
     * @param boolean $EnableStdout 是否启用标准输出
     * @param boolean $EnableServer 是否启动GRPC第三方服务器
     * @param string $Address GRPC第三方服务器地址
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
        if (array_key_exists("MeshId",$param) and $param["MeshId"] !== null) {
            $this->MeshId = $param["MeshId"];
        }

        if (array_key_exists("SelectedRange",$param) and $param["SelectedRange"] !== null) {
            $this->SelectedRange = new SelectedRange();
            $this->SelectedRange->deserialize($param["SelectedRange"]);
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CLS",$param) and $param["CLS"] !== null) {
            $this->CLS = new CLS();
            $this->CLS->deserialize($param["CLS"]);
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("EnableStdout",$param) and $param["EnableStdout"] !== null) {
            $this->EnableStdout = $param["EnableStdout"];
        }

        if (array_key_exists("EnableServer",$param) and $param["EnableServer"] !== null) {
            $this->EnableServer = $param["EnableServer"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }
    }
}
