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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrainingModelVersions请求参数结构体
 *
 * @method string getTrainingModelId() 获取<p>模型ID</p>
 * @method void setTrainingModelId(string $TrainingModelId) 设置<p>模型ID</p>
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method array getFilters() 获取<p>过滤条件<br>Filter.Name: 枚举值:<br>    TrainingModelVersionId (模型版本ID)<br>    ModelVersionType (模型版本类型) 其值支持: NORMAL(通用) ACCELERATE (加速)<br>    ModelFormat（模型格式）其值Filter.Values支持：<br>TORCH_SCRIPT/PYTORCH/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/PMML<br>    AlgorithmFramework (算法框架) 其值Filter.Values支持：TENSORFLOW/PYTORCH/DETECTRON2<br>Filter.Values: 当长度为1时，支持模糊查询; 不为1时，精确查询<br>每次请求的Filters的上限为10，Filter.Values的上限为100</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件<br>Filter.Name: 枚举值:<br>    TrainingModelVersionId (模型版本ID)<br>    ModelVersionType (模型版本类型) 其值支持: NORMAL(通用) ACCELERATE (加速)<br>    ModelFormat（模型格式）其值Filter.Values支持：<br>TORCH_SCRIPT/PYTORCH/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/PMML<br>    AlgorithmFramework (算法框架) 其值Filter.Values支持：TENSORFLOW/PYTORCH/DETECTRON2<br>Filter.Values: 当长度为1时，支持模糊查询; 不为1时，精确查询<br>每次请求的Filters的上限为10，Filter.Values的上限为100</p>
 */
class DescribeTrainingModelVersionsRequest extends AbstractModel
{
    /**
     * @var string <p>模型ID</p>
     */
    public $TrainingModelId;

    /**
     * @var string <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     */
    public $TiProjectId;

    /**
     * @var array <p>过滤条件<br>Filter.Name: 枚举值:<br>    TrainingModelVersionId (模型版本ID)<br>    ModelVersionType (模型版本类型) 其值支持: NORMAL(通用) ACCELERATE (加速)<br>    ModelFormat（模型格式）其值Filter.Values支持：<br>TORCH_SCRIPT/PYTORCH/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/PMML<br>    AlgorithmFramework (算法框架) 其值Filter.Values支持：TENSORFLOW/PYTORCH/DETECTRON2<br>Filter.Values: 当长度为1时，支持模糊查询; 不为1时，精确查询<br>每次请求的Filters的上限为10，Filter.Values的上限为100</p>
     */
    public $Filters;

    /**
     * @param string $TrainingModelId <p>模型ID</p>
     * @param string $TiProjectId <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     * @param array $Filters <p>过滤条件<br>Filter.Name: 枚举值:<br>    TrainingModelVersionId (模型版本ID)<br>    ModelVersionType (模型版本类型) 其值支持: NORMAL(通用) ACCELERATE (加速)<br>    ModelFormat（模型格式）其值Filter.Values支持：<br>TORCH_SCRIPT/PYTORCH/DETECTRON2/SAVED_MODEL/FROZEN_GRAPH/PMML<br>    AlgorithmFramework (算法框架) 其值Filter.Values支持：TENSORFLOW/PYTORCH/DETECTRON2<br>Filter.Values: 当长度为1时，支持模糊查询; 不为1时，精确查询<br>每次请求的Filters的上限为10，Filter.Values的上限为100</p>
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

        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
