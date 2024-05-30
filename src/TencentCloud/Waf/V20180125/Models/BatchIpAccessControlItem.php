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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量多域名黑白名单列表Ip
 *
 * @method string getId() 获取mongo表自增Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置mongo表自增Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActionType() 获取黑名单42或白名单40
 * @method void setActionType(integer $ActionType) 设置黑名单42或白名单40
 * @method string getIp() 获取黑白名单的IP
 * @method void setIp(string $Ip) 设置黑白名单的IP
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 * @method string getSource() 获取添加路径
 * @method void setSource(string $Source) 设置添加路径
 * @method integer getTsVersion() 获取修改时间
 * @method void setTsVersion(integer $TsVersion) 设置修改时间
 * @method integer getValidTs() 获取超时时间
 * @method void setValidTs(integer $ValidTs) 设置超时时间
 * @method array getHosts() 获取域名列表
 * @method void setHosts(array $Hosts) 设置域名列表
 * @method integer getRuleId() 获取55101145
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置55101145
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIpList() 获取IP列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpList(array $IpList) 设置IP列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchIpAccessControlItem extends AbstractModel
{
    /**
     * @var string mongo表自增Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 黑名单42或白名单40
     */
    public $ActionType;

    /**
     * @var string 黑白名单的IP
     */
    public $Ip;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @var string 添加路径
     */
    public $Source;

    /**
     * @var integer 修改时间
     */
    public $TsVersion;

    /**
     * @var integer 超时时间
     */
    public $ValidTs;

    /**
     * @var array 域名列表
     */
    public $Hosts;

    /**
     * @var integer 55101145
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var array IP列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpList;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param string $Id mongo表自增Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActionType 黑名单42或白名单40
     * @param string $Ip 黑白名单的IP
     * @param string $Note 备注
     * @param string $Source 添加路径
     * @param integer $TsVersion 修改时间
     * @param integer $ValidTs 超时时间
     * @param array $Hosts 域名列表
     * @param integer $RuleId 55101145
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IpList IP列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TsVersion",$param) and $param["TsVersion"] !== null) {
            $this->TsVersion = $param["TsVersion"];
        }

        if (array_key_exists("ValidTs",$param) and $param["ValidTs"] !== null) {
            $this->ValidTs = $param["ValidTs"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
