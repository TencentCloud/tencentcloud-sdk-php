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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预付费 后付费 总数显示接口出参
 *
 * @method integer getPayMode() 获取当前付费模式，0 后付费 1 预付费
 * @method void setPayMode(integer $PayMode) 设置当前付费模式，0 后付费 1 预付费
 * @method integer getAfterPayModeThisMonthUsedCnt() 获取后付费本月使用量
 * @method void setAfterPayModeThisMonthUsedCnt(integer $AfterPayModeThisMonthUsedCnt) 设置后付费本月使用量
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getExpireTime() 获取超出时间
 * @method void setExpireTime(string $ExpireTime) 设置超出时间
 * @method integer getAfterPayModeLastMonthUsedCnt() 获取后付费上月使用量
 * @method void setAfterPayModeLastMonthUsedCnt(integer $AfterPayModeLastMonthUsedCnt) 设置后付费上月使用量
 * @method integer getBeforePayModeTotalUsedCnt() 获取预付费总量
 * @method void setBeforePayModeTotalUsedCnt(integer $BeforePayModeTotalUsedCnt) 设置预付费总量
 * @method integer getBeforePayModeRemainUsedCnt() 获取预付费剩余用量
 * @method void setBeforePayModeRemainUsedCnt(integer $BeforePayModeRemainUsedCnt) 设置预付费剩余用量
 */
class OutputDescribeUserUsageCnt extends AbstractModel
{
    /**
     * @var integer 当前付费模式，0 后付费 1 预付费
     */
    public $PayMode;

    /**
     * @var integer 后付费本月使用量
     */
    public $AfterPayModeThisMonthUsedCnt;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 超出时间
     */
    public $ExpireTime;

    /**
     * @var integer 后付费上月使用量
     */
    public $AfterPayModeLastMonthUsedCnt;

    /**
     * @var integer 预付费总量
     */
    public $BeforePayModeTotalUsedCnt;

    /**
     * @var integer 预付费剩余用量
     */
    public $BeforePayModeRemainUsedCnt;

    /**
     * @param integer $PayMode 当前付费模式，0 后付费 1 预付费
     * @param integer $AfterPayModeThisMonthUsedCnt 后付费本月使用量
     * @param string $CreateTime 创建时间
     * @param string $ExpireTime 超出时间
     * @param integer $AfterPayModeLastMonthUsedCnt 后付费上月使用量
     * @param integer $BeforePayModeTotalUsedCnt 预付费总量
     * @param integer $BeforePayModeRemainUsedCnt 预付费剩余用量
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("AfterPayModeThisMonthUsedCnt",$param) and $param["AfterPayModeThisMonthUsedCnt"] !== null) {
            $this->AfterPayModeThisMonthUsedCnt = $param["AfterPayModeThisMonthUsedCnt"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AfterPayModeLastMonthUsedCnt",$param) and $param["AfterPayModeLastMonthUsedCnt"] !== null) {
            $this->AfterPayModeLastMonthUsedCnt = $param["AfterPayModeLastMonthUsedCnt"];
        }

        if (array_key_exists("BeforePayModeTotalUsedCnt",$param) and $param["BeforePayModeTotalUsedCnt"] !== null) {
            $this->BeforePayModeTotalUsedCnt = $param["BeforePayModeTotalUsedCnt"];
        }

        if (array_key_exists("BeforePayModeRemainUsedCnt",$param) and $param["BeforePayModeRemainUsedCnt"] !== null) {
            $this->BeforePayModeRemainUsedCnt = $param["BeforePayModeRemainUsedCnt"];
        }
    }
}
