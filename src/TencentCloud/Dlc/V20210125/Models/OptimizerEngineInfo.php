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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据优化引擎信息
 *
 * @method string getHouseName() 获取引擎资源名称
 * @method void setHouseName(string $HouseName) 设置引擎资源名称
 * @method string getHouseId() 获取引擎资源ID
 * @method void setHouseId(string $HouseId) 设置引擎资源ID
 * @method integer getHouseSize() 获取该参数仅针对spark作业引擎有效，用于执行数据优化任务的资源大小，不填时将采用该引擎所有资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHouseSize(integer $HouseSize) 设置该参数仅针对spark作业引擎有效，用于执行数据优化任务的资源大小，不填时将采用该引擎所有资源
注意：此字段可能返回 null，表示取不到有效值。
 */
class OptimizerEngineInfo extends AbstractModel
{
    /**
     * @var string 引擎资源名称
     */
    public $HouseName;

    /**
     * @var string 引擎资源ID
     */
    public $HouseId;

    /**
     * @var integer 该参数仅针对spark作业引擎有效，用于执行数据优化任务的资源大小，不填时将采用该引擎所有资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HouseSize;

    /**
     * @param string $HouseName 引擎资源名称
     * @param string $HouseId 引擎资源ID
     * @param integer $HouseSize 该参数仅针对spark作业引擎有效，用于执行数据优化任务的资源大小，不填时将采用该引擎所有资源
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
        if (array_key_exists("HouseName",$param) and $param["HouseName"] !== null) {
            $this->HouseName = $param["HouseName"];
        }

        if (array_key_exists("HouseId",$param) and $param["HouseId"] !== null) {
            $this->HouseId = $param["HouseId"];
        }

        if (array_key_exists("HouseSize",$param) and $param["HouseSize"] !== null) {
            $this->HouseSize = $param["HouseSize"];
        }
    }
}
