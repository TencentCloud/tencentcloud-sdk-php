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
 * 入侵防御封禁列表、放通列表添加规则入参
 *
 * @method integer getDirection() 获取规则方向，0出站，1入站，3内网间
 * @method void setDirection(integer $Direction) 设置规则方向，0出站，1入站，3内网间
 * @method string getEndTime() 获取规则结束时间，格式：2006-01-02 15:04:05，必须大于当前时间
 * @method void setEndTime(string $EndTime) 设置规则结束时间，格式：2006-01-02 15:04:05，必须大于当前时间
 * @method string getIP() 获取规则IP地址，IP与Domain必填其中之一
 * @method void setIP(string $IP) 设置规则IP地址，IP与Domain必填其中之一
 * @method string getDomain() 获取规则域名，IP与Domain必填其中之一
 * @method void setDomain(string $Domain) 设置规则域名，IP与Domain必填其中之一
 * @method string getComment() 获取备注信息，长度不能超过50
 * @method void setComment(string $Comment) 设置备注信息，长度不能超过50
 * @method string getStartTime() 获取规则开始时间
 * @method void setStartTime(string $StartTime) 设置规则开始时间
 */
class IntrusionDefenseRule extends AbstractModel
{
    /**
     * @var integer 规则方向，0出站，1入站，3内网间
     */
    public $Direction;

    /**
     * @var string 规则结束时间，格式：2006-01-02 15:04:05，必须大于当前时间
     */
    public $EndTime;

    /**
     * @var string 规则IP地址，IP与Domain必填其中之一
     */
    public $IP;

    /**
     * @var string 规则域名，IP与Domain必填其中之一
     */
    public $Domain;

    /**
     * @var string 备注信息，长度不能超过50
     */
    public $Comment;

    /**
     * @var string 规则开始时间
     */
    public $StartTime;

    /**
     * @param integer $Direction 规则方向，0出站，1入站，3内网间
     * @param string $EndTime 规则结束时间，格式：2006-01-02 15:04:05，必须大于当前时间
     * @param string $IP 规则IP地址，IP与Domain必填其中之一
     * @param string $Domain 规则域名，IP与Domain必填其中之一
     * @param string $Comment 备注信息，长度不能超过50
     * @param string $StartTime 规则开始时间
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
