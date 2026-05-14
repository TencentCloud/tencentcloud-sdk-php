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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRumLogExportV2请求参数结构体
 *
 * @method string getName() 获取Export name
 * @method void setName(string $Name) 设置Export name
 * @method integer getStartTime() 获取Start time
 * @method void setStartTime(integer $StartTime) 设置Start time
 * @method string getFilter() 获取Query statement
 * @method void setFilter(string $Filter) 设置Query statement
 * @method integer getEndTime() 获取End time
 * @method void setEndTime(integer $EndTime) 设置End time
 * @method integer getID() 获取Project ID
 * @method void setID(integer $ID) 设置Project ID
 * @method array getFields() 获取c字段
 * @method void setFields(array $Fields) 设置c字段
 */
class DescribeRumLogExportV2Request extends AbstractModel
{
    /**
     * @var string Export name
     */
    public $Name;

    /**
     * @var integer Start time
     */
    public $StartTime;

    /**
     * @var string Query statement
     */
    public $Filter;

    /**
     * @var integer End time
     */
    public $EndTime;

    /**
     * @var integer Project ID
     */
    public $ID;

    /**
     * @var array c字段
     */
    public $Fields;

    /**
     * @param string $Name Export name
     * @param integer $StartTime Start time
     * @param string $Filter Query statement
     * @param integer $EndTime End time
     * @param integer $ID Project ID
     * @param array $Fields c字段
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = $param["Fields"];
        }
    }
}
