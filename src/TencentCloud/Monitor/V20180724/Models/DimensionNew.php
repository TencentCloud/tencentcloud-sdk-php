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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略类型的维度信息
 *
 * @method string getKey() 获取维度 key 标示，后台英文名
 * @method void setKey(string $Key) 设置维度 key 标示，后台英文名
 * @method string getName() 获取维度 key 名称，中英文前台展示名
 * @method void setName(string $Name) 设置维度 key 名称，中英文前台展示名
 * @method boolean getIsRequired() 获取是否必选
 * @method void setIsRequired(boolean $IsRequired) 设置是否必选
 * @method array getOperators() 获取支持的操作符列表
 * @method void setOperators(array $Operators) 设置支持的操作符列表
 * @method boolean getIsMultiple() 获取是否支持多选
 * @method void setIsMultiple(boolean $IsMultiple) 设置是否支持多选
 * @method boolean getIsMutable() 获取创建后是否可以修改
 * @method void setIsMutable(boolean $IsMutable) 设置创建后是否可以修改
 * @method boolean getIsVisible() 获取是否展示给用户
 * @method void setIsVisible(boolean $IsVisible) 设置是否展示给用户
 * @method boolean getCanFilterPolicy() 获取能否用来过滤策略列表
 * @method void setCanFilterPolicy(boolean $CanFilterPolicy) 设置能否用来过滤策略列表
 * @method boolean getCanFilterHistory() 获取能否用来过滤告警历史
 * @method void setCanFilterHistory(boolean $CanFilterHistory) 设置能否用来过滤告警历史
 * @method boolean getCanGroupBy() 获取能否作为聚合维度
 * @method void setCanGroupBy(boolean $CanGroupBy) 设置能否作为聚合维度
 * @method boolean getMustGroupBy() 获取是否必须作为聚合维度
 * @method void setMustGroupBy(boolean $MustGroupBy) 设置是否必须作为聚合维度
 * @method string getShowValueReplace() 获取前端翻译要替换的 key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowValueReplace(string $ShowValueReplace) 设置前端翻译要替换的 key
注意：此字段可能返回 null，表示取不到有效值。
 */
class DimensionNew extends AbstractModel
{
    /**
     * @var string 维度 key 标示，后台英文名
     */
    public $Key;

    /**
     * @var string 维度 key 名称，中英文前台展示名
     */
    public $Name;

    /**
     * @var boolean 是否必选
     */
    public $IsRequired;

    /**
     * @var array 支持的操作符列表
     */
    public $Operators;

    /**
     * @var boolean 是否支持多选
     */
    public $IsMultiple;

    /**
     * @var boolean 创建后是否可以修改
     */
    public $IsMutable;

    /**
     * @var boolean 是否展示给用户
     */
    public $IsVisible;

    /**
     * @var boolean 能否用来过滤策略列表
     */
    public $CanFilterPolicy;

    /**
     * @var boolean 能否用来过滤告警历史
     */
    public $CanFilterHistory;

    /**
     * @var boolean 能否作为聚合维度
     */
    public $CanGroupBy;

    /**
     * @var boolean 是否必须作为聚合维度
     */
    public $MustGroupBy;

    /**
     * @var string 前端翻译要替换的 key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowValueReplace;

    /**
     * @param string $Key 维度 key 标示，后台英文名
     * @param string $Name 维度 key 名称，中英文前台展示名
     * @param boolean $IsRequired 是否必选
     * @param array $Operators 支持的操作符列表
     * @param boolean $IsMultiple 是否支持多选
     * @param boolean $IsMutable 创建后是否可以修改
     * @param boolean $IsVisible 是否展示给用户
     * @param boolean $CanFilterPolicy 能否用来过滤策略列表
     * @param boolean $CanFilterHistory 能否用来过滤告警历史
     * @param boolean $CanGroupBy 能否作为聚合维度
     * @param boolean $MustGroupBy 是否必须作为聚合维度
     * @param string $ShowValueReplace 前端翻译要替换的 key
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }

        if (array_key_exists("Operators",$param) and $param["Operators"] !== null) {
            $this->Operators = [];
            foreach ($param["Operators"] as $key => $value){
                $obj = new Operator();
                $obj->deserialize($value);
                array_push($this->Operators, $obj);
            }
        }

        if (array_key_exists("IsMultiple",$param) and $param["IsMultiple"] !== null) {
            $this->IsMultiple = $param["IsMultiple"];
        }

        if (array_key_exists("IsMutable",$param) and $param["IsMutable"] !== null) {
            $this->IsMutable = $param["IsMutable"];
        }

        if (array_key_exists("IsVisible",$param) and $param["IsVisible"] !== null) {
            $this->IsVisible = $param["IsVisible"];
        }

        if (array_key_exists("CanFilterPolicy",$param) and $param["CanFilterPolicy"] !== null) {
            $this->CanFilterPolicy = $param["CanFilterPolicy"];
        }

        if (array_key_exists("CanFilterHistory",$param) and $param["CanFilterHistory"] !== null) {
            $this->CanFilterHistory = $param["CanFilterHistory"];
        }

        if (array_key_exists("CanGroupBy",$param) and $param["CanGroupBy"] !== null) {
            $this->CanGroupBy = $param["CanGroupBy"];
        }

        if (array_key_exists("MustGroupBy",$param) and $param["MustGroupBy"] !== null) {
            $this->MustGroupBy = $param["MustGroupBy"];
        }

        if (array_key_exists("ShowValueReplace",$param) and $param["ShowValueReplace"] !== null) {
            $this->ShowValueReplace = $param["ShowValueReplace"];
        }
    }
}
