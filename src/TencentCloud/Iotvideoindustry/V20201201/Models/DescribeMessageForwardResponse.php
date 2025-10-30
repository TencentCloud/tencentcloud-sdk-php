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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessageForward返回参数结构体
 *
 * @method string getRegionId() 获取区域ID
 * @method void setRegionId(string $RegionId) 设置区域ID
 * @method string getRegionName() 获取区域名称
 * @method void setRegionName(string $RegionName) 设置区域名称
 * @method string getInstance() 获取实例ID
 * @method void setInstance(string $Instance) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getIntId() 获取配置ID
 * @method void setIntId(integer $IntId) 设置配置ID
 * @method string getMessageType() 获取json数组， 转发类型 1: 告警 2:GPS
 * @method void setMessageType(string $MessageType) 设置json数组， 转发类型 1: 告警 2:GPS
 * @method string getTopicId() 获取kafka topic id
 * @method void setTopicId(string $TopicId) 设置kafka topic id
 * @method string getCreateTime() 获取配置创建时间
 * @method void setCreateTime(string $CreateTime) 设置配置创建时间
 * @method string getUin() 获取用户Uin信息
 * @method void setUin(string $Uin) 设置用户Uin信息
 * @method string getTopicName() 获取kafka topic 名称
 * @method void setTopicName(string $TopicName) 设置kafka topic 名称
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMessageForwardResponse extends AbstractModel
{
    /**
     * @var string 区域ID
     */
    public $RegionId;

    /**
     * @var string 区域名称
     */
    public $RegionName;

    /**
     * @var string 实例ID
     */
    public $Instance;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 配置ID
     */
    public $IntId;

    /**
     * @var string json数组， 转发类型 1: 告警 2:GPS
     */
    public $MessageType;

    /**
     * @var string kafka topic id
     */
    public $TopicId;

    /**
     * @var string 配置创建时间
     */
    public $CreateTime;

    /**
     * @var string 用户Uin信息
     */
    public $Uin;

    /**
     * @var string kafka topic 名称
     */
    public $TopicName;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RegionId 区域ID
     * @param string $RegionName 区域名称
     * @param string $Instance 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $IntId 配置ID
     * @param string $MessageType json数组， 转发类型 1: 告警 2:GPS
     * @param string $TopicId kafka topic id
     * @param string $CreateTime 配置创建时间
     * @param string $Uin 用户Uin信息
     * @param string $TopicName kafka topic 名称
     * @param string $UpdateTime 更新时间
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("IntId",$param) and $param["IntId"] !== null) {
            $this->IntId = $param["IntId"];
        }

        if (array_key_exists("MessageType",$param) and $param["MessageType"] !== null) {
            $this->MessageType = $param["MessageType"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
