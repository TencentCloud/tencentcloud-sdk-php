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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型执行状态
 *
 * @method string getMessage() 获取输出信息
 * @method void setMessage(string $Message) 设置输出信息
 * @method string getState() 获取plan:开始获取资料…
recall:找到 n 篇相关资料
quote:引用 n 篇资料作为参考

 * @method void setState(string $State) 设置plan:开始获取资料…
recall:找到 n 篇相关资料
quote:引用 n 篇资料作为参考

 * @method integer getNum() 获取当状态是recall和quote，会给出来相关数量
 * @method void setNum(integer $Num) 设置当状态是recall和quote，会给出来相关数量
 */
class Processes extends AbstractModel
{
    /**
     * @var string 输出信息
     */
    public $Message;

    /**
     * @var string plan:开始获取资料…
recall:找到 n 篇相关资料
quote:引用 n 篇资料作为参考

     */
    public $State;

    /**
     * @var integer 当状态是recall和quote，会给出来相关数量
     */
    public $Num;

    /**
     * @param string $Message 输出信息
     * @param string $State plan:开始获取资料…
recall:找到 n 篇相关资料
quote:引用 n 篇资料作为参考

     * @param integer $Num 当状态是recall和quote，会给出来相关数量
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
