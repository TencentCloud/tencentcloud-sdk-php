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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建数据补录计划结果
 *
 * @method string getDataBackfillPlanId() 获取补录计划Id
 * @method void setDataBackfillPlanId(string $DataBackfillPlanId) 设置补录计划Id
 */
class CreateDataReplenishmentPlan extends AbstractModel
{
    /**
     * @var string 补录计划Id
     */
    public $DataBackfillPlanId;

    /**
     * @param string $DataBackfillPlanId 补录计划Id
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
        if (array_key_exists("DataBackfillPlanId",$param) and $param["DataBackfillPlanId"] !== null) {
            $this->DataBackfillPlanId = $param["DataBackfillPlanId"];
        }
    }
}
