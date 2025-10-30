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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMachineAutoClearConfig请求参数结构体
 *
 * @method integer getClearRule() 获取清理规则时间, 0 表示关闭, 单位为天, 最大为 30天
 * @method void setClearRule(integer $ClearRule) 设置清理规则时间, 0 表示关闭, 单位为天, 最大为 30天
 */
class ModifyMachineAutoClearConfigRequest extends AbstractModel
{
    /**
     * @var integer 清理规则时间, 0 表示关闭, 单位为天, 最大为 30天
     */
    public $ClearRule;

    /**
     * @param integer $ClearRule 清理规则时间, 0 表示关闭, 单位为天, 最大为 30天
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
        if (array_key_exists("ClearRule",$param) and $param["ClearRule"] !== null) {
            $this->ClearRule = $param["ClearRule"];
        }
    }
}
