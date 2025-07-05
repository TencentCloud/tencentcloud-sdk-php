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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 虚拟主机配额
 *
 * @method integer getMaxVirtualHost() 获取最大虚拟主机数
 * @method void setMaxVirtualHost(integer $MaxVirtualHost) 设置最大虚拟主机数
 * @method integer getUsedVirtualHost() 获取已经使用的虚拟主机数
 * @method void setUsedVirtualHost(integer $UsedVirtualHost) 设置已经使用的虚拟主机数
 */
class VirtualHostQuota extends AbstractModel
{
    /**
     * @var integer 最大虚拟主机数
     */
    public $MaxVirtualHost;

    /**
     * @var integer 已经使用的虚拟主机数
     */
    public $UsedVirtualHost;

    /**
     * @param integer $MaxVirtualHost 最大虚拟主机数
     * @param integer $UsedVirtualHost 已经使用的虚拟主机数
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
    }
}
