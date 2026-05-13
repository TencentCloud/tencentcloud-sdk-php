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
 * Dspm身份关联资产统计
 *
 * @method integer getManagerCount() 获取关联资产管理员数。
 * @method void setManagerCount(integer $ManagerCount) 设置关联资产管理员数。
 * @method integer getMemberCount() 获取关联资产普通成员数。
 * @method void setMemberCount(integer $MemberCount) 设置关联资产普通成员数。
 */
class DspmIdentifyAssetStatistic extends AbstractModel
{
    /**
     * @var integer 关联资产管理员数。
     */
    public $ManagerCount;

    /**
     * @var integer 关联资产普通成员数。
     */
    public $MemberCount;

    /**
     * @param integer $ManagerCount 关联资产管理员数。
     * @param integer $MemberCount 关联资产普通成员数。
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
        if (array_key_exists("ManagerCount",$param) and $param["ManagerCount"] !== null) {
            $this->ManagerCount = $param["ManagerCount"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }
    }
}
