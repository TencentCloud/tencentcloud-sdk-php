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
 * ModifyDDoSThreshold请求参数结构体
 *
 * @method integer getThreshold() 获取DDoS清洗阈值，取值[0, 60, 80, 100, 150, 200, 250, 300, 400, 500, 700, 1000];
当设置值为0时，表示采用默认值；
 * @method void setThreshold(integer $Threshold) 设置DDoS清洗阈值，取值[0, 60, 80, 100, 150, 200, 250, 300, 400, 500, 700, 1000];
当设置值为0时，表示采用默认值；
 * @method string getId() 获取资源ID
 * @method void setId(string $Id) 设置资源ID
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method integer getOtherThresholdFlag() 获取配置其他阈值标志位，1表示配置其他阈值
 * @method void setOtherThresholdFlag(integer $OtherThresholdFlag) 设置配置其他阈值标志位，1表示配置其他阈值
 * @method integer getSynFloodThreshold() 获取SYN FLOOD流量阈值
 * @method void setSynFloodThreshold(integer $SynFloodThreshold) 设置SYN FLOOD流量阈值
 * @method integer getSynFloodPktThreshold() 获取SYN FLOOD包量阈值
 * @method void setSynFloodPktThreshold(integer $SynFloodPktThreshold) 设置SYN FLOOD包量阈值
 * @method integer getUdpFloodThreshold() 获取UDP FLOOD流量阈值
 * @method void setUdpFloodThreshold(integer $UdpFloodThreshold) 设置UDP FLOOD流量阈值
 * @method integer getUdpFloodPktThreshold() 获取UDP FLOOD包量阈值
 * @method void setUdpFloodPktThreshold(integer $UdpFloodPktThreshold) 设置UDP FLOOD包量阈值
 */
class ModifyDDoSThresholdRequest extends AbstractModel
{
    /**
     * @var integer DDoS清洗阈值，取值[0, 60, 80, 100, 150, 200, 250, 300, 400, 500, 700, 1000];
当设置值为0时，表示采用默认值；
     */
    public $Threshold;

    /**
     * @var string 资源ID
     */
    public $Id;

    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var integer 配置其他阈值标志位，1表示配置其他阈值
     */
    public $OtherThresholdFlag;

    /**
     * @var integer SYN FLOOD流量阈值
     */
    public $SynFloodThreshold;

    /**
     * @var integer SYN FLOOD包量阈值
     */
    public $SynFloodPktThreshold;

    /**
     * @var integer UDP FLOOD流量阈值
     */
    public $UdpFloodThreshold;

    /**
     * @var integer UDP FLOOD包量阈值
     */
    public $UdpFloodPktThreshold;

    /**
     * @param integer $Threshold DDoS清洗阈值，取值[0, 60, 80, 100, 150, 200, 250, 300, 400, 500, 700, 1000];
当设置值为0时，表示采用默认值；
     * @param string $Id 资源ID
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     * @param integer $OtherThresholdFlag 配置其他阈值标志位，1表示配置其他阈值
     * @param integer $SynFloodThreshold SYN FLOOD流量阈值
     * @param integer $SynFloodPktThreshold SYN FLOOD包量阈值
     * @param integer $UdpFloodThreshold UDP FLOOD流量阈值
     * @param integer $UdpFloodPktThreshold UDP FLOOD包量阈值
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
        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("OtherThresholdFlag",$param) and $param["OtherThresholdFlag"] !== null) {
            $this->OtherThresholdFlag = $param["OtherThresholdFlag"];
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
