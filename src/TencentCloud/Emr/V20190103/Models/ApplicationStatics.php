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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * yarn application 统计信息
 *
 * @method string getQueue() 获取队列名
 * @method void setQueue(string $Queue) 设置队列名
 * @method string getUser() 获取用户名
 * @method void setUser(string $User) 设置用户名
 * @method string getApplicationType() 获取作业类型
 * @method void setApplicationType(string $ApplicationType) 设置作业类型
 * @method integer getSumMemorySeconds() 获取SumMemorySeconds含义
 * @method void setSumMemorySeconds(integer $SumMemorySeconds) 设置SumMemorySeconds含义
 * @method integer getSumVCoreSeconds() 获取SumVCoreSeconds含义
 * @method void setSumVCoreSeconds(integer $SumVCoreSeconds) 设置SumVCoreSeconds含义
 * @method string getSumHDFSBytesWritten() 获取SumHDFSBytesWritten（带单位）
 * @method void setSumHDFSBytesWritten(string $SumHDFSBytesWritten) 设置SumHDFSBytesWritten（带单位）
 * @method string getSumHDFSBytesRead() 获取SumHDFSBytesRead（待单位）
 * @method void setSumHDFSBytesRead(string $SumHDFSBytesRead) 设置SumHDFSBytesRead（待单位）
 * @method integer getCountApps() 获取作业数
 * @method void setCountApps(integer $CountApps) 设置作业数
 */
class ApplicationStatics extends AbstractModel
{
    /**
     * @var string 队列名
     */
    public $Queue;

    /**
     * @var string 用户名
     */
    public $User;

    /**
     * @var string 作业类型
     */
    public $ApplicationType;

    /**
     * @var integer SumMemorySeconds含义
     */
    public $SumMemorySeconds;

    /**
     * @var integer SumVCoreSeconds含义
     */
    public $SumVCoreSeconds;

    /**
     * @var string SumHDFSBytesWritten（带单位）
     */
    public $SumHDFSBytesWritten;

    /**
     * @var string SumHDFSBytesRead（待单位）
     */
    public $SumHDFSBytesRead;

    /**
     * @var integer 作业数
     */
    public $CountApps;

    /**
     * @param string $Queue 队列名
     * @param string $User 用户名
     * @param string $ApplicationType 作业类型
     * @param integer $SumMemorySeconds SumMemorySeconds含义
     * @param integer $SumVCoreSeconds SumVCoreSeconds含义
     * @param string $SumHDFSBytesWritten SumHDFSBytesWritten（带单位）
     * @param string $SumHDFSBytesRead SumHDFSBytesRead（待单位）
     * @param integer $CountApps 作业数
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
        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("SumMemorySeconds",$param) and $param["SumMemorySeconds"] !== null) {
            $this->SumMemorySeconds = $param["SumMemorySeconds"];
        }

        if (array_key_exists("SumVCoreSeconds",$param) and $param["SumVCoreSeconds"] !== null) {
            $this->SumVCoreSeconds = $param["SumVCoreSeconds"];
        }

        if (array_key_exists("SumHDFSBytesWritten",$param) and $param["SumHDFSBytesWritten"] !== null) {
            $this->SumHDFSBytesWritten = $param["SumHDFSBytesWritten"];
        }

        if (array_key_exists("SumHDFSBytesRead",$param) and $param["SumHDFSBytesRead"] !== null) {
            $this->SumHDFSBytesRead = $param["SumHDFSBytesRead"];
        }

        if (array_key_exists("CountApps",$param) and $param["CountApps"] !== null) {
            $this->CountApps = $param["CountApps"];
        }
    }
}
