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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞防御趋势页，包括插件状态及攻防趋势，趋势由三个长度相同，元素一一对应的数组保存，如果某天没有数据将会缺失
 *
 * @method integer getEnable() 获取防御开关：0 关闭 1 开启
 * @method void setEnable(integer $Enable) 设置防御开关：0 关闭 1 开启
 * @method integer getDefendHostCount() 获取已开启防御主机数
 * @method void setDefendHostCount(integer $DefendHostCount) 设置已开启防御主机数
 * @method integer getExceptionCount() 获取插件异常数
 * @method void setExceptionCount(integer $ExceptionCount) 设置插件异常数
 * @method array getAttackCounts() 获取每日攻击趋势
 * @method void setAttackCounts(array $AttackCounts) 设置每日攻击趋势
 * @method array getDefendCounts() 获取每日防御趋势
 * @method void setDefendCounts(array $DefendCounts) 设置每日防御趋势
 * @method array getDate() 获取日期
 * @method void setDate(array $Date) 设置日期
 */
class VulDefenceOverview extends AbstractModel
{
    /**
     * @var integer 防御开关：0 关闭 1 开启
     */
    public $Enable;

    /**
     * @var integer 已开启防御主机数
     */
    public $DefendHostCount;

    /**
     * @var integer 插件异常数
     */
    public $ExceptionCount;

    /**
     * @var array 每日攻击趋势
     */
    public $AttackCounts;

    /**
     * @var array 每日防御趋势
     */
    public $DefendCounts;

    /**
     * @var array 日期
     */
    public $Date;

    /**
     * @param integer $Enable 防御开关：0 关闭 1 开启
     * @param integer $DefendHostCount 已开启防御主机数
     * @param integer $ExceptionCount 插件异常数
     * @param array $AttackCounts 每日攻击趋势
     * @param array $DefendCounts 每日防御趋势
     * @param array $Date 日期
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("DefendHostCount",$param) and $param["DefendHostCount"] !== null) {
            $this->DefendHostCount = $param["DefendHostCount"];
        }

        if (array_key_exists("ExceptionCount",$param) and $param["ExceptionCount"] !== null) {
            $this->ExceptionCount = $param["ExceptionCount"];
        }

        if (array_key_exists("AttackCounts",$param) and $param["AttackCounts"] !== null) {
            $this->AttackCounts = $param["AttackCounts"];
        }

        if (array_key_exists("DefendCounts",$param) and $param["DefendCounts"] !== null) {
            $this->DefendCounts = $param["DefendCounts"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
