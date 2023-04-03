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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 每个选项答题人数统计
 *
 * @method integer getAnswer() 获取选项（按照位表示是否选择，如0x1表示选择A，0x11表示选择AB）
 * @method void setAnswer(integer $Answer) 设置选项（按照位表示是否选择，如0x1表示选择A，0x11表示选择AB）
 * @method integer getCount() 获取答题人数
 * @method void setCount(integer $Count) 设置答题人数
 */
class AnswerStat extends AbstractModel
{
    /**
     * @var integer 选项（按照位表示是否选择，如0x1表示选择A，0x11表示选择AB）
     */
    public $Answer;

    /**
     * @var integer 答题人数
     */
    public $Count;

    /**
     * @param integer $Answer 选项（按照位表示是否选择，如0x1表示选择A，0x11表示选择AB）
     * @param integer $Count 答题人数
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
        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
