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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRocketMQInstanceSpec请求参数结构体
 *
 * @method string getInstanceId() 获取<p>专享实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>专享实例ID</p>
 * @method string getSpecification() 获取<p>实例规格，<br>rocket-vip-basic-1 基础型<br>rocket-vip-basic-2 标准型<br>rocket-vip-basic-3 高阶Ⅰ型<br>rocket-vip-basic-4 高阶Ⅱ型</p>
 * @method void setSpecification(string $Specification) 设置<p>实例规格，<br>rocket-vip-basic-1 基础型<br>rocket-vip-basic-2 标准型<br>rocket-vip-basic-3 高阶Ⅰ型<br>rocket-vip-basic-4 高阶Ⅱ型</p>
 * @method integer getNodeCount() 获取<p>节点数量</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>节点数量</p>
 * @method integer getStorageSize() 获取<p>存储空间，GB为单位</p>
 * @method void setStorageSize(integer $StorageSize) 设置<p>存储空间，GB为单位</p>
 * @method array getZoneIds() 获取<p>部署可用区列表</p>
 * @method void setZoneIds(array $ZoneIds) 设置<p>部署可用区列表</p>
 */
class ModifyRocketMQInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string <p>专享实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例规格，<br>rocket-vip-basic-1 基础型<br>rocket-vip-basic-2 标准型<br>rocket-vip-basic-3 高阶Ⅰ型<br>rocket-vip-basic-4 高阶Ⅱ型</p>
     */
    public $Specification;

    /**
     * @var integer <p>节点数量</p>
     */
    public $NodeCount;

    /**
     * @var integer <p>存储空间，GB为单位</p>
     */
    public $StorageSize;

    /**
     * @var array <p>部署可用区列表</p>
     */
    public $ZoneIds;

    /**
     * @param string $InstanceId <p>专享实例ID</p>
     * @param string $Specification <p>实例规格，<br>rocket-vip-basic-1 基础型<br>rocket-vip-basic-2 标准型<br>rocket-vip-basic-3 高阶Ⅰ型<br>rocket-vip-basic-4 高阶Ⅱ型</p>
     * @param integer $NodeCount <p>节点数量</p>
     * @param integer $StorageSize <p>存储空间，GB为单位</p>
     * @param array $ZoneIds <p>部署可用区列表</p>
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

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }
    }
}
