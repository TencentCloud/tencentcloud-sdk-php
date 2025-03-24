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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机架用量
 *
 * @method integer getRackId() 获取机架ID
 * @method void setRackId(integer $RackId) 设置机架ID
 * @method integer getUsedNum() 获取已使用的机位数量
 * @method void setUsedNum(integer $UsedNum) 设置已使用的机位数量
 * @method integer getUnusedNum() 获取空闲机位数量
 * @method void setUnusedNum(integer $UnusedNum) 设置空闲机位数量
 * @method string getRackShortName() 获取机架简称
 * @method void setRackShortName(string $RackShortName) 设置机架简称
 * @method integer getTotalNum() 获取机位总数
 * @method void setTotalNum(integer $TotalNum) 设置机位总数
 * @method float getUsedRate() 获取机位使用率
 * @method void setUsedRate(float $UsedRate) 设置机位使用率
 */
class RackUsage extends AbstractModel
{
    /**
     * @var integer 机架ID
     */
    public $RackId;

    /**
     * @var integer 已使用的机位数量
     */
    public $UsedNum;

    /**
     * @var integer 空闲机位数量
     */
    public $UnusedNum;

    /**
     * @var string 机架简称
     */
    public $RackShortName;

    /**
     * @var integer 机位总数
     */
    public $TotalNum;

    /**
     * @var float 机位使用率
     */
    public $UsedRate;

    /**
     * @param integer $RackId 机架ID
     * @param integer $UsedNum 已使用的机位数量
     * @param integer $UnusedNum 空闲机位数量
     * @param string $RackShortName 机架简称
     * @param integer $TotalNum 机位总数
     * @param float $UsedRate 机位使用率
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
        if (array_key_exists("RackId",$param) and $param["RackId"] !== null) {
            $this->RackId = $param["RackId"];
        }

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }

        if (array_key_exists("UnusedNum",$param) and $param["UnusedNum"] !== null) {
            $this->UnusedNum = $param["UnusedNum"];
        }

        if (array_key_exists("RackShortName",$param) and $param["RackShortName"] !== null) {
            $this->RackShortName = $param["RackShortName"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("UsedRate",$param) and $param["UsedRate"] !== null) {
            $this->UsedRate = $param["UsedRate"];
        }
    }
}
