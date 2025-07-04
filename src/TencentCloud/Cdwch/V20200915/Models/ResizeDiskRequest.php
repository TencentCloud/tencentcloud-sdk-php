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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResizeDisk请求参数结构体
 *
 * @method string getInstanceId() 获取实例唯一ID
 * @method void setInstanceId(string $InstanceId) 设置实例唯一ID
 * @method string getType() 获取节点类型，DATA：clickhouse节点，COMMON：为zookeeper节点
 * @method void setType(string $Type) 设置节点类型，DATA：clickhouse节点，COMMON：为zookeeper节点
 * @method integer getDiskSize() 获取磁盘扩容后容量，不能小于原有用量。clickhouse最小200，且为100的整数倍。 zk最小100，且为10的整数倍；
 * @method void setDiskSize(integer $DiskSize) 设置磁盘扩容后容量，不能小于原有用量。clickhouse最小200，且为100的整数倍。 zk最小100，且为10的整数倍；
 */
class ResizeDiskRequest extends AbstractModel
{
    /**
     * @var string 实例唯一ID
     */
    public $InstanceId;

    /**
     * @var string 节点类型，DATA：clickhouse节点，COMMON：为zookeeper节点
     */
    public $Type;

    /**
     * @var integer 磁盘扩容后容量，不能小于原有用量。clickhouse最小200，且为100的整数倍。 zk最小100，且为10的整数倍；
     */
    public $DiskSize;

    /**
     * @param string $InstanceId 实例唯一ID
     * @param string $Type 节点类型，DATA：clickhouse节点，COMMON：为zookeeper节点
     * @param integer $DiskSize 磁盘扩容后容量，不能小于原有用量。clickhouse最小200，且为100的整数倍。 zk最小100，且为10的整数倍；
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
