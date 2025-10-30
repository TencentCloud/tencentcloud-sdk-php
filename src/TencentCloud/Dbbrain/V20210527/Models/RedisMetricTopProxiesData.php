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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Redis  DescribeMetricTopProxies 接口返回数据
 *
 * @method string getHost() 获取host
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置host
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceProxyId() 获取Proxy Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceProxyId(string $InstanceProxyId) 设置Proxy Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getValue() 获取最新的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(float $Value) 设置最新的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTimestamp() 获取时间（秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(array $Timestamp) 设置时间（秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSeries() 获取序列数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeries(array $Series) 设置序列数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class RedisMetricTopProxiesData extends AbstractModel
{
    /**
     * @var string host
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var string Proxy Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceProxyId;

    /**
     * @var integer 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var float 最新的值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var array 时间（秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var array 序列数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Series;

    /**
     * @param string $Host host
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceProxyId Proxy Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Value 最新的值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Timestamp 时间（秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Series 序列数据
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("InstanceProxyId",$param) and $param["InstanceProxyId"] !== null) {
            $this->InstanceProxyId = $param["InstanceProxyId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = [];
            foreach ($param["Series"] as $key => $value){
                $obj = new MonitorFloatMetric();
                $obj->deserialize($value);
                array_push($this->Series, $obj);
            }
        }
    }
}
