<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 外呼任务被叫信息
 *
 * @method string getCallee() 获取被叫号码
 * @method void setCallee(string $Callee) 设置被叫号码
 * @method integer getState() 获取呼叫状态 0初始 1已接听 2未接听 3呼叫中 4待重试
 * @method void setState(integer $State) 设置呼叫状态 0初始 1已接听 2未接听 3呼叫中 4待重试
 * @method array getSessions() 获取会话ID列表
 * @method void setSessions(array $Sessions) 设置会话ID列表
 */
class AutoCalloutTaskCalleeInfo extends AbstractModel
{
    /**
     * @var string 被叫号码
     */
    public $Callee;

    /**
     * @var integer 呼叫状态 0初始 1已接听 2未接听 3呼叫中 4待重试
     */
    public $State;

    /**
     * @var array 会话ID列表
     */
    public $Sessions;

    /**
     * @param string $Callee 被叫号码
     * @param integer $State 呼叫状态 0初始 1已接听 2未接听 3呼叫中 4待重试
     * @param array $Sessions 会话ID列表
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
        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Sessions",$param) and $param["Sessions"] !== null) {
            $this->Sessions = $param["Sessions"];
        }
    }
}
