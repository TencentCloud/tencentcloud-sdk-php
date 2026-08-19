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
 * StopProcessDaemon请求参数结构体
 *
 * @method integer getStopGlobal() 获取<p>是否关闭全局 0 否 1 是</p>
 * @method void setStopGlobal(integer $StopGlobal) 设置<p>是否关闭全局 0 否 1 是</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getQuuid() 获取<p>不是全局的情况下关闭的quuid集合</p>
 * @method void setQuuid(array $Quuid) 设置<p>不是全局的情况下关闭的quuid集合</p>
 */
class StopProcessDaemonRequest extends AbstractModel
{
    /**
     * @var integer <p>是否关闭全局 0 否 1 是</p>
     */
    public $StopGlobal;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>不是全局的情况下关闭的quuid集合</p>
     */
    public $Quuid;

    /**
     * @param integer $StopGlobal <p>是否关闭全局 0 否 1 是</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Quuid <p>不是全局的情况下关闭的quuid集合</p>
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
        if (array_key_exists("StopGlobal",$param) and $param["StopGlobal"] !== null) {
            $this->StopGlobal = $param["StopGlobal"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
