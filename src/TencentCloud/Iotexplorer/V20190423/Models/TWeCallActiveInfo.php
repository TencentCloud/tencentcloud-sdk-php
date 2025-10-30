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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeCall设备激活信息
 *
 * @method string getModelId() 获取小程序ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelId(string $ModelId) 设置小程序ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSn() 获取Sn信息
 * @method void setSn(string $Sn) 设置Sn信息
 * @method integer getExpireTime() 获取过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间
 * @method integer getPkgType() 获取类型
 * @method void setPkgType(integer $PkgType) 设置类型
 */
class TWeCallActiveInfo extends AbstractModel
{
    /**
     * @var string 小程序ID
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ModelId;

    /**
     * @var string Sn信息
     */
    public $Sn;

    /**
     * @var integer 过期时间
     */
    public $ExpireTime;

    /**
     * @var integer 类型
     */
    public $PkgType;

    /**
     * @param string $ModelId 小程序ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sn Sn信息
     * @param integer $ExpireTime 过期时间
     * @param integer $PkgType 类型
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("Sn",$param) and $param["Sn"] !== null) {
            $this->Sn = $param["Sn"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("PkgType",$param) and $param["PkgType"] !== null) {
            $this->PkgType = $param["PkgType"];
        }
    }
}
