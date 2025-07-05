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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 手术列表
 *
 * @method string getTime() 获取时间
 * @method void setTime(string $Time) 设置时间
 * @method string getTimeType() 获取类型
 * @method void setTimeType(string $TimeType) 设置类型
 * @method array getName() 获取名称
 * @method void setName(array $Name) 设置名称
 * @method string getPart() 获取部位
 * @method void setPart(string $Part) 设置部位
 */
class SurgeryListBlock extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $Time;

    /**
     * @var string 类型
     */
    public $TimeType;

    /**
     * @var array 名称
     */
    public $Name;

    /**
     * @var string 部位
     */
    public $Part;

    /**
     * @param string $Time 时间
     * @param string $TimeType 类型
     * @param array $Name 名称
     * @param string $Part 部位
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Part",$param) and $param["Part"] !== null) {
            $this->Part = $param["Part"];
        }
    }
}
