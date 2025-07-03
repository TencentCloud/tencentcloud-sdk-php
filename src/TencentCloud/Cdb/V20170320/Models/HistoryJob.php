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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单条扩容历史记录
 *
 * @method string getOperationType() 获取操作类型
 * @method void setOperationType(string $OperationType) 设置操作类型
 * @method string getExpandType() 获取扩容类型
 * @method void setExpandType(string $ExpandType) 设置扩容类型
 * @method integer getStartTime() 获取扩容开始时间
说明：此项显示的格式是 int 类型的 unix 时间戳
 * @method void setStartTime(integer $StartTime) 设置扩容开始时间
说明：此项显示的格式是 int 类型的 unix 时间戳
 * @method integer getEndTime() 获取扩容结束时间
说明：此项显示的格式是 int 类型的 unix 时间戳
 * @method void setEndTime(integer $EndTime) 设置扩容结束时间
说明：此项显示的格式是 int 类型的 unix 时间戳
 * @method integer getOldCpu() 获取扩容前核数
 * @method void setOldCpu(integer $OldCpu) 设置扩容前核数
 * @method integer getNewCpu() 获取扩容后核数
 * @method void setNewCpu(integer $NewCpu) 设置扩容后核数
 * @method integer getExtendCPUNum() 获取增减的cpu数
 * @method void setExtendCPUNum(integer $ExtendCPUNum) 设置增减的cpu数
 * @method string getError() 获取extend_failed操作上报
 * @method void setError(string $Error) 设置extend_failed操作上报
 */
class HistoryJob extends AbstractModel
{
    /**
     * @var string 操作类型
     */
    public $OperationType;

    /**
     * @var string 扩容类型
     */
    public $ExpandType;

    /**
     * @var integer 扩容开始时间
说明：此项显示的格式是 int 类型的 unix 时间戳
     */
    public $StartTime;

    /**
     * @var integer 扩容结束时间
说明：此项显示的格式是 int 类型的 unix 时间戳
     */
    public $EndTime;

    /**
     * @var integer 扩容前核数
     */
    public $OldCpu;

    /**
     * @var integer 扩容后核数
     */
    public $NewCpu;

    /**
     * @var integer 增减的cpu数
     */
    public $ExtendCPUNum;

    /**
     * @var string extend_failed操作上报
     */
    public $Error;

    /**
     * @param string $OperationType 操作类型
     * @param string $ExpandType 扩容类型
     * @param integer $StartTime 扩容开始时间
说明：此项显示的格式是 int 类型的 unix 时间戳
     * @param integer $EndTime 扩容结束时间
说明：此项显示的格式是 int 类型的 unix 时间戳
     * @param integer $OldCpu 扩容前核数
     * @param integer $NewCpu 扩容后核数
     * @param integer $ExtendCPUNum 增减的cpu数
     * @param string $Error extend_failed操作上报
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
        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("ExpandType",$param) and $param["ExpandType"] !== null) {
            $this->ExpandType = $param["ExpandType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("OldCpu",$param) and $param["OldCpu"] !== null) {
            $this->OldCpu = $param["OldCpu"];
        }

        if (array_key_exists("NewCpu",$param) and $param["NewCpu"] !== null) {
            $this->NewCpu = $param["NewCpu"];
        }

        if (array_key_exists("ExtendCPUNum",$param) and $param["ExtendCPUNum"] !== null) {
            $this->ExtendCPUNum = $param["ExtendCPUNum"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
