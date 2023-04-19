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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例扩展事件详情
 *
 * @method integer getId() 获取ID
 * @method void setId(integer $Id) 设置ID
 * @method string getFileName() 获取扩展事件文件名称
 * @method void setFileName(string $FileName) 设置扩展事件文件名称
 * @method integer getSize() 获取扩展事件文件大小
 * @method void setSize(integer $Size) 设置扩展事件文件大小
 * @method string getEventType() 获取事件类型，slow-慢SQL事件，blocked-阻塞事件，deadlock-死锁事件
 * @method void setEventType(string $EventType) 设置事件类型，slow-慢SQL事件，blocked-阻塞事件，deadlock-死锁事件
 * @method integer getStatus() 获取事件记录状态，1-成功，2-失败
 * @method void setStatus(integer $Status) 设置事件记录状态，1-成功，2-失败
 * @method string getStartTime() 获取扩展文件生成开始时间
 * @method void setStartTime(string $StartTime) 设置扩展文件生成开始时间
 * @method string getEndTime() 获取扩展文件生成开始时间
 * @method void setEndTime(string $EndTime) 设置扩展文件生成开始时间
 * @method string getInternalAddr() 获取内网下载地址
 * @method void setInternalAddr(string $InternalAddr) 设置内网下载地址
 * @method string getExternalAddr() 获取外网下载地址
 * @method void setExternalAddr(string $ExternalAddr) 设置外网下载地址
 */
class Events extends AbstractModel
{
    /**
     * @var integer ID
     */
    public $Id;

    /**
     * @var string 扩展事件文件名称
     */
    public $FileName;

    /**
     * @var integer 扩展事件文件大小
     */
    public $Size;

    /**
     * @var string 事件类型，slow-慢SQL事件，blocked-阻塞事件，deadlock-死锁事件
     */
    public $EventType;

    /**
     * @var integer 事件记录状态，1-成功，2-失败
     */
    public $Status;

    /**
     * @var string 扩展文件生成开始时间
     */
    public $StartTime;

    /**
     * @var string 扩展文件生成开始时间
     */
    public $EndTime;

    /**
     * @var string 内网下载地址
     */
    public $InternalAddr;

    /**
     * @var string 外网下载地址
     */
    public $ExternalAddr;

    /**
     * @param integer $Id ID
     * @param string $FileName 扩展事件文件名称
     * @param integer $Size 扩展事件文件大小
     * @param string $EventType 事件类型，slow-慢SQL事件，blocked-阻塞事件，deadlock-死锁事件
     * @param integer $Status 事件记录状态，1-成功，2-失败
     * @param string $StartTime 扩展文件生成开始时间
     * @param string $EndTime 扩展文件生成开始时间
     * @param string $InternalAddr 内网下载地址
     * @param string $ExternalAddr 外网下载地址
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InternalAddr",$param) and $param["InternalAddr"] !== null) {
            $this->InternalAddr = $param["InternalAddr"];
        }

        if (array_key_exists("ExternalAddr",$param) and $param["ExternalAddr"] !== null) {
            $this->ExternalAddr = $param["ExternalAddr"];
        }
    }
}
