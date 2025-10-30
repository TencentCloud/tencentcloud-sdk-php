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
 * CreateNetAttackWhiteList请求参数结构体
 *
 * @method integer getScope() 获取是否全部主机； 0否，1是。
 * @method void setScope(integer $Scope) 设置是否全部主机； 0否，1是。
 * @method array getSrcIp() 获取来源IP 单IP:1.1.1.1  IP范围:1.1.1.1-1.1.2.1  IP范围：1.1.1.0/24 
 * @method void setSrcIp(array $SrcIp) 设置来源IP 单IP:1.1.1.1  IP范围:1.1.1.1-1.1.2.1  IP范围：1.1.1.0/24 
 * @method array getQuuidList() 获取quuid 列表
 * @method void setQuuidList(array $QuuidList) 设置quuid 列表
 * @method integer getEventId() 获取事件id
 * @method void setEventId(integer $EventId) 设置事件id
 * @method integer getDealOldEvents() 获取是否加白所有符合该规则的告警 ，1:处理,0:不处理
 * @method void setDealOldEvents(integer $DealOldEvents) 设置是否加白所有符合该规则的告警 ，1:处理,0:不处理
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 */
class CreateNetAttackWhiteListRequest extends AbstractModel
{
    /**
     * @var integer 是否全部主机； 0否，1是。
     */
    public $Scope;

    /**
     * @var array 来源IP 单IP:1.1.1.1  IP范围:1.1.1.1-1.1.2.1  IP范围：1.1.1.0/24 
     */
    public $SrcIp;

    /**
     * @var array quuid 列表
     */
    public $QuuidList;

    /**
     * @var integer 事件id
     */
    public $EventId;

    /**
     * @var integer 是否加白所有符合该规则的告警 ，1:处理,0:不处理
     */
    public $DealOldEvents;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @param integer $Scope 是否全部主机； 0否，1是。
     * @param array $SrcIp 来源IP 单IP:1.1.1.1  IP范围:1.1.1.1-1.1.2.1  IP范围：1.1.1.0/24 
     * @param array $QuuidList quuid 列表
     * @param integer $EventId 事件id
     * @param integer $DealOldEvents 是否加白所有符合该规则的告警 ，1:处理,0:不处理
     * @param string $Description 描述
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
