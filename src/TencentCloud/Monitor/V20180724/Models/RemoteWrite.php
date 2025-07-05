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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多写配置
 *
 * @method string getURL() 获取多写url
 * @method void setURL(string $URL) 设置多写url
 * @method string getURLRelabelConfig() 获取RelabelConfig
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURLRelabelConfig(string $URLRelabelConfig) 设置RelabelConfig
注意：此字段可能返回 null，表示取不到有效值。
 * @method BasicAuth getBasicAuth() 获取鉴权
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicAuth(BasicAuth $BasicAuth) 设置鉴权
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaxBlockSize() 获取最大block
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxBlockSize(string $MaxBlockSize) 设置最大block
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabel() 获取Label
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置Label
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaders() 获取HTTP 额外添加的头
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(array $Headers) 设置HTTP 额外添加的头
注意：此字段可能返回 null，表示取不到有效值。
 */
class RemoteWrite extends AbstractModel
{
    /**
     * @var string 多写url
     */
    public $URL;

    /**
     * @var string RelabelConfig
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URLRelabelConfig;

    /**
     * @var BasicAuth 鉴权
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicAuth;

    /**
     * @var string 最大block
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $MaxBlockSize;

    /**
     * @var string Label
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Label;

    /**
     * @var array HTTP 额外添加的头
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @param string $URL 多写url
     * @param string $URLRelabelConfig RelabelConfig
注意：此字段可能返回 null，表示取不到有效值。
     * @param BasicAuth $BasicAuth 鉴权
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaxBlockSize 最大block
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Label Label
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Headers HTTP 额外添加的头
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("URLRelabelConfig",$param) and $param["URLRelabelConfig"] !== null) {
            $this->URLRelabelConfig = $param["URLRelabelConfig"];
        }

        if (array_key_exists("BasicAuth",$param) and $param["BasicAuth"] !== null) {
            $this->BasicAuth = new BasicAuth();
            $this->BasicAuth->deserialize($param["BasicAuth"]);
        }

        if (array_key_exists("MaxBlockSize",$param) and $param["MaxBlockSize"] !== null) {
            $this->MaxBlockSize = $param["MaxBlockSize"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new RemoteWriteHeader();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }
    }
}
