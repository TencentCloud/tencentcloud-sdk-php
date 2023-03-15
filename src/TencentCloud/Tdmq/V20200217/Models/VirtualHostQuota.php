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
 * vhost使用配额信息
 *
 * @method integer getMaxVirtualHost() 获取允许创建最大vhost数
 * @method void setMaxVirtualHost(integer $MaxVirtualHost) 设置允许创建最大vhost数
 * @method integer getUsedVirtualHost() 获取已创建vhost数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedVirtualHost(integer $UsedVirtualHost) 设置已创建vhost数
注意：此字段可能返回 null，表示取不到有效值。
 */
class VirtualHostQuota extends AbstractModel
{
    /**
     * @var integer 允许创建最大vhost数
     */
    public $MaxVirtualHost;

    /**
     * @var integer 已创建vhost数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedVirtualHost;

    /**
     * @param integer $MaxVirtualHost 允许创建最大vhost数
     * @param integer $UsedVirtualHost 已创建vhost数
注意：此字段可能返回 null，表示取不到有效值。
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
