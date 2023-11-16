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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegularBackupPlan返回参数结构体
 *
 * @method array getSaveModePeriod() 获取常规备份计划
 * @method void setSaveModePeriod(array $SaveModePeriod) 设置常规备份计划
 * @method array getSaveModeRegular() 获取定期备份计划
 * @method void setSaveModeRegular(array $SaveModeRegular) 设置定期备份计划
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRegularBackupPlanResponse extends AbstractModel
{
    /**
     * @var array 常规备份计划
     */
    public $SaveModePeriod;

    /**
     * @var array 定期备份计划
     */
    public $SaveModeRegular;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SaveModePeriod 常规备份计划
     * @param array $SaveModeRegular 定期备份计划
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SaveModePeriod",$param) and $param["SaveModePeriod"] !== null) {
            $this->SaveModePeriod = $param["SaveModePeriod"];
        }

        if (array_key_exists("SaveModeRegular",$param) and $param["SaveModeRegular"] !== null) {
            $this->SaveModeRegular = $param["SaveModeRegular"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
