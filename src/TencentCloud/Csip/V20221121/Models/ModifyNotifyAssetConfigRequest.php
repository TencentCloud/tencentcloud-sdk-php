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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNotifyAssetConfig请求参数结构体
 *
 * @method array getItems() 获取<p>资产范围配置</p>
 * @method void setItems(array $Items) 设置<p>资产范围配置</p>
 */
class ModifyNotifyAssetConfigRequest extends AbstractModel
{
    /**
     * @var array <p>资产范围配置</p>
     */
    public $Items;

    /**
     * @param array $Items <p>资产范围配置</p>
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new NotifyAssetConfigItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
