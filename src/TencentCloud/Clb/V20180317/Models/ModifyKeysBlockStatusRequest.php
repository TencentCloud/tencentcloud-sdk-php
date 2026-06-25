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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyKeysBlockStatus请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例ID</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID</p>
 * @method boolean getBlocked() 获取<p>是否停止使用</p>
 * @method void setBlocked(boolean $Blocked) 设置<p>是否停止使用</p>
 * @method array getKeyIds() 获取<p>需要修改的Key的ID列表</p>
 * @method void setKeyIds(array $KeyIds) 设置<p>需要修改的Key的ID列表</p>
 */
class ModifyKeysBlockStatusRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例ID</p>
     */
    public $ModelRouterId;

    /**
     * @var boolean <p>是否停止使用</p>
     */
    public $Blocked;

    /**
     * @var array <p>需要修改的Key的ID列表</p>
     */
    public $KeyIds;

    /**
     * @param string $ModelRouterId <p>模型路由实例ID</p>
     * @param boolean $Blocked <p>是否停止使用</p>
     * @param array $KeyIds <p>需要修改的Key的ID列表</p>
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
        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("Blocked",$param) and $param["Blocked"] !== null) {
            $this->Blocked = $param["Blocked"];
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }
    }
}
