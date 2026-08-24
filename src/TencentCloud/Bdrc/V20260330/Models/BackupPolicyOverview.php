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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份策略概览
 *
 * @method integer getTotalCount() 获取自动备份策略总数
 * @method void setTotalCount(integer $TotalCount) 设置自动备份策略总数
 * @method integer getBoundCount() 获取已绑定资源的策略数
 * @method void setBoundCount(integer $BoundCount) 设置已绑定资源的策略数
 * @method integer getUnboundCount() 获取未绑定任何资源的策略数
 * @method void setUnboundCount(integer $UnboundCount) 设置未绑定任何资源的策略数
 */
class BackupPolicyOverview extends AbstractModel
{
    /**
     * @var integer 自动备份策略总数
     */
    public $TotalCount;

    /**
     * @var integer 已绑定资源的策略数
     */
    public $BoundCount;

    /**
     * @var integer 未绑定任何资源的策略数
     */
    public $UnboundCount;

    /**
     * @param integer $TotalCount 自动备份策略总数
     * @param integer $BoundCount 已绑定资源的策略数
     * @param integer $UnboundCount 未绑定任何资源的策略数
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("BoundCount",$param) and $param["BoundCount"] !== null) {
            $this->BoundCount = $param["BoundCount"];
        }

        if (array_key_exists("UnboundCount",$param) and $param["UnboundCount"] !== null) {
            $this->UnboundCount = $param["UnboundCount"];
        }
    }
}
