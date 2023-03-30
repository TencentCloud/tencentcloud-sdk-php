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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceModifyDBInstanceSpec请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同。
 * @method integer getMemory() 获取变更配置后实例内存大小，单位：GB。
 * @method void setMemory(integer $Memory) 设置变更配置后实例内存大小，单位：GB。
 * @method integer getVolume() 获取变更配置后实例磁盘大小，单位：GB。
 * @method void setVolume(integer $Volume) 设置变更配置后实例磁盘大小，单位：GB。
 * @method integer getNodeNum() 获取实例节点数。默认为不变更节点数，暂不支持变更。
 * @method void setNodeNum(integer $NodeNum) 设置实例节点数。默认为不变更节点数，暂不支持变更。
 * @method integer getReplicateSetNum() 获取实例分片数。默认为不变更分片数，暂不支持变更。
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置实例分片数。默认为不变更分片数，暂不支持变更。
 */
class InquirePriceModifyDBInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同。
     */
    public $InstanceId;

    /**
     * @var integer 变更配置后实例内存大小，单位：GB。
     */
    public $Memory;

    /**
     * @var integer 变更配置后实例磁盘大小，单位：GB。
     */
    public $Volume;

    /**
     * @var integer 实例节点数。默认为不变更节点数，暂不支持变更。
     */
    public $NodeNum;

    /**
     * @var integer 实例分片数。默认为不变更分片数，暂不支持变更。
     */
    public $ReplicateSetNum;

    /**
     * @param string $InstanceId 实例 ID，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同。
     * @param integer $Memory 变更配置后实例内存大小，单位：GB。
     * @param integer $Volume 变更配置后实例磁盘大小，单位：GB。
     * @param integer $NodeNum 实例节点数。默认为不变更节点数，暂不支持变更。
     * @param integer $ReplicateSetNum 实例分片数。默认为不变更分片数，暂不支持变更。
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ReplicateSetNum",$param) and $param["ReplicateSetNum"] !== null) {
            $this->ReplicateSetNum = $param["ReplicateSetNum"];
        }
    }
}
