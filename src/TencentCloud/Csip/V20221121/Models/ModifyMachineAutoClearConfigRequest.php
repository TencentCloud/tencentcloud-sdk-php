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
 * ModifyMachineAutoClearConfig请求参数结构体
 *
 * @method integer getClearRule() 获取<p>清理规则时间, 0 表示关闭, 单位为天, 最大为 30天</p>
 * @method void setClearRule(integer $ClearRule) 设置<p>清理规则时间, 0 表示关闭, 单位为天, 最大为 30天</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class ModifyMachineAutoClearConfigRequest extends AbstractModel
{
    /**
     * @var integer <p>清理规则时间, 0 表示关闭, 单位为天, 最大为 30天</p>
     */
    public $ClearRule;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param integer $ClearRule <p>清理规则时间, 0 表示关闭, 单位为天, 最大为 30天</p>
     * @param array $MemberId <p>集团账号的成员id</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
