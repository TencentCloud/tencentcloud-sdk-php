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
 * ModifyDspmIdentifyRuleStatus请求参数结构体
 *
 * @method array getIds() 获取<p>数据项id</p>
 * @method void setIds(array $Ids) 设置<p>数据项id</p>
 * @method integer getStatus() 获取<p>数据项状态</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
 * @method void setStatus(integer $Status) 设置<p>数据项状态</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class ModifyDspmIdentifyRuleStatusRequest extends AbstractModel
{
    /**
     * @var array <p>数据项id</p>
     */
    public $Ids;

    /**
     * @var integer <p>数据项状态</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
     */
    public $Status;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param array $Ids <p>数据项id</p>
     * @param integer $Status <p>数据项状态</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
