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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 伸缩配置建议。
 *
 * @method string getProblem() 获取问题描述。
 * @method void setProblem(string $Problem) 设置问题描述。
 * @method string getDetail() 获取问题详情。
 * @method void setDetail(string $Detail) 设置问题详情。
 * @method string getSolution() 获取建议解决方案。
 * @method void setSolution(string $Solution) 设置建议解决方案。
 */
class Advice extends AbstractModel
{
    /**
     * @var string 问题描述。
     */
    public $Problem;

    /**
     * @var string 问题详情。
     */
    public $Detail;

    /**
     * @var string 建议解决方案。
     */
    public $Solution;

    /**
     * @param string $Problem 问题描述。
     * @param string $Detail 问题详情。
     * @param string $Solution 建议解决方案。
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
        if (array_key_exists("Problem",$param) and $param["Problem"] !== null) {
            $this->Problem = $param["Problem"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }
    }
}
