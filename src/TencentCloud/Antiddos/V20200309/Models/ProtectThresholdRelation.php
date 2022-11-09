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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防护阈值配置相关信息
 *
 * @method string getDDoSLevel() 获取DDoS防护等级，取值[
low(宽松)
middle(适中)
high(严格)
]
 * @method void setDDoSLevel(string $DDoSLevel) 设置DDoS防护等级，取值[
low(宽松)
middle(适中)
high(严格)
]
 * @method integer getDDoSThreshold() 获取DDoS清洗阈值，单位Mbps
 * @method void setDDoSThreshold(integer $DDoSThreshold) 设置DDoS清洗阈值，单位Mbps
 * @method string getDDoSAI() 获取DDoS的AI防护开关，取值[
on(开启)
off(关闭)
]
 * @method void setDDoSAI(string $DDoSAI) 设置DDoS的AI防护开关，取值[
on(开启)
off(关闭)
]
 * @method integer getCCEnable() 获取CC清洗开关，取值[
0(关闭)
1(开启)
]
 * @method void setCCEnable(integer $CCEnable) 设置CC清洗开关，取值[
0(关闭)
1(开启)
]
 * @method integer getCCThreshold() 获取CC清洗阈值，单位QPS
 * @method void setCCThreshold(integer $CCThreshold) 设置CC清洗阈值，单位QPS
 * @method array getInstanceDetailList() 获取所属的资源实例
 * @method void setInstanceDetailList(array $InstanceDetailList) 设置所属的资源实例
 * @method array getListenerCcThresholdList() 获取域名与协议纬度的防护阈值
 * @method void setListenerCcThresholdList(array $ListenerCcThresholdList) 设置域名与协议纬度的防护阈值
 * @method integer getSynFloodThreshold() 获取SYN FLOOD流量阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSynFloodThreshold(integer $SynFloodThreshold) 设置SYN FLOOD流量阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSynFloodPktThreshold() 获取SYN FLOOD包量阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSynFloodPktThreshold(integer $SynFloodPktThreshold) 设置SYN FLOOD包量阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUdpFloodThreshold() 获取UDP FLOOD流量阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUdpFloodThreshold(integer $UdpFloodThreshold) 设置UDP FLOOD流量阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUdpFloodPktThreshold() 获取UDP FLOOD包量阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUdpFloodPktThreshold(integer $UdpFloodPktThreshold) 设置UDP FLOOD包量阈值
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProtectThresholdRelation extends AbstractModel
{
    /**
     * @var string DDoS防护等级，取值[
low(宽松)
middle(适中)
high(严格)
]
     */
    public $DDoSLevel;

    /**
     * @var integer DDoS清洗阈值，单位Mbps
     */
    public $DDoSThreshold;

    /**
     * @var string DDoS的AI防护开关，取值[
on(开启)
off(关闭)
]
     */
    public $DDoSAI;

    /**
     * @var integer CC清洗开关，取值[
0(关闭)
1(开启)
]
     */
    public $CCEnable;

    /**
     * @var integer CC清洗阈值，单位QPS
     */
    public $CCThreshold;

    /**
     * @var array 所属的资源实例
     */
    public $InstanceDetailList;

    /**
     * @var array 域名与协议纬度的防护阈值
     */
    public $ListenerCcThresholdList;

    /**
     * @var integer SYN FLOOD流量阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SynFloodThreshold;

    /**
     * @var integer SYN FLOOD包量阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SynFloodPktThreshold;

    /**
     * @var integer UDP FLOOD流量阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UdpFloodThreshold;

    /**
     * @var integer UDP FLOOD包量阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UdpFloodPktThreshold;

    /**
     * @param string $DDoSLevel DDoS防护等级，取值[
low(宽松)
middle(适中)
high(严格)
]
     * @param integer $DDoSThreshold DDoS清洗阈值，单位Mbps
     * @param string $DDoSAI DDoS的AI防护开关，取值[
on(开启)
off(关闭)
]
     * @param integer $CCEnable CC清洗开关，取值[
0(关闭)
1(开启)
]
     * @param integer $CCThreshold CC清洗阈值，单位QPS
     * @param array $InstanceDetailList 所属的资源实例
     * @param array $ListenerCcThresholdList 域名与协议纬度的防护阈值
     * @param integer $SynFloodThreshold SYN FLOOD流量阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SynFloodPktThreshold SYN FLOOD包量阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UdpFloodThreshold UDP FLOOD流量阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UdpFloodPktThreshold UDP FLOOD包量阈值
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
        if (array_key_exists("DDoSLevel",$param) and $param["DDoSLevel"] !== null) {
            $this->DDoSLevel = $param["DDoSLevel"];
        }

        if (array_key_exists("DDoSThreshold",$param) and $param["DDoSThreshold"] !== null) {
            $this->DDoSThreshold = $param["DDoSThreshold"];
        }

        if (array_key_exists("DDoSAI",$param) and $param["DDoSAI"] !== null) {
            $this->DDoSAI = $param["DDoSAI"];
        }

        if (array_key_exists("CCEnable",$param) and $param["CCEnable"] !== null) {
            $this->CCEnable = $param["CCEnable"];
        }

        if (array_key_exists("CCThreshold",$param) and $param["CCThreshold"] !== null) {
            $this->CCThreshold = $param["CCThreshold"];
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }

        if (array_key_exists("ListenerCcThresholdList",$param) and $param["ListenerCcThresholdList"] !== null) {
            $this->ListenerCcThresholdList = [];
            foreach ($param["ListenerCcThresholdList"] as $key => $value){
                $obj = new ListenerCcThreholdConfig();
                $obj->deserialize($value);
                array_push($this->ListenerCcThresholdList, $obj);
            }
        }

        if (array_key_exists("SynFloodThreshold",$param) and $param["SynFloodThreshold"] !== null) {
            $this->SynFloodThreshold = $param["SynFloodThreshold"];
        }

        if (array_key_exists("SynFloodPktThreshold",$param) and $param["SynFloodPktThreshold"] !== null) {
            $this->SynFloodPktThreshold = $param["SynFloodPktThreshold"];
        }

        if (array_key_exists("UdpFloodThreshold",$param) and $param["UdpFloodThreshold"] !== null) {
            $this->UdpFloodThreshold = $param["UdpFloodThreshold"];
        }

        if (array_key_exists("UdpFloodPktThreshold",$param) and $param["UdpFloodPktThreshold"] !== null) {
            $this->UdpFloodPktThreshold = $param["UdpFloodPktThreshold"];
        }
    }
}
