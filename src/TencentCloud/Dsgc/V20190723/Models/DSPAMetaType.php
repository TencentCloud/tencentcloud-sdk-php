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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 元数据类型
 *
 * @method string getMetaType() 获取元数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaType(string $MetaType) 设置元数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRegions() 获取支持的此元数据类型的地域列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegions(array $Regions) 设置支持的此元数据类型的地域列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSupportedAuthTypes() 获取此元数据类型支持的授权类型：
account    -- 账户名密码授权，账户的最高只读权限需要由用户自行赋予；
automatic -- 一键授权，由DSPA自动生成账户名密码并自动在实例中给账户名赋予最高只读权限；
如果此列表为空，表明此类资源不支持以上的授权机制，无法通过后台进行授权。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportedAuthTypes(array $SupportedAuthTypes) 设置此元数据类型支持的授权类型：
account    -- 账户名密码授权，账户的最高只读权限需要由用户自行赋予；
automatic -- 一键授权，由DSPA自动生成账户名密码并自动在实例中给账户名赋予最高只读权限；
如果此列表为空，表明此类资源不支持以上的授权机制，无法通过后台进行授权。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DSPAMetaType extends AbstractModel
{
    /**
     * @var string 元数据类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaType;

    /**
     * @var array 支持的此元数据类型的地域列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Regions;

    /**
     * @var array 此元数据类型支持的授权类型：
account    -- 账户名密码授权，账户的最高只读权限需要由用户自行赋予；
automatic -- 一键授权，由DSPA自动生成账户名密码并自动在实例中给账户名赋予最高只读权限；
如果此列表为空，表明此类资源不支持以上的授权机制，无法通过后台进行授权。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportedAuthTypes;

    /**
     * @param string $MetaType 元数据类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Regions 支持的此元数据类型的地域列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SupportedAuthTypes 此元数据类型支持的授权类型：
account    -- 账户名密码授权，账户的最高只读权限需要由用户自行赋予；
automatic -- 一键授权，由DSPA自动生成账户名密码并自动在实例中给账户名赋予最高只读权限；
如果此列表为空，表明此类资源不支持以上的授权机制，无法通过后台进行授权。
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
        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }

        if (array_key_exists("SupportedAuthTypes",$param) and $param["SupportedAuthTypes"] !== null) {
            $this->SupportedAuthTypes = $param["SupportedAuthTypes"];
        }
    }
}
