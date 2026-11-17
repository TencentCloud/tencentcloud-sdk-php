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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目列表过滤条件。同一条件的 Values 之间为或
 *
 * @method string getName() 获取<p>过滤字段。ProjectId、Name、Status、Provider</p>
 * @method void setName(string $Name) 设置<p>过滤字段。ProjectId、Name、Status、Provider</p>
 * @method array getValues() 获取<p>过滤值</p>
 * @method void setValues(array $Values) 设置<p>过滤值</p>
 */
class ProjectFilter extends AbstractModel
{
    /**
     * @var string <p>过滤字段。ProjectId、Name、Status、Provider</p>
     */
    public $Name;

    /**
     * @var array <p>过滤值</p>
     */
    public $Values;

    /**
     * @param string $Name <p>过滤字段。ProjectId、Name、Status、Provider</p>
     * @param array $Values <p>过滤值</p>
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
    }
}
