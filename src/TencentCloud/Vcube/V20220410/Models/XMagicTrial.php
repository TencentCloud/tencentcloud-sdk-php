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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可以开通测试的功能
 *
 * @method string getName() 获取功能名称
 * @method void setName(string $Name) 设置功能名称
 * @method integer getTrialCount() 获取可以申请的次数
 * @method void setTrialCount(integer $TrialCount) 设置可以申请的次数
 * @method integer getDuration() 获取每次申请的时长单位：天
 * @method void setDuration(integer $Duration) 设置每次申请的时长单位：天
 * @method string getPlan() 获取功能类别
 * @method void setPlan(string $Plan) 设置功能类别
 * @method string getXMagicType() 获取single: 原子能力,combined:套餐
 * @method void setXMagicType(string $XMagicType) 设置single: 原子能力,combined:套餐
 */
class XMagicTrial extends AbstractModel
{
    /**
     * @var string 功能名称
     */
    public $Name;

    /**
     * @var integer 可以申请的次数
     */
    public $TrialCount;

    /**
     * @var integer 每次申请的时长单位：天
     */
    public $Duration;

    /**
     * @var string 功能类别
     */
    public $Plan;

    /**
     * @var string single: 原子能力,combined:套餐
     */
    public $XMagicType;

    /**
     * @param string $Name 功能名称
     * @param integer $TrialCount 可以申请的次数
     * @param integer $Duration 每次申请的时长单位：天
     * @param string $Plan 功能类别
     * @param string $XMagicType single: 原子能力,combined:套餐
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TrialCount",$param) and $param["TrialCount"] !== null) {
            $this->TrialCount = $param["TrialCount"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Plan",$param) and $param["Plan"] !== null) {
            $this->Plan = $param["Plan"];
        }

        if (array_key_exists("XMagicType",$param) and $param["XMagicType"] !== null) {
            $this->XMagicType = $param["XMagicType"];
        }
    }
}
