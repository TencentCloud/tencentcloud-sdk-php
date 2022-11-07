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
 * DescribeInstanceLog请求参数结构体
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getCurRunDate() 获取数据时间
 * @method void setCurRunDate(string $CurRunDate) 设置数据时间
 * @method string getBrokerIp() 获取服务器Ip
 * @method void setBrokerIp(string $BrokerIp) 设置服务器Ip
 * @method string getOriginFileName() 获取文件Name
 * @method void setOriginFileName(string $OriginFileName) 设置文件Name
 */
class DescribeInstanceLogRequest extends AbstractModel
{
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
     * @param string $TaskId 任务id
     * @param string $CurRunDate 数据时间
     * @param string $BrokerIp 服务器Ip
     * @param string $OriginFileName 文件Name
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
    }
}
