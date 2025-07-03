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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权重分配规则
 *
 * @method integer getLessThan() 获取划分上限
 * @method void setLessThan(integer $LessThan) 设置划分上限
 * @method integer getWeight() 获取权重
 * @method void setWeight(integer $Weight) 设置权重
 */
class Rule extends AbstractModel
{
    /**
     * @var integer 划分上限
     */
    public $LessThan;

    /**
     * @var integer 权重
     */
    public $Weight;

    /**
     * @param integer $LessThan 划分上限
     * @param integer $Weight 权重
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
        if (array_key_exists("LessThan",$param) and $param["LessThan"] !== null) {
            $this->LessThan = $param["LessThan"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
