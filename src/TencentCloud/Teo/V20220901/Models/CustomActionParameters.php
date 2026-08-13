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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定制配置操作参数。
 *
 * @method array getCustomActions() 获取<p>需要配置的定制配置列表。</p>
 * @method void setCustomActions(array $CustomActions) 设置<p>需要配置的定制配置列表。</p>
 */
class CustomActionParameters extends AbstractModel
{
    /**
     * @var array <p>需要配置的定制配置列表。</p>
     */
    public $CustomActions;

    /**
     * @param array $CustomActions <p>需要配置的定制配置列表。</p>
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
        if (array_key_exists("CustomActions",$param) and $param["CustomActions"] !== null) {
            $this->CustomActions = [];
            foreach ($param["CustomActions"] as $key => $value){
                $obj = new CustomAction();
                $obj->deserialize($value);
                array_push($this->CustomActions, $obj);
            }
        }
    }
}
