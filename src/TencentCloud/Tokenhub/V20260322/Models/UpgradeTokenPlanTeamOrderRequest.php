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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeTokenPlanTeamOrder请求参数结构体
 *
 * @method string getTeamId() 获取套餐 ID。可通过 DescribeTokenPlanList 接口获取。
 * @method void setTeamId(string $TeamId) 设置套餐 ID。可通过 DescribeTokenPlanList 接口获取。
 * @method integer getNewCreditOrToken() 获取升配后的新规格额度。套餐类型为 enterprise 时表示积分额度，套餐类型为 enterprise-auto 时表示 Token 数。必须大于当前额度。
 * @method void setNewCreditOrToken(integer $NewCreditOrToken) 设置升配后的新规格额度。套餐类型为 enterprise 时表示积分额度，套餐类型为 enterprise-auto 时表示 Token 数。必须大于当前额度。
 */
class UpgradeTokenPlanTeamOrderRequest extends AbstractModel
{
    /**
     * @var string 套餐 ID。可通过 DescribeTokenPlanList 接口获取。
     */
    public $TeamId;

    /**
     * @var integer 升配后的新规格额度。套餐类型为 enterprise 时表示积分额度，套餐类型为 enterprise-auto 时表示 Token 数。必须大于当前额度。
     */
    public $NewCreditOrToken;

    /**
     * @param string $TeamId 套餐 ID。可通过 DescribeTokenPlanList 接口获取。
     * @param integer $NewCreditOrToken 升配后的新规格额度。套餐类型为 enterprise 时表示积分额度，套餐类型为 enterprise-auto 时表示 Token 数。必须大于当前额度。
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
        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("NewCreditOrToken",$param) and $param["NewCreditOrToken"] !== null) {
            $this->NewCreditOrToken = $param["NewCreditOrToken"];
        }
    }
}
