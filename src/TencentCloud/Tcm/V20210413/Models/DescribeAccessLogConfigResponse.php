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
 * @method string getEncoding() 获取访问日志输出编码。默认 “TEXT”。除此之外还有“JSON”
 * @method void setEncoding(string $Encoding) 设置访问日志输出编码。默认 “TEXT”。除此之外还有“JSON”
 * @method SelectedRange getSelectedRange() 获取选中的范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectedRange(SelectedRange $SelectedRange) 设置选中的范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplate() 获取采用的模板，可取值为"istio, trace，默认为istio
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplate(string $Template) 设置采用的模板，可取值为"istio, trace，默认为istio
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
     * @var string 访问日志输出编码。默认 “TEXT”。除此之外还有“JSON”
     */
    public $Encoding;

    /**
     * @var SelectedRange 选中的范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelectedRange;

    /**
     * @var string 采用的模板，可取值为"istio, trace，默认为istio
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Template;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $File 访问日志输出路径。默认 /dev/stdout
     * @param string $Format 访问日志的格式。
     * @param string $Encoding 访问日志输出编码。默认 “TEXT”。除此之外还有“JSON”
     * @param SelectedRange $SelectedRange 选中的范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Template 采用的模板，可取值为"istio, trace，默认为istio
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
