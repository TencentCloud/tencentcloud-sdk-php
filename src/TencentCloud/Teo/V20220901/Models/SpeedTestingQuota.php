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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测配额数据。
 *
 * @method integer getTotalTestRuns() 获取站点总拨测次数。
 * @method void setTotalTestRuns(integer $TotalTestRuns) 设置站点总拨测次数。
 * @method integer getAvailableTestRuns() 获取站点剩余可用拨测次数。
 * @method void setAvailableTestRuns(integer $AvailableTestRuns) 设置站点剩余可用拨测次数。
 */
class SpeedTestingQuota extends AbstractModel
{
    /**
     * @var integer 站点总拨测次数。
     */
    public $TotalTestRuns;

    /**
     * @var integer 站点剩余可用拨测次数。
     */
    public $AvailableTestRuns;

    /**
     * @param integer $TotalTestRuns 站点总拨测次数。
     * @param integer $AvailableTestRuns 站点剩余可用拨测次数。
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
        if (array_key_exists("TotalTestRuns",$param) and $param["TotalTestRuns"] !== null) {
            $this->TotalTestRuns = $param["TotalTestRuns"];
        }

        if (array_key_exists("AvailableTestRuns",$param) and $param["AvailableTestRuns"] !== null) {
            $this->AvailableTestRuns = $param["AvailableTestRuns"];
        }
    }
}
