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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScores请求参数结构体
 *
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method integer getID() 获取项目ID
 * @method void setID(integer $ID) 设置项目ID
 * @method integer getIsDemo() 获取该参数已废弃
 * @method void setIsDemo(integer $IsDemo) 设置该参数已废弃
 */
class DescribeScoresRequest extends AbstractModel
{
    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var integer 项目ID
     */
    public $ID;

    /**
     * @var integer 该参数已废弃
     */
    public $IsDemo;

    /**
     * @param string $EndTime 结束时间
     * @param string $StartTime 开始时间
     * @param integer $ID 项目ID
     * @param integer $IsDemo 该参数已废弃
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
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("IsDemo",$param) and $param["IsDemo"] !== null) {
            $this->IsDemo = $param["IsDemo"];
        }
    }
}
