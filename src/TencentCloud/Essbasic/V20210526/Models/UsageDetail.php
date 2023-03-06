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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用量明细
 *
 * @method string getProxyOrganizationOpenId() 获取子客企业唯一标识
 * @method void setProxyOrganizationOpenId(string $ProxyOrganizationOpenId) 设置子客企业唯一标识
 * @method string getProxyOrganizationName() 获取子客企业名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyOrganizationName(string $ProxyOrganizationName) 设置子客企业名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDate() 获取日期，当需要汇总数据时日期为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置日期，当需要汇总数据时日期为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsage() 获取消耗数量
 * @method void setUsage(integer $Usage) 设置消耗数量
 * @method integer getCancel() 获取撤回数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCancel(integer $Cancel) 设置撤回数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowChannel() 获取消耗渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowChannel(string $FlowChannel) 设置消耗渠道
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsageDetail extends AbstractModel
{
    /**
     * @var string 子客企业唯一标识
     */
    public $ProxyOrganizationOpenId;

    /**
     * @var string 子客企业名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyOrganizationName;

    /**
     * @var string 日期，当需要汇总数据时日期为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var integer 消耗数量
     */
    public $Usage;

    /**
     * @var integer 撤回数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cancel;

    /**
     * @var string 消耗渠道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowChannel;

    /**
     * @param string $ProxyOrganizationOpenId 子客企业唯一标识
     * @param string $ProxyOrganizationName 子客企业名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Date 日期，当需要汇总数据时日期为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Usage 消耗数量
     * @param integer $Cancel 撤回数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowChannel 消耗渠道
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
        if (array_key_exists("ProxyOrganizationOpenId",$param) and $param["ProxyOrganizationOpenId"] !== null) {
            $this->ProxyOrganizationOpenId = $param["ProxyOrganizationOpenId"];
        }

        if (array_key_exists("ProxyOrganizationName",$param) and $param["ProxyOrganizationName"] !== null) {
            $this->ProxyOrganizationName = $param["ProxyOrganizationName"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("Cancel",$param) and $param["Cancel"] !== null) {
            $this->Cancel = $param["Cancel"];
        }

        if (array_key_exists("FlowChannel",$param) and $param["FlowChannel"] !== null) {
            $this->FlowChannel = $param["FlowChannel"];
        }
    }
}
