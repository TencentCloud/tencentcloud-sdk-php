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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAndroidInstanceLabels请求参数结构体
 *
 * @method array getKeys() 获取标签键列表
 * @method void setKeys(array $Keys) 设置标签键列表
 * @method array getValues() 获取标签值列表
 * @method void setValues(array $Values) 设置标签值列表
 * @method integer getOffset() 获取偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0
 * @method integer getLimit() 获取限制量，默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置限制量，默认为20，最大值为100
 */
class DescribeAndroidInstanceLabelsRequest extends AbstractModel
{
    /**
     * @var array 标签键列表
     */
    public $Keys;

    /**
     * @var array 标签值列表
     */
    public $Values;

    /**
     * @var integer 偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 限制量，默认为20，最大值为100
     */
    public $Limit;

    /**
     * @param array $Keys 标签键列表
     * @param array $Values 标签值列表
     * @param integer $Offset 偏移量，默认为 0
     * @param integer $Limit 限制量，默认为20，最大值为100
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
        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
