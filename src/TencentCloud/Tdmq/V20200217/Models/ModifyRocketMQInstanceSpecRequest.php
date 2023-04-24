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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRocketMQInstanceSpec请求参数结构体
 *
 * @method string getInstanceId() 获取专享实例ID
 * @method void setInstanceId(string $InstanceId) 设置专享实例ID
 * @method string getSpecification() 获取实例规格，
rocket-vip-basic-1 基础型
rocket-vip-basic-2 标准型
rocket-vip-basic-3 高阶Ⅰ型
rocket-vip-basic-4 高阶Ⅱ型
 * @method void setSpecification(string $Specification) 设置实例规格，
rocket-vip-basic-1 基础型
rocket-vip-basic-2 标准型
rocket-vip-basic-3 高阶Ⅰ型
rocket-vip-basic-4 高阶Ⅱ型
 * @method integer getNodeCount() 获取节点数量
 * @method void setNodeCount(integer $NodeCount) 设置节点数量
 * @method integer getStorageSize() 获取存储空间，GB为单位
 * @method void setStorageSize(integer $StorageSize) 设置存储空间，GB为单位
 */
class ModifyRocketMQInstanceSpecRequest extends AbstractModel
{
    /**
     * @var string 专享实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例规格，
rocket-vip-basic-1 基础型
rocket-vip-basic-2 标准型
rocket-vip-basic-3 高阶Ⅰ型
rocket-vip-basic-4 高阶Ⅱ型
     */
    public $Specification;

    /**
     * @var integer 节点数量
     */
    public $NodeCount;

    /**
     * @var integer 存储空间，GB为单位
     */
    public $StorageSize;

    /**
     * @param string $InstanceId 专享实例ID
     * @param string $Specification 实例规格，
rocket-vip-basic-1 基础型
rocket-vip-basic-2 标准型
rocket-vip-basic-3 高阶Ⅰ型
rocket-vip-basic-4 高阶Ⅱ型
     * @param integer $NodeCount 节点数量
     * @param integer $StorageSize 存储空间，GB为单位
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
    }
}
