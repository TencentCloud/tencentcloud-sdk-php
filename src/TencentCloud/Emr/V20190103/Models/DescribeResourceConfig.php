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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceConfig接口出参
 *
 * @method string getResourceType() 获取规格管理类型
 * @method void setResourceType(string $ResourceType) 设置规格管理类型
 * @method array getResourceData() 获取规格管理数据
 * @method void setResourceData(array $ResourceData) 设置规格管理数据
 */
class DescribeResourceConfig extends AbstractModel
{
    /**
     * @var string 规格管理类型
     */
    public $ResourceType;

    /**
     * @var array 规格管理数据
     */
    public $ResourceData;

    /**
     * @param string $ResourceType 规格管理类型
     * @param array $ResourceData 规格管理数据
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceData",$param) and $param["ResourceData"] !== null) {
            $this->ResourceData = [];
            foreach ($param["ResourceData"] as $key => $value){
                $obj = new NodeResource();
                $obj->deserialize($value);
                array_push($this->ResourceData, $obj);
            }
        }
    }
}
