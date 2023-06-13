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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vhost概览统计信息
 *
 * @method integer getCurrentQueues() 获取当前vhost的queue数量
 * @method void setCurrentQueues(integer $CurrentQueues) 设置当前vhost的queue数量
 * @method integer getCurrentExchanges() 获取当前vhost的exchange数量
 * @method void setCurrentExchanges(integer $CurrentExchanges) 设置当前vhost的exchange数量
 * @method integer getCurrentConnections() 获取当前vhost的连接数量
 * @method void setCurrentConnections(integer $CurrentConnections) 设置当前vhost的连接数量
 * @method integer getCurrentChannels() 获取当前vhost的channel数量
 * @method void setCurrentChannels(integer $CurrentChannels) 设置当前vhost的channel数量
 * @method integer getCurrentUsers() 获取当前vhost的用户数量
 * @method void setCurrentUsers(integer $CurrentUsers) 设置当前vhost的用户数量
 */
class RabbitMQVirtualHostStatistics extends AbstractModel
{
    /**
     * @var integer 当前vhost的queue数量
     */
    public $CurrentQueues;

    /**
     * @var integer 当前vhost的exchange数量
     */
    public $CurrentExchanges;

    /**
     * @var integer 当前vhost的连接数量
     */
    public $CurrentConnections;

    /**
     * @var integer 当前vhost的channel数量
     */
    public $CurrentChannels;

    /**
     * @var integer 当前vhost的用户数量
     */
    public $CurrentUsers;

    /**
     * @param integer $CurrentQueues 当前vhost的queue数量
     * @param integer $CurrentExchanges 当前vhost的exchange数量
     * @param integer $CurrentConnections 当前vhost的连接数量
     * @param integer $CurrentChannels 当前vhost的channel数量
     * @param integer $CurrentUsers 当前vhost的用户数量
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
        if (array_key_exists("CurrentQueues",$param) and $param["CurrentQueues"] !== null) {
            $this->CurrentQueues = $param["CurrentQueues"];
        }

        if (array_key_exists("CurrentExchanges",$param) and $param["CurrentExchanges"] !== null) {
            $this->CurrentExchanges = $param["CurrentExchanges"];
        }

        if (array_key_exists("CurrentConnections",$param) and $param["CurrentConnections"] !== null) {
            $this->CurrentConnections = $param["CurrentConnections"];
        }

        if (array_key_exists("CurrentChannels",$param) and $param["CurrentChannels"] !== null) {
            $this->CurrentChannels = $param["CurrentChannels"];
        }

        if (array_key_exists("CurrentUsers",$param) and $param["CurrentUsers"] !== null) {
            $this->CurrentUsers = $param["CurrentUsers"];
        }
    }
}
