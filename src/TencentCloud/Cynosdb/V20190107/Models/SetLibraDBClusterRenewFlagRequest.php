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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetLibraDBClusterRenewFlag请求参数结构体
 *
 * @method array getResourceIds() 获取分析集群 ID 列表
 * @method void setResourceIds(array $ResourceIds) 设置分析集群 ID 列表
 * @method integer getAutoRenewFlag() 获取续费标记 0:正常续费  1:自动续费 2:到期不续
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置续费标记 0:正常续费  1:自动续费 2:到期不续
 */
class SetLibraDBClusterRenewFlagRequest extends AbstractModel
{
    /**
     * @var array 分析集群 ID 列表
     */
    public $ResourceIds;

    /**
     * @var integer 续费标记 0:正常续费  1:自动续费 2:到期不续
     */
    public $AutoRenewFlag;

    /**
     * @param array $ResourceIds 分析集群 ID 列表
     * @param integer $AutoRenewFlag 续费标记 0:正常续费  1:自动续费 2:到期不续
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
