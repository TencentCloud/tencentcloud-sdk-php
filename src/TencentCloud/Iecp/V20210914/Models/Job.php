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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Job配置
 *
 * @method integer getParallelism() 获取并发数
 * @method void setParallelism(integer $Parallelism) 设置并发数
 * @method integer getCompletion() 获取完成数
 * @method void setCompletion(integer $Completion) 设置完成数
 * @method integer getActiveDeadlineSeconds() 获取最大运行时间
 * @method void setActiveDeadlineSeconds(integer $ActiveDeadlineSeconds) 设置最大运行时间
 * @method integer getBackOffLimit() 获取失败前重试次数
 * @method void setBackOffLimit(integer $BackOffLimit) 设置失败前重试次数
 */
class Job extends AbstractModel
{
    /**
     * @var integer 并发数
     */
    public $Parallelism;

    /**
     * @var integer 完成数
     */
    public $Completion;

    /**
     * @var integer 最大运行时间
     */
    public $ActiveDeadlineSeconds;

    /**
     * @var integer 失败前重试次数
     */
    public $BackOffLimit;

    /**
     * @param integer $Parallelism 并发数
     * @param integer $Completion 完成数
     * @param integer $ActiveDeadlineSeconds 最大运行时间
     * @param integer $BackOffLimit 失败前重试次数
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
        if (array_key_exists("Parallelism",$param) and $param["Parallelism"] !== null) {
            $this->Parallelism = $param["Parallelism"];
        }

        if (array_key_exists("Completion",$param) and $param["Completion"] !== null) {
            $this->Completion = $param["Completion"];
        }

        if (array_key_exists("ActiveDeadlineSeconds",$param) and $param["ActiveDeadlineSeconds"] !== null) {
            $this->ActiveDeadlineSeconds = $param["ActiveDeadlineSeconds"];
        }

        if (array_key_exists("BackOffLimit",$param) and $param["BackOffLimit"] !== null) {
            $this->BackOffLimit = $param["BackOffLimit"];
        }
    }
}
