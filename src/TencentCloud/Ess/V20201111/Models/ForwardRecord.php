<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署人的转交记录详情
 *
 * @method string getName() 获取<p>转交人打码后的姓名</p>
 * @method void setName(string $Name) 设置<p>转交人打码后的姓名</p>
 * @method string getMobile() 获取<p>转交人打码后的手机号</p>
 * @method void setMobile(string $Mobile) 设置<p>转交人打码后的手机号</p>
 * @method string getForwardType() 获取<p>进行转交的原因</p><p>枚举值：</p><ul><li>QUIT_FORWARD： 离职转交</li><li>FORWARD： 员工操作转交</li></ul>
 * @method void setForwardType(string $ForwardType) 设置<p>进行转交的原因</p><p>枚举值：</p><ul><li>QUIT_FORWARD： 离职转交</li><li>FORWARD： 员工操作转交</li></ul>
 * @method string getForwardMessage() 获取<p>转交的详情信息</p>
 * @method void setForwardMessage(string $ForwardMessage) 设置<p>转交的详情信息</p>
 * @method integer getForwardTime() 获取<p>转交时间</p><p>单位：时间戳（秒级）</p>
 * @method void setForwardTime(integer $ForwardTime) 设置<p>转交时间</p><p>单位：时间戳（秒级）</p>
 */
class ForwardRecord extends AbstractModel
{
    /**
     * @var string <p>转交人打码后的姓名</p>
     */
    public $Name;

    /**
     * @var string <p>转交人打码后的手机号</p>
     */
    public $Mobile;

    /**
     * @var string <p>进行转交的原因</p><p>枚举值：</p><ul><li>QUIT_FORWARD： 离职转交</li><li>FORWARD： 员工操作转交</li></ul>
     */
    public $ForwardType;

    /**
     * @var string <p>转交的详情信息</p>
     */
    public $ForwardMessage;

    /**
     * @var integer <p>转交时间</p><p>单位：时间戳（秒级）</p>
     */
    public $ForwardTime;

    /**
     * @param string $Name <p>转交人打码后的姓名</p>
     * @param string $Mobile <p>转交人打码后的手机号</p>
     * @param string $ForwardType <p>进行转交的原因</p><p>枚举值：</p><ul><li>QUIT_FORWARD： 离职转交</li><li>FORWARD： 员工操作转交</li></ul>
     * @param string $ForwardMessage <p>转交的详情信息</p>
     * @param integer $ForwardTime <p>转交时间</p><p>单位：时间戳（秒级）</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("ForwardType",$param) and $param["ForwardType"] !== null) {
            $this->ForwardType = $param["ForwardType"];
        }

        if (array_key_exists("ForwardMessage",$param) and $param["ForwardMessage"] !== null) {
            $this->ForwardMessage = $param["ForwardMessage"];
        }

        if (array_key_exists("ForwardTime",$param) and $param["ForwardTime"] !== null) {
            $this->ForwardTime = $param["ForwardTime"];
        }
    }
}
