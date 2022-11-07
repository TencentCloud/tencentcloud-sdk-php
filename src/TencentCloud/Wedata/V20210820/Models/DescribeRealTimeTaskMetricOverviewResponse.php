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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealTimeTaskMetricOverview返回参数结构体
 *
 * @method integer getTotalRecordNumOfRead() 获取总读取记录数
 * @method void setTotalRecordNumOfRead(integer $TotalRecordNumOfRead) 设置总读取记录数
 * @method integer getTotalRecordByteNumOfRead() 获取总读取字节数
 * @method void setTotalRecordByteNumOfRead(integer $TotalRecordByteNumOfRead) 设置总读取字节数
 * @method integer getTotalRecordNumOfWrite() 获取总写入记录数
 * @method void setTotalRecordNumOfWrite(integer $TotalRecordNumOfWrite) 设置总写入记录数
 * @method integer getTotalRecordByteNumOfWrite() 获取总写入字节数 单位字节
 * @method void setTotalRecordByteNumOfWrite(integer $TotalRecordByteNumOfWrite) 设置总写入字节数 单位字节
 * @method integer getTotalDirtyRecordNum() 获取总的脏记录数据
 * @method void setTotalDirtyRecordNum(integer $TotalDirtyRecordNum) 设置总的脏记录数据
 * @method integer getTotalDirtyRecordByte() 获取总的脏字节数 单位字节
 * @method void setTotalDirtyRecordByte(integer $TotalDirtyRecordByte) 设置总的脏字节数 单位字节
 * @method integer getTotalDuration() 获取运行时长 单位s
 * @method void setTotalDuration(integer $TotalDuration) 设置运行时长 单位s
 * @method string getBeginRunTime() 获取开始运行时间
 * @method void setBeginRunTime(string $BeginRunTime) 设置开始运行时间
 * @method string getEndRunTime() 获取目前运行到的时间
 * @method void setEndRunTime(string $EndRunTime) 设置目前运行到的时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRealTimeTaskMetricOverviewResponse extends AbstractModel
{
    /**
     * @var integer 总读取记录数
     */
    public $TotalRecordNumOfRead;

    /**
     * @var integer 总读取字节数
     */
    public $TotalRecordByteNumOfRead;

    /**
     * @var integer 总写入记录数
     */
    public $TotalRecordNumOfWrite;

    /**
     * @var integer 总写入字节数 单位字节
     */
    public $TotalRecordByteNumOfWrite;

    /**
     * @var integer 总的脏记录数据
     */
    public $TotalDirtyRecordNum;

    /**
     * @var integer 总的脏字节数 单位字节
     */
    public $TotalDirtyRecordByte;

    /**
     * @var integer 运行时长 单位s
     */
    public $TotalDuration;

    /**
     * @var string 开始运行时间
     */
    public $BeginRunTime;

    /**
     * @var string 目前运行到的时间
     */
    public $EndRunTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalRecordNumOfRead 总读取记录数
     * @param integer $TotalRecordByteNumOfRead 总读取字节数
     * @param integer $TotalRecordNumOfWrite 总写入记录数
     * @param integer $TotalRecordByteNumOfWrite 总写入字节数 单位字节
     * @param integer $TotalDirtyRecordNum 总的脏记录数据
     * @param integer $TotalDirtyRecordByte 总的脏字节数 单位字节
     * @param integer $TotalDuration 运行时长 单位s
     * @param string $BeginRunTime 开始运行时间
     * @param string $EndRunTime 目前运行到的时间
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalRecordNumOfRead",$param) and $param["TotalRecordNumOfRead"] !== null) {
            $this->TotalRecordNumOfRead = $param["TotalRecordNumOfRead"];
        }

        if (array_key_exists("TotalRecordByteNumOfRead",$param) and $param["TotalRecordByteNumOfRead"] !== null) {
            $this->TotalRecordByteNumOfRead = $param["TotalRecordByteNumOfRead"];
        }

        if (array_key_exists("TotalRecordNumOfWrite",$param) and $param["TotalRecordNumOfWrite"] !== null) {
            $this->TotalRecordNumOfWrite = $param["TotalRecordNumOfWrite"];
        }

        if (array_key_exists("TotalRecordByteNumOfWrite",$param) and $param["TotalRecordByteNumOfWrite"] !== null) {
            $this->TotalRecordByteNumOfWrite = $param["TotalRecordByteNumOfWrite"];
        }

        if (array_key_exists("TotalDirtyRecordNum",$param) and $param["TotalDirtyRecordNum"] !== null) {
            $this->TotalDirtyRecordNum = $param["TotalDirtyRecordNum"];
        }

        if (array_key_exists("TotalDirtyRecordByte",$param) and $param["TotalDirtyRecordByte"] !== null) {
            $this->TotalDirtyRecordByte = $param["TotalDirtyRecordByte"];
        }

        if (array_key_exists("TotalDuration",$param) and $param["TotalDuration"] !== null) {
            $this->TotalDuration = $param["TotalDuration"];
        }

        if (array_key_exists("BeginRunTime",$param) and $param["BeginRunTime"] !== null) {
            $this->BeginRunTime = $param["BeginRunTime"];
        }

        if (array_key_exists("EndRunTime",$param) and $param["EndRunTime"] !== null) {
            $this->EndRunTime = $param["EndRunTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
