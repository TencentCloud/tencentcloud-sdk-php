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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志分析资源详情
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取到期时间
 * @method void setEndTime(string $EndTime) 设置到期时间
 * @method integer getSourceType() 获取0 付费订单 1试用 2赠送
 * @method void setSourceType(integer $SourceType) 设置0 付费订单 1试用 2赠送
 * @method integer getInquireNum() 获取购买量
 * @method void setInquireNum(integer $InquireNum) 设置购买量
 */
class VasInfoResourceDetail extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 到期时间
     */
    public $EndTime;

    /**
     * @var integer 0 付费订单 1试用 2赠送
     */
    public $SourceType;

    /**
     * @var integer 购买量
     */
    public $InquireNum;

    /**
     * @param string $ResourceId 资源ID
     * @param string $StartTime 开始时间
     * @param string $EndTime 到期时间
     * @param integer $SourceType 0 付费订单 1试用 2赠送
     * @param integer $InquireNum 购买量
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }
    }
}
