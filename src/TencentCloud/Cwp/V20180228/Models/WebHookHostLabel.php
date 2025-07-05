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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企微机器人主机范围
 *
 * @method integer getType() 获取主机范围[1:所属项目|2:腾讯云标签|3:主机安全标签|4:自选]空数组为全部
 * @method void setType(integer $Type) 设置主机范围[1:所属项目|2:腾讯云标签|3:主机安全标签|4:自选]空数组为全部
 * @method array getValues() 获取主机项目或标签内容
 * @method void setValues(array $Values) 设置主机项目或标签内容
 */
class WebHookHostLabel extends AbstractModel
{
    /**
     * @var integer 主机范围[1:所属项目|2:腾讯云标签|3:主机安全标签|4:自选]空数组为全部
     */
    public $Type;

    /**
     * @var array 主机项目或标签内容
     */
    public $Values;

    /**
     * @param integer $Type 主机范围[1:所属项目|2:腾讯云标签|3:主机安全标签|4:自选]空数组为全部
     * @param array $Values 主机项目或标签内容
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
