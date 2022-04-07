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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBlockByIpTimesList请求参数结构体
 *
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getIp() 获取ip查询条件
 * @method void setIp(string $Ip) 设置ip查询条件
 * @method string getZone() 获取地域
 * @method void setZone(string $Zone) 设置地域
 * @method string getDirection() 获取方向
 * @method void setDirection(string $Direction) 设置方向
 * @method string getSource() 获取来源
 * @method void setSource(string $Source) 设置来源
 * @method string getEdgeId() 获取vpc间防火墙开关边id
 * @method void setEdgeId(string $EdgeId) 设置vpc间防火墙开关边id
 * @method string getLogSource() 获取日志来源 move：vpc间防火墙
 * @method void setLogSource(string $LogSource) 设置日志来源 move：vpc间防火墙
 */
class DescribeBlockByIpTimesListRequest extends AbstractModel
{
    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string ip查询条件
     */
    public $Ip;

    /**
     * @var string 地域
     */
    public $Zone;

    /**
     * @var string 方向
     */
    public $Direction;

    /**
     * @var string 来源
     */
    public $Source;

    /**
     * @var string vpc间防火墙开关边id
     */
    public $EdgeId;

    /**
     * @var string 日志来源 move：vpc间防火墙
     */
    public $LogSource;

    /**
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $Ip ip查询条件
     * @param string $Zone 地域
     * @param string $Direction 方向
     * @param string $Source 来源
     * @param string $EdgeId vpc间防火墙开关边id
     * @param string $LogSource 日志来源 move：vpc间防火墙
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }
    }
}
