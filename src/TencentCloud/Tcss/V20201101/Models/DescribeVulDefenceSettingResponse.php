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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulDefenceSetting返回参数结构体
 *
 * @method integer getIsEnabled() 获取是否开启:0: 关闭 1:开启
 * @method void setIsEnabled(integer $IsEnabled) 设置是否开启:0: 关闭 1:开启
 * @method integer getScope() 获取漏洞防御主机范围: 0:自选主机节点，1:全部
 * @method void setScope(integer $Scope) 设置漏洞防御主机范围: 0:自选主机节点，1:全部
 * @method integer getHostCount() 获取漏洞防御主机数量
 * @method void setHostCount(integer $HostCount) 设置漏洞防御主机数量
 * @method integer getExceptionHostCount() 获取开启漏洞防御异常主机数量
 * @method void setExceptionHostCount(integer $ExceptionHostCount) 设置开启漏洞防御异常主机数量
 * @method array getHostIDs() 获取自选漏洞防御主机
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostIDs(array $HostIDs) 设置自选漏洞防御主机
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHostTotalCount() 获取开通容器安全的主机总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostTotalCount(integer $HostTotalCount) 设置开通容器安全的主机总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSupportDefenseVulCount() 获取支持防御的漏洞数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportDefenseVulCount(integer $SupportDefenseVulCount) 设置支持防御的漏洞数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHostNodeCount() 获取普通节点个数
 * @method void setHostNodeCount(integer $HostNodeCount) 设置普通节点个数
 * @method integer getSuperScope() 获取超级节点范围
 * @method void setSuperScope(integer $SuperScope) 设置超级节点范围
 * @method integer getSuperNodeCount() 获取超级节点个数
 * @method void setSuperNodeCount(integer $SuperNodeCount) 设置超级节点个数
 * @method array getSuperNodeIds() 获取超级节点Id列表
 * @method void setSuperNodeIds(array $SuperNodeIds) 设置超级节点Id列表
 * @method integer getNodeTotalCount() 获取开通容器安全的超级结点总数
 * @method void setNodeTotalCount(integer $NodeTotalCount) 设置开通容器安全的超级结点总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulDefenceSettingResponse extends AbstractModel
{
    /**
     * @var integer 是否开启:0: 关闭 1:开启
     */
    public $IsEnabled;

    /**
     * @var integer 漏洞防御主机范围: 0:自选主机节点，1:全部
     */
    public $Scope;

    /**
     * @var integer 漏洞防御主机数量
     */
    public $HostCount;

    /**
     * @var integer 开启漏洞防御异常主机数量
     */
    public $ExceptionHostCount;

    /**
     * @var array 自选漏洞防御主机
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostIDs;

    /**
     * @var integer 开通容器安全的主机总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostTotalCount;

    /**
     * @var integer 支持防御的漏洞数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportDefenseVulCount;

    /**
     * @var integer 普通节点个数
     */
    public $HostNodeCount;

    /**
     * @var integer 超级节点范围
     */
    public $SuperScope;

    /**
     * @var integer 超级节点个数
     */
    public $SuperNodeCount;

    /**
     * @var array 超级节点Id列表
     */
    public $SuperNodeIds;

    /**
     * @var integer 开通容器安全的超级结点总数
     */
    public $NodeTotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $IsEnabled 是否开启:0: 关闭 1:开启
     * @param integer $Scope 漏洞防御主机范围: 0:自选主机节点，1:全部
     * @param integer $HostCount 漏洞防御主机数量
     * @param integer $ExceptionHostCount 开启漏洞防御异常主机数量
     * @param array $HostIDs 自选漏洞防御主机
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HostTotalCount 开通容器安全的主机总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SupportDefenseVulCount 支持防御的漏洞数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HostNodeCount 普通节点个数
     * @param integer $SuperScope 超级节点范围
     * @param integer $SuperNodeCount 超级节点个数
     * @param array $SuperNodeIds 超级节点Id列表
     * @param integer $NodeTotalCount 开通容器安全的超级结点总数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ExceptionHostCount",$param) and $param["ExceptionHostCount"] !== null) {
            $this->ExceptionHostCount = $param["ExceptionHostCount"];
        }

        if (array_key_exists("HostIDs",$param) and $param["HostIDs"] !== null) {
            $this->HostIDs = $param["HostIDs"];
        }

        if (array_key_exists("HostTotalCount",$param) and $param["HostTotalCount"] !== null) {
            $this->HostTotalCount = $param["HostTotalCount"];
        }

        if (array_key_exists("SupportDefenseVulCount",$param) and $param["SupportDefenseVulCount"] !== null) {
            $this->SupportDefenseVulCount = $param["SupportDefenseVulCount"];
        }

        if (array_key_exists("HostNodeCount",$param) and $param["HostNodeCount"] !== null) {
            $this->HostNodeCount = $param["HostNodeCount"];
        }

        if (array_key_exists("SuperScope",$param) and $param["SuperScope"] !== null) {
            $this->SuperScope = $param["SuperScope"];
        }

        if (array_key_exists("SuperNodeCount",$param) and $param["SuperNodeCount"] !== null) {
            $this->SuperNodeCount = $param["SuperNodeCount"];
        }

        if (array_key_exists("SuperNodeIds",$param) and $param["SuperNodeIds"] !== null) {
            $this->SuperNodeIds = $param["SuperNodeIds"];
        }

        if (array_key_exists("NodeTotalCount",$param) and $param["NodeTotalCount"] !== null) {
            $this->NodeTotalCount = $param["NodeTotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
