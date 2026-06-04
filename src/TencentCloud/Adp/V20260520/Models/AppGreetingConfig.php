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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 欢迎语配置
 *
 * @method string getGreeting() 获取欢迎语内容
 * @method void setGreeting(string $Greeting) 设置欢迎语内容
 * @method array getOpeningQuestionList() 获取开场问题列表
 * @method void setOpeningQuestionList(array $OpeningQuestionList) 设置开场问题列表
 */
class AppGreetingConfig extends AbstractModel
{
    /**
     * @var string 欢迎语内容
     */
    public $Greeting;

    /**
     * @var array 开场问题列表
     */
    public $OpeningQuestionList;

    /**
     * @param string $Greeting 欢迎语内容
     * @param array $OpeningQuestionList 开场问题列表
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
        if (array_key_exists("Greeting",$param) and $param["Greeting"] !== null) {
            $this->Greeting = $param["Greeting"];
        }

        if (array_key_exists("OpeningQuestionList",$param) and $param["OpeningQuestionList"] !== null) {
            $this->OpeningQuestionList = $param["OpeningQuestionList"];
        }
    }
}
