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
 * @method string getURL() 获取<p>多写url</p>
 * @method void setURL(string $URL) 设置<p>多写url</p>
 * @method string getURLRelabelConfig() 获取<p>RelabelConfig</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURLRelabelConfig(string $URLRelabelConfig) 设置<p>RelabelConfig</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BasicAuth getBasicAuth() 获取<p>鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicAuth(BasicAuth $BasicAuth) 设置<p>鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaxBlockSize() 获取<p>最大block</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxBlockSize(string $MaxBlockSize) 设置<p>最大block</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabel() 获取<p>Label</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置<p>Label</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaders() 获取<p>HTTP 额外添加的头</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(array $Headers) 设置<p>HTTP 额外添加的头</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemoteWriteType() 获取<p>数据多写类型:<br>1- 只多写采集指标<br>2- 只多写预聚合指标<br>3- 同时多写采集和预聚合指标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteWriteType(integer $RemoteWriteType) 设置<p>数据多写类型:<br>1- 只多写采集指标<br>2- 只多写预聚合指标<br>3- 同时多写采集和预聚合指标</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RemoteWrite extends AbstractModel
{
    /**
     * @var string <p>多写url</p>
     */
    public $URL;

    /**
     * @var string <p>RelabelConfig</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URLRelabelConfig;

    /**
     * @var BasicAuth <p>鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicAuth;

    /**
     * @var string <p>最大block</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $MaxBlockSize;

    /**
     * @var string <p>Label</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Label;

    /**
     * @var array <p>HTTP 额外添加的头</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @var integer <p>数据多写类型:<br>1- 只多写采集指标<br>2- 只多写预聚合指标<br>3- 同时多写采集和预聚合指标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteWriteType;

    /**
     * @param string $URL <p>多写url</p>
     * @param string $URLRelabelConfig <p>RelabelConfig</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BasicAuth $BasicAuth <p>鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaxBlockSize <p>最大block</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Label <p>Label</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Headers <p>HTTP 额外添加的头</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemoteWriteType <p>数据多写类型:<br>1- 只多写采集指标<br>2- 只多写预聚合指标<br>3- 同时多写采集和预聚合指标</p>
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

        if (array_key_exists("RemoteWriteType",$param) and $param["RemoteWriteType"] !== null) {
            $this->RemoteWriteType = $param["RemoteWriteType"];
        }
    }
}
