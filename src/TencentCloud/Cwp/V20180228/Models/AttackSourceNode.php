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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 攻击溯源节点
 *
 * @method integer getEventId() 获取事件ID，为空的时候表示没有对应事件
 * @method void setEventId(integer $EventId) 设置事件ID，为空的时候表示没有对应事件
 * @method string getEventType() 获取BRUTEFORCE:密码破解、MALWARE:木马、BASH:高危命令、RISK_DNS:恶意请求、LOGIN:异地登录、HOST:主机节点, TIME_ORDER：通用节点
 * @method void setEventType(string $EventType) 设置BRUTEFORCE:密码破解、MALWARE:木马、BASH:高危命令、RISK_DNS:恶意请求、LOGIN:异地登录、HOST:主机节点, TIME_ORDER：通用节点
 * @method string getIp() 获取节点ip 当节点为HOST时
 * @method void setIp(string $Ip) 设置节点ip 当节点为HOST时
 * @method integer getLevel() 获取等级  0：提示，1：低危,  2：中危,  3：高危,  4：严重
 * @method void setLevel(integer $Level) 设置等级  0：提示，1：低危,  2：中危,  3：高危,  4：严重
 * @method string getNodeId() 获取节点ID
 * @method void setNodeId(string $NodeId) 设置节点ID
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getNodeDesc() 获取通用节点的描述
 * @method void setNodeDesc(string $NodeDesc) 设置通用节点的描述
 * @method integer getTimeLineNum() 获取时间线编号，同一个编号的节点属于同一个时间线
 * @method void setTimeLineNum(integer $TimeLineNum) 设置时间线编号，同一个编号的节点属于同一个时间线
 * @method string getNodeDetail() 获取节点详情
 * @method void setNodeDetail(string $NodeDetail) 设置节点详情
 */
class AttackSourceNode extends AbstractModel
{
    /**
     * @var integer 事件ID，为空的时候表示没有对应事件
     */
    public $EventId;

    /**
     * @var string BRUTEFORCE:密码破解、MALWARE:木马、BASH:高危命令、RISK_DNS:恶意请求、LOGIN:异地登录、HOST:主机节点, TIME_ORDER：通用节点
     */
    public $EventType;

    /**
     * @var string 节点ip 当节点为HOST时
     */
    public $Ip;

    /**
     * @var integer 等级  0：提示，1：低危,  2：中危,  3：高危,  4：严重
     */
    public $Level;

    /**
     * @var string 节点ID
     */
    public $NodeId;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 通用节点的描述
     */
    public $NodeDesc;

    /**
     * @var integer 时间线编号，同一个编号的节点属于同一个时间线
     */
    public $TimeLineNum;

    /**
     * @var string 节点详情
     */
    public $NodeDetail;

    /**
     * @param integer $EventId 事件ID，为空的时候表示没有对应事件
     * @param string $EventType BRUTEFORCE:密码破解、MALWARE:木马、BASH:高危命令、RISK_DNS:恶意请求、LOGIN:异地登录、HOST:主机节点, TIME_ORDER：通用节点
     * @param string $Ip 节点ip 当节点为HOST时
     * @param integer $Level 等级  0：提示，1：低危,  2：中危,  3：高危,  4：严重
     * @param string $NodeId 节点ID
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $NodeDesc 通用节点的描述
     * @param integer $TimeLineNum 时间线编号，同一个编号的节点属于同一个时间线
     * @param string $NodeDetail 节点详情
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NodeDesc",$param) and $param["NodeDesc"] !== null) {
            $this->NodeDesc = $param["NodeDesc"];
        }

        if (array_key_exists("TimeLineNum",$param) and $param["TimeLineNum"] !== null) {
            $this->TimeLineNum = $param["TimeLineNum"];
        }

        if (array_key_exists("NodeDetail",$param) and $param["NodeDetail"] !== null) {
            $this->NodeDetail = $param["NodeDetail"];
        }
    }
}
