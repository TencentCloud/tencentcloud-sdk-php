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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务侧实例过滤参数
 *
 * @method string getName() 获取1. 项目 ProjectId
    - true = 精确查找
    - false = 模糊匹配
2. 标签键 TagKey
    - true = 精确查找
    - false = 模糊匹配
3. 标签 Tag
    - true = 精确查找
    - false = 模糊匹配
4. 实例名称 InstanceName
    - true = 精确查找
    - false = 模糊匹配
5. 实例ID InstanceId
    - true = 精确查找
    - false = 模糊匹配


 * @method void setName(string $Name) 设置1. 项目 ProjectId
    - true = 精确查找
    - false = 模糊匹配
2. 标签键 TagKey
    - true = 精确查找
    - false = 模糊匹配
3. 标签 Tag
    - true = 精确查找
    - false = 模糊匹配
4. 实例名称 InstanceName
    - true = 精确查找
    - false = 模糊匹配
5. 实例ID InstanceId
    - true = 精确查找
    - false = 模糊匹配


 * @method array getValues() 获取值
 * @method void setValues(array $Values) 设置值
 * @method boolean getExactMatch() 获取开关
 * @method void setExactMatch(boolean $ExactMatch) 设置开关
 */
class Filter extends AbstractModel
{
    /**
     * @var string 1. 项目 ProjectId
    - true = 精确查找
    - false = 模糊匹配
2. 标签键 TagKey
    - true = 精确查找
    - false = 模糊匹配
3. 标签 Tag
    - true = 精确查找
    - false = 模糊匹配
4. 实例名称 InstanceName
    - true = 精确查找
    - false = 模糊匹配
5. 实例ID InstanceId
    - true = 精确查找
    - false = 模糊匹配


     */
    public $Name;

    /**
     * @var array 值
     */
    public $Values;

    /**
     * @var boolean 开关
     */
    public $ExactMatch;

    /**
     * @param string $Name 1. 项目 ProjectId
    - true = 精确查找
    - false = 模糊匹配
2. 标签键 TagKey
    - true = 精确查找
    - false = 模糊匹配
3. 标签 Tag
    - true = 精确查找
    - false = 模糊匹配
4. 实例名称 InstanceName
    - true = 精确查找
    - false = 模糊匹配
5. 实例ID InstanceId
    - true = 精确查找
    - false = 模糊匹配


     * @param array $Values 值
     * @param boolean $ExactMatch 开关
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
