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
 * ModifySLInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例唯一标识符（字符串表示）。
 * @method void setInstanceId(string $InstanceId) 设置实例唯一标识符（字符串表示）。
 * @method string getZone() 获取需要变更的区域名称。
 * @method void setZone(string $Zone) 设置需要变更的区域名称。
 * @method integer getNodeNum() 获取该区域变配后的目标节点数量，所有区域节点总数应大于等于3，小于等于50。
 * @method void setNodeNum(integer $NodeNum) 设置该区域变配后的目标节点数量，所有区域节点总数应大于等于3，小于等于50。
 * @method string getClientToken() 获取唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-****-****-****-fae360632808	
 * @method void setClientToken(string $ClientToken) 设置唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-****-****-****-fae360632808	
 */
class ModifySLInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例唯一标识符（字符串表示）。
     */
    public $InstanceId;

    /**
     * @var string 需要变更的区域名称。
     */
    public $Zone;

    /**
     * @var integer 该区域变配后的目标节点数量，所有区域节点总数应大于等于3，小于等于50。
     */
    public $NodeNum;

    /**
     * @var string 唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-****-****-****-fae360632808	
     */
    public $ClientToken;

    /**
     * @param string $InstanceId 实例唯一标识符（字符串表示）。
     * @param string $Zone 需要变更的区域名称。
     * @param integer $NodeNum 该区域变配后的目标节点数量，所有区域节点总数应大于等于3，小于等于50。
     * @param string $ClientToken 唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-****-****-****-fae360632808	
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
