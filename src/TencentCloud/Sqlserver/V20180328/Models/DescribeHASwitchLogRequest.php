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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHASwitchLog请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getStartTime() 获取开始时间(yyyy-MM-dd HH:mm:ss)
 * @method void setStartTime(string $StartTime) 设置开始时间(yyyy-MM-dd HH:mm:ss)
 * @method string getEndTime() 获取结束时间(yyyy-MM-dd HH:mm:ss)
 * @method void setEndTime(string $EndTime) 设置结束时间(yyyy-MM-dd HH:mm:ss)
 * @method integer getSwitchType() 获取切换模式 0-系统自动切换，1-手动切换，不填默认查全部。
 * @method void setSwitchType(integer $SwitchType) 设置切换模式 0-系统自动切换，1-手动切换，不填默认查全部。
 * @method integer getLimit() 获取分页，页大小
 * @method void setLimit(integer $Limit) 设置分页，页大小
 * @method integer getOffset() 获取分页,页数
 * @method void setOffset(integer $Offset) 设置分页,页数
 */
class DescribeHASwitchLogRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 开始时间(yyyy-MM-dd HH:mm:ss)
     */
    public $StartTime;

    /**
     * @var string 结束时间(yyyy-MM-dd HH:mm:ss)
     */
    public $EndTime;

    /**
     * @var integer 切换模式 0-系统自动切换，1-手动切换，不填默认查全部。
     */
    public $SwitchType;

    /**
     * @var integer 分页，页大小
     */
    public $Limit;

    /**
     * @var integer 分页,页数
     */
    public $Offset;

    /**
     * @param string $InstanceId 实例ID
     * @param string $StartTime 开始时间(yyyy-MM-dd HH:mm:ss)
     * @param string $EndTime 结束时间(yyyy-MM-dd HH:mm:ss)
     * @param integer $SwitchType 切换模式 0-系统自动切换，1-手动切换，不填默认查全部。
     * @param integer $Limit 分页，页大小
     * @param integer $Offset 分页,页数
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SwitchType",$param) and $param["SwitchType"] !== null) {
            $this->SwitchType = $param["SwitchType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
