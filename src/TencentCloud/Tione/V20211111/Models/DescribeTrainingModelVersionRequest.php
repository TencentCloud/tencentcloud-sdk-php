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
 * DescribeTrainingModelVersion请求参数结构体
 *
 * @method string getTrainingModelVersionId() 获取模型版本ID
 * @method void setTrainingModelVersionId(string $TrainingModelVersionId) 设置模型版本ID
 */
class DescribeTrainingModelVersionRequest extends AbstractModel
{
    /**
     * @var string 模型版本ID
     */
    public $TrainingModelVersionId;

    /**
     * @param string $TrainingModelVersionId 模型版本ID
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
        if (array_key_exists("TrainingModelVersionId",$param) and $param["TrainingModelVersionId"] !== null) {
            $this->TrainingModelVersionId = $param["TrainingModelVersionId"];
        }
    }
}
