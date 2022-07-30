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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签及对应的值
 *
 * @method string getLabelName() 获取标签名称
 * @method void setLabelName(string $LabelName) 设置标签名称
 * @method array getLabelValues() 获取标签值
 * @method void setLabelValues(array $LabelValues) 设置标签值
 */
class LabelWithValues extends AbstractModel
{
    /**
     * @var string 标签名称
     */
    public $LabelName;

    /**
     * @var array 标签值
     */
    public $LabelValues;

    /**
     * @param string $LabelName 标签名称
     * @param array $LabelValues 标签值
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
        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("LabelValues",$param) and $param["LabelValues"] !== null) {
            $this->LabelValues = $param["LabelValues"];
        }
    }
}
