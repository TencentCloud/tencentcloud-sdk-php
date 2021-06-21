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
 * CreatePacketFilterConfig请求参数结构体
 *
 * @method string getInstanceId() 获取资源实例ID
 * @method void setInstanceId(string $InstanceId) 设置资源实例ID
 * @method PacketFilterConfig getPacketFilterConfig() 获取特征过滤规则
 * @method void setPacketFilterConfig(PacketFilterConfig $PacketFilterConfig) 设置特征过滤规则
 */
class CreatePacketFilterConfigRequest extends AbstractModel
{
    /**
     * @var string 资源实例ID
     */
    public $InstanceId;

    /**
     * @var PacketFilterConfig 特征过滤规则
     */
    public $PacketFilterConfig;

    /**
     * @param string $InstanceId 资源实例ID
     * @param PacketFilterConfig $PacketFilterConfig 特征过滤规则
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

        if (array_key_exists("PacketFilterConfig",$param) and $param["PacketFilterConfig"] !== null) {
            $this->PacketFilterConfig = new PacketFilterConfig();
            $this->PacketFilterConfig->deserialize($param["PacketFilterConfig"]);
        }
    }
}
