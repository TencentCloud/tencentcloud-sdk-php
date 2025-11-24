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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceOplog请求参数结构体
 *
 * @method string getInstanceId() 获取EMR实例ID
 * @method void setInstanceId(string $InstanceId) 设置EMR实例ID
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取页大小
 * @method void setLimit(integer $Limit) 设置页大小
 * @method integer getStartTime() 获取开头时间时间戳
 * @method void setStartTime(integer $StartTime) 设置开头时间时间戳
 * @method integer getEndTime() 获取结尾时间时间戳
 * @method void setEndTime(integer $EndTime) 设置结尾时间时间戳
 * @method array getSearchFields() 获取搜索项数组
 * @method void setSearchFields(array $SearchFields) 设置搜索项数组
 * @method string getOperand() 获取集群、节点、组件
 * @method void setOperand(string $Operand) 设置集群、节点、组件
 * @method string getSecurityLevel() 获取一般、危险、高危
 * @method void setSecurityLevel(string $SecurityLevel) 设置一般、危险、高危
 */
class DescribeInstanceOplogRequest extends AbstractModel
{
    /**
     * @var string EMR实例ID
     */
    public $InstanceId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 页大小
     */
    public $Limit;

    /**
     * @var integer 开头时间时间戳
     */
    public $StartTime;

    /**
     * @var integer 结尾时间时间戳
     */
    public $EndTime;

    /**
     * @var array 搜索项数组
     */
    public $SearchFields;

    /**
     * @var string 集群、节点、组件
     */
    public $Operand;

    /**
     * @var string 一般、危险、高危
     */
    public $SecurityLevel;

    /**
     * @param string $InstanceId EMR实例ID
     * @param integer $Offset 偏移量
     * @param integer $Limit 页大小
     * @param integer $StartTime 开头时间时间戳
     * @param integer $EndTime 结尾时间时间戳
     * @param array $SearchFields 搜索项数组
     * @param string $Operand 集群、节点、组件
     * @param string $SecurityLevel 一般、危险、高危
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SearchFields",$param) and $param["SearchFields"] !== null) {
            $this->SearchFields = [];
            foreach ($param["SearchFields"] as $key => $value){
                $obj = new SearchItem();
                $obj->deserialize($value);
                array_push($this->SearchFields, $obj);
            }
        }

        if (array_key_exists("Operand",$param) and $param["Operand"] !== null) {
            $this->Operand = $param["Operand"];
        }

        if (array_key_exists("SecurityLevel",$param) and $param["SecurityLevel"] !== null) {
            $this->SecurityLevel = $param["SecurityLevel"];
        }
    }
}
