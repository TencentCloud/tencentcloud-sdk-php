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
 * 房间问答答案详情
 *
 * @method string getName() 获取用户名
 * @method void setName(string $Name) 设置用户名
 * @method integer getAnswer() 获取答案（按照位表示是否选择，如0x1表示选择A，0x11表示选择AB）
 * @method void setAnswer(integer $Answer) 设置答案（按照位表示是否选择，如0x1表示选择A，0x11表示选择AB）
 * @method integer getCostTime() 获取答题用时
 * @method void setCostTime(integer $CostTime) 设置答题用时
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method integer getIsCorrect() 获取答案是否正确（1正确0错误）
 * @method void setIsCorrect(integer $IsCorrect) 设置答案是否正确（1正确0错误）
 */
class AnswerInfo extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $Name;

    /**
     * @var integer 答案（按照位表示是否选择，如0x1表示选择A，0x11表示选择AB）
     */
    public $Answer;

    /**
     * @var integer 答题用时
     */
    public $CostTime;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var integer 答案是否正确（1正确0错误）
     */
    public $IsCorrect;

    /**
     * @param string $Name 用户名
     * @param integer $Answer 答案（按照位表示是否选择，如0x1表示选择A，0x11表示选择AB）
     * @param integer $CostTime 答题用时
     * @param string $UserId 用户ID
     * @param integer $IsCorrect 答案是否正确（1正确0错误）
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

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("IsCorrect",$param) and $param["IsCorrect"] !== null) {
            $this->IsCorrect = $param["IsCorrect"];
        }
    }
}
