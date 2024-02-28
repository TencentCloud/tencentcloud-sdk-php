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
 * DescribeInstanceLogDetail请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getCurRunDate() 获取数据时间
 * @method void setCurRunDate(string $CurRunDate) 设置数据时间
 * @method string getBrokerIp() 获取服务器Ip
 * @method void setBrokerIp(string $BrokerIp) 设置服务器Ip
 * @method string getOriginFileName() 获取文件Name
 * @method void setOriginFileName(string $OriginFileName) 设置文件Name
 * @method integer getStartCount() 获取起始行
 * @method void setStartCount(integer $StartCount) 设置起始行
 * @method integer getLineCount() 获取每次查询行数
 * @method void setLineCount(integer $LineCount) 设置每次查询行数
 */
class DescribeInstanceLogDetailRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 数据时间
     */
    public $CurRunDate;

    /**
     * @var string 服务器Ip
     */
    public $BrokerIp;

    /**
     * @var string 文件Name
     */
    public $OriginFileName;

    /**
     * @var integer 起始行
     */
    public $StartCount;

    /**
     * @var integer 每次查询行数
     */
    public $LineCount;

    /**
     * @param string $ProjectId 项目ID
     * @param string $TaskId 任务id
     * @param string $CurRunDate 数据时间
     * @param string $BrokerIp 服务器Ip
     * @param string $OriginFileName 文件Name
     * @param integer $StartCount 起始行
     * @param integer $LineCount 每次查询行数
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("OriginFileName",$param) and $param["OriginFileName"] !== null) {
            $this->OriginFileName = $param["OriginFileName"];
        }

        if (array_key_exists("StartCount",$param) and $param["StartCount"] !== null) {
            $this->StartCount = $param["StartCount"];
        }

        if (array_key_exists("LineCount",$param) and $param["LineCount"] !== null) {
            $this->LineCount = $param["LineCount"];
        }
    }
}
