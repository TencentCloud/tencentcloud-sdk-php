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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterAuditLogStatus请求参数结构体
 *
 * @method boolean getAuditLogSwitch() 获取<p>审计日志开关，审计日志目标状态：true-开启，false-关闭。开启要求集群已开启防护，关闭不要求。</p>
 * @method void setAuditLogSwitch(boolean $AuditLogSwitch) 设置<p>审计日志开关，审计日志目标状态：true-开启，false-关闭。开启要求集群已开启防护，关闭不要求。</p>
 * @method string getClusterAssetId() 获取<p>集群资产 id（已废弃）</p>
 * @method void setClusterAssetId(string $ClusterAssetId) 设置<p>集群资产 id（已废弃）</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getOperatedMemberId() 获取被调用的集团账号的成员id
 * @method void setOperatedMemberId(array $OperatedMemberId) 设置被调用的集团账号的成员id
 * @method array getClusterCaMD5List() 获取<p>集群 CA 证书 MD5 列表，集群的唯一标识，支持单个或批量修改</p>
 * @method void setClusterCaMD5List(array $ClusterCaMD5List) 设置<p>集群 CA 证书 MD5 列表，集群的唯一标识，支持单个或批量修改</p>
 */
class ModifyClusterAuditLogStatusRequest extends AbstractModel
{
    /**
     * @var boolean <p>审计日志开关，审计日志目标状态：true-开启，false-关闭。开启要求集群已开启防护，关闭不要求。</p>
     */
    public $AuditLogSwitch;

    /**
     * @var string <p>集群资产 id（已废弃）</p>
     */
    public $ClusterAssetId;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array 被调用的集团账号的成员id
     */
    public $OperatedMemberId;

    /**
     * @var array <p>集群 CA 证书 MD5 列表，集群的唯一标识，支持单个或批量修改</p>
     */
    public $ClusterCaMD5List;

    /**
     * @param boolean $AuditLogSwitch <p>审计日志开关，审计日志目标状态：true-开启，false-关闭。开启要求集群已开启防护，关闭不要求。</p>
     * @param string $ClusterAssetId <p>集群资产 id（已废弃）</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $OperatedMemberId 被调用的集团账号的成员id
     * @param array $ClusterCaMD5List <p>集群 CA 证书 MD5 列表，集群的唯一标识，支持单个或批量修改</p>
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
        if (array_key_exists("AuditLogSwitch",$param) and $param["AuditLogSwitch"] !== null) {
            $this->AuditLogSwitch = $param["AuditLogSwitch"];
        }

        if (array_key_exists("ClusterAssetId",$param) and $param["ClusterAssetId"] !== null) {
            $this->ClusterAssetId = $param["ClusterAssetId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("OperatedMemberId",$param) and $param["OperatedMemberId"] !== null) {
            $this->OperatedMemberId = $param["OperatedMemberId"];
        }

        if (array_key_exists("ClusterCaMD5List",$param) and $param["ClusterCaMD5List"] !== null) {
            $this->ClusterCaMD5List = $param["ClusterCaMD5List"];
        }
    }
}
