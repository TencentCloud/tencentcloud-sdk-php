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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTrainingModel请求参数结构体
 *
 * @method string getTrainingModelId() 获取模型ID
 * @method void setTrainingModelId(string $TrainingModelId) 设置模型ID
 * @method boolean getEnableDeleteCos() 获取是否同步清理cos
 * @method void setEnableDeleteCos(boolean $EnableDeleteCos) 设置是否同步清理cos
 * @method string getModelVersionType() 获取删除模型类型，枚举值：NORMAL 普通，ACCELERATE 加速，不传则删除所有
 * @method void setModelVersionType(string $ModelVersionType) 设置删除模型类型，枚举值：NORMAL 普通，ACCELERATE 加速，不传则删除所有
 */
class DeleteTrainingModelRequest extends AbstractModel
{
    /**
     * @var string 模型ID
     */
    public $TrainingModelId;

    /**
     * @var boolean 是否同步清理cos
     */
    public $EnableDeleteCos;

    /**
     * @var string 删除模型类型，枚举值：NORMAL 普通，ACCELERATE 加速，不传则删除所有
     */
    public $ModelVersionType;

    /**
     * @param string $TrainingModelId 模型ID
     * @param boolean $EnableDeleteCos 是否同步清理cos
     * @param string $ModelVersionType 删除模型类型，枚举值：NORMAL 普通，ACCELERATE 加速，不传则删除所有
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
        if (array_key_exists("TrainingModelId",$param) and $param["TrainingModelId"] !== null) {
            $this->TrainingModelId = $param["TrainingModelId"];
        }

        if (array_key_exists("EnableDeleteCos",$param) and $param["EnableDeleteCos"] !== null) {
            $this->EnableDeleteCos = $param["EnableDeleteCos"];
        }

        if (array_key_exists("ModelVersionType",$param) and $param["ModelVersionType"] !== null) {
            $this->ModelVersionType = $param["ModelVersionType"];
        }
    }
}
