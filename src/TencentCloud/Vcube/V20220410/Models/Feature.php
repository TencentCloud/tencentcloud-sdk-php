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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 功能描述模型
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
 * @method void setTrialCount(integer $TrialCount) 设置可以试用的次数
 * @method integer getDuration() 获取可以试用的时长，单位天
 * @method void setDuration(integer $Duration) 设置可以试用的时长，单位天
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 */
class Feature extends AbstractModel
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
     */
    public $TrialCount;

    /**
     * @var integer 可以试用的时长，单位天
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
     * @param integer $Id 索引
     * @param integer $FeatureId 功能ID
     * @param string $Name 功能名称
     * @param string $Type 功能类型
     * @param boolean $Trial 是否可以申请试用
     * @param integer $TrialCount 可以试用的次数
     * @param integer $Duration 可以试用的时长，单位天
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
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
    }
}
