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
 * CopyBaselinePolicy请求参数结构体
 *
 * @method integer getPolicyID() 获取<p>被复制的策略ID</p>
 * @method void setPolicyID(integer $PolicyID) 设置<p>被复制的策略ID</p>
 * @method array getTargetAppIDList() 获取<p>复制的目标AppID</p>
 * @method void setTargetAppIDList(array $TargetAppIDList) 设置<p>复制的目标AppID</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class CopyBaselinePolicyRequest extends AbstractModel
{
    /**
     * @var integer <p>被复制的策略ID</p>
     */
    public $PolicyID;

    /**
     * @var array <p>复制的目标AppID</p>
     */
    public $TargetAppIDList;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param integer $PolicyID <p>被复制的策略ID</p>
     * @param array $TargetAppIDList <p>复制的目标AppID</p>
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
        if (array_key_exists("PolicyID",$param) and $param["PolicyID"] !== null) {
            $this->PolicyID = $param["PolicyID"];
        }

        if (array_key_exists("TargetAppIDList",$param) and $param["TargetAppIDList"] !== null) {
            $this->TargetAppIDList = $param["TargetAppIDList"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
