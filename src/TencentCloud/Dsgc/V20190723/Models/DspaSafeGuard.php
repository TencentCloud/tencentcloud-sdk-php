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
 * 分类分级扫描结果字段的保护措施
 *
 * @method string getEncrypt() 获取加密状态，可取值如下：
UNSET 未设置
DISABLE 规则设置未启用
ENABLE 规则设置并启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncrypt(string $Encrypt) 设置加密状态，可取值如下：
UNSET 未设置
DISABLE 规则设置未启用
ENABLE 规则设置并启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesensitization() 获取脱敏状态，可取值如下：
UNSET 未设置
DISABLE 规则设置未启用
ENABLE 规则设置并启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesensitization(string $Desensitization) 设置脱敏状态，可取值如下：
UNSET 未设置
DISABLE 规则设置未启用
ENABLE 规则设置并启用
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaSafeGuard extends AbstractModel
{
    /**
     * @var string 加密状态，可取值如下：
UNSET 未设置
DISABLE 规则设置未启用
ENABLE 规则设置并启用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Encrypt;

    /**
     * @var string 脱敏状态，可取值如下：
UNSET 未设置
DISABLE 规则设置未启用
ENABLE 规则设置并启用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desensitization;

    /**
     * @param string $Encrypt 加密状态，可取值如下：
UNSET 未设置
DISABLE 规则设置未启用
ENABLE 规则设置并启用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desensitization 脱敏状态，可取值如下：
UNSET 未设置
DISABLE 规则设置未启用
ENABLE 规则设置并启用
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
        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("Desensitization",$param) and $param["Desensitization"] !== null) {
            $this->Desensitization = $param["Desensitization"];
        }
    }
}
