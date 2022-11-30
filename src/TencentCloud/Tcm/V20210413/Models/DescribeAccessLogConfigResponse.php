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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccessLogConfig返回参数结构体
 *
 * @method string getFile() 获取访问日志输出路径。默认 /dev/stdout
 * @method void setFile(string $File) 设置访问日志输出路径。默认 /dev/stdout
 * @method string getFormat() 获取访问日志的格式。
 * @method void setFormat(string $Format) 设置访问日志的格式。
 * @method string getEncoding() 获取访问日志输出编码，可取值为 "TEXT" 或 "JSON"，默认 TEXT"
 * @method void setEncoding(string $Encoding) 设置访问日志输出编码，可取值为 "TEXT" 或 "JSON"，默认 TEXT"
 * @method SelectedRange getSelectedRange() 获取选中的范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectedRange(SelectedRange $SelectedRange) 设置选中的范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplate() 获取采用的模板，可取值为"istio" 或 "trace"，默认为"istio"
 * @method void setTemplate(string $Template) 设置采用的模板，可取值为"istio" 或 "trace"，默认为"istio"
 * @method CLS getCLS() 获取腾讯云日志服务相关参数
 * @method void setCLS(CLS $CLS) 设置腾讯云日志服务相关参数
 * @method string getAddress() 获取GRPC第三方服务器地址
 * @method void setAddress(string $Address) 设置GRPC第三方服务器地址
 * @method boolean getEnableServer() 获取是否启用GRPC第三方服务器
 * @method void setEnableServer(boolean $EnableServer) 设置是否启用GRPC第三方服务器
 * @method boolean getEnableStdout() 获取是否启用标准输出
 * @method void setEnableStdout(boolean $EnableStdout) 设置是否启用标准输出
 * @method boolean getEnable() 获取是否启用访问日志采集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(boolean $Enable) 设置是否启用访问日志采集
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccessLogConfigResponse extends AbstractModel
{
    /**
     * @var string 访问日志输出路径。默认 /dev/stdout
     */
    public $File;

    /**
     * @var string 访问日志的格式。
     */
    public $Format;

    /**
     * @var string 访问日志输出编码，可取值为 "TEXT" 或 "JSON"，默认 TEXT"
     */
    public $Encoding;

    /**
     * @var SelectedRange 选中的范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelectedRange;

    /**
     * @var string 采用的模板，可取值为"istio" 或 "trace"，默认为"istio"
     */
    public $Template;

    /**
     * @var CLS 腾讯云日志服务相关参数
     */
    public $CLS;

    /**
     * @var string GRPC第三方服务器地址
     */
    public $Address;

    /**
     * @var boolean 是否启用GRPC第三方服务器
     */
    public $EnableServer;

    /**
     * @var boolean 是否启用标准输出
     */
    public $EnableStdout;

    /**
     * @var boolean 是否启用访问日志采集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $File 访问日志输出路径。默认 /dev/stdout
     * @param string $Format 访问日志的格式。
     * @param string $Encoding 访问日志输出编码，可取值为 "TEXT" 或 "JSON"，默认 TEXT"
     * @param SelectedRange $SelectedRange 选中的范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Template 采用的模板，可取值为"istio" 或 "trace"，默认为"istio"
     * @param CLS $CLS 腾讯云日志服务相关参数
     * @param string $Address GRPC第三方服务器地址
     * @param boolean $EnableServer 是否启用GRPC第三方服务器
     * @param boolean $EnableStdout 是否启用标准输出
     * @param boolean $Enable 是否启用访问日志采集
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = $param["File"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("SelectedRange",$param) and $param["SelectedRange"] !== null) {
            $this->SelectedRange = new SelectedRange();
            $this->SelectedRange->deserialize($param["SelectedRange"]);
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }

        if (array_key_exists("CLS",$param) and $param["CLS"] !== null) {
            $this->CLS = new CLS();
            $this->CLS->deserialize($param["CLS"]);
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("EnableServer",$param) and $param["EnableServer"] !== null) {
            $this->EnableServer = $param["EnableServer"];
        }

        if (array_key_exists("EnableStdout",$param) and $param["EnableStdout"] !== null) {
            $this->EnableStdout = $param["EnableStdout"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
