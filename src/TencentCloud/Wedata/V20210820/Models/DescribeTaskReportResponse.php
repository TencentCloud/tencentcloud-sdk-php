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
 * DescribeTaskReport返回参数结构体
 *
 * @method integer getTotalReadRecords() 获取总读取条数
 * @method void setTotalReadRecords(integer $TotalReadRecords) 设置总读取条数
 * @method integer getTotalReadBytes() 获取总读取字节数，单位为Byte
 * @method void setTotalReadBytes(integer $TotalReadBytes) 设置总读取字节数，单位为Byte
 * @method integer getTotalWriteRecords() 获取总写入条数
 * @method void setTotalWriteRecords(integer $TotalWriteRecords) 设置总写入条数
 * @method integer getTotalWriteBytes() 获取总写入字节数，单位为Byte
 * @method void setTotalWriteBytes(integer $TotalWriteBytes) 设置总写入字节数，单位为Byte
 * @method integer getTotalErrorRecords() 获取总脏数据条数
 * @method void setTotalErrorRecords(integer $TotalErrorRecords) 设置总脏数据条数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskReportResponse extends AbstractModel
{
    /**
     * @var integer 总读取条数
     */
    public $TotalReadRecords;

    /**
     * @var integer 总读取字节数，单位为Byte
     */
    public $TotalReadBytes;

    /**
     * @var integer 总写入条数
     */
    public $TotalWriteRecords;

    /**
     * @var integer 总写入字节数，单位为Byte
     */
    public $TotalWriteBytes;

    /**
     * @var integer 总脏数据条数
     */
    public $TotalErrorRecords;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalReadRecords 总读取条数
     * @param integer $TotalReadBytes 总读取字节数，单位为Byte
     * @param integer $TotalWriteRecords 总写入条数
     * @param integer $TotalWriteBytes 总写入字节数，单位为Byte
     * @param integer $TotalErrorRecords 总脏数据条数
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
        if (array_key_exists("TotalReadRecords",$param) and $param["TotalReadRecords"] !== null) {
            $this->TotalReadRecords = $param["TotalReadRecords"];
        }

        if (array_key_exists("TotalReadBytes",$param) and $param["TotalReadBytes"] !== null) {
            $this->TotalReadBytes = $param["TotalReadBytes"];
        }

        if (array_key_exists("TotalWriteRecords",$param) and $param["TotalWriteRecords"] !== null) {
            $this->TotalWriteRecords = $param["TotalWriteRecords"];
        }

        if (array_key_exists("TotalWriteBytes",$param) and $param["TotalWriteBytes"] !== null) {
            $this->TotalWriteBytes = $param["TotalWriteBytes"];
        }

        if (array_key_exists("TotalErrorRecords",$param) and $param["TotalErrorRecords"] !== null) {
            $this->TotalErrorRecords = $param["TotalErrorRecords"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
