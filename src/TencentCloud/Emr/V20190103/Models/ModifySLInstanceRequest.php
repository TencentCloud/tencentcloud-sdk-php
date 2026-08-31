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
 * @method string getInstanceId() 获取<p>实例唯一标识符（字符串表示）。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例唯一标识符（字符串表示）。</p>
 * @method string getZone() 获取<p>需要变更的区域名称。</p>
 * @method void setZone(string $Zone) 设置<p>需要变更的区域名称。</p>
 * @method integer getNodeNum() 获取<p>该区域变配后的目标节点数量，所有区域节点总数应大于等于3，小于等于50。</p>
 * @method void setNodeNum(integer $NodeNum) 设置<p>该区域变配后的目标节点数量，所有区域节点总数应大于等于3，小于等于50。</p>
 * @method string getClientToken() 获取<p>唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808</p>
 * @method void setClientToken(string $ClientToken) 设置<p>唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808</p>
 * @method integer getDiskSize() 获取<p>存储空间大小，需要是100的倍数，且不允许比当前存储空间小（只允许扩容）</p><p>单位：GB</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>存储空间大小，需要是100的倍数，且不允许比当前存储空间小（只允许扩容）</p><p>单位：GB</p>
 */
class ModifySLInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例唯一标识符（字符串表示）。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>需要变更的区域名称。</p>
     */
    public $Zone;

    /**
     * @var integer <p>该区域变配后的目标节点数量，所有区域节点总数应大于等于3，小于等于50。</p>
     */
    public $NodeNum;

    /**
     * @var string <p>唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808</p>
     */
    public $ClientToken;

    /**
     * @var integer <p>存储空间大小，需要是100的倍数，且不允许比当前存储空间小（只允许扩容）</p><p>单位：GB</p>
     */
    public $DiskSize;

    /**
     * @param string $InstanceId <p>实例唯一标识符（字符串表示）。</p>
     * @param string $Zone <p>需要变更的区域名称。</p>
     * @param integer $NodeNum <p>该区域变配后的目标节点数量，所有区域节点总数应大于等于3，小于等于50。</p>
     * @param string $ClientToken <p>唯一随机标识，时效性为5分钟，需要调用者指定 防止客户端重复创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae360632808</p>
     * @param integer $DiskSize <p>存储空间大小，需要是100的倍数，且不允许比当前存储空间小（只允许扩容）</p><p>单位：GB</p>
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

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
