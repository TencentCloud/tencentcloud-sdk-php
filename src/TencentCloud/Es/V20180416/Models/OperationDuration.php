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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群可运维时间
 *
 * @method array getPeriods() 获取维护周期，表示周一到周日，可取值[0, 6]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriods(array $Periods) 设置维护周期，表示周一到周日，可取值[0, 6]
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeStart() 获取维护开始时间
 * @method void setTimeStart(string $TimeStart) 设置维护开始时间
 * @method string getTimeEnd() 获取维护结束时间
 * @method void setTimeEnd(string $TimeEnd) 设置维护结束时间
 * @method string getTimeZone() 获取时区，以UTC形式表示
 * @method void setTimeZone(string $TimeZone) 设置时区，以UTC形式表示
 */
class OperationDuration extends AbstractModel
{
    /**
     * @var array 维护周期，表示周一到周日，可取值[0, 6]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Periods;

    /**
     * @var string 维护开始时间
     */
    public $TimeStart;

    /**
     * @var string 维护结束时间
     */
    public $TimeEnd;

    /**
     * @var string 时区，以UTC形式表示
     */
    public $TimeZone;

    /**
     * @param array $Periods 维护周期，表示周一到周日，可取值[0, 6]
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeStart 维护开始时间
     * @param string $TimeEnd 维护结束时间
     * @param string $TimeZone 时区，以UTC形式表示
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
        if (array_key_exists("Periods",$param) and $param["Periods"] !== null) {
            $this->Periods = $param["Periods"];
        }

        if (array_key_exists("TimeStart",$param) and $param["TimeStart"] !== null) {
            $this->TimeStart = $param["TimeStart"];
        }

        if (array_key_exists("TimeEnd",$param) and $param["TimeEnd"] !== null) {
            $this->TimeEnd = $param["TimeEnd"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
