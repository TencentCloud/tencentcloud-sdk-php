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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型详情
 *
 * @method string getModel() 获取<p>模型版本名称</p>
 * @method void setModel(string $Model) 设置<p>模型版本名称</p>
 * @method string getVendor() 获取<p>模型厂商</p>
 * @method void setVendor(string $Vendor) 设置<p>模型厂商</p>
 */
class ModelList extends AbstractModel
{
    /**
     * @var string <p>模型版本名称</p>
     */
    public $Model;

    /**
     * @var string <p>模型厂商</p>
     */
    public $Vendor;

    /**
     * @param string $Model <p>模型版本名称</p>
     * @param string $Vendor <p>模型厂商</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }
    }
}
