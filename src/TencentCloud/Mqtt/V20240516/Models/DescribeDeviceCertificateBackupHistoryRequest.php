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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceCertificateBackupHistory请求参数结构体
 *
 * @method string getInstanceId() 获取<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method string getDestination() 获取<p>目标集群的集群ID</p>
 * @method void setDestination(string $Destination) 设置<p>目标集群的集群ID</p>
 * @method string getCaSn() 获取<p>CA证书的SN</p>
 * @method void setCaSn(string $CaSn) 设置<p>CA证书的SN</p>
 * @method string getDeviceCertificateSn() 获取<p>设备证书的SN</p>
 * @method void setDeviceCertificateSn(string $DeviceCertificateSn) 设置<p>设备证书的SN</p>
 * @method integer getModificationTimeStart() 获取<p>同步发生开始时间（毫秒级时间戳）</p>
 * @method void setModificationTimeStart(integer $ModificationTimeStart) 设置<p>同步发生开始时间（毫秒级时间戳）</p>
 * @method integer getModificationTimeEnd() 获取<p>同步结束时间（毫秒级时间戳）</p>
 * @method void setModificationTimeEnd(integer $ModificationTimeEnd) 设置<p>同步结束时间（毫秒级时间戳）</p>
 * @method integer getLimit() 获取<p>查询条数，默认20，最大1024</p>
 * @method void setLimit(integer $Limit) 设置<p>查询条数，默认20，最大1024</p>
 */
class DescribeDeviceCertificateBackupHistoryRequest extends AbstractModel
{
    /**
     * @var string <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>目标集群的集群ID</p>
     */
    public $Destination;

    /**
     * @var string <p>CA证书的SN</p>
     */
    public $CaSn;

    /**
     * @var string <p>设备证书的SN</p>
     */
    public $DeviceCertificateSn;

    /**
     * @var integer <p>同步发生开始时间（毫秒级时间戳）</p>
     */
    public $ModificationTimeStart;

    /**
     * @var integer <p>同步结束时间（毫秒级时间戳）</p>
     */
    public $ModificationTimeEnd;

    /**
     * @var integer <p>查询条数，默认20，最大1024</p>
     */
    public $Limit;

    /**
     * @param string $InstanceId <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     * @param string $Destination <p>目标集群的集群ID</p>
     * @param string $CaSn <p>CA证书的SN</p>
     * @param string $DeviceCertificateSn <p>设备证书的SN</p>
     * @param integer $ModificationTimeStart <p>同步发生开始时间（毫秒级时间戳）</p>
     * @param integer $ModificationTimeEnd <p>同步结束时间（毫秒级时间戳）</p>
     * @param integer $Limit <p>查询条数，默认20，最大1024</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("CaSn",$param) and $param["CaSn"] !== null) {
            $this->CaSn = $param["CaSn"];
        }

        if (array_key_exists("DeviceCertificateSn",$param) and $param["DeviceCertificateSn"] !== null) {
            $this->DeviceCertificateSn = $param["DeviceCertificateSn"];
        }

        if (array_key_exists("ModificationTimeStart",$param) and $param["ModificationTimeStart"] !== null) {
            $this->ModificationTimeStart = $param["ModificationTimeStart"];
        }

        if (array_key_exists("ModificationTimeEnd",$param) and $param["ModificationTimeEnd"] !== null) {
            $this->ModificationTimeEnd = $param["ModificationTimeEnd"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
