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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络攻击白名单规则
 *
 * @method integer getId() 获取规则id
 * @method void setId(integer $Id) 设置规则id
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method integer getScope() 获取0: 一组quuid 1: 所有主机
 * @method void setScope(integer $Scope) 设置0: 一组quuid 1: 所有主机
 * @method integer getDealOldEvents() 获取是否处理之前的事件 0: 不处理 1:处理
 * @method void setDealOldEvents(integer $DealOldEvents) 设置是否处理之前的事件 0: 不处理 1:处理
 * @method string getQuuids() 获取主机quuid 多个用;隔开
 * @method void setQuuids(string $Quuids) 设置主机quuid 多个用;隔开
 * @method string getSrcIP() 获取来源IP 单IP:1.1.1.1  IP范围:1.1.1.1-1.1.2.1  IP范围：1.1.1.0/24 多个用;隔开
 * @method void setSrcIP(string $SrcIP) 设置来源IP 单IP:1.1.1.1  IP范围:1.1.1.1-1.1.2.1  IP范围：1.1.1.0/24 多个用;隔开
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 */
class NetAttackWhiteRule extends AbstractModel
{
    /**
     * @var integer 规则id
     */
    public $Id;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var integer 0: 一组quuid 1: 所有主机
     */
    public $Scope;

    /**
     * @var integer 是否处理之前的事件 0: 不处理 1:处理
     */
    public $DealOldEvents;

    /**
     * @var string 主机quuid 多个用;隔开
     */
    public $Quuids;

    /**
     * @var string 来源IP 单IP:1.1.1.1  IP范围:1.1.1.1-1.1.2.1  IP范围：1.1.1.0/24 多个用;隔开
     */
    public $SrcIP;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @param integer $Id 规则id
     * @param string $Description 规则描述
     * @param integer $Scope 0: 一组quuid 1: 所有主机
     * @param integer $DealOldEvents 是否处理之前的事件 0: 不处理 1:处理
     * @param string $Quuids 主机quuid 多个用;隔开
     * @param string $SrcIP 来源IP 单IP:1.1.1.1  IP范围:1.1.1.1-1.1.2.1  IP范围：1.1.1.0/24 多个用;隔开
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
