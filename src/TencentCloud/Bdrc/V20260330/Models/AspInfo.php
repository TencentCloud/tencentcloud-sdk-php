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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份的执行策略信息
 *
 * @method string getAspId() 获取备份策略ID
 * @method void setAspId(string $AspId) 设置备份策略ID
 * @method string getAspName() 获取备份策略名称
 * @method void setAspName(string $AspName) 设置备份策略名称
 * @method string getAspState() 获取备份策略状态
 * @method void setAspState(string $AspState) 设置备份策略状态
 * @method array getPolicy() 获取备份策略执行详情
 * @method void setPolicy(array $Policy) 设置备份策略执行详情
 * @method boolean getIsActivated() 获取备份策略是否使能
 * @method void setIsActivated(boolean $IsActivated) 设置备份策略是否使能
 * @method boolean getIsPermanent() 获取是否永久保留
 * @method void setIsPermanent(boolean $IsPermanent) 设置是否永久保留
 * @method integer getRetentionDays() 获取保留时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionDays(integer $RetentionDays) 设置保留时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class AspInfo extends AbstractModel
{
    /**
     * @var string 备份策略ID
     */
    public $AspId;

    /**
     * @var string 备份策略名称
     */
    public $AspName;

    /**
     * @var string 备份策略状态
     */
    public $AspState;

    /**
     * @var array 备份策略执行详情
     */
    public $Policy;

    /**
     * @var boolean 备份策略是否使能
     */
    public $IsActivated;

    /**
     * @var boolean 是否永久保留
     */
    public $IsPermanent;

    /**
     * @var integer 保留时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionDays;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $AspId 备份策略ID
     * @param string $AspName 备份策略名称
     * @param string $AspState 备份策略状态
     * @param array $Policy 备份策略执行详情
     * @param boolean $IsActivated 备份策略是否使能
     * @param boolean $IsPermanent 是否永久保留
     * @param integer $RetentionDays 保留时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("AspId",$param) and $param["AspId"] !== null) {
            $this->AspId = $param["AspId"];
        }

        if (array_key_exists("AspName",$param) and $param["AspName"] !== null) {
            $this->AspName = $param["AspName"];
        }

        if (array_key_exists("AspState",$param) and $param["AspState"] !== null) {
            $this->AspState = $param["AspState"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = [];
            foreach ($param["Policy"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->Policy, $obj);
            }
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
