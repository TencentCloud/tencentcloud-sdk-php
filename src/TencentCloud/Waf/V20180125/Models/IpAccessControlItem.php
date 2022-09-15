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
 * ip黑白名单
 *
 * @method integer getActionType() 获取动作
 * @method void setActionType(integer $ActionType) 设置动作
 * @method string getIp() 获取ip
 * @method void setIp(string $Ip) 设置ip
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 * @method string getSource() 获取来源
 * @method void setSource(string $Source) 设置来源
 * @method integer getTsVersion() 获取更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTsVersion(integer $TsVersion) 设置更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValidTs() 获取有效截止时间戳
 * @method void setValidTs(integer $ValidTs) 设置有效截止时间戳
 */
class IpAccessControlItem extends AbstractModel
{
    /**
     * @var integer 动作
     */
    public $ActionType;

    /**
     * @var string ip
     */
    public $Ip;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @var string 来源
     */
    public $Source;

    /**
     * @var integer 更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TsVersion;

    /**
     * @var integer 有效截止时间戳
     */
    public $ValidTs;

    /**
     * @param integer $ActionType 动作
     * @param string $Ip ip
     * @param string $Note 备注
     * @param string $Source 来源
     * @param integer $TsVersion 更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ValidTs 有效截止时间戳
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
    }
}
