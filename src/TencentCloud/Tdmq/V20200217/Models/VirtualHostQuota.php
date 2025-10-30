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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vhost使用配额信息
 *
 * @method integer getMaxVirtualHost() 获取允许创建最大vhost数
 * @method void setMaxVirtualHost(integer $MaxVirtualHost) 设置允许创建最大vhost数
 * @method integer getUsedVirtualHost() 获取已创建vhost数
 * @method void setUsedVirtualHost(integer $UsedVirtualHost) 设置已创建vhost数
 * @method integer getMaxConnectionPerVhost() 获取单个 vhost 下允许的最大连接数
 * @method void setMaxConnectionPerVhost(integer $MaxConnectionPerVhost) 设置单个 vhost 下允许的最大连接数
 * @method integer getMaxExchangePerVhost() 获取单个 vhost 下允许的最大交换机数
 * @method void setMaxExchangePerVhost(integer $MaxExchangePerVhost) 设置单个 vhost 下允许的最大交换机数
 * @method integer getMaxQueuePerVhost() 获取单个 vhost 下允许的最大队列机数
 * @method void setMaxQueuePerVhost(integer $MaxQueuePerVhost) 设置单个 vhost 下允许的最大队列机数
 */
class VirtualHostQuota extends AbstractModel
{
    /**
     * @var integer 允许创建最大vhost数
     */
    public $MaxVirtualHost;

    /**
     * @var integer 已创建vhost数
     */
    public $UsedVirtualHost;

    /**
     * @var integer 单个 vhost 下允许的最大连接数
     */
    public $MaxConnectionPerVhost;

    /**
     * @var integer 单个 vhost 下允许的最大交换机数
     */
    public $MaxExchangePerVhost;

    /**
     * @var integer 单个 vhost 下允许的最大队列机数
     */
    public $MaxQueuePerVhost;

    /**
     * @param integer $MaxVirtualHost 允许创建最大vhost数
     * @param integer $UsedVirtualHost 已创建vhost数
     * @param integer $MaxConnectionPerVhost 单个 vhost 下允许的最大连接数
     * @param integer $MaxExchangePerVhost 单个 vhost 下允许的最大交换机数
     * @param integer $MaxQueuePerVhost 单个 vhost 下允许的最大队列机数
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
        if (array_key_exists("MaxVirtualHost",$param) and $param["MaxVirtualHost"] !== null) {
            $this->MaxVirtualHost = $param["MaxVirtualHost"];
        }

        if (array_key_exists("UsedVirtualHost",$param) and $param["UsedVirtualHost"] !== null) {
            $this->UsedVirtualHost = $param["UsedVirtualHost"];
        }

        if (array_key_exists("MaxConnectionPerVhost",$param) and $param["MaxConnectionPerVhost"] !== null) {
            $this->MaxConnectionPerVhost = $param["MaxConnectionPerVhost"];
        }

        if (array_key_exists("MaxExchangePerVhost",$param) and $param["MaxExchangePerVhost"] !== null) {
            $this->MaxExchangePerVhost = $param["MaxExchangePerVhost"];
        }

        if (array_key_exists("MaxQueuePerVhost",$param) and $param["MaxQueuePerVhost"] !== null) {
            $this->MaxQueuePerVhost = $param["MaxQueuePerVhost"];
        }
    }
}
