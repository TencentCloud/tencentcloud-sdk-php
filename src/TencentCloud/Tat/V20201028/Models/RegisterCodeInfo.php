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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 注册码信息。
 *
 * @method string getRegisterCodeId() 获取注册码ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegisterCodeId(string $RegisterCodeId) 设置注册码ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取注册码描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置注册码描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceNamePrefix() 获取注册实例名称前缀。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceNamePrefix(string $InstanceNamePrefix) 设置注册实例名称前缀。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegisterLimit() 获取该注册码允许注册的实列数目。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegisterLimit(integer $RegisterLimit) 设置该注册码允许注册的实列数目。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpiredTime() 获取该注册码的过期时间，按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(string $ExpiredTime) 设置该注册码的过期时间，按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpAddressRange() 获取该注册码限制tat_agent只能从IpAddressRange所描述公网出口进行注册。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpAddressRange(string $IpAddressRange) 设置该注册码限制tat_agent只能从IpAddressRange所描述公网出口进行注册。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnabled() 获取该注册码是否可用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置该注册码是否可用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegisteredCount() 获取该注册码已注册数目。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegisteredCount(integer $RegisteredCount) 设置该注册码已注册数目。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取注册码创建时间，按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置注册码创建时间，按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取注册码最近一次更新时间，按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置注册码最近一次更新时间，按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegisterCodeInfo extends AbstractModel
{
    /**
     * @var string 注册码ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegisterCodeId;

    /**
     * @var string 注册码描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 注册实例名称前缀。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceNamePrefix;

    /**
     * @var integer 该注册码允许注册的实列数目。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegisterLimit;

    /**
     * @var string 该注册码的过期时间，按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @var string 该注册码限制tat_agent只能从IpAddressRange所描述公网出口进行注册。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpAddressRange;

    /**
     * @var boolean 该注册码是否可用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @var integer 该注册码已注册数目。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegisteredCount;

    /**
     * @var string 注册码创建时间，按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 注册码最近一次更新时间，按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @param string $RegisterCodeId 注册码ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 注册码描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceNamePrefix 注册实例名称前缀。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegisterLimit 该注册码允许注册的实列数目。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpiredTime 该注册码的过期时间，按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpAddressRange 该注册码限制tat_agent只能从IpAddressRange所描述公网出口进行注册。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enabled 该注册码是否可用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegisteredCount 该注册码已注册数目。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 注册码创建时间，按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime 注册码最近一次更新时间，按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RegisterCodeId",$param) and $param["RegisterCodeId"] !== null) {
            $this->RegisterCodeId = $param["RegisterCodeId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InstanceNamePrefix",$param) and $param["InstanceNamePrefix"] !== null) {
            $this->InstanceNamePrefix = $param["InstanceNamePrefix"];
        }

        if (array_key_exists("RegisterLimit",$param) and $param["RegisterLimit"] !== null) {
            $this->RegisterLimit = $param["RegisterLimit"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("IpAddressRange",$param) and $param["IpAddressRange"] !== null) {
            $this->IpAddressRange = $param["IpAddressRange"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RegisteredCount",$param) and $param["RegisteredCount"] !== null) {
            $this->RegisteredCount = $param["RegisteredCount"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
