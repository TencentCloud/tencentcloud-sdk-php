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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IM满意度
 *
 * @method integer getId() 获取满意度值
 * @method void setId(integer $Id) 设置满意度值
 * @method string getLabel() 获取满意度标签
 * @method void setLabel(string $Label) 设置满意度标签
 */
class IMSatisfaction extends AbstractModel
{
    /**
     * @var integer 满意度值
     */
    public $Id;

    /**
     * @var string 满意度标签
     */
    public $Label;

    /**
     * @param integer $Id 满意度值
     * @param string $Label 满意度标签
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
