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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOverviewDDoSEventList请求参数结构体
 *
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getAttackStatus() 获取可选按攻击状态过滤，start：攻击中；end：攻击结束
 * @method void setAttackStatus(string $AttackStatus) 设置可选按攻击状态过滤，start：攻击中；end：攻击结束
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取记录条数
 * @method void setLimit(integer $Limit) 设置记录条数
 */
class DescribeOverviewDDoSEventListRequest extends AbstractModel
{
    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 可选按攻击状态过滤，start：攻击中；end：攻击结束
     */
    public $AttackStatus;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 记录条数
     */
    public $Limit;

    /**
     * @param string $StartTime 起始时间
     * @param string $EndTime 结束时间
     * @param string $AttackStatus 可选按攻击状态过滤，start：攻击中；end：攻击结束
     * @param integer $Offset 偏移量
     * @param integer $Limit 记录条数
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
