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
 * UpdateInferenceModel请求参数结构体
 *
 * @method string getModelUid() 获取<p>推理模型UID</p>
 * @method void setModelUid(string $ModelUid) 设置<p>推理模型UID</p>
 * @method string getName() 获取<p>模型名称（可选，不传则不修改）</p>
 * @method void setName(string $Name) 设置<p>模型名称（可选，不传则不修改）</p>
 * @method string getDescription() 获取<p>模型描述（可选）</p>
 * @method void setDescription(string $Description) 设置<p>模型描述（可选）</p>
 * @method string getParameterSize() 获取<p>模型参数量（可选，如 7B、1.5B）</p>
 * @method void setParameterSize(string $ParameterSize) 设置<p>模型参数量（可选，如 7B、1.5B）</p>
 * @method array getTags() 获取<p>模型标签列表（可选）</p>
 * @method void setTags(array $Tags) 设置<p>模型标签列表（可选）</p>
 */
class UpdateInferenceModelRequest extends AbstractModel
{
    /**
     * @var string <p>推理模型UID</p>
     */
    public $ModelUid;

    /**
     * @var string <p>模型名称（可选，不传则不修改）</p>
     */
    public $Name;

    /**
     * @var string <p>模型描述（可选）</p>
     */
    public $Description;

    /**
     * @var string <p>模型参数量（可选，如 7B、1.5B）</p>
     */
    public $ParameterSize;

    /**
     * @var array <p>模型标签列表（可选）</p>
     */
    public $Tags;

    /**
     * @param string $ModelUid <p>推理模型UID</p>
     * @param string $Name <p>模型名称（可选，不传则不修改）</p>
     * @param string $Description <p>模型描述（可选）</p>
     * @param string $ParameterSize <p>模型参数量（可选，如 7B、1.5B）</p>
     * @param array $Tags <p>模型标签列表（可选）</p>
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
        if (array_key_exists("ModelUid",$param) and $param["ModelUid"] !== null) {
            $this->ModelUid = $param["ModelUid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ParameterSize",$param) and $param["ParameterSize"] !== null) {
            $this->ParameterSize = $param["ParameterSize"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
