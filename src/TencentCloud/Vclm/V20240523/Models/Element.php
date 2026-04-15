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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Element
 *
 * @method string getElementId() 获取<p>ID配置</p>
 * @method void setElementId(string $ElementId) 设置<p>ID配置</p>
 */
class Element extends AbstractModel
{
    /**
     * @var string <p>ID配置</p>
     */
    public $ElementId;

    /**
     * @param string $ElementId <p>ID配置</p>
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
        if (array_key_exists("ElementId",$param) and $param["ElementId"] !== null) {
            $this->ElementId = $param["ElementId"];
        }
    }
}
