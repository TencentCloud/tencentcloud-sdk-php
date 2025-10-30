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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接收组信息
 *
 * @method array getReceiveGroup() 获取接收组
 * @method void setReceiveGroup(array $ReceiveGroup) 设置接收组
 * @method string getEndReceiveTime() 获取最后接收时间，格式: "HH:mm:ss"
 * @method void setEndReceiveTime(string $EndReceiveTime) 设置最后接收时间，格式: "HH:mm:ss"
 * @method string getReceiveName() 获取接收名
 * @method void setReceiveName(string $ReceiveName) 设置接收名
 * @method array getSendChannel() 获取推送渠道
 * @method void setSendChannel(array $SendChannel) 设置推送渠道
 * @method string getStartReceiveTime() 获取开始时间，格式: "HH:mm:ss"
 * @method void setStartReceiveTime(string $StartReceiveTime) 设置开始时间，格式: "HH:mm:ss"
 * @method array getReceiveUin() 获取接收用户列表
 * @method void setReceiveUin(array $ReceiveUin) 设置接收用户列表
 */
class ReceiveInfo extends AbstractModel
{
    /**
     * @var array 接收组
     */
    public $ReceiveGroup;

    /**
     * @var string 最后接收时间，格式: "HH:mm:ss"
     */
    public $EndReceiveTime;

    /**
     * @var string 接收名
     */
    public $ReceiveName;

    /**
     * @var array 推送渠道
     */
    public $SendChannel;

    /**
     * @var string 开始时间，格式: "HH:mm:ss"
     */
    public $StartReceiveTime;

    /**
     * @var array 接收用户列表
     */
    public $ReceiveUin;

    /**
     * @param array $ReceiveGroup 接收组
     * @param string $EndReceiveTime 最后接收时间，格式: "HH:mm:ss"
     * @param string $ReceiveName 接收名
     * @param array $SendChannel 推送渠道
     * @param string $StartReceiveTime 开始时间，格式: "HH:mm:ss"
     * @param array $ReceiveUin 接收用户列表
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
        if (array_key_exists("ReceiveGroup",$param) and $param["ReceiveGroup"] !== null) {
            $this->ReceiveGroup = $param["ReceiveGroup"];
        }

        if (array_key_exists("EndReceiveTime",$param) and $param["EndReceiveTime"] !== null) {
            $this->EndReceiveTime = $param["EndReceiveTime"];
        }

        if (array_key_exists("ReceiveName",$param) and $param["ReceiveName"] !== null) {
            $this->ReceiveName = $param["ReceiveName"];
        }

        if (array_key_exists("SendChannel",$param) and $param["SendChannel"] !== null) {
            $this->SendChannel = $param["SendChannel"];
        }

        if (array_key_exists("StartReceiveTime",$param) and $param["StartReceiveTime"] !== null) {
            $this->StartReceiveTime = $param["StartReceiveTime"];
        }

        if (array_key_exists("ReceiveUin",$param) and $param["ReceiveUin"] !== null) {
            $this->ReceiveUin = [];
            foreach ($param["ReceiveUin"] as $key => $value){
                $obj = new ReceiveUin();
                $obj->deserialize($value);
                array_push($this->ReceiveUin, $obj);
            }
        }
    }
}
