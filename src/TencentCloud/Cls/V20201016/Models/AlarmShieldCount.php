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
 * 告警屏蔽统计信息
 *
 * @method integer getTotalCount() 获取符合检索条件的告警屏蔽总数量
 * @method void setTotalCount(integer $TotalCount) 设置符合检索条件的告警屏蔽总数量
 * @method integer getInvalidCount() 获取告警屏蔽未生效数量
 * @method void setInvalidCount(integer $InvalidCount) 设置告警屏蔽未生效数量
 * @method integer getValidCount() 获取告警屏蔽生效中数量
 * @method void setValidCount(integer $ValidCount) 设置告警屏蔽生效中数量
 * @method integer getExpireCount() 获取告警屏蔽已过期数量
 * @method void setExpireCount(integer $ExpireCount) 设置告警屏蔽已过期数量
 */
class AlarmShieldCount extends AbstractModel
{
    /**
     * @var integer 符合检索条件的告警屏蔽总数量
     */
    public $TotalCount;

    /**
     * @var integer 告警屏蔽未生效数量
     */
    public $InvalidCount;

    /**
     * @var integer 告警屏蔽生效中数量
     */
    public $ValidCount;

    /**
     * @var integer 告警屏蔽已过期数量
     */
    public $ExpireCount;

    /**
     * @param integer $TotalCount 符合检索条件的告警屏蔽总数量
     * @param integer $InvalidCount 告警屏蔽未生效数量
     * @param integer $ValidCount 告警屏蔽生效中数量
     * @param integer $ExpireCount 告警屏蔽已过期数量
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

        if (array_key_exists("InvalidCount",$param) and $param["InvalidCount"] !== null) {
            $this->InvalidCount = $param["InvalidCount"];
        }

        if (array_key_exists("ValidCount",$param) and $param["ValidCount"] !== null) {
            $this->ValidCount = $param["ValidCount"];
        }

        if (array_key_exists("ExpireCount",$param) and $param["ExpireCount"] !== null) {
            $this->ExpireCount = $param["ExpireCount"];
        }
    }
}
