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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略类型的维度信息
 *
 * @method string getKey() 获取<p>维度 key 标示，后台英文名</p>
 * @method void setKey(string $Key) 设置<p>维度 key 标示，后台英文名</p>
 * @method string getName() 获取<p>维度 key 名称，中英文前台展示名</p>
 * @method void setName(string $Name) 设置<p>维度 key 名称，中英文前台展示名</p>
 * @method boolean getIsRequired() 获取<p>是否必选</p>
 * @method void setIsRequired(boolean $IsRequired) 设置<p>是否必选</p>
 * @method array getOperators() 获取<p>支持的操作符列表</p>
 * @method void setOperators(array $Operators) 设置<p>支持的操作符列表</p>
 * @method boolean getIsMultiple() 获取<p>是否支持多选</p>
 * @method void setIsMultiple(boolean $IsMultiple) 设置<p>是否支持多选</p>
 * @method boolean getIsMutable() 获取<p>创建后是否可以修改</p>
 * @method void setIsMutable(boolean $IsMutable) 设置<p>创建后是否可以修改</p>
 * @method boolean getIsVisible() 获取<p>是否展示给用户</p>
 * @method void setIsVisible(boolean $IsVisible) 设置<p>是否展示给用户</p>
 * @method boolean getCanFilterPolicy() 获取<p>能否用来过滤策略列表</p>
 * @method void setCanFilterPolicy(boolean $CanFilterPolicy) 设置<p>能否用来过滤策略列表</p>
 * @method boolean getCanFilterHistory() 获取<p>能否用来过滤告警历史</p>
 * @method void setCanFilterHistory(boolean $CanFilterHistory) 设置<p>能否用来过滤告警历史</p>
 * @method boolean getCanGroupBy() 获取<p>能否作为聚合维度</p>
 * @method void setCanGroupBy(boolean $CanGroupBy) 设置<p>能否作为聚合维度</p>
 * @method boolean getMustGroupBy() 获取<p>是否必须作为聚合维度</p>
 * @method void setMustGroupBy(boolean $MustGroupBy) 设置<p>是否必须作为聚合维度</p>
 * @method string getShowValueReplace() 获取<p>前端翻译要替换的 key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowValueReplace(string $ShowValueReplace) 设置<p>前端翻译要替换的 key</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DimensionNew extends AbstractModel
{
    /**
     * @var string <p>维度 key 标示，后台英文名</p>
     */
    public $Key;

    /**
     * @var string <p>维度 key 名称，中英文前台展示名</p>
     */
    public $Name;

    /**
     * @var boolean <p>是否必选</p>
     */
    public $IsRequired;

    /**
     * @var array <p>支持的操作符列表</p>
     */
    public $Operators;

    /**
     * @var boolean <p>是否支持多选</p>
     */
    public $IsMultiple;

    /**
     * @var boolean <p>创建后是否可以修改</p>
     */
    public $IsMutable;

    /**
     * @var boolean <p>是否展示给用户</p>
     */
    public $IsVisible;

    /**
     * @var boolean <p>能否用来过滤策略列表</p>
     */
    public $CanFilterPolicy;

    /**
     * @var boolean <p>能否用来过滤告警历史</p>
     */
    public $CanFilterHistory;

    /**
     * @var boolean <p>能否作为聚合维度</p>
     */
    public $CanGroupBy;

    /**
     * @var boolean <p>是否必须作为聚合维度</p>
     */
    public $MustGroupBy;

    /**
     * @var string <p>前端翻译要替换的 key</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowValueReplace;

    /**
     * @param string $Key <p>维度 key 标示，后台英文名</p>
     * @param string $Name <p>维度 key 名称，中英文前台展示名</p>
     * @param boolean $IsRequired <p>是否必选</p>
     * @param array $Operators <p>支持的操作符列表</p>
     * @param boolean $IsMultiple <p>是否支持多选</p>
     * @param boolean $IsMutable <p>创建后是否可以修改</p>
     * @param boolean $IsVisible <p>是否展示给用户</p>
     * @param boolean $CanFilterPolicy <p>能否用来过滤策略列表</p>
     * @param boolean $CanFilterHistory <p>能否用来过滤告警历史</p>
     * @param boolean $CanGroupBy <p>能否作为聚合维度</p>
     * @param boolean $MustGroupBy <p>是否必须作为聚合维度</p>
     * @param string $ShowValueReplace <p>前端翻译要替换的 key</p>
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
