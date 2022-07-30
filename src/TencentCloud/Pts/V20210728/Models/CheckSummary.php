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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检查点汇总结果
 *
 * @method string getName() 获取检查点名字
 * @method void setName(string $Name) 设置检查点名字
 * @method string getStep() 获取检查点所在步骤名字
 * @method void setStep(string $Step) 设置检查点所在步骤名字
 * @method integer getSuccessCount() 获取检查点成功次数
 * @method void setSuccessCount(integer $SuccessCount) 设置检查点成功次数
 * @method integer getFailCount() 获取检查失败次数
 * @method void setFailCount(integer $FailCount) 设置检查失败次数
 * @method float getErrorRate() 获取错误比例
 * @method void setErrorRate(float $ErrorRate) 设置错误比例
 */
class CheckSummary extends AbstractModel
{
    /**
     * @var string 检查点名字
     */
    public $Name;

    /**
     * @var string 检查点所在步骤名字
     */
    public $Step;

    /**
     * @var integer 检查点成功次数
     */
    public $SuccessCount;

    /**
     * @var integer 检查失败次数
     */
    public $FailCount;

    /**
     * @var float 错误比例
     */
    public $ErrorRate;

    /**
     * @param string $Name 检查点名字
     * @param string $Step 检查点所在步骤名字
     * @param integer $SuccessCount 检查点成功次数
     * @param integer $FailCount 检查失败次数
     * @param float $ErrorRate 错误比例
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

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("ErrorRate",$param) and $param["ErrorRate"] !== null) {
            $this->ErrorRate = $param["ErrorRate"];
        }
    }
}
