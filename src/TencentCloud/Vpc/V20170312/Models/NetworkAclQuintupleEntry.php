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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络ACL五元组Entry
 *
 * @method string getProtocol() 获取协议, 取值: TCP,UDP, ICMP, ALL。
 * @method void setProtocol(string $Protocol) 设置协议, 取值: TCP,UDP, ICMP, ALL。
 * @method string getDescription() 获取描述。
 * @method void setDescription(string $Description) 设置描述。
 * @method string getSourcePort() 获取源端口(all, 单个port,  range)。当Protocol为ALL或ICMP时，不能指定Port。
 * @method void setSourcePort(string $SourcePort) 设置源端口(all, 单个port,  range)。当Protocol为ALL或ICMP时，不能指定Port。
 * @method string getSourceCidr() 获取源CIDR。
 * @method void setSourceCidr(string $SourceCidr) 设置源CIDR。
 * @method string getDestinationPort() 获取目的端口(all, 单个port,  range)。当Protocol为ALL或ICMP时，不能指定Port。
 * @method void setDestinationPort(string $DestinationPort) 设置目的端口(all, 单个port,  range)。当Protocol为ALL或ICMP时，不能指定Port。
 * @method string getDestinationCidr() 获取目的CIDR。
 * @method void setDestinationCidr(string $DestinationCidr) 设置目的CIDR。
 * @method string getAction() 获取动作，ACCEPT 或 DROP。
 * @method void setAction(string $Action) 设置动作，ACCEPT 或 DROP。
 * @method string getNetworkAclQuintupleEntryId() 获取网络ACL条目唯一ID。
 * @method void setNetworkAclQuintupleEntryId(string $NetworkAclQuintupleEntryId) 设置网络ACL条目唯一ID。
 * @method integer getPriority() 获取优先级，从1开始。
 * @method void setPriority(integer $Priority) 设置优先级，从1开始。
 * @method string getCreateTime() 获取创建时间，用于DescribeNetworkAclQuintupleEntries的出参。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，用于DescribeNetworkAclQuintupleEntries的出参。
 * @method string getNetworkAclDirection() 获取方向，INGRESS或EGRESS，用于DescribeNetworkAclQuintupleEntries的出参。
 * @method void setNetworkAclDirection(string $NetworkAclDirection) 设置方向，INGRESS或EGRESS，用于DescribeNetworkAclQuintupleEntries的出参。
 */
class NetworkAclQuintupleEntry extends AbstractModel
{
    /**
     * @var string 协议, 取值: TCP,UDP, ICMP, ALL。
     */
    public $Protocol;

    /**
     * @var string 描述。
     */
    public $Description;

    /**
     * @var string 源端口(all, 单个port,  range)。当Protocol为ALL或ICMP时，不能指定Port。
     */
    public $SourcePort;

    /**
     * @var string 源CIDR。
     */
    public $SourceCidr;

    /**
     * @var string 目的端口(all, 单个port,  range)。当Protocol为ALL或ICMP时，不能指定Port。
     */
    public $DestinationPort;

    /**
     * @var string 目的CIDR。
     */
    public $DestinationCidr;

    /**
     * @var string 动作，ACCEPT 或 DROP。
     */
    public $Action;

    /**
     * @var string 网络ACL条目唯一ID。
     */
    public $NetworkAclQuintupleEntryId;

    /**
     * @var integer 优先级，从1开始。
     */
    public $Priority;

    /**
     * @var string 创建时间，用于DescribeNetworkAclQuintupleEntries的出参。
     */
    public $CreateTime;

    /**
     * @var string 方向，INGRESS或EGRESS，用于DescribeNetworkAclQuintupleEntries的出参。
     */
    public $NetworkAclDirection;

    /**
     * @param string $Protocol 协议, 取值: TCP,UDP, ICMP, ALL。
     * @param string $Description 描述。
     * @param string $SourcePort 源端口(all, 单个port,  range)。当Protocol为ALL或ICMP时，不能指定Port。
     * @param string $SourceCidr 源CIDR。
     * @param string $DestinationPort 目的端口(all, 单个port,  range)。当Protocol为ALL或ICMP时，不能指定Port。
     * @param string $DestinationCidr 目的CIDR。
     * @param string $Action 动作，ACCEPT 或 DROP。
     * @param string $NetworkAclQuintupleEntryId 网络ACL条目唯一ID。
     * @param integer $Priority 优先级，从1开始。
     * @param string $CreateTime 创建时间，用于DescribeNetworkAclQuintupleEntries的出参。
     * @param string $NetworkAclDirection 方向，INGRESS或EGRESS，用于DescribeNetworkAclQuintupleEntries的出参。
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SourcePort",$param) and $param["SourcePort"] !== null) {
            $this->SourcePort = $param["SourcePort"];
        }

        if (array_key_exists("SourceCidr",$param) and $param["SourceCidr"] !== null) {
            $this->SourceCidr = $param["SourceCidr"];
        }

        if (array_key_exists("DestinationPort",$param) and $param["DestinationPort"] !== null) {
            $this->DestinationPort = $param["DestinationPort"];
        }

        if (array_key_exists("DestinationCidr",$param) and $param["DestinationCidr"] !== null) {
            $this->DestinationCidr = $param["DestinationCidr"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("NetworkAclQuintupleEntryId",$param) and $param["NetworkAclQuintupleEntryId"] !== null) {
            $this->NetworkAclQuintupleEntryId = $param["NetworkAclQuintupleEntryId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("NetworkAclDirection",$param) and $param["NetworkAclDirection"] !== null) {
            $this->NetworkAclDirection = $param["NetworkAclDirection"];
        }
    }
}
