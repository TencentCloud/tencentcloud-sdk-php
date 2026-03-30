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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIWorkbenchSREDigitalTwinTaskList请求参数结构体
 *
 * @method integer getTwinID() 获取数字分身ID
 * @method void setTwinID(integer $TwinID) 设置数字分身ID
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取数量限制
 * @method void setLimit(integer $Limit) 设置数量限制
 */
class DescribeAIWorkbenchSREDigitalTwinTaskListRequest extends AbstractModel
{
    /**
     * @var integer 数字分身ID
     */
    public $TwinID;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 数量限制
     */
    public $Limit;

    /**
     * @param integer $TwinID 数字分身ID
     * @param integer $Offset 偏移量
     * @param integer $Limit 数量限制
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
        if (array_key_exists("TwinID",$param) and $param["TwinID"] !== null) {
            $this->TwinID = $param["TwinID"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
