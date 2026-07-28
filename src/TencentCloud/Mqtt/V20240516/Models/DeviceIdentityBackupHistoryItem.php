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
 * 设备标识列表
 *
 * @method string getDeviceId() 获取<p>设备id</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>设备id</p>
 * @method integer getStatus() 获取<p>1:ENABLED-可用2:DISABLE-不可用</p>
 * @method void setStatus(integer $Status) 设置<p>1:ENABLED-可用2:DISABLE-不可用</p>
 * @method string getPrimaryKey() 获取<p>主要签名key（Base64编码）</p>
 * @method void setPrimaryKey(string $PrimaryKey) 设置<p>主要签名key（Base64编码）</p>
 * @method string getSecondaryKey() 获取<p>次要签名key（Base64编码）</p>
 * @method void setSecondaryKey(string $SecondaryKey) 设置<p>次要签名key（Base64编码）</p>
 * @method array getPropagatingProperties() 获取<p>传播属性列表</p>
 * @method void setPropagatingProperties(array $PropagatingProperties) 设置<p>传播属性列表</p>
 * @method string getSource() 获取<p>数据来源</p>
 * @method void setSource(string $Source) 设置<p>数据来源</p>
 * @method integer getModificationTime() 获取<p>修改时间</p><p>单位：毫秒级时间戳</p>
 * @method void setModificationTime(integer $ModificationTime) 设置<p>修改时间</p><p>单位：毫秒级时间戳</p>
 */
class DeviceIdentityBackupHistoryItem extends AbstractModel
{
    /**
     * @var string <p>设备id</p>
     */
    public $DeviceId;

    /**
     * @var integer <p>1:ENABLED-可用2:DISABLE-不可用</p>
     */
    public $Status;

    /**
     * @var string <p>主要签名key（Base64编码）</p>
     */
    public $PrimaryKey;

    /**
     * @var string <p>次要签名key（Base64编码）</p>
     */
    public $SecondaryKey;

    /**
     * @var array <p>传播属性列表</p>
     */
    public $PropagatingProperties;

    /**
     * @var string <p>数据来源</p>
     */
    public $Source;

    /**
     * @var integer <p>修改时间</p><p>单位：毫秒级时间戳</p>
     */
    public $ModificationTime;

    /**
     * @param string $DeviceId <p>设备id</p>
     * @param integer $Status <p>1:ENABLED-可用2:DISABLE-不可用</p>
     * @param string $PrimaryKey <p>主要签名key（Base64编码）</p>
     * @param string $SecondaryKey <p>次要签名key（Base64编码）</p>
     * @param array $PropagatingProperties <p>传播属性列表</p>
     * @param string $Source <p>数据来源</p>
     * @param integer $ModificationTime <p>修改时间</p><p>单位：毫秒级时间戳</p>
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PrimaryKey",$param) and $param["PrimaryKey"] !== null) {
            $this->PrimaryKey = $param["PrimaryKey"];
        }

        if (array_key_exists("SecondaryKey",$param) and $param["SecondaryKey"] !== null) {
            $this->SecondaryKey = $param["SecondaryKey"];
        }

        if (array_key_exists("PropagatingProperties",$param) and $param["PropagatingProperties"] !== null) {
            $this->PropagatingProperties = [];
            foreach ($param["PropagatingProperties"] as $key => $value){
                $obj = new PropagatingProperty();
                $obj->deserialize($value);
                array_push($this->PropagatingProperties, $obj);
            }
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("ModificationTime",$param) and $param["ModificationTime"] !== null) {
            $this->ModificationTime = $param["ModificationTime"];
        }
    }
}
