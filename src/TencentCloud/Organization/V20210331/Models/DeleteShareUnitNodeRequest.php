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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteShareUnitNode请求参数结构体
 *
 * @method string getUnitId() 获取<p>共享单元ID。</p>
 * @method void setUnitId(string $UnitId) 设置<p>共享单元ID。</p>
 * @method integer getNodeId() 获取<p>部门ID。</p>
 * @method void setNodeId(integer $NodeId) 设置<p>部门ID。</p>
 */
class DeleteShareUnitNodeRequest extends AbstractModel
{
    /**
     * @var string <p>共享单元ID。</p>
     */
    public $UnitId;

    /**
     * @var integer <p>部门ID。</p>
     */
    public $NodeId;

    /**
     * @param string $UnitId <p>共享单元ID。</p>
     * @param integer $NodeId <p>部门ID。</p>
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
        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }
    }
}
