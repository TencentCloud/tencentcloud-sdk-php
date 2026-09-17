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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 投递规则
 *
 * @method integer getDataScope() 获取<p>数据投递范围。</p><p>枚举值：</p><ul><li>1： 历史+新增数据</li><li>2： 自定义时间范围</li><li>3： 仅新增</li></ul><p>本次仅支持3新增数据。后续支持： 2自定义时间范围和1历史+新增数据</p>
 * @method void setDataScope(integer $DataScope) 设置<p>数据投递范围。</p><p>枚举值：</p><ul><li>1： 历史+新增数据</li><li>2： 自定义时间范围</li><li>3： 仅新增</li></ul><p>本次仅支持3新增数据。后续支持： 2自定义时间范围和1历史+新增数据</p>
 */
class DeliverRule extends AbstractModel
{
    /**
     * @var integer <p>数据投递范围。</p><p>枚举值：</p><ul><li>1： 历史+新增数据</li><li>2： 自定义时间范围</li><li>3： 仅新增</li></ul><p>本次仅支持3新增数据。后续支持： 2自定义时间范围和1历史+新增数据</p>
     */
    public $DataScope;

    /**
     * @param integer $DataScope <p>数据投递范围。</p><p>枚举值：</p><ul><li>1： 历史+新增数据</li><li>2： 自定义时间范围</li><li>3： 仅新增</li></ul><p>本次仅支持3新增数据。后续支持： 2自定义时间范围和1历史+新增数据</p>
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
        if (array_key_exists("DataScope",$param) and $param["DataScope"] !== null) {
            $this->DataScope = $param["DataScope"];
        }
    }
}
