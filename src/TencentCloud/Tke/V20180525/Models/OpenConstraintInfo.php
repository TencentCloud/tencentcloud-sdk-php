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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略实例信息
 *
 * @method integer getEventNums() 获取策略实例关联事件数
 * @method void setEventNums(integer $EventNums) 设置策略实例关联事件数
 * @method string getName() 获取策略实例名称
 * @method void setName(string $Name) 设置策略实例名称
 * @method string getYamlDetail() 获取实例yaml详情base64编码
 * @method void setYamlDetail(string $YamlDetail) 设置实例yaml详情base64编码
 */
class OpenConstraintInfo extends AbstractModel
{
    /**
     * @var integer 策略实例关联事件数
     */
    public $EventNums;

    /**
     * @var string 策略实例名称
     */
    public $Name;

    /**
     * @var string 实例yaml详情base64编码
     */
    public $YamlDetail;

    /**
     * @param integer $EventNums 策略实例关联事件数
     * @param string $Name 策略实例名称
     * @param string $YamlDetail 实例yaml详情base64编码
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
        if (array_key_exists("EventNums",$param) and $param["EventNums"] !== null) {
            $this->EventNums = $param["EventNums"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("YamlDetail",$param) and $param["YamlDetail"] !== null) {
            $this->YamlDetail = $param["YamlDetail"];
        }
    }
}
