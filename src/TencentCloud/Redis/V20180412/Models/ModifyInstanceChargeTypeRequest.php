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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceChargeType请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>实例ID数组</p><p>入参限制：批量操作数组长度不超过20</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例ID数组</p><p>入参限制：批量操作数组长度不超过20</p>
 * @method string getInstanceChargeType() 获取<p>修改计费模式的操作类型</p><p>枚举值：</p><ul><li>PREPAID： 按量计费转包年包月</li><li>POSTPAID： 包年包月转按量计费</li></ul>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>修改计费模式的操作类型</p><p>枚举值：</p><ul><li>PREPAID： 按量计费转包年包月</li><li>POSTPAID： 包年包月转按量计费</li></ul>
 * @method integer getPeriod() 获取<p>购买时长，仅当InstanceChargeType=PREPAID时需要传</p><p>取值范围：[1, 36]</p><p>单位：月</p>
 * @method void setPeriod(integer $Period) 设置<p>购买时长，仅当InstanceChargeType=PREPAID时需要传</p><p>取值范围：[1, 36]</p><p>单位：月</p>
 */
class ModifyInstanceChargeTypeRequest extends AbstractModel
{
    /**
     * @var array <p>实例ID数组</p><p>入参限制：批量操作数组长度不超过20</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>修改计费模式的操作类型</p><p>枚举值：</p><ul><li>PREPAID： 按量计费转包年包月</li><li>POSTPAID： 包年包月转按量计费</li></ul>
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>购买时长，仅当InstanceChargeType=PREPAID时需要传</p><p>取值范围：[1, 36]</p><p>单位：月</p>
     */
    public $Period;

    /**
     * @param array $InstanceIds <p>实例ID数组</p><p>入参限制：批量操作数组长度不超过20</p>
     * @param string $InstanceChargeType <p>修改计费模式的操作类型</p><p>枚举值：</p><ul><li>PREPAID： 按量计费转包年包月</li><li>POSTPAID： 包年包月转按量计费</li></ul>
     * @param integer $Period <p>购买时长，仅当InstanceChargeType=PREPAID时需要传</p><p>取值范围：[1, 36]</p><p>单位：月</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
