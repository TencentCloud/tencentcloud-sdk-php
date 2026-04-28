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
 * 描述label详细信息
 *
 * @method string getLabelName() 获取标签名称
 * @method void setLabelName(string $LabelName) 设置标签名称
 * @method string getLabelColor() 获取标签的颜色
 * @method void setLabelColor(string $LabelColor) 设置标签的颜色
 */
class LabelValue extends AbstractModel
{
    /**
     * @var string 标签名称
     */
    public $LabelName;

    /**
     * @var string 标签的颜色
     */
    public $LabelColor;

    /**
     * @param string $LabelName 标签名称
     * @param string $LabelColor 标签的颜色
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

        if (array_key_exists("LabelColor",$param) and $param["LabelColor"] !== null) {
            $this->LabelColor = $param["LabelColor"];
        }
    }
}
