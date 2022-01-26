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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeXP2PData请求参数结构体
 *
 * @method string getP2PAppId() 获取P2P应用ID
 * @method void setP2PAppId(string $P2PAppId) 设置P2P应用ID
 * @method integer getFrom() 获取查询开始时间，时间戳秒
 * @method void setFrom(integer $From) 设置查询开始时间，时间戳秒
 * @method integer getTo() 获取查询结束时间，时间戳秒
 * @method void setTo(integer $To) 设置查询结束时间，时间戳秒
 * @method string getP2PChannelId() 获取P2P通路ID
 * @method void setP2PChannelId(string $P2PChannelId) 设置P2P通路ID
 */
class DescribeXP2PDataRequest extends AbstractModel
{
    /**
     * @var string P2P应用ID
     */
    public $P2PAppId;

    /**
     * @var integer 查询开始时间，时间戳秒
     */
    public $From;

    /**
     * @var integer 查询结束时间，时间戳秒
     */
    public $To;

    /**
     * @var string P2P通路ID
     */
    public $P2PChannelId;

    /**
     * @param string $P2PAppId P2P应用ID
     * @param integer $From 查询开始时间，时间戳秒
     * @param integer $To 查询结束时间，时间戳秒
     * @param string $P2PChannelId P2P通路ID
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
        if (array_key_exists("P2PAppId",$param) and $param["P2PAppId"] !== null) {
            $this->P2PAppId = $param["P2PAppId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("P2PChannelId",$param) and $param["P2PChannelId"] !== null) {
            $this->P2PChannelId = $param["P2PChannelId"];
        }
    }
}
