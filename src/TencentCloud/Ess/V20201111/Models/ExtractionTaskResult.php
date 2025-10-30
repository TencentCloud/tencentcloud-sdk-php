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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同信息提取结果
 *
 * @method string getResourceId() 获取用于合同信息提取的资源ID。
 * @method void setResourceId(string $ResourceId) 设置用于合同信息提取的资源ID。
 * @method string getResourceName() 获取用于合同信息提取的资源名称。
 * @method void setResourceName(string $ResourceName) 设置用于合同信息提取的资源名称。
 * @method array getExtractionFieldResults() 获取根据当前合同提取出的字段信息
 * @method void setExtractionFieldResults(array $ExtractionFieldResults) 设置根据当前合同提取出的字段信息
 */
class ExtractionTaskResult extends AbstractModel
{
    /**
     * @var string 用于合同信息提取的资源ID。
     */
    public $ResourceId;

    /**
     * @var string 用于合同信息提取的资源名称。
     */
    public $ResourceName;

    /**
     * @var array 根据当前合同提取出的字段信息
     */
    public $ExtractionFieldResults;

    /**
     * @param string $ResourceId 用于合同信息提取的资源ID。
     * @param string $ResourceName 用于合同信息提取的资源名称。
     * @param array $ExtractionFieldResults 根据当前合同提取出的字段信息
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ExtractionFieldResults",$param) and $param["ExtractionFieldResults"] !== null) {
            $this->ExtractionFieldResults = [];
            foreach ($param["ExtractionFieldResults"] as $key => $value){
                $obj = new ExtractionFieldResult();
                $obj->deserialize($value);
                array_push($this->ExtractionFieldResults, $obj);
            }
        }
    }
}
