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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频功能描述模型
 *
 * @method integer getId() 获取索引
 * @method void setId(integer $Id) 设置索引
 * @method integer getFeatureId() 获取功能ID
 * @method void setFeatureId(integer $FeatureId) 设置功能ID
 * @method string getName() 获取功能名称
 * @method void setName(string $Name) 设置功能名称
 * @method string getType() 获取功能类型
 * @method void setType(string $Type) 设置功能类型
 * @method boolean getTrial() 获取是否可以申请试用
 * @method void setTrial(boolean $Trial) 设置是否可以申请试用
 * @method integer getTrialCount() 获取可以试用的次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrialCount(integer $TrialCount) 设置可以试用的次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取可以试用的时长，单位天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置可以试用的时长，单位天
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method string getBizType() 获取功能所属业务方
 * @method void setBizType(string $BizType) 设置功能所属业务方
 * @method string getPlatform() 获取平台类型
 * @method void setPlatform(string $Platform) 设置平台类型
 */
class VideoFeature extends AbstractModel
{
    /**
     * @var integer 索引
     */
    public $Id;

    /**
     * @var integer 功能ID
     */
    public $FeatureId;

    /**
     * @var string 功能名称
     */
    public $Name;

    /**
     * @var string 功能类型
     */
    public $Type;

    /**
     * @var boolean 是否可以申请试用
     */
    public $Trial;

    /**
     * @var integer 可以试用的次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrialCount;

    /**
     * @var integer 可以试用的时长，单位天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var string 功能所属业务方
     */
    public $BizType;

    /**
     * @var string 平台类型
     */
    public $Platform;

    /**
     * @param integer $Id 索引
     * @param integer $FeatureId 功能ID
     * @param string $Name 功能名称
     * @param string $Type 功能类型
     * @param boolean $Trial 是否可以申请试用
     * @param integer $TrialCount 可以试用的次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 可以试用的时长，单位天
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
     * @param string $BizType 功能所属业务方
     * @param string $Platform 平台类型
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

        if (array_key_exists("FeatureId",$param) and $param["FeatureId"] !== null) {
            $this->FeatureId = $param["FeatureId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Trial",$param) and $param["Trial"] !== null) {
            $this->Trial = $param["Trial"];
        }

        if (array_key_exists("TrialCount",$param) and $param["TrialCount"] !== null) {
            $this->TrialCount = $param["TrialCount"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }
    }
}
