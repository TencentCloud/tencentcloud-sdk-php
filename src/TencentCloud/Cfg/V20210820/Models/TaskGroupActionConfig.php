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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动作组中的动作参数
 *
 * @method integer getTaskGroupActionOrder() 获取该动作在动作组中的顺序，从1开始，不填或填错将匹配不到经验中要修改参数的动作
 * @method void setTaskGroupActionOrder(integer $TaskGroupActionOrder) 设置该动作在动作组中的顺序，从1开始，不填或填错将匹配不到经验中要修改参数的动作
 * @method string getTaskGroupActionGeneralConfiguration() 获取动作通用参数，需要json序列化传入，可以从查询经验详情接口获取，不填默认使用经验中动作参数
 * @method void setTaskGroupActionGeneralConfiguration(string $TaskGroupActionGeneralConfiguration) 设置动作通用参数，需要json序列化传入，可以从查询经验详情接口获取，不填默认使用经验中动作参数
 * @method string getTaskGroupActionCustomConfiguration() 获取动作自定义参数，需要json序列化传入，可以从查询经验详情接口获取，不填默认使用经验中动作参数
 * @method void setTaskGroupActionCustomConfiguration(string $TaskGroupActionCustomConfiguration) 设置动作自定义参数，需要json序列化传入，可以从查询经验详情接口获取，不填默认使用经验中动作参数
 */
class TaskGroupActionConfig extends AbstractModel
{
    /**
     * @var integer 该动作在动作组中的顺序，从1开始，不填或填错将匹配不到经验中要修改参数的动作
     */
    public $TaskGroupActionOrder;

    /**
     * @var string 动作通用参数，需要json序列化传入，可以从查询经验详情接口获取，不填默认使用经验中动作参数
     */
    public $TaskGroupActionGeneralConfiguration;

    /**
     * @var string 动作自定义参数，需要json序列化传入，可以从查询经验详情接口获取，不填默认使用经验中动作参数
     */
    public $TaskGroupActionCustomConfiguration;

    /**
     * @param integer $TaskGroupActionOrder 该动作在动作组中的顺序，从1开始，不填或填错将匹配不到经验中要修改参数的动作
     * @param string $TaskGroupActionGeneralConfiguration 动作通用参数，需要json序列化传入，可以从查询经验详情接口获取，不填默认使用经验中动作参数
     * @param string $TaskGroupActionCustomConfiguration 动作自定义参数，需要json序列化传入，可以从查询经验详情接口获取，不填默认使用经验中动作参数
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
        if (array_key_exists("TaskGroupActionOrder",$param) and $param["TaskGroupActionOrder"] !== null) {
            $this->TaskGroupActionOrder = $param["TaskGroupActionOrder"];
        }

        if (array_key_exists("TaskGroupActionGeneralConfiguration",$param) and $param["TaskGroupActionGeneralConfiguration"] !== null) {
            $this->TaskGroupActionGeneralConfiguration = $param["TaskGroupActionGeneralConfiguration"];
        }

        if (array_key_exists("TaskGroupActionCustomConfiguration",$param) and $param["TaskGroupActionCustomConfiguration"] !== null) {
            $this->TaskGroupActionCustomConfiguration = $param["TaskGroupActionCustomConfiguration"];
        }
    }
}
