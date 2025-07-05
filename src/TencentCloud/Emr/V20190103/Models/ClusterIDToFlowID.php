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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群id与流程id的mapping
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method integer getFlowId() 获取流程id
 * @method void setFlowId(integer $FlowId) 设置流程id
 */
class ClusterIDToFlowID extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var integer 流程id
     */
    public $FlowId;

    /**
     * @param string $ClusterId 集群id
     * @param integer $FlowId 流程id
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}
